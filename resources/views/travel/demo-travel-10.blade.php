<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mabrur Travel - Contemporary Emerald Theme</title>

    <!-- Tailwind CSS & Alpine JS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Fonts: Lexend (Modern Headings) & Inter (Clean Body) -->
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Lexend:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        emerald: {
                            50: '#ecfdf5',
                            100: '#d1fae5',
                            400: '#34d399',
                            500: '#10b981',
                            600: '#059669', // Main Brand Color
                            700: '#047857',
                            800: '#065f46',
                            900: '#064e3b', // Dark Contrast
                            950: '#022c22',
                        }
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        heading: ['Lexend', 'sans-serif'],
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

        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        .font-heading {
            font-family: 'Lexend', sans-serif;
        }

        [x-cloak] {
            display: none !important;
        }

        /* Glassmorphism Classes */
        .glass {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.5);
        }

        .glass-dark {
            background: rgba(6, 78, 59, 0.85);
            /* Emerald 900 base */
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border: 1px solid rgba(16, 185, 129, 0.2);
            /* Emerald 500 */
        }

        /* Animated Blob Background */
        .blob-shape {
            border-radius: 40% 60% 70% 30% / 40% 50% 60% 50%;
            animation: morph 8s ease-in-out infinite;
        }

        @keyframes morph {

            0%,
            100% {
                border-radius: 40% 60% 70% 30% / 40% 50% 60% 50%;
            }

            34% {
                border-radius: 70% 30% 50% 50% / 30% 30% 70% 70%;
            }

            67% {
                border-radius: 100% 60% 60% 100% / 100% 100% 60% 60%;
            }
        }
    </style>
</head>

