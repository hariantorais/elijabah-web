<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UMKM Jasa - Professional & Trustworthy Theme</title>

    <!-- Tailwind CSS & Alpine JS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Font: Inter -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: {
                            50: '#eff6ff',
                            100: '#dbeafe',
                            500: '#3b82f6',
                            600: '#2563eb', // Main Blue
                            700: '#1d4ed8',
                            800: '#1e40af',
                            900: '#1e3a8a', // Dark Navy
                            950: '#172554',
                        },
                        accent: {
                            400: '#facc15',
                            500: '#eab308', // Yellow CTA
                            600: '#ca8a04',
                        }
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    }
                }
            }
        }
    </script>

    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8fafc;
            color: #334155;
        }

        [x-cloak] {
            display: none !important;
        }

        .bg-pattern {
            background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.05'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
        }
    </style>
</head>

<body class="antialiased selection:bg-primary-500 selection:text-white">

    <!-- 1. TOP BAR (Kontak Cepat) -->
    <div class="bg-primary-950 text-slate-300 text-xs py-2 hidden md:block">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex justify-between items-center">
            <div class="flex gap-6">
                <span class="flex items-center gap-2"><i class="fa-solid fa-clock text-accent-500"></i> Buka: Senin -
                    Minggu (08:00 - 20:00)</span>
                <span class="flex items-center gap-2"><i class="fa-solid fa-location-dot text-accent-500"></i> Melayani
                    seluruh area Jabodetabek</span>
            </div>
            <div class="flex gap-4">
                <a href="#" class="hover:text-white transition"><i class="fa-brands fa-instagram"></i></a>
                <a href="#" class="hover:text-white transition"><i class="fa-brands fa-facebook"></i></a>
            </div>
        </div>
    </div>

    <!-- 2. NAVBAR -->
    <nav x-data="{ mobileMenu: false, scrolled: false }" @scroll.window="scrolled = (window.pageYOffset > 20)"
        class="fixed w-full z-50 transition-all duration-300 border-b border-slate-200"
        :class="scrolled ? 'bg-white/95 backdrop-blur-md shadow-md py-4' : 'bg-white py-5'" style="top: auto;">
        <!-- Adjust if fixed top overlaps topbar -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center gap-2">
                    <div
                        class="w-10 h-10 bg-primary-600 text-white rounded-lg flex items-center justify-center text-xl shadow-md">
                        <i class="fa-solid fa-screwdriver-wrench"></i>
                    </div>
                    <span class="text-2xl font-black text-slate-900 tracking-tight">Karya<span
                            class="text-primary-600">Jasa</span></span>
                </div>

                <!-- Desktop Menu -->
                <div class="hidden md:flex space-x-8 items-center font-medium text-slate-600 text-sm">
                    <a href="#hero" class="hover:text-primary-600 transition">Beranda</a>
                    <a href="#layanan" class="hover:text-primary-600 transition">Layanan</a>
                    <a href="#keunggulan" class="hover:text-primary-600 transition">Mengapa Kami</a>
                    <a href="#testimoni" class="hover:text-primary-600 transition">Testimoni</a>
                </div>

                <!-- Desktop CTA -->
                <div class="hidden md:block">
                    <a href="#"
                        class="bg-primary-600 text-white px-6 py-2.5 rounded-lg font-bold hover:bg-primary-700 transition shadow-md flex items-center gap-2">
                        <i class="fa-brands fa-whatsapp text-lg text-accent-400"></i> Panggil Teknisi
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
            class="md:hidden bg-white absolute w-full shadow-xl border-t border-slate-100">
            <div class="px-4 py-6 space-y-2 text-center">
                <a href="#hero" @click="mobileMenu = false"
                    class="block font-semibold text-slate-700 py-2 hover:bg-primary-50 hover:text-primary-600 rounded-lg">Beranda</a>
                <a href="#layanan" @click="mobileMenu = false"
                    class="block font-semibold text-slate-700 py-2 hover:bg-primary-50 hover:text-primary-600 rounded-lg">Layanan
                    Kami</a>
                <a href="#keunggulan" @click="mobileMenu = false"
                    class="block font-semibold text-slate-700 py-2 hover:bg-primary-50 hover:text-primary-600 rounded-lg">Keunggulan</a>
                <a href="#testimoni" @click="mobileMenu = false"
                    class="block font-semibold text-slate-700 py-2 hover:bg-primary-50 hover:text-primary-600 rounded-lg">Testimoni</a>
                <a href="#"
                    class="block w-full bg-primary-600 text-white py-3 rounded-lg font-bold mt-4 shadow-md">
                    Hubungi via WhatsApp
                </a>
            </div>
        </div>
    </nav>

    <!-- 3. HERO SECTION (DARK BLUE PROFESSIONAL) -->
    <section id="hero" class="relative pt-32 pb-24 lg:pt-48 lg:pb-32 bg-primary-900 bg-pattern overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-r from-primary-950 to-primary-800/80"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="flex flex-col lg:flex-row items-center gap-12">

                <!-- Text Content -->
                <div class="w-full lg:w-1/2 text-center lg:text-left">

                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-black text-white leading-tight mb-6">
                        Solusi Tepat Untuk <br>
                        <span class="text-accent-400">Masalah Rumah & Kantor</span> Anda.
                    </h1>
                    <p class="text-lg text-primary-100 mb-8 max-w-xl mx-auto lg:mx-0 font-normal leading-relaxed">
                        Kami menyediakan layanan service AC, kelistrikan, dan perbaikan perabotan dengan teknisi
                        berpengalaman, cepat, dan bergaransi resmi.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                        <a href="#"
                            class="bg-accent-500 text-slate-900 px-8 py-4 rounded-lg font-bold hover:bg-accent-400 transition shadow-lg text-center flex items-center justify-center gap-2">
                            <i class="fa-brands fa-whatsapp text-xl"></i> Konsultasi Gratis
                        </a>
                        <a href="#layanan"
                            class="bg-transparent border border-primary-400 text-white px-8 py-4 rounded-lg font-bold hover:bg-primary-800 transition text-center">
                            Lihat Layanan
                        </a>
                    </div>

                    <!-- Trust Indicators -->
                    <div
                        class="mt-10 flex flex-wrap justify-center lg:justify-start gap-6 text-sm font-semibold text-gray-300">
                        <div class="flex items-center gap-2"><i class="fa-solid fa-check-circle text-accent-500"></i>
                            Teknisi Bersertifikat</div>
                        <div class="flex items-center gap-2"><i class="fa-solid fa-shield-halved text-accent-500"></i>
                            Garansi 30 Hari</div>
                        <div class="flex items-center gap-2"><i class="fa-solid fa-bolt text-accent-500"></i> Respon
                            Cepat</div>
                    </div>
                </div>

                <!-- Image Content -->
                <div class="w-full lg:w-1/2 relative">
                    <img src="{{ asset('images/jasa-hero.png') }}" alt="Teknisi Bekerja"
                        class="w-full max-w-lg mx-auto object-cover rounded-2xl shadow-2xl relative z-10 border-4 border-white/10">

                    <!-- Floating Stats Card -->
                    <div
                        class="absolute -bottom-6 -left-4 md:-left-10 bg-white p-5 rounded-xl shadow-2xl border border-slate-100 z-20 flex items-center gap-4">
                        <div
                            class="w-12 h-12 bg-primary-50 text-primary-600 rounded-full flex items-center justify-center text-2xl">
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <div>
                            <p class="text-2xl font-black text-slate-900">4.9/5</p>
                            <p class="text-xs text-slate-500 font-bold uppercase tracking-wider">Dari 1,200+ Pelanggan
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 4. HIGHLIGHT BAR -->
    <section class="bg-primary-600 py-8 relative z-20 shadow-xl hidden md:block">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center text-white divide-x divide-primary-400/50">
                <div class="px-6 text-center w-full">
                    <p class="text-3xl font-black mb-1">1,200+</p>
                    <p class="text-xs text-primary-200 font-medium uppercase tracking-wider">Proyek Selesai</p>
                </div>
                <div class="px-6 text-center w-full">
                    <p class="text-3xl font-black mb-1">15</p>
                    <p class="text-xs text-primary-200 font-medium uppercase tracking-wider">Teknisi Ahli</p>
                </div>
                <div class="px-6 text-center w-full">
                    <p class="text-3xl font-black mb-1">100%</p>
                    <p class="text-xs text-primary-200 font-medium uppercase tracking-wider">Transparan Harga</p>
                </div>
                <div class="px-6 text-center w-full">
                    <p class="text-3xl font-black mb-1">24/7</p>
                    <p class="text-xs text-primary-200 font-medium uppercase tracking-wider">Customer Support</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. DAFTAR LAYANAN -->
    <section id="layanan" class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-2xl mx-auto mb-16">
                <span class="text-primary-600 font-bold tracking-widest text-sm uppercase mb-2 block">Layanan
                    Profesional</span>
                <h2 class="text-3xl md:text-4xl font-black text-slate-900 mb-4">Apa Yang Bisa Kami Bantu?</h2>
                <p class="text-slate-600 text-lg">Pilih layanan yang Anda butuhkan. Harga transparan dan pengerjaan
                    dilakukan langsung di lokasi Anda.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Layanan 1 -->
                <div
                    class="bg-slate-50 rounded-2xl overflow-hidden border border-slate-200 hover:shadow-xl transition-all duration-300 group">
                    <div class="h-48 relative overflow-hidden">
                        <img src="{{ asset('images/jasa1.png') }}" alt="Service AC"
                            class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                    </div>
                    <div class="p-8">
                        <div class="flex justify-between items-start mb-4">
                            <h3 class="text-xl font-bold text-slate-900">Service AC & Cuci</h3>
                            <div
                                class="w-10 h-10 bg-primary-100 text-primary-600 rounded-lg flex items-center justify-center text-lg">
                                <i class="fa-solid fa-snowflake"></i>
                            </div>
                        </div>
                        <p class="text-slate-600 text-sm mb-6 line-clamp-3">Layanan cuci AC, perbaikan AC tidak dingin,
                            isi freon, bongkar pasang, dan perawatan rutin AC Split/Inverter.</p>
                        <div class="mb-6">
                            <span class="text-xs text-slate-500 font-semibold block">Mulai dari</span>
                            <span class="text-2xl font-black text-primary-600">Rp 75.000</span>
                        </div>
                        <a href="#?text=Halo%20admin,%20saya%20mau%20pesan%20layanan%20Service%20AC" target="_blank"
                            class="block w-full text-center border-2 border-primary-600 text-primary-600 py-2.5 rounded-lg font-bold hover:bg-primary-600 hover:text-white transition">
                            Pesan Layanan
                        </a>
                    </div>
                </div>

                <!-- Layanan 2 -->
                <div
                    class="bg-slate-50 rounded-2xl overflow-hidden border border-slate-200 hover:shadow-xl transition-all duration-300 group">
                    <div class="h-48 relative overflow-hidden">
                        <img src="{{ asset('images/jasa2.png') }}" alt="Kelistrikan"
                            class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                    </div>
                    <div class="p-8">
                        <div class="flex justify-between items-start mb-4">
                            <h3 class="text-xl font-bold text-slate-900">Instalasi Kelistrikan</h3>
                            <div
                                class="w-10 h-10 bg-primary-100 text-primary-600 rounded-lg flex items-center justify-center text-lg">
                                <i class="fa-solid fa-plug"></i>
                            </div>
                        </div>
                        <p class="text-slate-600 text-sm mb-6 line-clamp-3">Perbaikan korsleting listrik, pemasangan
                            stop kontak baru, instalasi lampu, hingga pengecekan panel listrik rumah/kantor.</p>
                        <div class="mb-6">
                            <span class="text-xs text-slate-500 font-semibold block">Mulai dari</span>
                            <span class="text-2xl font-black text-primary-600">Rp 150.000</span>
                        </div>
                        <a href="#?text=Halo%20admin,%20saya%20mau%20pesan%20layanan%20Kelistrikan" target="_blank"
                            class="block w-full text-center border-2 border-primary-600 text-primary-600 py-2.5 rounded-lg font-bold hover:bg-primary-600 hover:text-white transition">
                            Pesan Layanan
                        </a>
                    </div>
                </div>

                <!-- Layanan 3 -->
                <div
                    class="bg-slate-50 rounded-2xl overflow-hidden border border-slate-200 hover:shadow-xl transition-all duration-300 group">
                    <div class="h-48 relative overflow-hidden">
                        <img src="{{ asset('images/jasa3.png') }}" alt="Mesin Cuci"
                            class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                    </div>
                    <div class="p-8">
                        <div class="flex justify-between items-start mb-4">
                            <h3 class="text-xl font-bold text-slate-900">Perbaikan Elektronik</h3>
                            <div
                                class="w-10 h-10 bg-primary-100 text-primary-600 rounded-lg flex items-center justify-center text-lg">
                                <i class="fa-solid fa-tv"></i>
                            </div>
                        </div>
                        <p class="text-slate-600 text-sm mb-6 line-clamp-3">Service mesin cuci bocor/mati total,
                            perbaikan kulkas tidak dingin, pompa air bermasalah, dan elektronik lainnya.</p>
                        <div class="mb-6">
                            <span class="text-xs text-slate-500 font-semibold block">Biaya Pengecekan</span>
                            <span class="text-2xl font-black text-primary-600">Rp 50.000</span>
                        </div>
                        <a href="#?text=Halo%20admin,%20saya%20mau%20pesan%20layanan%20Perbaikan%20Elektronik"
                            target="_blank"
                            class="block w-full text-center border-2 border-primary-600 text-primary-600 py-2.5 rounded-lg font-bold hover:bg-primary-600 hover:text-white transition">
                            Konsultasi Dulu
                        </a>
                    </div>
                </div>
            </div>

            <div class="text-center mt-12">
                <p class="text-slate-500 mb-4 font-medium">Butuh layanan lain yang tidak ada di atas?</p>
                <a href="#"
                    class="inline-flex items-center gap-2 text-primary-600 font-bold hover:text-primary-800 transition">
                    Tanyakan pada Customer Service Kami <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- 6. MENGAPA KAMI (WHY CHOOSE US) -->
    <section id="keunggulan" class="py-24 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row items-center gap-16">
                <!-- Image -->
                <div class="w-full lg:w-1/2 relative">
                    <!-- Pattern behind image -->
                    <div class="absolute -top-6 -left-6 w-32 h-32 bg-accent-400 rounded-lg z-0"></div>
                    <div class="absolute -bottom-6 -right-6 w-32 h-32 bg-primary-600 rounded-lg z-0"></div>
                    <img src="{{ asset('images/jasa-about.png') }}" alt="Pekerja Profesional"
                        class="w-full h-[500px] object-cover rounded-2xl shadow-lg relative z-10">
                </div>

                <!-- Text & Checklist -->
                <div class="w-full lg:w-1/2">
                    <span class="text-primary-600 font-bold tracking-widest text-sm uppercase mb-2 block">Keunggulan
                        Kami</span>
                    <h2 class="text-3xl md:text-4xl font-black text-slate-900 mb-6 leading-tight">Berkomitmen
                        Memberikan Hasil Kerja Terbaik.</h2>
                    <p class="text-slate-600 mb-8 leading-relaxed text-lg">
                        Tidak perlu ragu mencari teknisi panggilan. KaryaJasa hadir sebagai mitra UMKM terpercaya di
                        kota Anda dengan standar pengerjaan profesional dan bergaransi.
                    </p>

                    <div class="space-y-6">
                        <div class="flex gap-4">
                            <div
                                class="flex-shrink-0 w-12 h-12 bg-white rounded-lg shadow-sm border border-slate-100 flex items-center justify-center text-primary-600 text-xl">
                                <i class="fa-solid fa-money-bill-wave"></i>
                            </div>
                            <div>
                                <h4 class="text-lg font-bold text-slate-900">Harga Transparan di Awal</h4>
                                <p class="text-slate-600 text-sm mt-1">Kami menginformasikan estimasi biaya perbaikan
                                    dan sparepart sebelum pengerjaan dimulai. Tanpa biaya tersembunyi.</p>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div
                                class="flex-shrink-0 w-12 h-12 bg-white rounded-lg shadow-sm border border-slate-100 flex items-center justify-center text-primary-600 text-xl">
                                <i class="fa-solid fa-user-gear"></i>
                            </div>
                            <div>
                                <h4 class="text-lg font-bold text-slate-900">Teknisi Ahli & Sopan</h4>
                                <p class="text-slate-600 text-sm mt-1">Seluruh teknisi kami telah melewati proses
                                    seleksi, background check, dan training untuk menjamin kualitas layanan.</p>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div
                                class="flex-shrink-0 w-12 h-12 bg-white rounded-lg shadow-sm border border-slate-100 flex items-center justify-center text-primary-600 text-xl">
                                <i class="fa-solid fa-shield-alt"></i>
                            </div>
                            <div>
                                <h4 class="text-lg font-bold text-slate-900">Garansi Pengerjaan</h4>
                                <p class="text-slate-600 text-sm mt-1">Kami memberikan garansi 30 hari untuk setiap
                                    layanan perbaikan. Jika masalah berulang, kami perbaiki kembali GRATIS.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 7. CARA KERJA (WORK PROCESS) -->
    <section class="py-20 bg-white border-b border-slate-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-black text-slate-900 mb-4">Cara Memesan Layanan Kami</h2>
                <p class="text-slate-600">Proses mudah, cepat, dan tanpa ribet.</p>
            </div>

            <div class="flex flex-col md:flex-row justify-center items-center md:items-start gap-8 md:gap-4 relative">
                <!-- Line connector for desktop -->
                <div class="hidden md:block absolute top-10 left-20 right-20 h-1 bg-slate-100 z-0"></div>

                <!-- Step 1 -->
                <div class="relative z-10 flex flex-col items-center text-center w-full md:w-1/3">
                    <div
                        class="w-20 h-20 bg-white border-4 border-primary-100 text-primary-600 rounded-full flex items-center justify-center text-3xl font-black shadow-sm mb-6">
                        1</div>
                    <h3 class="text-xl font-bold text-slate-900 mb-2">Hubungi CS via WA</h3>
                    <p class="text-slate-500 text-sm px-4">Jelaskan kendala Anda, kirimkan foto/video kerusakan agar
                        kami bisa mendiagnosa awal.</p>
                </div>
                <!-- Step 2 -->
                <div class="relative z-10 flex flex-col items-center text-center w-full md:w-1/3">
                    <div
                        class="w-20 h-20 bg-white border-4 border-primary-100 text-primary-600 rounded-full flex items-center justify-center text-3xl font-black shadow-sm mb-6">
                        2</div>
                    <h3 class="text-xl font-bold text-slate-900 mb-2">Jadwalkan Kunjungan</h3>
                    <p class="text-slate-500 text-sm px-4">Sepakati jadwal kedatangan. Teknisi kami akan datang tepat
                        waktu ke lokasi Anda.</p>
                </div>
                <!-- Step 3 -->
                <div class="relative z-10 flex flex-col items-center text-center w-full md:w-1/3">
                    <div
                        class="w-20 h-20 bg-white border-4 border-primary-100 text-primary-600 rounded-full flex items-center justify-center text-3xl font-black shadow-sm mb-6">
                        3</div>
                    <h3 class="text-xl font-bold text-slate-900 mb-2">Pengerjaan Selesai</h3>
                    <p class="text-slate-500 text-sm px-4">Pengerjaan dilakukan transparan. Pembayaran hanya setelah
                        masalah tuntas terselesaikan.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 8. TESTIMONI -->
    <section id="testimoni" class="py-24 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <span class="text-primary-600 font-bold tracking-widest text-sm uppercase mb-2 block">Testimoni
                    Klien</span>
                <h2 class="text-3xl md:text-4xl font-black text-slate-900 mb-4">Apa Kata Mereka?</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Testi 1 -->
                <div class="bg-white p-8 rounded-2xl shadow-sm border border-slate-100 relative">
                    <div class="flex text-accent-500 text-sm mb-4"><i class="fa-solid fa-star"></i><i
                            class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                            class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
                    <p class="text-slate-600 mb-8 font-medium leading-relaxed">"Sangat puas dengan pelayanan KaryaJasa.
                        AC kantor yang netes terus langsung beres dalam hitungan jam. Teknisinya juga menjelaskan
                        kerusakannya dengan jujur."</p>
                    <div class="flex items-center gap-4">
                        <div
                            class="w-12 h-12 bg-primary-100 text-primary-700 rounded-full flex items-center justify-center font-bold text-xl">
                            A</div>
                        <div>
                            <p class="font-bold text-slate-900">Bapak Andre</p>
                            <p class="text-xs text-slate-500">Manager Operasional</p>
                        </div>
                    </div>
                </div>
                <!-- Testi 2 -->
                <div class="bg-white p-8 rounded-2xl shadow-sm border border-slate-100 relative">
                    <div class="flex text-accent-500 text-sm mb-4"><i class="fa-solid fa-star"></i><i
                            class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                            class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
                    <p class="text-slate-600 mb-8 font-medium leading-relaxed">"Respon WA-nya super cepat. Kemarin
                        malam pompa air mati, pagi ini teknisi langsung datang dan ganti sparepart. Harga juga masuk
                        akal, gak digetok."</p>
                    <div class="flex items-center gap-4">
                        <div
                            class="w-12 h-12 bg-primary-100 text-primary-700 rounded-full flex items-center justify-center font-bold text-xl">
                            S</div>
                        <div>
                            <p class="font-bold text-slate-900">Ibu Siti</p>
                            <p class="text-xs text-slate-500">Ibu Rumah Tangga</p>
                        </div>
                    </div>
                </div>
                <!-- Testi 3 -->
                <div class="bg-white p-8 rounded-2xl shadow-sm border border-slate-100 relative">
                    <div class="flex text-accent-500 text-sm mb-4"><i class="fa-solid fa-star"></i><i
                            class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                            class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
                    <p class="text-slate-600 mb-8 font-medium leading-relaxed">"Instalasi listrik untuk ruko baru saya
                        dikerjakan dengan sangat rapi dan aman. Senang bisa nemu vendor lokal yang profesional seperti
                        ini. Recommended!"</p>
                    <div class="flex items-center gap-4">
                        <div
                            class="w-12 h-12 bg-primary-100 text-primary-700 rounded-full flex items-center justify-center font-bold text-xl">
                            D</div>
                        <div>
                            <p class="font-bold text-slate-900">Dimas Pratama</p>
                            <p class="text-xs text-slate-500">Pemilik Usaha Ritel</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 9. CALL TO ACTION BANNER -->
    <section class="py-16 bg-white">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <div
                class="bg-primary-900 rounded-3xl p-10 md:p-16 text-center text-white relative overflow-hidden shadow-2xl">
                <!-- Abstract Design Elements -->
                <div
                    class="absolute top-0 right-0 w-64 h-64 bg-primary-600 rounded-full mix-blend-screen filter blur-3xl opacity-50 transform translate-x-1/2 -translate-y-1/2">
                </div>
                <div
                    class="absolute bottom-0 left-0 w-64 h-64 bg-accent-500 rounded-full mix-blend-screen filter blur-3xl opacity-20 transform -translate-x-1/2 translate-y-1/2">
                </div>

                <div class="relative z-10">
                    <h2 class="text-3xl md:text-5xl font-black mb-6">Ada Masalah Yang Perlu Diperbaiki?</h2>
                    <p class="text-primary-200 text-lg mb-8 max-w-2xl mx-auto font-normal">Jangan tunggu sampai
                        kerusakan makin parah. Hubungi teknisi kami sekarang dan dapatkan respon di bawah 5 menit.</p>
                    <a href="#"
                        class="inline-flex items-center gap-3 bg-accent-500 text-slate-900 px-8 py-4 rounded-lg font-bold text-lg hover:bg-accent-400 transition shadow-xl">
                        <i class="fa-brands fa-whatsapp text-2xl"></i> Hubungi Kami Sekarang
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- 10. FOOTER -->
    <footer class="bg-slate-900 text-slate-300 pt-20 pb-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-12">
                <!-- Brand Info -->
                <div class="lg:col-span-1">
                    <div class="flex items-center gap-2 mb-6">
                        <div
                            class="w-8 h-8 bg-primary-600 text-white rounded flex items-center justify-center text-sm">
                            <i class="fa-solid fa-screwdriver-wrench"></i>
                        </div>
                        <span class="text-2xl font-black text-white tracking-tight">Karya<span
                                class="text-primary-500">Jasa</span></span>
                    </div>
                    <p class="text-slate-400 text-sm leading-relaxed mb-6">Mitra UMKM andalan Anda untuk segala urusan
                        perbaikan rumah dan kantor. Bergaransi, profesional, dan transparan.</p>
                    <div class="flex gap-3">
                        <a href="#"
                            class="w-10 h-10 bg-slate-800 rounded-lg flex items-center justify-center hover:bg-primary-600 hover:text-white transition"><i
                                class="fa-brands fa-instagram"></i></a>
                        <a href="#"
                            class="w-10 h-10 bg-slate-800 rounded-lg flex items-center justify-center hover:bg-primary-600 hover:text-white transition"><i
                                class="fa-brands fa-facebook-f"></i></a>
                    </div>
                </div>

                <!-- Lintas Tautan -->
                <div>
                    <h4 class="font-bold text-white uppercase tracking-wider text-sm mb-6">Perusahaan</h4>
                    <ul class="space-y-3 text-sm font-medium text-slate-400">
                        <li><a href="#hero" class="hover:text-primary-400 transition">Beranda</a></li>
                        <li><a href="#keunggulan" class="hover:text-primary-400 transition">Tentang Kami</a></li>
                        <li><a href="#layanan" class="hover:text-primary-400 transition">Katalog Layanan</a></li>
                        <li><a href="#testimoni" class="hover:text-primary-400 transition">Testimoni Pelanggan</a>
                        </li>
                    </ul>
                </div>

                <!-- Info Lanjut -->
                <div>
                    <h4 class="font-bold text-white uppercase tracking-wider text-sm mb-6">Bantuan Pelanggan</h4>
                    <ul class="space-y-3 text-sm font-medium text-slate-400">
                        <li><a href="#" class="hover:text-primary-400 transition">Klaim Garansi</a></li>
                        <li><a href="#" class="hover:text-primary-400 transition">Daftar Harga Estimasi</a></li>
                        <li><a href="#" class="hover:text-primary-400 transition">Syarat & Ketentuan Layanan</a>
                        </li>
                        <li><a href="#" class="hover:text-primary-400 transition">Area Cakupan Kerja</a></li>
                    </ul>
                </div>

                <!-- Kontak -->
                <div>
                    <h4 class="font-bold text-white uppercase tracking-wider text-sm mb-6">Kantor Pusat</h4>
                    <ul class="space-y-4 text-sm font-medium text-slate-400">
                        <li class="flex items-start gap-3"><i
                                class="fa-solid fa-location-dot mt-1 text-primary-500"></i> Komplek Ruko Jaya Blok
                            B-12, Jalan Jend. Sudirman, Kota Bekasi.</li>
                        <li class="flex items-center gap-3"><i class="fa-solid fa-phone text-primary-500"></i> +62 812
                            3456 7890</li>
                        <li class="flex items-center gap-3"><i class="fa-solid fa-envelope text-primary-500"></i>
                            cs@karyajasa.id</li>
                    </ul>
                </div>
            </div>

            <div
                class="border-t border-slate-800 pt-8 flex flex-col md:flex-row justify-between items-center gap-4 text-slate-500 text-sm font-medium">
                <p>&copy; 2026 KaryaJasa UMKM Service. All rights reserved.</p>
                <p>Website Profesional by <a href="#"
                        class="text-primary-500 hover:text-primary-400">YourAgency</a></p>
            </div>
        </div>
    </footer>

</body>

</html>
