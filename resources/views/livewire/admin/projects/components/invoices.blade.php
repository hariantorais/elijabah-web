<?php

use function Livewire\Volt\{state, computed, mount};
use App\Models\Invoice;
use App\Models\InvoicePayment;

state([
    'projectId' => null,

    'expandedInvoiceId' => null,
    'totalBilled' => 0,
    'totalPaid' => 0,
    'totalUnpaid' => 0,
]);

// Fungsi Rekalkulasi Neraca Kas Proyek Berbasis Data Riil Jurnal
$refreshFinanceStats = function () {
    $invoices = Invoice::where('project_id', $this->projectId)->where('status', '!=', 'cancelled')->get();

    $this->totalBilled = $invoices->sum('amount');
    $this->totalPaid = InvoicePayment::whereIn('invoice_id', $invoices->pluck('id'))->sum('amount');
    $this->totalUnpaid = $this->totalBilled - $this->totalPaid;
};

mount(function ($projectId) {
    $this->projectId = $projectId;
    $this->paymentDate = now()->format('Y-m-d');
    $this->refreshFinanceStats();
});

$invoices = computed(function () {
    return Invoice::with('payments')->where('project_id', $this->projectId)->orderBy('invoice_number', 'asc')->get();
});

// Setup data modal sesaat sebelum jendela di-pop up admin


?>

