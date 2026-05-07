<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UMKM pakaian - Minimalist & Chic Theme</title>

    <!-- Tailwind CSS & Alpine JS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Fonts: Playfair Display (Serif) & Montserrat (Sans) -->
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        blush: {
                            50: '#fdf2f8',
                            100: '#fce7f3',
                            200: '#fbcfe8',
                            300: '#f9a8d4',
                            400: '#f472b6',
                            500: '#ec4899',
                            600: '#db2777', // Main Brand Color
                            700: '#be185d',
                            800: '#9d174d',
                            900: '#831843',
                        },
                        sand: {
                            50: '#fafaf9',
                            100: '#f5f5f4',
                            200: '#e7e5e4',
                            800: '#292524',
                            900: '#1c1917',
                        }
                    },
                    fontFamily: {
                        sans: ['Montserrat', 'sans-serif'],
                        serif: ['Playfair Display', 'serif'],
                    }
                }
            }
        }
    </script>

    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            background-color: #fafaf9;
            color: #292524;
        }

        [x-cloak] {
            display: none !important;
        }

        /* Subtle image zoom on hover */
        .img-zoom-container {
            overflow: hidden;
        }

        .img-zoom {
            transition: transform 0.7s ease;
        }

        .img-zoom-container:hover .img-zoom {
            transform: scale(1.05);
        }

        /* Elegant underline effect for links */
        .link-underline {
            position: relative;
        }

        .link-underline::after {
            content: '';
            position: absolute;
            width: 0;
            height: 1px;
            bottom: -2px;
            left: 0;
            background-color: #db2777;
            /* Blush 600 */
            transition: width 0.3s ease;
        }

        .link-underline:hover::after {
            width: 100%;
        }
    </style>
</head>

