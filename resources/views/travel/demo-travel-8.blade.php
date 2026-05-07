<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mabrur Travel - Royal Majesty Theme</title>

    <!-- Tailwind CSS & Alpine JS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Fonts: Lora (Regal Serif) & Nunito (Warm Rounded Sans) -->
    <link
        href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,400&family=Nunito:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        royal: {
                            50: '#f5f3ff',
                            100: '#ede9fe',
                            500: '#8b5cf6',
                            700: '#6d28d9',
                            800: '#5b21b6',
                            900: '#4c1d95', // Deep Royal Purple
                            950: '#2e1065',
                        },
                        champagne: {
                            300: '#fde047',
                            400: '#facc15',
                            500: '#eab308', // Warm Gold
                            600: '#ca8a04',
                        }
                    },
                    fontFamily: {
                        sans: ['Nunito', 'sans-serif'],
                        serif: ['Lora', 'serif'],
                    }
                }
            }
        }
    </script>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background-color: #fafaf9;
        }

        [x-cloak] {
            display: none !important;
        }

        .hero-overlay {
            background: linear-gradient(135deg, rgba(46, 16, 101, 0.95) 0%, rgba(76, 29, 149, 0.8) 100%);
        }

        /* Subtle glowing text for gold accents */
        .text-glow {
            text-shadow: 0 0 15px rgba(234, 179, 8, 0.4);
        }
    </style>
</head>

