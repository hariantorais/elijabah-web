<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mabrur Travel - Corporate & Trusted Theme</title>

    <!-- Tailwind CSS & Alpine JS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Fonts: Outfit (Modern Sans) & Lora (Elegant Serif) -->
    <link
        href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,600;0,700;1,400&family=Outfit:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        body {
            font-family: 'Outfit', sans-serif;
        }

        h1,
        h2,
        h3,
        .font-serif {
            font-family: 'Lora', serif;
        }

        [x-cloak] {
            display: none !important;
        }

        /* Elemen Dekoratif Background */
        .blob-bg {
            background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath fill='%231E293B' d='M44.7,-76.4C58.8,-69.2,71.8,-59.1,81.3,-46.3C90.8,-33.5,96.8,-18.1,97.4,-2.4C98.1,13.3,93.4,29.4,84.1,43.2C74.8,57,60.8,68.5,45.4,75.9C30,83.3,13.1,86.6,-2.8,90.4C-18.7,94.2,-33.6,98.5,-47.4,93.7C-61.2,88.9,-73.9,75,-81.4,60.1C-88.9,45.2,-91.2,29.3,-92.4,14.1C-93.6,-1.1,-93.7,-15.6,-88.4,-28.5C-83.1,-41.4,-72.4,-52.7,-60.1,-60.6C-47.8,-68.5,-33.9,-73,-19.9,-76.2C-5.9,-79.4,8.2,-81.3,22.3,-79.7C36.4,-78.1,50.5,-73,44.7,-76.4Z' transform='translate(100 100)' /%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: center right;
            background-size: contain;
        }
    </style>
</head>

