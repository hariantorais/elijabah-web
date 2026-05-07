<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UMKM Heritage - Classic & Authentic Theme</title>

    <!-- Tailwind CSS & Alpine JS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Fonts: Merriweather (Serif) & Open Sans (Sans) -->
    <link
        href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,400&family=Open+Sans:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        maroon: {
                            50: '#fdf2f2',
                            100: '#fbe8e8',
                            500: '#d9534f',
                            700: '#8c1c1c',
                            /* Main Maroon */
                            800: '#751414',
                            900: '#4a0a0a',
                            /* Deep Dark Maroon */
                        },
                        cream: {
                            50: '#fcfbf9',
                            100: '#f6f3eb',
                            /* Main Background */
                            200: '#e8e0cc',
                            300: '#d7c9a8',
                        },
                        gold: {
                            400: '#d4af37',
                            500: '#b8992e',
                            /* Accent Gold */
                            600: '#9c8124',
                        }
                    },
                    fontFamily: {
                        sans: ['Open Sans', 'sans-serif'],
                        serif: ['Merriweather', 'serif'],
                    }
                }
            }
        }
    </script>

    <style>
        body {
            font-family: 'Open Sans', sans-serif;
            background-color: #f6f3eb;
            color: #4a0a0a;
        }

        [x-cloak] {
            display: none !important;
        }

        /* Double border styling for heritage feel */
        .border-double-gold {
            border: 4px double #b8992e;
        }

        /* Sepia effect for images */
        .img-classic {
            filter: sepia(0.3) contrast(1.1);
            transition: filter 0.5s ease;
        }

        .img-classic:hover {
            filter: sepia(0) contrast(1);
        }

        /* Ornate divider */
        .ornate-divider {
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 2rem 0;
        }

        .ornate-divider::before,
        .ornate-divider::after {
            content: '';
            flex: 1;
            border-bottom: 1px solid #d7c9a8;
        }

        .ornate-divider i {
            margin: 0 1rem;
            color: #b8992e;
            font-size: 0.8rem;
        }
    </style>
</head>