<body class="text-slate-800 antialiased selection:bg-champagne-500 selection:text-royal-950">

    <!-- 1. REGAL NAVBAR -->
    <nav x-data="{ mobileMenu: false, scrolled: false }" @scroll.window="scrolled = (window.pageYOffset > 20)"
        class="fixed w-full z-50 transition-all duration-300"
        :class="scrolled ? 'bg-white/95 backdrop-blur-md shadow-lg border-b border-royal-100 py-3' : 'bg-transparent py-6'">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center gap-3">
                    <div class="w-10 h-10 rounded-full border-2 flex items-center justify-center transition-colors duration-300"
                        :class="scrolled ? 'border-royal-900 text-royal-900' : 'border-champagne-500 text-champagne-500'">
                        <i class="fa-solid fa-moon text-lg"></i>
                    </div>
                    <span class="text-2xl font-serif font-bold tracking-wide transition-colors duration-300"
                        :class="scrolled ? 'text-royal-950' : 'text-white'">
                        Mabrur<span :class="scrolled ? 'text-champagne-600' : 'text-champagne-400'">.</span>
                    </span>
                </div>

                <!-- Desktop Menu -->
                <div class="hidden lg:flex space-x-8 items-center text-base font-bold transition-colors duration-300"
                    :class="scrolled ? 'text-slate-600' : 'text-slate-200'">
                    <a href="#profil" class="hover:text-champagne-500 transition">Profil</a>
                    <a href="#whyus" class="hover:text-champagne-500 transition">Layanan</a>
                    <a href="#paket" class="hover:text-champagne-500 transition">Paket Khusus</a>
                    <a href="#galeri" class="hover:text-champagne-500 transition">Galeri</a>
                    <a href="#testimoni" class="hover:text-champagne-500 transition">Ulasan</a>
                    <a href="#blog" class="hover:text-champagne-500 transition">Jurnal</a>
                </div>

                <!-- Desktop CTA -->
                <div class="hidden lg:block">
                    <a href="https://wa.me/62812345678"
                        class="px-7 py-2.5 rounded-full font-bold transition-all duration-300 shadow-lg flex items-center gap-2"
                        :class="scrolled ? 'bg-royal-900 text-white hover:bg-royal-800' :
                            'bg-champagne-500 text-royal-950 hover:bg-champagne-400'">
                        Tanya Promo
                    </a>
                </div>

                <!-- Mobile Button -->
                <div class="lg:hidden">
                    <button @click="mobileMenu = !mobileMenu" class="focus:outline-none transition-colors duration-300"
                        :class="scrolled ? 'text-royal-900' : 'text-white'">
                        <i class="fa-solid text-2xl" :class="mobileMenu ? 'fa-xmark' : 'fa-bars-staggered'"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div x-cloak x-show="mobileMenu" x-transition
            class="lg:hidden bg-white absolute w-full top-full left-0 shadow-2xl border-t border-royal-100 rounded-b-3xl">
            <div class="px-6 py-6 flex flex-col space-y-4 text-center">
                <a href="#profil" @click="mobileMenu = false"
                    class="text-slate-700 font-bold hover:text-royal-700 text-lg">Profil</a>
                <a href="#whyus" @click="mobileMenu = false"
                    class="text-slate-700 font-bold hover:text-royal-700 text-lg">Layanan</a>
                <a href="#paket" @click="mobileMenu = false"
                    class="text-slate-700 font-bold hover:text-royal-700 text-lg">Paket Khusus</a>
                <a href="#galeri" @click="mobileMenu = false"
                    class="text-slate-700 font-bold hover:text-royal-700 text-lg">Galeri</a>
                <a href="#testimoni" @click="mobileMenu = false"
                    class="text-slate-700 font-bold hover:text-royal-700 text-lg">Ulasan Jemaah</a>
                <a href="#faq" @click="mobileMenu = false"
                    class="text-slate-700 font-bold hover:text-royal-700 text-lg">FAQ</a>
                <a href="#blog" @click="mobileMenu = false"
                    class="text-slate-700 font-bold hover:text-royal-700 text-lg">Jurnal Islami</a>
                <a href="https://wa.me/62812345678"
                    class="bg-royal-900 text-white py-3 rounded-xl font-bold text-lg mt-4 shadow-lg">Chat WhatsApp
                    Admin</a>
            </div>
        </div>
    </nav>

    <!-- 2. MAJESTIC HERO SECTION -->
    <section class="relative min-h-[90vh] flex items-center justify-center overflow-hidden pt-20">
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('images/mekkah.png') }}" class="w-full h-full object-cover scale-105"
                alt="Mekkah Background">
            <div class="absolute inset-0 hero-overlay"></div>
        </div>

        <div class="relative z-10 max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div
                class="inline-flex items-center gap-2 px-5 py-2 rounded-full border border-champagne-500/50 bg-royal-950/50 backdrop-blur-md text-champagne-400 font-bold text-sm mb-8">
                <i class="fa-solid fa-crown"></i> Layanan Umroh VIP & Reguler
            </div>

            <h1 class="text-4xl md:text-6xl lg:text-7xl font-serif font-bold text-white leading-tight mb-6">
                Menyempurnakan Niat, <br>
                <span class="text-champagne-500 text-glow italic font-light">Meraih Mabrur.</span>
            </h1>

            <p class="text-lg md:text-xl text-royal-100 mb-10 max-w-2xl mx-auto font-medium leading-relaxed">
                Kami mendampingi setiap tahapan ibadah Anda dengan penuh dedikasi, fasilitas berkelas, dan asatidz
                berpengalaman untuk pengalaman spiritual yang tak terlupakan.
            </p>

            <div class="flex flex-col sm:flex-row gap-5 justify-center">
                <a href="#paket"
                    class="bg-champagne-500 text-royal-950 px-10 py-4 rounded-full font-bold text-lg hover:bg-champagne-400 transition duration-300 shadow-[0_0_20px_rgba(234,179,8,0.3)]">
                    Lihat Program 2026
                </a>
                <a href="#profil"
                    class="bg-transparent border-2 border-royal-100 text-white px-10 py-4 rounded-full font-bold text-lg hover:bg-white/10 transition duration-300">
                    Kenali Kami
                </a>
            </div>
        </div>

        <!-- Decorative Bottom Curve -->
        <div class="absolute bottom-0 w-full leading-none z-10">
            <svg class="w-full h-12 md:h-24 block" viewBox="0 0 1200 120" preserveAspectRatio="none"
                xmlns="http://www.w3.org/2000/svg">
                <path d="M0,0 C300,120 900,120 1200,0 L1200,120 L0,120 Z" fill="#fafaf9"></path>
            </svg>
        </div>
    </section>

    <!-- 3. PROFIL & FOUNDER -->
    <section id="profil" class="py-20 lg:py-28 bg-[#fafaf9]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <!-- Image Composition -->
                <div class="relative">
                    <div class="absolute inset-0 bg-royal-900 rounded-[3rem] transform rotate-3 scale-105 opacity-10">
                    </div>
                    <img src="{{ asset('images/tawaf.png') }}" alt="Tawaf"
                        class="relative z-10 rounded-[3rem] shadow-2xl w-full h-[500px] object-cover">

                    <!-- Floating Stats Card -->
                    <div
                        class="absolute bottom-10 -right-4 md:-right-8 bg-white p-6 rounded-3xl shadow-xl border border-royal-50 z-20 w-64">
                        <div class="flex items-center gap-4 mb-4">
                            <div
                                class="w-12 h-12 rounded-full bg-champagne-100 flex items-center justify-center text-champagne-600 text-xl">
                                <i class="fa-solid fa-check-double"></i>
                            </div>
                            <div>
                                <p class="text-3xl font-black text-royal-950">15+</p>
                                <p class="text-xs font-bold text-slate-500 uppercase tracking-widest">Tahun Melayani
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Text Content -->
                <div>
                    <div class="flex items-center gap-3 mb-4">
                        <div class="h-0.5 w-8 bg-champagne-500"></div>
                        <span class="text-royal-700 font-bold uppercase tracking-widest text-sm">Profil Kami</span>
                    </div>
                    <h2 class="text-4xl lg:text-5xl font-serif font-bold text-royal-950 mb-6 leading-tight">
                        Sahabat Terbaik <br>
                        Perjalanan Suci Anda.
                    </h2>
                    <p class="text-slate-600 text-lg mb-6 leading-relaxed">
                        Mabrur Travel lahir dari dedikasi untuk memberikan layanan haji dan umroh yang amanah,
                        transparan, dan berpegang teguh pada sunnah Rasulullah ﷺ.
                    </p>
                    <p class="text-slate-600 mb-8 leading-relaxed">
                        Kami sangat menentang praktik biaya terselubung. Bersama kami, Anda mendapatkan kepastian
                        fasilitas sejak di tanah air hingga kembali ke pelukan keluarga. Akomodasi terjamin, pembimbing
                        bersertifikat, dan ibadah menjadi lebih tenang.
                    </p>

                    <!-- Founder Signature Area -->
                    <div
                        class="flex items-center gap-5 p-5 bg-white rounded-2xl shadow-sm border border-royal-50 inline-flex">
                        <img src="{{ asset('images/owner.png') }}" alt="Founder"
                            class="w-16 h-16 rounded-full object-cover border-2 border-champagne-300">
                        <div>
                            <p class="text-royal-950 font-bold text-lg font-serif">H. Harianto Rais</p>
                            <p class="text-slate-500 text-sm font-semibold">Direktur Utama</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. WHY US / KEUNGGULAN (ROYAL CARDS) -->
    <section id="whyus" class="py-20 lg:py-28 bg-royal-950 text-white relative">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-5"
            style="background-image: radial-gradient(#facc15 1px, transparent 1px); background-size: 30px 30px;"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h2 class="text-champagne-500 font-bold uppercase tracking-widest text-sm mb-3">Nilai Lebih Mabrur
                    Travel</h2>
                <h3 class="text-4xl lg:text-5xl font-serif font-bold mb-6">Kenapa Jemaah Memilih Kami?</h3>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Feature 1 -->
                <div
                    class="bg-royal-900/50 backdrop-blur-sm border border-royal-800 p-8 rounded-[2rem] hover:bg-royal-800 transition duration-300">
                    <div
                        class="w-14 h-14 rounded-full bg-royal-800 border border-royal-700 flex items-center justify-center text-champagne-400 text-2xl mb-6 shadow-inner">
                        <i class="fa-solid fa-file-shield"></i>
                    </div>
                    <h4 class="text-xl font-bold mb-3 font-serif">Legalitas Terjamin</h4>
                    <p class="text-royal-200 text-sm leading-relaxed">Izin resmi Kemenag RI, memberikan jaminan
                        keamanan dana dan dokumen Anda.</p>
                </div>
                <!-- Feature 2 -->
                <div
                    class="bg-royal-900/50 backdrop-blur-sm border border-royal-800 p-8 rounded-[2rem] hover:bg-royal-800 transition duration-300">
                    <div
                        class="w-14 h-14 rounded-full bg-royal-800 border border-royal-700 flex items-center justify-center text-champagne-400 text-2xl mb-6 shadow-inner">
                        <i class="fa-solid fa-kaaba"></i>
                    </div>
                    <h4 class="text-xl font-bold mb-3 font-serif">Sesuai Sunnah</h4>
                    <p class="text-royal-200 text-sm leading-relaxed">Manasik dan ibadah dibimbing murni sesuai ajaran
                        Nabi ﷺ tanpa tambahan bid'ah.</p>
                </div>
                <!-- Feature 3 -->
                <div
                    class="bg-royal-900/50 backdrop-blur-sm border border-royal-800 p-8 rounded-[2rem] hover:bg-royal-800 transition duration-300">
                    <div
                        class="w-14 h-14 rounded-full bg-royal-800 border border-royal-700 flex items-center justify-center text-champagne-400 text-2xl mb-6 shadow-inner">
                        <i class="fa-solid fa-hotel"></i>
                    </div>
                    <h4 class="text-xl font-bold mb-3 font-serif">Hotel Ring 1</h4>
                    <p class="text-royal-200 text-sm leading-relaxed">Fasilitas akomodasi sangat dekat dengan masjid,
                        menghemat energi Anda.</p>
                </div>
                <!-- Feature 4 -->
                <div
                    class="bg-royal-900/50 backdrop-blur-sm border border-royal-800 p-8 rounded-[2rem] hover:bg-royal-800 transition duration-300">
                    <div
                        class="w-14 h-14 rounded-full bg-royal-800 border border-royal-700 flex items-center justify-center text-champagne-400 text-2xl mb-6 shadow-inner">
                        <i class="fa-solid fa-ticket"></i>
                    </div>
                    <h4 class="text-xl font-bold mb-3 font-serif">Jadwal Pasti</h4>
                    <p class="text-royal-200 text-sm leading-relaxed">Tiket penerbangan telah di-booking di awal,
                        sehingga hari keberangkatan tidak akan meleset.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. PAKET IBADAH (ELEGANT PRICING) -->
    <section id="paket" class="py-20 lg:py-28 bg-[#fafaf9]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <div class="flex items-center justify-center gap-3 mb-4">
                    <div class="h-0.5 w-8 bg-champagne-500"></div>
                    <span class="text-royal-700 font-bold uppercase tracking-widest text-sm">Program Kami</span>
                    <div class="h-0.5 w-8 bg-champagne-500"></div>
                </div>
                <h2 class="text-4xl lg:text-5xl font-serif font-bold text-royal-950 mb-6">Pilihan Paket Ibadah</h2>
                <p class="text-slate-600">Harga final yang transparan, tanpa biaya tersembunyi menjelang keberangkatan.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-center">
                <!-- Paket 1 -->
                <div
                    class="bg-white rounded-[2rem] border border-slate-200 p-8 shadow-sm hover:shadow-xl transition-all duration-300 group">
                    <div class="h-48 rounded-2xl overflow-hidden mb-6 relative">
                        <img src="{{ asset('images/madinah.png') }}"
                            class="w-full h-full object-cover group-hover:scale-105 transition duration-700"
                            alt="Reguler">
                        <div
                            class="absolute top-4 left-4 bg-white/90 backdrop-blur text-royal-900 font-bold px-3 py-1 rounded-full text-xs">
                            9 Hari</div>
                    </div>
                    <h3 class="text-2xl font-serif font-bold text-royal-950 mb-2">Umroh Reguler</h3>
                    <p class="text-slate-500 text-sm mb-6">Program esensial untuk ibadah yang khusyuk.</p>
                    <p class="text-3xl font-black text-champagne-600 mb-6">Rp 28.5 <span
                            class="text-lg font-semibold text-slate-400">Jt</span></p>
                    <ul class="space-y-3 text-slate-700 font-medium text-sm mb-8">
                        <li class="flex items-start gap-3"><i class="fa-solid fa-check text-champagne-500 mt-1"></i>
                            Pesawat Lion / Batik Air PP</li>
                        <li class="flex items-start gap-3"><i class="fa-solid fa-check text-champagne-500 mt-1"></i>
                            Hotel Bintang 4</li>
                        <li class="flex items-start gap-3"><i class="fa-solid fa-check text-champagne-500 mt-1"></i>
                            Makan 3x Sehari (Fullboard)</li>
                    </ul>
                    <a href="https://wa.me/62812345678"
                        class="block text-center bg-royal-50 text-royal-700 py-3 rounded-xl font-bold hover:bg-royal-100 transition">Pilih
                        Program</a>
                </div>

                <!-- Paket 2 (VIP/Center) -->
                <div
                    class="bg-royal-950 rounded-[2.5rem] border border-royal-800 p-8 shadow-2xl transform md:-translate-y-6 relative overflow-hidden group">
                    <div
                        class="absolute top-0 right-0 bg-champagne-500 text-royal-950 text-xs font-black uppercase tracking-wider px-5 py-1.5 rounded-bl-2xl z-10">
                        Best Seller</div>
                    <div class="h-48 rounded-2xl overflow-hidden mb-6 relative border border-royal-700">
                        <img src="{{ asset('images/hotel.png') }}"
                            class="w-full h-full object-cover opacity-80 group-hover:scale-105 transition duration-700"
                            alt="Premium">
                        <div
                            class="absolute top-4 left-4 bg-royal-900/80 backdrop-blur text-champagne-400 font-bold px-3 py-1 rounded-full text-xs border border-royal-600">
                            12 Hari</div>
                    </div>
                    <h3 class="text-2xl font-serif font-bold text-white mb-2">Umroh Plus Turki</h3>
                    <p class="text-royal-200 text-sm mb-6">Ibadah sekaligus wisata peradaban Islam.</p>
                    <p class="text-3xl font-black text-champagne-400 mb-6 text-glow">Rp 37.0 <span
                            class="text-lg font-semibold text-royal-300">Jt</span></p>
                    <ul class="space-y-3 text-royal-100 font-medium text-sm mb-8">
                        <li class="flex items-start gap-3"><i class="fa-solid fa-star text-champagne-400 mt-1"></i>
                            Direct Flight Turkish Airlines</li>
                        <li class="flex items-start gap-3"><i class="fa-solid fa-star text-champagne-400 mt-1"></i>
                            Hotel Bintang 5 (Ring 1)</li>
                        <li class="flex items-start gap-3"><i class="fa-solid fa-star text-champagne-400 mt-1"></i>
                            Kereta Cepat Makkah-Madinah</li>
                        <li class="flex items-start gap-3"><i class="fa-solid fa-star text-champagne-400 mt-1"></i>
                            City Tour Istanbul & Bursa</li>
                    </ul>
                    <a href="https://wa.me/62812345678"
                        class="block text-center bg-champagne-500 text-royal-950 py-4 rounded-xl font-bold hover:bg-champagne-400 transition shadow-[0_0_15px_rgba(234,179,8,0.4)]">Reservasi
                        Sekarang</a>
                </div>

                <!-- Paket 3 -->
                <div
                    class="bg-white rounded-[2rem] border border-slate-200 p-8 shadow-sm hover:shadow-xl transition-all duration-300 group">
                    <div class="h-48 rounded-2xl overflow-hidden mb-6 relative">
                        <img src="{{ asset('images/tawaf.png') }}"
                            class="w-full h-full object-cover group-hover:scale-105 transition duration-700"
                            alt="Haji Plus">
                        <div
                            class="absolute top-4 left-4 bg-white/90 backdrop-blur text-royal-900 font-bold px-3 py-1 rounded-full text-xs">
                            ONH Plus</div>
                    </div>
                    <h3 class="text-2xl font-serif font-bold text-royal-950 mb-2">Haji Khusus</h3>
                    <p class="text-slate-500 text-sm mb-6">Masa tunggu cepat resmi Kemenag RI.</p>
                    <p class="text-3xl font-black text-champagne-600 mb-6">$ 12.500 <span
                            class="text-lg font-semibold text-slate-400">Mulai</span></p>
                    <ul class="space-y-3 text-slate-700 font-medium text-sm mb-8">
                        <li class="flex items-start gap-3"><i class="fa-solid fa-check text-champagne-500 mt-1"></i>
                            Kepastian Kuota Haji</li>
                        <li class="flex items-start gap-3"><i class="fa-solid fa-check text-champagne-500 mt-1"></i>
                            Tenda VIP Arafah & Mina</li>
                        <li class="flex items-start gap-3"><i class="fa-solid fa-check text-champagne-500 mt-1"></i>
                            Dokter Pribadi Tersedia</li>
                    </ul>
                    <a href="https://wa.me/62812345678"
                        class="block text-center bg-royal-50 text-royal-700 py-3 rounded-xl font-bold hover:bg-royal-100 transition">Konsultasi
                        Haji</a>
                </div>
            </div>
        </div>
    </section>

    <!-- 6. GALERI (MASONRY-LIKE) -->
    <section id="galeri" class="py-20 lg:py-28 bg-white border-y border-slate-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-end gap-6 mb-12">
                <div>
                    <h2 class="text-champagne-600 font-bold uppercase tracking-widest text-sm mb-3">Dokumentasi Jemaah
                    </h2>
                    <h3 class="text-4xl font-serif font-bold text-royal-950">Galeri Perjalanan</h3>
                </div>
                <a href="#"
                    class="font-bold text-royal-700 hover:text-royal-900 transition flex items-center gap-2">Follow
                    Instagram <i class="fa-solid fa-arrow-right"></i></a>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="col-span-2 row-span-2 rounded-[2rem] overflow-hidden group h-[400px]">
                    <img src="{{ asset('images/mekkah.png') }}"
                        class="w-full h-full object-cover group-hover:scale-105 transition duration-700"
                        alt="Mekkah">
                </div>
                <div class="rounded-2xl overflow-hidden group h-[190px]">
                    <img src="{{ asset('images/madinah.png') }}"
                        class="w-full h-full object-cover group-hover:scale-105 transition duration-700"
                        alt="Madinah">
                </div>
                <div class="rounded-2xl overflow-hidden group h-[190px]">
                    <img src="{{ asset('images/hotel.png') }}"
                        class="w-full h-full object-cover group-hover:scale-105 transition duration-700"
                        alt="Hotel">
                </div>
                <div class="col-span-2 rounded-2xl overflow-hidden group h-[194px]">
                    <img src="{{ asset('images/tawaf.png') }}"
                        class="w-full h-full object-cover object-top group-hover:scale-105 transition duration-700"
                        alt="Tawaf">
                </div>
            </div>
        </div>
    </section>

    <!-- 7. TESTIMONI -->
    <section id="testimoni" class="py-20 lg:py-28 bg-[#fafaf9]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h3 class="text-4xl lg:text-5xl font-serif font-bold text-royal-950 mb-6">Ulasan Tamu Allah</h3>
                <p class="text-slate-600">Pengalaman nyata dari jemaah yang telah beribadah bersama kami.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-5xl mx-auto">
                <div class="bg-white p-10 rounded-[2rem] shadow-sm border border-slate-100 relative">
                    <i class="fa-solid fa-quote-right absolute top-8 right-8 text-5xl text-royal-50"></i>
                    <div class="flex text-champagne-400 mb-6 text-sm"><i class="fa-solid fa-star"></i><i
                            class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                            class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
                    <p class="text-slate-700 mb-8 font-medium leading-relaxed text-lg relative z-10">"Alhamdulillah,
                        umroh bersama Mabrur Travel sangat berkesan. Muthawwifnya sangat sabar membimbing orang tua
                        saya, dan penjelasan sejarah di Madinah sangat menambah keimanan."</p>
                    <div class="flex items-center gap-4">
                        <img src="{{ asset('images/user1.png') }}"
                            class="w-14 h-14 rounded-full object-cover border-2 border-royal-100" alt="User">
                        <div>
                            <p class="font-bold text-royal-950">Ahmad Subarkah</p>
                            <p class="text-xs text-slate-500 font-bold uppercase tracking-wider">Jemaah Reguler</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-10 rounded-[2rem] shadow-sm border border-slate-100 relative">
                    <i class="fa-solid fa-quote-right absolute top-8 right-8 text-5xl text-royal-50"></i>
                    <div class="flex text-champagne-400 mb-6 text-sm"><i class="fa-solid fa-star"></i><i
                            class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                            class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
                    <p class="text-slate-700 mb-8 font-medium leading-relaxed text-lg relative z-10">"Fasilitas VIP-nya
                        benar-benar terasa. Hotel sangat dekat jadi tidak capek untuk bolak-balik shalat 5 waktu ke
                        masjid. Makanan cocok di lidah, sukses selalu Mabrur!"</p>
                    <div class="flex items-center gap-4">
                        <img src="{{ asset('images/user2.png') }}"
                            class="w-14 h-14 rounded-full object-cover border-2 border-royal-100" alt="User">
                        <div>
                            <p class="font-bold text-royal-950">Hj. Fitriani</p>
                            <p class="text-xs text-slate-500 font-bold uppercase tracking-wider">Jemaah Premium</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 8. FAQ -->
    <section id="faq" class="py-20 bg-white border-y border-slate-100">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h3 class="text-4xl font-serif font-bold text-royal-950 mb-4">Pertanyaan Umum</h3>
                <p class="text-slate-600">Temukan jawaban atas keraguan Anda sebelum mendaftar.</p>
            </div>

            <div class="space-y-4" x-data="{ active: null }">
                <!-- FAQ 1 -->
                <div class="bg-[#fafaf9] rounded-2xl border border-slate-200 overflow-hidden">
                    <button @click="active = active === 1 ? null : 1"
                        class="w-full px-6 py-5 flex justify-between items-center text-left focus:outline-none">
                        <span class="font-bold text-royal-950 text-lg">Apakah pembayaran bisa dicicil?</span>
                        <div class="w-8 h-8 rounded-full bg-white flex items-center justify-center text-champagne-600 shadow-sm transition-transform"
                            :class="active === 1 ? 'rotate-180' : ''"><i class="fa-solid fa-chevron-down"></i></div>
                    </button>
                    <div x-show="active === 1" x-collapse>
                        <p class="px-6 pb-6 text-slate-600 font-medium leading-relaxed pt-2">Ya. Jemaah cukup
                            membayarkan DP (Uang Muka) sebesar Rp 5.000.000 untuk penguncian tiket pesawat (*booking
                            seat*). Sisa biaya dapat diangsur dan harus dilunasi paling lambat 45 hari sebelum
                            keberangkatan.</p>
                    </div>
                </div>
                <!-- FAQ 2 -->
                <div class="bg-[#fafaf9] rounded-2xl border border-slate-200 overflow-hidden">
                    <button @click="active = active === 2 ? null : 2"
                        class="w-full px-6 py-5 flex justify-between items-center text-left focus:outline-none">
                        <span class="font-bold text-royal-950 text-lg">Apakah harga sudah termasuk perlengkapan?</span>
                        <div class="w-8 h-8 rounded-full bg-white flex items-center justify-center text-champagne-600 shadow-sm transition-transform"
                            :class="active === 2 ? 'rotate-180' : ''"><i class="fa-solid fa-chevron-down"></i></div>
                    </button>
                    <div x-show="active === 2" x-collapse>
                        <p class="px-6 pb-6 text-slate-600 font-medium leading-relaxed pt-2">Semua paket kami berstatus
                            *All-in*. Biaya sudah termasuk koper bagasi, tas kabin, tas paspor, kain ihram (pria) /
                            mukena (wanita), buku panduan, seragam batik, dan air zam-zam 5 liter.</p>
                    </div>
                </div>
                <!-- FAQ 3 -->
                <div class="bg-[#fafaf9] rounded-2xl border border-slate-200 overflow-hidden">
                    <button @click="active = active === 3 ? null : 3"
                        class="w-full px-6 py-5 flex justify-between items-center text-left focus:outline-none">
                        <span class="font-bold text-royal-950 text-lg">Saya berencana memberangkatkan orang tua yang
                            sudah lansia.</span>
                        <div class="w-8 h-8 rounded-full bg-white flex items-center justify-center text-champagne-600 shadow-sm transition-transform"
                            :class="active === 3 ? 'rotate-180' : ''"><i class="fa-solid fa-chevron-down"></i></div>
                    </button>
                    <div x-show="active === 3" x-collapse>
                        <p class="px-6 pb-6 text-slate-600 font-medium leading-relaxed pt-2">Kami sangat memperhatikan
                            jemaah lansia dan risti (risiko tinggi). Mutawwif kami akan memberikan pendampingan
                            prioritas, dan kami menyediakan opsi layanan sewa kursi roda beserta pendorong resmi saat di
                            Tanah Suci.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 9. BLOG / ARTIKEL -->
    <section id="blog" class="py-20 lg:py-28 bg-[#fafaf9]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-end mb-12 gap-4">
                <div>
                    <h2 class="text-champagne-600 font-bold uppercase tracking-widest text-sm mb-3">Wawasan Spiritual
                    </h2>
                    <h3 class="text-4xl font-serif font-bold text-royal-950">Jurnal & Panduan</h3>
                </div>
                <a href="#"
                    class="hidden md:inline-block font-bold text-royal-700 hover:text-champagne-600 transition">Lihat
                    Semua Tulisan &rarr;</a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Article 1 -->
                <article
                    class="bg-white rounded-[2rem] overflow-hidden shadow-sm border border-slate-100 group cursor-pointer hover:shadow-xl transition-all duration-300">
                    <div class="h-56 overflow-hidden relative">
                        <img src="{{ asset('images/tawaf.png') }}"
                            class="w-full h-full object-cover group-hover:scale-105 transition duration-700"
                            alt="Tawaf">
                        <div
                            class="absolute top-4 left-4 bg-white/90 backdrop-blur text-royal-900 text-xs font-bold px-3 py-1 rounded-full">
                            Fiqih Ibadah</div>
                    </div>
                    <div class="p-8">
                        <p class="text-slate-400 text-sm mb-3 font-semibold">12 Agustus 2026</p>
                        <h4
                            class="text-xl font-serif font-bold text-royal-950 mb-3 group-hover:text-champagne-600 transition leading-snug">
                            Menjaga Keikhlasan Niat Saat Melaksanakan Tawaf</h4>
                        <p class="text-slate-600 text-sm mb-6 line-clamp-2">Tawaf adalah ibadah fisik sekaligus batin.
                            Pastikan niat kita murni karena Allah agar tidak lelah yang didapat hanya kesia-siaan.</p>
                        <span
                            class="text-royal-700 font-bold text-sm flex items-center gap-2 group-hover:text-champagne-600 transition">Baca
                            Artikel <i class="fa-solid fa-arrow-right text-xs"></i></span>
                    </div>
                </article>
                <!-- Article 2 -->
                <article
                    class="bg-white rounded-[2rem] overflow-hidden shadow-sm border border-slate-100 group cursor-pointer hover:shadow-xl transition-all duration-300">
                    <div class="h-56 overflow-hidden relative">
                        <img src="{{ asset('images/madinah.png') }}"
                            class="w-full h-full object-cover group-hover:scale-105 transition duration-700"
                            alt="Madinah">
                        <div
                            class="absolute top-4 left-4 bg-white/90 backdrop-blur text-royal-900 text-xs font-bold px-3 py-1 rounded-full">
                            Destinasi</div>
                    </div>
                    <div class="p-8">
                        <p class="text-slate-400 text-sm mb-3 font-semibold">05 Agustus 2026</p>
                        <h4
                            class="text-xl font-serif font-bold text-royal-950 mb-3 group-hover:text-champagne-600 transition leading-snug">
                            Adab Ziarah di Raudhah Masjid Nabawi</h4>
                        <p class="text-slate-600 text-sm mb-6 line-clamp-2">Memasuki Raudhah butuh ketenangan dan
                            penghormatan. Inilah amalan dan adab saat berziarah di kota Nabi ﷺ.</p>
                        <span
                            class="text-royal-700 font-bold text-sm flex items-center gap-2 group-hover:text-champagne-600 transition">Baca
                            Artikel <i class="fa-solid fa-arrow-right text-xs"></i></span>
                    </div>
                </article>
                <!-- Article 3 -->
                <article
                    class="bg-white rounded-[2rem] overflow-hidden shadow-sm border border-slate-100 group cursor-pointer hover:shadow-xl transition-all duration-300">
                    <div class="h-56 overflow-hidden relative">
                        <img src="{{ asset('images/hotel.png') }}"
                            class="w-full h-full object-cover group-hover:scale-105 transition duration-700"
                            alt="Hotel">
                        <div
                            class="absolute top-4 left-4 bg-white/90 backdrop-blur text-royal-900 text-xs font-bold px-3 py-1 rounded-full">
                            Tips Travel</div>
                    </div>
                    <div class="p-8">
                        <p class="text-slate-400 text-sm mb-3 font-semibold">28 Juli 2026</p>
                        <h4
                            class="text-xl font-serif font-bold text-royal-950 mb-3 group-hover:text-champagne-600 transition leading-snug">
                            Barang Esensial di Tas Kabin Anda</h4>
                        <p class="text-slate-600 text-sm mb-6 line-clamp-2">Jangan memasukkan paspor atau obat penting
                            ke koper bagasi. Berikut daftar barang yang wajib ada di tas selempang Anda.</p>
                        <span
                            class="text-royal-700 font-bold text-sm flex items-center gap-2 group-hover:text-champagne-600 transition">Baca
                            Artikel <i class="fa-solid fa-arrow-right text-xs"></i></span>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- 10. MAJESTIC FOOTER -->
    <footer class="bg-royal-950 text-royal-100 pt-20 pb-10 rounded-t-[3rem] mt-2">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-16">
                <!-- Branding -->
                <div class="lg:col-span-1">
                    <div class="flex items-center gap-2 mb-6">
                        <div
                            class="w-10 h-10 rounded-full border border-champagne-500 flex items-center justify-center text-champagne-500">
                            <i class="fa-solid fa-moon text-lg"></i>
                        </div>
                        <span class="text-2xl font-serif font-bold text-white tracking-wide">Mabrur<span
                                class="text-champagne-500">.</span></span>
                    </div>
                    <p class="text-sm text-royal-200 leading-relaxed mb-6 font-medium">Melayani tamu Allah dengan
                        standar integritas dan kenyamanan tertinggi. Berangkat dengan tenang, pulang membawa kemabruran.
                    </p>
                    <div class="flex gap-3">
                        <a href="#"
                            class="w-10 h-10 rounded-full bg-royal-900 flex items-center justify-center hover:bg-champagne-500 hover:text-royal-950 transition"><i
                                class="fa-brands fa-instagram"></i></a>
                        <a href="#"
                            class="w-10 h-10 rounded-full bg-royal-900 flex items-center justify-center hover:bg-champagne-500 hover:text-royal-950 transition"><i
                                class="fa-brands fa-facebook-f"></i></a>
                        <a href="#"
                            class="w-10 h-10 rounded-full bg-royal-900 flex items-center justify-center hover:bg-champagne-500 hover:text-royal-950 transition"><i
                                class="fa-brands fa-youtube"></i></a>
                    </div>
                </div>

                <!-- Perusahaan -->
                <div>
                    <h4 class="text-white font-bold uppercase tracking-widest text-xs mb-6">Perusahaan</h4>
                    <ul class="space-y-4 text-sm font-medium">
                        <li><a href="#profil" class="hover:text-champagne-400 transition">Tentang Mabrur Travel</a>
                        </li>
                        <li><a href="#whyus" class="hover:text-champagne-400 transition">Keunggulan Layanan</a></li>
                        <li><a href="#paket" class="hover:text-champagne-400 transition">Program Paket Ibadah</a>
                        </li>
                        <li><a href="#galeri" class="hover:text-champagne-400 transition">Galeri Jemaah</a></li>
                    </ul>
                </div>

                <!-- Layanan & Bantuan -->
                <div>
                    <h4 class="text-white font-bold uppercase tracking-widest text-xs mb-6">Informasi</h4>
                    <ul class="space-y-4 text-sm font-medium">
                        <li><a href="#faq" class="hover:text-champagne-400 transition">Pusat Bantuan (FAQ)</a></li>
                        <li><a href="#" class="hover:text-champagne-400 transition">Syarat & Ketentuan</a></li>
                        <li><a href="#" class="hover:text-champagne-400 transition">Kebijakan Privasi</a></li>
                        <li><a href="#blog" class="hover:text-champagne-400 transition">Jurnal Islami</a></li>
                    </ul>
                </div>

                <!-- Kontak -->
                <div>
                    <h4 class="text-white font-bold uppercase tracking-widest text-xs mb-6">Kontak Kami</h4>
                    <ul class="space-y-4 text-sm font-medium text-royal-200 mb-6">
                        <li class="flex items-start gap-3"><i
                                class="fa-solid fa-location-dot mt-1 text-champagne-500"></i> Batam Centre, Kepulauan
                            Riau, Indonesia.</li>
                        <li class="flex items-center gap-3"><i class="fa-solid fa-phone text-champagne-500"></i> +62
                            812 3456 7890</li>
                        <li class="flex items-center gap-3"><i class="fa-solid fa-envelope text-champagne-500"></i>
                            salam@mabrur.com</li>
                    </ul>
                    <div class="bg-royal-900 border border-royal-800 rounded-xl p-4 inline-block">
                        <p class="text-[10px] text-royal-300 uppercase tracking-widest font-bold mb-1">Terdaftar Resmi
                            Kemenag RI</p>
                        <p class="text-white font-black">PPIU No. U.123/2023</p>
                    </div>
                </div>
            </div>

            <!-- Copyright -->
            <div
                class="border-t border-royal-800/50 pt-8 flex flex-col md:flex-row justify-between items-center gap-4 text-sm text-royal-300 font-medium">
                <p>&copy; 2026 PT. Mabrur Travel Indonesia. All rights reserved.</p>
            </div>
        </div>
    </footer>

</body>

</html>
