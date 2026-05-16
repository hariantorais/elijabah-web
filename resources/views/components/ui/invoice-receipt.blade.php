@props(['invoice'])

{{-- DIBUNGKUS OFFSCREEN AGAR TIDAK MERUSAK LAYOUT UTAMA --}}
<div class="absolute -top-[9999px] -left-[9999px] select-none pointer-events-none" aria-hidden="true">
    <div id="invoice-card-{{ $invoice->id }}" class="w-[460px] bg-white p-6 text-gray-800 font-sans border border-gray-200">

        {{-- KOP NOTA STRUK --}}
        <div class="text-center border-b-2 border-dashed border-gray-200 pb-4 mb-4 relative">
            <h4 class="text-base font-black tracking-widest text-blue-600 uppercase">ELIJABAH WEB AGENCY</h4>
            <p class="text-[10px] text-gray-400 font-bold mt-0.5">Batam, Indonesia — Bukti Keuangan Resmi</p>

            {{-- CAP STEMPEL STAMPEL WATERMARK LUNAS --}}
            @if($invoice->status === 'paid')
                <div class="absolute top-1 right-2 border-2 border-emerald-500 text-emerald-500 text-[10px] font-black uppercase tracking-widest px-1.5 py-0.5 rounded rotate-12 opacity-80">
                    LUNAS
                </div>
            @endif
        </div>

        {{-- METADATA INVOICE --}}
        <div class="space-y-1.5 text-xs pb-4 border-b border-gray-100">
            <div class="flex justify-between">
                <span class="text-gray-400">Nomor Invoice</span>
                <span class="font-mono font-bold text-gray-900">{{ $invoice->invoice_number }}</span>
            </div>
            <div class="flex justify-between">
                <span class="text-gray-400">Deskripsi Tagihan</span>
                <span class="font-semibold text-gray-700">{{ $invoice->title }}</span>
            </div>
            <div class="flex justify-between">
                <span class="text-gray-400">Tanggal Pembuatan</span>
                <span class="font-medium text-gray-600">{{ $invoice->created_at->format('d M Y H:i') }} WIB</span>
            </div>
            <div class="flex justify-between">
                <span class="text-gray-400">Batas Jatuh Tempo</span>
                <span class="font-bold text-amber-600">{{ $invoice->due_date->format('d M Y') }}</span>
            </div>
        </div>

        {{-- NERACA JURNAL MATRIKS --}}
        <div class="py-4 bg-gray-50 px-3.5 my-4 rounded-xl space-y-2 text-xs">
            <div class="flex justify-between font-medium">
                <span class="text-gray-500">Total Plafon Tagihan:</span>
                <span class="text-gray-900 font-bold">IDR {{ number_format($invoice->amount, 0, ',', '.') }}</span>
            </div>
            <div class="flex justify-between font-medium text-emerald-600">
                <span>Total Dana Masuk:</span>
                <span class="font-bold">IDR {{ number_format($invoice->payments->sum('amount'), 0, ',', '.') }}</span>
            </div>
            <div class="flex justify-between font-bold text-red-500 border-t border-gray-200/80 pt-2 text-sm">
                <span>Sisa Piutang Klien:</span>
                <span class="font-mono">IDR {{ number_format($invoice->amount - $invoice->payments->sum('amount'), 0, ',', '.') }}</span>
            </div>
        </div>

        {{-- JEJAK AUDIT KRONOLOGI TRANSAKSI CICILAN --}}
        <div class="space-y-2">
            <p class="text-[10px] font-extrabold text-gray-400 uppercase tracking-widest mb-1">Riwayat Transaksi Setoran:</p>
            @forelse($invoice->payments as $idx => $pay)
                <div class="flex justify-between items-center bg-white p-2.5 border border-gray-100 rounded-lg text-[11px] shadow-xs">
                    <div>
                        <p class="font-bold text-gray-800">Setoran Ke-{{ $idx + 1 }} ({{ $pay->payment_method }})</p>
                        @if($pay->reference_number)
                            <p class="text-[9px] text-gray-400 font-mono mt-0.5">Ref: {{ $pay->reference_number }}</p>
                        @endif
                    </div>
                    <div class="text-right">
                        <p class="font-bold text-emerald-600">IDR {{ number_format($pay->amount, 0, ',', '.') }}</p>
                        <p class="text-[9px] text-gray-400 font-medium">{{ $pay->payment_date->format('d/m/Y') }}</p>
                    </div>
                </div>
            @empty
                <p class="text-[11px] text-gray-400 italic text-center py-3 bg-white rounded-lg border border-gray-100 border-dashed">
                    Belum ada dana cicilan masuk.
                </p>
            @endforelse
        </div>

        {{-- FOOTER NOTA --}}
        <div class="text-center border-t border-gray-100 pt-4 mt-4 text-[10px] text-gray-400 font-medium">
            Terima kasih atas kerja sama Anda bermitra bersama kami.
        </div>
    </div>
</div>
