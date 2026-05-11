<section id="services-overview" class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="text-center mb-16">
            <span class="text-brand-600 font-bold tracking-widest text-xs uppercase mb-3 block">Peta Perjalanan
                Digital</span>
            <h2 class="text-3xl md:text-5xl font-black text-slate-900 mb-4">Tiga Jalur Transformasi Bisnis</h2>
            <p class="text-slate-500 max-w-2xl mx-auto font-medium text-lg">
                Pilih solusi yang paling sesuai dengan fase bisnis Anda saat ini. Dari sekadar tampil di internet hingga
                otomasi total.
            </p>
        </div>

        @php
            $overview_services = [
                [
                    'title' => 'Paket Branding',
                    'subtitle' => 'Mulai Hadir',
                    'icon' => 'fa-id-card',
                    'color' => 'slate',
                    'desc' =>
                        'Tampil resmi dan profesional di internet. Solusi cepat untuk company profile dan landing page dengan desain elegan.',
                ],
                [
                    'title' => 'Paket Bisnis',
                    'subtitle' => 'Mulai Mengelola',
                    'icon' => 'fa-store',
                    'color' => 'brand',
                    'desc' =>
                        'Sistem standar industri yang sudah teruji. Cocok untuk toko online, sistem sekolah, atau pendaftaran otomatis.',
                ],
                [
                    'title' => 'Paket Custom',
                    'subtitle' => 'Otomasi Tanpa Batas',
                    'icon' => 'fa-microchip',
                    'color' => 'indigo',
                    'desc' =>
                        'Kami bangunkan "mesin digital" dari nol, khusus untuk mengikuti dan mempercepat alur kerja unik bisnis Anda.',
                ],
            ];
        @endphp

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach ($overview_services as $service)
                <div
                    class="bg-white p-10 rounded-[2rem] border border-slate-100 shadow-sm hover:shadow-xl hover:border-{{ $service['color'] }}-400 transition-all duration-300 text-center group">
                    <div
                        class="w-20 h-20 mx-auto bg-{{ $service['color'] }}-50 text-{{ $service['color'] }}-600 rounded-3xl flex items-center justify-center text-3xl mb-6 group-hover:-translate-y-2 transition-transform duration-300">
                        <i class="fa-solid {{ $service['icon'] }}"></i>
                    </div>
                    <span
                        class="text-{{ $service['color'] }}-600 font-bold text-xs uppercase tracking-widest block mb-2">{{ $service['subtitle'] }}</span>
                    <h3 class="text-2xl font-black text-slate-900 mb-4">{{ $service['title'] }}</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">{{ $service['desc'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>