<body class="antialiased selection:bg-emerald-500 selection:text-white relative">

    <!-- Background Decoration Grid -->
    <div class="fixed inset-0 z-0 pointer-events-none opacity-[0.03]"
        style="background-image: radial-gradient(#059669 2px, transparent 2px); background-size: 40px 40px;"></div>

    <!-- 1. GLASS NAV -->
    <nav x-data="{ mobileMenu: false, scrolled: false }" @scroll.window="scrolled = (window.pageYOffset > 20)"
        class="fixed w-full z-50 transition-all duration-300"
        :class="scrolled ? 'glass shadow-sm py-3' : 'bg-transparent py-6'">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="flex justify-between items-center">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center gap-2">
                    <div
                        class="w-10 h-10 rounded-xl bg-emerald-600 flex items-center justify-center text-white shadow-lg shadow-emerald-600/30">
                        <i class="fa-solid fa-kaaba text-lg"></i>
                    </div>
                    <span class="text-2xl font-heading font-black tracking-tight text-emerald-950">Mabrur<span
                            class="text-emerald-500">.</span></span>
                </div>

                <!-- Desktop Menu -->
                <div class="hidden lg:flex space-x-8 items-center text-sm font-semibold text-slate-600">
                    <a href="#profil" class="hover:text-emerald-600 transition">Profil</a>
                    <a href="#whyus" class="hover:text-emerald-600 transition">Pelayanan</a>
                    <a href="#paket" class="hover:text-emerald-600 transition">Daftar Paket</a>
                    <a href="#galeri" class="hover:text-emerald-600 transition">Galeri</a>
                    <a href="#testimoni" class="hover:text-emerald-600 transition">Review</a>
                    <a href="#blog" class="hover:text-emerald-600 transition">Artikel</a>
                </div>

                <!-- Desktop CTA -->
                <div class="hidden lg:block">
                    <a href="https://wa.me/62812345678"
                        class="bg-emerald-600 text-white px-6 py-2.5 rounded-xl font-semibold transition hover:bg-emerald-700 shadow-lg shadow-emerald-600/30 flex items-center gap-2">
                        <i class="fa-brands fa-whatsapp"></i> Hubungi CS
                    </a>
                </div>

                <!-- Mobile Button -->
                <div class="lg:hidden">
                    <button @click="mobileMenu = !mobileMenu" class="text-emerald-950 focus:outline-none">
                        <i class="fa-solid text-2xl" :class="mobileMenu ? 'fa-xmark' : 'fa-bars-staggered'"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div x-cloak x-show="mobileMenu" x-transition
            class="lg:hidden glass absolute w-full top-full left-0 shadow-xl border-t border-white">
            <div class="px-6 py-6 flex flex-col space-y-4">
                <a href="#profil" @click="mobileMenu = false"
                    class="text-slate-700 font-semibold hover:text-emerald-600">Profil Perusahaan</a>
                <a href="#whyus" @click="mobileMenu = false"
                    class="text-slate-700 font-semibold hover:text-emerald-600">Pelayanan Kami</a>
                <a href="#paket" @click="mobileMenu = false"
                    class="text-slate-700 font-semibold hover:text-emerald-600">Daftar Paket</a>
                <a href="#galeri" @click="mobileMenu = false"
                    class="text-slate-700 font-semibold hover:text-emerald-600">Galeri Kegiatan</a>
                <a href="#faq" @click="mobileMenu = false"
                    class="text-slate-700 font-semibold hover:text-emerald-600">FAQ & Bantuan</a>
                <a href="#blog" @click="mobileMenu = false"
                    class="text-slate-700 font-semibold hover:text-emerald-600">Artikel Edukasi</a>
                <a href="https://wa.me/62812345678"
                    class="bg-emerald-600 text-white text-center py-3 rounded-xl font-bold mt-2 shadow-md">Chat
                    Admin</a>
            </div>
        </div>
    </nav>

    <!-- 2. CONTEMPORARY HERO -->
    <section class="relative pt-32 pb-24 lg:pt-48 lg:pb-32 overflow-hidden">
        <!-- Animated Background Blob -->
        <div
            class="absolute top-1/2 right-0 transform -translate-y-1/2 translate-x-1/3 w-[600px] h-[600px] bg-emerald-300/30 blob-shape filter blur-3xl z-0 pointer-events-none">
        </div>
        <div class="absolute top-0 left-0 transform -translate-y-1/2 -translate-x-1/3 w-[400px] h-[400px] bg-emerald-200/40 blob-shape filter blur-3xl z-0 pointer-events-none"
            style="animation-direction: reverse;"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="flex flex-col lg:flex-row items-center gap-12">

                <div class="w-full lg:w-1/2 text-center lg:text-left">
                    <div
                        class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-emerald-50 text-emerald-700 font-semibold text-xs uppercase tracking-wider mb-6 border border-emerald-100">
                        <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span> Pendaftaran Musim 2026
                        Dibuka
                    </div>
                    <h1
                        class="text-5xl md:text-6xl lg:text-7xl font-heading font-black text-slate-900 leading-[1.1] mb-6">
                        Panggilan Suci. <br>
                        <span class="text-emerald-600">Pelayanan Pasti.</span>
                    </h1>
                    <p class="text-lg text-slate-600 mb-10 max-w-lg mx-auto lg:mx-0 font-medium leading-relaxed">
                        Kami mengintegrasikan kepatuhan syariat dengan manajemen modern. Nikmati perjalanan ibadah yang
                        transparan, nyaman, dan sepenuhnya berfokus pada kekhusyukan Anda.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                        <a href="#paket"
                            class="bg-emerald-600 text-white px-8 py-4 rounded-2xl font-bold hover:bg-emerald-700 transition shadow-lg shadow-emerald-600/30 text-center">
                            Lihat Paket Ibadah
                        </a>
                        <a href="#profil"
                            class="glass text-emerald-950 px-8 py-4 rounded-2xl font-bold hover:bg-white transition text-center flex items-center justify-center gap-2 shadow-sm">
                            <i class="fa-regular fa-circle-play text-emerald-600"></i> Mengenal Mabrur
                        </a>
                    </div>
                </div>

                <div class="w-full lg:w-1/2 relative">
                    <!-- Glassmorphism Card Hero Image -->
                    <div class="relative w-full max-w-lg mx-auto p-4 glass rounded-[2.5rem]">
                        <img src="{{ asset('images/mekkah.png') }}" alt="Mekkah"
                            class="rounded-[2rem] w-full h-[450px] object-cover shadow-inner">

                        <!-- Floating Trust Badge -->
                        <div class="absolute -bottom-6 -left-6 glass p-4 rounded-2xl flex items-center gap-4 shadow-xl">
                            <div
                                class="w-12 h-12 bg-white rounded-xl flex items-center justify-center text-emerald-600 text-xl shadow-sm">
                                <i class="fa-solid fa-shield-halved"></i>
                            </div>
                            <div>
                                <p class="text-xs text-slate-500 font-semibold uppercase tracking-wider">Legalitas</p>
                                <p class="font-heading font-bold text-slate-900">100% Kemenag RI</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 3. PROFIL & FOUNDER -->
    <section id="profil" class="py-24 bg-white relative z-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row items-center gap-16">
                <!-- Image Composition -->
                <div class="w-full lg:w-1/2 relative">
                    <div class="grid grid-cols-2 gap-4">
                        <img src="{{ asset('images/tawaf.png') }}" alt="Tawaf"
                            class="w-full h-72 object-cover rounded-3xl rounded-tl-[4rem] shadow-lg">
                        <img src="{{ asset('images/hotel.png') }}" alt="Hotel"
                            class="w-full h-72 object-cover rounded-3xl rounded-br-[4rem] shadow-lg mt-12">
                    </div>
                </div>

                <!-- Text Content -->
                <div class="w-full lg:w-1/2">
                    <h2 class="text-emerald-600 font-bold uppercase tracking-widest text-sm mb-3">Tentang Kami</h2>
                    <h3 class="text-4xl font-heading font-black text-slate-900 mb-6 leading-tight">Berkhidmah Untuk
                        <br>Tamu Allah.</h3>
                    <p class="text-slate-600 mb-6 leading-relaxed text-lg">
                        Berdiri di Batam dengan komitmen tinggi, Mabrur Travel memosisikan diri sebagai mitra spiritual
                        yang terpercaya. Kami memadukan manajemen operasional yang profesional dengan nilai-nilai ibadah
                        yang murni sesuai sunnah.
                    </p>
                    <p class="text-slate-600 mb-8 leading-relaxed">
                        Fokus utama kami adalah menghilangkan kecemasan administratif calon jemaah. Dari tiket yang
                        pasti terbang, hotel ring 1, hingga muthawwif tersertifikasi, semuanya disiapkan dengan *quality
                        control* yang ketat.
                    </p>

                    <div class="bg-slate-50 p-6 rounded-2xl flex items-center gap-5 border border-slate-100">
                        <img src="{{ asset('images/owner.png') }}" alt="Founder"
                            class="w-16 h-16 rounded-full object-cover shadow-sm ring-2 ring-emerald-500 ring-offset-2">
                        <div>
                            <p class="text-slate-900 font-heading font-bold text-lg">H. Harianto Rais</p>
                            <p class="text-emerald-600 text-sm font-semibold">Direktur Utama</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. WHY US (CONTEMPORARY CARDS) -->
    <section id="whyus" class="py-24 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-2xl mx-auto mb-16">
                <h2 class="text-emerald-600 font-bold uppercase tracking-widest text-sm mb-3">Nilai Layanan Kami</h2>
                <h3 class="text-4xl font-heading font-black text-slate-900">Mengapa Jemaah Memilih Mabrur?</h3>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Card 1 -->
                <div
                    class="bg-white p-8 rounded-[2rem] shadow-sm border border-slate-100 hover:shadow-lg transition-all duration-300 hover:-translate-y-2 group">
                    <div
                        class="w-16 h-16 bg-emerald-50 text-emerald-600 rounded-2xl flex items-center justify-center text-2xl mb-6 group-hover:bg-emerald-600 group-hover:text-white transition-colors duration-300">
                        <i class="fa-solid fa-plane-circle-check"></i></div>
                    <h4 class="font-heading font-bold text-xl text-slate-900 mb-3">Jadwal Pasti</h4>
                    <p class="text-slate-600 text-sm leading-relaxed">Kepastian tanggal terbang dengan sistem tiket
                        pesawat yang telah di-*block seat* sejak awal pendaftaran.</p>
                </div>
                <!-- Card 2 -->
                <div
                    class="bg-white p-8 rounded-[2rem] shadow-sm border border-slate-100 hover:shadow-lg transition-all duration-300 hover:-translate-y-2 group">
                    <div
                        class="w-16 h-16 bg-emerald-50 text-emerald-600 rounded-2xl flex items-center justify-center text-2xl mb-6 group-hover:bg-emerald-600 group-hover:text-white transition-colors duration-300">
                        <i class="fa-solid fa-book-open-reader"></i></div>
                    <h4 class="font-heading font-bold text-xl text-slate-900 mb-3">Sesuai Sunnah</h4>
                    <p class="text-slate-600 text-sm leading-relaxed">Bimbingan manasik eksklusif yang berpegang teguh
                        pada tuntunan Rasulullah ﷺ, menjauhi bid'ah.</p>
                </div>
                <!-- Card 3 -->
                <div
                    class="bg-white p-8 rounded-[2rem] shadow-sm border border-slate-100 hover:shadow-lg transition-all duration-300 hover:-translate-y-2 group">
                    <div
                        class="w-16 h-16 bg-emerald-50 text-emerald-600 rounded-2xl flex items-center justify-center text-2xl mb-6 group-hover:bg-emerald-600 group-hover:text-white transition-colors duration-300">
                        <i class="fa-solid fa-hotel"></i></div>
                    <h4 class="font-heading font-bold text-xl text-slate-900 mb-3">Hotel Ring 1</h4>
                    <p class="text-slate-600 text-sm leading-relaxed">Akomodasi berstandar bintang 4 dan 5 yang sangat
                        dekat dengan masjid untuk kemudahan mobilitas.</p>
                </div>
                <!-- Card 4 -->
                <div
                    class="bg-white p-8 rounded-[2rem] shadow-sm border border-slate-100 hover:shadow-lg transition-all duration-300 hover:-translate-y-2 group">
                    <div
                        class="w-16 h-16 bg-emerald-50 text-emerald-600 rounded-2xl flex items-center justify-center text-2xl mb-6 group-hover:bg-emerald-600 group-hover:text-white transition-colors duration-300">
                        <i class="fa-solid fa-wallet"></i></div>
                    <h4 class="font-heading font-bold text-xl text-slate-900 mb-3">Harga Jujur</h4>
                    <p class="text-slate-600 text-sm leading-relaxed">Sistem harga *All-in*. Kami menjamin transparansi
                        tanpa adanya biaya tambahan (hidden cost) saat di tanah suci.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. PAKET IBADAH (GLASS CARDS IN DARK BG) -->
    <section id="paket" class="py-24 bg-emerald-950 relative overflow-hidden">
        <!-- Abstract Pattern background -->
        <div class="absolute inset-0 opacity-10"
            style="background-image: radial-gradient(#34d399 2px, transparent 2px); background-size: 30px 30px;"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center max-w-2xl mx-auto mb-16">
                <h2 class="text-emerald-400 font-bold uppercase tracking-widest text-sm mb-3">Pilih Keberangkatan</h2>
                <h3 class="text-4xl font-heading font-black text-white">Katalog Paket Ibadah</h3>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Package 1 -->
                <div
                    class="glass-dark rounded-[2.5rem] p-8 flex flex-col hover:-translate-y-2 transition duration-300">
                    <div class="mb-6">
                        <span
                            class="bg-emerald-800 text-emerald-100 text-xs font-bold uppercase tracking-wider px-3 py-1.5 rounded-full">Program
                            9 Hari</span>
                        <h4 class="font-heading font-bold text-2xl text-white mt-4 mb-2">Umroh Reguler</h4>
                        <p class="text-emerald-200/70 text-sm">Paket esensial fokus ibadah.</p>
                    </div>
                    <div class="mb-8 border-b border-emerald-800 pb-8">
                        <p class="text-4xl font-black text-emerald-400">Rp 28.5<span
                                class="text-lg text-emerald-200/50 font-medium"> Juta</span></p>
                    </div>
                    <ul class="space-y-4 mb-8 text-sm text-emerald-100 flex-grow">
                        <li class="flex items-center gap-3"><i class="fa-solid fa-circle-check text-emerald-500"></i>
                            Lion / Batik Air (PP)</li>
                        <li class="flex items-center gap-3"><i class="fa-solid fa-circle-check text-emerald-500"></i>
                            Hotel Bintang 4</li>
                        <li class="flex items-center gap-3"><i class="fa-solid fa-circle-check text-emerald-500"></i>
                            Makan Fullboard 3x Sehari</li>
                        <li class="flex items-center gap-3"><i class="fa-solid fa-circle-check text-emerald-500"></i>
                            Perlengkapan Handling All-in</li>
                    </ul>
                    <a href="https://wa.me/62812345678"
                        class="block w-full text-center border border-emerald-500 text-emerald-400 py-3.5 rounded-2xl font-bold hover:bg-emerald-500 hover:text-white transition">Pilih
                        Paket</a>
                </div>

                <!-- Package 2 (Highlight) -->
                <div
                    class="bg-white rounded-[2.5rem] p-8 flex flex-col transform md:-translate-y-4 relative shadow-2xl">
                    <div
                        class="absolute top-0 right-8 bg-emerald-500 text-white text-xs font-black uppercase tracking-wider px-4 py-2 rounded-b-xl shadow-md">
                        Terpopuler</div>
                    <div class="mb-6 mt-4">
                        <span
                            class="bg-emerald-50 text-emerald-700 text-xs font-bold uppercase tracking-wider px-3 py-1.5 rounded-full">Program
                            12 Hari</span>
                        <h4 class="font-heading font-bold text-2xl text-slate-900 mt-4 mb-2">Umroh Plus Turki</h4>
                        <p class="text-slate-500 text-sm">Ibadah sekaligus wisata sejarah.</p>
                    </div>
                    <div class="mb-8 border-b border-slate-100 pb-8">
                        <p class="text-4xl font-black text-emerald-600">Rp 37.0<span
                                class="text-lg text-slate-400 font-medium"> Juta</span></p>
                    </div>
                    <ul class="space-y-4 mb-8 text-sm text-slate-700 font-medium flex-grow">
                        <li class="flex items-center gap-3"><i class="fa-solid fa-circle-check text-emerald-500"></i>
                            Direct Flight Turkish Airlines</li>
                        <li class="flex items-center gap-3"><i class="fa-solid fa-circle-check text-emerald-500"></i>
                            Hotel Bintang 5 (Ring 1)</li>
                        <li class="flex items-center gap-3"><i class="fa-solid fa-circle-check text-emerald-500"></i>
                            City Tour Istanbul & Bursa</li>
                        <li class="flex items-center gap-3"><i class="fa-solid fa-circle-check text-emerald-500"></i>
                            Kereta Cepat Haramain</li>
                    </ul>
                    <a href="https://wa.me/62812345678"
                        class="block w-full text-center bg-emerald-600 text-white py-4 rounded-2xl font-bold hover:bg-emerald-700 transition shadow-lg shadow-emerald-600/30">Daftar
                        Sekarang</a>
                </div>

                <!-- Package 3 -->
                <div
                    class="glass-dark rounded-[2.5rem] p-8 flex flex-col hover:-translate-y-2 transition duration-300">
                    <div class="mb-6">
                        <span
                            class="bg-emerald-800 text-emerald-100 text-xs font-bold uppercase tracking-wider px-3 py-1.5 rounded-full">Kuota
                            Kemenag</span>
                        <h4 class="font-heading font-bold text-2xl text-white mt-4 mb-2">Haji Khusus (ONH)</h4>
                        <p class="text-emerald-200/70 text-sm">Masa tunggu cepat 5-7 Tahun.</p>
                    </div>
                    <div class="mb-8 border-b border-emerald-800 pb-8">
                        <p class="text-4xl font-black text-emerald-400">$ 12,500<span
                                class="text-lg text-emerald-200/50 font-medium"> Mulai</span></p>
                    </div>
                    <ul class="space-y-4 mb-8 text-sm text-emerald-100 flex-grow">
                        <li class="flex items-center gap-3"><i class="fa-solid fa-circle-check text-emerald-500"></i>
                            Kepastian Kuota Resmi Haji</li>
                        <li class="flex items-center gap-3"><i class="fa-solid fa-circle-check text-emerald-500"></i>
                            Maktab VIP Tenda Arafah-Mina</li>
                        <li class="flex items-center gap-3"><i class="fa-solid fa-circle-check text-emerald-500"></i>
                            Bimbingan Syekh Intensif</li>
                        <li class="flex items-center gap-3"><i class="fa-solid fa-circle-check text-emerald-500"></i>
                            Tim Medis 24 Jam</li>
                    </ul>
                    <a href="https://wa.me/62812345678"
                        class="block w-full text-center border border-emerald-500 text-emerald-400 py-3.5 rounded-2xl font-bold hover:bg-emerald-500 hover:text-white transition">Konsultasi
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
                    <h2 class="text-emerald-600 font-bold uppercase tracking-widest text-sm mb-3">Dokumentasi</h2>
                    <h3 class="text-4xl font-heading font-black text-slate-900">Momen Spiritual Jemaah</h3>
                </div>
                <a href="#"
                    class="hidden md:inline-block font-bold text-slate-900 hover:text-emerald-600 transition">Lihat
                    Instagram <i class="fa-solid fa-arrow-right ml-1"></i></a>
            </div>

            <!-- Masonry-style Grid -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="col-span-2 row-span-2 rounded-3xl overflow-hidden group h-[400px]">
                    <img src="{{ asset('images/mekkah.png') }}"
                        class="w-full h-full object-cover group-hover:scale-110 transition duration-700"
                        alt="Mekkah">
                </div>
                <div class="rounded-3xl overflow-hidden group h-[192px]">
                    <img src="{{ asset('images/madinah.png') }}"
                        class="w-full h-full object-cover group-hover:scale-110 transition duration-700"
                        alt="Madinah">
                </div>
                <div class="rounded-3xl overflow-hidden group h-[192px]">
                    <img src="{{ asset('images/hotel.png') }}"
                        class="w-full h-full object-cover group-hover:scale-110 transition duration-700"
                        alt="Hotel">
                </div>
                <div class="col-span-2 rounded-3xl overflow-hidden group h-[192px]">
                    <img src="{{ asset('images/tawaf.png') }}"
                        class="w-full h-full object-cover object-top group-hover:scale-110 transition duration-700"
                        alt="Tawaf">
                </div>
            </div>
        </div>
    </section>

    <!-- 7. TESTIMONI -->
    <section id="testimoni" class="py-24 bg-slate-50 border-y border-slate-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h3 class="text-4xl font-heading font-black text-slate-900 mb-4">Ulasan Tamu Allah</h3>
                <p class="text-slate-600">Ribuan jemaah telah membuktikan kenyamanan beribadah bersama kami.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-5xl mx-auto">
                <div class="bg-white p-10 rounded-[2.5rem] shadow-sm border border-slate-100">
                    <div class="flex text-amber-400 mb-6 text-sm"><i class="fa-solid fa-star"></i><i
                            class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                            class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
                    <p class="text-slate-700 mb-8 font-medium leading-relaxed text-lg">"Proses pendaftaran sangat
                        mudah. Aplikasi transparansinya bagus. Selama di tanah suci muthawwif membimbing dengan sabar,
                        tidak terburu-buru. Ibadah jadi terasa sangat khusyuk."</p>
                    <div class="flex items-center gap-4">
                        <img src="{{ asset('images/user1.png') }}" alt="User 1"
                            class="w-14 h-14 rounded-full object-cover">
                        <div>
                            <p class="font-heading font-bold text-slate-900">Ahmad Faisal</p>
                            <p class="text-xs text-emerald-600 font-bold uppercase tracking-wider">Umroh Reguler</p>
                        </div>
                    </div>
                </div>
                <div class="bg-white p-10 rounded-[2.5rem] shadow-sm border border-slate-100">
                    <div class="flex text-amber-400 mb-6 text-sm"><i class="fa-solid fa-star"></i><i
                            class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                            class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
                    <p class="text-slate-700 mb-8 font-medium leading-relaxed text-lg">"Ikut paket Plus Turki kemarin
                        pelayanannya memuaskan. Hotel di Makkah benar-benar di ring 1. Tour guide di Istanbul juga
                        sangat paham sejarah keislaman."</p>
                    <div class="flex items-center gap-4">
                        <img src="{{ asset('images/user2.png') }}" alt="User 2"
                            class="w-14 h-14 rounded-full object-cover">
                        <div>
                            <p class="font-heading font-bold text-slate-900">Siti Aisyah</p>
                            <p class="text-xs text-emerald-600 font-bold uppercase tracking-wider">Umroh Premium</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 8. FAQ -->
    <section id="faq" class="py-24 bg-white">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h3 class="text-4xl font-heading font-black text-slate-900">Pertanyaan Umum</h3>
            </div>

            <div class="space-y-4" x-data="{ active: null }">
                <div class="bg-slate-50 rounded-2xl border border-slate-100 overflow-hidden">
                    <button @click="active = active === 1 ? null : 1"
                        class="w-full px-8 py-6 flex justify-between items-center text-left focus:outline-none">
                        <span class="font-heading font-bold text-slate-900 text-lg">Apakah harga bisa diangsur?</span>
                        <div class="w-8 h-8 rounded-full bg-white flex items-center justify-center shadow-sm text-emerald-600 transition-transform duration-300"
                            :class="active === 1 ? 'rotate-180' : ''"><i class="fa-solid fa-chevron-down"></i></div>
                    </button>
                    <div x-show="active === 1" x-collapse>
                        <p class="px-8 pb-6 text-slate-600 font-medium leading-relaxed">Tentu. Anda dapat membayarkan
                            Uang Muka (DP) Rp 5.000.000 untuk penguncian seat maskapai. Sisa pembayaran bebas diangsur
                            dan wajib dilunasi maksimal 45 hari sebelum keberangkatan.</p>
                    </div>
                </div>
                <div class="bg-slate-50 rounded-2xl border border-slate-100 overflow-hidden">
                    <button @click="active = active === 2 ? null : 2"
                        class="w-full px-8 py-6 flex justify-between items-center text-left focus:outline-none">
                        <span class="font-heading font-bold text-slate-900 text-lg">Apa saja yang tidak termasuk dalam
                            harga paket?</span>
                        <div class="w-8 h-8 rounded-full bg-white flex items-center justify-center shadow-sm text-emerald-600 transition-transform duration-300"
                            :class="active === 2 ? 'rotate-180' : ''"><i class="fa-solid fa-chevron-down"></i></div>
                    </button>
                    <div x-show="active === 2" x-collapse>
                        <p class="px-8 pb-6 text-slate-600 font-medium leading-relaxed">Paket kami bersifat All-in.
                            Namun, biaya tersebut di luar pengeluaran pribadi (laundry, telepon, kelebihan bagasi
                            maskapai), pembuatan paspor, serta suntik vaksin meningitis.</p>
                    </div>
                </div>
                <div class="bg-slate-50 rounded-2xl border border-slate-100 overflow-hidden">
                    <button @click="active = active === 3 ? null : 3"
                        class="w-full px-8 py-6 flex justify-between items-center text-left focus:outline-none">
                        <span class="font-heading font-bold text-slate-900 text-lg">Bagaimana dengan jemaah
                            lansia?</span>
                        <div class="w-8 h-8 rounded-full bg-white flex items-center justify-center shadow-sm text-emerald-600 transition-transform duration-300"
                            :class="active === 3 ? 'rotate-180' : ''"><i class="fa-solid fa-chevron-down"></i></div>
                    </button>
                    <div x-show="active === 3" x-collapse>
                        <p class="px-8 pb-6 text-slate-600 font-medium leading-relaxed">Kami memberikan prioritas bagi
                            lansia. Tim muthawwif siap memberikan pendampingan. Kami juga melayani penyewaan kursi roda
                            dan pendorong resmi selama ibadah tawaf dan sa'i di Tanah Suci.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 9. BLOG -->
    <section id="blog" class="py-24 bg-slate-50 border-t border-slate-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-end mb-12">
                <div>
                    <h2 class="text-emerald-600 font-bold uppercase tracking-widest text-sm mb-3">Artikel & Inspirasi
                    </h2>
                    <h3 class="text-4xl font-heading font-black text-slate-900">Jurnal Ibadah</h3>
                </div>
                <a href="#"
                    class="hidden md:inline-block font-bold text-emerald-700 bg-emerald-100/50 px-6 py-2.5 rounded-full hover:bg-emerald-100 transition">Lihat
                    Semua Blog</a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Card 1 -->
                <div
                    class="bg-white rounded-3xl p-4 shadow-sm border border-slate-100 hover:shadow-lg transition group">
                    <div class="h-48 rounded-2xl overflow-hidden mb-6">
                        <img src="{{ asset('images/tawaf.png') }}" alt="Tawaf"
                            class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                    </div>
                    <div class="px-2">
                        <div class="flex items-center gap-3 text-xs font-semibold text-slate-500 mb-3">
                            <span class="bg-slate-100 text-slate-700 px-2.5 py-1 rounded-md uppercase">Panduan</span>
                            <span>12 Ags 2026</span>
                        </div>
                        <h4
                            class="font-heading font-bold text-xl text-slate-900 mb-3 leading-snug group-hover:text-emerald-600 transition cursor-pointer">
                            Menghayati Makna Tawaf Sesuai Tuntunan Sunnah</h4>
                        <p class="text-slate-600 text-sm mb-4 line-clamp-2">Pahami filosofi mengelilingi Ka'bah dan
                            doa-doa makhsus yang dianjurkan saat melaksanakannya.</p>
                        <a href="#" class="text-emerald-600 font-bold text-sm">Baca Selengkapnya &rarr;</a>
                    </div>
                </div>
                <!-- Card 2 -->
                <div
                    class="bg-white rounded-3xl p-4 shadow-sm border border-slate-100 hover:shadow-lg transition group">
                    <div class="h-48 rounded-2xl overflow-hidden mb-6">
                        <img src="{{ asset('images/madinah.png') }}" alt="Madinah"
                            class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                    </div>
                    <div class="px-2">
                        <div class="flex items-center gap-3 text-xs font-semibold text-slate-500 mb-3">
                            <span class="bg-slate-100 text-slate-700 px-2.5 py-1 rounded-md uppercase">Destinasi</span>
                            <span>05 Ags 2026</span>
                        </div>
                        <h4
                            class="font-heading font-bold text-xl text-slate-900 mb-3 leading-snug group-hover:text-emerald-600 transition cursor-pointer">
                            Keutamaan dan Adab Ziarah di Masjid Nabawi</h4>
                        <p class="text-slate-600 text-sm mb-4 line-clamp-2">Kota Madinah yang tenang memiliki aturan
                            adab tersendiri. Ketahui cara memasuki Raudhah dengan benar.</p>
                        <a href="#" class="text-emerald-600 font-bold text-sm">Baca Selengkapnya &rarr;</a>
                    </div>
                </div>
                <!-- Card 3 -->
                <div
                    class="bg-white rounded-3xl p-4 shadow-sm border border-slate-100 hover:shadow-lg transition group">
                    <div class="h-48 rounded-2xl overflow-hidden mb-6">
                        <img src="{{ asset('images/hotel.png') }}" alt="Hotel"
                            class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                    </div>
                    <div class="px-2">
                        <div class="flex items-center gap-3 text-xs font-semibold text-slate-500 mb-3">
                            <span class="bg-slate-100 text-slate-700 px-2.5 py-1 rounded-md uppercase">Tips
                                Travel</span>
                            <span>28 Jul 2026</span>
                        </div>
                        <h4
                            class="font-heading font-bold text-xl text-slate-900 mb-3 leading-snug group-hover:text-emerald-600 transition cursor-pointer">
                            Barang yang Wajib Dibawa di Tas Selempang (Kabin)</h4>
                        <p class="text-slate-600 text-sm mb-4 line-clamp-2">Jangan masukkan paspor dan obat-obatan
                            pribadi ke dalam koper bagasi. Ini daftar barang wajib di tas kabin Anda.</p>
                        <a href="#" class="text-emerald-600 font-bold text-sm">Baca Selengkapnya &rarr;</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 10. CLEAN FOOTER -->
    <footer class="bg-emerald-950 text-slate-300 pt-20 pb-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-16">
                <!-- Brand -->
                <div class="lg:col-span-1">
                    <div class="flex items-center gap-2 mb-6">
                        <div class="w-10 h-10 rounded-xl bg-emerald-600 flex items-center justify-center text-white">
                            <i class="fa-solid fa-kaaba text-lg"></i>
                        </div>
                        <span class="text-2xl font-heading font-black text-white tracking-tight">Mabrur<span
                                class="text-emerald-500">.</span></span>
                    </div>
                    <p class="text-sm leading-relaxed text-emerald-100/70 mb-6">Mitra perjalanan ibadah terpercaya,
                        memadukan profesionalisme layanan dengan bimbingan sunnah yang otentik.</p>
                    <div class="flex gap-3">
                        <a href="#"
                            class="w-10 h-10 rounded-full bg-emerald-900 flex items-center justify-center hover:bg-emerald-600 hover:text-white transition"><i
                                class="fa-brands fa-instagram"></i></a>
                        <a href="#"
                            class="w-10 h-10 rounded-full bg-emerald-900 flex items-center justify-center hover:bg-emerald-600 hover:text-white transition"><i
                                class="fa-brands fa-facebook-f"></i></a>
                        <a href="#"
                            class="w-10 h-10 rounded-full bg-emerald-900 flex items-center justify-center hover:bg-emerald-600 hover:text-white transition"><i
                                class="fa-brands fa-youtube"></i></a>
                    </div>
                </div>

                <!-- Nav -->
                <div>
                    <h4 class="text-white font-heading font-bold mb-6">Jelajahi</h4>
                    <ul class="space-y-4 text-sm text-emerald-100/80 font-medium">
                        <li><a href="#profil" class="hover:text-emerald-400 transition">Tentang Perusahaan</a></li>
                        <li><a href="#whyus" class="hover:text-emerald-400 transition">Keunggulan Layanan</a></li>
                        <li><a href="#paket" class="hover:text-emerald-400 transition">Katalog Paket</a></li>
                        <li><a href="#galeri" class="hover:text-emerald-400 transition">Galeri Perjalanan</a></li>
                    </ul>
                </div>

                <!-- Legal & Help -->
                <div>
                    <h4 class="text-white font-heading font-bold mb-6">Bantuan</h4>
                    <ul class="space-y-4 text-sm text-emerald-100/80 font-medium">
                        <li><a href="#faq" class="hover:text-emerald-400 transition">Pertanyaan Umum (FAQ)</a></li>
                        <li><a href="#" class="hover:text-emerald-400 transition">Syarat & Ketentuan</a></li>
                        <li><a href="#" class="hover:text-emerald-400 transition">Kebijakan Privasi</a></li>
                        <li><a href="#blog" class="hover:text-emerald-400 transition">Artikel Jurnal</a></li>
                    </ul>
                </div>

                <!-- Contact -->
                <div>
                    <h4 class="text-white font-heading font-bold mb-6">Kontak Kami</h4>
                    <ul class="space-y-4 text-sm text-emerald-100/80 font-medium mb-6">
                        <li class="flex items-start gap-3"><i
                                class="fa-solid fa-location-dot mt-1 text-emerald-500"></i> Batam Centre, Kepulauan
                            Riau, Indonesia</li>
                        <li class="flex items-center gap-3"><i class="fa-solid fa-phone text-emerald-500"></i> +62 812
                            3456 7890</li>
                        <li class="flex items-center gap-3"><i class="fa-solid fa-envelope text-emerald-500"></i>
                            info@mabrurtravel.com</li>
                    </ul>
                    <div class="bg-emerald-900 inline-block px-4 py-2 rounded-xl border border-emerald-800">
                        <p class="text-[10px] text-emerald-400 font-bold uppercase tracking-wider mb-1">Terdaftar di
                            Kemenag RI</p>
                        <p class="text-white font-heading font-bold">PPIU No. U.123/2023</p>
                    </div>
                </div>
            </div>

            <div
                class="border-t border-emerald-900 pt-8 flex flex-col md:flex-row justify-between items-center gap-4 text-sm text-emerald-200/50 font-medium">
                <p>&copy; 2026 PT. Mabrur Travel Umroh. All rights reserved.</p>
                <p>Melayani Tamu Allah Sepenuh Hati.</p>
            </div>
        </div>
    </footer>

</body>

</html>
