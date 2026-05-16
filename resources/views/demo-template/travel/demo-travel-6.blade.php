<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mabrur Travel - Earthy & Peaceful Theme</title>

    <!-- Tailwind CSS & Alpine JS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Fonts: Cormorant Garamond (Elegant Serif) & Manrope (Clean Modern Sans) -->
    <link
        href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;0,700;1,400&family=Manrope:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        sand: {
                            50: '#FCFAF8',
                            100: '#F9F6F0', // Main BG
                            200: '#EAE1D3', // Border/Accent
                            800: '#8A7A61', // Soft Text
                        },
                        sage: {
                            600: '#4A6750', // Primary Buttons
                            800: '#2C3F30', // Headings
                            900: '#1D2A20', // Dark contrast
                        },
                        terracotta: '#C17754' // Accent color
                    },
                    fontFamily: {
                        sans: ['Manrope', 'sans-serif'],
                        serif: ['Cormorant Garamond', 'serif'],
                    }
                }
            }
        }
    </script>

    <style>
        body {
            background-color: #F9F6F0;
            color: #2C3F30;
        }

        [x-cloak] {
            display: none !important;
        }

        /* Islamic Arch Shape */
        .arch-shape {
            border-radius: 999px 999px 0 0;
        }

        /* Soft Floating Navbar */
        .floating-nav {
            background: rgba(249, 246, 240, 0.85);
            backdrop-filter: blur(16px);
            box-shadow: 0 10px 40px rgba(44, 63, 48, 0.08);
        }
    </style>
</head>

