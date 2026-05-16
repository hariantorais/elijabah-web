<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mabrur Travel - Serene Minimalist Theme</title>

    <!-- Tailwind CSS & Alpine JS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Fonts: DM Serif Display (Elegant Editorial) & Work Sans (Clean Modern) -->
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=Work+Sans:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        olive: {
                            50: '#f7fee7',
                            100: '#ecfccb',
                            400: '#a3e635',
                            500: '#84cc16',
                            600: '#65a30d',
                            /* Main Accent */
                            700: '#4d7c0f',
                            800: '#3f6212',
                            900: '#365314',
                        },
                        stone: {
                            50: '#fafaf9',
                            100: '#f5f5f4',
                            200: '#e7e5e4',
                            800: '#292524',
                            900: '#1c1917',
                        }
                    },
                    fontFamily: {
                        sans: ['Work Sans', 'sans-serif'],
                        serif: ['DM Serif Display', 'serif'],
                    }
                }
            }
        }
    </script>

    <style>
        body {
            font-family: 'Work Sans', sans-serif;
            background-color: #ffffff;
            color: #292524;
        }

        [x-cloak] {
            display: none !important;
        }

        /* Thin elegant borders */
        .border-hairline {
            border-width: 0.5px;
            border-color: #e7e5e4;
        }

        /* Image treatment for serene look */
        .img-serene {
            filter: saturate(0.9) contrast(1.05);
            transition: all 0.7s ease;
        }

        .img-serene:hover {
            filter: saturate(1) contrast(1);
        }
    </style>
</head>

