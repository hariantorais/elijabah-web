<section id="app-solutions" class="py-24 bg-white border-y border-slate-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        @php
            // Data untuk Paket Bisnis (Sekarang memasukkan Travel Umroh Standar)
            $paket_bisnis = [
                [
                    'title' => 'Sistem Travel Umroh',
                    'desc' => 'Katalog paket umroh, form pendaftaran jamaah, dan kelola dokumen dasar.',
                    'icon' => 'fa-kaaba',
                ],
                [
                    'title' => 'Toko Online (E-Commerce)',
                    'desc' => 'Sistem jual beli lengkap dengan payment gateway dan hitung ongkir.',
                    'icon' => 'fa-store',
                ],
                [
                    'title' => 'Sistem PPDB / Akademik',
                    'desc' => 'Otomasi penerimaan siswa baru, absensi, dan manajemen nilai.',
                    'icon' => 'fa-user-graduate',
                ],
                [
                    'title' => 'Sistem Reservasi & Booking',
                    'desc' => 'Manajemen antrean untuk klinik, salon, atau jasa profesional.',
                    'icon' => 'fa-calendar-check',
                ],
                [
                    'title' => 'Sistem HRIS & Presensi',
                    'desc' => 'Absensi online dengan GPS, manajemen cuti, dan cetak slip gaji otomatis.',
                    'icon' => 'fa-id-badge',
                ],
            ];

            // Data untuk Paket Custom (Umroh yang dinaikkan levelnya menjadi ERP)
            $paket_custom = [
                [
                    'title' => 'ERP Land Arrangement Umroh',
                    'desc' => 'Sistem B2B manajemen agen, alokasi kursi pesawat, mutawwif, hingga visa.',
                    'icon' => 'fa-plane-departure',
                ],
                [
                    'title' => 'Sistem Logistik & Ekspor',
                    'desc' => 'Tracking kontainer real-time, manajemen stok gudang, & dokumen pabean.',
                    'icon' => 'fa-ship',
                ],
                [
                    'title' => 'WhatsApp API & Microservices',
                    'desc' => 'Gateway otomatisasi untuk notifikasi tagihan massal dan cetak dokumen.',
                    'icon' => 'fa-robot',
                ],
                [
                    'title' => 'Sistem Khusus Lainnya',
                    'desc' => 'Ceritakan alur bisnis Anda, kami bangunkan mesin otomasi khususnya.',
                    'icon' => 'fa-gears',
                ],
            ];
        @endphp

        <!-- Grid Container Utama -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-stretch">

            <!-- KIRI: Area Paket Bisnis (Terang) -->
            <div class="bg-slate-50 rounded-[2.5rem] p-8 lg:p-12 border border-slate-200 flex flex-col h-full">
                <div class="mb-8 border-b border-slate-200 pb-8">
                    <div class="inline-block bg-white border border-slate-200 rounded-full px-4 py-1.5 mb-4 shadow-sm">
                        <span class="text-slate-600 font-bold text-xs uppercase"><i
                                class="fa-solid fa-layer-group text-brand-500 mr-2"></i>[2] Paket Bisnis</span>
                    </div>
                    <h3 class="text-3xl font-black text-slate-900 mb-3">Modul Siap Pakai</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">
                        Sistem yang sudah teruji untuk mempercepat operasional. Sangat cocok untuk travel umroh,
                        sekolah, maupun toko ritel modern.
                    </p>
                </div>

                <div class="flex-grow grid grid-cols-1 gap-4">
                    @foreach ($paket_bisnis as $bisnis)
                        <div
                            class="bg-white p-5 rounded-2xl flex items-start gap-4 border border-slate-100 shadow-sm hover:border-brand-300 transition-colors">
                            <div
                                class="w-12 h-12 rounded-xl bg-brand-50 text-brand-600 flex items-center justify-center text-xl flex-shrink-0">
                                <i class="fa-solid {{ $bisnis['icon'] }}"></i>
                            </div>
                            <div>
                                <h4 class="text-slate-900 font-bold mb-1">{{ $bisnis['title'] }}</h4>
                                <p class="text-slate-500 text-xs leading-relaxed">{{ $bisnis['desc'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- KANAN: Area Paket Custom (Gelap/Premium) -->
            <div
                class="bg-slate-900 rounded-[2.5rem] p-8 lg:p-12 border border-slate-800 flex flex-col h-full relative overflow-hidden text-white shadow-2xl">
                <div class="absolute top-0 right-0 w-64 h-64 bg-brand-500/20 rounded-full blur-[80px]"></div>

                <div class="mb-8 border-b border-slate-700 pb-8 relative z-10">
                    <div class="inline-block bg-slate-800 border border-slate-700 rounded-full px-4 py-1.5 mb-4">
                        <span class="text-brand-400 font-bold text-xs uppercase"><i
                                class="fa-solid fa-microchip mr-2"></i>[3] Paket Custom</span>
                    </div>
                    <h3 class="text-3xl font-black text-white mb-3">Arsitektur Eksklusif</h3>
                    <p class="text-slate-400 text-sm leading-relaxed">
                        Ketika operasional Anda melampaui batas sistem standar. Kami membangun "otak pusat" untuk skala
                        enterprise dan B2B.
                    </p>
                </div>

                <div class="flex-grow grid grid-cols-1 gap-4 relative z-10">
                    @foreach ($paket_custom as $custom)
                        <div
                            class="bg-slate-800/50 backdrop-blur-sm p-5 rounded-2xl flex items-start gap-4 border border-slate-700 hover:border-brand-500 transition-colors group">
                            <div
                                class="w-12 h-12 rounded-xl bg-slate-700 text-brand-400 flex items-center justify-center text-xl flex-shrink-0 group-hover:bg-brand-500 group-hover:text-white transition-colors">
                                <i class="fa-solid {{ $custom['icon'] }}"></i>
                            </div>
                            <div>
                                <h4 class="text-white font-bold mb-1">{{ $custom['title'] }}</h4>
                                <p class="text-slate-400 text-xs leading-relaxed">{{ $custom['desc'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="mt-8 pt-4 relative z-10">
                    <a href="#"
                        class="block text-center w-full bg-brand-600 hover:bg-brand-500 text-white py-3.5 rounded-xl font-bold transition-colors">
                        Konsultasikan Alur Khusus Anda
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>
