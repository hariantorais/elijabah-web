<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jasa Pembuatan Website - Tech Startup Theme</title>

    <!-- Tailwind CSS & Alpine JS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Font: Plus Jakarta Sans -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brand: {
                            50: '#f0f9ff',
                            100: '#e0f2fe',
                            400: '#38bdf8', // Light Blue
                            500: '#0ea5e9', // Sky Blue
                            600: '#0284c7', // Ocean Blue
                            800: '#075985',
                            900: '#0c4a6e',
                        },
                        cyan: {
                            400: '#22d3ee',
                            500: '#06b6d4',
                        }
                    },
                    fontFamily: {
                        sans: ['"Plus Jakarta Sans"', 'sans-serif'],
                    },
                    backgroundImage: {
                        'gradient-radial': 'radial-gradient(var(--tw-gradient-stops))',
                        'tech-gradient': 'linear-gradient(to right, #0284c7, #06b6d4)',
                    }
                }
            }
        }
    </script>

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
                    <div
                        class="w-10 h-10 rounded-xl bg-tech-gradient text-white flex items-center justify-center text-xl shadow-lg shadow-brand-500/30">
                        <i class="fa-solid fa-code"></i>
                    </div>
                    <span class="text-2xl font-extrabold text-slate-900 tracking-tight">Web<span
                            class="text-transparent bg-clip-text bg-tech-gradient">Crafter.</span></span>
                </div>

                <!-- Desktop Menu -->
                <div class="hidden md:flex space-x-8 items-center font-semibold text-slate-600 text-sm">
                    <a href="#hero" class="hover:text-brand-600 transition">Beranda</a>
                    <a href="#layanan" class="hover:text-brand-600 transition">Layanan</a>
                    <a href="#portfolio" class="hover:text-brand-600 transition">Portofolio</a>
                    <a href="#harga" class="hover:text-brand-600 transition">Harga</a>
                </div>

                <!-- Desktop CTA -->
                <div class="hidden md:block">
                    <a href="https://wa.me/62812345678"
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
                <a href="#portfolio" @click="mobileMenu = false"
                    class="block font-bold text-slate-700 text-lg hover:text-brand-600">Portofolio</a>
                <a href="#harga" @click="mobileMenu = false"
                    class="block font-bold text-slate-700 text-lg hover:text-brand-600">Harga Paket</a>
                <a href="https://wa.me/62812345678"
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
                        Kami membantu UMKM & Perusahaan membangun identitas digital yang profesional, responsif, dan
                        siap mendatangkan lebih banyak klien.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                        <a href="#harga"
                            class="bg-tech-gradient text-white px-8 py-3.5 rounded-full font-bold hover:shadow-lg hover:shadow-brand-500/40 transition duration-300 text-center flex items-center justify-center gap-2">
                            Lihat Harga <i class="fa-solid fa-arrow-right"></i>
                        </a>
                        <a href="#portfolio"
                            class="bg-white border-2 border-slate-200 text-slate-700 px-8 py-3.5 rounded-full font-bold hover:border-brand-500 hover:text-brand-600 transition duration-300 text-center">
                            Lihat Portofolio
                        </a>
                    </div>

                    <!-- Tech Stack Icons -->
                    <div
                        class="mt-10 pt-8 border-t border-slate-200 flex flex-wrap justify-center lg:justify-start items-center gap-6 text-slate-400 text-2xl">
                        <p
                            class="text-xs font-bold uppercase tracking-widest text-slate-500 w-full text-center lg:text-left mb-2">
                            Dibangun dengan teknologi modern:</p>
                        <i class="fa-brands fa-laravel hover:text-red-500 transition cursor-pointer"
                            title="Laravel"></i>
                        <i class="fa-brands fa-react hover:text-cyan-400 transition cursor-pointer"
                            title="React JS"></i>
                        <i class="fa-brands fa-vuejs hover:text-emerald-500 transition cursor-pointer"
                            title="Vue JS"></i>
                        <i class="fa-brands fa-wordpress hover:text-blue-500 transition cursor-pointer"
                            title="WordPress"></i>
                        <i class="fa-brands fa-figma hover:text-purple-500 transition cursor-pointer"
                            title="Figma"></i>
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
                    <h3 class="text-lg font-bold text-slate-900 mb-2">Support 1 Bulan</h3>
                    <p class="text-slate-500 text-sm">Gratis perbaikan bug dan konsultasi teknis selama 30 hari setelah
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

    <!-- 5. PORTFOLIO KARYA -->
    <section id="portfolio" class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <span class="text-brand-600 font-bold tracking-widest text-xs uppercase mb-3 block">Karya Kami</span>
                <h2 class="text-3xl md:text-4xl font-extrabold text-slate-900 mb-4">Proyek Terbaru</h2>
                <p class="text-slate-500 max-w-2xl mx-auto font-medium">Beberapa website yang telah kami selesaikan
                    untuk membantu klien mencapai target bisnis mereka.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Portofolio 1 -->
                <div class="group cursor-pointer">
                    <div class="bg-slate-100 rounded-2xl overflow-hidden mb-4 relative border border-slate-200">
                        <img src="{{ asset('images/portfolio1.png') }}" alt="Portofolio"
                            class="w-full h-56 object-cover object-top group-hover:scale-105 transition duration-500"
                            style="background: #cbd5e1;">
                        <div
                            class="absolute inset-0 bg-slate-900/60 opacity-0 group-hover:opacity-100 transition duration-300 flex items-center justify-center">
                            <span class="bg-brand-500 text-white px-4 py-2 rounded-full font-bold text-sm">Lihat
                                Detail</span>
                        </div>
                    </div>
                    <div>
                        <p class="text-xs text-brand-600 font-bold uppercase mb-1">Company Profile</p>
                        <h3 class="text-xl font-bold text-slate-900">Arsitek Studio Jakarta</h3>
                    </div>
                </div>

                <!-- Portofolio 2 -->
                <div class="group cursor-pointer">
                    <div class="bg-slate-100 rounded-2xl overflow-hidden mb-4 relative border border-slate-200">
                        <img src="{{ asset('images/portfolio2.png') }}" alt="Portofolio"
                            class="w-full h-56 object-cover object-top group-hover:scale-105 transition duration-500"
                            style="background: #cbd5e1;">
                        <div
                            class="absolute inset-0 bg-slate-900/60 opacity-0 group-hover:opacity-100 transition duration-300 flex items-center justify-center">
                            <span class="bg-cyan-500 text-white px-4 py-2 rounded-full font-bold text-sm">Lihat
                                Detail</span>
                        </div>
                    </div>
                    <div>
                        <p class="text-xs text-cyan-600 font-bold uppercase mb-1">E-Commerce</p>
                        <h3 class="text-xl font-bold text-slate-900">Local Fashion Brand</h3>
                    </div>
                </div>

                <!-- Portofolio 3 -->
                <div class="group cursor-pointer">
                    <div class="bg-slate-100 rounded-2xl overflow-hidden mb-4 relative border border-slate-200">
                        <img src="{{ asset('images/portfolio3.png') }}" alt="Portofolio"
                            class="w-full h-56 object-cover object-top group-hover:scale-105 transition duration-500"
                            style="background: #cbd5e1;">
                        <div
                            class="absolute inset-0 bg-slate-900/60 opacity-0 group-hover:opacity-100 transition duration-300 flex items-center justify-center">
                            <span class="bg-brand-500 text-white px-4 py-2 rounded-full font-bold text-sm">Lihat
                                Detail</span>
                        </div>
                    </div>
                    <div>
                        <p class="text-xs text-brand-600 font-bold uppercase mb-1">Landing Page</p>
                        <h3 class="text-xl font-bold text-slate-900">Promo Properti Bintaro</h3>
                    </div>
                </div>
            </div>

            <div class="text-center mt-12">
                <a href="https://wa.me/62812345678"
                    class="inline-flex items-center gap-2 text-slate-600 font-bold hover:text-brand-600 transition border-b-2 border-slate-300 hover:border-brand-600 pb-1">
                    Ingin desain seperti di atas? Hubungi kami.
                </a>
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
                <h2 class="text-3xl md:text-4xl font-extrabold text-white mb-4">Investasi Digital Anda</h2>
                <p class="text-slate-400 max-w-2xl mx-auto font-medium">Harga transparan tanpa biaya tersembunyi. Semua
                    paket sudah termasuk Gratis Domain (.com) & Hosting 1 Tahun.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-center max-w-5xl mx-auto">
                <!-- Package 1: Basic -->
                <div class="bg-slate-800 rounded-3xl p-8 border border-slate-700">
                    <h3 class="text-xl font-bold text-slate-300 mb-2">Landing Page</h3>
                    <p class="text-slate-400 text-sm mb-6">Cocok untuk promosi 1 produk / jasa spesifik.</p>
                    <div class="mb-8">
                        <span class="text-4xl font-extrabold text-white">Rp 1,5</span><span
                            class="text-lg text-slate-400"> Jt</span>
                    </div>
                    <ul class="space-y-4 mb-8 text-sm text-slate-300">
                        <li class="flex items-center gap-3"><i class="fa-solid fa-check text-brand-400"></i> Desain 1
                            Halaman Panjang</li>
                        <li class="flex items-center gap-3"><i class="fa-solid fa-check text-brand-400"></i>
                            Copywriting Standar</li>
                        <li class="flex items-center gap-3"><i class="fa-solid fa-check text-brand-400"></i> Tombol
                            Melayang WA</li>
                        <li class="flex items-center gap-3"><i class="fa-solid fa-check text-brand-400"></i>
                            Pengerjaan 3-5 Hari</li>
                    </ul>
                    <a href="https://wa.me/62812345678?text=Halo,%20saya%20mau%20pesan%20Paket%20Landing%20Page"
                        class="block w-full text-center bg-slate-700 text-white py-3 rounded-xl font-bold hover:bg-slate-600 transition">Pilih
                        Paket</a>
                </div>

                <!-- Package 2: Pro (Highlighted) -->
                <div
                    class="bg-tech-gradient rounded-3xl p-8 border border-brand-400 shadow-2xl shadow-brand-500/20 transform md:-translate-y-4 relative">
                    <div
                        class="absolute top-0 right-8 bg-amber-400 text-amber-900 text-[10px] font-extrabold uppercase px-3 py-1 rounded-b-lg">
                        Paling Populer</div>
                    <h3 class="text-xl font-bold text-white mb-2">Company Profile</h3>
                    <p class="text-brand-100 text-sm mb-6">Untuk perusahaan UMKM agar tampil profesional.</p>
                    <div class="mb-8">
                        <span class="text-4xl font-extrabold text-white">Rp 3,5</span><span
                            class="text-lg text-brand-100"> Jt</span>
                    </div>
                    <ul class="space-y-4 mb-8 text-sm text-white font-medium">
                        <li class="flex items-center gap-3"><i class="fa-solid fa-circle-check text-white"></i>
                            Maksimal 5 Halaman</li>
                        <li class="flex items-center gap-3"><i class="fa-solid fa-circle-check text-white"></i> Desain
                            Premium & Animasi</li>
                        <li class="flex items-center gap-3"><i class="fa-solid fa-circle-check text-white"></i> Email
                            Bisnis (nama@domain.com)</li>
                        <li class="flex items-center gap-3"><i class="fa-solid fa-circle-check text-white"></i>
                            Pengerjaan 7-10 Hari</li>
                        <li class="flex items-center gap-3"><i class="fa-solid fa-circle-check text-white"></i> Setup
                            SEO Basic</li>
                    </ul>
                    <a href="https://wa.me/62812345678?text=Halo,%20saya%20mau%20pesan%20Paket%20Company%20Profile"
                        class="block w-full text-center bg-white text-brand-600 py-3 rounded-xl font-bold hover:bg-slate-50 transition shadow-lg">Pilih
                        Paket Pro</a>
                </div>

                <!-- Package 3: E-Commerce -->
                <div class="bg-slate-800 rounded-3xl p-8 border border-slate-700">
                    <h3 class="text-xl font-bold text-slate-300 mb-2">E-Commerce</h3>
                    <p class="text-slate-400 text-sm mb-6">Sistem toko online canggih serba otomatis.</p>
                    <div class="mb-8">
                        <span class="text-xs text-slate-400 block mb-1">Mulai dari</span>
                        <span class="text-4xl font-extrabold text-white">Rp 5,5</span><span
                            class="text-lg text-slate-400"> Jt</span>
                    </div>
                    <ul class="space-y-4 mb-8 text-sm text-slate-300">
                        <li class="flex items-center gap-3"><i class="fa-solid fa-check text-brand-400"></i> Unlimited
                            Input Produk</li>
                        <li class="flex items-center gap-3"><i class="fa-solid fa-check text-brand-400"></i> Payment
                            Gateway (BCA, OVO, dll)</li>
                        <li class="flex items-center gap-3"><i class="fa-solid fa-check text-brand-400"></i> Integrasi
                            Kurir (JNE, Sicepat, dll)</li>
                        <li class="flex items-center gap-3"><i class="fa-solid fa-check text-brand-400"></i> Fitur
                            Keranjang & Checkout</li>
                    </ul>
                    <a href="https://wa.me/62812345678?text=Halo,%20saya%20mau%20konsultasi%20Paket%20E-Commerce"
                        class="block w-full text-center bg-slate-700 text-white py-3 rounded-xl font-bold hover:bg-slate-600 transition">Konsultasi
                        Dulu</a>
                </div>
            </div>
        </div>
    </section>

    <!-- 7. CTA BANNER -->
    <section class="py-20 bg-white">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-slate-50 border border-slate-200 rounded-3xl p-10 md:p-16 text-center shadow-sm">
                <h2 class="text-3xl md:text-4xl font-extrabold text-slate-900 mb-4">Punya Kebutuhan Spesifik? (Custom
                    Web App)</h2>
                <p class="text-slate-600 mb-8 max-w-2xl mx-auto text-lg">Selain website standar, kami juga melayani
                    pembuatan Sistem Informasi, Aplikasi Kasir (POS), Web Portal, dan sistem *custom* menggunakan
                    Laravel / React.</p>
                <a href="https://wa.me/62812345678"
                    class="inline-flex items-center gap-3 bg-slate-900 text-white px-8 py-4 rounded-full font-bold text-lg hover:bg-brand-600 transition shadow-lg">
                    <i class="fa-solid fa-comments"></i> Mari Diskusi Bersama
                </a>
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
                        <div
                            class="w-8 h-8 rounded-lg bg-tech-gradient text-white flex items-center justify-center text-sm">
                            <i class="fa-solid fa-code"></i>
                        </div>
                        <span class="text-xl font-extrabold text-slate-900 tracking-tight">Web<span
                                class="text-brand-500">Crafter.</span></span>
                    </div>
                    <p class="text-slate-500 text-sm leading-relaxed mb-6">Partner teknologi terpercaya untuk
                        mentransformasi ide bisnis UMKM menjadi produk digital yang elegan dan berkinerja tinggi.</p>
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
                        <li><a href="#portfolio" class="hover:text-brand-500 transition">Hasil Kerja</a></li>
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
                    <h4 class="font-bold text-slate-900 mb-6">Kontak Developer</h4>
                    <ul class="space-y-4 text-sm font-medium text-slate-500">
                        <li class="flex items-center gap-3"><i class="fa-solid fa-envelope text-brand-500"></i>
                            hello@webcrafter.id</li>
                        <li class="flex items-center gap-3"><i
                                class="fa-brands fa-whatsapp text-brand-500 text-lg"></i> +62 812 3456 7890</li>
                        <li
                            class="flex items-start gap-3 mt-4 text-xs bg-slate-50 p-3 rounded-lg border border-slate-100">
                            <i class="fa-solid fa-clock mt-0.5 text-brand-500"></i>
                            Senin - Jumat (09.00 - 17.00 WIB)<br>Sabtu & Minggu Libur
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Copyright -->
            <div
                class="border-t border-slate-200 pt-8 flex flex-col md:flex-row justify-between items-center gap-4 text-slate-400 text-sm font-medium">
                <p>&copy; 2026 WebCrafter Agency. Hak Cipta Dilindungi.</p>
                <p>Designed with Tailwind CSS.</p>
            </div>
        </div>
    </footer>

</body>

</html>