<body class="antialiased selection:bg-olive-100 selection:text-olive-900">

    <!-- 1. MINIMALIST NAVBAR -->
    <nav x-data="{ mobileMenu: false, scrolled: false }" @scroll.window="scrolled = (window.pageYOffset > 20)"
        class="fixed w-full z-50 transition-all duration-500"
        :class="scrolled ? 'bg-white/90 backdrop-blur-md border-b border-stone-200 py-4 shadow-sm' : 'bg-transparent py-6'">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center gap-2">
                    <span class="text-2xl font-serif text-stone-900 tracking-wide">
                        Mabrur<span class="text-olive-600">.</span>
                    </span>
                </div>

                <!-- Desktop Menu -->
                <div
                    class="hidden lg:flex space-x-10 items-center text-xs font-medium uppercase tracking-[0.15em] text-stone-500">
                    <a href="#profil" class="hover:text-olive-600 transition duration-300">Profil</a>
                    <a href="#whyus" class="hover:text-olive-600 transition duration-300">Layanan</a>
                    <a href="#paket" class="hover:text-olive-600 transition duration-300">Program</a>
                    <a href="#galeri" class="hover:text-olive-600 transition duration-300">Jurnal Visual</a>
                    <a href="#blog" class="hover:text-olive-600 transition duration-300">Artikel</a>
                </div>

                <!-- Desktop CTA -->
                <div class="hidden lg:block">
                    <a href="#"
                        class="px-6 py-2.5 border border-stone-300 text-stone-800 text-xs font-medium uppercase tracking-[0.1em] hover:bg-stone-900 hover:text-white transition duration-500">
                        Konsultasi
                    </a>
                </div>

                <!-- Mobile Button -->
                <div class="lg:hidden">
                    <button @click="mobileMenu = !mobileMenu" class="text-stone-800 focus:outline-none">
                        <i class="fa-solid text-2xl" :class="mobileMenu ? 'fa-xmark' : 'fa-bars'"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div x-cloak x-show="mobileMenu" x-transition
            class="lg:hidden bg-white absolute w-full top-full left-0 border-t border-stone-100 shadow-xl pb-6">
            <div class="px-6 py-6 flex flex-col space-y-6 text-center">
                <a href="#profil" @click="mobileMenu = false"
                    class="text-stone-600 hover:text-olive-600 text-xs uppercase tracking-[0.15em]">Profil</a>
                <a href="#whyus" @click="mobileMenu = false"
                    class="text-stone-600 hover:text-olive-600 text-xs uppercase tracking-[0.15em]">Layanan</a>
                <a href="#paket" @click="mobileMenu = false"
                    class="text-stone-600 hover:text-olive-600 text-xs uppercase tracking-[0.15em]">Program</a>
                <a href="#galeri" @click="mobileMenu = false"
                    class="text-stone-600 hover:text-olive-600 text-xs uppercase tracking-[0.15em]">Jurnal Visual</a>
                <a href="#faq" @click="mobileMenu = false"
                    class="text-slate-600 hover:text-olive-600 text-xs uppercase tracking-[0.15em]">FAQ</a>
                <a href="#"
                    class="bg-stone-900 text-white py-4 text-xs uppercase tracking-[0.15em] mx-4 mt-4">Hubungi Kami</a>
            </div>
        </div>
    </nav>

    <!-- 2. EDITORIAL HERO -->
    <section class="relative pt-32 pb-20 lg:pt-40 lg:pb-32 bg-stone-50 overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row items-center gap-12 lg:gap-20">

                <div class="w-full lg:w-5/12 z-10 pt-10">
                    <p
                        class="text-olive-600 font-medium tracking-[0.2em] text-xs uppercase mb-6 flex items-center gap-4">
                        <span class="w-8 h-px bg-olive-600"></span> Perjalanan Spiritual
                    </p>
                    <h1 class="text-5xl md:text-6xl lg:text-7xl font-serif text-stone-900 leading-[1.1] mb-8">
                        Kembali Ke <br>
                        Baitullah.
                    </h1>
                    <p class="text-stone-500 mb-10 leading-relaxed font-light text-lg">
                        Melangkah dengan hati yang tenang. Mabrur Travel mengurus segala kebutuhan administratif dan
                        teknis Anda, agar fokus ibadah tetap terjaga kemurniannya.
                    </p>
                    <div class="flex gap-6 items-center">
                        <a href="#paket"
                            class="bg-stone-900 text-white px-8 py-4 text-xs font-medium uppercase tracking-widest hover:bg-olive-600 transition duration-500">
                            Lihat Program
                        </a>
                        <a href="#profil"
                            class="text-stone-500 hover:text-stone-900 text-sm font-medium transition duration-300">
                            Kenali Kami &rarr;
                        </a>
                    </div>
                </div>

                <div class="w-full lg:w-7/12 relative">
                    <div class="aspect-[4/3] w-full overflow-hidden">
                        <img src="{{ asset('images/mekkah.png') }}" alt="Mekkah"
                            class="w-full h-full object-cover img-serene hover:scale-105">
                    </div>
                    <!-- Minimalist stats box -->
                    <div
                        class="absolute -bottom-6 -left-6 bg-white p-8 shadow-xl border-hairline max-w-xs hidden md:block">
                        <p class="text-4xl font-serif text-stone-900 mb-2">15,000+</p>
                        <p class="text-xs text-stone-500 uppercase tracking-widest leading-relaxed">Jemaah yang telah
                            beribadah bersama kami.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 3. BRAND & TRUST -->
    <section class="py-12 border-b border-stone-100 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <p class="text-center text-xs text-stone-400 uppercase tracking-widest mb-8">Mitra Kepercayaan Kami</p>
            <div
                class="flex flex-wrap justify-center lg:justify-center items-center gap-12 md:gap-20 opacity-50 grayscale">
                <div class="flex items-center gap-2 font-serif text-lg text-stone-800"><i class="fa-solid fa-plane"></i>
                    Saudia</div>
                <div class="flex items-center gap-2 font-serif text-lg text-stone-800"><i
                        class="fa-brands fa-avianex"></i> Garuda</div>
                <div class="flex items-center gap-2 font-serif text-lg text-stone-800"><i class="fa-solid fa-moon"></i>
                    Turkish Air</div>
                <div class="flex items-center gap-2 font-serif text-lg text-stone-800"><i
                        class="fa-solid fa-building-columns"></i> Kemenag RI</div>
            </div>
        </div>
    </section>

    <!-- 4. PROFILE (KINFAUX / MAGAZINE STYLE) -->
    <section id="profil" class="py-32 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 items-start">

                <!-- Left Title Area -->
                <div class="lg:col-span-4 lg:sticky lg:top-32">
                    <h2 class="text-sm font-medium text-stone-400 tracking-[0.2em] uppercase mb-4">Filosofi Kami</h2>
                    <h3 class="text-4xl lg:text-5xl font-serif text-stone-900 leading-tight mb-6">Integritas Dalam
                        Pelayanan.</h3>
                    <p class="text-stone-500 leading-relaxed font-light mb-8">Biro umroh yang mengedepankan asas
                        kejujuran, transparansi, dan komitmen pada sunnah Rasulullah ﷺ.</p>

                    <div class="flex items-center gap-4 pt-6 border-t border-stone-100">
                        <img src="{{ asset('images/owner.png') }}" alt="Founder"
                            class="w-12 h-12 rounded-full object-cover grayscale">
                        <div>
                            <p class="font-serif text-stone-900 text-lg">H. Harianto Rais</p>
                            <p class="text-[10px] text-stone-400 uppercase tracking-widest">Pendiri Mabrur Travel</p>
                        </div>
                    </div>
                </div>

                <!-- Right Images & Text -->
                <div class="lg:col-span-8">
                    <div class="aspect-[16/9] w-full overflow-hidden mb-12">
                        <img src="{{ asset('images/tawaf.png') }}" class="w-full h-full object-cover img-serene"
                            alt="Tawaf">
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                        <div>
                            <p class="text-stone-600 leading-relaxed font-light mb-6">Didirikan dengan keresahan akan
                                banyaknya praktik travel yang kurang transparan, Mabrur Travel hadir di Batam sebagai
                                oase bagi calon jemaah. Kami percaya bahwa ibadah harus dimulai dari niat yang bersih
                                dan proses yang jujur.</p>
                        </div>
                        <div>
                            <p class="text-stone-600 leading-relaxed font-light">Setiap keberangkatan diawasi dengan
                                *Quality Control* tingkat tinggi. Hotel selalu dipastikan berada di Ring 1, tiket
                                pesawat telah terbayar lunas (*block seat*), dan muthawwif kami adalah asatidz pilihan
                                yang mumpuni dalam fiqih ibadah.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 5. SERVICES (MINIMAL CARDS) -->
    <section id="whyus" class="py-32 bg-stone-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-20">
                <h2 class="text-sm font-medium text-olive-600 tracking-[0.2em] uppercase mb-4">Nilai Esensial</h2>
                <h3 class="text-4xl font-serif text-stone-900">Mengapa Memilih Kami</h3>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
                <!-- Item 1 -->
                <div class="border-hairline bg-white p-12 hover:shadow-2xl transition duration-500 group">
                    <div
                        class="w-12 h-12 flex items-center justify-center border border-stone-200 text-stone-800 mb-8 group-hover:bg-olive-600 group-hover:text-white group-hover:border-olive-600 transition duration-300">
                        <i class="fa-solid fa-plane-departure text-lg"></i>
                    </div>
                    <h4 class="text-2xl font-serif text-stone-900 mb-4">Kepastian Terbang</h4>
                    <p class="text-stone-500 font-light leading-relaxed text-sm">Sistem kami memastikan tiket pesawat
                        telah dibayar lunas (*block seat*) jauh-jauh hari, sehingga jadwal tidak akan berubah sepihak.
                    </p>
                </div>
                <!-- Item 2 -->
                <div class="border-hairline bg-white p-12 hover:shadow-2xl transition duration-500 group">
                    <div
                        class="w-12 h-12 flex items-center justify-center border border-stone-200 text-stone-800 mb-8 group-hover:bg-olive-600 group-hover:text-white group-hover:border-olive-600 transition duration-300">
                        <i class="fa-solid fa-book-open-reader text-lg"></i>
                    </div>
                    <h4 class="text-2xl font-serif text-stone-900 mb-4">Bimbingan Murni</h4>
                    <p class="text-stone-500 font-light leading-relaxed text-sm">Manasik dan pembimbingan di tanah suci
                        diajarkan eksklusif sesuai dengan dalil Al-Qur'an dan Sunnah yang sahih.</p>
                </div>
                <!-- Item 3 -->
                <div class="border-hairline bg-white p-12 hover:shadow-2xl transition duration-500 group">
                    <div
                        class="w-12 h-12 flex items-center justify-center border border-stone-200 text-stone-800 mb-8 group-hover:bg-olive-600 group-hover:text-white group-hover:border-olive-600 transition duration-300">
                        <i class="fa-solid fa-bed text-lg"></i>
                    </div>
                    <h4 class="text-2xl font-serif text-stone-900 mb-4">Akomodasi Ideal</h4>
                    <p class="text-stone-500 font-light leading-relaxed text-sm">Kami memilih hotel bintang 4 & 5 di
                        pelataran masjid (Ring 1) untuk memastikan Anda tidak kelelahan saat berjalan kaki menuju
                        masjid.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 6. PROGRAMS (EDITORIAL PRICING) -->
    <section id="paket" class="py-32 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-end mb-20 gap-8">
                <div>
                    <h2 class="text-sm font-medium text-stone-400 tracking-[0.2em] uppercase mb-4">Katalog Ibadah</h2>
                    <h3 class="text-4xl lg:text-5xl font-serif text-stone-900">Program Keberangkatan</h3>
                </div>
                <p class="text-stone-500 font-light max-w-md">Harga bersifat transparan (All-In). Tidak ada biaya
                    tersembunyi, sehingga Anda dapat fokus sepenuhnya pada ibadah.</p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Package 1 -->
                <div class="group">
                    <div class="aspect-[4/3] overflow-hidden mb-8 relative">
                        <img src="{{ asset('images/madinah.png') }}"
                            class="w-full h-full object-cover img-serene group-hover:scale-105" alt="Reguler">
                        <div
                            class="absolute top-4 left-4 bg-white px-4 py-2 text-[10px] uppercase tracking-widest font-bold text-stone-800">
                            9 Hari</div>
                    </div>
                    <h4 class="text-3xl font-serif text-stone-900 mb-3">Umroh Reguler</h4>
                    <p class="text-olive-600 text-xl font-medium mb-6">Rp 28.500.000</p>
                    <ul class="space-y-3 text-stone-500 font-light text-sm mb-8 border-t border-stone-100 pt-6">
                        <li class="flex items-start gap-3"><span class="text-olive-600">&mdash;</span> Tiket Ekonomi
                            (Lion/Batik Air PP)</li>
                        <li class="flex items-start gap-3"><span class="text-olive-600">&mdash;</span> Hotel Setaraf
                            Bintang 4</li>
                        <li class="flex items-start gap-3"><span class="text-olive-600">&mdash;</span> Fullboard
                            Katering Nusantara</li>
                        <li class="flex items-start gap-3"><span class="text-olive-600">&mdash;</span> Perlengkapan
                            Koper & Ihram/Mukena</li>
                    </ul>
                    <a href="#"
                        class="inline-block border-b border-stone-800 text-stone-800 text-xs font-bold uppercase tracking-[0.1em] pb-1 hover:text-olive-600 hover:border-olive-600 transition">Minta
                        Itinerary</a>
                </div>

                <!-- Package 2 -->
                <div class="group">
                    <div class="aspect-[4/3] overflow-hidden mb-8 relative">
                        <img src="{{ asset('images/hotel.png') }}"
                            class="w-full h-full object-cover img-serene group-hover:scale-105" alt="Premium">
                        <div
                            class="absolute top-4 left-4 bg-stone-900 text-white px-4 py-2 text-[10px] uppercase tracking-widest font-bold">
                            Terpopuler &bull; 12 Hari</div>
                    </div>
                    <h4 class="text-3xl font-serif text-stone-900 mb-3">Umroh Plus Turki</h4>
                    <p class="text-olive-600 text-xl font-medium mb-6">Rp 37.000.000</p>
                    <ul class="space-y-3 text-stone-500 font-light text-sm mb-8 border-t border-stone-100 pt-6">
                        <li class="flex items-start gap-3"><span class="text-olive-600">&mdash;</span> Direct Flight
                            Turkish Airlines</li>
                        <li class="flex items-start gap-3"><span class="text-olive-600">&mdash;</span> Hotel Bintang 5
                            (Ring 1)</li>
                        <li class="flex items-start gap-3"><span class="text-olive-600">&mdash;</span> City Tour
                            Istanbul & Bursa 3 Hari</li>
                        <li class="flex items-start gap-3"><span class="text-olive-600">&mdash;</span> Kereta Cepat
                            Haramain (Makkah-Madinah)</li>
                    </ul>
                    <a href="#"
                        class="inline-block border-b border-stone-800 text-stone-800 text-xs font-bold uppercase tracking-[0.1em] pb-1 hover:text-olive-600 hover:border-olive-600 transition">Booking
                        Sekarang</a>
                </div>

                <!-- Package 3 -->
                <div class="group">
                    <div class="aspect-[4/3] overflow-hidden mb-8 relative">
                        <img src="{{ asset('images/tawaf.png') }}"
                            class="w-full h-full object-cover img-serene group-hover:scale-105" alt="Haji">
                        <div
                            class="absolute top-4 left-4 bg-white px-4 py-2 text-[10px] uppercase tracking-widest font-bold text-stone-800">
                            Kuota Kemenag</div>
                    </div>
                    <h4 class="text-3xl font-serif text-stone-900 mb-3">Haji Khusus (ONH)</h4>
                    <p class="text-olive-600 text-xl font-medium mb-6">$ 12,500 <span
                            class="text-sm font-light text-stone-400">Mulai</span></p>
                    <ul class="space-y-3 text-stone-500 font-light text-sm mb-8 border-t border-stone-100 pt-6">
                        <li class="flex items-start gap-3"><span class="text-olive-600">&mdash;</span> Kepastian Masa
                            Tunggu Cepat</li>
                        <li class="flex items-start gap-3"><span class="text-olive-600">&mdash;</span> Maktab Tenda
                            VIP Arafah-Mina</li>
                        <li class="flex items-start gap-3"><span class="text-olive-600">&mdash;</span> Bimbingan
                            Manasik Intensif</li>
                        <li class="flex items-start gap-3"><span class="text-olive-600">&mdash;</span> Didampingi Tim
                            Medis Pribadi</li>
                    </ul>
                    <a href="#"
                        class="inline-block border-b border-stone-800 text-stone-800 text-xs font-bold uppercase tracking-[0.1em] pb-1 hover:text-olive-600 hover:border-olive-600 transition">Konsultasi
                        Haji</a>
                </div>
            </div>
        </div>
    </section>

    <!-- 7. GALLERY (ASYMMETRIC GRID) -->
    <section id="galeri" class="py-32 bg-stone-900 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-end mb-16 gap-8">
                <div>
                    <h2 class="text-sm font-medium text-olive-400 tracking-[0.2em] uppercase mb-4">Jurnal Visual</h2>
                    <h3 class="text-4xl lg:text-5xl font-serif text-white">Momen Di Tanah Suci</h3>
                </div>
                <a href="#"
                    class="text-xs uppercase tracking-widest border-b border-white pb-1 hover:text-olive-400 hover:border-olive-400 transition">Instagram
                    Kami</a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-12 gap-4 h-auto md:h-[600px]">
                <div class="md:col-span-8 overflow-hidden group">
                    <img src="{{ asset('images/mekkah.png') }}"
                        class="w-full h-full object-cover grayscale opacity-80 group-hover:grayscale-0 group-hover:opacity-100 transition duration-700 hover:scale-105"
                        alt="Gallery 1">
                </div>
                <div class="md:col-span-4 grid grid-rows-2 gap-4">
                    <div class="overflow-hidden group">
                        <img src="{{ asset('images/madinah.png') }}"
                            class="w-full h-full object-cover grayscale opacity-80 group-hover:grayscale-0 group-hover:opacity-100 transition duration-700 hover:scale-105"
                            alt="Gallery 2">
                    </div>
                    <div class="overflow-hidden group">
                        <img src="{{ asset('images/hotel.png') }}"
                            class="w-full h-full object-cover grayscale opacity-80 group-hover:grayscale-0 group-hover:opacity-100 transition duration-700 hover:scale-105"
                            alt="Gallery 3">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 8. TESTIMONIALS (EDITORIAL TYPOGRAPHY) -->
    <section id="testimoni" class="py-32 bg-stone-50">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-sm font-medium text-stone-400 tracking-[0.2em] uppercase mb-16">Suara Jemaah</h2>

            <div x-data="{ currentSlide: 0 }" class="relative">
                <!-- Slide 1 -->
                <div x-show="currentSlide === 0" x-transition.opacity.duration.700ms>
                    <p class="text-2xl md:text-4xl font-serif text-stone-800 leading-snug mb-12">
                        "Pelayanan yang sangat transparan dan elegan. Dari pendaftaran hingga kepulangan, saya merasa
                        tenang karena semua dikelola dengan profesional. Hotel sangat dekat, memudahkan orang tua saya."
                    </p>
                    <div class="flex items-center justify-center gap-4">
                        <img src="{{ asset('images/user1.png') }}" alt="User 1"
                            class="w-12 h-12 rounded-full object-cover grayscale">
                        <div class="text-left">
                            <p class="font-serif text-stone-900 text-lg">Ahmad Faisal</p>
                            <p class="text-[10px] text-stone-500 uppercase tracking-widest">Jemaah Reguler</p>
                        </div>
                    </div>
                </div>

                <!-- Very basic custom controls for aesthetic -->
                <div class="mt-16 flex justify-center gap-4">
                    <button @click="currentSlide = 0" class="w-2 h-2 rounded-full transition-all duration-300"
                        :class="currentSlide === 0 ? 'bg-stone-800' : 'bg-stone-300'"></button>
                    <!-- Simulated second slide button -->
                    <button @click="currentSlide = 0" class="w-2 h-2 rounded-full bg-stone-300"></button>
                </div>
            </div>
        </div>
    </section>

    <!-- 9. FAQ -->
    <section id="faq" class="py-32 bg-white">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-serif text-stone-900 mb-12 text-center">Pertanyaan Umum</h2>

            <div class="space-y-0" x-data="{ active: null }">
                <div class="border-b border-stone-200">
                    <button @click="active = active === 1 ? null : 1"
                        class="w-full py-6 flex justify-between items-center text-left focus:outline-none">
                        <span class="font-medium text-stone-800 text-lg">Bagaimana sistem pembayarannya?</span>
                        <span class="text-stone-400 text-2xl transition-transform duration-300"
                            :class="active === 1 ? 'rotate-45' : ''">+</span>
                    </button>
                    <div x-show="active === 1" x-collapse>
                        <p class="pb-6 text-stone-500 font-light leading-relaxed">Pembayaran cukup diawali dengan Uang
                            Muka (DP) Rp 5.000.000 untuk pengamanan seat. Sisa biaya dapat diangsur dan dilunasi
                            maksimal H-45 keberangkatan.</p>
                    </div>
                </div>

                <div class="border-b border-stone-200">
                    <button @click="active = active === 2 ? null : 2"
                        class="w-full py-6 flex justify-between items-center text-left focus:outline-none">
                        <span class="font-medium text-stone-800 text-lg">Apa yang dimaksud dengan Harga All-in?</span>
                        <span class="text-stone-400 text-2xl transition-transform duration-300"
                            :class="active === 2 ? 'rotate-45' : ''">+</span>
                    </button>
                    <div x-show="active === 2" x-collapse>
                        <p class="pb-6 text-stone-500 font-light leading-relaxed">Harga paket sudah mencakup seluruh
                            kebutuhan utama ibadah: Tiket pesawat PP, hotel, makan, visa, asuransi, dan perlengkapan.
                            Tidak termasuk pembuatan paspor dan pengeluaran pribadi.</p>
                    </div>
                </div>

                <div class="border-b border-stone-200">
                    <button @click="active = active === 3 ? null : 3"
                        class="w-full py-6 flex justify-between items-center text-left focus:outline-none">
                        <span class="font-medium text-stone-800 text-lg">Apakah tersedia layanan untuk jemaah
                            lansia?</span>
                        <span class="text-stone-400 text-2xl transition-transform duration-300"
                            :class="active === 3 ? 'rotate-45' : ''">+</span>
                    </button>
                    <div x-show="active === 3" x-collapse>
                        <p class="pb-6 text-stone-500 font-light leading-relaxed">Sangat tersedia. Tim muthawwif kami
                            selalu siaga mendampingi jemaah risti (risiko tinggi) dan lansia. Kami juga dapat mengatur
                            penyewaan kursi roda dan pendorong resmi di tanah suci.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 10. BLOG / JOURNAL -->
    <section id="blog" class="py-32 bg-stone-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-end mb-20 gap-8">
                <div>
                    <h2 class="text-sm font-medium text-stone-400 tracking-[0.2em] uppercase mb-4">Wawasan Edukasi</h2>
                    <h3 class="text-4xl font-serif text-stone-900">Jurnal Islami</h3>
                </div>
                <a href="#"
                    class="border-b border-stone-800 text-stone-800 text-xs font-bold uppercase tracking-[0.1em] pb-1 hover:text-olive-600 hover:border-olive-600 transition">Semua
                    Tulisan</a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
                <!-- Article 1 -->
                <article class="group">
                    <div class="aspect-[4/3] overflow-hidden mb-6">
                        <img src="{{ asset('images/tawaf.png') }}"
                            class="w-full h-full object-cover img-serene group-hover:scale-105" alt="Blog 1">
                    </div>
                    <p class="text-xs text-stone-400 uppercase tracking-widest mb-3">Panduan &bull; 12 Ags 2026</p>
                    <h4 class="text-2xl font-serif text-stone-900 mb-4 group-hover:text-olive-600 transition">Menjaga
                        Niat dan Keikhlasan Saat Melakukan Tawaf</h4>
                    <p class="text-stone-500 font-light text-sm mb-4 line-clamp-2">Memahami esensi berkeliling Ka'bah
                        agar tidak sekadar rutinitas fisik, namun juga pengembaraan spiritual batin.</p>
                </article>
                <!-- Article 2 -->
                <article class="group">
                    <div class="aspect-[4/3] overflow-hidden mb-6">
                        <img src="{{ asset('images/madinah.png') }}"
                            class="w-full h-full object-cover img-serene group-hover:scale-105" alt="Blog 2">
                    </div>
                    <p class="text-xs text-stone-400 uppercase tracking-widest mb-3">Sejarah &bull; 05 Ags 2026</p>
                    <h4 class="text-2xl font-serif text-stone-900 mb-4 group-hover:text-olive-600 transition">Tata
                        Krama Berziarah di Raudhah Masjid Nabawi</h4>
                    <p class="text-stone-500 font-light text-sm mb-4 line-clamp-2">Taman surga di dunia menuntut
                        ketenangan. Berikut adab yang dianjurkan saat memasuki area suci ini.</p>
                </article>
                <!-- Article 3 -->
                <article class="group">
                    <div class="aspect-[4/3] overflow-hidden mb-6">
                        <img src="{{ asset('images/hotel.png') }}"
                            class="w-full h-full object-cover img-serene group-hover:scale-105" alt="Blog 3">
                    </div>
                    <p class="text-xs text-stone-400 uppercase tracking-widest mb-3">Tips &bull; 28 Jul 2026</p>
                    <h4 class="text-2xl font-serif text-stone-900 mb-4 group-hover:text-olive-600 transition">Menyusun
                        Barang Esensial di Tas Kabin Anda</h4>
                    <p class="text-stone-500 font-light text-sm mb-4 line-clamp-2">Jangan masukkan paspor dan obat
                        harian di bagasi. Ini daftar barang krusial yang harus selalu di dekat Anda.</p>
                </article>
            </div>
        </div>
    </section>

    <!-- 11. FOOTER -->
    <footer class="bg-white border-t border-stone-200 pt-24 pb-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-20">
                <!-- Brand -->
                <div class="md:col-span-1">
                    <span class="text-2xl font-serif text-stone-900 tracking-wide block mb-6">Mabrur<span
                            class="text-olive-600">.</span></span>
                    <p class="text-stone-500 font-light text-sm leading-relaxed mb-8">Penyelenggara Perjalanan Ibadah
                        Umroh (PPIU) resmi yang menyajikan pengalaman spiritual dalam balutan pelayanan editorial
                        minimalis nan elegan.</p>
                    <div class="flex gap-4">
                        <a href="#" class="text-stone-400 hover:text-stone-900 transition"><i
                                class="fa-brands fa-instagram text-xl"></i></a>
                        <a href="#" class="text-stone-400 hover:text-stone-900 transition"><i
                                class="fa-brands fa-facebook-f text-xl"></i></a>
                    </div>
                </div>

                <!-- Navigation -->
                <div>
                    <h4 class="font-medium text-stone-900 mb-6 text-sm uppercase tracking-widest">Eksplorasi</h4>
                    <ul class="space-y-4 text-sm font-light text-stone-500">
                        <li><a href="#profil" class="hover:text-olive-600 transition">Tentang Mabrur</a></li>
                        <li><a href="#whyus" class="hover:text-olive-600 transition">Standar Layanan</a></li>
                        <li><a href="#paket" class="hover:text-olive-600 transition">Program Ibadah</a></li>
                        <li><a href="#galeri" class="hover:text-olive-600 transition">Jurnal Jemaah</a></li>
                    </ul>
                </div>

                <!-- Info -->
                <div>
                    <h4 class="font-medium text-stone-900 mb-6 text-sm uppercase tracking-widest">Informasi</h4>
                    <ul class="space-y-4 text-sm font-light text-stone-500">
                        <li><a href="#faq" class="hover:text-olive-600 transition">Bantuan (FAQ)</a></li>
                        <li><a href="#" class="hover:text-olive-600 transition">Syarat & Ketentuan</a></li>
                        <li><a href="#" class="hover:text-olive-600 transition">Kebijakan Privasi</a></li>
                        <li><a href="#blog" class="hover:text-olive-600 transition">Artikel Edukasi</a></li>
                    </ul>
                </div>

                <!-- Contact -->
                <div>
                    <h4 class="font-medium text-stone-900 mb-6 text-sm uppercase tracking-widest">Kontak</h4>
                    <ul class="space-y-4 text-sm font-light text-stone-500 mb-8">
                        <li>Gedung Mabrur, Batam Centre, Kepulauan Riau, Indonesia.</li>
                        <li>+62 812 3456 7890</li>
                        <li>salam@mabrurtravel.com</li>
                    </ul>
                    <div class="border border-stone-200 p-4">
                        <p class="text-[10px] text-stone-400 uppercase tracking-widest mb-1">Izin Resmi Kemenag RI</p>
                        <p class="font-serif text-stone-900">PPIU No. U.123/2023</p>
                    </div>
                </div>
            </div>

            <!-- Footer Bottom -->
            <div
                class="border-t border-stone-200 pt-8 flex flex-col md:flex-row justify-between items-center gap-4 text-[11px] text-stone-400 uppercase tracking-widest">
                <p>&copy; 2026 PT Mabrur Travel Indonesia.</p>
                <p>Membimbing dengan Hati.</p>
            </div>
        </div>
    </footer>

</body>

</html>