<body class="antialiased selection:bg-blush-200 selection:text-blush-900">

    <!-- 1. MINIMALIST NAVBAR -->
    <nav x-data="{ mobileMenu: false, scrolled: false }" @scroll.window="scrolled = (window.pageYOffset > 20)"
        class="fixed w-full z-50 transition-all duration-300"
        :class="scrolled ? 'bg-white/95 backdrop-blur-md shadow-sm border-b border-sand-200 py-4' : 'bg-transparent py-6'">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center">
                <!-- Mobile Menu Button (Left) -->
                <div class="md:hidden flex-1 flex items-center">
                    <button @click="mobileMenu = !mobileMenu" class="text-sand-900 focus:outline-none text-2xl">
                        <i class="fa-solid" :class="mobileMenu ? 'fa-xmark' : 'fa-bars'"></i>
                    </button>
                </div>

                <!-- Desktop Menu (Left) -->
                <div
                    class="hidden md:flex flex-1 space-x-8 items-center text-xs font-semibold uppercase tracking-widest text-sand-500">
                    <a href="#koleksi" class="hover:text-blush-600 transition link-underline pb-1">Koleksi</a>
                    <a href="#keunggulan" class="hover:text-blush-600 transition link-underline pb-1">Kualitas</a>
                </div>

                <!-- Logo (Center) -->
                <div class="flex-shrink-0 flex items-center justify-center flex-1">
                    <span class="text-2xl md:text-3xl font-serif font-bold text-sand-900 tracking-wider">
                        AURELIA<span class="text-blush-600">.</span>
                    </span>
                </div>

                <!-- Desktop CTA (Right) -->
                <div
                    class="hidden md:flex flex-1 justify-end space-x-6 items-center text-xs font-semibold uppercase tracking-widest">
                    <a href="#tentang" class="text-sand-500 hover:text-blush-600 transition link-underline pb-1">Cerita
                        Kami</a>
                    <a href="#"
                        class="bg-sand-900 text-white px-6 py-3 hover:bg-blush-600 transition duration-300 flex items-center gap-2">
                        WhatsApp
                    </a>
                </div>

                <!-- Empty div for Mobile spacing to keep logo centered -->
                <div class="md:hidden flex-1 flex justify-end">
                    <a href="#" class="text-sand-900"><i class="fa-brands fa-whatsapp text-2xl"></i></a>
                </div>
            </div>
        </div>

        <!-- Mobile Menu Dropdown -->
        <div x-cloak x-show="mobileMenu" x-transition
            class="md:hidden bg-white absolute w-full shadow-lg border-t border-sand-100">
            <div class="px-6 py-8 flex flex-col space-y-6 text-center">
                <a href="#hero" @click="mobileMenu = false"
                    class="text-sand-800 font-medium tracking-widest uppercase text-sm hover:text-blush-600">Beranda</a>
                <a href="#koleksi" @click="mobileMenu = false"
                    class="text-sand-800 font-medium tracking-widest uppercase text-sm hover:text-blush-600">Koleksi
                    Terbaru</a>
                <a href="#keunggulan" @click="mobileMenu = false"
                    class="text-sand-800 font-medium tracking-widest uppercase text-sm hover:text-blush-600">Keunggulan
                    Kami</a>
                <a href="#tentang" @click="mobileMenu = false"
                    class="text-sand-800 font-medium tracking-widest uppercase text-sm hover:text-blush-600">Cerita
                    Brand</a>
                <a href="#"
                    class="bg-blush-600 text-white py-3 font-bold uppercase tracking-widest text-xs mt-4">Order via
                    WhatsApp</a>
            </div>
        </div>
    </nav>

    <!-- 2. HERO SECTION -->
    <section id="hero" class="relative pt-32 pb-20 lg:pt-0 lg:pb-0 min-h-screen flex items-center bg-blush-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full mt-10 lg:mt-20">
            <div class="flex flex-col-reverse lg:flex-row items-center gap-12 lg:gap-8">

                <!-- Text Content -->
                <div class="w-full lg:w-1/2 text-center lg:text-left z-10">
                    <p class="text-blush-600 font-semibold tracking-[0.2em] text-xs uppercase mb-4 block">Koleksi Musim
                        Panas 2026</p>
                    <h1 class="text-5xl md:text-6xl lg:text-7xl font-serif text-sand-900 leading-[1.1] mb-6">
                        Elegansi Dalam <br>
                        <span class="italic text-blush-600 font-light">Kesederhanaan.</span>
                    </h1>
                    <p class="text-sand-500 mb-10 max-w-md mx-auto lg:mx-0 font-light leading-relaxed text-lg">
                        Tingkatkan rasa percaya diri Anda dengan balutan busana lokal berkualitas premium. Didesain
                        secara eksklusif untuk menemani setiap momen berharga Anda.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                        <a href="#koleksi"
                            class="bg-sand-900 text-white px-10 py-4 text-xs font-bold uppercase tracking-widest hover:bg-blush-600 transition duration-300 text-center">
                            Lihat Koleksi
                        </a>
                        <a href="#tentang"
                            class="bg-transparent border border-sand-300 text-sand-800 px-10 py-4 text-xs font-bold uppercase tracking-widest hover:border-sand-900 transition duration-300 text-center">
                            Cerita Kami
                        </a>
                    </div>
                </div>

                <!-- Image Content (Editorial Style) -->
                <div class="w-full lg:w-1/2 relative flex justify-center lg:justify-end">
                    <!-- Background Aesthetic Box -->
                    <div class="absolute top-10 -right-4 md:right-10 w-64 md:w-80 h-full bg-blush-100/50 -z-10"></div>

                    <div class="relative w-full max-w-sm md:max-w-md">
                        <img src="{{ asset('images/pakaian2.png') }}" alt="Model Pakaian"
                            class="w-full h-auto object-cover shadow-2xl relative z-10">

                        <!-- Floating Minimalist Tag -->
                        <div
                            class="absolute top-10 -left-6 md:-left-12 bg-white/90 backdrop-blur px-6 py-4 shadow-lg border border-sand-100 z-20">
                            <p class="text-[10px] text-sand-400 uppercase tracking-widest mb-1">Local Pride</p>
                            <p class="font-serif font-bold text-sand-900 text-lg">100% Original</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 3. BRAND VALUES -->
    <section id="keunggulan" class="py-16 bg-white border-b border-sand-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10 text-center">
                <div class="p-4">
                    <i class="fa-solid fa-scissors text-3xl text-blush-600 mb-4"></i>
                    <h3 class="font-serif text-xl font-bold text-sand-900 mb-2">Jahitan Butik</h3>
                    <p class="text-sand-500 font-light text-sm">Dikerjakan oleh penjahit lokal berpengalaman dengan
                        standar kualitas butik premium.</p>
                </div>
                <div class="p-4 border-y md:border-y-0 md:border-x border-sand-100">
                    <i class="fa-solid fa-leaf text-3xl text-blush-600 mb-4"></i>
                    <h3 class="font-serif text-xl font-bold text-sand-900 mb-2">Bahan Nyaman</h3>
                    <p class="text-sand-500 font-light text-sm">Pemilihan material kain (fabric) yang sejuk, menyerap
                        keringat, dan tidak menerawang.</p>
                </div>
                <div class="p-4">
                    <i class="fa-solid fa-box-heart text-3xl text-blush-600 mb-4"></i>
                    <h3 class="font-serif text-xl font-bold text-sand-900 mb-2">Packaging Cantik</h3>
                    <p class="text-sand-500 font-light text-sm">Dikemas menggunakan box eksklusif dan *thank you card*,
                        sangat cocok untuk kado.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. CATALOG (KOLEKSI TERBARU) -->
    <section id="koleksi" class="py-24 bg-sand-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-end mb-16 gap-6">
                <div>
                    <span class="text-blush-600 font-semibold uppercase tracking-widest text-xs mb-3 block">New
                        Arrivals</span>
                    <h2 class="text-4xl font-serif text-sand-900 font-bold">Koleksi Terkini</h2>
                </div>
                <a href="https://wa.me/c/62812345678" target="_blank"
                    class="text-xs font-bold uppercase tracking-widest text-sand-500 hover:text-blush-600 transition link-underline pb-1">
                    Lihat Katalog Lengkap &rarr;
                </a>
            </div>

            <!-- Product Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Product 1 -->
                <div class="group">
                    <div class="img-zoom-container mb-4 relative aspect-[3/4] bg-white">
                        <div
                            class="absolute top-4 left-4 bg-blush-600 text-white text-[10px] font-bold uppercase tracking-widest px-3 py-1 z-10">
                            Baru</div>
                        <img src="{{ asset('images/pakaian1.png') }}" alt="Produk 1"
                            class="w-full h-full object-cover img-zoom">

                        <!-- Hover Overlay (Order Button) -->
                        <div
                            class="absolute inset-0 bg-sand-900/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center backdrop-blur-sm">
                            <a href="#?text=Halo%20Aurelia,%20saya%20mau%20order%20Midi%20Dress%20Seri%20Nara"
                                target="_blank"
                                class="bg-white text-sand-900 px-6 py-3 text-xs font-bold uppercase tracking-widest hover:bg-blush-600 hover:text-white transition duration-300 transform translate-y-4 group-hover:translate-y-0 shadow-lg">
                                Beli via WA
                            </a>
                        </div>
                    </div>
                    <div>
                        <p class="text-[10px] text-sand-400 uppercase tracking-widest mb-1">Kategori Dress</p>
                        <h3
                            class="font-serif font-bold text-sand-900 text-lg mb-1 group-hover:text-blush-600 transition">
                            Midi Dress Seri Nara</h3>
                        <p class="font-semibold text-sand-600">Rp 249.000</p>
                    </div>
                </div>

                <!-- Product 2 -->
                <div class="group">
                    <div class="img-zoom-container mb-4 relative aspect-[3/4] bg-white">
                        <div
                            class="absolute top-4 left-4 bg-sand-900 text-white text-[10px] font-bold uppercase tracking-widest px-3 py-1 z-10">
                            Best Seller</div>
                        <img src="{{ asset('images/pakaian2.png') }}" alt="Produk 2"
                            class="w-full h-full object-cover img-zoom">

                        <div
                            class="absolute inset-0 bg-sand-900/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center backdrop-blur-sm">
                            <a href="#?text=Halo%20Aurelia,%20saya%20mau%20order%20Blouse%20Knit%20Premium"
                                target="_blank"
                                class="bg-white text-sand-900 px-6 py-3 text-xs font-bold uppercase tracking-widest hover:bg-blush-600 hover:text-white transition duration-300 transform translate-y-4 group-hover:translate-y-0 shadow-lg">
                                Beli via WA
                            </a>
                        </div>
                    </div>
                    <div>
                        <p class="text-[10px] text-sand-400 uppercase tracking-widest mb-1">Kategori Atasan</p>
                        <h3
                            class="font-serif font-bold text-sand-900 text-lg mb-1 group-hover:text-blush-600 transition">
                            Blouse Knit Premium</h3>
                        <p class="font-semibold text-sand-600">Rp 175.000</p>
                    </div>
                </div>

                <!-- Product 3 -->
                <div class="group">
                    <div class="img-zoom-container mb-4 relative aspect-[3/4] bg-white">
                        <img src="{{ asset('images/pakaian3.png') }}" alt="Produk 3"
                            class="w-full h-full object-cover img-zoom">

                        <div
                            class="absolute inset-0 bg-sand-900/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center backdrop-blur-sm">
                            <a href="#?text=Halo%20Aurelia,%20saya%20mau%20order%20Rok%20Plisket%20Mocha"
                                target="_blank"
                                class="bg-white text-sand-900 px-6 py-3 text-xs font-bold uppercase tracking-widest hover:bg-blush-600 hover:text-white transition duration-300 transform translate-y-4 group-hover:translate-y-0 shadow-lg">
                                Beli via WA
                            </a>
                        </div>
                    </div>
                    <div>
                        <p class="text-[10px] text-sand-400 uppercase tracking-widest mb-1">Kategori Bawahan</p>
                        <h3
                            class="font-serif font-bold text-sand-900 text-lg mb-1 group-hover:text-blush-600 transition">
                            Rok Plisket Mocha</h3>
                        <p class="font-semibold text-sand-600">Rp 150.000</p>
                    </div>
                </div>

                <!-- Product 4 -->
                <div class="group">
                    <div class="img-zoom-container mb-4 relative aspect-[3/4] bg-white">
                        <img src="{{ asset('images/pakaian4.png') }}" alt="Produk 4"
                            class="w-full h-full object-cover img-zoom">

                        <div
                            class="absolute inset-0 bg-sand-900/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center backdrop-blur-sm">
                            <a href="#?text=Halo%20Aurelia,%20saya%20mau%20order%20Pashmina%20Silk" target="_blank"
                                class="bg-white text-sand-900 px-6 py-3 text-xs font-bold uppercase tracking-widest hover:bg-blush-600 hover:text-white transition duration-300 transform translate-y-4 group-hover:translate-y-0 shadow-lg">
                                Beli via WA
                            </a>
                        </div>
                    </div>
                    <div>
                        <p class="text-[10px] text-sand-400 uppercase tracking-widest mb-1">Kategori Hijab</p>
                        <h3
                            class="font-serif font-bold text-sand-900 text-lg mb-1 group-hover:text-blush-600 transition">
                            Pashmina Silk Exclusive</h3>
                        <p class="font-semibold text-sand-600">Rp 89.000</p>
                    </div>
                </div>
            </div>

            <!-- Marketplace Links -->
            <div class="mt-16 flex flex-col items-center border-t border-sand-200 pt-10">
                <p class="text-xs text-sand-500 uppercase tracking-widest mb-6">Tersedia Juga Di</p>
                <div class="flex items-center gap-6 opacity-60 hover:opacity-100 transition duration-300">
                    <a href="#"
                        class="font-bold text-sand-900 border border-sand-300 px-4 py-2 hover:border-sand-900 transition text-sm"><i
                            class="fa-solid fa-bag-shopping"></i> Shopee</a>
                    <a href="#"
                        class="font-bold text-sand-900 border border-sand-300 px-4 py-2 hover:border-sand-900 transition text-sm"><i
                            class="fa-brands fa-tiktok"></i> TikTok Shop</a>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. TENTANG BRAND (STORY) -->
    <section id="tentang" class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row items-center gap-16">
                <!-- Image -->
                <div class="w-full lg:w-1/2 relative">
                    <img src="{{ asset('images/pakaian-about.png') }}" alt="Tentang Aurelia"
                        class="w-full h-auto object-cover relative z-10 rounded-tl-[4rem] rounded-br-[4rem]">
                    <div
                        class="absolute -top-6 -left-6 w-full h-full border border-blush-300 rounded-tl-[4rem] rounded-br-[4rem] z-0">
                    </div>
                </div>

                <!-- Text Content -->
                <div class="w-full lg:w-1/2">
                    <h2 class="text-blush-600 font-semibold tracking-widest text-xs uppercase mb-4">Kisah Kami</h2>
                    <h3 class="text-4xl font-serif font-bold text-sand-900 mb-6 leading-tight">Dibuat Dengan Cinta,
                        Dipakai Dengan Bangga.</h3>
                    <p class="text-sand-600 mb-6 font-light leading-relaxed">
                        Aurelia berawal dari sebuah industri rumahan kecil di Bandung pada tahun 2021. Berangkat dari
                        kecintaan sang pendiri pada pakaian (*modest wear*) yang cantik namun tidak berlebihan, kami
                        mulai merancang pola baju kami sendiri.
                    </p>
                    <p class="text-sand-600 mb-8 font-light leading-relaxed">
                        Kami sangat menghargai proses kreatif dan pemberdayaan perempuan. Penjahit kami 100% adalah
                        wanita lokal yang penuh dedikasi. Dengan membeli produk Aurelia, Anda tidak hanya tampil elegan,
                        tetapi juga mendukung keberlangsungan UMKM lokal di Indonesia.
                    </p>

                    <div class="bg-blush-50 p-6 flex items-center gap-4">
                        <img src="{{ asset('images/pakaian-owner.png') }}" alt="Founder"
                            class="w-14 h-14 rounded-full object-cover">
                        <div>
                            <p class="text-sand-900 font-serif font-bold text-lg">Aurelia Putri</p>
                            <p class="text-blush-600 text-xs uppercase tracking-widest font-semibold mt-1">Creative
                                Director & Founder</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 6. TESTIMONI (REVIEWS) -->
    <section class="py-24 bg-sand-100/50 border-t border-sand-200">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <span class="text-sand-400 font-semibold uppercase tracking-widest text-xs mb-4 block">Testimoni
                Sister</span>
            <h2 class="text-3xl md:text-4xl font-serif font-bold text-sand-900 mb-16">Apa Kata Pelanggan?</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 text-left">
                <!-- Testi 1 -->
                <div class="bg-white p-8 border border-sand-100 shadow-sm relative">
                    <i class="fa-solid fa-quote-left absolute top-8 left-8 text-4xl text-blush-100"></i>
                    <div class="relative z-10 pl-10">
                        <div class="flex text-yellow-400 text-xs mb-4"><i class="fa-solid fa-star"></i><i
                                class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
                        <p class="text-sand-600 font-light italic mb-6">"Bahannya bener-bener jatuh dan adem banget
                            dipakai seharian kerja. Jahitannya juga rapi setara butik mall. Admin WA-nya super ramah &
                            fast respon!"</p>
                        <div>
                            <p class="font-serif font-bold text-sand-900">Dinda K.</p>
                            <p class="text-[10px] text-sand-400 uppercase tracking-widest">Jakarta Selatan</p>
                        </div>
                    </div>
                </div>
                <!-- Testi 2 -->
                <div class="bg-white p-8 border border-sand-100 shadow-sm relative">
                    <i class="fa-solid fa-quote-left absolute top-8 left-8 text-4xl text-blush-100"></i>
                    <div class="relative z-10 pl-10">
                        <div class="flex text-yellow-400 text-xs mb-4"><i class="fa-solid fa-star"></i><i
                                class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
                        <p class="text-sand-600 font-light italic mb-6">"Pertama kali beli rok plisketnya langsung
                            jatuh cinta. Pinggangnya gak bikin gatal dan warnanya pastel sesuai banget sama di foto.
                            Bakal langganan terus."</p>
                        <div>
                            <p class="font-serif font-bold text-sand-900">Maudy A.</p>
                            <p class="text-[10px] text-sand-400 uppercase tracking-widest">Surabaya</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 7. INSTAGRAM & FOOTER -->
    <footer class="bg-sand-900 pt-20 pb-10 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Instagram Section inside Footer -->
            <div class="text-center mb-20 border-b border-sand-800 pb-16">
                <h3 class="text-2xl font-serif mb-3">Join The Sisterhood</h3>
                <p class="text-sand-400 font-light text-sm mb-6">Tag us on Instagram @aurelia.id to be featured.</p>
                <a href="#"
                    class="inline-flex items-center gap-2 border border-sand-600 px-6 py-3 text-xs uppercase tracking-widest hover:bg-white hover:text-sand-900 transition duration-300">
                    <i class="fa-brands fa-instagram text-lg"></i> Follow Us
                </a>
            </div>

            <!-- Footer Links -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-16">
                <!-- Brand -->
                <div class="md:col-span-1">
                    <span class="text-3xl font-serif font-bold text-white tracking-wider block mb-6">AURELIA<span
                            class="text-blush-500">.</span></span>
                    <p class="text-sand-400 font-light text-sm leading-relaxed mb-6">Pakaian wanita yang didesain untuk
                        merayakan kecantikan dan kenyamanan dalam keseharian Anda.</p>
                </div>

                <!-- Shop -->
                <div>
                    <h4 class="font-bold uppercase tracking-widest text-xs mb-6 text-sand-300">Belanja</h4>
                    <ul class="space-y-4 text-sm font-light text-sand-500">
                        <li><a href="#koleksi" class="hover:text-blush-400 transition">Semua Produk</a></li>
                        <li><a href="#koleksi" class="hover:text-blush-400 transition">Koleksi Terkini</a></li>
                        <li><a href="#" class="hover:text-blush-400 transition">Panduan Ukuran (Size Guide)</a>
                        </li>
                        <li><a href="#" class="hover:text-blush-400 transition">Cara Pemesanan</a></li>
                    </ul>
                </div>

                <!-- Customer Care -->
                <div>
                    <h4 class="font-bold uppercase tracking-widest text-xs mb-6 text-sand-300">Bantuan</h4>
                    <ul class="space-y-4 text-sm font-light text-sand-500">
                        <li><a href="#" class="hover:text-blush-400 transition">Tanya Jawab (FAQ)</a></li>
                        <li><a href="#" class="hover:text-blush-400 transition">Konfirmasi Pembayaran</a></li>
                        <li><a href="#" class="hover:text-blush-400 transition">Kebijakan Pengembalian
                                (Return)</a></li>
                        <li><a href="#" class="hover:text-blush-400 transition">Lacak Paket</a></li>
                    </ul>
                </div>

                <!-- Contact -->
                <div>
                    <h4 class="font-bold uppercase tracking-widest text-xs mb-6 text-sand-300">Hubungi Kami</h4>
                    <ul class="space-y-4 text-sm font-light text-sand-500 mb-6">
                        <li class="flex items-center gap-3"><i
                                class="fa-brands fa-whatsapp text-blush-500 text-lg"></i> 0812-3456-7890</li>
                        <li class="flex items-center gap-3"><i
                                class="fa-regular fa-envelope text-blush-500 text-lg"></i> hello@aurelia.id</li>
                        <li class="flex items-start gap-3"><i
                                class="fa-solid fa-location-dot mt-1 text-blush-500 text-lg"></i> Studio Aurelia, Jl.
                            Braga, Bandung. (Khusus Pengiriman)</li>
                    </ul>
                </div>
            </div>

            <!-- Copyright -->
            <div
                class="border-t border-sand-800 pt-8 flex flex-col md:flex-row justify-between items-center gap-4 text-xs font-light text-sand-500 tracking-widest uppercase">
                <p>&copy; 2026 Aurelia Local Brand. All Rights Reserved.</p>
                <div class="flex gap-4 text-lg">
                    <a href="#" class="hover:text-white transition"><i class="fa-brands fa-tiktok"></i></a>
                    <a href="#" class="hover:text-white transition"><i class="fa-brands fa-shopee"></i></a>
                    <!-- Gunakan icon keranjang jika fa-shopee tidak ada -->
                </div>
            </div>
        </div>
    </footer>

</body>

</html>
