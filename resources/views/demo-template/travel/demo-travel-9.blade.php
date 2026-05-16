<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mabrur Travel - Warm Sunset Theme</title>

    <!-- Tailwind CSS & Alpine JS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Fonts: Crimson Pro (Poetic Serif) & Outfit (Modern Sans) -->
    <link
        href="https://fonts.googleapis.com/css2?family=Crimson+Pro:ital,wght@0,400;0,500;0,600;0,700;1,400&family=Outfit:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        terracotta: {
                            50: '#fff7ed', // Warm Sand
                            100: '#ffedd5',
                            500: '#f97316',
                            600: '#ea580c', // Main Accent
                            700: '#c2410c',
                            800: '#9a3412', // Deep Rust
                            900: '#7c2d12',
                            950: '#431407', // Deep Brown/Black
                        }
                    },
                    fontFamily: {
                        sans: ['Outfit', 'sans-serif'],
                        serif: ['Crimson Pro', 'serif'],
                    }
                }
            }
        }
    </script>

    <style>
        body {
            font-family: 'Outfit', sans-serif;
            background-color: #fff7ed;
            color: #431407;
        }

        [x-cloak] {
            display: none !important;
        }

        /* Sunset Gradient for Hero */
        .sunset-gradient {
            background: linear-gradient(135deg, rgba(67, 20, 7, 0.9) 0%, rgba(124, 45, 18, 0.7) 100%);
        }

        /* Image styling */
        .soft-edge {
            border-radius: 40px 0 40px 0;
        }
    </style>
</head>

