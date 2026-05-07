<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mabrur Travel - Light, Clean, & Elegant (Full Version)</title>

    <!-- Tailwind CSS & Alpine JS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Font: Plus Jakarta Sans -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        [x-cloak] {
            display: none !important;
        }

        /* Custom image mask for hero */
        .image-mask {
            border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body class="bg-white text-gray-800 antialiased selection:bg-green-100 selection:text-green-900">

    <!-- 1. NAVIGATION -->
    <nav x-data="{ mobileMenu: false, scrolled: false }" @scroll.window="scrolled = (window.pageYOffset > 20)"
        class="fixed w-full z-50 transition-all duration-300 border-b"
        :class="scrolled ? 'bg-white/95 backdrop-blur-md shadow-sm border-gray-100 py-3' : 'bg-white border-transparent py-5'">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center">
                    <span class="text-2xl font-extrabold text-green-900 tracking-tight">MABRUR<span
                            class="text-yellow-500">.</span></span>
                </div>

                <!-- Menu Desktop -->
                <div class="hidden lg:flex space-x-8 items-center text-sm font-semibold text-gray-600">
                    <a href="#tentang" class="hover:text-yellow-600 transition">Tentang Kami</a>
                    <a href="#whyus" class="hover:text-yellow-600 transition">Keunggulan</a>
                    <a href="#paket" class="hover:text-yellow-600 transition">Paket</a>
                    <a href="#galeri" class="hover:text-yellow-600 transition">Galeri</a>
                    <a href="#faq" class="hover:text-yellow-600 transition">FAQ</a>
                    <a href="#blog" class="hover:text-yellow-600 transition">Blog</a>
                    <a href="https://wa.me/62812345678"
                        class="bg-green-900 text-white px-6 py-2.5 rounded-full hover:bg-green-800 transition shadow-md">Hubungi
                        Kami</a>
                </div>

                <!-- Tombol Mobile -->
                <div class="lg:hidden">
                    <button @click="mobileMenu = !mobileMenu" class="text-green-900 focus:outline-none">
                        <i class="fa-solid text-2xl" :class="mobileMenu ? 'fa-xmark' : 'fa-bars-staggered'"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Menu Mobile -->
        <div x-cloak x-show="mobileMenu" x-transition.opacity.duration.300ms
            class="lg:hidden bg-white border-b border-gray-100 absolute w-full shadow-xl">
            <div class="px-4 py-4 space-y-3 text-center">
                <a href="#tentang" @click="mobileMenu = false" class="block font-semibold text-gray-700">Tentang
                    Kami</a>
                <a href="#whyus" @click="mobileMenu = false" class="block font-semibold text-gray-700">Keunggulan</a>
                <a href="#paket" @click="mobileMenu = false" class="block font-semibold text-gray-700">Pilihan
                    Paket</a>
                <a href="#galeri" @click="mobileMenu = false" class="block font-semibold text-gray-700">Galeri</a>
                <a href="#tim" @click="mobileMenu = false" class="block font-semibold text-gray-700">Pembimbing</a>
                <a href="#faq" @click="mobileMenu = false" class="block font-semibold text-gray-700">FAQ</a>
                <a href="#blog" @click="mobileMenu = false" class="block font-semibold text-gray-700">Blog</a>
                <a href="https://wa.me/62812345678"
                    class="block w-full text-center bg-green-900 text-white py-3 rounded-xl font-semibold">Chat
                    WhatsApp</a>
            </div>
        </div>
    </nav>

    <!-- 2. HERO SECTION -->
    <section class="relative pt-32 pb-20 lg:pt-40 lg:pb-28 overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row items-center gap-12 lg:gap-8">

                <!-- Hero Text -->
                <div class="w-full lg:w-1/2 text-center lg:text-left z-10">
                    <div
                        class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-yellow-50 text-yellow-700 font-semibold text-sm mb-6">
                        <i class="fa-solid fa-star text-yellow-500"></i> Biro Travel Terpercaya 2026
                    </div>
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-gray-900 leading-tight mb-6">
                        Perjalanan Suci <br>
                        <span class="text-green-900">Tanpa Keraguan.</span>
                    </h1>
                    <p class="text-lg text-gray-600 mb-8 max-w-lg mx-auto lg:mx-0">
                        Kami merancang setiap detail perjalanan ibadah Anda dengan standar profesional tertinggi.
                        Beribadahlah dengan tenang, biarkan kami yang mengurus sisanya.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                        <a href="#paket"
                            class="bg-yellow-500 text-green-950 px-8 py-4 rounded-full font-bold hover:bg-yellow-400 transition shadow-lg text-center">Lihat
                            Paket Umroh</a>
                        <a href="#tentang"
                            class="bg-white border-2 border-gray-200 text-gray-700 px-8 py-4 rounded-full font-bold hover:border-gray-300 hover:bg-gray-50 transition text-center flex items-center justify-center gap-2">
                            Mengenal Kami
                        </a>
                    </div>
                </div>

                <!-- Hero Image -->
                <div class="w-full lg:w-1/2 relative">
                    <div
                        class="absolute inset-0 bg-yellow-100 rounded-full blur-3xl opacity-50 -z-10 transform translate-x-10 translate-y-10">
                    </div>
                    <img src="{{ asset('images/mekkah.png') }}" alt="Mekkah"
                        class="w-full h-auto image-mask object-cover aspect-square">

                    <!-- Floating Badge -->
                    <div class="absolute bottom-10 -left-10 md:left-0 bg-white p-4 rounded-2xl shadow-xl border border-gray-100 flex items-center gap-4 animate-bounce"
                        style="animation-duration: 3s;">
                        <div
                            class="w-12 h-12 bg-green-100 text-green-700 rounded-full flex items-center justify-center text-xl">
                            <i class="fa-solid fa-shield-halved"></i>
                        </div>
                        <div>
                            <p class="text-xs text-gray-500 font-semibold uppercase">Legalitas</p>
                            <p class="font-bold text-gray-900">100% Resmi Kemenag</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- TRUST BANNER -->
    <section class="py-10 border-y border-gray-100 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div
                class="flex flex-wrap justify-center gap-8 md:gap-16 items-center opacity-60 grayscale hover:grayscale-0 transition duration-500">
                <div class="font-bold text-xl flex items-center gap-2"><i
                        class="fa-brands fa-avianex text-2xl text-green-900"></i> Saudi Airlines</div>
                <div class="font-bold text-xl flex items-center gap-2"><i
                        class="fa-solid fa-plane-up text-2xl text-green-900"></i> Garuda Indonesia</div>
                <div class="font-bold text-xl flex items-center gap-2"><i
                        class="fa-solid fa-building-shield text-2xl text-green-900"></i> Kemenag RI</div>
            </div>
        </div>
    </section>

    <!-- 3. PROFIL & FOUNDER -->
    <section id="tentang" class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div class="relative">
                    <img src="{{ asset('images/tawaf.png') }}" alt="Tawaf"
                        class="rounded-[2rem] shadow-2xl w-full h-[500px] object-cover">
                    <div
                        class="absolute -bottom-8 -right-8 bg-green-900 p-6 rounded-3xl shadow-xl w-64 border-4 border-white">
                        <img src="{{ asset('images/owner.png') }}" alt="Owner"
                            class="w-16 h-16 rounded-full border-2 border-yellow-500 mb-4 object-cover">
                        <p class="text-white text-sm italic mb-2">"Tujuan kami bukan sekadar memberangkatkan, tapi
                            memastikan Anda pulang membawa kemabruran."</p>
                        <p class="text-yellow-500 font-bold text-xs uppercase">H. Harianto Rais - Founder</p>
                    </div>
                </div>
                <div>
                    <h2 class="text-sm font-bold text-yellow-600 tracking-widest uppercase mb-3">Profil Mabrur Travel
                    </h2>
                    <h3 class="text-4xl font-extrabold text-gray-900 mb-6 leading-tight">Melayani dengan
                        Hati,<br>Sesuai Tuntunan Nabi.</h3>
                    <p class="text-gray-600 mb-6 text-lg leading-relaxed">Sejak awal berdiri, Mabrur Travel berkomitmen
                        penuh pada transparansi harga, kepastian jadwal, dan bimbingan ibadah yang ketat sesuai dengan
                        sunnah Rasulullah ﷺ.</p>
                    <p class="text-gray-600 mb-8 leading-relaxed">Kami bangga menjadi mitra spiritual bagi ribuan
                        jemaah Indonesia. Dengan tim profesional dan berpengalaman, kenyamanan fisik serta kekhusyukan
                        batin Anda adalah prioritas utama kami.</p>

                    <a href="https://wa.me/62812345678"
                        class="inline-block bg-gray-100 text-green-900 px-6 py-3 rounded-full font-bold hover:bg-green-100 transition">Mulai
                        Konsultasi</a>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. KEUNGGULAN (WHY US) -->
    <section id="whyus" class="py-24 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-2xl mx-auto mb-16">
                <h2 class="text-sm font-bold text-yellow-600 tracking-widest uppercase mb-3">Keunggulan Layanan</h2>
                <h3 class="text-4xl font-extrabold text-gray-900">Kenapa Memilih Kami?</h3>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div
                    class="bg-white p-8 rounded-3xl shadow-sm border border-gray-100 hover:-translate-y-2 transition duration-300">
                    <div
                        class="w-14 h-14 bg-green-50 text-green-700 rounded-2xl flex items-center justify-center text-2xl mb-6">
                        <i class="fa-solid fa-clipboard-check"></i></div>
                    <h4 class="text-xl font-bold text-gray-900 mb-3">Izin Resmi Terdaftar</h4>
                    <p class="text-gray-600 text-sm leading-relaxed">Terdaftar di Kementerian Agama RI sebagai PPIU &
                        PIHK resmi. Menjamin legalitas keamanan dana dan dokumen Anda.</p>
                </div>
                <div
                    class="bg-white p-8 rounded-3xl shadow-sm border border-gray-100 hover:-translate-y-2 transition duration-300">
                    <div
                        class="w-14 h-14 bg-green-50 text-green-700 rounded-2xl flex items-center justify-center text-2xl mb-6">
                        <i class="fa-solid fa-chalkboard-user"></i></div>
                    <h4 class="text-xl font-bold text-gray-900 mb-3">Bimbingan Sunnah</h4>
                    <p class="text-gray-600 text-sm leading-relaxed">Manasik dan pembekalan ibadah eksklusif
                        berdasarkan dalil yang sahih, memastikan ibadah sah tanpa bid'ah.</p>
                </div>
                <div
                    class="bg-white p-8 rounded-3xl shadow-sm border border-gray-100 hover:-translate-y-2 transition duration-300">
                    <div
                        class="w-14 h-14 bg-green-50 text-green-700 rounded-2xl flex items-center justify-center text-2xl mb-6">
                        <i class="fa-solid fa-hotel"></i></div>
                    <h4 class="text-xl font-bold text-gray-900 mb-3">Hotel Ring 1 & Nyaman</h4>
                    <p class="text-gray-600 text-sm leading-relaxed">Akomodasi berstandar bintang 4 dan 5 di Makkah &
                        Madinah dengan jarak jalan kaki singkat menuju pelataran Masjid.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. PAKET IBADAH -->
    <section id="paket" class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-2xl mx-auto mb-16">
                <h2 class="text-sm font-bold text-yellow-600 tracking-widest uppercase mb-3">Katalog Perjalanan</h2>
                <h3 class="text-4xl font-extrabold text-gray-900">Pilih Paket Umroh Anda</h3>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Paket 1 -->
                <div
                    class="bg-white rounded-[2rem] overflow-hidden shadow-sm hover:shadow-2xl transition-all duration-300 border border-gray-200 group flex flex-col">
                    <div class="relative h-56 overflow-hidden">
                        <img src="{{ asset('images/madinah.png') }}" alt="Madinah"
                            class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
                        <div
                            class="absolute top-4 left-4 bg-white/90 backdrop-blur px-3 py-1 rounded-full text-xs font-bold text-green-900">
                            9 Hari</div>
                    </div>
                    <div class="p-8 flex-grow flex flex-col">
                        <h4 class="text-2xl font-bold text-gray-900 mb-2">Umroh Reguler</h4>
                        <p class="text-gray-500 text-sm mb-6">Program fokus ibadah & efisien.</p>
                        <div class="text-3xl font-extrabold text-green-900 mb-6">Rp 28.5<span
                                class="text-lg text-gray-500 font-normal"> Juta</span></div>
                        <ul class="space-y-3 mb-8 text-sm text-gray-700 font-medium flex-grow">
                            <li class="flex items-start gap-3"><i class="fa-solid fa-check text-yellow-500 mt-1"></i>
                                Pesawat Ekonomi PP</li>
                            <li class="flex items-start gap-3"><i class="fa-solid fa-check text-yellow-500 mt-1"></i>
                                Hotel Setaraf Bintang 4</li>
                            <li class="flex items-start gap-3"><i class="fa-solid fa-check text-yellow-500 mt-1"></i>
                                Perlengkapan Handling All-in</li>
                        </ul>
                        <a href="https://wa.me/62812345678"
                            class="block w-full text-center bg-gray-100 text-gray-900 font-bold py-4 rounded-xl hover:bg-green-900 hover:text-white transition mt-auto">Detail
                            Paket</a>
                    </div>
                </div>

                <!-- Paket 2 (Highlight) -->
                <div
                    class="bg-green-900 rounded-[2rem] overflow-hidden shadow-2xl relative transform lg:-translate-y-4 border-4 border-yellow-500 flex flex-col">
                    <div
                        class="absolute top-0 right-0 bg-yellow-500 text-green-950 font-bold text-xs px-4 py-2 rounded-bl-xl z-10">
                        PALING DIMINATI</div>
                    <div class="relative h-56 overflow-hidden">
                        <img src="{{ asset('images/hotel.png') }}" alt="Hotel"
                            class="w-full h-full object-cover opacity-80 mix-blend-overlay">
                        <div
                            class="absolute top-4 left-4 bg-white/20 backdrop-blur px-3 py-1 rounded-full text-xs font-bold text-white border border-white/30">
                            12 Hari</div>
                    </div>
                    <div class="p-8 flex-grow flex flex-col">
                        <h4 class="text-2xl font-bold text-white mb-2">Umroh Premium + Turki</h4>
                        <p class="text-green-200 text-sm mb-6">Kenyamanan maksimal plus city tour.</p>
                        <div class="text-3xl font-extrabold text-yellow-400 mb-6">Rp 37.0<span
                                class="text-lg text-green-200 font-normal"> Juta</span></div>
                        <ul class="space-y-3 mb-8 text-sm text-white font-medium flex-grow">
                            <li class="flex items-start gap-3"><i class="fa-solid fa-star text-yellow-400 mt-1"></i>
                                Direct Flight Turkish Airlines</li>
                            <li class="flex items-start gap-3"><i class="fa-solid fa-star text-yellow-400 mt-1"></i>
                                Hotel Bintang 5 (Depan Masjid)</li>
                            <li class="flex items-start gap-3"><i class="fa-solid fa-star text-yellow-400 mt-1"></i>
                                City Tour Istanbul & Bursa</li>
                        </ul>
                        <a href="https://wa.me/62812345678"
                            class="block w-full text-center bg-yellow-500 text-green-950 font-bold py-4 rounded-xl hover:bg-yellow-400 transition shadow-lg mt-auto">Daftar
                            Sekarang</a>
                    </div>
                </div>

                <!-- Paket 3 -->
                <div
                    class="bg-white rounded-[2rem] overflow-hidden shadow-sm hover:shadow-2xl transition-all duration-300 border border-gray-200 group flex flex-col">
                    <div class="relative h-56 overflow-hidden">
                        <img src="{{ asset('images/tawaf.png') }}" alt="Haji Khusus"
                            class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
                    </div>
                    <div class="p-8 flex-grow flex flex-col">
                        <h4 class="text-2xl font-bold text-gray-900 mb-2">Haji Plus (ONH)</h4>
                        <p class="text-gray-500 text-sm mb-6">Masa tunggu cepat kuota Kemenag.</p>
                        <div class="text-3xl font-extrabold text-green-900 mb-6">$ 12,500<span
                                class="text-lg text-gray-500 font-normal"> Mulai</span></div>
                        <ul class="space-y-3 mb-8 text-sm text-gray-700 font-medium flex-grow">
                            <li class="flex items-start gap-3"><i class="fa-solid fa-check text-yellow-500 mt-1"></i>
                                Kepastian Berangkat Jelas</li>
                            <li class="flex items-start gap-3"><i class="fa-solid fa-check text-yellow-500 mt-1"></i>
                                Maktab Tenda VIP Mina/Arafah</li>
                            <li class="flex items-start gap-3"><i class="fa-solid fa-check text-yellow-500 mt-1"></i>
                                Bimbingan Syekh Intensif</li>
                        </ul>
                        <a href="https://wa.me/62812345678"
                            class="block w-full text-center bg-gray-100 text-gray-900 font-bold py-4 rounded-xl hover:bg-green-900 hover:text-white transition mt-auto">Konsultasi
                            Haji</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 6. GALERI KEGIATAN -->
    <section id="galeri" class="py-24 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-end mb-12">
                <div>
                    <h2 class="text-sm font-bold text-yellow-600 tracking-widest uppercase mb-3">Dokumentasi</h2>
                    <h3 class="text-4xl font-extrabold text-gray-900">Galeri Jemaah</h3>
                </div>
                <a href="#"
                    class="hidden md:block font-bold text-green-900 hover:text-green-700 transition">Lihat Lebih Banyak
                    <i class="fa-solid fa-arrow-right ml-1"></i></a>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="col-span-2 row-span-2 h-[416px] rounded-3xl overflow-hidden group">
                    <img src="{{ asset('images/mekkah.png') }}"
                        class="w-full h-full object-cover group-hover:scale-105 transition duration-700"
                        alt="Mekkah View">
                </div>
                <div class="h-[200px] rounded-3xl overflow-hidden group">
                    <img src="{{ asset('images/madinah.png') }}"
                        class="w-full h-full object-cover group-hover:scale-105 transition duration-700"
                        alt="Madinah View">
                </div>
                <div class="h-[200px] rounded-3xl overflow-hidden group">
                    <img src="{{ asset('images/hotel.png') }}"
                        class="w-full h-full object-cover group-hover:scale-105 transition duration-700"
                        alt="Hotel View">
                </div>
                <div class="col-span-2 h-[200px] rounded-3xl overflow-hidden group">
                    <img src="{{ asset('images/tawaf.png') }}"
                        class="w-full h-full object-cover object-bottom group-hover:scale-105 transition duration-700"
                        alt="Tawaf View">
                </div>
            </div>
        </div>
    </section>

    <!-- 7. TIM PEMBIMBING -->
    <section id="tim" class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-sm font-bold text-yellow-600 tracking-widest uppercase mb-3">Tim Kami</h2>
            <h3 class="text-4xl font-extrabold text-gray-900 mb-16">Pembimbing & Muthawwif</h3>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
                <!-- Guide 1 -->
                <div>
                    <!-- Menggunakan owner.png sebagai representasi pembimbing -->
                    <img src="{{ asset('images/owner.png') }}" alt="Pembimbing 1"
                        class="w-48 h-48 rounded-full object-cover mx-auto mb-6 border-4 border-gray-100 shadow-lg">
                    <h4 class="text-xl font-bold text-gray-900">Ustaz H. Harianto Rais</h4>
                    <p class="text-green-700 font-medium">Pembimbing Utama & Fiqih</p>
                </div>
                <!-- Guide 2 -->
                <div>
                    <!-- Placeholder untuk tim lain menggunakan gambar user1 -->
                    <img src="{{ asset('images/user1.png') }}" alt="Pembimbing 2"
                        class="w-48 h-48 rounded-full object-cover mx-auto mb-6 border-4 border-gray-100 shadow-lg">
                    <h4 class="text-xl font-bold text-gray-900">Ustaz Ahmad Fauzi, Lc</h4>
                    <p class="text-green-700 font-medium">Muthawwif Madinah</p>
                </div>
                <!-- Guide 3 -->
                <div>
                    <!-- Placeholder untuk tim lain -->
                    <div
                        class="w-48 h-48 rounded-full bg-green-50 mx-auto mb-6 border-4 border-gray-100 shadow-lg flex items-center justify-center text-green-700 text-5xl">
                        <i class="fa-solid fa-user-tie"></i>
                    </div>
                    <h4 class="text-xl font-bold text-gray-900">Ustaz Muhammad Ali</h4>
                    <p class="text-green-700 font-medium">Muthawwif Makkah</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 8. TESTIMONI -->
    <section id="testimoni" class="py-24 bg-gray-50 border-y border-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h3 class="text-4xl font-extrabold text-gray-900">Cerita Tamu Allah</h3>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-5xl mx-auto">
                <div class="bg-white p-8 rounded-3xl shadow-sm border border-gray-100 relative">
                    <i class="fa-solid fa-quote-right absolute top-8 right-8 text-5xl text-gray-100"></i>
                    <p class="text-gray-600 mb-8 relative z-10 leading-relaxed text-lg font-medium">"Pelayanannya
                        sangat profesional. Dari pendaftaran di Batam sampai kepulangan semuanya terorganisir.
                        Muthawwifnya juga sangat sabar membimbing orang tua."</p>
                    <div class="flex items-center gap-4">
                        <img src="{{ asset('images/user1.png') }}" alt="User 1"
                            class="w-14 h-14 rounded-full object-cover border-2 border-green-900">
                        <div>
                            <h5 class="font-bold text-gray-900">Ahmad Faisal</h5>
                            <div class="flex text-yellow-400 text-sm"><i class="fa-solid fa-star"></i><i
                                    class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                    class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
                        </div>
                    </div>
                </div>
                <div class="bg-white p-8 rounded-3xl shadow-sm border border-gray-100 relative">
                    <i class="fa-solid fa-quote-right absolute top-8 right-8 text-5xl text-gray-100"></i>
                    <p class="text-gray-600 mb-8 relative z-10 leading-relaxed text-lg font-medium">"Hotelnya
                        benar-benar sesuai janji, turun lift langsung pelataran masjid. Makanan juga sangat cocok di
                        lidah, tidak perlu cari makan di luar lagi."</p>
                    <div class="flex items-center gap-4">
                        <img src="{{ asset('images/user2.png') }}" alt="User 2"
                            class="w-14 h-14 rounded-full object-cover border-2 border-green-900">
                        <div>
                            <h5 class="font-bold text-gray-900">Siti Rahmawati</h5>
                            <div class="flex text-yellow-400 text-sm"><i class="fa-solid fa-star"></i><i
                                    class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                    class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 9. FAQ -->
    <section id="faq" class="py-24 bg-white">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h3 class="text-4xl font-extrabold text-gray-900">Pertanyaan Umum</h3>
            </div>

            <div class="space-y-4" x-data="{ active: null }">
                <!-- Q1 -->
                <div class="bg-gray-50 border border-gray-100 rounded-2xl overflow-hidden">
                    <button @click="active = active === 1 ? null : 1"
                        class="w-full px-6 py-5 flex justify-between items-center text-left focus:outline-none">
                        <span class="font-bold text-gray-900">Apakah biaya pendaftaran bisa diangsur?</span>
                        <i class="fa-solid text-green-700 transition-transform duration-300"
                            :class="active === 1 ? 'fa-minus' : 'fa-plus'"></i>
                    </button>
                    <div x-show="active === 1" x-collapse>
                        <div class="px-6 pb-5 text-gray-600 text-sm leading-relaxed border-t border-gray-200/50 pt-4">
                            Ya, Anda bisa membayarkan Uang Muka (DP) sebesar Rp 5.000.000 untuk penguncian kursi
                            keberangkatan. Sisa pembayaran dapat dicicil dan harus dilunasi maksimal 45 hari sebelum
                            jadwal berangkat.
                        </div>
                    </div>
                </div>
                <!-- Q2 -->
                <div class="bg-gray-50 border border-gray-100 rounded-2xl overflow-hidden">
                    <button @click="active = active === 2 ? null : 2"
                        class="w-full px-6 py-5 flex justify-between items-center text-left focus:outline-none">
                        <span class="font-bold text-gray-900">Apakah paket umroh sudah termasuk perlengkapan?</span>
                        <i class="fa-solid text-green-700 transition-transform duration-300"
                            :class="active === 2 ? 'fa-minus' : 'fa-plus'"></i>
                    </button>
                    <div x-show="active === 2" x-collapse>
                        <div class="px-6 pb-5 text-gray-600 text-sm leading-relaxed border-t border-gray-200/50 pt-4">
                            Tentu. Seluruh paket kami bersifat All-in. Anda akan mendapatkan Koper Bagasi, Koper Kabin,
                            Tas Paspor, Kain Ihram (Laki-laki) / Mukena (Perempuan), Buku Doa, dan Air Zam-zam 5 Liter.
                        </div>
                    </div>
                </div>
                <!-- Q3 -->
                <div class="bg-gray-50 border border-gray-100 rounded-2xl overflow-hidden">
                    <button @click="active = active === 3 ? null : 3"
                        class="w-full px-6 py-5 flex justify-between items-center text-left focus:outline-none">
                        <span class="font-bold text-gray-900">Apa syarat dokumen utama untuk mendaftar?</span>
                        <i class="fa-solid text-green-700 transition-transform duration-300"
                            :class="active === 3 ? 'fa-minus' : 'fa-plus'"></i>
                    </button>
                    <div x-show="active === 3" x-collapse>
                        <div class="px-6 pb-5 text-gray-600 text-sm leading-relaxed border-t border-gray-200/50 pt-4">
                            Dokumen yang dibutuhkan antara lain: Paspor asli dengan masa berlaku sisa minimal 7 bulan,
                            KTP, Kartu Keluarga, Pas Foto latar putih 4x6, dan Buku Vaksin Meningitis.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 10. BLOG / ARTIKEL -->
    <section id="blog" class="py-24 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-end mb-12">
                <div>
                    <h2 class="text-sm font-bold text-yellow-600 tracking-widest uppercase mb-3">Informasi Terbaru</h2>
                    <h3 class="text-4xl font-extrabold text-gray-900">Artikel & Panduan</h3>
                </div>
                <a href="#"
                    class="hidden md:inline-block font-bold text-green-900 bg-white border border-gray-200 px-6 py-2 rounded-full hover:bg-gray-50 transition">Lihat
                    Semua Blog</a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Artikel 1 -->
                <div
                    class="bg-white rounded-3xl overflow-hidden shadow-sm border border-gray-100 hover:shadow-lg transition">
                    <img src="{{ asset('images/tawaf.png') }}" alt="Tawaf" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <div class="flex items-center text-xs text-gray-500 mb-3 gap-3">
                            <span class="bg-yellow-100 text-yellow-800 px-2 py-1 rounded font-bold">Panduan</span>
                            <span>12 Agustus 2026</span>
                        </div>
                        <h4
                            class="text-xl font-bold text-gray-900 mb-3 leading-tight hover:text-green-700 transition cursor-pointer">
                            Menjaga Fisik Prima Sebelum Berangkat Umroh</h4>
                        <p class="text-gray-600 text-sm mb-4 line-clamp-2">Ibadah umroh membutuhkan ketahanan fisik
                            yang baik. Mulailah merutinkan jalan kaki ringan sebulan sebelum keberangkatan.</p>
                        <a href="#" class="text-green-900 font-bold text-sm">Baca Selengkapnya &rarr;</a>
                    </div>
                </div>
                <!-- Artikel 2 -->
                <div
                    class="bg-white rounded-3xl overflow-hidden shadow-sm border border-gray-100 hover:shadow-lg transition">
                    <img src="{{ asset('images/madinah.png') }}" alt="Madinah" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <div class="flex items-center text-xs text-gray-500 mb-3 gap-3">
                            <span class="bg-yellow-100 text-yellow-800 px-2 py-1 rounded font-bold">Sejarah</span>
                            <span>05 Agustus 2026</span>
                        </div>
                        <h4
                            class="text-xl font-bold text-gray-900 mb-3 leading-tight hover:text-green-700 transition cursor-pointer">
                            Mengenal Keistimewaan Raudhah di Masjid Nabawi</h4>
                        <p class="text-gray-600 text-sm mb-4 line-clamp-2">Raudhah adalah taman surga di dunia. Ketahui
                            adab dan waktu terbaik untuk berdoa di area suci ini.</p>
                        <a href="#" class="text-green-900 font-bold text-sm">Baca Selengkapnya &rarr;</a>
                    </div>
                </div>
                <!-- Artikel 3 -->
                <div
                    class="bg-white rounded-3xl overflow-hidden shadow-sm border border-gray-100 hover:shadow-lg transition">
                    <img src="{{ asset('images/hotel.png') }}" alt="Hotel" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <div class="flex items-center text-xs text-gray-500 mb-3 gap-3">
                            <span class="bg-yellow-100 text-yellow-800 px-2 py-1 rounded font-bold">Tips</span>
                            <span>28 Juli 2026</span>
                        </div>
                        <h4
                            class="text-xl font-bold text-gray-900 mb-3 leading-tight hover:text-green-700 transition cursor-pointer">
                            Barang yang Wajib Dibawa di Tas Selempang (Kabin)</h4>
                        <p class="text-gray-600 text-sm mb-4 line-clamp-2">Jangan memasukkan semua barang ke koper
                            bagasi. Paspor, obat-obatan pribadi, dan buku doa wajib berada di dekat Anda.</p>
                        <a href="#" class="text-green-900 font-bold text-sm">Baca Selengkapnya &rarr;</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 11. FOOTER -->
    <footer class="bg-white border-t border-gray-200 pt-20 pb-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-16">
                <div class="md:col-span-1">
                    <span class="text-2xl font-extrabold text-green-900 tracking-tight block mb-4">MABRUR<span
                            class="text-yellow-500">.</span></span>
                    <p class="text-gray-500 text-sm leading-relaxed mb-6">Penyelenggara Perjalanan Ibadah Umroh (PPIU)
                        terpercaya yang menjunjung tinggi amanah dan sunnah.</p>
                    <div class="flex gap-4">
                        <a href="#"
                            class="w-10 h-10 bg-gray-50 text-gray-600 rounded-full flex items-center justify-center hover:bg-green-900 hover:text-white transition"><i
                                class="fa-brands fa-instagram"></i></a>
                        <a href="#"
                            class="w-10 h-10 bg-gray-50 text-gray-600 rounded-full flex items-center justify-center hover:bg-green-900 hover:text-white transition"><i
                                class="fa-brands fa-facebook"></i></a>
                        <a href="#"
                            class="w-10 h-10 bg-gray-50 text-gray-600 rounded-full flex items-center justify-center hover:bg-green-900 hover:text-white transition"><i
                                class="fa-brands fa-youtube"></i></a>
                    </div>
                </div>
                <div>
                    <h4 class="font-bold text-gray-900 mb-6">Navigasi</h4>
                    <ul class="space-y-3 text-sm text-gray-500">
                        <li><a href="#tentang" class="hover:text-green-900 transition">Tentang Kami</a></li>
                        <li><a href="#paket" class="hover:text-green-900 transition">Paket Umroh</a></li>
                        <li><a href="#galeri" class="hover:text-green-900 transition">Galeri Jemaah</a></li>
                        <li><a href="#blog" class="hover:text-green-900 transition">Artikel & Blog</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-bold text-gray-900 mb-6">Kontak & Bantuan</h4>
                    <ul class="space-y-3 text-sm text-gray-500">
                        <li><a href="#faq" class="hover:text-green-900 transition">Pertanyaan Umum (FAQ)</a></li>
                        <li class="flex items-start gap-3 mt-4"><i class="fa-solid fa-phone mt-1 text-green-900"></i>
                            +62 812 3456 7890</li>
                        <li class="flex items-start gap-3"><i class="fa-solid fa-envelope mt-1 text-green-900"></i>
                            salam@mabrurtravel.com</li>
                        <li class="flex items-start gap-3"><i
                                class="fa-solid fa-map-location-dot mt-1 text-green-900"></i> Gedung Mabrur, Batam
                            Centre, Kepulauan Riau</li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-bold text-gray-900 mb-6">Legalitas</h4>
                    <div class="bg-gray-50 p-4 rounded-xl border border-gray-100">
                        <p class="text-xs text-gray-500 font-semibold uppercase tracking-wider">SK Kemenag RI (PPIU)
                        </p>
                        <p class="font-bold text-green-900 mb-3 text-lg">No. U.123 / 2023</p>
                        <p class="text-xs text-gray-500 font-semibold uppercase tracking-wider">SK Kemenag RI (PIHK)
                        </p>
                        <p class="font-bold text-green-900 text-lg">No. H.456 / 2023</p>
                    </div>
                </div>
            </div>
            <div class="text-center pt-8 border-t border-gray-100 text-gray-400 text-sm font-medium">
                &copy; 2026 PT Mabrur Travel Indonesia. Hak Cipta Dilindungi Undang-Undang.
            </div>
        </div>
    </footer>

</body>

</html>
