<?php

use function Livewire\Volt\{state, on};

state([
    'selectedInvoiceId' => null,
    'payAmount' => '',
    'paymentDate' => now()->format('Y-m-d'),
    'paymentMethod' => 'Bank Transfer (BCA)',
    'refNumber' => '',
    'paymentNotes' => '',

    // 1. Perbaikan: Berikan nilai awal default null agar tidak error syntax array
    'currentInvoice' => null,
]);

// 2. Perbaikan: Merapikan pembungkusan fungsi anonim listener dan mapping ke state ($this)
on(['open-modal' => function($id = null) {
    $this->currentInvoice = \App\Models\Invoice::with('payments')->find($id);
    $this->selectedInvoiceId = $id;
}]);

$submit = function () {
    if (!$this->selectedInvoiceId || empty($this->payAmount)) return;

    $invoice = \App\Models\Invoice::with('payments')->findOrFail($this->selectedInvoiceId);
    $inputDana = (int) str_replace('.', '', $this->payAmount);

    $sudahDibayarLalu = $invoice->payments->sum('amount');
    $totalAkumulasiSkg = $sudahDibayarLalu + $inputDana;

    if ($totalAkumulasiSkg > $invoice->amount) {
        $this->dispatch('toast', message: "Gagal: Nominal cicilan melebihi sisa tagihan!", type: "danger");
        return;
    }

    \App\Models\InvoicePayment::create([
        'invoice_id' => $invoice->id,
        'amount' => $inputDana,
        'payment_date' => $this->paymentDate,
        'payment_method' => $this->paymentMethod,
        'reference_number' => $this->refNumber,
        'notes' => $this->paymentNotes,
    ]);

    $status = 'partial';
    if ($totalAkumulasiSkg === $invoice->amount) {
        $status = 'paid';
    }

    $invoice->update([
        'amount_paid' => $totalAkumulasiSkg,
        'status' => $status
    ]);

    // Tutup modal secara instan
    $this->dispatch('close-modal', name: 'modal-payment');

    // 3. Perbaikan: Lempar event ke parent component untuk memicu refresh kalkulasi totalBilled dll
    $this->dispatch('invoice-updated');

    // Reset memori state form
    $this->selectedInvoiceId = null;
    $this->currentInvoice = null;
    $this->dispatch('toast', message: "Pembayaran cicilan berhasil dibukukan", type: "success");
};

?>

<form wire:submit="submit" class="p-5 space-y-4">
    {{-- 4. Perbaikan: Menggunakan null-safe operator (?->) agar Blade tidak crash saat data belum dipilih --}}
    <div class="p-3 bg-blue-50/50 dark:bg-blue-950/20 border border-blue-100 dark:border-blue-900/50 rounded-xl text-xs space-y-1">
        <p class="text-gray-400 font-medium">Nomor Invoice: <span class="font-mono font-bold text-gray-700 dark:text-gray-300">{{ $currentInvoice->invoice_number ?? '-' }}</span></p>
        <p class="text-gray-400 font-medium">Sisa Plafon Piutang:
            <span class="font-bold text-red-500 font-mono">
                IDR {{ number_format(($currentInvoice?->amount ?? 0) - ($currentInvoice?->payments?->sum('amount') ?? 0), 0, ',', '.') }}
            </span>
        </p>
    </div>

    <div>
        <label class="block text-[11px] font-bold text-gray-400 uppercase tracking-wider mb-1">Nominal Setoran (IDR)</label>
        <input type="text" wire:model="payAmount" x-data x-mask:dynamic="$money($input, '.', '')" placeholder="IDR 1.000.000" class="form-input w-full h-10 rounded-xl border-gray-200 bg-gray-50 dark:bg-gray-900 font-black text-sm text-gray-800 dark:text-gray-200 focus:border-blue-500" required>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
        <div>
            <label class="block text-[11px] font-bold text-gray-400 uppercase tracking-wider mb-1">Tanggal Transfer</label>
            <input type="date" wire:model="paymentDate" class="form-input w-full h-10 text-xs rounded-xl border-gray-200 bg-gray-50 dark:bg-gray-900 focus:border-blue-500" required>
        </div>
        <div>
            <label class="block text-[11px] font-bold text-gray-400 uppercase tracking-wider mb-1">Metode Pembayaran</label>
            <select wire:model="paymentMethod" class="form-input w-full h-10 text-xs rounded-xl border-gray-200 bg-gray-50 dark:bg-gray-900 focus:border-blue-500 font-bold">
                <option value="Bank Transfer (BCA)">Transfer Bank BCA</option>
                <option value="Bank Transfer (Mandiri)">Transfer Bank Mandiri</option>
                <option value="Bank Transfer (BNI)">Transfer Bank BNI</option>
                <option value="Cash / Tunai">Uang Tunai / Cash</option>
                <option value="Payment Gateway">Payment Gateway / QRIS</option>
            </select>
        </div>
    </div>

    <div>
        <label class="block text-[11px] font-bold text-gray-400 uppercase tracking-wider mb-1">No. Kode Referensi / Resi Transfer Bank</label>
        <input type="text" wire:model="refNumber" placeholder="Contoh: TRF-BCA-9831" class="form-input w-full h-10 rounded-xl border-gray-200 bg-gray-50 dark:bg-gray-900 focus:border-blue-500 font-mono text-xs">
    </div>

    <div>
        <label class="block text-[11px] font-bold text-gray-400 uppercase tracking-wider mb-1">Catatan Setoran Pembayaran (Opsional)</label>
        <textarea wire:model="paymentNotes" rows="2" placeholder="Catatan opsional (Contoh: Cicilan dibawa oleh PM)" class="form-input w-full text-xs rounded-xl border-gray-200 bg-gray-50 dark:bg-gray-900 focus:border-blue-500"></textarea>
    </div>

    <x-form.modal-button/>
</form>