<div class="space-y-6"
     x-data="{
        isExporting: false,
        exportInvoiceToImage(elementId, invoiceNumber) {
            this.isExporting = true;
            const element = document.getElementById(elementId);

            if (!element) {
                alert('Template invoice gagal dimuat.');
                this.isExporting = false;
                return;
            }

            // Engine konversi DOM HTML ke Kanvas Gambar Jernih HD (Scale 2)
            html2canvas(element, {
                scale: 2,
                useCORS: true,
                backgroundColor: '#ffffff',
                logging: false
            }).then(canvas => {
                const link = document.createElement('a');
                link.download = `STRUK-${invoiceNumber}.png`;
                link.href = canvas.toDataURL('image/png');

                document.body.appendChild(link);
                link.click();
                document.body.removeChild(link);

                this.isExporting = false;
            }).catch(err => {
                console.error(err);
                this.isExporting = false;
            });
        }
     }">

    {{-- Memuat engine html2canvas secara asinkron --}}

    {{-- KLASTER 1: WIDGET NERACA FINANSIAL DASBOR KONTRAK --}}
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
        <div
            class="bg-white dark:bg-gray-800 rounded-2xl border border-gray-100 dark:border-gray-700 shadow-sm p-5 flex items-center gap-4">
            <div
                class="h-11 w-11 rounded-xl bg-blue-500/10 text-blue-600 flex items-center justify-center text-2xl flex-shrink-0">
                <i class="ri-bank-card-line"></i>
            </div>
            <div class="min-w-0">
                <p class="text-[10px] font-bold text-gray-400 uppercase tracking-wider">Total Nilai Kontrak</p>
                <p class="text-base font-black text-gray-900 dark:text-white truncate">
                    IDR {{ number_format($totalBilled, 0, ',', '.') }}</p>
            </div>
        </div>

        <div
            class="bg-white dark:bg-gray-800 rounded-2xl border border-gray-100 dark:border-gray-700 shadow-sm p-5 flex items-center gap-4">
            <div
                class="h-11 w-11 rounded-xl bg-emerald-500/10 text-emerald-600 flex items-center justify-center text-2xl flex-shrink-0">
                <i class="ri-checkbox-circle-line"></i>
            </div>
            <div class="min-w-0">
                <p class="text-[10px] font-bold text-gray-400 uppercase tracking-wider">Dana Masuk (Cash In)</p>
                <p class="text-base font-black text-emerald-600 dark:text-emerald-400 truncate">
                    IDR {{ number_format($totalPaid, 0, ',', '.') }}</p>
            </div>
        </div>

        <div
            class="bg-white dark:bg-gray-800 rounded-2xl border border-gray-100 dark:border-gray-700 shadow-sm p-5 flex items-center gap-4">
            <div
                class="h-11 w-11 rounded-xl bg-red-500/10 text-red-600 flex items-center justify-center text-2xl flex-shrink-0">
                <i class="ri-error-warning-line"></i>
            </div>
            <div class="min-w-0">
                <p class="text-[10px] font-bold text-gray-400 uppercase tracking-wider">Sisa Piutang Kontrak</p>
                <p class="text-base font-black text-red-600 dark:text-red-500 truncate">
                    IDR {{ number_format($totalUnpaid, 0, ',', '.') }}</p>
            </div>
        </div>
    </div>

    {{-- KLASTER 2: TABEL KONTROL TRANSAKSI UTAMA --}}
    <div
        class="bg-white dark:bg-gray-800 rounded-2xl border border-gray-100 dark:border-gray-700 shadow-sm overflow-hidden">
        <div class="px-5 py-4 border-b border-gray-100 dark:border-gray-700/50 bg-gray-50/50 dark:bg-gray-800/50">
            <h3 class="font-bold text-gray-800 dark:text-gray-200 text-sm">Buku Kontrol Tagihan & Riwayat Transaksi</h3>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                <tr class="border-b border-gray-100 dark:border-gray-700 text-[11px] font-extrabold text-gray-400 uppercase tracking-wider bg-gray-50/20">
                    <th class="px-5 py-3">Dokumen Tagihan</th>
                    <th class="px-5 py-3">Target Nilai</th>
                    <th class="px-5 py-3">Sisa Piutang</th>
                    <th class="px-5 py-3">Status</th>
                    <th class="px-5 py-3 text-end">Kelola Finansial</th>
                </tr>
                </thead>
                <tbody class="divide-y divide-gray-50 dark:divide-gray-700/50 text-xs">
                @forelse($this->invoices as $invoice)
                    <tr wire:key="inv-{{ $invoice->id }}"
                        class="hover:bg-gray-50/30 dark:hover:bg-gray-700/5 transition-colors group">
                        <td class="px-5 py-4">
                            <div
                                class="font-mono font-bold text-gray-900 dark:text-white">{{ $invoice->invoice_number }}</div>
                            <div class="text-gray-400 font-medium mt-0.5">{{ $invoice->title }}</div>

                            {{-- PANEL TOGGLE COLLAPSE LOG DETIL CICILAN --}}
                            <button
                                @click="activeId === {{ $invoice->id }} ? activeId = null : activeId = {{ $invoice->id }}"
                                x-data="{ activeId: $wire.entangle('expandedInvoiceId') }"
                                class="text-[11px] text-blue-600 dark:text-blue-400 font-bold hover:underline flex items-center gap-1 mt-1.5 transition-all">
                                <i :class="activeId === {{ $invoice->id }} ? 'ri-arrow-up-s-line' : 'ri-arrow-down-s-line'"></i>
                                Lihat Riwayat Cicilan ({{ $invoice->payments->count() }})
                            </button>
                        </td>
                        <td class="px-5 py-4 font-bold text-gray-800 dark:text-gray-200">
                            IDR {{ number_format($invoice->amount, 0, ',', '.') }}
                        </td>
                        <td class="px-5 py-4 font-bold text-red-500">
                            IDR {{ number_format($invoice->amount - $invoice->payments->sum('amount'), 0, ',', '.') }}
                        </td>
                        <td class="px-5 py-4">
                            @if($invoice->status === 'paid')
                                <span
                                    class="inline-flex px-2 py-0.5 rounded-full bg-green-100 text-green-700 font-bold text-[9px] uppercase border border-green-200">Lunas</span>
                            @elseif($invoice->status === 'partial')
                                <span
                                    class="inline-flex px-2 py-0.5 rounded-full bg-blue-100 text-blue-700 font-bold text-[9px] uppercase border border-blue-200">Dicicil</span>
                            @elseif($invoice->status === 'unpaid')
                                <span
                                    class="inline-flex px-2 py-0.5 rounded-full bg-amber-100 text-amber-700 font-bold text-[9px] uppercase border border-amber-200">Belum Bayar</span>
                            @elseif($invoice->status === 'cancelled')
                                <span
                                    class="inline-flex px-2 py-0.5 rounded-full bg-gray-100 text-gray-500 font-bold text-[9px] uppercase">Batal</span>
                            @endif
                        </td>
                        <td class="px-5 py-4 text-end">
                            <div class="inline-flex items-center gap-1.5">
                                {{-- BUTTON EXPORT VISUAL NOTA PNG VIA ALPINE JS --}}
                                <button
                                    @click="exportInvoiceToImage('invoice-card-{{ $invoice->id }}', '{{ $invoice->invoice_number }}')"
                                    :disabled="isExporting"
                                    class="p-1.5 bg-gray-100 hover:bg-gray-200 text-gray-600 dark:bg-gray-700 dark:text-gray-300 dark:hover:bg-gray-600 rounded-lg transition-all flex items-center gap-1 font-semibold text-[11px]">
                                    <i class="ri-image-line text-xs"></i>
                                    <span x-text="isExporting ? 'Proses...' : 'Lap. Visual'"></span>
                                </button>

                                @if(in_array($invoice->status, ['unpaid', 'partial']))
                                    <button
                                        @click="$dispatch('open-modal', {name: 'modal-payment', id: '{{$invoice->id}}'})"
                                        class="btn bg-primary btn-sm text-white">
                                        <i class="ri-coins-line"></i> Bayar
                                    </button>
                                @endif
                            </div>
                        </td>
                    </tr>

                    {{-- SUB-ROW JURNAL AUDIT TRAIL DATA TRANSKASI MASUK KLIEN --}}
                    <tr wire:key="payments-for-{{ $invoice->id }}"
                        x-show="$wire.expandedInvoiceId === {{ $invoice->id }}" x-cloak x-collapse>
                        <td colspan="5" class="px-6 py-4 bg-gray-50/50 dark:bg-gray-900/40 border-l-4 border-blue-500">
                            <div class="space-y-2">
                                @forelse($invoice->payments as $index => $payment)
                                    <div
                                        class="flex items-center justify-between p-3 bg-white dark:bg-gray-800 border border-gray-100 dark:border-gray-700 rounded-xl shadow-xs">
                                        <div class="space-y-0.5">
                                            <p class="font-bold text-gray-800 dark:text-gray-200 text-xs">Setoran
                                                Ke-{{ $index + 1 }} — <span
                                                    class="text-emerald-600">IDR {{ number_format($payment->amount, 0, ',', '.') }}</span>
                                            </p>
                                            <p class="text-[11px] text-gray-400 font-medium">
                                                Via: <span
                                                    class="text-gray-600 dark:text-gray-300 font-bold">{{ $payment->payment_method }}</span>
                                                @if($payment->reference_number)
                                                    | Resi Bank: <span
                                                        class="font-mono text-gray-600 dark:text-gray-300 bg-gray-50 dark:bg-gray-700 px-1 py-0.5 rounded font-bold">{{ $payment->reference_number }}</span>
                                                @endif
                                            </p>
                                        </div>
                                        <span
                                            class="text-[11px] font-bold text-gray-400 bg-gray-50 dark:bg-gray-900 px-2 py-1 rounded-md">
                                            <i class="ri-calendar-event-line"></i> {{ $payment->payment_date->format('d M Y') }}
                                        </span>
                                    </div>
                                @empty
                                    <p class="text-xs text-gray-400 italic py-1 pl-1">Belum ada catatan setoran dana
                                        cicilan masuk untuk invoice ini.</p>
                                @endforelse
                            </div>
                        </td>
                    </tr>

                    {{-- INJEKSI SUB-KOMPONEN REUSABLE STRUK NOTA (Mencegah Kode Gemuk) --}}
                    <x-ui.invoice-receipt :invoice="$invoice" />

                @empty
                    <tr>
                        <td colspan="5"
                            class="px-5 py-12 text-center text-gray-400 font-medium bg-white dark:bg-gray-800">
                            <i class="ri-file-warning-line text-2xl block mb-2 text-gray-300"></i>
                            Tidak ada data invoice terbit pada proyek ini.
                        </td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <x-ui.modal name="modal-payment" title="Pembayaran">
        <livewire:admin.projets.component.payment-form />
    </x-ui.modal>

</div>