<body class="antialiased selection:bg-sage-600 selection:text-sand-50">

    <!-- 1. FLOATING PILL NAVIGATION -->
    <div class="fixed w-full z-50 top-4 px-4 sm:px-6 lg:px-8 pointer-events-none">
        <nav x-data="{ mobileMenu: false }"
            class="max-w-7xl mx-auto floating-nav rounded-full px-6 py-3 md:py-4 flex justify-between items-center pointer-events-auto border border-sand-200/50 transition-all">
            <!-- Logo -->
            <div class="flex-shrink-0 flex items-center gap-2">
                <i class="fa-solid fa-mosque text-sage-600 text-xl"></i>
                <span class="text-xl font-serif font-bold text-sage-900 tracking-wide">Mabrur.</span>
            </div>

            <!-- Desktop Menu -->
            <div class="hidden lg:flex space-x-8 items-center text-sm font-bold text-sage-800">
                <a href="#profil" class="hover:text-terracotta transition duration-300">Profil</a>
                <a href="#whyus" class="hover:text-terracotta transition duration-300">Layanan</a>
                <a href="#paket" class="hover:text-terracotta transition duration-300">Paket</a>
                <a href="#galeri" class="hover:text-terracotta transition duration-300">Galeri</a>
                <a href="#faq" class="hover:text-terracotta transition duration-300">FAQ</a>
                <a href="#blog" class="hover:text-terracotta transition duration-300">Blog</a>
            </div>

            <div class="hidden lg:block">
                <a href="#"
                    class="bg-sage-600 text-sand-50 px-6 py-2.5 rounded-full text-sm font-bold hover:bg-sage-800 transition duration-300 shadow-md">
                    Hubungi Kami
                </a>
            </div>

            <!-- Mobile Button -->
            <div class="lg:hidden">
                <button @click="mobileMenu = !mobileMenu" class="text-sage-800 focus:outline-none">
                    <i class="fa-solid text-xl" :class="mobileMenu ? 'fa-xmark' : 'fa-bars'"></i>
                </button>
            </div>

            <!-- Mobile Dropdown -->
            <div x-cloak x-show="mobileMenu" x-transition:enter="transition ease-out duration-200"
                x-transition:enter-start="opacity-0 -translate-y-4" x-transition:enter-end="opacity-100 translate-y-0"
                class="absolute top-16 left-0 right-0 bg-sand-50 rounded-3xl shadow-xl border border-sand-200 p-6 flex flex-col space-y-4 lg:hidden">
                <a href="#profil" @click="mobileMenu = false"
                    class="text-sage-800 font-bold hover:text-terracotta">Profil</a>
                <a href="#whyus" @click="mobileMenu = false"
                    class="text-sage-800 font-bold hover:text-terracotta">Layanan</a>
                <a href="#paket" @click="mobileMenu = false"
                    class="text-sage-800 font-bold hover:text-terracotta">Paket Ibadah</a>
                <a href="#galeri" @click="mobileMenu = false"
                    class="text-sage-800 font-bold hover:text-terracotta">Galeri</a>
                <a href="#faq" @click="mobileMenu = false"
                    class="text-sage-800 font-bold hover:text-terracotta">FAQ</a>
                <a href="#blog" @click="mobileMenu = false"
                    class="text-sage-800 font-bold hover:text-terracotta">Blog</a>
                <a href="#" class="bg-sage-600 text-sand-50 text-center py-3 rounded-full font-bold w-full">Chat
                    WhatsApp</a>
            </div>
        </nav>
    </div>

    <!-- 2. HERO SECTION -->
    <section class="pt-32 pb-20 lg:pt-48 lg:pb-32 overflow-hidden relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="flex flex-col lg:flex-row items-center gap-12 lg:gap-20">

                <div class="w-full lg:w-1/2 text-center lg:text-left">
                    <span class="text-terracotta font-bold tracking-widest uppercase text-xs mb-4 block">Perjalanan
                        Spiritual Anda</span>
                    <h1 class="text-5xl md:text-6xl lg:text-7xl font-serif text-sage-900 leading-tight mb-6">
                        Menuju Baitullah <br>
                        <span class="italic text-sage-600">dengan Ketenangan.</span>
                    </h1>
                    <p class="text-lg text-sand-800 mb-10 max-w-lg mx-auto lg:mx-0 leading-relaxed font-medium">
                        Melayani tamu Allah dengan bimbingan sunnah yang otentik, fasilitas nyaman, dan pelayanan
                        sepenuh hati. Niatkan ibadah Anda, kami siapkan jalannya.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                        <a href="#paket"
                            class="bg-sage-600 text-sand-50 px-8 py-4 rounded-full font-bold hover:bg-sage-800 transition duration-300 shadow-lg text-center">
                            Lihat Paket Keberangkatan
                        </a>
                        <a href="#profil"
                            class="bg-transparent border border-sage-600 text-sage-800 px-8 py-4 rounded-full font-bold hover:bg-sage-100 transition duration-300 text-center">
                            Pelajari Layanan
                        </a>
                    </div>
                </div>

                <div class="w-full lg:w-1/2 relative flex justify-center lg:justify-end">
                    <!-- Dekorasi Lingkaran Latar -->
                    <div
                        class="absolute top-10 -left-10 w-64 h-64 bg-sand-200 rounded-full mix-blend-multiply opacity-50 filter blur-2xl">
                    </div>
                    <!-- Gambar dengan bentuk Arch (Kubah) -->
                    <div class="relative w-full max-w-md">
                        <img src="{{ asset('images/mekkah.png') }}" alt="Mekkah"
                            class="w-full h-[600px] object-cover arch-shape shadow-2xl border-8 border-sand-50">

                        <!-- Floating Badge -->
                        <div
                            class="absolute bottom-10 -left-8 bg-sand-50 p-4 rounded-2xl shadow-xl flex items-center gap-4">
                            <div
                                class="w-12 h-12 bg-sage-100 text-sage-600 rounded-full flex items-center justify-center text-xl">
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <div>
                                <p class="text-sage-900 font-bold text-sm">Review Bintang 5</p>
                                <p class="text-sand-800 text-xs font-medium">Oleh 15,000+ Jemaah</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 3. PROFIL -->
    <section id="profil" class="py-24 bg-sand-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row items-center gap-16">
                <div class="w-full lg:w-1/2">
                    <div class="grid grid-cols-2 gap-4">
                        <img src="{{ asset('images/tawaf.png') }}" alt="Tawaf"
                            class="w-full h-64 object-cover arch-shape shadow-lg">
                        <img src="{{ asset('images/hotel.png') }}" alt="Fasilitas"
                            class="w-full h-64 object-cover rounded-[3rem] shadow-lg mt-8">
                    </div>
                </div>
                <div class="w-full lg:w-1/2">
                    <h2 class="text-4xl lg:text-5xl font-serif text-sage-900 mb-6 leading-tight">Sebuah Amanah yang
                        <br><span class="italic text-terracotta">Kami Jaga Penuh.</span>
                    </h2>
                    <p class="text-sand-800 leading-relaxed mb-6 font-medium">
                        Mabrur Travel didirikan di Batam dengan visi untuk menjadi sahabat perjalanan spiritual umat
                        muslim Indonesia. Kami memahami bahwa ibadah haji dan umroh adalah panggilan jiwa yang harus
                        disambut dengan kesempurnaan tata cara (manasik) dan kenyamanan fisik.
                    </p>
                    <div class="flex items-center gap-5 mt-10 p-6 bg-sand-100 rounded-3xl border border-sand-200">
                        <img src="{{ asset('images/owner.png') }}" alt="Founder"
                            class="w-16 h-16 rounded-full object-cover shadow-md">
                        <div>
                            <p class="text-sage-900 font-bold">H. Harianto Rais</p>
                            <p class="text-terracotta text-sm font-bold tracking-wider uppercase">Founder Mabrur Travel
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. KENAPA KAMI (WHY US) -->
    <section id="whyus" class="py-24 bg-sage-900 text-sand-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <span class="text-terracotta font-bold tracking-widest uppercase text-xs mb-4 block">Nilai Utama
                    Kami</span>
                <h2 class="text-4xl lg:text-5xl font-serif mb-6">Fasilitas & Pendampingan <br><span
                        class="italic text-sage-400">Terbaik untuk Anda.</span></h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Card 1 -->
                <div class="bg-sage-800 p-10 rounded-[2.5rem] hover:bg-sage-700 transition duration-300">
                    <div
                        class="w-16 h-16 bg-sage-600 text-sand-50 rounded-2xl flex items-center justify-center text-3xl mb-8 transform -rotate-6">
                        <i class="fa-solid fa-mosque"></i>
                    </div>
                    <h3 class="text-2xl font-serif mb-3">Hotel Ring 1</h3>
                    <p class="text-sage-300 text-sm leading-relaxed">Akomodasi hotel yang sangat dekat dengan pelataran
                        masjid, memberikan kemudahan akses bagi Anda untuk beribadah 5 waktu.</p>
                </div>
                <!-- Card 2 -->
                <div class="bg-sage-800 p-10 rounded-[2.5rem] hover:bg-sage-700 transition duration-300">
                    <div
                        class="w-16 h-16 bg-sage-600 text-sand-50 rounded-2xl flex items-center justify-center text-3xl mb-8 transform -rotate-6">
                        <i class="fa-solid fa-book-open-reader"></i>
                    </div>
                    <h3 class="text-2xl font-serif mb-3">Sesuai Sunnah</h3>
                    <p class="text-sage-300 text-sm leading-relaxed">Seluruh rukun dan tata cara manasik dibimbing
                        langsung oleh Asatidz bermanhaj salaf, jauh dari amalan yang tidak ada tuntunannya.</p>
                </div>
                <!-- Card 3 -->
                <div class="bg-sage-800 p-10 rounded-[2.5rem] hover:bg-sage-700 transition duration-300">
                    <div
                        class="w-16 h-16 bg-sage-600 text-sand-50 rounded-2xl flex items-center justify-center text-3xl mb-8 transform -rotate-6">
                        <i class="fa-solid fa-ticket"></i>
                    </div>
                    <h3 class="text-2xl font-serif mb-3">Tiket Pasti</h3>
                    <p class="text-sage-300 text-sm leading-relaxed">Kepastian keberangkatan dengan sistem block seat
                        maskapai jauh sebelum pendaftaran ditutup. Anda tenang di rumah.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. PAKET IBADAH -->
    <section id="paket" class="py-24 bg-sand-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl lg:text-5xl font-serif text-sage-900 mb-4">Program <span
                        class="italic text-terracotta">Perjalanan</span></h2>
                <p class="text-sand-800 font-medium">Transparansi harga tanpa biaya tambahan yang ditutupi.</p>
            </div>

            <!-- Horizontal Package Card 1 -->
            <div
                class="bg-sand-50 rounded-[2.5rem] overflow-hidden flex flex-col lg:flex-row mb-8 shadow-sm border border-sand-200 group hover:shadow-lg transition">
                <div class="w-full lg:w-2/5 h-64 lg:h-auto overflow-hidden">
                    <img src="{{ asset('images/madinah.png') }}"
                        class="w-full h-full object-cover group-hover:scale-105 transition duration-700"
                        alt="Reguler">
                </div>
                <div class="w-full lg:w-3/5 p-8 lg:p-12 flex flex-col justify-center">
                    <div class="flex justify-between items-start mb-4">
                        <div>
                            <span
                                class="bg-sage-100 text-sage-800 px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider mb-3 inline-block">Program
                                9 Hari</span>
                            <h3 class="text-3xl font-serif text-sage-900">Umroh Reguler</h3>
                        </div>
                        <p class="text-3xl lg:text-4xl font-bold text-terracotta">Rp 28.5 <span
                                class="text-lg font-medium text-sand-800">Jt</span></p>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-8">
                        <div class="flex items-center gap-3 text-sand-800 text-sm font-medium"><i
                                class="fa-solid fa-plane text-sage-600"></i> Lion / Saudia Airlines</div>
                        <div class="flex items-center gap-3 text-sand-800 text-sm font-medium"><i
                                class="fa-solid fa-bed text-sage-600"></i> Hotel Bintang 4</div>
                        <div class="flex items-center gap-3 text-sand-800 text-sm font-medium"><i
                                class="fa-solid fa-bus text-sage-600"></i> Bus AC Eksklusif</div>
                        <div class="flex items-center gap-3 text-sand-800 text-sm font-medium"><i
                                class="fa-solid fa-utensils text-sage-600"></i> Fullboard Nusantara</div>
                    </div>
                    <div class="mt-auto">
                        <a href="#"
                            class="inline-block bg-sage-600 text-sand-50 px-8 py-3.5 rounded-full font-bold hover:bg-sage-800 transition shadow-md">Daftar
                            Paket Ini</a>
                    </div>
                </div>
            </div>

            <!-- Horizontal Package Card 2 (Premium) -->
            <div
                class="bg-sage-900 rounded-[2.5rem] overflow-hidden flex flex-col lg:flex-row-reverse mb-8 shadow-xl group">
                <div class="w-full lg:w-2/5 h-64 lg:h-auto overflow-hidden relative">
                    <img src="{{ asset('images/hotel.png') }}"
                        class="w-full h-full object-cover group-hover:scale-105 transition duration-700 opacity-90"
                        alt="Premium">
                    <div
                        class="absolute top-6 right-6 bg-terracotta text-sand-50 text-xs font-bold uppercase tracking-widest px-4 py-2 rounded-full">
                        Best Seller</div>
                </div>
                <div class="w-full lg:w-3/5 p-8 lg:p-12 flex flex-col justify-center">
                    <div class="flex justify-between items-start mb-4">
                        <div>
                            <span
                                class="bg-sage-800 text-sand-200 px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider mb-3 inline-block">Program
                                12 Hari</span>
                            <h3 class="text-3xl font-serif text-sand-50">Umroh Plus Turki</h3>
                        </div>
                        <p class="text-3xl lg:text-4xl font-bold text-terracotta">Rp 37.0 <span
                                class="text-lg font-medium text-sage-400">Jt</span></p>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-8">
                        <div class="flex items-center gap-3 text-sand-200 text-sm font-medium"><i
                                class="fa-solid fa-plane text-terracotta"></i> Turkish Airlines (Direct)</div>
                        <div class="flex items-center gap-3 text-sand-200 text-sm font-medium"><i
                                class="fa-solid fa-bed text-terracotta"></i> Hotel Bintang 5 (Ring 1)</div>
                        <div class="flex items-center gap-3 text-sand-200 text-sm font-medium"><i
                                class="fa-solid fa-train text-terracotta"></i> Kereta Cepat Haramain</div>
                        <div class="flex items-center gap-3 text-sand-200 text-sm font-medium"><i
                                class="fa-solid fa-camera text-terracotta"></i> City Tour Istanbul 3 Hari</div>
                    </div>
                    <div class="mt-auto">
                        <a href="#"
                            class="inline-block bg-terracotta text-sand-50 px-8 py-3.5 rounded-full font-bold hover:bg-orange-700 transition shadow-md">Daftar
                            Paket Premium</a>
                    </div>
                </div>
            </div>

            <!-- Simple Banner for Hajj -->
            <div class="bg-sand-200 rounded-[2.5rem] p-8 lg:p-12 text-center border border-sand-300 border-dashed">
                <h3 class="text-2xl font-serif text-sage-900 mb-2">Ingin Mendaftar Haji Khusus (Furoda)?</h3>
                <p class="text-sand-800 mb-6 font-medium">Masa tunggu cepat, visa resmi, dan tenda VIP Maktab Arafah
                    Mina.</p>
                <a href="#"
                    class="inline-block border-2 border-sage-600 text-sage-800 px-8 py-3 rounded-full font-bold hover:bg-sage-600 hover:text-sand-50 transition">Konsultasi
                    Haji</a>
            </div>
        </div>
    </section>

    <!-- 6. GALERI -->
    <section id="galeri" class="py-24 bg-sand-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-4xl font-serif text-sage-900 mb-12 text-center">Rekaman <span
                    class="italic text-terracotta">Perjalanan</span></h2>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 md:gap-6">
                <!-- Gunakan arch shape untuk beberapa gambar agar temanya terasa -->
                <div class="h-64 md:h-80 rounded-[2rem] overflow-hidden">
                    <img src="{{ asset('images/mekkah.png') }}"
                        class="w-full h-full object-cover hover:scale-110 transition duration-700" alt="Mekkah">
                </div>
                <div class="h-64 md:h-80 arch-shape overflow-hidden mt-8">
                    <img src="{{ asset('images/tawaf.png') }}"
                        class="w-full h-full object-cover hover:scale-110 transition duration-700" alt="Tawaf">
                </div>
                <div class="h-64 md:h-80 rounded-[2rem] overflow-hidden">
                    <img src="{{ asset('images/madinah.png') }}"
                        class="w-full h-full object-cover hover:scale-110 transition duration-700" alt="Madinah">
                </div>
                <div class="h-64 md:h-80 arch-shape overflow-hidden mt-8">
                    <img src="{{ asset('images/hotel.png') }}"
                        class="w-full h-full object-cover hover:scale-110 transition duration-700" alt="Hotel">
                </div>
            </div>
        </div>
    </section>

    <!-- 7. TESTIMONIALS -->
    <section id="testimoni" class="py-24 bg-sand-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl lg:text-5xl font-serif text-sage-900 mb-4">Jejak <span
                        class="italic text-terracotta">Kepuasan</span></h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-5xl mx-auto">
                <div class="bg-sand-50 p-10 rounded-[2.5rem] shadow-sm relative">
                    <i class="fa-solid fa-quote-right absolute top-8 right-8 text-5xl text-sand-200"></i>
                    <p class="text-sand-800 font-medium leading-relaxed mb-8 relative z-10 text-lg">"Alhamdulillah,
                        bersama Mabrur Travel ibadah umroh saya sekeluarga berjalan sangat lancar. Penjelasan rukunnya
                        gamblang, hotelnya betul-betul tinggal nyebrang dari masjid."</p>
                    <div class="flex items-center gap-4">
                        <img src="{{ asset('images/user1.png') }}" alt="User 1"
                            class="w-14 h-14 rounded-full object-cover">
                        <div>
                            <p class="font-bold text-sage-900">Bpk. Irwan Syah</p>
                            <p class="text-xs text-sand-800 font-bold uppercase tracking-wider">Jemaah Reguler</p>
                        </div>
                    </div>
                </div>

                <div class="bg-sand-50 p-10 rounded-[2.5rem] shadow-sm relative">
                    <i class="fa-solid fa-quote-right absolute top-8 right-8 text-5xl text-sand-200"></i>
                    <p class="text-sand-800 font-medium leading-relaxed mb-8 relative z-10 text-lg">"Pelayanan VIP
                        sangat sepadan. Tur Turki-nya seru dan tidak terlalu capek, lalu saat ibadah di Makkah
                        muthawwif-nya sangat menuntun kami yang sudah lanjut usia."</p>
                    <div class="flex items-center gap-4">
                        <img src="{{ asset('images/user2.png') }}" alt="User 2"
                            class="w-14 h-14 rounded-full object-cover">
                        <div>
                            <p class="font-bold text-sage-900">Ibu Hj. Ningsih</p>
                            <p class="text-xs text-sand-800 font-bold uppercase tracking-wider">Jemaah Umroh Plus</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 8. FAQ -->
    <section id="faq" class="py-24 bg-sand-50">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-serif text-sage-900 mb-12 text-center">Pertanyaan Umum</h2>

            <div class="space-y-4" x-data="{ active: null }">
                <!-- Q1 -->
                <div class="border-b border-sand-200">
                    <button @click="active = active === 1 ? null : 1"
                        class="w-full py-5 flex justify-between items-center text-left focus:outline-none">
                        <span class="font-bold text-sage-900 text-lg">Apakah harga sudah termasuk perlengkapan?</span>
                        <i class="fa-solid text-terracotta transition-transform"
                            :class="active === 1 ? 'fa-minus' : 'fa-plus'"></i>
                    </button>
                    <div x-show="active === 1" x-collapse>
                        <p class="pb-5 text-sand-800 font-medium leading-relaxed">
                            Ya, harga yang tertera adalah *All-in*. Anda akan mendapatkan koper besar, tas kabin, kain
                            ihram/mukena panjang, buku doa, dan ID card khusus jemaah tanpa biaya tambahan.
                        </p>
                    </div>
                </div>
                <!-- Q2 -->
                <div class="border-b border-sand-200">
                    <button @click="active = active === 2 ? null : 2"
                        class="w-full py-5 flex justify-between items-center text-left focus:outline-none">
                        <span class="font-bold text-sage-900 text-lg">Bagaimana sistem pembayarannya?</span>
                        <i class="fa-solid text-terracotta transition-transform"
                            :class="active === 2 ? 'fa-minus' : 'fa-plus'"></i>
                    </button>
                    <div x-show="active === 2" x-collapse>
                        <p class="pb-5 text-sand-800 font-medium leading-relaxed">
                            Pembayaran DP minimal sebesar Rp 5.000.000 untuk penguncian *seat* pesawat. Pelunasan dapat
                            dilakukan bertahap dan wajib dibayar penuh paling lambat 45 hari sebelum hari keberangkatan.
                        </p>
                    </div>
                </div>
                <!-- Q3 -->
                <div class="border-b border-sand-200">
                    <button @click="active = active === 3 ? null : 3"
                        class="w-full py-5 flex justify-between items-center text-left focus:outline-none">
                        <span class="font-bold text-sage-900 text-lg">Apakah melayani jemaah dari luar Batam?</span>
                        <i class="fa-solid text-terracotta transition-transform"
                            :class="active === 3 ? 'fa-minus' : 'fa-plus'"></i>
                    </button>
                    <div x-show="active === 3" x-collapse>
                        <p class="pb-5 text-sand-800 font-medium leading-relaxed">
                            Tentu saja. Meskipun kantor pusat kami berada di Batam, jemaah dari seluruh Indonesia dapat
                            mendaftar. Titik keberangkatan (*meeting point* utama) biasanya di Bandara Soekarno-Hatta
                            (CGK), Jakarta.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 9. BLOG -->
    <section id="blog" class="py-24 bg-sand-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-end mb-12">
                <h2 class="text-4xl font-serif text-sage-900">Jurnal <span
                        class="italic text-terracotta">Inspirasi</span></h2>
                <a href="#"
                    class="hidden md:inline-block font-bold text-sage-600 hover:text-sage-900 transition">Lihat Semua
                    Blog &rarr;</a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Blog 1 -->
                <div class="bg-sand-50 rounded-3xl overflow-hidden shadow-sm hover:shadow-md transition">
                    <img src="{{ asset('images/tawaf.png') }}" alt="Tawaf" class="w-full h-56 object-cover">
                    <div class="p-8">
                        <p class="text-terracotta text-xs font-bold uppercase tracking-widest mb-3">Panduan Umroh</p>
                        <h3
                            class="font-serif text-2xl text-sage-900 mb-3 hover:text-sage-600 transition cursor-pointer">
                            Menjaga Niat dan Fisik Sebelum Berangkat ke Tanah Suci</h3>
                        <p class="text-sand-800 text-sm mb-6 line-clamp-2">Langkah pertama yang paling penting sebelum
                            beribadah adalah menata niat ikhlas lillahi ta'ala serta menjaga kondisi kebugaran.</p>
                        <a href="#"
                            class="font-bold text-sm text-sage-900 border-b border-sage-900 pb-0.5 hover:text-sage-600 transition">Baca
                            Selengkapnya</a>
                    </div>
                </div>
                <!-- Blog 2 -->
                <div class="bg-sand-50 rounded-3xl overflow-hidden shadow-sm hover:shadow-md transition">
                    <img src="{{ asset('images/madinah.png') }}" alt="Madinah" class="w-full h-56 object-cover">
                    <div class="p-8">
                        <p class="text-terracotta text-xs font-bold uppercase tracking-widest mb-3">Destinasi</p>
                        <h3
                            class="font-serif text-2xl text-sage-900 mb-3 hover:text-sage-600 transition cursor-pointer">
                            Adab Ziarah di Madinah Al-Munawwarah</h3>
                        <p class="text-sand-800 text-sm mb-6 line-clamp-2">Kota Nabi memberikan ketenangan luar biasa.
                            Ketahui adab-adab ketika berkunjung dan masuk ke Raudhah.</p>
                        <a href="#"
                            class="font-bold text-sm text-sage-900 border-b border-sage-900 pb-0.5 hover:text-sage-600 transition">Baca
                            Selengkapnya</a>
                    </div>
                </div>
                <!-- Blog 3 -->
                <div class="bg-sand-50 rounded-3xl overflow-hidden shadow-sm hover:shadow-md transition">
                    <img src="{{ asset('images/hotel.png') }}" alt="Hotel" class="w-full h-56 object-cover">
                    <div class="p-8">
                        <p class="text-terracotta text-xs font-bold uppercase tracking-widest mb-3">Persiapan</p>
                        <h3
                            class="font-serif text-2xl text-sage-900 mb-3 hover:text-sage-600 transition cursor-pointer">
                            Daftar Barang Bawaan Kabin vs Bagasi Koper</h3>
                        <p class="text-sand-800 text-sm mb-6 line-clamp-2">Jangan sampai bingung saat *packing*. Ini
                            rincian barang yang wajib ada di tas selempang, kabin, dan koper besar.</p>
                        <a href="#"
                            class="font-bold text-sm text-sage-900 border-b border-sage-900 pb-0.5 hover:text-sage-600 transition">Baca
                            Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 10. EARTHY FOOTER -->
    <footer class="bg-sage-900 text-sand-200 py-20 rounded-t-[3rem] mt-2 border-t border-sage-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-16">
                <!-- Info -->
                <div class="md:col-span-1">
                    <div class="flex items-center gap-2 mb-6">
                        <i class="fa-solid fa-mosque text-terracotta text-2xl"></i>
                        <span class="text-2xl font-serif font-bold text-sand-50 tracking-wide">Mabrur.</span>
                    </div>
                    <p class="text-sm leading-relaxed text-sage-300 mb-6">
                        Biro perjalanan ibadah haji & umroh terpercaya. Melayani jemaah dengan prinsip kekeluargaan,
                        profesionalitas, dan ketaatan pada syariat.
                    </p>
                    <div class="flex gap-4">
                        <a href="#"
                            class="w-10 h-10 rounded-full bg-sage-800 flex items-center justify-center hover:bg-terracotta text-sand-50 transition"><i
                                class="fa-brands fa-instagram"></i></a>
                        <a href="#"
                            class="w-10 h-10 rounded-full bg-sage-800 flex items-center justify-center hover:bg-terracotta text-sand-50 transition"><i
                                class="fa-brands fa-facebook-f"></i></a>
                        <a href="#"
                            class="w-10 h-10 rounded-full bg-sage-800 flex items-center justify-center hover:bg-terracotta text-sand-50 transition"><i
                                class="fa-brands fa-tiktok"></i></a>
                    </div>
                </div>

                <!-- Links -->
                <div>
                    <h4 class="text-sand-50 font-bold uppercase tracking-widest text-sm mb-6">Perusahaan</h4>
                    <ul class="space-y-4 text-sm text-sage-300">
                        <li><a href="#profil" class="hover:text-sand-50 transition">Tentang Mabrur Travel</a></li>
                        <li><a href="#whyus" class="hover:text-sand-50 transition">Nilai & Keunggulan</a></li>
                        <li><a href="#paket" class="hover:text-sand-50 transition">Katalog Paket</a></li>
                        <li><a href="#galeri" class="hover:text-sand-50 transition">Galeri Keberangkatan</a></li>
                    </ul>
                </div>

                <!-- Legal -->
                <div>
                    <h4 class="text-sand-50 font-bold uppercase tracking-widest text-sm mb-6">Legalitas & Bantuan</h4>
                    <ul class="space-y-4 text-sm text-sage-300">
                        <li>SK Kemenag RI PPIU: U.123/2023</li>
                        <li><a href="#faq" class="hover:text-sand-50 transition">Pusat Bantuan (FAQ)</a></li>
                        <li><a href="#" class="hover:text-sand-50 transition">Syarat & Ketentuan Pendaftaran</a>
                        </li>
                        <li><a href="#" class="hover:text-sand-50 transition">Kebijakan Pengembalian Dana</a>
                        </li>
                    </ul>
                </div>

                <!-- Kontak Head Office (Batam Context) -->
                <div>
                    <h4 class="text-sand-50 font-bold uppercase tracking-widest text-sm mb-6">Kantor Pusat</h4>
                    <ul class="space-y-4 text-sm text-sage-300">
                        <li class="flex items-start gap-3">
                            <i class="fa-solid fa-map-pin mt-1 text-terracotta"></i>
                            <span>Batam Centre, Kepulauan Riau, Indonesia.</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i class="fa-solid fa-phone text-terracotta"></i>
                            <span>+62 812 3456 7890</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i class="fa-solid fa-envelope text-terracotta"></i>
                            <span>salam@mabrurtravel.id</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Bottom line -->
            <div class="border-t border-sage-800 pt-8 text-center text-sm text-sage-400">
                <p>&copy; 2026 PT. Mabrur Travel Umroh & Haji. Dibuat dengan dedikasi.</p>
            </div>
        </div>
    </footer>

</body>

</html>
