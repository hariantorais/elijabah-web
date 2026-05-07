<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Elijabah - Jasa Pembuatan Website Biro Travel | UMKM | Bisnis Owner | Lembaga Pendidikan Termurah</title>

    <!-- Tailwind CSS & Alpine JS -->

    <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/collapse@3.x.x/dist/cdn.min.js"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Font: Plus Jakarta Sans -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    @vite(['resources/css/app.css', 'resources/js/app.tsx'])



    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #f8fafc;
            color: #334155;
        }

        [x-cloak] {
            display: none !important;
        }

        /* Floating Animation */
        .animate-float {
            animation: float 6s ease-in-out infinite;
        }

        @keyframes float {
            0% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-15px);
            }

            100% {
                transform: translateY(0px);
            }
        }

        /* Glassmorphism utility */
        .glass {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }
    </style>
</head>

<body class="antialiased selection:bg-brand-500 selection:text-white">

    <!-- 1. NAVBAR (GLASSMORPHISM) -->
    <nav x-data="{ mobileMenu: false, scrolled: false }" @scroll.window="scrolled = (window.pageYOffset > 20)"
        class="fixed w-full z-50 transition-all duration-300"
        :class="scrolled ? 'glass shadow-sm py-4' : 'bg-transparent py-6'">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center gap-2">
                    <div class="w-10 h-10 rounded-xl  flex items-center justify-center ">
                        <!-- Mengganti ikon <i> dengan <img> -->
                        <img src="{{ asset('favicon.ico') }}" alt="Logo" class="object-contain">
                    </div>
                    <span class="text-2xl font-extrabold text-slate-900 tracking-tight">
                        Web<span class="text-transparent bg-clip-text bg-tech-gradient">Elijabah.</span>
                    </span>
                </div>

                <!-- Desktop Menu -->
                <div class="hidden md:flex space-x-8 items-center font-semibold text-slate-600 text-sm">
                    <a href="#hero" class="hover:text-brand-600 transition">Beranda</a>
                    <a href="#layanan" class="hover:text-brand-600 transition">Layanan</a>
                    <a href="#template" class="hover:text-brand-600 transition">Template</a>
                    <a href="#harga" class="hover:text-brand-600 transition">Harga</a>
                    <a href="#faq" class="hover:text-brand-600 transition">FAQ</a>
                </div>

                <!-- Desktop CTA -->
                <div class="hidden md:block">
                    <a href="https://wa.me/{{ settings('contact_phone') }}"
                        class="bg-slate-900 text-white px-6 py-2.5 rounded-full font-bold hover:bg-brand-600 transition duration-300 shadow-lg flex items-center gap-2 text-sm">
                        Konsultasi Gratis <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>

                <!-- Mobile Button -->
                <div class="md:hidden flex items-center">
                    <button @click="mobileMenu = !mobileMenu" class="text-slate-900 focus:outline-none text-2xl">
                        <i class="fa-solid" :class="mobileMenu ? 'fa-xmark' : 'fa-bars'"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div x-cloak x-show="mobileMenu" x-transition
            class="md:hidden bg-white absolute w-full shadow-2xl border-t border-slate-100">
            <div class="px-6 py-8 space-y-4 text-center">
                <a href="#hero" @click="mobileMenu = false"
                    class="block font-bold text-slate-700 text-lg hover:text-brand-600">Beranda</a>
                <a href="#layanan" @click="mobileMenu = false"
                    class="block font-bold text-slate-700 text-lg hover:text-brand-600">Layanan</a>
                <a href="#template" @click="mobileMenu = false"
                    class="block font-bold text-slate-700 text-lg hover:text-brand-600">Template</a>
                <a href="#harga" @click="mobileMenu = false"
                    class="block font-bold text-slate-700 text-lg hover:text-brand-600">Harga</a>
                <a href="#faq" @click="mobileMenu = false"
                    class="block font-bold text-slate-700 text-lg hover:text-brand-600">FAQ</a>
                <a href="https://wa.me/{{ settings('contact_phone') }}"
                    class="block w-full bg-tech-gradient text-white py-3 rounded-xl font-bold mt-4 shadow-md">
                    Hubungi Kami
                </a>
            </div>
        </div>
    </nav>

    <!-- 2. HERO SECTION -->
    <section id="hero" class="relative pt-32 pb-20 lg:pt-40 lg:pb-32 overflow-hidden">
        <!-- Abstract Tech Backgrounds -->
        <div
            class="absolute top-20 right-0 w-[500px] h-[500px] bg-cyan-400/20 rounded-full mix-blend-multiply filter blur-3xl opacity-70 -z-10 animate-float">
        </div>
        <div class="absolute bottom-0 left-10 w-[600px] h-[600px] bg-brand-400/20 rounded-full mix-blend-multiply filter blur-3xl opacity-70 -z-10"
            style="animation: float 8s ease-in-out infinite;"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="flex flex-col lg:flex-row items-center gap-12">

                <!-- Text Content -->
                <div class="w-full lg:w-1/2 text-center lg:text-left">
                    <div
                        class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-brand-50 text-brand-600 font-bold text-xs uppercase tracking-widest mb-6 border border-brand-100 shadow-sm">
                        <i class="fa-solid fa-rocket text-brand-500"></i> Tingkatkan Bisnis Anda Ke Level Digital
                    </div>
                    <h1
                        class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-slate-900 leading-[1.1] mb-6 tracking-tight">
                        Buat Website Impian <br>
                        Lebih Cepat, <span class="text-transparent bg-clip-text bg-tech-gradient">Lebih Cerdas.</span>
                    </h1>
                    <p class="text-lg text-slate-600 mb-8 max-w-lg mx-auto lg:mx-0 font-medium leading-relaxed">
                        Kami membantu Bisnis Owner & UMKM membangun identitas digital yang profesional, responsif, dan
                        siap mendatangkan lebih banyak klien.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                        <a href="#harga"
                            class="bg-tech-gradient text-white px-8 py-3.5 rounded-full font-bold hover:shadow-lg hover:shadow-brand-500/40 transition duration-300 text-center flex items-center justify-center gap-2">
                            Lihat Harga <i class="fa-solid fa-arrow-right"></i>
                        </a>
                        <a href="https://wa.me/{{ settings('contact_phone') }}?text=Halo, saya mau tanya-tanya tentang jasa pembuatan website"
                            class="bg-white border-2 border-slate-200 text-slate-700 px-8 py-3.5 rounded-full font-bold hover:border-brand-500 hover:text-brand-600 transition duration-300 text-center">
                            Konsultasi Gratis <i class="fa-brands fa-fw fa-whatsapp"></i>
                        </a>
                    </div>

                    <!-- Tech Stack Icons -->
                    <div class="mt-10 pt-8 border-t border-slate-200">
                        <!-- Judul dibuat terpisah dari container icon agar tidak merusak spacing -->
                        <p
                            class="text-[10px] font-extrabold uppercase tracking-[0.2em] text-slate-500 text-center lg:text-left mb-6">
                            Dibangun dengan teknologi modern
                        </p>

                        <!-- Container Ikon -->
                        <div
                            class="flex flex-wrap justify-center lg:justify-start items-center gap-x-8 gap-y-6 text-slate-400 text-3xl">


                            <!-- React JS -->
                            <i class="fa-brands fa-react hover:text-[#61DAFB] transition-all duration-300 cursor-pointer"
                                title="React JS"></i>

                            <!-- Node.js -->
                            <i class="fa-brands fa-node-js hover:text-[#339933] transition-all duration-300 cursor-pointer"
                                title="Node.js"></i>

                            <!-- Express -->
                            <i class="fa-solid fa-server hover:text-slate-600 transition-all duration-300 cursor-pointer"
                                title="Express.js"></i>

                            <!-- Laravel -->
                            <i class="fa-brands fa-laravel hover:text-[#FF2D20] transition-all duration-300 cursor-pointer"
                                title="Laravel"></i>

                            <!-- MongoDB -->
                            <i class="fa-solid fa-leaf hover:text-[#47A248] transition-all duration-300 cursor-pointer"
                                title="MongoDB"></i>

                            <!-- MySQL -->
                            <i class="fa-solid fa-database hover:text-[#4479A1] transition-all duration-300 cursor-pointer"
                                title="MySQL"></i>

                            <!-- Figma -->
                            <i class="fa-brands fa-figma hover:text-[#F24E1E] transition-all duration-300 cursor-pointer"
                                title="Figma"></i>
                        </div>
                    </div>
                </div>

                <!-- Image Content (Dashboard/Mockup Placeholder) -->
                <div class="w-full lg:w-1/2 relative">
                    <div
                        class="relative bg-white rounded-2xl shadow-2xl border border-slate-100 p-2 transform rotate-1 hover:rotate-0 transition duration-500">
                        <!-- Mac OS style window dots -->
                        <div class="flex gap-2 px-3 py-2 border-b border-slate-100 mb-2 bg-slate-50 rounded-t-xl">
                            <div class="w-3 h-3 rounded-full bg-red-400"></div>
                            <div class="w-3 h-3 rounded-full bg-amber-400"></div>
                            <div class="w-3 h-3 rounded-full bg-emerald-400"></div>
                        </div>
                        <img src="{{ asset('images/web-mockup.png') }}" alt="Web Mockup"
                            class="w-full h-auto rounded-b-xl" style="min-height: 300px; background: #e2e8f0;">

                        <!-- Floating Stats -->
                        <div class="absolute -left-6 top-1/3 glass p-4 rounded-xl shadow-xl flex items-center gap-3 animate-float"
                            style="animation-delay: 1s;">
                            <div
                                class="w-10 h-10 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center text-xl">
                                <i class="fa-solid fa-chart-line"></i>
                            </div>
                            <div>
                                <p class="text-xs text-slate-500 font-bold uppercase">SEO Score</p>
                                <p class="font-extrabold text-slate-900">99/100</p>
                            </div>
                        </div>
                        <div class="absolute -right-6 bottom-10 glass p-4 rounded-xl shadow-xl flex items-center gap-3 animate-float"
                            style="animation-delay: 2s;">
                            <div
                                class="w-10 h-10 rounded-full bg-brand-100 text-brand-600 flex items-center justify-center text-xl">
                                <i class="fa-solid fa-bolt"></i>
                            </div>
                            <div>
                                <p class="text-xs text-slate-500 font-bold uppercase">Load Time</p>
                                <p class="font-extrabold text-slate-900">&lt; 1.5 Detik</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 3. MENGAPA KAMI (FEATURES) -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 text-center">
                <div class="p-6 rounded-2xl hover:bg-brand-50 transition duration-300">
                    <div
                        class="w-14 h-14 mx-auto bg-brand-100 text-brand-600 rounded-2xl flex items-center justify-center text-2xl mb-4 transform -rotate-6">
                        <i class="fa-solid fa-mobile-screen-button"></i>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 mb-2">Desain Responsif</h3>
                    <p class="text-slate-500 text-sm">Tampil sempurna di HP, Tablet, maupun Desktop. Mobile-first
                        design.</p>
                </div>
                <div class="p-6 rounded-2xl hover:bg-brand-50 transition duration-300">
                    <div
                        class="w-14 h-14 mx-auto bg-cyan-100 text-cyan-600 rounded-2xl flex items-center justify-center text-2xl mb-4 transform rotate-6">
                        <i class="fa-solid fa-gauge-high"></i>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 mb-2">Super Cepat</h3>
                    <p class="text-slate-500 text-sm">Optimasi kecepatan loading untuk mencegah pengunjung pergi
                        (bounce rate rendah).</p>
                </div>
                <div class="p-6 rounded-2xl hover:bg-brand-50 transition duration-300">
                    <div
                        class="w-14 h-14 mx-auto bg-brand-100 text-brand-600 rounded-2xl flex items-center justify-center text-2xl mb-4 transform -rotate-6">
                        <i class="fa-solid fa-magnifying-glass-chart"></i>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 mb-2">SEO Friendly</h3>
                    <p class="text-slate-500 text-sm">Struktur web ramah Google agar bisnis Anda mudah ditemukan di
                        halaman pertama.</p>
                </div>
                <div class="p-6 rounded-2xl hover:bg-brand-50 transition duration-300">
                    <div
                        class="w-14 h-14 mx-auto bg-cyan-100 text-cyan-600 rounded-2xl flex items-center justify-center text-2xl mb-4 transform rotate-6">
                        <i class="fa-solid fa-headset"></i>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 mb-2">Support 6 Bulan</h3>
                    <p class="text-slate-500 text-sm">Gratis perbaikan bug dan konsultasi teknis selama 6 bulan setelah
                        web selesai.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. LAYANAN KAMI -->
    <section id="layanan" class="py-24 bg-slate-50 border-y border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-end mb-16 gap-6">
                <div>
                    <span class="text-brand-600 font-bold tracking-widest text-xs uppercase mb-3 block">Keahlian
                        Kami</span>
                    <h2 class="text-3xl md:text-4xl font-extrabold text-slate-900">Spesialisasi Pengembangan</h2>
                </div>
                <p class="text-slate-500 max-w-md font-medium text-sm">Dari website sederhana hingga sistem aplikasi
                    kompleks, kami siap mewujudkan ide digital Anda.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Layanan 1 -->
                <div
                    class="bg-white p-8 rounded-3xl shadow-sm border border-slate-100 hover:shadow-xl hover:border-brand-300 transition-all duration-300 group">
                    <div
                        class="w-16 h-16 bg-brand-50 text-brand-600 rounded-2xl flex items-center justify-center text-3xl mb-6 group-hover:scale-110 transition">
                        <i class="fa-solid fa-building"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-slate-900 mb-3">Company Profile</h3>
                    <p class="text-slate-600 text-sm mb-6 leading-relaxed">Website profil perusahaan untuk meningkatkan
                        kredibilitas, menampilkan layanan, portofolio, dan memudahkan klien menghubungi Anda.</p>
                    <ul class="space-y-2 text-sm text-slate-600 font-medium mb-6">
                        <li class="flex items-center gap-2"><i class="fa-solid fa-check text-brand-500"></i> Desain
                            Eksklusif</li>
                        <li class="flex items-center gap-2"><i class="fa-solid fa-check text-brand-500"></i> Integrasi
                            WhatsApp</li>
                    </ul>
                </div>

                <!-- Layanan 2 -->
                <div
                    class="bg-white p-8 rounded-3xl shadow-sm border border-slate-100 hover:shadow-xl hover:border-cyan-300 transition-all duration-300 group relative overflow-hidden">
                    <div
                        class="absolute top-0 right-0 bg-tech-gradient text-white text-[10px] font-bold uppercase px-4 py-1 rounded-bl-xl">
                        Paling Dicari</div>
                    <div
                        class="w-16 h-16 bg-cyan-50 text-cyan-600 rounded-2xl flex items-center justify-center text-3xl mb-6 group-hover:scale-110 transition">
                        <i class="fa-solid fa-cart-shopping"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-slate-900 mb-3">Toko Online (E-Commerce)</h3>
                    <p class="text-slate-600 text-sm mb-6 leading-relaxed">Sistem jual beli online lengkap dengan
                        manajemen produk, keranjang belanja, kalkulasi ongkir otomatis, dan payment gateway.</p>
                    <ul class="space-y-2 text-sm text-slate-600 font-medium mb-6">
                        <li class="flex items-center gap-2"><i class="fa-solid fa-check text-cyan-500"></i> Integrasi
                            Payment Gateway</li>
                        <li class="flex items-center gap-2"><i class="fa-solid fa-check text-cyan-500"></i> Cek Ongkir
                            Otomatis</li>
                    </ul>
                </div>

                <!-- Layanan 3 -->
                <div
                    class="bg-white p-8 rounded-3xl shadow-sm border border-slate-100 hover:shadow-xl hover:border-brand-300 transition-all duration-300 group">
                    <div
                        class="w-16 h-16 bg-brand-50 text-brand-600 rounded-2xl flex items-center justify-center text-3xl mb-6 group-hover:scale-110 transition">
                        <i class="fa-solid fa-window-maximize"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-slate-900 mb-3">Landing Page</h3>
                    <p class="text-slate-600 text-sm mb-6 leading-relaxed">Halaman tunggal yang didesain khusus untuk
                        kampanye iklan (Ads) dengan struktur copywriting yang memaksimalkan konversi penjualan.</p>
                    <ul class="space-y-2 text-sm text-slate-600 font-medium mb-6">
                        <li class="flex items-center gap-2"><i class="fa-solid fa-check text-brand-500"></i> High
                            Conversion Rate</li>
                        <li class="flex items-center gap-2"><i class="fa-solid fa-check text-brand-500"></i>
                            Pemasangan Pixel/Analytics</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    @php
        $allTemplates = templates();
        $categories = collect($allTemplates)->pluck('category_label', 'category_slug')->unique();
    @endphp

    <section id="template" x-data="{ activeFilter: 'umkm' }" class="py-24 bg-slate-50 border-t border-slate-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Header: Disamakan dengan gaya Portfolio -->
            <div class="text-center mb-16">
                <span class="text-brand-600 font-bold tracking-widest text-xs uppercase mb-3 block">Katalog
                    Desain</span>
                <h2 class="text-3xl md:text-4xl font-extrabold text-slate-900 mb-4">Pilih Base Template</h2>
                <p class="text-slate-500 max-w-2xl mx-auto font-medium">
                    Gunakan koleksi template premium kami sebagai fondasi website Anda untuk proses pengerjaan yang
                    lebih cepat.
                </p>
            </div>

            <!-- Filter: Minimalis -->
            <div class="flex flex-wrap justify-center gap-2 mb-12">

                @foreach ($categories as $slug => $label)
                    <button @click="activeFilter = '{{ $slug }}'"
                        :class="activeFilter === '{{ $slug }}' ? 'bg-brand-600 text-white' :
                            'bg-white text-slate-600 hover:bg-slate-100'"
                        class="px-5 py-2 rounded-full text-xs font-bold transition border border-slate-200 shadow-sm">
                        {{ $label }}
                    </button>
                @endforeach
            </div>

            <!-- Grid: Mengikuti gaya Portfolio Anda -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
                @foreach ($allTemplates as $item)
                    <div x-show="activeFilter === 'all' || activeFilter === '{{ $item['category_slug'] }}'"
                        x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="opacity-0 transform scale-95"
                        x-transition:enter-end="opacity-100 transform scale-100"
                        class="group flex flex-col h-full bg-white rounded-3xl border border-slate-100 shadow-sm hover:shadow-2xl hover:shadow-brand-500/10 transition-all duration-500">

                        <!-- Frame Gambar -->
                        <div
                            class="relative w-full h-52 rounded-t-3xl overflow-hidden bg-slate-200 border border-slate-100">
                            <img src="{{ asset('images/templates/' . $item['route'] . '.png') }}"
                                alt="{{ $item['name'] }}"
                                class="w-full h-full object-cover object-top group-hover:scale-110 transition duration-1000 ease-in-out"
                                onerror="this.src='https://placehold.co/600x800/cbd5e1/64748b?text={{ $item['uid'] }}'">

                            <!-- Overlay Gradient -->
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-slate-900/40 via-transparent to-transparent opacity-60">
                            </div>

                            <!-- OVERLAY TOMBOL (HANYA DESKTOP - lg:flex) -->
                            <div
                                class="hidden lg:flex absolute inset-0 bg-slate-900/60 opacity-0 group-hover:opacity-100 backdrop-blur-[2px] transition-all duration-300 flex-col items-center justify-center gap-4">
                                <a href="{{ route($item['route']) }}"
                                    class="w-32 bg-white text-slate-900 py-2.5 rounded-xl font-bold text-sm text-center transform translate-y-4 group-hover:translate-y-0 transition-all duration-300 hover:bg-brand-500 hover:text-white">
                                    <i class="fa-solid fa-laptop-code mr-2"></i>Live Demo
                                </a>
                                <a href="https://wa.me/{{ settings('contact_phone') }}?text=Halo,+saya+ingin+menggunakan+template+{{ $item['uid'] }}"
                                    class="w-32 bg-brand-500 text-white py-2.5 rounded-xl font-bold text-sm text-center transform translate-y-4 group-hover:translate-y-0 transition-all duration-500 hover:bg-brand-600 shadow-lg">
                                    <i class="fa-brands fa-whatsapp mr-2"></i>Pilih
                                </a>
                            </div>

                            <!-- Palette Warna (Selalu terlihat, di mobile kita beri margin kanan agar tidak tabrakan) -->
                            <div
                                class="absolute bottom-4 left-4 flex gap-1.5 bg-white/20 backdrop-blur-md p-1.5 rounded-full z-10">
                                @foreach ($item['palette'] as $color)
                                    <div class="w-4 h-4 rounded-full border-2 border-white/50"
                                        style="background-color: {{ $color }}" title="{{ $color }}">
                                    </div>
                                @endforeach
                            </div>

                            <!-- Badge Kategori -->
                            <div class="absolute top-4 right-4 z-10">
                                <span
                                    class="bg-brand-500 text-white text-[9px] font-black px-3 py-1.5 rounded-lg uppercase tracking-widest shadow-lg">
                                    {{ $item['category_label'] }}
                                </span>
                            </div>
                        </div>

                        <!-- Bagian Info Content -->
                        <div class="flex flex-col flex-grow px-5 py-5">
                            <div class="flex justify-between items-start mb-2">
                                <h3
                                    class="text-xl font-extrabold text-slate-900 group-hover:text-brand-600 transition-colors duration-300 leading-tight">
                                    {{ $item['name'] }}
                                </h3>
                                <span class="text-[10px] font-bold text-slate-300 tracking-tighter">
                                    #{{ $item['uid'] }}
                                </span>
                            </div>

                            <p class="text-sm text-slate-500 leading-relaxed line-clamp-2 font-medium mb-5">
                                {{ $item['desc'] }}
                            </p>

                            <!-- TOMBOL KHUSUS MOBILE (HANYA MUNCUL DI BAWAH lg) -->
                            <div class="grid grid-cols-2 gap-3 mt-auto lg:hidden">
                                <a href="{{ route($item['route']) }}"
                                    class="flex items-center justify-center gap-2 bg-slate-100 text-slate-900 py-3 rounded-xl font-bold text-xs active:scale-95 transition-all">
                                    <i class="fa-solid fa-laptop-code text-brand-500"></i> Demo
                                </a>
                                <a href="https://wa.me/{{ settings('contact_phone') }}?text=Halo,+saya+ingin+menggunakan+template+{{ $item['uid'] }}"
                                    class="flex items-center justify-center gap-2 bg-brand-500 text-white py-3 rounded-xl font-bold text-xs shadow-md active:scale-95 transition-all">
                                    <i class="fa-brands fa-whatsapp"></i> Pilih
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Footer Footer Seksi -->
            <div class="text-center mt-16 pt-8 border-t border-slate-200">
                <p class="text-slate-500 font-medium italic">Punya konsep sendiri? Kami siap buatkan desain custom
                    khusus untuk Anda.</p>
            </div>

        </div>
    </section>


    <!-- 6. PRICING (PAKET HARGA) -->
    <section id="harga" class="py-24 bg-slate-900 text-white relative overflow-hidden">
        <!-- Abstract Tech Backgrounds -->
        <div
            class="absolute top-0 right-0 w-[400px] h-[400px] bg-brand-500/20 rounded-full mix-blend-screen filter blur-3xl opacity-50">
        </div>
        <div
            class="absolute bottom-0 left-0 w-[400px] h-[400px] bg-cyan-500/20 rounded-full mix-blend-screen filter blur-3xl opacity-50">
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-16">
                <span class="text-brand-400 font-bold tracking-widest text-xs uppercase mb-3 block">Mulai Go
                    Digital</span>
                <h2 class="text-3xl md:text-4xl font-extrabold text-white mb-4">Bangun Website Profesional Anda
                    Sekarang Juga</h2>
                <p class="text-slate-400 max-w-2xl mx-auto font-medium">Semua paket sudah termasuk <strong>Gratis
                        Alamat Web (.com) & Hosting</strong>. Bayar sekali, usaha langsung tampil di Google.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-center max-w-6xl mx-auto">

                <!-- Paket 1: Hemat (Landing Page) -->
                <div
                    class="bg-slate-800/50 backdrop-blur-sm rounded-3xl p-8 border border-slate-700 hover:border-slate-500 transition duration-300">
                    <h3 class="text-xl font-bold text-slate-200 mb-2">Digital Branding</h3>
                    <p class="text-slate-400 text-xs mb-6">Cocok untuk pedagang, jasa, atau promo produk tunggal.
                        Pengerjaan 2-3 hari.</p>
                    <div class="mb-8">
                        <span class="text-4xl font-extrabold text-white">Rp 1,5</span><span
                            class="text-lg text-slate-400"> Jt</span>
                    </div>

                    <ul class="space-y-3 mb-8 text-sm text-slate-300">
                        <li class="flex items-center gap-3"><i class="fa-solid fa-check text-emerald-400"></i> Landing
                            Page / Company Profile</li>
                        <li class="flex items-center gap-3"><i class="fa-solid fa-check text-emerald-400"></i>
                            Desain Responsif & Ringan Di HP</li>
                        <li class="flex items-center gap-3"><i class="fa-solid fa-check text-emerald-400"></i>
                            Integrasi WhatsApp</li>
                        <li class="flex items-center gap-3"><i class="fa-solid fa-check text-emerald-400"></i> Include
                            Domain & Hosting (1 tahun)</li>
                        <li class="flex items-center gap-3"><i class="fa-solid fa-check text-emerald-400"></i>
                            Keamanan SSL</li>

                    </ul>

                    <a href="https://wa.me/{{ settings('contact_phone') }}?text=Halo, saya mau pesan Paket Hemat (1.5 Jt)"
                        class="block w-full text-center bg-slate-700 text-white py-3 rounded-xl font-bold hover:bg-brand-600 transition">Pesan
                        Sekarang</a>
                </div>

                <!-- Paket 2: Populer (Company Profile) -->
                <div
                    class="bg-gradient-to-br from-brand-600 to-brand-800 rounded-3xl p-8 border-2 border-brand-400 shadow-2xl shadow-brand-500/20 transform md:-translate-y-6 relative overflow-hidden">
                    <!-- Label Promo -->
                    <div
                        class="absolute top-0 right-0 bg-amber-400 text-amber-950 text-[10px] font-black uppercase px-4 py-1 rounded-bl-xl shadow-md">
                        Pilihan Terbaik
                    </div>

                    <h3 class="text-xl font-bold text-white mb-2">Infrastuktur Digital</h3>
                    <p class="text-brand-100 text-xs mb-6">Cocok untuk biro travel, pondok pesantren dan bisnis
                        menengah. Pengerjaan 1-2 minggu.</p>
                    <div class="mb-8">
                        <span class="text-4xl font-extrabold text-white">Rp 3,5</span><span
                            class="text-lg text-brand-100"> Jt</span>
                    </div>

                    <ul class="space-y-3 mb-8 text-sm text-white font-medium">
                        <li class="flex items-center gap-3"><i class="fa-solid fa-circle-check text-amber-300"></i>
                            <span class="underline decoration-2">Semua Fitur Digital Branding</span>
                        </li>
                        <li class="flex items-center gap-3"><i class="fa-solid fa-circle-check text-amber-300"></i>
                            Dashboard Admin (Kelola Data) </li>
                        <li class="flex items-center gap-3"><i class="fa-solid fa-circle-check text-amber-300"></i>
                            Panduan Penggunaan Lengkap</li>
                        <li class="flex items-center gap-3"><i class="fa-solid fa-circle-check text-amber-300"></i>
                            Keamanan Berlapis </li>
                        <li class="flex items-center gap-3"><i class="fa-solid fa-circle-check text-amber-300"></i>
                            Dukungan Teknis (6 bulan)</li>
                    </ul>

                    <a href="https://wa.me/{{ settings('contact_phone') }}?text=Halo, saya mau pesan Paket Bisnis (3.5 Jt)"
                        target="_blank"
                        class="block w-full text-center bg-white text-brand-700 py-4 rounded-xl font-black text-black hover:bg-slate-100 transition shadow-xl uppercase text-xs tracking-widest">Ambil
                        Promo Ini</a>
                </div>

                <!-- Paket 3: Toko Online (E-Commerce) -->
                <div
                    class="bg-slate-800/50 backdrop-blur-sm rounded-3xl p-8 border border-slate-700 hover:border-slate-500 transition duration-300">
                    <h3 class="text-xl font-bold text-slate-200 mb-2">Enterprise Custom</h3>
                    <p class="text-slate-400 text-xs mb-6">Arsitektur sistem yang dibangun 100% mengikuti alur kerja
                        bisnis atau lembaga Anda.</p>
                    <div class="mb-8">
                        <span class="text-xs text-slate-500 block mb-1 font-bold italic">Mulai dari</span>
                        <span class="text-4xl font-extrabold text-white">Rp 6,5</span><span
                            class="text-lg text-slate-400"> Jt</span>
                    </div>

                    <ul class="space-y-3 mb-8 text-sm text-slate-300">
                        <li class="flex items-center gap-3"><i class="fa-solid fa-check text-emerald-400"></i>
                            <span class="underline decoration-2">Semua
                                Fitur Infrastruktur Digital</span>
                        </li>
                        <li class="flex items-center gap-3"><i class="fa-solid fa-check text-emerald-400"></i> HAlur
                            Bisnis Sesuai Permintaan</li>
                        <li class="flex items-center gap-3"><i class="fa-solid fa-check text-emerald-400"></i>
                            Integrasi Pembayaran Online</li>
                        <li class="flex items-center gap-3"><i class="fa-solid fa-check text-emerald-400"></i>
                            Pemeliharaan & Update Prioritas</li>
                        <li class="flex items-center gap-3"><i class="fa-solid fa-check text-emerald-400"></i> Sistem
                            Database Skala Besar</li>
                    </ul>

                    <a href="https://wa.me/{{ settings('contact_phone') }}?text=Halo, saya mau tanya-tanya Paket Jualan (5.5 Jt)"
                        class="block w-full text-center bg-slate-700 text-white py-3 rounded-xl font-bold hover:bg-brand-600 transition">Konsultasi
                        Gratis</a>
                </div>
            </div>
        </div>
    </section>

    <!-- 7. CTA BANNER -->
    <section class="py-20 bg-white">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-slate-50 border border-slate-200 rounded-3xl lg:p-10 p-5 md:p-16 text-center shadow-sm">
                <h2 class="text-3xl md:text-4xl font-extrabold text-slate-900 mb-4">Punya Kebutuhan Spesifik?</h2>
                <p class="text-slate-600 mb-8 max-w-2xl mx-auto text-lg">Selain website standar, kami juga melayani
                    pembuatan Website atau App Custom, seperti: <br> <b>Sistem Informasi, Aplikasi Kasir (POS), Web
                        Portal,</b> dan
                    sistem kompleks lainnya yang dibangun menggunakan stack modern <i>(Laravel, NodeJs, ReactJs, NextJs,
                        MongoDB, dll).</i></p>
                <a href="https://wa.me/{{ settings('contact_phone') }}?text=Halo,%20saya%20ingin%20konsultasi%20untuk%20pembuatan%20sistem%20custom"
                    class="inline-flex items-center gap-3 bg-slate-900 text-white px-8 py-4 rounded-full font-bold text-lg hover:bg-brand-600 transition shadow-lg">
                    <i class="fa-solid fa-comments"></i> Mari Diskusi
                </a>
            </div>
        </div>
    </section>

    <section id="faq" class="py-24 bg-slate-900 relative overflow-hidden">
        <!-- Dekorasi Background -->
        <div
            class="absolute top-0 left-1/2 -translate-x-1/2 w-full h-full bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] from-brand-500/5 via-transparent to-transparent pointer-events-none">
        </div>

        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <!-- Header -->
            <div class="text-center mb-16">
                <span class="text-brand-400 font-bold tracking-widest text-xs uppercase mb-3 block">Pertanyaan
                    Umum</span>
                <h2 class="text-3xl md:text-4xl font-extrabold text-white mb-4">Sering Ditanyakan</h2>
                <p class="text-slate-400 font-medium">Masih bingung? Berikut jawaban untuk keraguan Anda.</p>
            </div>

            <!-- FAQ Accordion (Alpine.js) -->
            <div x-data="{ active: 1 }" class="space-y-4">

                <!-- Pertanyaan 1 -->
                <div
                    class="bg-slate-800/50 border border-slate-700 rounded-2xl overflow-hidden transition-all duration-300">
                    <button @click="active = active === 1 ? null : 1"
                        class="w-full flex items-center justify-between p-6 text-left focus:outline-none">
                        <span class="text-white font-bold">Saya gaptek, apakah dibantu sampai websitenya jadi?</span>
                        <i class="fa-solid fa-chevron-down text-brand-400 transition-transform duration-300"
                            :class="active === 1 ? 'rotate-180' : ''"></i>
                    </button>
                    <div x-show="active === 1" x-collapse>
                        <div
                            class="px-6 pb-6 text-slate-400 text-sm leading-relaxed border-t border-slate-700/50 pt-4">
                            Tentu saja! Anda cukup kirimkan foto produk dan nama usaha melalui WhatsApp. Kami yang
                            kerjakan semuanya sampai website aktif dan siap jualan.
                        </div>
                    </div>
                </div>

                <!-- Pertanyaan 2 -->
                <div
                    class="bg-slate-800/50 border border-slate-700 rounded-2xl overflow-hidden transition-all duration-300">
                    <button @click="active = active === 2 ? null : 2"
                        class="w-full flex items-center justify-between p-6 text-left focus:outline-none">
                        <span class="text-white font-bold">Apakah ada biaya bulanan yang harus dibayar?</span>
                        <i class="fa-solid fa-chevron-down text-brand-400 transition-transform duration-300"
                            :class="active === 2 ? 'rotate-180' : ''"></i>
                    </button>
                    <div x-show="active === 2" x-collapse>
                        <div
                            class="px-6 pb-6 text-slate-400 text-sm leading-relaxed border-t border-slate-700/50 pt-4">
                            <strong>Tidak ada biaya bulanan.</strong> Anda cukup bayar sekali di depan. Biaya
                            perpanjangan (Domain & Hosting) baru dibayar 1 tahun kemudian dengan harga yang sangat
                            terjangkau.
                        </div>
                    </div>
                </div>

                <!-- Pertanyaan 3 -->
                <div
                    class="bg-slate-800/50 border border-slate-700 rounded-2xl overflow-hidden transition-all duration-300">
                    <button @click="active = active === 3 ? null : 3"
                        class="w-full flex items-center justify-between p-6 text-left focus:outline-none">
                        <span class="text-white font-bold">Berapa lama proses pengerjaannya?</span>
                        <i class="fa-solid fa-chevron-down text-brand-400 transition-transform duration-300"
                            :class="active === 3 ? 'rotate-180' : ''"></i>
                    </button>
                    <div x-show="active === 3" x-collapse>
                        <div
                            class="px-6 pb-6 text-slate-400 text-sm leading-relaxed border-t border-slate-700/50 pt-4">
                            Untuk Paket Hemat, website Anda bisa online dalam <strong>3-5 hari kerja</strong> setelah
                            semua data kami terima.
                        </div>
                    </div>
                </div>

                <!-- Pertanyaan 4 -->
                <div
                    class="bg-slate-800/50 border border-slate-700 rounded-2xl overflow-hidden transition-all duration-300">
                    <button @click="active = active === 4 ? null : 4"
                        class="w-full flex items-center justify-between p-6 text-left focus:outline-none">
                        <span class="text-white font-bold">Bisa ganti-ganti tulisan atau foto sendiri nantinya?</span>
                        <i class="fa-solid fa-chevron-down text-brand-400 transition-transform duration-300"
                            :class="active === 4 ? 'rotate-180' : ''"></i>
                    </button>
                    <div x-show="active === 4" x-collapse>
                        <div
                            class="px-6 pb-6 text-slate-400 text-sm leading-relaxed border-t border-slate-700/50 pt-4">
                            Bisa! Kami menggunakan sistem yang mudah. Kami juga akan memberikan panduan singkat agar
                            Anda bisa mengubah harga atau foto produk secara mandiri.
                        </div>
                    </div>
                </div>

                <div
                    class="bg-slate-800/50 border border-slate-700 rounded-2xl overflow-hidden transition-all duration-300">
                    <button @click="active = active === 5 ? null : 5"
                        class="w-full flex items-center justify-between p-6 text-left focus:outline-none">
                        <span class="text-white font-bold">Apakah website saya bisa muncul di pencarian Google?</span>
                        <i class="fa-solid fa-chevron-down text-brand-400 transition-transform duration-300"
                            :class="active === 5 ? 'rotate-180' : ''"></i>
                    </button>
                    <div x-show="active === 5" x-collapse>
                        <div
                            class="px-6 pb-6 text-slate-400 text-sm leading-relaxed border-t border-slate-700/50 pt-4">
                            <strong>Pasti.</strong> Kami membantu mendaftarkan website Anda ke Google (Search Console)
                            agar usaha Anda bisa ditemukan saat orang mencari nama usaha Anda.
                        </div>
                    </div>
                </div>

                <!-- Pertanyaan 6 -->
                <div
                    class="bg-slate-800/50 border border-slate-700 rounded-2xl overflow-hidden transition-all duration-300">
                    <button @click="active = active === 6 ? null : 6"
                        class="w-full flex items-center justify-between p-6 text-left focus:outline-none">
                        <span class="text-white font-bold">Bagaimana sistem pembayarannya? Apakah aman?</span>
                        <i class="fa-solid fa-chevron-down text-brand-400 transition-transform duration-300"
                            :class="active === 6 ? 'rotate-180' : ''"></i>
                    </button>
                    <div x-show="active === 6" x-collapse>
                        <div
                            class="px-6 pb-6 text-slate-400 text-sm leading-relaxed border-t border-slate-700/50 pt-4">
                            Sangat aman. Sistem kami menggunakan <strong>DP (Uang Muka) 50%</strong> di awal sebagai
                            tanda jadi pengerjaan, dan pelunasan dilakukan setelah website selesai dan Anda cek
                            kualitasnya.
                        </div>
                    </div>
                </div>

                <!-- Pertanyaan 7 -->
                <div
                    class="bg-slate-800/50 border border-slate-700 rounded-2xl overflow-hidden transition-all duration-300">
                    <button @click="active = active === 7 ? null : 7"
                        class="w-full flex items-center justify-between p-6 text-left focus:outline-none">
                        <span class="text-white font-bold">Kalau domain/hosting habis tahun depan, gimana?</span>
                        <i class="fa-solid fa-chevron-down text-brand-400 transition-transform duration-300"
                            :class="active === 7 ? 'rotate-180' : ''"></i>
                    </button>
                    <div x-show="active === 7" x-collapse>
                        <div
                            class="px-6 pb-6 text-slate-400 text-sm leading-relaxed border-t border-slate-700/50 pt-4">
                            Jangan khawatir. Kami akan <strong>mengingatkan Anda 1 bulan sebelum jatuh tempo</strong>
                            agar website tidak mati. Kami akan bantu proses perpanjangannya sehingga Anda tinggal terima
                            beres.
                        </div>
                    </div>
                </div>

                <!-- Pertanyaan 8 -->
                <div
                    class="bg-slate-800/50 border border-slate-700 rounded-2xl overflow-hidden transition-all duration-300">
                    <button @click="active = active === 8 ? null : 8"
                        class="w-full flex items-center justify-between p-6 text-left focus:outline-none">
                        <span class="text-white font-bold">Bisa pakai nama usaha saya sendiri untuk alamat
                            webnya?</span>
                        <i class="fa-solid fa-chevron-down text-brand-400 transition-transform duration-300"
                            :class="active === 8 ? 'rotate-180' : ''"></i>
                    </button>
                    <div x-show="active === 8" x-collapse>
                        <div
                            class="px-6 pb-6 text-slate-400 text-sm leading-relaxed border-t border-slate-700/50 pt-4">
                            Bisa banget! Selama nama domain tersebut belum dipakai orang lain, Anda bebas menentukan
                            alamat webnya (contoh: www.tokoecho.com atau www.jasaservis-batam.com).
                        </div>
                    </div>
                </div>

            </div>

            <!-- Footer FAQ -->
            <div class="text-center mt-12">
                <p class="text-slate-500 text-sm">Pertanyaan Anda belum terjawab?
                    <a href="https://wa.me/{{ settings('contact_phone') }}"
                        class="text-brand-400 font-bold hover:underline">Tanya langsung via WhatsApp</a>
                </p>
            </div>
        </div>
    </section>

    <!-- 8. FOOTER -->
    <footer class="bg-white border-t border-slate-200 pt-16 pb-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-12">
                <!-- Brand -->
                <div class="md:col-span-1">
                    <div class="flex items-center gap-2 mb-6">
                        <div class="w-8 h-8 rounded-xl  flex items-center justify-center ">
                            <!-- Mengganti ikon <i> dengan <img> -->
                            <img src="{{ asset('favicon.ico') }}" alt="Logo" class="object-contain">
                        </div>
                        <span class="text-xl font-extrabold text-slate-900 tracking-tight">Web<span
                                class="text-brand-500">Elijabah.</span></span>
                    </div>
                    <p class="text-slate-500 text-sm leading-relaxed mb-6">{{ settings('app_description') }}</p>
                    <div class="flex gap-4">
                        <a href="#" class="text-slate-400 hover:text-brand-500 transition text-xl"><i
                                class="fa-brands fa-linkedin"></i></a>
                        <a href="#" class="text-slate-400 hover:text-brand-500 transition text-xl"><i
                                class="fa-brands fa-instagram"></i></a>
                        <a href="#" class="text-slate-400 hover:text-brand-500 transition text-xl"><i
                                class="fa-brands fa-github"></i></a>
                    </div>
                </div>

                <!-- Lintas Tautan -->
                <div>
                    <h4 class="font-bold text-slate-900 mb-6">Layanan Menu</h4>
                    <ul class="space-y-3 text-sm font-medium text-slate-500">
                        <li><a href="#hero" class="hover:text-brand-500 transition">Beranda</a></li>
                        <li><a href="#layanan" class="hover:text-brand-500 transition">Jasa Website</a></li>
                        <li><a href="#template" class="hover:text-brand-500 transition">Template</a></li>
                        <li><a href="#harga" class="hover:text-brand-500 transition">Daftar Harga</a></li>
                    </ul>
                </div>

                <!-- Kebijakan -->
                <div>
                    <h4 class="font-bold text-slate-900 mb-6">Kebijakan Bisnis</h4>
                    <ul class="space-y-3 text-sm font-medium text-slate-500">
                        <li><a href="#" class="hover:text-brand-500 transition">Terms of Service</a></li>
                        <li><a href="#" class="hover:text-brand-500 transition">Privacy Policy</a></li>
                        <li><a href="#" class="hover:text-brand-500 transition">Kebijakan Refund</a></li>
                        <li><a href="#" class="hover:text-brand-500 transition">Maintenance Support</a></li>
                    </ul>
                </div>

                <!-- Kontak -->
                <div>
                    <h4 class="font-bold text-slate-900 mb-6">Kontak Admin</h4>
                    <ul class="space-y-4 text-sm font-medium text-slate-500">
                        <li class="flex items-center gap-3"><i class="fa-solid fa-envelope text-brand-500"></i>
                            {{ settings('contact_email') }}</li>
                        <li class="flex items-center gap-3"><i
                                class="fa-brands fa-whatsapp text-brand-500 text-lg"></i>
                            {{ settings('contact_phone') }}</li>

                    </ul>
                </div>
            </div>

            <!-- Copyright -->
            <div
                class="border-t border-slate-200 pt-8 flex flex-col md:flex-row justify-between items-center gap-4 text-slate-400 text-sm font-medium">
                <p>&copy; 2026 Elijabah International Group. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Floating WhatsApp Button -->
    <a href="https://wa.me/{{ settings('contact_phone') }}?text=Halo,+saya+ingin+tanya+tentang+jasa+pembuatan+website"
        target="_blank" class="fixed bottom-6 right-6 z-[999] group">

        <!-- Label Tooltip (Muncul saat di-hover) -->
        <span
            class="absolute right-full mr-4 top-1/2 -translate-y-1/2 bg-white text-slate-900 px-4 py-2 rounded-xl shadow-xl text-sm font-bold border border-slate-100 opacity-0 group-hover:opacity-100 transition-all duration-300 pointer-events-none whitespace-nowrap">
            Ada pertanyaan? Chat kami
        </span>

        <!-- Efek Ping (Gelombang di belakang tombol) -->
        <span class="absolute inset-0 rounded-full bg-emerald-500 animate-ping opacity-20"></span>

        <!-- Tombol Utama -->
        <div
            class="relative bg-emerald-500 text-white w-14 h-14 md:w-16 md:h-16 rounded-full shadow-2xl flex items-center justify-center text-3xl transition-all duration-300 group-hover:scale-110 group-hover:bg-emerald-600 group-active:scale-95">
            <i class="fa-brands fa-whatsapp"></i>
        </div>
    </a>

</body>

</html>