<body class="antialiased selection:bg-gold-500 selection:text-white">

    <!-- 1. TOP BAR -->
    <div class="bg-maroon-900 text-cream-100 py-2 border-b border-gold-500/30 text-xs hidden md:block font-serif">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex justify-between items-center">
            <p><i class="fa-solid fa-leaf text-gold-500 mr-2"></i> Mahakarya Wastra Nusantara Sejak 1998</p>
            <div class="flex gap-4">
                <a href="#" class="hover:text-gold-500 transition">IDR</a>
                <span>|</span>
                <a href="#" class="hover:text-gold-500 transition">Pengiriman Global</a>
            </div>
        </div>
    </div>

    <!-- 2. NAVBAR -->
    <nav x-data="{ mobileMenu: false, scrolled: false }" @scroll.window="scrolled = (window.pageYOffset > 20)"
        class="fixed w-full z-50 transition-all duration-300 border-b border-maroon-900/10"
        :class="scrolled ? 'bg-cream-100/95 backdrop-blur-md shadow-md py-3' : 'bg-cream-100 py-6'" style="top: auto;">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center">
                <!-- Mobile Menu Button (Left) -->
                <div class="md:hidden flex-1">
                    <button @click="mobileMenu = !mobileMenu" class="text-maroon-900 focus:outline-none text-2xl">
                        <i class="fa-solid" :class="mobileMenu ? 'fa-xmark' : 'fa-bars'"></i>
                    </button>
                </div>

                <!-- Desktop Menu (Left) -->
                <div class="hidden md:flex flex-1 space-x-8 items-center font-serif text-sm font-bold text-maroon-900">
                    <a href="#koleksi" class="hover:text-gold-500 transition">Koleksi Wastra</a>
                    <a href="#warisan" class="hover:text-gold-500 transition">Kisah Kami</a>
                </div>

                <!-- Logo (Center) -->
                <div class="flex-shrink-0 flex flex-col items-center justify-center flex-1">
                    <span class="text-3xl font-serif font-black text-maroon-900 tracking-wider uppercase">
                        Griya<span class="text-gold-500">Kain.</span>
                    </span>
                    <span
                        class="text-[10px] tracking-[0.3em] text-maroon-700 uppercase font-serif hidden md:block">Batik
                        & Tenun Tulis</span>
                </div>

                <!-- Desktop CTA (Right) -->
                <div class="hidden md:flex flex-1 justify-end items-center gap-6 font-serif text-sm font-bold">
                    <a href="#lokasi" class="text-maroon-900 hover:text-gold-500 transition">Kunjungi Galeri</a>
                    <a href="#"
                        class="bg-maroon-900 text-cream-100 px-6 py-2 border border-gold-500 hover:bg-maroon-800 transition duration-300 shadow-sm flex items-center gap-2">
                        Pesan (WA)
                    </a>
                </div>

                <!-- Empty div for Mobile spacing -->
                <div class="md:hidden flex-1 flex justify-end">
                    <a href="#" class="text-maroon-900"><i class="fa-brands fa-whatsapp text-2xl"></i></a>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div x-cloak x-show="mobileMenu" x-transition
            class="md:hidden bg-cream-50 absolute w-full shadow-xl border-t border-maroon-900/10">
            <div class="px-6 py-8 flex flex-col space-y-6 text-center font-serif">
                <a href="#hero" @click="mobileMenu = false"
                    class="text-maroon-900 font-bold tracking-widest uppercase text-sm hover:text-gold-500">Beranda</a>
                <a href="#koleksi" @click="mobileMenu = false"
                    class="text-maroon-900 font-bold tracking-widest uppercase text-sm hover:text-gold-500">Koleksi
                    Wastra</a>
                <a href="#warisan" @click="mobileMenu = false"
                    class="text-maroon-900 font-bold tracking-widest uppercase text-sm hover:text-gold-500">Warisan
                    Budaya</a>
                <a href="#lokasi" @click="mobileMenu = false"
                    class="text-maroon-900 font-bold tracking-widest uppercase text-sm hover:text-gold-500">Lokasi
                    Galeri</a>
                <a href="#"
                    class="bg-maroon-900 text-cream-100 py-3 font-bold uppercase tracking-widest text-xs mt-4 border border-gold-500">Hubungi
                    Pengrajin</a>
            </div>
        </div>
    </nav>

    <!-- 3. HERO SECTION (CLASSIC ELEGANCE) -->
    <section id="hero"
        class="relative pt-24 lg:pt-32 pb-0 min-h-[90vh] flex items-center bg-maroon-900 overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('images/batik-hero.png') }}" alt="Proses Membatik"
                class="w-full h-full object-cover opacity-30 mix-blend-overlay">
            <div class="absolute inset-0 bg-gradient-to-t from-maroon-900 via-transparent to-maroon-900/80"></div>
        </div>

        <div class="relative z-10 max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center mt-16">
            <p
                class="text-gold-500 font-serif font-bold tracking-[0.3em] text-xs uppercase mb-6 flex items-center justify-center gap-3">
                <span class="w-12 h-px bg-gold-500"></span>
                Autentik & Berbudaya
                <span class="w-12 h-px bg-gold-500"></span>
            </p>

            <h1
                class="text-4xl md:text-6xl lg:text-7xl font-serif font-black text-cream-50 leading-snug mb-8 drop-shadow-lg">
                Mahakarya Tradisi Dalam <span class="text-gold-400 italic font-light">Setiap Helai Kain.</span>
            </h1>

            <p class="text-cream-200 mb-10 font-light leading-relaxed text-lg max-w-2xl mx-auto">
                Melestarikan kekayaan wastra Nusantara. Kami menghadirkan Batik Tulis dan Tenun Ikat yang ditenun dengan
                kesabaran, cinta, dan dedikasi tinggi oleh pengrajin lokal kami.
            </p>

            <div class="flex flex-col sm:flex-row gap-6 justify-center">
                <a href="#koleksi"
                    class="bg-gold-500 text-maroon-900 px-8 py-4 font-serif font-bold uppercase tracking-widest text-sm hover:bg-gold-400 transition duration-300 shadow-lg">
                    Lihat Koleksi
                </a>
                <a href="#warisan"
                    class="bg-transparent border border-cream-200 text-cream-50 px-8 py-4 font-serif font-bold uppercase tracking-widest text-sm hover:bg-cream-50/10 transition duration-300">
                    Kisah Pembuatan
                </a>
            </div>
        </div>

        <!-- Decorative Bottom Element -->
        <div class="absolute bottom-0 left-0 w-full h-16 bg-gradient-to-t from-cream-100 to-transparent z-10"></div>
    </section>

    <!-- 4. NILAI KULTURAL (CULTURAL VALUES) -->
    <section class="py-16 bg-cream-100 border-b border-maroon-900/10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12 text-center px-4">
                <div>

                    <i class="fa-solid fa-hands text-4xl text-maroon-700 mb-4"></i>
                    <h3 class="font-serif text-xl font-bold text-maroon-900 mb-2">100% Buatan Tangan</h3>
                    <p class="text-maroon-800/70 font-light text-sm">Setiap titik malam dan helai benang dikerjakan
                        manual oleh pengrajin ahli, menjadikannya eksklusif.</p>
                </div>
                <div>
                    <i class="fa-solid fa-leaf text-4xl text-maroon-700 mb-4"></i>
                    <h3 class="font-serif text-xl font-bold text-maroon-900 mb-2">Pewarna Alami</h3>
                    <p class="text-maroon-800/70 font-light text-sm">Menggunakan ekstrak akar, daun, dan kayu lokal
                        (Soga, Indigo) yang ramah lingkungan dan warna yang khas.</p>
                </div>
                <div>
                    <i class="fa-solid fa-scroll text-4xl text-maroon-700 mb-4"></i>
                    <h3 class="font-serif text-xl font-bold text-maroon-900 mb-2">Motif Penuh Makna</h3>
                    <p class="text-maroon-800/70 font-light text-sm">Bukan sekadar pola. Setiap motif yang dilukis
                        mengandung doa, filosofi hidup, dan sejarah luhur bangsa.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. KATALOG PRODUK (WASTRA COLLECTION) -->
    <section id="koleksi" class="py-24 bg-cream-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <span class="text-gold-600 font-serif font-bold tracking-widest text-xs uppercase mb-2 block">Katalog
                    Wastra</span>
                <h2 class="text-4xl font-serif text-maroon-900 font-black mb-4">Koleksi Terpilih</h2>
                <div class="ornate-divider w-48 mx-auto">
                    <i class="fa-solid fa-diamond"></i>
                </div>
                <p class="text-maroon-800/80 max-w-2xl mx-auto font-light">Kain batik tulis dan tenun ikat premium yang
                    cocok untuk dijadikan pakaian formal, koleksi pribadi, maupun hantaran eksklusif.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
                <!-- Product 1 -->
                <div class="bg-cream-100 p-4 border border-maroon-900/10 shadow-sm group">
                    <div class="border-double-gold p-2 bg-white relative overflow-hidden mb-4 aspect-[3/4]">
                        <div
                            class="absolute top-4 left-4 bg-maroon-900 text-gold-400 font-serif text-[10px] uppercase tracking-widest px-3 py-1 z-10">
                            Batik Tulis</div>
                        <img src="{{ asset('images/batik1.png') }}" alt="Kain Batik Tulis"
                            class="w-full h-full object-cover img-classic group-hover:scale-105 transition duration-700">
                    </div>
                    <div class="text-center">
                        <h3 class="font-serif font-bold text-maroon-900 text-lg mb-1">Motif Sekar Jagad Klasik</h3>
                        <p class="text-xs text-maroon-800/60 uppercase tracking-widest mb-3">Pewarna Alam (Soga)</p>
                        <p class="font-serif text-maroon-900 font-bold mb-4">Rp 1.250.000</p>
                        <a href="#"
                            class="block w-full border border-maroon-900 text-maroon-900 py-2 font-serif font-bold uppercase text-xs tracking-widest hover:bg-maroon-900 hover:text-cream-50 transition">
                            Tanya Detail (WA)
                        </a>
                    </div>
                </div>

                <!-- Product 2 -->
                <div class="bg-cream-100 p-4 border border-maroon-900/10 shadow-sm group">
                    <div class="border-double-gold p-2 bg-white relative overflow-hidden mb-4 aspect-[3/4]">
                        <div
                            class="absolute top-4 left-4 bg-maroon-900 text-gold-400 font-serif text-[10px] uppercase tracking-widest px-3 py-1 z-10">
                            Tenun Ikat</div>
                        <img src="{{ asset('images/batik2.png') }}" alt="Kain Tenun Sumba"
                            class="w-full h-full object-cover img-classic group-hover:scale-105 transition duration-700">
                    </div>
                    <div class="text-center">
                        <h3 class="font-serif font-bold text-maroon-900 text-lg mb-1">Tenun Sumba Motif Kuda</h3>
                        <p class="text-xs text-maroon-800/60 uppercase tracking-widest mb-3">Benang Katun Premium</p>
                        <p class="font-serif text-maroon-900 font-bold mb-4">Rp 1.800.000</p>
                        <a href="#"
                            class="block w-full border border-maroon-900 text-maroon-900 py-2 font-serif font-bold uppercase text-xs tracking-widest hover:bg-maroon-900 hover:text-cream-50 transition">
                            Tanya Detail (WA)
                        </a>
                    </div>
                </div>

                <!-- Product 3 -->
                <div class="bg-cream-100 p-4 border border-maroon-900/10 shadow-sm group">
                    <div class="border-double-gold p-2 bg-white relative overflow-hidden mb-4 aspect-[3/4]">
                        <div
                            class="absolute top-4 left-4 bg-maroon-900 text-gold-400 font-serif text-[10px] uppercase tracking-widest px-3 py-1 z-10">
                            Ready To Wear</div>
                        <img src="{{ asset('images/batik3.png') }}" alt="Kemeja Batik"
                            class="w-full h-full object-cover img-classic group-hover:scale-105 transition duration-700">
                    </div>
                    <div class="text-center">
                        <h3 class="font-serif font-bold text-maroon-900 text-lg mb-1">Kemeja Pria Parang Barong</h3>
                        <p class="text-xs text-maroon-800/60 uppercase tracking-widest mb-3">Batik Cap Halus Lapis
                            Furing</p>
                        <p class="font-serif text-maroon-900 font-bold mb-4">Rp 450.000</p>
                        <a href="#"
                            class="block w-full border border-maroon-900 text-maroon-900 py-2 font-serif font-bold uppercase text-xs tracking-widest hover:bg-maroon-900 hover:text-cream-50 transition">
                            Tanya Detail (WA)
                        </a>
                    </div>
                </div>
            </div>

            <div class="text-center mt-12">
                <a href="#"
                    class="inline-flex items-center gap-2 text-maroon-900 font-serif font-bold uppercase tracking-widest text-sm border-b-2 border-gold-500 pb-1 hover:text-gold-600 transition">
                    Lihat Koleksi Lengkap di Instagram <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- 6. HERITAGE STORY (WARISAN BUDAYA) -->
    <section id="warisan" class="py-24 bg-maroon-900 text-cream-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row items-center gap-16">
                <!-- Image -->
                <div class="w-full lg:w-1/2 relative">
                    <div class="border-double-gold p-3 bg-maroon-800">
                        <img src="{{ asset('images/pengrajin.png') }}" alt="Pengrajin Batik"
                            class="w-full h-auto object-cover grayscale opacity-80 hover:grayscale-0 hover:opacity-100 transition duration-700">
                    </div>
                    <!-- Caption -->
                    <div
                        class="absolute -bottom-6 -right-6 bg-cream-100 p-6 shadow-xl border border-gold-500 text-maroon-900 max-w-xs hidden md:block">
                        <p class="font-serif italic font-light mb-2">"Membatik adalah meditasi, melatih kesabaran untuk
                            menghasilkan keindahan yang abadi."</p>
                        <p class="text-[10px] font-bold uppercase tracking-widest text-maroon-700">- Ibu Darmi,
                            Pengrajin Senior</p>
                    </div>
                </div>

                <!-- Text Content -->
                <div class="w-full lg:w-1/2">
                    <h2 class="text-gold-500 font-serif font-bold tracking-[0.2em] text-xs uppercase mb-4 block">
                        Perjalanan Kami</h2>
                    <h3 class="text-4xl md:text-5xl font-serif font-black mb-6 leading-tight">Melestarikan
                        Nafas<br>Seni Leluhur.</h3>
                    <div class="w-20 h-1 bg-gold-500 mb-8"></div>

                    <p class="text-cream-200 mb-6 font-light leading-relaxed">
                        Berdiri sejak 1998 di sebuah pendopo kecil di Solo, GriyaKain lahir dari tekad untuk mencegah
                        punahnya tradisi membatik tulis dan menenun secara manual.
                    </p>
                    <p class="text-cream-200 mb-8 font-light leading-relaxed">
                        Kami bekerja sama langsung dengan lebih dari 50 ibu-ibu pengrajin di berbagai pelosok desa.
                        Setiap lembar kain yang Anda beli bukan sekadar produk fashion, melainkan penyambung hidup
                        sebuah tradisi, dan bentuk penghargaan atas mahakarya tangan mereka.
                    </p>

                    <div class="grid grid-cols-2 gap-8 border-t border-maroon-700 pt-8">
                        <div>
                            <p class="text-4xl font-serif font-bold text-gold-400 mb-2">25+</p>
                            <p class="text-xs uppercase tracking-widest text-cream-200 font-bold">Tahun Berdiri</p>
                        </div>
                        <div>
                            <p class="text-4xl font-serif font-bold text-gold-400 mb-2">10K+</p>
                            <p class="text-xs uppercase tracking-widest text-cream-200 font-bold">Helai Kain Terjual
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 7. CUSTOM ORDER / JAHIT -->
    <section class="py-20 bg-cream-100 border-b border-maroon-900/10">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-serif font-black text-maroon-900 mb-4">Layanan Jahit Eksklusif (Bespoke)</h2>
            <div class="ornate-divider w-32 mx-auto">
                <i class="fa-solid fa-scissors"></i>
            </div>
            <p class="text-maroon-800/80 mb-8 font-light leading-relaxed">
                Kami memahami bahwa setiap individu memiliki proporsi tubuh yang unik. Pilih kain favorit Anda, dan
                biarkan penjahit butik kami menyulapnya menjadi kemeja, gaun, atau kebaya impian yang pas sempurna di
                tubuh Anda.
            </p>
            <a href="#"
                class="inline-flex items-center gap-3 bg-maroon-900 text-cream-50 px-8 py-3 font-serif font-bold uppercase tracking-widest text-sm hover:bg-maroon-800 transition shadow-md border border-gold-500">
                Konsultasi Jahit
            </a>
        </div>
    </section>

    <!-- 8. LOKASI / FOOTER INFO -->
    <section id="lokasi" class="bg-maroon-900 text-cream-100 pt-20 pb-10 border-t-8 border-gold-500">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12 mb-16">

                <!-- Brand & Philosophy -->
                <div class="md:col-span-1">
                    <span class="text-3xl font-serif font-black text-cream-50 tracking-wider uppercase block mb-4">
                        Griya<span class="text-gold-500">Kain.</span>
                    </span>
                    <p class="text-cream-200/80 font-light text-sm leading-relaxed mb-6">
                        Menjaga asa, merawat budaya. Hadir untuk menjadi jembatan antara keindahan tradisi Nusantara
                        dengan gaya hidup masa kini.
                    </p>
                    <div class="flex gap-4">
                        <a href="#"
                            class="w-10 h-10 border border-gold-500/50 rounded flex items-center justify-center hover:bg-gold-500 hover:text-maroon-900 transition"><i
                                class="fa-brands fa-instagram"></i></a>
                        <a href="#"
                            class="w-10 h-10 border border-gold-500/50 rounded flex items-center justify-center hover:bg-gold-500 hover:text-maroon-900 transition"><i
                                class="fa-brands fa-facebook-f"></i></a>
                    </div>
                </div>

                <!-- Bantuan -->
                <div>
                    <h4 class="font-serif font-bold text-gold-400 uppercase tracking-widest text-sm mb-6">Layanan Kami
                    </h4>
                    <ul class="space-y-3 text-sm font-light text-cream-200/80">
                        <li><a href="#" class="hover:text-gold-400 transition">Cara Pembelian</a></li>
                        <li><a href="#" class="hover:text-gold-400 transition">Panduan Perawatan Kain</a></li>
                        <li><a href="#" class="hover:text-gold-400 transition">Pesanan Seragam Instansi</a></li>
                        <li><a href="#" class="hover:text-gold-400 transition">Pengiriman Internasional</a></li>
                    </ul>
                </div>

                <!-- Kunjungan -->
                <div>
                    <h4 class="font-serif font-bold text-gold-400 uppercase tracking-widest text-sm mb-6">Kunjungi
                        Galeri Kami</h4>
                    <ul class="space-y-4 text-sm font-light text-cream-200/80 mb-6">
                        <li class="flex items-start gap-3">
                            <i class="fa-solid fa-location-dot mt-1 text-gold-500"></i>
                            Jl. Kebudayaan No. 88, Kauman, Surakarta (Solo), Jawa Tengah.
                        </li>
                        <li class="flex items-center gap-3">
                            <i class="fa-solid fa-clock text-gold-500"></i>
                            Buka Tiap Hari: 09.00 - 17.00 WIB
                        </li>
                        <li class="flex items-center gap-3">
                            <i class="fa-solid fa-phone text-gold-500"></i>
                            0812-3456-7890 (WA)
                        </li>
                    </ul>
                    <a href="#"
                        class="inline-block border border-gold-500 px-4 py-2 text-xs font-serif uppercase tracking-widest hover:bg-gold-500 hover:text-maroon-900 transition">
                        Buka di Google Maps
                    </a>
                </div>
            </div>

            <!-- Copyright -->
            <div
                class="border-t border-maroon-700 pt-8 flex flex-col md:flex-row justify-between items-center gap-4 text-xs font-light text-cream-200/60 tracking-widest uppercase font-serif">
                <p>&copy; 2026 GriyaKain Nusantara. Dilindungi Hak Cipta.</p>
                <div class="flex gap-4">
                    <img src="{{ asset('images/logo-bca.png') }}" alt="BCA" class="h-6 opacity-50 grayscale"
                        onerror="this.style.display='none'">
                    <img src="{{ asset('images/logo-mandiri.png') }}" alt="Mandiri" class="h-6 opacity-50 grayscale"
                        onerror="this.style.display='none'">
                </div>
            </div>
        </div>
        </footer>

</body>

</html>