<body class="antialiased selection:bg-terracotta-600 selection:text-white">

    <!-- 1. WARM NAVBAR -->
    <nav x-data="{ mobileMenu: false, scrolled: false }" @scroll.window="scrolled = (window.pageYOffset > 20)"
        class="fixed w-full z-50 transition-all duration-300"
        :class="scrolled ? 'bg-terracotta-50/95 backdrop-blur-md shadow-md border-b border-terracotta-200 py-3' :
            'bg-transparent py-6'">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center gap-2">
                    <i class="fa-solid fa-mosque text-2xl transition-colors duration-300"
                        :class="scrolled ? 'text-terracotta-700' : 'text-terracotta-500'"></i>
                    <span class="text-2xl font-serif font-bold tracking-wide transition-colors duration-300"
                        :class="scrolled ? 'text-terracotta-950' : 'text-white'">
                        Mabrur<span class="text-terracotta-600">Travel</span>
                    </span>
                </div>

                <!-- Desktop Menu -->
                <div class="hidden lg:flex space-x-8 items-center text-sm font-medium transition-colors duration-300"
                    :class="scrolled ? 'text-terracotta-900' : 'text-white'">
                    <a href="#profil" class="hover:text-terracotta-500 transition">Profil Kami</a>
                    <a href="#whyus" class="hover:text-terracotta-500 transition">Pelayanan</a>
                    <a href="#paket" class="hover:text-terracotta-500 transition">Katalog Paket</a>
                    <a href="#galeri" class="hover:text-terracotta-500 transition">Galeri</a>
                    <a href="#faq" class="hover:text-terracotta-500 transition">FAQ</a>
                    <a href="#blog" class="hover:text-terracotta-500 transition">Artikel</a>
                </div>

                <!-- Desktop CTA -->
                <div class="hidden lg:block">
                    <a href="#"
                        class="px-6 py-2.5 rounded-full font-bold transition shadow-lg flex items-center gap-2"
                        :class="scrolled ? 'bg-terracotta-700 text-white hover:bg-terracotta-800' :
                            'bg-terracotta-500 text-white hover:bg-terracotta-600'">
                        Hubungi Kami
                    </a>
                </div>

                <!-- Mobile Button -->
                <div class="lg:hidden">
                    <button @click="mobileMenu = !mobileMenu" class="focus:outline-none transition-colors duration-300"
                        :class="scrolled ? 'text-terracotta-900' : 'text-white'">
                        <i class="fa-solid text-2xl" :class="mobileMenu ? 'fa-xmark' : 'fa-bars'"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div x-cloak x-show="mobileMenu" x-transition
            class="lg:hidden bg-terracotta-50 absolute w-full top-full left-0 shadow-2xl border-t border-terracotta-200">
            <div class="px-6 py-6 flex flex-col space-y-4">
                <a href="#profil" @click="mobileMenu = false"
                    class="text-terracotta-900 font-medium hover:text-terracotta-600 text-lg border-b border-terracotta-200 pb-2">Profil
                    Kami</a>
                <a href="#whyus" @click="mobileMenu = false"
                    class="text-terracotta-900 font-medium hover:text-terracotta-600 text-lg border-b border-terracotta-200 pb-2">Pelayanan</a>
                <a href="#paket" @click="mobileMenu = false"
                    class="text-terracotta-900 font-medium hover:text-terracotta-600 text-lg border-b border-terracotta-200 pb-2">Katalog
                    Paket</a>
                <a href="#galeri" @click="mobileMenu = false"
                    class="text-terracotta-900 font-medium hover:text-terracotta-600 text-lg border-b border-terracotta-200 pb-2">Galeri</a>
                <a href="#testimoni" @click="mobileMenu = false"
                    class="text-terracotta-900 font-medium hover:text-terracotta-600 text-lg border-b border-terracotta-200 pb-2">Testimoni</a>
                <a href="#blog" @click="mobileMenu = false"
                    class="text-terracotta-900 font-medium hover:text-terracotta-600 text-lg border-b border-terracotta-200 pb-2">Artikel</a>
                <a href="#"
                    class="bg-terracotta-700 text-white text-center py-3 rounded-full font-bold text-lg mt-4 shadow-md">Chat
                    Admin</a>
            </div>
        </div>
    </nav>

    <!-- 2. HERO SECTION -->
    <section class="relative min-h-[90vh] flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('images/mekkah.png') }}" class="w-full h-full object-cover" alt="Mekkah Background">
            <div class="absolute inset-0 sunset-gradient"></div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full mt-20">
            <div class="max-w-3xl">
                <span
                    class="text-terracotta-500 font-bold tracking-widest text-sm mb-4 block uppercase border-l-4 border-terracotta-500 pl-3">Biro
                    Umroh & Haji Khusus</span>
                <h1 class="text-4xl md:text-6xl lg:text-7xl font-serif font-bold text-white leading-tight mb-6">
                    Panggilan Suci, <br>
                    Terjawab dengan <span class="italic text-terracotta-500">Sempurna.</span>
                </h1>
                <p class="text-lg md:text-xl text-terracotta-100 mb-10 max-w-xl leading-relaxed">
                    Kami menghadirkan kehangatan pelayanan layaknya keluarga sendiri. Mengantarkan Anda beribadah dengan
                    tenang, aman, dan berpedoman teguh pada sunnah Rasulullah ﷺ.
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="#paket"
                        class="bg-terracotta-600 text-white px-8 py-4 rounded-full font-bold hover:bg-terracotta-700 transition shadow-xl text-center">
                        Lihat Keberangkatan 2026
                    </a>
                    <a href="#profil"
                        class="bg-transparent border border-terracotta-100/50 text-white px-8 py-4 rounded-full font-bold hover:bg-white/10 transition text-center flex items-center justify-center gap-2">
                        Mengapa Memilih Kami <i class="fa-solid fa-arrow-down"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. TRUST BANNER -->
    <section class="bg-terracotta-950 py-8 border-b-4 border-terracotta-600">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div
                class="flex flex-wrap justify-center lg:justify-between items-center gap-8 text-terracotta-200/60 font-semibold text-sm lg:text-base">
                <div class="flex items-center gap-2"><i class="fa-solid fa-plane text-xl"></i> Saudi Airlines & Garuda
                </div>
                <div class="flex items-center gap-2"><i class="fa-solid fa-building-shield text-xl"></i> Izin PPIU No.
                    U.123/2023</div>
                <div class="flex items-center gap-2"><i class="fa-solid fa-bed text-xl"></i> Akomodasi Ring 1 & 2</div>
                <div class="flex items-center gap-2"><i class="fa-solid fa-users text-xl"></i> Asatidz Berpengalaman
                </div>
            </div>
        </div>
    </section>

    <!-- 4. PROFILE & FOUNDER -->
    <section id="profil" class="py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row gap-16 items-center">
                <div class="w-full lg:w-1/2 relative">
                    <!-- Image with custom shape -->
                    <img src="{{ asset('images/tawaf.png') }}" alt="Tawaf"
                        class="w-full h-[500px] object-cover soft-edge shadow-2xl relative z-10">
                    <!-- Decoration -->
                    <div class="absolute -top-6 -left-6 w-full h-full border-4 border-terracotta-200 soft-edge z-0">
                    </div>
                </div>

                <div class="w-full lg:w-1/2">
                    <h2 class="text-terracotta-600 font-bold uppercase tracking-widest text-sm mb-3">Kisah Kami</h2>
                    <h3 class="text-4xl lg:text-5xl font-serif font-bold text-terracotta-950 mb-6 leading-tight">
                        Kehangatan Pelayanan Layaknya Keluarga.</h3>
                    <p class="text-terracotta-900/80 mb-6 leading-relaxed text-lg">
                        Mabrur Travel didirikan dengan satu niat tulus: memastikan setiap tamu Allah mendapatkan hak
                        pelayanan dan bimbingan ibadah yang maksimal tanpa harus mengkhawatirkan hal-hal teknis.
                    </p>
                    <p class="text-terracotta-900/80 mb-8 leading-relaxed">
                        Mulai dari pengurusan visa, blok tiket pesawat komersial, pemilihan hotel yang bersih dan dekat,
                        hingga penyediaan katering cita rasa Nusantara, semuanya diawasi langsung oleh tim internal kami
                        yang berdedikasi.
                    </p>

                    <div
                        class="bg-terracotta-100 p-6 rounded-3xl flex items-center gap-5 border border-terracotta-200">
                        <img src="{{ asset('images/owner.png') }}" alt="Founder"
                            class="w-16 h-16 rounded-full object-cover border-2 border-terracotta-500">
                        <div>
                            <p class="text-terracotta-950 font-bold text-lg font-serif">H. Harianto Rais</p>
                            <p class="text-terracotta-700 text-sm">Founder & Direktur</p>
                        </div>
                        <div class="ml-auto hidden sm:block text-terracotta-300">
                            <i class="fa-solid fa-quote-right text-4xl"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. WHY US -->
    <section id="whyus" class="py-24 bg-terracotta-900 text-terracotta-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h2 class="text-terracotta-400 font-bold uppercase tracking-widest text-sm mb-3">Komitmen Kami</h2>
                <h3 class="text-4xl lg:text-5xl font-serif font-bold mb-6">Empat Pilar Pelayanan Mabrur Travel</h3>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Feature 1 -->
                <div
                    class="bg-terracotta-800/50 p-8 rounded-3xl border border-terracotta-800 hover:bg-terracotta-800 transition duration-300">
                    <div
                        class="w-14 h-14 bg-terracotta-950 text-terracotta-500 rounded-full flex items-center justify-center text-2xl mb-6">
                        <i class="fa-solid fa-shield-check"></i>
                    </div>
                    <h4 class="text-xl font-bold mb-3 font-serif">Aman & Resmi</h4>
                    <p class="text-terracotta-200/80 text-sm leading-relaxed">Berizin resmi Kemenag RI. Pembayaran
                        langsung ke rekening PT untuk keamanan dana Anda.</p>
                </div>
                <!-- Feature 2 -->
                <div
                    class="bg-terracotta-800/50 p-8 rounded-3xl border border-terracotta-800 hover:bg-terracotta-800 transition duration-300">
                    <div
                        class="w-14 h-14 bg-terracotta-950 text-terracotta-500 rounded-full flex items-center justify-center text-2xl mb-6">
                        <i class="fa-solid fa-book-quran"></i>
                    </div>
                    <h4 class="text-xl font-bold mb-3 font-serif">Sesuai Sunnah</h4>
                    <p class="text-terracotta-200/80 text-sm leading-relaxed">Kurikulum manasik yang jelas dan sesuai
                        dalil. Dibimbing Asatidz lulusan universitas Timur Tengah.</p>
                </div>
                <!-- Feature 3 -->
                <div
                    class="bg-terracotta-800/50 p-8 rounded-3xl border border-terracotta-800 hover:bg-terracotta-800 transition duration-300">
                    <div
                        class="w-14 h-14 bg-terracotta-950 text-terracotta-500 rounded-full flex items-center justify-center text-2xl mb-6">
                        <i class="fa-solid fa-hotel"></i>
                    </div>
                    <h4 class="text-xl font-bold mb-3 font-serif">Akomodasi Nyaman</h4>
                    <p class="text-terracotta-200/80 text-sm leading-relaxed">Hotel bintang 4 dan 5 di ring 1,
                        memastikan akses jalan kaki yang dekat menuju pelataran masjid.</p>
                </div>
                <!-- Feature 4 -->
                <div
                    class="bg-terracotta-800/50 p-8 rounded-3xl border border-terracotta-800 hover:bg-terracotta-800 transition duration-300">
                    <div
                        class="w-14 h-14 bg-terracotta-950 text-terracotta-500 rounded-full flex items-center justify-center text-2xl mb-6">
                        <i class="fa-solid fa-plane-departure"></i>
                    </div>
                    <h4 class="text-xl font-bold mb-3 font-serif">Tiket Terjamin</h4>
                    <p class="text-terracotta-200/80 text-sm leading-relaxed">Sistem block-seat jauh hari memastikan
                        jadwal keberangkatan Anda tidak akan mengalami *reschedule* sepihak.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 6. PAKET IBADAH -->
    <section id="paket" class="py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-2xl mx-auto mb-16">
                <h2 class="text-terracotta-600 font-bold uppercase tracking-widest text-sm mb-3">Katalog Program</h2>
                <h3 class="text-4xl lg:text-5xl font-serif font-bold text-terracotta-950 mb-6">Pilihan Paket Ibadah
                    All-In</h3>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-center">
                <!-- Paket 1 -->
                <div
                    class="bg-white rounded-3xl border border-terracotta-200 p-8 shadow-sm hover:shadow-lg transition duration-300">
                    <div class="h-48 rounded-2xl overflow-hidden mb-6 relative">
                        <img src="{{ asset('images/madinah.png') }}"
                            class="w-full h-full object-cover hover:scale-105 transition duration-500" alt="Reguler">
                    </div>
                    <span
                        class="bg-terracotta-100 text-terracotta-800 text-xs font-bold uppercase tracking-wider px-3 py-1 rounded-full mb-4 inline-block">Program
                        9 Hari</span>
                    <h4 class="text-2xl font-serif font-bold text-terracotta-950 mb-2">Umroh Reguler</h4>
                    <p class="text-3xl font-bold text-terracotta-600 mb-6">Rp 28.5 <span
                            class="text-base font-normal text-terracotta-900/60">Juta / pax</span></p>

                    <ul class="space-y-3 text-terracotta-950/80 mb-8 text-sm">
                        <li class="flex items-center gap-3"><i class="fa-solid fa-check text-terracotta-500"></i>
                            Hotel Bintang 4 (Makkah & Madinah)</li>
                        <li class="flex items-center gap-3"><i class="fa-solid fa-check text-terracotta-500"></i>
                            Pesawat Ekonomi PP</li>
                        <li class="flex items-center gap-3"><i class="fa-solid fa-check text-terracotta-500"></i>
                            Fullboard Katering Nusantara</li>
                    </ul>
                    <a href="#"
                        class="block text-center border border-terracotta-300 text-terracotta-900 py-3 rounded-full font-bold hover:bg-terracotta-50 transition">Detail
                        Paket</a>
                </div>

                <!-- Paket 2 (Featured) -->
                <div
                    class="bg-terracotta-950 rounded-3xl p-8 shadow-2xl transform lg:-translate-y-4 relative text-terracotta-50">
                    <div
                        class="absolute top-0 right-8 bg-terracotta-500 text-white text-xs font-bold uppercase tracking-wider px-4 py-1.5 rounded-b-lg">
                        Paling Diminati</div>
                    <div class="h-48 rounded-2xl overflow-hidden mb-6 relative border border-terracotta-800">
                        <img src="{{ asset('images/hotel.png') }}"
                            class="w-full h-full object-cover opacity-80 hover:scale-105 transition duration-500"
                            alt="Premium">
                    </div>
                    <span
                        class="bg-terracotta-800 text-terracotta-200 text-xs font-bold uppercase tracking-wider px-3 py-1 rounded-full mb-4 inline-block">Program
                        12 Hari</span>
                    <h4 class="text-2xl font-serif font-bold text-white mb-2">Umroh Plus Turki</h4>
                    <p class="text-3xl font-bold text-terracotta-400 mb-6">Rp 37.0 <span
                            class="text-base font-normal text-terracotta-200/60">Juta / pax</span></p>

                    <ul class="space-y-3 text-terracotta-200 mb-8 text-sm">
                        <li class="flex items-center gap-3"><i class="fa-solid fa-star text-terracotta-500"></i>
                            Direct Flight Turkish Airlines</li>
                        <li class="flex items-center gap-3"><i class="fa-solid fa-star text-terracotta-500"></i> Hotel
                            Bintang 5 (Ring 1)</li>
                        <li class="flex items-center gap-3"><i class="fa-solid fa-star text-terracotta-500"></i> City
                            Tour Istanbul & Bursa 3 Hari</li>
                    </ul>
                    <a href="#"
                        class="block text-center bg-terracotta-600 text-white py-4 rounded-full font-bold hover:bg-terracotta-500 transition shadow-lg">Booking
                        Sekarang</a>
                </div>

                <!-- Paket 3 -->
                <div
                    class="bg-white rounded-3xl border border-terracotta-200 p-8 shadow-sm hover:shadow-lg transition duration-300">
                    <div class="h-48 rounded-2xl overflow-hidden mb-6 relative">
                        <img src="{{ asset('images/tawaf.png') }}"
                            class="w-full h-full object-cover hover:scale-105 transition duration-500"
                            alt="Haji Plus">
                    </div>
                    <span
                        class="bg-terracotta-100 text-terracotta-800 text-xs font-bold uppercase tracking-wider px-3 py-1 rounded-full mb-4 inline-block">Masa
                        Tunggu Cepat</span>
                    <h4 class="text-2xl font-serif font-bold text-terracotta-950 mb-2">Haji Khusus (ONH)</h4>
                    <p class="text-3xl font-bold text-terracotta-600 mb-6">$ 12,500 <span
                            class="text-base font-normal text-terracotta-900/60">Mulai dari</span></p>

                    <ul class="space-y-3 text-terracotta-950/80 mb-8 text-sm">
                        <li class="flex items-center gap-3"><i class="fa-solid fa-check text-terracotta-500"></i>
                            Kuota Resmi Haji Kemenag RI</li>
                        <li class="flex items-center gap-3"><i class="fa-solid fa-check text-terracotta-500"></i>
                            Maktab Tenda VIP Arafah-Mina</li>
                        <li class="flex items-center gap-3"><i class="fa-solid fa-check text-terracotta-500"></i>
                            Didampingi Dokter Medis Pribadi</li>
                    </ul>
                    <a href="#"
                        class="block text-center border border-terracotta-300 text-terracotta-900 py-3 rounded-full font-bold hover:bg-terracotta-50 transition">Konsultasi
                        Haji</a>
                </div>
            </div>
        </div>
    </section>

    <!-- 7. GALERI -->
    <section id="galeri" class="py-24 bg-terracotta-100/50 border-y border-terracotta-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-end gap-6 mb-12">
                <div>
                    <h2 class="text-terracotta-600 font-bold uppercase tracking-widest text-sm mb-3">Dokumentasi</h2>
                    <h3 class="text-4xl font-serif font-bold text-terracotta-950">Galeri Jemaah Kami</h3>
                </div>
                <a href="#"
                    class="font-bold text-terracotta-800 hover:text-terracotta-600 transition flex items-center gap-2">Follow
                    Instagram <i class="fa-brands fa-instagram"></i></a>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                <div class="col-span-2 md:col-span-1 rounded-3xl overflow-hidden h-[300px]">
                    <img src="{{ asset('images/mekkah.png') }}"
                        class="w-full h-full object-cover hover:scale-105 transition duration-700" alt="Mekkah">
                </div>
                <div class="rounded-3xl overflow-hidden h-[300px]">
                    <img src="{{ asset('images/madinah.png') }}"
                        class="w-full h-full object-cover hover:scale-105 transition duration-700" alt="Madinah">
                </div>
                <div class="rounded-3xl overflow-hidden h-[300px]">
                    <img src="{{ asset('images/hotel.png') }}"
                        class="w-full h-full object-cover hover:scale-105 transition duration-700" alt="Hotel">
                </div>
            </div>
        </div>
    </section>

    <!-- 8. TESTIMONI -->
    <section id="testimoni" class="py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h3 class="text-4xl lg:text-5xl font-serif font-bold text-terracotta-950 mb-6">Cerita Tamu Allah</h3>
                <p class="text-terracotta-900/80 text-lg">Alhamdulillah, ribuan jemaah telah mempercayakan perjalanan
                    sucinya kepada kami.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-5xl mx-auto">
                <!-- Testi 1 -->
                <div class="bg-white p-10 rounded-3xl shadow-sm border border-terracotta-200 relative">
                    <i class="fa-solid fa-quote-left absolute top-8 left-8 text-5xl text-terracotta-100"></i>
                    <div class="relative z-10 pl-16">
                        <div class="flex text-amber-500 mb-4 text-sm"><i class="fa-solid fa-star"></i><i
                                class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
                        <p class="text-terracotta-900/80 mb-8 leading-relaxed text-lg">"Proses booking sangat mudah, CS
                            responsif. Selama di Makkah muthawwif membimbing dengan sabar, terutama bagi lansia seperti
                            orang tua saya. Terima kasih Mabrur Travel."</p>
                        <div class="flex items-center gap-4">
                            <img src="{{ asset('images/user1.png') }}" alt="User 1"
                                class="w-14 h-14 rounded-full object-cover border border-terracotta-200">
                            <div>
                                <p class="font-bold text-terracotta-950">Ahmad Zulfikar</p>
                                <p class="text-xs text-terracotta-600 font-bold uppercase tracking-widest">Umroh
                                    Reguler</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Testi 2 -->
                <div class="bg-white p-10 rounded-3xl shadow-sm border border-terracotta-200 relative">
                    <i class="fa-solid fa-quote-left absolute top-8 left-8 text-5xl text-terracotta-100"></i>
                    <div class="relative z-10 pl-16">
                        <div class="flex text-amber-500 mb-4 text-sm"><i class="fa-solid fa-star"></i><i
                                class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
                        <p class="text-terracotta-900/80 mb-8 leading-relaxed text-lg">"Hotelnya persis di pelataran
                            masjid, turun lift langsung shaf shalat. Makanannya enak sesuai selera Nusantara. Ibadah
                            jadi jauh lebih fokus dan tidak gampang lelah."</p>
                        <div class="flex items-center gap-4">
                            <img src="{{ asset('images/user2.png') }}" alt="User 2"
                                class="w-14 h-14 rounded-full object-cover border border-terracotta-200">
                            <div>
                                <p class="font-bold text-terracotta-950">Hj. Maryam</p>
                                <p class="text-xs text-terracotta-600 font-bold uppercase tracking-widest">Umroh
                                    Premium</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 9. FAQ -->
    <section id="faq" class="py-24 bg-terracotta-950 text-terracotta-50">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h3 class="text-4xl font-serif font-bold mb-4">Pertanyaan Umum</h3>
                <p class="text-terracotta-200">Hal-hal yang sering ditanyakan sebelum mendaftar.</p>
            </div>

            <div class="space-y-4" x-data="{ active: null }">
                <!-- FAQ 1 -->
                <div class="bg-terracotta-900 rounded-2xl border border-terracotta-800 overflow-hidden">
                    <button @click="active = active === 1 ? null : 1"
                        class="w-full px-6 py-5 flex justify-between items-center text-left focus:outline-none">
                        <span class="font-bold text-lg">Apa saja syarat mendaftar Umroh?</span>
                        <div class="w-8 h-8 rounded-full bg-terracotta-800 flex items-center justify-center text-white transition-transform"
                            :class="active === 1 ? 'rotate-180' : ''"><i class="fa-solid fa-chevron-down"></i></div>
                    </button>
                    <div x-show="active === 1" x-collapse>
                        <p class="px-6 pb-6 text-terracotta-200 font-light leading-relaxed pt-2">Dokumen utama yang
                            diperlukan adalah Paspor Asli (masa berlaku sisa minimal 7 bulan), KTP, KK, Pas Foto 4x6
                            latar putih, dan Buku Vaksin Meningitis.</p>
                    </div>
                </div>
                <!-- FAQ 2 -->
                <div class="bg-terracotta-900 rounded-2xl border border-terracotta-800 overflow-hidden">
                    <button @click="active = active === 2 ? null : 2"
                        class="w-full px-6 py-5 flex justify-between items-center text-left focus:outline-none">
                        <span class="font-bold text-lg">Apakah pembayaran dapat diangsur?</span>
                        <div class="w-8 h-8 rounded-full bg-terracotta-800 flex items-center justify-center text-white transition-transform"
                            :class="active === 2 ? 'rotate-180' : ''"><i class="fa-solid fa-chevron-down"></i></div>
                    </button>
                    <div x-show="active === 2" x-collapse>
                        <p class="px-6 pb-6 text-terracotta-200 font-light leading-relaxed pt-2">Bisa. Anda cukup
                            membayar Uang Muka (DP) Rp 5.000.000 untuk *booking seat*. Sisa biaya dapat dilunasi secara
                            bertahap maksimal 45 hari sebelum jadwal berangkat.</p>
                    </div>
                </div>
                <!-- FAQ 3 -->
                <div class="bg-terracotta-900 rounded-2xl border border-terracotta-800 overflow-hidden">
                    <button @click="active = active === 3 ? null : 3"
                        class="w-full px-6 py-5 flex justify-between items-center text-left focus:outline-none">
                        <span class="font-bold text-lg">Apakah harga sudah termasuk perlengkapan?</span>
                        <div class="w-8 h-8 rounded-full bg-terracotta-800 flex items-center justify-center text-white transition-transform"
                            :class="active === 3 ? 'rotate-180' : ''"><i class="fa-solid fa-chevron-down"></i></div>
                    </button>
                    <div x-show="active === 3" x-collapse>
                        <p class="px-6 pb-6 text-terracotta-200 font-light leading-relaxed pt-2">Ya, paket kami
                            bersifat *All-in*. Sudah termasuk koper bagasi 24 inch, tas kabin, kain ihram (pria) /
                            mukena (wanita), buku panduan, seragam batik, dan air zam-zam.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 10. BLOG -->
    <section id="blog" class="py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-end mb-12">
                <div>
                    <h2 class="text-terracotta-600 font-bold uppercase tracking-widest text-sm mb-3">Wawasan & Edukasi
                    </h2>
                    <h3 class="text-4xl font-serif font-bold text-terracotta-950">Artikel Terkini</h3>
                </div>
                <a href="#"
                    class="hidden md:inline-block font-bold text-terracotta-800 hover:text-terracotta-600 transition">Lihat
                    Semua Blog &rarr;</a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <article
                    class="bg-white rounded-3xl overflow-hidden shadow-sm border border-terracotta-200 hover:shadow-lg transition">
                    <img src="{{ asset('images/tawaf.png') }}" class="w-full h-52 object-cover" alt="Blog 1">
                    <div class="p-6">
                        <p class="text-terracotta-500 text-xs font-bold uppercase tracking-widest mb-2">Panduan Ibadah
                        </p>
                        <h4
                            class="text-xl font-serif font-bold text-terracotta-950 mb-3 hover:text-terracotta-600 transition cursor-pointer">
                            Syarat dan Rukun Tawaf Sesuai Sunnah</h4>
                        <p class="text-terracotta-900/70 text-sm mb-4 line-clamp-2">Pahami tata cara mengelilingi
                            Ka'bah yang benar agar ibadah umroh Anda sah dan mabrur.</p>
                        <a href="#"
                            class="font-bold text-sm text-terracotta-800 flex items-center gap-1">Selengkapnya <i
                                class="fa-solid fa-angle-right"></i></a>
                    </div>
                </article>
                <article
                    class="bg-white rounded-3xl overflow-hidden shadow-sm border border-terracotta-200 hover:shadow-lg transition">
                    <img src="{{ asset('images/madinah.png') }}" class="w-full h-52 object-cover" alt="Blog 2">
                    <div class="p-6">
                        <p class="text-terracotta-500 text-xs font-bold uppercase tracking-widest mb-2">Destinasi</p>
                        <h4
                            class="text-xl font-serif font-bold text-terracotta-950 mb-3 hover:text-terracotta-600 transition cursor-pointer">
                            Adab Ziarah di Masjid Nabawi & Raudhah</h4>
                        <p class="text-terracotta-900/70 text-sm mb-4 line-clamp-2">Masuk ke taman surga (Raudhah)
                            butuh ketenangan. Ketahui adab-adab saat berada di kota Rasulullah ﷺ.</p>
                        <a href="#"
                            class="font-bold text-sm text-terracotta-800 flex items-center gap-1">Selengkapnya <i
                                class="fa-solid fa-angle-right"></i></a>
                    </div>
                </article>
                <article
                    class="bg-white rounded-3xl overflow-hidden shadow-sm border border-terracotta-200 hover:shadow-lg transition">
                    <img src="{{ asset('images/hotel.png') }}" class="w-full h-52 object-cover" alt="Blog 3">
                    <div class="p-6">
                        <p class="text-terracotta-500 text-xs font-bold uppercase tracking-widest mb-2">Tips Travel</p>
                        <h4
                            class="text-xl font-serif font-bold text-terracotta-950 mb-3 hover:text-terracotta-600 transition cursor-pointer">
                            Persiapan Fisik Umroh Lansia</h4>
                        <p class="text-terracotta-900/70 text-sm mb-4 line-clamp-2">Tips menjaga stamina dan barang apa
                            saja yang wajib dibawa jika memberangkatkan orang tua yang sudah sepuh.</p>
                        <a href="#"
                            class="font-bold text-sm text-terracotta-800 flex items-center gap-1">Selengkapnya <i
                                class="fa-solid fa-angle-right"></i></a>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- 11. FOOTER -->
    <footer class="bg-terracotta-50 border-t border-terracotta-200 pt-20 pb-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-16">
                <!-- Brand Info -->
                <div class="md:col-span-1">
                    <div class="flex items-center gap-2 mb-6">
                        <i class="fa-solid fa-mosque text-2xl text-terracotta-600"></i>
                        <span class="text-2xl font-serif font-bold tracking-wide text-terracotta-950">Mabrur.</span>
                    </div>
                    <p class="text-sm leading-relaxed text-terracotta-900/80 mb-6 font-medium">Biro perjalanan haji &
                        umroh terpercaya yang melayani tamu Allah dengan kehangatan dan profesionalisme.</p>
                    <div class="flex gap-4">
                        <a href="#"
                            class="w-10 h-10 rounded-full border border-terracotta-300 flex items-center justify-center text-terracotta-700 hover:bg-terracotta-600 hover:text-white transition"><i
                                class="fa-brands fa-instagram"></i></a>
                        <a href="#"
                            class="w-10 h-10 rounded-full border border-terracotta-300 flex items-center justify-center text-terracotta-700 hover:bg-terracotta-600 hover:text-white transition"><i
                                class="fa-brands fa-facebook-f"></i></a>
                        <a href="#"
                            class="w-10 h-10 rounded-full border border-terracotta-300 flex items-center justify-center text-terracotta-700 hover:bg-terracotta-600 hover:text-white transition"><i
                                class="fa-brands fa-youtube"></i></a>
                    </div>
                </div>

                <!-- Tautan Perusahaan -->
                <div>
                    <h4 class="font-bold text-terracotta-950 uppercase tracking-widest text-xs mb-6">Perusahaan</h4>
                    <ul class="space-y-4 text-sm font-medium text-terracotta-800">
                        <li><a href="#profil" class="hover:text-terracotta-500 transition">Tentang Kami</a></li>
                        <li><a href="#whyus" class="hover:text-terracotta-500 transition">Keunggulan Layanan</a></li>
                        <li><a href="#paket" class="hover:text-terracotta-500 transition">Katalog Paket Ibadah</a>
                        </li>
                        <li><a href="#galeri" class="hover:text-terracotta-500 transition">Galeri Perjalanan</a></li>
                    </ul>
                </div>

                <!-- Informasi -->
                <div>
                    <h4 class="font-bold text-terracotta-950 uppercase tracking-widest text-xs mb-6">Pusat Bantuan</h4>
                    <ul class="space-y-4 text-sm font-medium text-terracotta-800">
                        <li><a href="#faq" class="hover:text-terracotta-500 transition">Pertanyaan Umum (FAQ)</a>
                        </li>
                        <li><a href="#" class="hover:text-terracotta-500 transition">Syarat & Ketentuan</a></li>
                        <li><a href="#" class="hover:text-terracotta-500 transition">Kebijakan Privasi</a></li>
                        <li><a href="#blog" class="hover:text-terracotta-500 transition">Artikel & Edukasi</a></li>
                    </ul>
                </div>

                <!-- Kontak -->
                <div>
                    <h4 class="font-bold text-terracotta-950 uppercase tracking-widest text-xs mb-6">Hubungi Kami</h4>
                    <ul class="space-y-4 text-sm font-medium text-terracotta-800 mb-6">
                        <li class="flex items-start gap-3"><i
                                class="fa-solid fa-map-pin mt-1 text-terracotta-500"></i> Batam Centre, Kepulauan Riau,
                            Indonesia.</li>
                        <li class="flex items-center gap-3"><i class="fa-solid fa-phone text-terracotta-500"></i> +62
                            812 3456 7890</li>
                        <li class="flex items-center gap-3"><i class="fa-solid fa-envelope text-terracotta-500"></i>
                            salam@mabrurtravel.com</li>
                    </ul>
                    <p class="text-xs font-bold uppercase tracking-widest text-terracotta-500 mb-1">Legalitas PPIU</p>
                    <p class="font-bold text-terracotta-950">SK Kemenag No. U.123/2023</p>
                </div>
            </div>

            <div
                class="border-t border-terracotta-200 pt-8 flex flex-col md:flex-row justify-between items-center gap-4 text-sm font-medium text-terracotta-900/60">
                <p>&copy; 2026 PT. Mabrur Travel Indonesia. All rights reserved.</p>
                <p>Membantu Tamu Allah Sejak 2008.</p>
            </div>
        </div>
    </footer>

</body>

</html>