<body class="bg-slate-50 text-slate-800">

    <!-- 1. NAVIGATION -->
    <nav x-data="{ mobileMenu: false, scrolled: false }" @scroll.window="scrolled = (window.pageYOffset > 20)"
        class="fixed w-full z-50 transition-all duration-300 border-b border-slate-200/50"
        :class="scrolled ? 'bg-white/95 backdrop-blur-md shadow-sm py-3' : 'bg-white py-5'">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center gap-2">
                    <div class="w-10 h-10 bg-slate-900 rounded-lg flex items-center justify-center text-amber-500">
                        <i class="fa-solid fa-moon text-xl"></i>
                    </div>
                    <span class="text-2xl font-bold text-slate-900 tracking-tight">Mabrur<span
                            class="text-slate-400">Travel</span></span>
                </div>

                <!-- Desktop Menu -->
                <div class="hidden lg:flex space-x-6 items-center text-sm font-medium text-slate-600">
                    <a href="#profil" class="hover:text-amber-600 transition">Profil</a>
                    <a href="#whyus" class="hover:text-amber-600 transition">Kenapa Kami</a>
                    <a href="#paket" class="hover:text-amber-600 transition">Paket</a>
                    <a href="#galeri" class="hover:text-amber-600 transition">Galeri</a>
                    <a href="#testimoni" class="hover:text-amber-600 transition">Testimoni</a>
                    <a href="#blog" class="hover:text-amber-600 transition">Blog</a>
                    <a href="https://wa.me/62812345678"
                        class="bg-slate-900 text-white px-5 py-2.5 rounded-lg hover:bg-slate-800 transition shadow-md">Konsultasi
                        WA</a>
                </div>

                <!-- Mobile Button -->
                <div class="lg:hidden">
                    <button @click="mobileMenu = !mobileMenu" class="text-slate-900 focus:outline-none">
                        <i class="fa-solid text-2xl" :class="mobileMenu ? 'fa-xmark' : 'fa-bars-staggered'"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div x-cloak x-show="mobileMenu" x-transition
            class="lg:hidden bg-white border-b border-slate-100 absolute w-full shadow-xl">
            <div class="px-4 py-4 space-y-3">
                <a href="#profil" @click="mobileMenu = false" class="block font-medium text-slate-700">Profil</a>
                <a href="#whyus" @click="mobileMenu = false" class="block font-medium text-slate-700">Kenapa Kami</a>
                <a href="#paket" @click="mobileMenu = false" class="block font-medium text-slate-700">Paket Ibadah</a>
                <a href="#galeri" @click="mobileMenu = false" class="block font-medium text-slate-700">Galeri</a>
                <a href="#testimoni" @click="mobileMenu = false" class="block font-medium text-slate-700">Testimoni</a>
                <a href="#faq" @click="mobileMenu = false" class="block font-medium text-slate-700">FAQ</a>
                <a href="#blog" @click="mobileMenu = false" class="block font-medium text-slate-700">Blog</a>
                <a href="https://wa.me/62812345678"
                    class="block w-full text-center bg-slate-900 text-white py-3 rounded-lg font-bold">Chat via
                    WhatsApp</a>
            </div>
        </div>
    </nav>

    <!-- 2. HERO SECTION -->
    <section class="relative pt-32 pb-20 lg:pt-40 lg:pb-32 overflow-hidden bg-slate-50 blob-bg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row items-center gap-12">

                <div class="w-full lg:w-1/2 z-10">
                    <span class="text-amber-600 font-bold tracking-widest uppercase text-xs mb-4 block">Biro Perjalanan
                        Haji & Umroh Resmi</span>
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-slate-900 leading-tight mb-6">
                        Khusyuk Beribadah, <br>
                        <span class="text-slate-500 font-serif italic">Tanpa Rasa Was-was.</span>
                    </h1>
                    <p class="text-lg text-slate-600 mb-8 max-w-lg">
                        Mabrur Travel menghadirkan pengalaman spiritual yang aman, nyaman, dan sepenuhnya berpedoman
                        pada sunnah. Dampingan penuh dari keberangkatan hingga kepulangan.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="#paket"
                            class="bg-amber-500 text-slate-900 px-8 py-3.5 rounded-lg font-bold hover:bg-amber-400 transition shadow-lg text-center">Lihat
                            Jadwal 2026</a>
                        <a href="#profil"
                            class="bg-white border border-slate-300 text-slate-700 px-8 py-3.5 rounded-lg font-bold hover:bg-slate-50 transition text-center flex items-center justify-center gap-2">Mengenal
                            Kami</a>
                    </div>
                </div>

                <div class="w-full lg:w-1/2 relative">
                    <div
                        class="relative rounded-2xl overflow-hidden shadow-2xl border-8 border-white transform lg:rotate-2 hover:rotate-0 transition duration-500 z-10">
                        <img src="{{ asset('images/mekkah.png') }}" alt="Mekkah"
                            class="w-full h-[500px] object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900/70 to-transparent"></div>
                        <div class="absolute bottom-6 left-6 right-6">
                            <p class="text-white text-lg font-serif italic">"Dan sempurnakanlah ibadah haji dan umrah
                                karena Allah."</p>
                            <p class="text-slate-300 text-sm mt-1">- QS. Al-Baqarah: 196</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 3. PROFIL / ABOUT US -->
    <section id="profil" class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div class="relative">
                    <img src="{{ asset('images/tawaf.png') }}" alt="Kegiatan Tawaf"
                        class="rounded-2xl shadow-xl w-full h-[450px] object-cover">
                    <div
                        class="absolute -bottom-8 -right-8 bg-slate-900 p-6 rounded-2xl shadow-2xl max-w-xs border-4 border-white">
                        <div class="flex items-center gap-4 mb-3">
                            <img src="{{ asset('images/owner.png') }}" alt="Founder"
                                class="w-14 h-14 rounded-full border-2 border-amber-500 object-cover">
                            <div>
                                <p class="text-white font-bold text-sm">H. Harianto Rais</p>
                                <p class="text-amber-500 text-xs">Founder & Direktur Utama</p>
                            </div>
                        </div>
                        <p class="text-slate-300 text-sm italic">"Kami menganggap jemaah sebagai keluarga yang harus
                            diurus dan dijaga dengan sebaik-baiknya pelayanan."</p>
                    </div>
                </div>
                <div>
                    <span class="text-amber-600 font-bold tracking-widest uppercase text-xs mb-3 block">Profil
                        Perusahaan</span>
                    <h2 class="text-3xl md:text-4xl font-bold text-slate-900 font-serif mb-6 leading-tight">Melayani
                        Tamu Allah <br>Dengan Sepenuh Hati</h2>
                    <p class="text-slate-600 mb-6 leading-relaxed">
                        Sejak didirikan, Mabrur Travel berkomitmen untuk menjadi biro perjalanan haji dan umroh yang
                        mengedepankan keamanan finansial jemaah, kepastian keberangkatan, dan edukasi manasik yang
                        mumpuni.
                    </p>
                    <p class="text-slate-600 mb-8 leading-relaxed">
                        Kami dikelola oleh tim profesional dan dibimbing oleh para Asatidz yang ahli di bidang fiqih
                        ibadah, memastikan setiap rukun dan wajib ibadah Anda sah secara syariat.
                    </p>
                    <div class="grid grid-cols-2 gap-6 border-t border-slate-200 pt-8">
                        <div>
                            <p class="text-4xl font-bold text-amber-500 font-serif mb-1">15+</p>
                            <p class="text-sm font-bold text-slate-900">Tahun Pengalaman</p>
                            <p class="text-xs text-slate-500 mt-1">Mengelola ibadah haji & umroh.</p>
                        </div>
                        <div>
                            <p class="text-4xl font-bold text-amber-500 font-serif mb-1">100%</p>
                            <p class="text-sm font-bold text-slate-900">Izin Resmi Kemenag</p>
                            <p class="text-xs text-slate-500 mt-1">Terdaftar PPIU & PIHK.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. KENAPA MEMILIH KAMI (WHY US) -->
    <section id="whyus" class="py-24 bg-slate-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <span class="text-amber-500 font-bold tracking-widest uppercase text-xs mb-3 block">Keunggulan
                Layanan</span>
            <h2 class="text-3xl md:text-4xl font-bold text-white font-serif mb-16">Mengapa Beribadah Bersama Kami?</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Feature 1 -->
                <div class="bg-slate-800 p-8 rounded-2xl border border-slate-700 hover:bg-slate-700 transition">
                    <div
                        class="w-14 h-14 mx-auto bg-slate-900 text-amber-500 rounded-full flex items-center justify-center text-2xl mb-6 shadow-inner">
                        <i class="fa-solid fa-plane-circle-check"></i></div>
                    <h3 class="text-xl font-bold text-white mb-3">Pasti Berangkat</h3>
                    <p class="text-sm text-slate-400">Sistem tiket terpadu. Tiket pesawat sudah di-*booking* jauh hari
                        sebelum pendaftaran dibuka.</p>
                </div>
                <!-- Feature 2 -->
                <div class="bg-slate-800 p-8 rounded-2xl border border-slate-700 hover:bg-slate-700 transition">
                    <div
                        class="w-14 h-14 mx-auto bg-slate-900 text-amber-500 rounded-full flex items-center justify-center text-2xl mb-6 shadow-inner">
                        <i class="fa-solid fa-hotel"></i></div>
                    <h3 class="text-xl font-bold text-white mb-3">Hotel Ring 1 & 2</h3>
                    <p class="text-sm text-slate-400">Jarak akomodasi sangat dekat dengan masjid, menghemat tenaga
                        fisik Anda untuk beribadah.</p>
                </div>
                <!-- Feature 3 -->
                <div class="bg-slate-800 p-8 rounded-2xl border border-slate-700 hover:bg-slate-700 transition">
                    <div
                        class="w-14 h-14 mx-auto bg-slate-900 text-amber-500 rounded-full flex items-center justify-center text-2xl mb-6 shadow-inner">
                        <i class="fa-solid fa-book-quran"></i></div>
                    <h3 class="text-xl font-bold text-white mb-3">Bimbingan Sunnah</h3>
                    <p class="text-sm text-slate-400">Manasik eksklusif dengan kurikulum jelas, memastikan ibadah jauh
                        dari unsur bid'ah.</p>
                </div>
                <!-- Feature 4 -->
                <div class="bg-slate-800 p-8 rounded-2xl border border-slate-700 hover:bg-slate-700 transition">
                    <div
                        class="w-14 h-14 mx-auto bg-slate-900 text-amber-500 rounded-full flex items-center justify-center text-2xl mb-6 shadow-inner">
                        <i class="fa-solid fa-hand-holding-dollar"></i></div>
                    <h3 class="text-xl font-bold text-white mb-3">Harga Transparan</h3>
                    <p class="text-sm text-slate-400">Paket *All-in*. Tidak ada biaya siluman atau tambahan *hidden
                        cost* saat di Tanah Suci.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. PAKET IBADAH -->
    <section id="paket" class="py-24 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="text-amber-600 font-bold tracking-widest uppercase text-xs mb-3 block">Katalog
                    Tersedia</span>
                <h2 class="text-3xl md:text-4xl font-bold text-slate-900 font-serif mb-4">Pilihan Paket Perjalanan</h2>
                <p class="text-slate-600">Pilih paket yang paling sesuai dengan anggaran dan waktu luang Anda.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Paket 1 -->
                <div
                    class="bg-white rounded-2xl p-6 border border-slate-200 hover:border-amber-400 hover:shadow-xl transition duration-300 group flex flex-col">
                    <div class="rounded-xl overflow-hidden mb-6 h-48 relative">
                        <img src="{{ asset('images/madinah.png') }}"
                            class="w-full h-full object-cover group-hover:scale-105 transition duration-500"
                            alt="Madinah">
                    </div>
                    <div class="mb-4">
                        <span class="bg-slate-100 text-slate-600 px-3 py-1 rounded text-xs font-bold uppercase">9
                            Hari</span>
                        <h3 class="text-2xl font-bold text-slate-900 mt-3">Umroh Reguler</h3>
                    </div>
                    <p class="text-3xl font-bold text-slate-900 mb-6">Rp 28.5 Juta</p>
                    <ul class="space-y-3 mb-8 text-sm text-slate-600 flex-grow">
                        <li class="flex items-start gap-3"><i class="fa-solid fa-check text-amber-500 mt-1"></i>
                            Maskapai Batik / Lion Air</li>
                        <li class="flex items-start gap-3"><i class="fa-solid fa-check text-amber-500 mt-1"></i> Hotel
                            Bintang 4</li>
                        <li class="flex items-start gap-3"><i class="fa-solid fa-check text-amber-500 mt-1"></i> City
                            Tour Makkah Madinah</li>
                    </ul>
                    <a href="https://wa.me/62812345678"
                        class="block text-center w-full bg-white border border-slate-300 text-slate-900 py-3 rounded-lg font-bold hover:bg-slate-900 hover:text-white transition">Tanya
                        Paket Ini</a>
                </div>

                <!-- Paket 2 (VIP) -->
                <div
                    class="bg-slate-900 rounded-2xl p-6 border border-slate-800 shadow-2xl transform lg:-translate-y-4 group relative overflow-hidden flex flex-col">
                    <div
                        class="absolute top-0 right-0 bg-amber-500 text-slate-900 text-xs font-bold px-4 py-1 rounded-bl-lg z-10">
                        TERPOPULER</div>
                    <div class="rounded-xl overflow-hidden mb-6 h-48 relative">
                        <img src="{{ asset('images/hotel.png') }}"
                            class="w-full h-full object-cover opacity-80 group-hover:scale-105 transition duration-500"
                            alt="Hotel Premium">
                    </div>
                    <div class="mb-4">
                        <span class="bg-slate-800 text-amber-400 px-3 py-1 rounded text-xs font-bold uppercase">12
                            Hari</span>
                        <h3 class="text-2xl font-bold text-white mt-3">Umroh Premium + Turki</h3>
                    </div>
                    <p class="text-3xl font-bold text-amber-400 mb-6">Rp 37.0 Juta</p>
                    <ul class="space-y-3 mb-8 text-sm text-slate-300 flex-grow">
                        <li class="flex items-start gap-3"><i class="fa-solid fa-star text-amber-500 mt-1"></i> Direct
                            Flight Turkish Airlines</li>
                        <li class="flex items-start gap-3"><i class="fa-solid fa-star text-amber-500 mt-1"></i> Hotel
                            Bintang 5 (Depan Masjid)</li>
                        <li class="flex items-start gap-3"><i class="fa-solid fa-star text-amber-500 mt-1"></i> Wisata
                            Sejarah Istanbul & Bursa</li>
                    </ul>
                    <a href="https://wa.me/62812345678"
                        class="block text-center w-full bg-amber-500 text-slate-900 py-3 rounded-lg font-bold hover:bg-amber-400 transition shadow-lg">Booking
                        Sekarang</a>
                </div>

                <!-- Paket 3 -->
                <div
                    class="bg-white rounded-2xl p-6 border border-slate-200 hover:border-amber-400 hover:shadow-xl transition duration-300 group flex flex-col">
                    <div class="rounded-xl overflow-hidden mb-6 h-48 relative">
                        <!-- Menggunakan tawaf.png dengan object-position agar tidak terlihat berulang dengan section profil -->
                        <img src="{{ asset('images/tawaf.png') }}"
                            class="w-full h-full object-cover object-bottom group-hover:scale-105 transition duration-500"
                            alt="Haji Plus">
                    </div>
                    <div class="mb-4">
                        <span class="bg-slate-100 text-slate-600 px-3 py-1 rounded text-xs font-bold uppercase">Masa
                            Tunggu 5-7 Thn</span>
                        <h3 class="text-2xl font-bold text-slate-900 mt-3">Haji Khusus (ONH)</h3>
                    </div>
                    <p class="text-3xl font-bold text-slate-900 mb-6">$ 12,500 <span
                            class="text-sm font-normal text-slate-500">Mulai dari</span></p>
                    <ul class="space-y-3 mb-8 text-sm text-slate-600 flex-grow">
                        <li class="flex items-start gap-3"><i class="fa-solid fa-check text-amber-500 mt-1"></i> Kuota
                            Resmi Haji Kemenag RI</li>
                        <li class="flex items-start gap-3"><i class="fa-solid fa-check text-amber-500 mt-1"></i>
                            Maktab VIP Tenda Arafah-Mina</li>
                        <li class="flex items-start gap-3"><i class="fa-solid fa-check text-amber-500 mt-1"></i> Tim
                            Medis Pribadi 24 Jam</li>
                    </ul>
                    <a href="https://wa.me/62812345678"
                        class="block text-center w-full bg-white border border-slate-300 text-slate-900 py-3 rounded-lg font-bold hover:bg-slate-900 hover:text-white transition">Konsultasi
                        Haji</a>
                </div>
            </div>
        </div>
    </section>

    <!-- 6. GALERI -->
    <section id="galeri" class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-end mb-12">
                <div>
                    <span
                        class="text-amber-600 font-bold tracking-widest uppercase text-xs mb-3 block">Dokumentasi</span>
                    <h2 class="text-3xl md:text-4xl font-bold text-slate-900 font-serif mb-2">Galeri Keberangkatan</h2>
                </div>
                <a href="#" class="hidden md:inline-block text-slate-600 font-bold hover:text-amber-600">Follow
                    Instagram Kami <i class="fa-brands fa-instagram ml-1"></i></a>
            </div>

            <!-- CSS Grid for Gallery -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="col-span-2 row-span-2 h-[416px] rounded-2xl overflow-hidden group">
                    <img src="{{ asset('images/mekkah.png') }}"
                        class="w-full h-full object-cover group-hover:scale-105 transition duration-700"
                        alt="Mekkah View">
                </div>
                <div class="h-[200px] rounded-2xl overflow-hidden group">
                    <img src="{{ asset('images/madinah.png') }}"
                        class="w-full h-full object-cover group-hover:scale-105 transition duration-700"
                        alt="Madinah View">
                </div>
                <div class="h-[200px] rounded-2xl overflow-hidden group">
                    <img src="{{ asset('images/hotel.png') }}"
                        class="w-full h-full object-cover group-hover:scale-105 transition duration-700"
                        alt="Hotel View">
                </div>
                <div class="col-span-2 h-[200px] rounded-2xl overflow-hidden group">
                    <img src="{{ asset('images/tawaf.png') }}"
                        class="w-full h-full object-cover object-top group-hover:scale-105 transition duration-700"
                        alt="Tawaf View">
                </div>
            </div>
        </div>
    </section>

    <!-- 7. TESTIMONI -->
    <section id="testimoni" class="py-24 bg-slate-900 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <span class="text-amber-500 font-bold tracking-widest uppercase text-xs mb-3 block">Kata Mereka</span>
                <h2 class="text-3xl md:text-4xl font-bold font-serif mb-4">Ulasan Jemaah Kami</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto">
                <!-- Testi 1 -->
                <div class="bg-slate-800 p-8 rounded-2xl border border-slate-700 relative">
                    <i class="fa-solid fa-quote-left absolute top-6 right-6 text-6xl text-slate-700/50"></i>
                    <div class="flex gap-1 text-amber-500 text-sm mb-4">
                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                            class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                            class="fa-solid fa-star"></i>
                    </div>
                    <p class="text-slate-300 leading-relaxed mb-8 relative z-10">"Alhamdulillah, bimbingannya sangat
                        detail. Mulai dari manasik di tanah air sampai pelaksanaan tawaf wada, semuanya terstruktur.
                        Sangat cocok untuk saya yang baru pertama kali umroh."</p>
                    <div class="flex items-center gap-4">
                        <img src="{{ asset('images/user1.png') }}" alt="User 1"
                            class="w-12 h-12 rounded-full object-cover border-2 border-slate-600">
                        <div>
                            <p class="font-bold">Bpk. Ahmad Fauzi</p>
                            <p class="text-xs text-slate-400">Jemaah Umroh Reguler 2025</p>
                        </div>
                    </div>
                </div>

                <!-- Testi 2 -->
                <div class="bg-slate-800 p-8 rounded-2xl border border-slate-700 relative">
                    <i class="fa-solid fa-quote-left absolute top-6 right-6 text-6xl text-slate-700/50"></i>
                    <div class="flex gap-1 text-amber-500 text-sm mb-4">
                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                            class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                            class="fa-solid fa-star"></i>
                    </div>
                    <p class="text-slate-300 leading-relaxed mb-8 relative z-10">"Pelayanan hotel luar biasa memuaskan.
                        Makanannya nusantara banget jadi orang tua saya makannya lahap. Tim muthawwifnya ramah dan
                        sangat *helpful* saat di Makkah."</p>
                    <div class="flex items-center gap-4">
                        <img src="{{ asset('images/user2.png') }}" alt="User 2"
                            class="w-12 h-12 rounded-full object-cover border-2 border-slate-600">
                        <div>
                            <p class="font-bold">Ibu Siti Aminah</p>
                            <p class="text-xs text-slate-400">Jemaah Umroh Premium 2026</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 8. FAQ SECTION -->
    <section id="faq" class="py-24 bg-slate-50">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <span class="text-amber-600 font-bold tracking-widest uppercase text-xs mb-3 block">Bantuan
                    Informasi</span>
                <h2 class="text-3xl md:text-4xl font-bold text-slate-900 font-serif mb-4">Pertanyaan Umum (FAQ)</h2>
            </div>

            <!-- Accordion Wrapper -->
            <div class="space-y-4" x-data="{ activeAccordion: null }">

                <div
                    class="bg-white border border-slate-200 rounded-xl overflow-hidden shadow-sm hover:border-amber-400 transition duration-300">
                    <button @click="activeAccordion = activeAccordion === 1 ? null : 1"
                        class="w-full px-6 py-5 flex justify-between items-center text-left focus:outline-none">
                        <span class="font-bold text-slate-900">Apa saja syarat dokumen pendaftaran Umroh?</span>
                        <i class="fa-solid transition-transform duration-300 text-slate-400"
                            :class="activeAccordion === 1 ? 'fa-chevron-up text-amber-500' : 'fa-chevron-down'"></i>
                    </button>
                    <!-- x-show for toggle -->
                    <div x-show="activeAccordion === 1" x-transition
                        class="px-6 pb-5 text-slate-600 text-sm leading-relaxed border-t border-slate-100 pt-4">
                        Syarat utama meliputi: Paspor Asli (masa berlaku sisa minimal 7 bulan), Fotokopi KTP & KK, Buku
                        Vaksin Meningitis (Buku Kuning), serta Pas Foto ukuran 4x6 dengan latar belakang putih.
                    </div>
                </div>

                <div
                    class="bg-white border border-slate-200 rounded-xl overflow-hidden shadow-sm hover:border-amber-400 transition duration-300">
                    <button @click="activeAccordion = activeAccordion === 2 ? null : 2"
                        class="w-full px-6 py-5 flex justify-between items-center text-left focus:outline-none">
                        <span class="font-bold text-slate-900">Apakah biaya pendaftaran bisa dicicil?</span>
                        <i class="fa-solid transition-transform duration-300 text-slate-400"
                            :class="activeAccordion === 2 ? 'fa-chevron-up text-amber-500' : 'fa-chevron-down'"></i>
                    </button>
                    <div x-show="activeAccordion === 2" x-transition
                        class="px-6 pb-5 text-slate-600 text-sm leading-relaxed border-t border-slate-100 pt-4">
                        Ya, kami melayani sistem cicilan tabungan. Jemaah cukup membayar *Booking Seat* (DP) sebesar Rp
                        5.000.000. Sisa pembayaran dapat diangsur dan wajib dilunasi maksimal 45 hari sebelum jadwal
                        keberangkatan.
                    </div>
                </div>

                <div
                    class="bg-white border border-slate-200 rounded-xl overflow-hidden shadow-sm hover:border-amber-400 transition duration-300">
                    <button @click="activeAccordion = activeAccordion === 3 ? null : 3"
                        class="w-full px-6 py-5 flex justify-between items-center text-left focus:outline-none">
                        <span class="font-bold text-slate-900">Apakah harga paket sudah termasuk biaya
                            perlengkapan?</span>
                        <i class="fa-solid transition-transform duration-300 text-slate-400"
                            :class="activeAccordion === 3 ? 'fa-chevron-up text-amber-500' : 'fa-chevron-down'"></i>
                    </button>
                    <div x-show="activeAccordion === 3" x-transition
                        class="px-6 pb-5 text-slate-600 text-sm leading-relaxed border-t border-slate-100 pt-4">
                        Paket yang kami tawarkan bersifat All-In. Harga sudah mencakup pembuatan visa, tiket pesawat PP,
                        akomodasi hotel, makan 3x sehari, transportasi bus AC, muthawwif, air zam-zam 5 liter, serta
                        perlengkapan *handling* (koper, tas paspor, kain ihram/mukena).
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 9. BLOG / ARTIKEL -->
    <section id="blog" class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-end mb-12">
                <div>
                    <span class="text-amber-600 font-bold tracking-widest uppercase text-xs mb-3 block">Berita &
                        Edukasi</span>
                    <h2 class="text-3xl md:text-4xl font-bold text-slate-900 font-serif mb-2">Artikel Islami & Tips
                        Travel</h2>
                </div>
                <a href="#"
                    class="hidden md:inline-block text-slate-900 border border-slate-300 px-5 py-2 rounded-lg font-bold hover:bg-slate-50 transition">Lihat
                    Semua Artikel</a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Blog Card 1 -->
                <article
                    class="bg-slate-50 rounded-2xl overflow-hidden border border-slate-200 hover:shadow-xl transition duration-300">
                    <img src="{{ asset('images/tawaf.png') }}" alt="Tips Tawaf"
                        class="w-full h-48 object-cover object-center">
                    <div class="p-6">
                        <div class="flex items-center text-xs text-slate-500 mb-3 gap-3">
                            <span><i class="fa-regular fa-calendar mr-1"></i> 12 Ags 2026</span>
                            <span class="bg-amber-100 text-amber-800 px-2 py-0.5 rounded font-medium">Panduan</span>
                        </div>
                        <h3
                            class="text-xl font-bold text-slate-900 mb-3 leading-tight hover:text-amber-600 cursor-pointer transition">
                            Tata Cara Tawaf yang Benar Sesuai Sunnah Rasulullah
                        </h3>
                        <p class="text-slate-600 text-sm mb-4 line-clamp-2">
                            Memahami rukun dan syarat tawaf sangat penting agar ibadah umroh kita sah. Berikut panduan
                            lengkap dari niat hingga doa putaran ketujuh.
                        </p>
                        <a href="#"
                            class="text-slate-900 font-bold text-sm flex items-center hover:text-amber-600 transition">Baca
                            Selengkapnya <i class="fa-solid fa-arrow-right ml-2 text-xs"></i></a>
                    </div>
                </article>

                <!-- Blog Card 2 -->
                <article
                    class="bg-slate-50 rounded-2xl overflow-hidden border border-slate-200 hover:shadow-xl transition duration-300">
                    <img src="{{ asset('images/madinah.png') }}" alt="Masjid Nabawi"
                        class="w-full h-48 object-cover">
                    <div class="p-6">
                        <div class="flex items-center text-xs text-slate-500 mb-3 gap-3">
                            <span><i class="fa-regular fa-calendar mr-1"></i> 05 Ags 2026</span>
                            <span class="bg-amber-100 text-amber-800 px-2 py-0.5 rounded font-medium">Destinasi</span>
                        </div>
                        <h3
                            class="text-xl font-bold text-slate-900 mb-3 leading-tight hover:text-amber-600 cursor-pointer transition">
                            5 Keutamaan Ziarah ke Masjid Nabawi di Madinah
                        </h3>
                        <p class="text-slate-600 text-sm mb-4 line-clamp-2">
                            Madinah Al-Munawwarah adalah kota yang menenangkan. Mengetahui keutamaan shalat di Masjid
                            Nabawi akan melipatgandakan semangat ibadah Anda.
                        </p>
                        <a href="#"
                            class="text-slate-900 font-bold text-sm flex items-center hover:text-amber-600 transition">Baca
                            Selengkapnya <i class="fa-solid fa-arrow-right ml-2 text-xs"></i></a>
                    </div>
                </article>

                <!-- Blog Card 3 -->
                <article
                    class="bg-slate-50 rounded-2xl overflow-hidden border border-slate-200 hover:shadow-xl transition duration-300">
                    <img src="{{ asset('images/hotel.png') }}" alt="Persiapan Fisik"
                        class="w-full h-48 object-cover">
                    <div class="p-6">
                        <div class="flex items-center text-xs text-slate-500 mb-3 gap-3">
                            <span><i class="fa-regular fa-calendar mr-1"></i> 28 Jul 2026</span>
                            <span class="bg-amber-100 text-amber-800 px-2 py-0.5 rounded font-medium">Tips</span>
                        </div>
                        <h3
                            class="text-xl font-bold text-slate-900 mb-3 leading-tight hover:text-amber-600 cursor-pointer transition">
                            Persiapan Fisik dan Barang Bawaan untuk Umroh
                        </h3>
                        <p class="text-slate-600 text-sm mb-4 line-clamp-2">
                            Suhu dan cuaca di Arab Saudi bisa berbeda ekstrem dengan Indonesia. Apa saja obat dan
                            perlengkapan yang wajib masuk koper kabin?
                        </p>
                        <a href="#"
                            class="text-slate-900 font-bold text-sm flex items-center hover:text-amber-600 transition">Baca
                            Selengkapnya <i class="fa-solid fa-arrow-right ml-2 text-xs"></i></a>
                    </div>
                </article>
            </div>

            <div class="mt-8 text-center md:hidden">
                <a href="#"
                    class="inline-block border border-slate-300 px-6 py-3 rounded-lg text-slate-900 font-bold w-full">Semua
                    Artikel</a>
            </div>
        </div>
    </section>

    <!-- 10. CORPORATE FOOTER -->
    <footer class="bg-slate-900 text-slate-300 py-16 border-t-8 border-amber-500">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-12 gap-12 mb-12 border-b border-slate-800 pb-12">

                <!-- Brand Info -->
                <div class="md:col-span-4">
                    <div class="flex items-center gap-2 mb-6">
                        <div class="w-10 h-10 bg-slate-800 rounded-lg flex items-center justify-center text-amber-500">
                            <i class="fa-solid fa-moon text-xl"></i>
                        </div>
                        <span class="text-2xl font-bold text-white tracking-tight">Mabrur<span
                                class="text-slate-500">Travel</span></span>
                    </div>
                    <p class="text-sm leading-relaxed mb-6 text-slate-400">
                        Biro Perjalanan Ibadah Umroh & Haji Khusus bersertifikat yang mendedikasikan layanan untuk
                        menjamin keamanan, kenyamanan, dan kekhusyukan tamu Allah.
                    </p>
                    <div class="flex gap-3">
                        <a href="#"
                            class="w-10 h-10 bg-slate-800 rounded-full flex items-center justify-center hover:bg-amber-500 hover:text-slate-900 transition"><i
                                class="fa-brands fa-youtube"></i></a>
                        <a href="#"
                            class="w-10 h-10 bg-slate-800 rounded-full flex items-center justify-center hover:bg-amber-500 hover:text-slate-900 transition"><i
                                class="fa-brands fa-instagram"></i></a>
                        <a href="#"
                            class="w-10 h-10 bg-slate-800 rounded-full flex items-center justify-center hover:bg-amber-500 hover:text-slate-900 transition"><i
                                class="fa-brands fa-facebook-f"></i></a>
                    </div>
                </div>

                <!-- Nav Links -->
                <div class="md:col-span-2">
                    <h4 class="text-white font-bold mb-6 font-serif tracking-wide">Navigasi</h4>
                    <ul class="space-y-3 text-sm">
                        <li><a href="#profil" class="hover:text-amber-500 transition">Tentang Kami</a></li>
                        <li><a href="#paket" class="hover:text-amber-500 transition">Daftar Paket</a></li>
                        <li><a href="#galeri" class="hover:text-amber-500 transition">Galeri Jemaah</a></li>
                        <li><a href="#" class="hover:text-amber-500 transition">Karir / Kemitraan</a></li>
                    </ul>
                </div>

                <!-- Info Links -->
                <div class="md:col-span-2">
                    <h4 class="text-white font-bold mb-6 font-serif tracking-wide">Pusat Informasi</h4>
                    <ul class="space-y-3 text-sm">
                        <li><a href="#faq" class="hover:text-amber-500 transition">Bantuan & FAQ</a></li>
                        <li><a href="#blog" class="hover:text-amber-500 transition">Blog & Berita</a></li>
                        <li><a href="#" class="hover:text-amber-500 transition">Syarat & Ketentuan</a></li>
                        <li><a href="#" class="hover:text-amber-500 transition">Kebijakan Privasi</a></li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div class="md:col-span-4">
                    <h4 class="text-white font-bold mb-6 font-serif tracking-wide">Hubungi Kami</h4>
                    <ul class="space-y-4 text-sm text-slate-400">
                        <li class="flex items-start gap-3">
                            <i class="fa-solid fa-location-dot mt-1 text-amber-500"></i>
                            Gedung Mabrur Center Lt. 3, Jl. Protokol No. 12, Kota Batam, Kepulauan Riau
                        </li>
                        <li class="flex items-center gap-3">
                            <i class="fa-solid fa-envelope text-amber-500"></i> info@mabrurtravel.com
                        </li>
                    </ul>
                    <div class="mt-6 bg-slate-800 p-4 rounded-lg flex items-center gap-4">
                        <i class="fa-solid fa-headset text-3xl text-amber-500"></i>
                        <div>
                            <p class="text-xs text-slate-400 uppercase tracking-widest">Customer Service 24/7</p>
                            <p class="text-lg font-bold text-white">+62 812 3456 7890</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Copyright -->
            <div class="flex flex-col md:flex-row justify-between items-center text-sm text-slate-500">
                <p>&copy; 2026 PT. Mabrur Travel. All rights reserved.</p>
                <p class="mt-2 md:mt-0 font-bold">Izin PPIU Kemenag RI: U.123/2023</p>
            </div>
        </div>
    </footer>

</body>

</html>
