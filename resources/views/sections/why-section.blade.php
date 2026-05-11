<section class="py-24 relative overflow-hidden">
    <!-- Dekorasi Background -->
    <div
        class="absolute top-0 right-0 w-1/2 h-full bg-gradient-to-l from-brand-50/50 to-transparent pointer-events-none">
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">

        <!-- Header Pendek -->
        <div class="text-center mb-16">
            <h2 class="text-2xl md:text-4xl font-black text-slate-900 mb-4">
                Standar Kualitas Setiap Karya Kami
            </h2>
            <p class="text-slate-500 max-w-2xl mx-auto font-medium">
                Baik itu sekadar halaman profil atau sistem ERP kompleks, kami tidak pernah berkompromi pada 4 pilar
                fundamental ini.
            </p>
        </div>

        @php
            $kualitas_standar = [
                [
                    'title' => 'Tampil Sempurna di Semua Layar',
                    'desc' =>
                        'Desain adaptif (Mobile-First) memastikan aplikasi Anda tetap rapi dan mudah ditekan dari HP, tablet, maupun komputer.',
                    'icon' => 'fa-mobile-screen-button',
                    'color' => 'brand',
                ],
                [
                    'title' => 'Kecepatan Akses Kilat',
                    'desc' =>
                        'Kami menggunakan tumpukan teknologi modern untuk waktu muat di bawah 3 detik. Jangan biarkan pembeli kabur karena web lambat.',
                    'icon' => 'fa-bolt', // fa-bolt lebih memberi kesan "Cepat" dibanding gauge
                    'color' => 'cyan',
                ],
                [
                    'title' => 'Arsitektur Ramah SEO',
                    'desc' =>
                        'Struktur kode yang bersih dan sesuai standar Google. Tingkatkan peluang bisnis Anda mendominasi halaman pertama pencarian.',
                    'icon' => 'fa-magnifying-glass-chart',
                    'color' => 'emerald',
                ],
                [
                    'title' => 'Garansi Dukungan Teknis',
                    'desc' =>
                        'Fokus saja pada penjualan Anda. Kami berikan gratis perbaikan sistem dan pendampingan teknis hingga 6 bulan penuh.',
                    'icon' => 'fa-headset',
                    'color' => 'indigo',
                ],
            ];
        @endphp

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach ($kualitas_standar as $kualitas)
                <!-- Kartu Interaktif -->
                <div
                    class="group bg-white p-8 rounded-3xl border border-slate-100 shadow-sm hover:shadow-xl hover:-translate-y-2 transition-all duration-300">

                    <!-- Ikon Container dengan Efek Hover -->
                    <div
                        class="w-16 h-16 bg-{{ $kualitas['color'] }}-50 text-{{ $kualitas['color'] }}-600 rounded-2xl flex items-center justify-center text-2xl mb-6 transform transition-transform duration-300 group-hover:scale-110 group-hover:rotate-3 group-hover:bg-{{ $kualitas['color'] }}-100">
                        <i class="fa-solid {{ $kualitas['icon'] }}"></i>
                    </div>

                    <!-- Judul -->
                    <h3
                        class="text-lg font-extrabold text-slate-900 mb-3 leading-snug group-hover:text-{{ $kualitas['color'] }}-600 transition-colors">
                        {{ $kualitas['title'] }}
                    </h3>

                    <!-- Deskripsi -->
                    <p class="text-slate-500 text-sm leading-relaxed font-medium">
                        {{ $kualitas['desc'] }}
                    </p>

                </div>
            @endforeach
        </div>
    </div>
</section>
