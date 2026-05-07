<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mabrur Travel - Dynamic & Tech-Forward Theme</title>

    <!-- Tailwind CSS & Alpine JS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Font: Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: {
                            500: '#0ea5e9', // Sky blue
                            600: '#0284c7',
                            700: '#0369a1',
                            900: '#0c4a6e',
                        },
                        accent: '#06b6d4' // Cyan
                    },
                    fontFamily: {
                        sans: ['Poppins', 'sans-serif'],
                    }
                }
            }
        }
    </script>

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8fafc;
        }

        [x-cloak] {
            display: none !important;
        }

        /* Modern Gradient Backgrounds */
        .bg-gradient-primary {
            background: linear-gradient(135deg, #0c4a6e 0%, #0284c7 100%);
        }

        .text-gradient {
            background: linear-gradient(to right, #0ea5e9, #06b6d4);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        /* Soft Drop Shadows for floating effect */
        .shadow-soft {
            box-shadow: 0 20px 40px -15px rgba(2, 132, 199, 0.15);
        }
    </style>
</head>

<body class="text-slate-800 antialiased selection:bg-primary-500 selection:text-white">

    <!-- 1. MODERN NAVBAR -->
    <nav x-data="{ mobileMenu: false, scrolled: false }" @scroll.window="scrolled = (window.pageYOffset > 20)"
        class="fixed w-full z-50 transition-all duration-300 border-b border-transparent"
        :class="scrolled ? 'bg-white shadow-md py-3' : 'bg-transparent py-5'">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center gap-2">
                    <div
                        class="w-10 h-10 rounded-xl bg-gradient-to-tr from-primary-600 to-accent flex items-center justify-center text-white shadow-lg">
                        <i class="fa-solid fa-kaaba text-lg"></i>
                    </div>
                    <span class="text-2xl font-black tracking-tight"
                        :class="scrolled ? 'text-primary-900' : 'text-white'">MABRUR</span>
                </div>

                <!-- Desktop Menu -->
                <div class="hidden lg:flex space-x-8 items-center text-sm font-semibold"
                    :class="scrolled ? 'text-slate-600' : 'text-slate-100'">
                    <a href="#profil" class="hover:text-accent transition">Profil</a>
                    <a href="#whyus" class="hover:text-accent transition">Keunggulan</a>
                    <a href="#paket" class="hover:text-accent transition">Paket</a>
                    <a href="#galeri" class="hover:text-accent transition">Galeri</a>
                    <a href="#testimoni" class="hover:text-accent transition">Review</a>
                    <a href="#blog" class="hover:text-accent transition">Blog</a>
                </div>

                <!-- Desktop CTA -->
                <div class="hidden lg:block">
                    <a href="https://wa.me/62812345678"
                        class="px-6 py-2.5 rounded-full font-bold transition shadow-lg flex items-center gap-2"
                        :class="scrolled ? 'bg-primary-600 text-white hover:bg-primary-700' :
                            'bg-white text-primary-700 hover:bg-slate-50'">
                        <i class="fa-brands fa-whatsapp text-lg"></i> Tanya Admin
                    </a>
                </div>

                <!-- Mobile Button -->
                <div class="lg:hidden">
                    <button @click="mobileMenu = !mobileMenu" class="focus:outline-none"
                        :class="scrolled ? 'text-primary-900' : 'text-white'">
                        <i class="fa-solid text-2xl" :class="mobileMenu ? 'fa-xmark' : 'fa-bars'"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div x-cloak x-show="mobileMenu" x-transition
            class="lg:hidden bg-white absolute w-full top-full left-0 shadow-2xl border-t border-slate-100 rounded-b-3xl">
            <div class="px-6 py-6 flex flex-col space-y-4">
                <a href="#profil" @click="mobileMenu = false"
                    class="text-slate-700 font-semibold hover:text-primary-600 text-lg">Profil</a>
                <a href="#whyus" @click="mobileMenu = false"
                    class="text-slate-700 font-semibold hover:text-primary-600 text-lg">Keunggulan</a>
                <a href="#paket" @click="mobileMenu = false"
                    class="text-slate-700 font-semibold hover:text-primary-600 text-lg">Paket Ibadah</a>
                <a href="#galeri" @click="mobileMenu = false"
                    class="text-slate-700 font-semibold hover:text-primary-600 text-lg">Galeri</a>
                <a href="#testimoni" @click="mobileMenu = false"
                    class="text-slate-700 font-semibold hover:text-primary-600 text-lg">Review Jemaah</a>
                <a href="#faq" @click="mobileMenu = false"
                    class="text-slate-700 font-semibold hover:text-primary-600 text-lg">FAQ</a>
                <a href="#blog" @click="mobileMenu = false"
                    class="text-slate-700 font-semibold hover:text-primary-600 text-lg">Blog</a>
                <a href="https://wa.me/62812345678"
                    class="bg-gradient-to-r from-primary-600 to-accent text-white text-center py-4 rounded-xl font-bold text-lg mt-4 shadow-lg">Chat
                    WhatsApp</a>
            </div>
        </div>
    </nav>

    <!-- 2. DYNAMIC HERO WITH WAVE -->
    <section class="relative bg-gradient-primary pt-32 pb-48 lg:pt-48 lg:pb-64 overflow-hidden">
        <!-- Abstract Background Circles -->
        <div
            class="absolute top-0 right-0 w-[500px] h-[500px] bg-accent rounded-full mix-blend-multiply filter blur-[100px] opacity-40 translate-x-1/2 -translate-y-1/2">
        </div>
        <div
            class="absolute bottom-0 left-0 w-[400px] h-[400px] bg-primary-500 rounded-full mix-blend-multiply filter blur-[80px] opacity-40 -translate-x-1/2 translate-y-1/2">
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row items-center gap-12">

                <div class="w-full lg:w-1/2 text-center lg:text-left">
                    <div
                        class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/10 backdrop-blur-md border border-white/20 text-white font-semibold text-sm mb-6">
                        <i class="fa-solid fa-plane-departure text-accent"></i> Travel Resmi Kemenag RI
                    </div>
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-black text-white leading-tight mb-6">
                        Mudahnya Melangkah <br> Ke Baitullah.
                    </h1>
                    <p class="text-lg text-slate-200 mb-10 max-w-lg mx-auto lg:mx-0 font-medium leading-relaxed">
                        Nikmati pengalaman ibadah haji & umroh yang terkelola secara digital, aman, transparan, dan
                        tentunya dibimbing penuh sesuai syariat Islam.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                        <a href="#paket"
                            class="bg-white text-primary-900 px-8 py-4 rounded-full font-bold hover:bg-slate-50 transition shadow-xl text-center">
                            Cari Paket Umroh
                        </a>
                        <a href="https://wa.me/62812345678"
                            class="bg-transparent border-2 border-white/30 text-white px-8 py-4 rounded-full font-bold hover:bg-white/10 transition text-center">
                            Konsultasi Gratis
                        </a>
                    </div>
                </div>

                <div class="w-full lg:w-1/2 relative">
                    <!-- Modern Image Layout -->
                    <div class="relative z-10 w-full max-w-md mx-auto lg:ml-auto">
                        <img src="{{ asset('images/mekkah.png') }}" alt="Mekkah"
                            class="rounded-[2.5rem] shadow-2xl border-8 border-white/10 w-full h-[500px] object-cover">

                        <!-- Floating Review Box -->
                        <div class="absolute -left-6 md:-left-12 bottom-12 bg-white p-5 rounded-2xl shadow-2xl border border-slate-100 flex items-center gap-4 animate-bounce"
                            style="animation-duration: 4s;">
                            <div class="flex -space-x-3">
                                <img src="{{ asset('images/user1.png') }}"
                                    class="w-10 h-10 rounded-full border-2 border-white object-cover" alt="User">
                                <img src="{{ asset('images/user2.png') }}"
                                    class="w-10 h-10 rounded-full border-2 border-white object-cover" alt="User">
                                <div
                                    class="w-10 h-10 rounded-full border-2 border-white bg-slate-100 flex items-center justify-center text-xs font-bold text-slate-600">
                                    +15k</div>
                            </div>
                            <div>
                                <p class="text-xs text-slate-500 font-semibold uppercase">Jemaah Puas</p>
                                <div class="flex text-amber-400 text-xs gap-0.5"><i class="fa-solid fa-star"></i><i
                                        class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                        class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- SVG Wave to transition into white background -->
        <div class="absolute bottom-0 w-full overflow-hidden leading-none z-0">
            <svg class="relative block w-full h-[100px] md:h-[150px]" xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path
                    d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V120H0V95.8C59.71,118.08,130.83,121.2,201.39,112.5Z"
                    fill="#f8fafc"></path>
            </svg>
        </div>
    </section>

    <!-- 3. KEUNGGULAN (OVERLAPPING CARDS) -->
    <section id="whyus" class="relative z-20 -mt-20 md:-mt-32 pb-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Card 1 -->
                <div
                    class="bg-white rounded-3xl p-8 shadow-soft border border-slate-100 hover:-translate-y-2 transition duration-300">
                    <div
                        class="w-14 h-14 rounded-2xl bg-primary-50 text-primary-600 flex items-center justify-center text-2xl mb-6 shadow-sm">
                        <i class="fa-solid fa-shield-halved"></i></div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Pasti Aman</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">Berizin resmi Kemenag RI dan terintegrasi dengan
                        SISKOPATUH. Dana pendaftaran Anda aman 100%.</p>
                </div>
                <!-- Card 2 -->
                <div
                    class="bg-white rounded-3xl p-8 shadow-soft border border-slate-100 hover:-translate-y-2 transition duration-300">
                    <div
                        class="w-14 h-14 rounded-2xl bg-primary-50 text-primary-600 flex items-center justify-center text-2xl mb-6 shadow-sm">
                        <i class="fa-solid fa-plane-circle-check"></i></div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Pasti Jadwalnya</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">Kami melakukan blok kursi (*block seat*) maskapai
                        dari jauh hari. Jadwal keberangkatan terjamin akurat.</p>
                </div>
                <!-- Card 3 -->
                <div
                    class="bg-white rounded-3xl p-8 shadow-soft border border-slate-100 hover:-translate-y-2 transition duration-300">
                    <div
                        class="w-14 h-14 rounded-2xl bg-primary-50 text-primary-600 flex items-center justify-center text-2xl mb-6 shadow-sm">
                        <i class="fa-solid fa-hotel"></i></div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Hotel Terbaik</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">Akomodasi berstandar internasional yang letaknya
                        strategis di Ring 1, menghemat energi Anda saat beribadah.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. PROFIL -->
    <section id="profil" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row items-center gap-16">
                <!-- Image Collage -->
                <div class="w-full lg:w-1/2 relative">
                    <div class="grid grid-cols-2 gap-4">
                        <img src="{{ asset('images/tawaf.png') }}"
                            class="w-full h-64 object-cover rounded-3xl shadow-lg mt-8" alt="Tawaf">
                        <img src="{{ asset('images/hotel.png') }}"
                            class="w-full h-64 object-cover rounded-3xl shadow-lg" alt="Hotel">
                    </div>
                    <!-- Decorative element -->
                    <div
                        class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-24 h-24 bg-white rounded-full flex items-center justify-center shadow-2xl">
                        <div
                            class="w-20 h-20 bg-primary-50 rounded-full flex items-center justify-center text-primary-600 text-3xl">
                            <i class="fa-solid fa-play ml-1"></i>
                        </div>
                    </div>
                </div>

                <!-- Text Content -->
                <div class="w-full lg:w-1/2">
                    <span class="text-primary-600 font-bold uppercase tracking-widest text-sm mb-2 block">Tentang
                        Mabrur Travel</span>
                    <h2 class="text-4xl lg:text-5xl font-black text-slate-900 mb-6 leading-tight">Berdedikasi Untuk
                        <br><span class="text-gradient">Tamu Allah.</span></h2>
                    <p class="text-slate-600 text-lg mb-6 leading-relaxed font-medium">
                        Didirikan di Batam, Mabrur Travel hadir membawa solusi perjalanan ibadah yang modern,
                        transparan, dan bebas dari praktik terselubung.
                    </p>
                    <p class="text-slate-600 mb-8 leading-relaxed">
                        Kami sangat memperhatikan *Quality Control* (QC) di setiap aspek, mulai dari pembuatan visa,
                        pemilihan maskapai komersial terbaik, akomodasi hotel, katering cita rasa Nusantara, hingga
                        penyediaan muthawwif bermanhaj lurus yang akan membimbing ibadah Anda sesuai sunnah.
                    </p>

                    <div class="bg-slate-50 p-6 rounded-2xl border border-slate-100 flex items-center gap-5">
                        <img src="{{ asset('images/owner.png') }}" alt="Founder"
                            class="w-16 h-16 rounded-full object-cover shadow-sm">
                        <div>
                            <p class="text-slate-900 font-bold text-lg">H. Harianto Rais</p>
                            <p class="text-primary-600 font-medium text-sm">Founder & Direktur Utama</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. PAKET IBADAH (TECH-PRICING STYLE) -->
    <section id="paket" class="py-24 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-2xl mx-auto mb-16">
                <span class="text-primary-600 font-bold uppercase tracking-widest text-sm mb-2 block">Harga
                    All-In</span>
                <h2 class="text-4xl font-black text-slate-900 mb-4">Pilih Paket Keberangkatan</h2>
                <p class="text-slate-600">Harga yang Anda lihat adalah harga final. Tidak ada biaya tersembunyi.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-center">
                <!-- Paket 1 -->
                <div
                    class="bg-white rounded-3xl p-8 border border-slate-200 shadow-sm hover:shadow-xl transition duration-300">
                    <div class="mb-6">
                        <span
                            class="bg-slate-100 text-slate-600 px-3 py-1 rounded-full text-xs font-bold uppercase mb-4 inline-block">Program
                            9 Hari</span>
                        <h3 class="text-2xl font-bold text-slate-900">Umroh Reguler</h3>
                        <p class="text-slate-500 text-sm mt-2">Pilihan tepat untuk ibadah khusyuk.</p>
                    </div>
                    <div class="mb-8 border-b border-slate-100 pb-8">
                        <p class="text-4xl font-black text-primary-600">Rp 28.5<span
                                class="text-lg text-slate-500 font-medium"> Juta</span></p>
                    </div>
                    <ul class="space-y-4 mb-8 text-sm text-slate-700 font-medium">
                        <li class="flex items-center gap-3">
                            <div
                                class="w-6 h-6 rounded-full bg-green-100 text-green-600 flex items-center justify-center text-xs">
                                <i class="fa-solid fa-check"></i></div> Tiket PP Lion/Batik Air
                        </li>
                        <li class="flex items-center gap-3">
                            <div
                                class="w-6 h-6 rounded-full bg-green-100 text-green-600 flex items-center justify-center text-xs">
                                <i class="fa-solid fa-check"></i></div> Hotel Setaraf Bintang 4
                        </li>
                        <li class="flex items-center gap-3">
                            <div
                                class="w-6 h-6 rounded-full bg-green-100 text-green-600 flex items-center justify-center text-xs">
                                <i class="fa-solid fa-check"></i></div> Fullboard Meals Nusantara
                        </li>
                        <li class="flex items-center gap-3">
                            <div
                                class="w-6 h-6 rounded-full bg-green-100 text-green-600 flex items-center justify-center text-xs">
                                <i class="fa-solid fa-check"></i></div> Asuransi Perjalanan
                        </li>
                    </ul>
                    <a href="https://wa.me/62812345678"
                        class="block text-center w-full bg-primary-50 text-primary-700 py-3 rounded-xl font-bold hover:bg-primary-100 transition">Pilih
                        Paket</a>
                </div>

                <!-- Paket 2 (POPULAR) -->
                <div class="bg-gradient-primary rounded-3xl p-8 shadow-2xl transform md:-translate-y-4 relative">
                    <div class="absolute top-0 right-8 transform -translate-y-1/2">
                        <span
                            class="bg-accent text-white px-4 py-1.5 rounded-full text-xs font-black uppercase shadow-lg">Paling
                            Populer</span>
                    </div>
                    <div class="mb-6">
                        <span
                            class="bg-white/20 text-white px-3 py-1 rounded-full text-xs font-bold uppercase mb-4 inline-block">Program
                            12 Hari</span>
                        <h3 class="text-2xl font-bold text-white">Umroh Premium + Turki</h3>
                        <p class="text-slate-200 text-sm mt-2">Ibadah sekaligus wisata sejarah Islam.</p>
                    </div>
                    <div class="mb-8 border-b border-white/20 pb-8">
                        <p class="text-4xl font-black text-white">Rp 37.0<span
                                class="text-lg text-slate-300 font-medium"> Juta</span></p>
                    </div>
                    <ul class="space-y-4 mb-8 text-sm text-white font-medium">
                        <li class="flex items-center gap-3">
                            <div
                                class="w-6 h-6 rounded-full bg-accent flex items-center justify-center text-xs text-white">
                                <i class="fa-solid fa-check"></i></div> Direct Flight Turkish Airlines
                        </li>
                        <li class="flex items-center gap-3">
                            <div
                                class="w-6 h-6 rounded-full bg-accent flex items-center justify-center text-xs text-white">
                                <i class="fa-solid fa-check"></i></div> Hotel Bintang 5 (Ring 1)
                        </li>
                        <li class="flex items-center gap-3">
                            <div
                                class="w-6 h-6 rounded-full bg-accent flex items-center justify-center text-xs text-white">
                                <i class="fa-solid fa-check"></i></div> City Tour Istanbul (3 Hari)
                        </li>
                        <li class="flex items-center gap-3">
                            <div
                                class="w-6 h-6 rounded-full bg-accent flex items-center justify-center text-xs text-white">
                                <i class="fa-solid fa-check"></i></div> Kereta Cepat Haramain
                        </li>
                    </ul>
                    <a href="https://wa.me/62812345678"
                        class="block text-center w-full bg-white text-primary-900 py-3 rounded-xl font-bold hover:bg-slate-50 transition shadow-lg">Booking
                        Sekarang</a>
                </div>

                <!-- Paket 3 -->
                <div
                    class="bg-white rounded-3xl p-8 border border-slate-200 shadow-sm hover:shadow-xl transition duration-300">
                    <div class="mb-6">
                        <span
                            class="bg-slate-100 text-slate-600 px-3 py-1 rounded-full text-xs font-bold uppercase mb-4 inline-block">Kuota
                            Kemenag</span>
                        <h3 class="text-2xl font-bold text-slate-900">Haji Khusus (ONH)</h3>
                        <p class="text-slate-500 text-sm mt-2">Masa tunggu lebih cepat & terjamin.</p>
                    </div>
                    <div class="mb-8 border-b border-slate-100 pb-8">
                        <p class="text-4xl font-black text-primary-600">$ 12.5k<span
                                class="text-lg text-slate-500 font-medium"> Mulai</span></p>
                    </div>
                    <ul class="space-y-4 mb-8 text-sm text-slate-700 font-medium">
                        <li class="flex items-center gap-3">
                            <div
                                class="w-6 h-6 rounded-full bg-green-100 text-green-600 flex items-center justify-center text-xs">
                                <i class="fa-solid fa-check"></i></div> Kepastian Kuota Resmi
                        </li>
                        <li class="flex items-center gap-3">
                            <div
                                class="w-6 h-6 rounded-full bg-green-100 text-green-600 flex items-center justify-center text-xs">
                                <i class="fa-solid fa-check"></i></div> Maktab VIP Arafah & Mina
                        </li>
                        <li class="flex items-center gap-3">
                            <div
                                class="w-6 h-6 rounded-full bg-green-100 text-green-600 flex items-center justify-center text-xs">
                                <i class="fa-solid fa-check"></i></div> Hotel Bintang 5 Transit
                        </li>
                        <li class="flex items-center gap-3">
                            <div
                                class="w-6 h-6 rounded-full bg-green-100 text-green-600 flex items-center justify-center text-xs">
                                <i class="fa-solid fa-check"></i></div> Dokter Medis Pribadi
                        </li>
                    </ul>
                    <a href="https://wa.me/62812345678"
                        class="block text-center w-full bg-primary-50 text-primary-700 py-3 rounded-xl font-bold hover:bg-primary-100 transition">Konsultasi
                        Haji</a>
                </div>
            </div>
        </div>
    </section>

    <!-- 6. TIM PEMBIMBING & GALERI (COMBINED) -->
    <section id="galeri" class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-16">
                <!-- Tim Pembimbing -->
                <div class="lg:col-span-4">
                    <span class="text-primary-600 font-bold uppercase tracking-widest text-sm mb-2 block">Pendamping
                        Ibadah</span>
                    <h2 class="text-3xl font-black text-slate-900 mb-8">Bersama Asatidz Tersertifikasi</h2>
                    <div class="space-y-6">
                        <div class="flex items-center gap-4 bg-slate-50 p-4 rounded-2xl">
                            <img src="{{ asset('images/owner.png') }}" alt="Ustaz"
                                class="w-16 h-16 rounded-full object-cover">
                            <div>
                                <h4 class="font-bold text-slate-900">Ustaz H. Harianto Rais</h4>
                                <p class="text-sm text-primary-600 font-medium">Pembimbing Utama</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-4 bg-slate-50 p-4 rounded-2xl">
                            <img src="{{ asset('images/user1.png') }}" alt="Ustaz"
                                class="w-16 h-16 rounded-full object-cover">
                            <div>
                                <h4 class="font-bold text-slate-900">Ustaz Ahmad Lc. MA</h4>
                                <p class="text-sm text-primary-600 font-medium">Muthawwif Madinah</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-4 bg-slate-50 p-4 rounded-2xl">
                            <div
                                class="w-16 h-16 rounded-full bg-primary-100 text-primary-600 flex items-center justify-center text-2xl">
                                <i class="fa-solid fa-users"></i></div>
                            <div>
                                <h4 class="font-bold text-slate-900">Tim Handling Bandara</h4>
                                <p class="text-sm text-primary-600 font-medium">Standby CGK & JED</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Galeri -->
                <div class="lg:col-span-8">
                    <div class="flex justify-between items-end mb-8">
                        <h2 class="text-3xl font-black text-slate-900">Momen Spiritual</h2>
                        <a href="#"
                            class="text-primary-600 font-bold hover:text-primary-700 hidden sm:block">Lihat Instagram
                            <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                    <div class="grid grid-cols-2 gap-4 h-[400px]">
                        <div class="rounded-3xl overflow-hidden relative group">
                            <img src="{{ asset('images/madinah.png') }}"
                                class="w-full h-full object-cover group-hover:scale-110 transition duration-700"
                                alt="Galeri 1">
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-slate-900/60 to-transparent opacity-0 group-hover:opacity-100 transition duration-300">
                            </div>
                        </div>
                        <div class="grid grid-rows-2 gap-4">
                            <div class="rounded-3xl overflow-hidden relative group">
                                <img src="{{ asset('images/mekkah.png') }}"
                                    class="w-full h-full object-cover group-hover:scale-110 transition duration-700"
                                    alt="Galeri 2">
                            </div>
                            <div class="rounded-3xl overflow-hidden relative group">
                                <img src="{{ asset('images/hotel.png') }}"
                                    class="w-full h-full object-cover group-hover:scale-110 transition duration-700"
                                    alt="Galeri 3">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 7. TESTIMONI (CAROUSEL-LIKE) -->
    <section id="testimoni" class="py-24 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-black text-slate-900 mb-4">Apa Kata Jemaah?</h2>
                <p class="text-slate-600">Lebih dari 15,000 jemaah telah mempercayakan perjalanannya bersama kami.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 max-w-5xl mx-auto">
                <div class="bg-white p-8 rounded-3xl shadow-sm border border-slate-100">
                    <div class="flex text-amber-400 mb-4 text-lg"><i class="fa-solid fa-star"></i><i
                            class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                            class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
                    <p class="text-slate-700 mb-8 font-medium leading-relaxed">"Sangat recommended! Aplikasinya sangat
                        transparan soal harga, proses visanya cepat, dan hotel di Makkah benar-benar di pelataran
                        Zam-zam Tower. Sangat nyaman membawa orang tua."</p>
                    <div class="flex items-center gap-4">
                        <img src="{{ asset('images/user1.png') }}" class="w-12 h-12 rounded-full object-cover"
                            alt="User">
                        <div>
                            <p class="font-bold text-slate-900">Dimas Pratama</p>
                            <p class="text-xs text-slate-500 font-semibold uppercase">Jemaah Reguler</p>
                        </div>
                    </div>
                </div>
                <div class="bg-white p-8 rounded-3xl shadow-sm border border-slate-100">
                    <div class="flex text-amber-400 mb-4 text-lg"><i class="fa-solid fa-star"></i><i
                            class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                            class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
                    <p class="text-slate-700 mb-8 font-medium leading-relaxed">"Ikut paket Plus Turki kemarin
                        pelayanannya bintang lima. Muthawwifnya asik, wawasannya luas, dan tour guide di Turki Bahasa
                        Indonesianya sangat fasih. Tidak nyesal milih Mabrur."</p>
                    <div class="flex items-center gap-4">
                        <img src="{{ asset('images/user2.png') }}" class="w-12 h-12 rounded-full object-cover"
                            alt="User">
                        <div>
                            <p class="font-bold text-slate-900">Sarah Wijayanto</p>
                            <p class="text-xs text-slate-500 font-semibold uppercase">Jemaah Umroh Plus</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 8. FAQ (ACCORDION) -->
    <section id="faq" class="py-24 bg-white">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-black text-slate-900">Tanya Jawab Seputar Umroh</h2>
            </div>

            <div class="space-y-4" x-data="{ active: null }">
                <div class="bg-slate-50 rounded-2xl border border-slate-100 overflow-hidden">
                    <button @click="active = active === 1 ? null : 1"
                        class="w-full px-6 py-5 flex justify-between items-center text-left focus:outline-none">
                        <span class="font-bold text-slate-900 text-lg">Apakah harga bisa dicicil?</span>
                        <div class="w-8 h-8 rounded-full bg-white flex items-center justify-center shadow-sm text-primary-600 transition-transform"
                            :class="active === 1 ? 'rotate-180' : ''"><i class="fa-solid fa-chevron-down"></i></div>
                    </button>
                    <div x-show="active === 1" x-collapse>
                        <p class="px-6 pb-6 text-slate-600 font-medium leading-relaxed pt-2">Ya, Anda cukup menyetorkan
                            Uang Muka (DP) sebesar Rp 5.000.000 untuk mendapatkan kursi pesawat (booking seat). Sisa
                            biaya dapat diangsur dan harus lunas maksimal H-45 sebelum tanggal keberangkatan.</p>
                    </div>
                </div>
                <div class="bg-slate-50 rounded-2xl border border-slate-100 overflow-hidden">
                    <button @click="active = active === 2 ? null : 2"
                        class="w-full px-6 py-5 flex justify-between items-center text-left focus:outline-none">
                        <span class="font-bold text-slate-900 text-lg">Apa saja perlengkapan yang didapatkan?</span>
                        <div class="w-8 h-8 rounded-full bg-white flex items-center justify-center shadow-sm text-primary-600 transition-transform"
                            :class="active === 2 ? 'rotate-180' : ''"><i class="fa-solid fa-chevron-down"></i></div>
                    </button>
                    <div x-show="active === 2" x-collapse>
                        <p class="px-6 pb-6 text-slate-600 font-medium leading-relaxed pt-2">Paket kami sudah *All-in*.
                            Anda akan mendapatkan Koper Bagasi 24 inch, Koper Kabin, Tas Paspor, Kain Seragam Batik,
                            Kain Ihram (Pria) / Mukena (Wanita), Buku Panduan Doa, dan ID Card Jemaah.</p>
                    </div>
                </div>
                <div class="bg-slate-50 rounded-2xl border border-slate-100 overflow-hidden">
                    <button @click="active = active === 3 ? null : 3"
                        class="w-full px-6 py-5 flex justify-between items-center text-left focus:outline-none">
                        <span class="font-bold text-slate-900 text-lg">Saya dari luar kota Batam, bagaimana
                            prosesnya?</span>
                        <div class="w-8 h-8 rounded-full bg-white flex items-center justify-center shadow-sm text-primary-600 transition-transform"
                            :class="active === 3 ? 'rotate-180' : ''"><i class="fa-solid fa-chevron-down"></i></div>
                    </button>
                    <div x-show="active === 3" x-collapse>
                        <p class="px-6 pb-6 text-slate-600 font-medium leading-relaxed pt-2">Tidak masalah. Banyak
                            jemaah kami berasal dari luar kota. Perlengkapan akan kami kirim via kurir ke alamat Anda.
                            Titik kumpul utama (Meeting Point) adalah Bandara Soekarno-Hatta Jakarta atau Bandara Hang
                            Nadim Batam sesuai paket yang dipilih.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 9. BLOG / ARTIKEL -->
    <section id="blog" class="py-24 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-end mb-12">
                <h2 class="text-4xl font-black text-slate-900">Tips & Panduan <span
                        class="text-primary-600">Terbaru</span></h2>
                <a href="#"
                    class="hidden md:block font-bold text-primary-600 bg-primary-50 px-6 py-2.5 rounded-full hover:bg-primary-100 transition">Baca
                    Semua Artikel</a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Blog Card -->
                <div
                    class="bg-white rounded-3xl overflow-hidden shadow-sm border border-slate-100 hover:shadow-soft transition group">
                    <div class="h-48 overflow-hidden">
                        <img src="{{ asset('images/tawaf.png') }}"
                            class="w-full h-full object-cover group-hover:scale-105 transition duration-500"
                            alt="Blog 1">
                    </div>
                    <div class="p-6">
                        <div class="flex items-center gap-3 text-xs font-semibold text-slate-500 mb-3">
                            <span class="bg-accent/10 text-accent px-2.5 py-1 rounded-md uppercase">Edukasi</span>
                            <span>12 Ags 2026</span>
                        </div>
                        <h3
                            class="text-xl font-bold text-slate-900 mb-3 group-hover:text-primary-600 transition leading-snug">
                            Panduan Lengkap Tata Cara Tawaf Sesuai Sunnah</h3>
                        <p class="text-slate-600 text-sm mb-4 line-clamp-2 font-medium">Tawaf adalah rukun umroh yang
                            sangat sakral. Mari pelajari syarat sah, doa, dan tata cara mengelilingi Ka'bah yang benar.
                        </p>
                        <a href="#" class="text-primary-600 font-bold text-sm flex items-center gap-2">Baca
                            Selengkapnya <i class="fa-solid fa-arrow-right text-xs"></i></a>
                    </div>
                </div>
                <!-- Blog Card -->
                <div
                    class="bg-white rounded-3xl overflow-hidden shadow-sm border border-slate-100 hover:shadow-soft transition group">
                    <div class="h-48 overflow-hidden">
                        <img src="{{ asset('images/madinah.png') }}"
                            class="w-full h-full object-cover group-hover:scale-105 transition duration-500"
                            alt="Blog 2">
                    </div>
                    <div class="p-6">
                        <div class="flex items-center gap-3 text-xs font-semibold text-slate-500 mb-3">
                            <span class="bg-accent/10 text-accent px-2.5 py-1 rounded-md uppercase">Destinasi</span>
                            <span>05 Ags 2026</span>
                        </div>
                        <h3
                            class="text-xl font-bold text-slate-900 mb-3 group-hover:text-primary-600 transition leading-snug">
                            Keutamaan Shalat di Raudhah Masjid Nabawi</h3>
                        <p class="text-slate-600 text-sm mb-4 line-clamp-2 font-medium">Tempat antara mimbar dan rumah
                            Nabi ini disebut sebagai taman surga. Temukan waktu terbaik untuk bisa masuk ke Raudhah.</p>
                        <a href="#" class="text-primary-600 font-bold text-sm flex items-center gap-2">Baca
                            Selengkapnya <i class="fa-solid fa-arrow-right text-xs"></i></a>
                    </div>
                </div>
                <!-- Blog Card -->
                <div
                    class="bg-white rounded-3xl overflow-hidden shadow-sm border border-slate-100 hover:shadow-soft transition group">
                    <div class="h-48 overflow-hidden">
                        <img src="{{ asset('images/hotel.png') }}"
                            class="w-full h-full object-cover group-hover:scale-105 transition duration-500"
                            alt="Blog 3">
                    </div>
                    <div class="p-6">
                        <div class="flex items-center gap-3 text-xs font-semibold text-slate-500 mb-3">
                            <span class="bg-accent/10 text-accent px-2.5 py-1 rounded-md uppercase">Tips Travel</span>
                            <span>28 Jul 2026</span>
                        </div>
                        <h3
                            class="text-xl font-bold text-slate-900 mb-3 group-hover:text-primary-600 transition leading-snug">
                            Tips Tetap Fit Saat Umroh di Musim Panas Saudi</h3>
                        <p class="text-slate-600 text-sm mb-4 line-clamp-2 font-medium">Menghadapi cuaca panas di
                            Makkah butuh persiapan khusus. Apa saja vitamin dan perlengkapan wajib yang harus dibawa?
                        </p>
                        <a href="#" class="text-primary-600 font-bold text-sm flex items-center gap-2">Baca
                            Selengkapnya <i class="fa-solid fa-arrow-right text-xs"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 10. MODERN FOOTER -->
    <footer class="bg-slate-900 text-slate-300 pt-20 pb-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-16">
                <!-- Brand -->
                <div class="lg:col-span-1">
                    <div class="flex items-center gap-2 mb-6">
                        <div
                            class="w-10 h-10 rounded-xl bg-gradient-to-tr from-primary-500 to-accent flex items-center justify-center text-white">
                            <i class="fa-solid fa-kaaba text-lg"></i>
                        </div>
                        <span class="text-2xl font-black text-white tracking-tight">MABRUR</span>
                    </div>
                    <p class="text-sm text-slate-400 leading-relaxed mb-6">Partner terpercaya untuk perjalanan ibadah
                        Haji & Umroh yang aman, transparan, dan penuh makna.</p>
                    <div class="flex gap-3">
                        <a href="#"
                            class="w-10 h-10 rounded-full bg-slate-800 flex items-center justify-center hover:bg-primary-600 hover:text-white transition"><i
                                class="fa-brands fa-instagram"></i></a>
                        <a href="#"
                            class="w-10 h-10 rounded-full bg-slate-800 flex items-center justify-center hover:bg-primary-600 hover:text-white transition"><i
                                class="fa-brands fa-facebook-f"></i></a>
                        <a href="#"
                            class="w-10 h-10 rounded-full bg-slate-800 flex items-center justify-center hover:bg-primary-600 hover:text-white transition"><i
                                class="fa-brands fa-youtube"></i></a>
                    </div>
                </div>

                <!-- Links -->
                <div>
                    <h4 class="text-white font-bold mb-6 text-lg">Perusahaan</h4>
                    <ul class="space-y-4 text-sm font-medium">
                        <li><a href="#profil" class="hover:text-accent transition">Tentang Kami</a></li>
                        <li><a href="#whyus" class="hover:text-accent transition">Keunggulan Layanan</a></li>
                        <li><a href="#paket" class="hover:text-accent transition">Paket Keberangkatan</a></li>
                        <li><a href="#galeri" class="hover:text-accent transition">Galeri Perjalanan</a></li>
                    </ul>
                </div>

                <!-- Bantuan -->
                <div>
                    <h4 class="text-white font-bold mb-6 text-lg">Bantuan</h4>
                    <ul class="space-y-4 text-sm font-medium">
                        <li><a href="#faq" class="hover:text-accent transition">Pusat Bantuan (FAQ)</a></li>
                        <li><a href="#" class="hover:text-accent transition">Syarat & Ketentuan</a></li>
                        <li><a href="#" class="hover:text-accent transition">Kebijakan Privasi</a></li>
                        <li><a href="#blog" class="hover:text-accent transition">Artikel & Edukasi</a></li>
                    </ul>
                </div>

                <!-- Kontak / App Download -->
                <div>
                    <h4 class="text-white font-bold mb-6 text-lg">Hubungi Kami</h4>
                    <ul class="space-y-3 text-sm font-medium text-slate-400 mb-6">
                        <li class="flex items-start gap-3"><i class="fa-solid fa-location-dot mt-1 text-accent"></i>
                            Batam Centre, Kepulauan Riau</li>
                        <li class="flex items-center gap-3"><i class="fa-solid fa-phone text-accent"></i> +62 812 3456
                            7890</li>
                        <li class="flex items-center gap-3"><i class="fa-solid fa-envelope text-accent"></i>
                            info@mabrurtravel.com</li>
                    </ul>
                    <p class="text-xs font-bold uppercase tracking-wider text-slate-500 mb-2">Legalitas Kemenag RI</p>
                    <p
                        class="text-sm font-bold text-white bg-slate-800 inline-block px-3 py-1.5 rounded-lg border border-slate-700">
                        PPIU No. U.123/2023</p>
                </div>
            </div>

            <div
                class="border-t border-slate-800 pt-8 flex flex-col md:flex-row justify-between items-center gap-4 text-sm text-slate-500 font-medium">
                <p>&copy; 2026 PT. Mabrur Travel Umroh. All rights reserved.</p>
                <p>Designed with <i class="fa-solid fa-heart text-red-500 mx-1"></i> for Tamu Allah</p>
            </div>
        </div>
    </footer>

</body>

</html>
