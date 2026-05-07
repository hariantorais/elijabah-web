<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mabrur Travel - Premium Dark & Gold Theme</title>

    <!-- Tailwind CSS & Alpine JS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Fonts: Playfair Display (Elegant Serif) & Montserrat (Clean Sans) -->
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,600&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        gold: {
                            300: '#FDE047',
                            400: '#FBBF24',
                            500: '#D4AF37',
                            /* True Metallic Gold */
                            600: '#B49020',
                            700: '#927214',
                        },
                        midnight: {
                            800: '#1e293b',
                            900: '#0f172a',
                            950: '#020617',
                            /* Deep Black/Blue */
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
            background-color: #020617;
            color: #cbd5e1;
        }

        [x-cloak] {
            display: none !important;
        }

        /* Gold text gradient */
        .text-gradient-gold {
            background: linear-gradient(to right, #FDE047, #D4AF37, #B49020);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        /* Subtle gold glow */
        .glow-gold {
            box-shadow: 0 0 25px rgba(212, 175, 55, 0.15);
        }

        /* Luxury border transition */
        .luxury-border {
            position: relative;
        }

        .luxury-border::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0%;
            height: 2px;
            background: #D4AF37;
            transition: width 0.5s ease;
        }

        .luxury-border:hover::after {
            width: 100%;
        }
    </style>
</head>

<body class="antialiased selection:bg-gold-500 selection:text-midnight-950">

    <!-- 1. VIP NAVIGATION -->
    <nav x-data="{ mobileMenu: false, scrolled: false }" @scroll.window="scrolled = (window.pageYOffset > 20)"
        class="fixed w-full z-50 transition-all duration-500"
        :class="scrolled ? 'bg-midnight-950/90 backdrop-blur-lg border-b border-white/10 py-4 shadow-2xl' :
            'bg-transparent py-6'">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center gap-3">
                    <div
                        class="w-10 h-10 border border-gold-500 flex items-center justify-center text-gold-500 rounded-sm">
                        <i class="fa-solid fa-kaaba"></i>
                    </div>
                    <span class="text-2xl font-serif font-bold text-white tracking-widest uppercase">
                        Mabrur<span class="text-gold-500">.</span>
                    </span>
                </div>

                <!-- Desktop Menu -->
                <div
                    class="hidden lg:flex space-x-8 items-center text-xs font-semibold uppercase tracking-widest text-slate-300">
                    <a href="#profil" class="hover:text-gold-500 transition duration-300 luxury-border pb-1">Profil</a>
                    <a href="#whyus" class="hover:text-gold-500 transition duration-300 luxury-border pb-1">Layanan</a>
                    <a href="#paket"
                        class="hover:text-gold-500 transition duration-300 luxury-border pb-1">Eksklusif</a>
                    <a href="#galeri" class="hover:text-gold-500 transition duration-300 luxury-border pb-1">Galeri</a>
                    <a href="#blog" class="hover:text-gold-500 transition duration-300 luxury-border pb-1">Jurnal</a>
                </div>

                <!-- Desktop CTA -->
                <div class="hidden lg:block">
                    <a href="https://wa.me/62812345678"
                        class="px-6 py-2.5 border border-gold-500 text-gold-500 font-semibold text-xs uppercase tracking-widest hover:bg-gold-500 hover:text-midnight-950 transition duration-500 flex items-center gap-2">
                        Reservasi
                    </a>
                </div>

                <!-- Mobile Button -->
                <div class="lg:hidden">
                    <button @click="mobileMenu = !mobileMenu" class="text-gold-500 focus:outline-none">
                        <i class="fa-solid text-2xl" :class="mobileMenu ? 'fa-xmark' : 'fa-bars'"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div x-cloak x-show="mobileMenu" x-transition
            class="lg:hidden bg-midnight-950 absolute w-full top-full left-0 border-t border-white/10 shadow-2xl">
            <div class="px-6 py-6 flex flex-col space-y-4 text-center">
                <a href="#profil" @click="mobileMenu = false"
                    class="text-slate-300 font-medium hover:text-gold-500 text-sm uppercase tracking-widest">Profil</a>
                <a href="#whyus" @click="mobileMenu = false"
                    class="text-slate-300 font-medium hover:text-gold-500 text-sm uppercase tracking-widest">Layanan</a>
                <a href="#paket" @click="mobileMenu = false"
                    class="text-slate-300 font-medium hover:text-gold-500 text-sm uppercase tracking-widest">Eksklusif</a>
                <a href="#galeri" @click="mobileMenu = false"
                    class="text-slate-300 font-medium hover:text-gold-500 text-sm uppercase tracking-widest">Galeri</a>
                <a href="#faq" @click="mobileMenu = false"
                    class="text-slate-300 font-medium hover:text-gold-500 text-sm uppercase tracking-widest">FAQ</a>
                <a href="https://wa.me/62812345678"
                    class="bg-gold-500 text-midnight-950 py-3 font-bold text-sm uppercase tracking-widest mt-4">Hubungi
                    Kami</a>
            </div>
        </div>
    </nav>

    <!-- 2. DARK HERO SECTION -->
    <section class="relative min-h-screen flex items-center justify-center overflow-hidden">
        <!-- Background Image with Dark Overlay -->
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('images/mekkah.png') }}"
                class="w-full h-full object-cover object-center transform scale-105" alt="Mekkah Background">
            <div class="absolute inset-0 bg-gradient-to-t from-midnight-950 via-midnight-950/80 to-midnight-900/40">
            </div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center w-full mt-20">
            <span class="text-gold-500 font-semibold tracking-[0.2em] text-xs md:text-sm uppercase mb-6 block">Biro
                Perjalanan Haji & Umroh VIP</span>

            <h1 class="text-5xl md:text-7xl lg:text-8xl font-serif font-bold text-white leading-tight mb-8">
                Perjalanan Suci <br>
                <span class="text-gradient-gold italic font-normal">Penuh Kemuliaan.</span>
            </h1>

            <p class="text-slate-400 mb-12 max-w-2xl mx-auto font-light leading-relaxed text-lg">
                Hadirkan ketenangan dalam setiap langkah ibadah Anda. Dengan fasilitas berkelas, layanan terpadu, dan
                bimbingan eksklusif sesuai sunnah Rasulullah ﷺ.
            </p>

            <div class="flex flex-col sm:flex-row gap-6 justify-center">
                <a href="#paket"
                    class="bg-gold-500 text-midnight-950 px-10 py-4 font-bold text-sm uppercase tracking-widest hover:bg-gold-400 transition duration-300 glow-gold">
                    Eksplorasi Paket
                </a>
                <a href="https://wa.me/62812345678"
                    class="bg-transparent border border-gold-500/50 text-gold-500 px-10 py-4 font-bold text-sm uppercase tracking-widest hover:bg-gold-500/10 transition duration-300">
                    Konsultasi Pribadi
                </a>
            </div>
        </div>

        <!-- Scroll Indicator -->
        <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2 z-10 animate-bounce text-gold-500/50">
            <i class="fa-solid fa-arrow-down-long text-2xl"></i>
        </div>
    </section>

    <!-- 3. TRUST & RECOGNITION -->
    <section class="border-y border-white/5 bg-midnight-900/30">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
            <div
                class="flex flex-wrap justify-center lg:justify-between items-center gap-10 opacity-60 hover:opacity-100 transition duration-500">
                <div class="flex items-center gap-3 text-slate-300 font-serif text-xl"><i
                        class="fa-brands fa-avianex text-gold-500"></i> Saudia</div>
                <div class="flex items-center gap-3 text-slate-300 font-serif text-xl"><i
                        class="fa-solid fa-plane-up text-gold-500"></i> Garuda Indonesia</div>
                <div class="flex items-center gap-3 text-slate-300 font-serif text-xl"><i
                        class="fa-solid fa-star-and-crescent text-gold-500"></i> Turkish Airlines</div>
                <div class="flex items-center gap-3 text-slate-300 font-serif text-xl"><i
                        class="fa-solid fa-building-columns text-gold-500"></i> Kemenag RI</div>
            </div>
        </div>
    </section>

    <!-- 4. THE PROFILE -->
    <section id="profil" class="py-24 relative overflow-hidden">
        <!-- Decoration -->
        <div class="absolute top-0 right-0 w-1/3 h-full bg-gradient-to-l from-gold-500/5 to-transparent z-0"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <!-- Text -->
                <div>
                    <div class="flex items-center gap-4 mb-6">
                        <div class="h-[1px] w-12 bg-gold-500"></div>
                        <span class="text-gold-500 font-semibold uppercase tracking-widest text-xs">Dedikasi Kami</span>
                    </div>
                    <h2 class="text-4xl lg:text-5xl font-serif font-bold text-white mb-8 leading-tight">Melayani Tamu
                        Allah Dengan Standar Terbaik.</h2>
                    <p class="text-slate-400 mb-6 leading-relaxed font-light text-lg">
                        Mabrur Travel didirikan atas dasar kerinduan untuk memberikan pelayanan ibadah yang murni, tanpa
                        kompromi pada kenyamanan, dan senantiasa berpedoman teguh pada sunnah.
                    </p>
                    <p class="text-slate-400 mb-10 leading-relaxed font-light text-lg">
                        Kami menjamin transparansi penuh. Mulai dari kepastian tiket, akomodasi berbintang di pelataran
                        masjid, hingga tim muthawwif berdedikasi tinggi yang siap membimbing Anda 24 jam.
                    </p>

                    <div class="flex items-center gap-6">
                        <img src="{{ asset('images/owner.png') }}" alt="Founder"
                            class="w-16 h-16 rounded-full object-cover border border-gold-500 grayscale">
                        <div>
                            <p class="text-white font-serif font-bold text-xl">H. Harianto Rais</p>
                            <p class="text-gold-500 text-xs uppercase tracking-widest mt-1">Founder & CEO</p>
                        </div>
                    </div>
                </div>

                <!-- Image -->
                <div class="relative">
                    <div
                        class="absolute -inset-4 border border-gold-500/30 transform translate-x-4 translate-y-4 z-0 hidden lg:block">
                    </div>
                    <img src="{{ asset('images/tawaf.png') }}" alt="Tawaf"
                        class="w-full h-[550px] object-cover relative z-10 grayscale hover:grayscale-0 transition duration-700 shadow-2xl">
                    <div
                        class="absolute bottom-8 -left-8 bg-midnight-900 border border-white/10 p-6 z-20 shadow-2xl hidden md:block">
                        <p class="text-5xl font-serif font-bold text-gold-500 mb-2">15+</p>
                        <p class="text-xs text-slate-400 uppercase tracking-widest">Tahun Pengalaman</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. WHY US / EXCLUSIVE SERVICES -->
    <section id="whyus" class="py-24 bg-midnight-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-20">
                <span class="text-gold-500 font-semibold uppercase tracking-widest text-xs mb-4 block">Fasilitas
                    Eksekutif</span>
                <h3 class="text-4xl lg:text-5xl font-serif font-bold text-white mb-6">Integritas Dalam Pelayanan</h3>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Item 1 -->
                <div
                    class="bg-midnight-950 p-10 border border-white/5 hover:border-gold-500/50 transition duration-500 group">
                    <i
                        class="fa-solid fa-plane-circle-check text-4xl text-gold-500 mb-8 opacity-80 group-hover:opacity-100 transition duration-300"></i>
                    <h4 class="text-xl font-serif font-bold text-white mb-4">Kepastian Terbang</h4>
                    <p class="text-slate-400 font-light leading-relaxed text-sm">Sistem manajemen *block-seat* yang
                        ketat, menjamin tiket Anda telah dipesan dan dibayar lunas jauh sebelum hari keberangkatan.</p>
                </div>
                <!-- Item 2 -->
                <div
                    class="bg-midnight-950 p-10 border border-white/5 hover:border-gold-500/50 transition duration-500 group relative overflow-hidden">
                    <div
                        class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-gold-400 to-gold-600 transform origin-left scale-x-0 group-hover:scale-x-100 transition duration-500">
                    </div>
                    <i
                        class="fa-solid fa-kaaba text-4xl text-gold-500 mb-8 opacity-80 group-hover:opacity-100 transition duration-300"></i>
                    <h4 class="text-xl font-serif font-bold text-white mb-4">Bimbingan Sunnah</h4>
                    <p class="text-slate-400 font-light leading-relaxed text-sm">Tim Asatidz lulusan Universitas Islam
                        Madinah yang siap membimbing ibadah Anda sesuai dengan pemahaman Salafus Shalih.</p>
                </div>
                <!-- Item 3 -->
                <div
                    class="bg-midnight-950 p-10 border border-white/5 hover:border-gold-500/50 transition duration-500 group">
                    <i
                        class="fa-solid fa-hotel text-4xl text-gold-500 mb-8 opacity-80 group-hover:opacity-100 transition duration-300"></i>
                    <h4 class="text-xl font-serif font-bold text-white mb-4">Akomodasi Premium</h4>
                    <p class="text-slate-400 font-light leading-relaxed text-sm">Pemilihan hotel berstandar bintang 5
                        yang letaknya di area pelataran masjid (Ring 1) untuk kenyamanan maksimal saat beribadah.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 6. VIP PACKAGES -->
    <section id="paket" class="py-24 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-end mb-16 gap-6">
                <div>
                    <span class="text-gold-500 font-semibold uppercase tracking-widest text-xs mb-4 block">Investasi
                        Akhirat</span>
                    <h3 class="text-4xl lg:text-5xl font-serif font-bold text-white">Program Eksklusif</h3>
                </div>
                <p class="text-slate-400 font-light max-w-sm text-sm">Pilih program perjalanan yang sesuai dengan
                    kebutuhan Anda. Harga bersifat transparan (All-in).</p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-center">
                <!-- Package 1: Regular -->
                <div class="bg-midnight-900 border border-white/10 p-10 hover:bg-midnight-800 transition duration-300">
                    <span class="text-slate-400 text-xs font-bold uppercase tracking-widest mb-2 block">Program 9
                        Hari</span>
                    <h4 class="text-2xl font-serif font-bold text-white mb-6">Umroh Reguler</h4>
                    <p class="text-4xl font-light text-white mb-8">Rp 28.5<span
                            class="text-sm text-gold-500 font-bold ml-1">JUTA</span></p>

                    <ul class="space-y-4 text-slate-400 font-light text-sm mb-10">
                        <li class="flex items-start gap-4"><i class="fa-solid fa-check text-gold-500 mt-1"></i>
                            Pesawat Ekonomi PP</li>
                        <li class="flex items-start gap-4"><i class="fa-solid fa-check text-gold-500 mt-1"></i> Hotel
                            Bintang 4</li>
                        <li class="flex items-start gap-4"><i class="fa-solid fa-check text-gold-500 mt-1"></i>
                            Fullboard Katering</li>
                        <li class="flex items-start gap-4"><i class="fa-solid fa-check text-gold-500 mt-1"></i>
                            Perlengkapan Lengkap</li>
                    </ul>
                    <a href="https://wa.me/62812345678"
                        class="block text-center border border-slate-600 text-slate-300 py-4 text-xs font-bold uppercase tracking-widest hover:border-gold-500 hover:text-gold-500 transition duration-300">Pilih
                        Paket</a>
                </div>

                <!-- Package 2: Premium (Highlighted) -->
                <div
                    class="bg-midnight-950 border border-gold-500/50 p-10 transform lg:-translate-y-4 glow-gold relative">
                    <div
                        class="absolute top-0 right-0 bg-gold-500 text-midnight-950 text-[10px] font-bold uppercase tracking-widest px-4 py-2">
                        Signature</div>
                    <span class="text-gold-500 text-xs font-bold uppercase tracking-widest mb-2 block">Program 12
                        Hari</span>
                    <h4 class="text-2xl font-serif font-bold text-white mb-6">Umroh Plus Turki</h4>
                    <p class="text-4xl font-light text-white mb-8">Rp 37.0<span
                            class="text-sm text-gold-500 font-bold ml-1">JUTA</span></p>

                    <ul class="space-y-4 text-slate-300 font-light text-sm mb-10">
                        <li class="flex items-start gap-4"><i class="fa-solid fa-check text-gold-500 mt-1"></i> Direct
                            Flight Turkish Airlines</li>
                        <li class="flex items-start gap-4"><i class="fa-solid fa-check text-gold-500 mt-1"></i> Hotel
                            Bintang 5 (Ring 1)</li>
                        <li class="flex items-start gap-4"><i class="fa-solid fa-check text-gold-500 mt-1"></i> City
                            Tour Istanbul & Bursa</li>
                        <li class="flex items-start gap-4"><i class="fa-solid fa-check text-gold-500 mt-1"></i> Kereta
                            Cepat Haramain</li>
                    </ul>
                    <a href="https://wa.me/62812345678"
                        class="block text-center bg-gold-500 text-midnight-950 py-4 text-xs font-bold uppercase tracking-widest hover:bg-gold-400 transition duration-300 shadow-lg shadow-gold-500/20">Reservasi
                        VIP</a>
                </div>

                <!-- Package 3: Haji -->
                <div class="bg-midnight-900 border border-white/10 p-10 hover:bg-midnight-800 transition duration-300">
                    <span class="text-slate-400 text-xs font-bold uppercase tracking-widest mb-2 block">Kuota
                        Kemenag</span>
                    <h4 class="text-2xl font-serif font-bold text-white mb-6">Haji Khusus (ONH)</h4>
                    <p class="text-4xl font-light text-white mb-8">$ 12.5k<span
                            class="text-sm text-gold-500 font-bold ml-1">START</span></p>

                    <ul class="space-y-4 text-slate-400 font-light text-sm mb-10">
                        <li class="flex items-start gap-4"><i class="fa-solid fa-check text-gold-500 mt-1"></i>
                            Kepastian Keberangkatan</li>
                        <li class="flex items-start gap-4"><i class="fa-solid fa-check text-gold-500 mt-1"></i> Maktab
                            VIP Arafah-Mina</li>
                        <li class="flex items-start gap-4"><i class="fa-solid fa-check text-gold-500 mt-1"></i>
                            Bimbingan Syekh Intensif</li>
                        <li class="flex items-start gap-4"><i class="fa-solid fa-check text-gold-500 mt-1"></i> Tim
                            Medis Pribadi</li>
                    </ul>
                    <a href="https://wa.me/62812345678"
                        class="block text-center border border-slate-600 text-slate-300 py-4 text-xs font-bold uppercase tracking-widest hover:border-gold-500 hover:text-gold-500 transition duration-300">Konsultasi
                        Haji</a>
                </div>
            </div>
        </div>
    </section>

    <!-- 7. GALLERY (MONOCHROME TO COLOR) -->
    <section id="galeri" class="py-1">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-1">
            <div class="h-64 md:h-80 relative overflow-hidden group">
                <img src="{{ asset('images/mekkah.png') }}"
                    class="w-full h-full object-cover grayscale opacity-60 group-hover:grayscale-0 group-hover:opacity-100 group-hover:scale-105 transition duration-700 ease-in-out"
                    alt="Mekkah">
            </div>
            <div class="h-64 md:h-80 relative overflow-hidden group">
                <img src="{{ asset('images/madinah.png') }}"
                    class="w-full h-full object-cover grayscale opacity-60 group-hover:grayscale-0 group-hover:opacity-100 group-hover:scale-105 transition duration-700 ease-in-out"
                    alt="Madinah">
            </div>
            <div class="h-64 md:h-80 relative overflow-hidden group">
                <img src="{{ asset('images/hotel.png') }}"
                    class="w-full h-full object-cover grayscale opacity-60 group-hover:grayscale-0 group-hover:opacity-100 group-hover:scale-105 transition duration-700 ease-in-out"
                    alt="Hotel">
            </div>
            <div class="h-64 md:h-80 relative overflow-hidden group">
                <img src="{{ asset('images/tawaf.png') }}"
                    class="w-full h-full object-cover grayscale opacity-60 group-hover:grayscale-0 group-hover:opacity-100 group-hover:scale-105 transition duration-700 ease-in-out"
                    alt="Tawaf">
            </div>
        </div>
    </section>

    <!-- 8. TESTIMONIALS -->
    <section id="testimoni" class="py-24 bg-midnight-900 border-y border-white/5">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-20">
                <span class="text-gold-500 font-semibold uppercase tracking-widest text-xs mb-4 block">Testimoni
                    VIP</span>
                <h3 class="text-4xl lg:text-5xl font-serif font-bold text-white">Kepercayaan Jemaah</h3>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-10 max-w-5xl mx-auto">
                <!-- Review 1 -->
                <div class="relative">
                    <i class="fa-solid fa-quote-left text-5xl text-white/5 absolute -top-4 -left-4"></i>
                    <div class="border-l-2 border-gold-500 pl-8 relative z-10">
                        <p class="text-slate-300 font-light text-lg leading-relaxed mb-6 italic">"Standar pelayanan
                            Mabrur Travel di atas ekspektasi saya. Hotelnya benar-benar di zam-zam tower, sangat
                            membantu orang tua saya yang menggunakan kursi roda. Bimbingannya juga sangat mendalam."</p>
                        <div class="flex items-center gap-4">
                            <img src="{{ asset('images/user1.png') }}" alt="User"
                                class="w-12 h-12 rounded-full object-cover grayscale">
                            <div>
                                <p class="text-white font-bold font-serif">Dr. Ahmad Zulkifli</p>
                                <p class="text-gold-500 text-[10px] uppercase tracking-widest">Jemaah VIP Plus</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Review 2 -->
                <div class="relative">
                    <i class="fa-solid fa-quote-left text-5xl text-white/5 absolute -top-4 -left-4"></i>
                    <div class="border-l-2 border-gold-500 pl-8 relative z-10">
                        <p class="text-slate-300 font-light text-lg leading-relaxed mb-6 italic">"Dari awal
                            pendaftaran, proses visa, sampai kepulangan diurus dengan sangat profesional. Tidak ada
                            biaya tambahan di luar paket yang dijanjikan. Luar biasa amanah."</p>
                        <div class="flex items-center gap-4">
                            <img src="{{ asset('images/user2.png') }}" alt="User"
                                class="w-12 h-12 rounded-full object-cover grayscale">
                            <div>
                                <p class="text-white font-bold font-serif">Hj. Ratna Sari</p>
                                <p class="text-gold-500 text-[10px] uppercase tracking-widest">Jemaah Reguler</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 9. FAQ (MINIMALIST ACCORDION) -->
    <section id="faq" class="py-24">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h3 class="text-4xl font-serif font-bold text-white mb-4">Informasi Tambahan</h3>
            </div>

            <div class="space-y-2" x-data="{ active: null }">
                <div class="border-b border-white/10">
                    <button @click="active = active === 1 ? null : 1"
                        class="w-full py-6 flex justify-between items-center text-left focus:outline-none group">
                        <span
                            class="font-serif font-bold text-white text-lg group-hover:text-gold-500 transition">Bagaimana
                            sistem pembayarannya?</span>
                        <i class="fa-solid fa-plus text-gold-500 transition-transform duration-300"
                            :class="active === 1 ? 'rotate-45' : ''"></i>
                    </button>
                    <div x-show="active === 1" x-collapse>
                        <p class="pb-6 text-slate-400 font-light leading-relaxed">Pembayaran dilakukan secara bertahap.
                            Cukup dengan Uang Muka (DP) Rp 5.000.000 untuk penguncian kuota dan tiket. Pelunasan dapat
                            dilakukan maksimal 45 hari sebelum tanggal keberangkatan.</p>
                    </div>
                </div>

                <div class="border-b border-white/10">
                    <button @click="active = active === 2 ? null : 2"
                        class="w-full py-6 flex justify-between items-center text-left focus:outline-none group">
                        <span
                            class="font-serif font-bold text-white text-lg group-hover:text-gold-500 transition">Apakah
                            ada hidden cost?</span>
                        <i class="fa-solid fa-plus text-gold-500 transition-transform duration-300"
                            :class="active === 2 ? 'rotate-45' : ''"></i>
                    </button>
                    <div x-show="active === 2" x-collapse>
                        <p class="pb-6 text-slate-400 font-light leading-relaxed">Kami menjamin 100% transparansi
                            harga. Biaya All-in menanggung tiket penerbangan, hotel, makan, muthawwif, asuransi, dan
                            visa. Di luar pembuatan paspor dan pengeluaran belanja pribadi.</p>
                    </div>
                </div>

                <div class="border-b border-white/10">
                    <button @click="active = active === 3 ? null : 3"
                        class="w-full py-6 flex justify-between items-center text-left focus:outline-none group">
                        <span
                            class="font-serif font-bold text-white text-lg group-hover:text-gold-500 transition">Fasilitas
                            apa untuk lansia?</span>
                        <i class="fa-solid fa-plus text-gold-500 transition-transform duration-300"
                            :class="active === 3 ? 'rotate-45' : ''"></i>
                    </button>
                    <div x-show="active === 3" x-collapse>
                        <p class="pb-6 text-slate-400 font-light leading-relaxed">Kami sangat memprioritaskan
                            kenyamanan jemaah lansia. Hotel kami berada di Ring 1. Selain itu, kami juga menyediakan
                            layanan tambahan sewa kursi roda dan pendorong resmi (dengan biaya sesuai ketentuan
                            muthawwif setempat).</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 10. BLOG -->
    <section id="blog" class="py-24 bg-midnight-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-end mb-16">
                <div>
                    <span class="text-gold-500 font-semibold uppercase tracking-widest text-xs mb-4 block">Edukasi &
                        Wawasan</span>
                    <h3 class="text-4xl font-serif font-bold text-white">Jurnal Spiritual</h3>
                </div>
                <a href="#"
                    class="hidden md:inline-block font-bold text-xs uppercase tracking-widest text-gold-500 luxury-border pb-1">Lihat
                    Semua Artikel</a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Blog 1 -->
                <div class="group cursor-pointer">
                    <div class="overflow-hidden mb-6 h-56 relative border border-white/5">
                        <img src="{{ asset('images/tawaf.png') }}"
                            class="w-full h-full object-cover grayscale opacity-80 group-hover:grayscale-0 group-hover:opacity-100 group-hover:scale-105 transition duration-700"
                            alt="Blog">
                    </div>
                    <span class="text-gold-500 text-[10px] font-bold uppercase tracking-widest mb-3 block">Fiqih Ibadah
                        — 12 Ags 2026</span>
                    <h4
                        class="text-xl font-serif font-bold text-white mb-3 group-hover:text-gold-500 transition duration-300">
                        Makna Spiritual Dibalik Putaran Tawaf</h4>
                    <p class="text-slate-400 text-sm font-light line-clamp-2">Pahami filosofi mendalam saat
                        mengelilingi Ka'bah dan temukan kekhusyukan dalam setiap doanya.</p>
                </div>
                <!-- Blog 2 -->
                <div class="group cursor-pointer">
                    <div class="overflow-hidden mb-6 h-56 relative border border-white/5">
                        <img src="{{ asset('images/madinah.png') }}"
                            class="w-full h-full object-cover grayscale opacity-80 group-hover:grayscale-0 group-hover:opacity-100 group-hover:scale-105 transition duration-700"
                            alt="Blog">
                    </div>
                    <span class="text-gold-500 text-[10px] font-bold uppercase tracking-widest mb-3 block">Destinasi —
                        05 Ags 2026</span>
                    <h4
                        class="text-xl font-serif font-bold text-white mb-3 group-hover:text-gold-500 transition duration-300">
                        Adab Berziarah di Raudhah Masjid Nabawi</h4>
                    <p class="text-slate-400 text-sm font-light line-clamp-2">Tata cara dan etika saat memasuki taman
                        surga di dunia agar ibadah kita diterima dengan sempurna.</p>
                </div>
                <!-- Blog 3 -->
                <div class="group cursor-pointer">
                    <div class="overflow-hidden mb-6 h-56 relative border border-white/5">
                        <img src="{{ asset('images/hotel.png') }}"
                            class="w-full h-full object-cover grayscale opacity-80 group-hover:grayscale-0 group-hover:opacity-100 group-hover:scale-105 transition duration-700"
                            alt="Blog">
                    </div>
                    <span class="text-gold-500 text-[10px] font-bold uppercase tracking-widest mb-3 block">Panduan — 28
                        Jul 2026</span>
                    <h4
                        class="text-xl font-serif font-bold text-white mb-3 group-hover:text-gold-500 transition duration-300">
                        Barang Esensial Dalam Tas Kabin Anda</h4>
                    <p class="text-slate-400 text-sm font-light line-clamp-2">Daftar barang wajib yang harus selalu ada
                        di dekat Anda, bukan di koper bagasi.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 11. PREMIUM FOOTER -->
    <footer class="bg-midnight-950 pt-20 pb-10 border-t border-white/5">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-16">
                <!-- Branding -->
                <div class="lg:col-span-1">
                    <div class="flex items-center gap-3 mb-6">
                        <i class="fa-solid fa-kaaba text-gold-500 text-xl"></i>
                        <span class="text-2xl font-serif font-bold text-white tracking-widest uppercase">Mabrur<span
                                class="text-gold-500">.</span></span>
                    </div>
                    <p class="text-slate-400 text-sm font-light leading-relaxed mb-6">Mitra perjalanan spiritual VIP.
                        Menyatukan eksklusivitas fasilitas dan kemurnian bimbingan ibadah.</p>
                    <div class="flex gap-4">
                        <a href="#" class="text-slate-500 hover:text-gold-500 transition text-lg"><i
                                class="fa-brands fa-instagram"></i></a>
                        <a href="#" class="text-slate-500 hover:text-gold-500 transition text-lg"><i
                                class="fa-brands fa-facebook-f"></i></a>
                        <a href="#" class="text-slate-500 hover:text-gold-500 transition text-lg"><i
                                class="fa-brands fa-youtube"></i></a>
                    </div>
                </div>

                <!-- Links -->
                <div>
                    <h4 class="text-white font-serif font-bold mb-6">Perusahaan</h4>
                    <ul class="space-y-4 text-sm font-light text-slate-400">
                        <li><a href="#profil" class="hover:text-gold-500 transition">Profil & Sejarah</a></li>
                        <li><a href="#whyus" class="hover:text-gold-500 transition">Standar Layanan</a></li>
                        <li><a href="#paket" class="hover:text-gold-500 transition">Katalog Program VIP</a></li>
                        <li><a href="#galeri" class="hover:text-gold-500 transition">Galeri Dokumentasi</a></li>
                    </ul>
                </div>

                <!-- Legal -->
                <div>
                    <h4 class="text-white font-serif font-bold mb-6">Dukungan</h4>
                    <ul class="space-y-4 text-sm font-light text-slate-400">
                        <li><a href="#faq" class="hover:text-gold-500 transition">Pusat Bantuan (FAQ)</a></li>
                        <li><a href="#" class="hover:text-gold-500 transition">Syarat & Ketentuan</a></li>
                        <li><a href="#" class="hover:text-gold-500 transition">Kebijakan Privasi</a></li>
                        <li><a href="#blog" class="hover:text-gold-500 transition">Jurnal Edukasi</a></li>
                    </ul>
                </div>

                <!-- Contact -->
                <div>
                    <h4 class="text-white font-serif font-bold mb-6">Kantor Pusat</h4>
                    <ul class="space-y-4 text-sm font-light text-slate-400 mb-6">
                        <li class="flex items-start gap-3"><i class="fa-solid fa-location-dot mt-1 text-gold-500"></i>
                            Kawasan Bisnis Batam Centre, Kepulauan Riau.</li>
                        <li class="flex items-center gap-3"><i class="fa-solid fa-phone text-gold-500"></i> +62 812
                            3456 7890</li>
                        <li class="flex items-center gap-3"><i class="fa-solid fa-envelope text-gold-500"></i>
                            vip@mabrur.com</li>
                    </ul>
                    <p class="text-[10px] font-bold uppercase tracking-widest text-slate-500 mb-1">Legalitas Kemenag RI
                    </p>
                    <p class="text-gold-500 font-bold text-sm">PPIU NO. U.123/2023</p>
                </div>
            </div>

            <!-- Copyright -->
            <div
                class="border-t border-white/5 pt-8 flex flex-col md:flex-row justify-between items-center gap-4 text-xs text-slate-500 font-light uppercase tracking-widest">
                <p>&copy; 2026 Mabrur Travel Umroh. All Rights Reserved.</p>
                <p>Designed for Excellence.</p>
            </div>
        </div>
    </footer>

</body>

</html>
