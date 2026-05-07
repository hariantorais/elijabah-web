<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UMKM Middle Eastern - Warm & Authentic Theme</title>

    <!-- Tailwind CSS & Alpine JS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Fonts: Cinzel (Decorative) & Montserrat (Body) -->
    <link
        href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700;900&family=Montserrat:wght@300;400;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        terracotta: {
                            50: '#fef4f2',
                            500: '#e2725b',
                            600: '#ce5a43', // Main Red-Orange
                            800: '#9b3d2c',
                            900: '#7a2f22',
                        },
                        sand: {
                            50: '#faf7f2',
                            100: '#f5efe6', // Background
                            200: '#e6d5bc',
                            500: '#c5a37e', // Accent Gold-Sand
                        },
                        espresso: {
                            900: '#3d2b1f', // Deep Brown
                        }
                    },
                    fontFamily: {
                        display: ['Cinzel', 'serif'],
                        sans: ['Montserrat', 'sans-serif'],
                    }
                }
            }
        }
    </script>

    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            background-color: #f5efe6;
            color: #3d2b1f;
        }

        [x-cloak] {
            display: none !important;
        }

        /* Islamic Pattern Overlay */
        .bg-pattern {
            background-image: url("data:image/svg+xml,%3Csvg width='52' height='26' viewBox='0 0 52 26' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ce5a43' fill-opacity='0.05'%3E%3Cpath d='M10 10c0-2.21-1.79-4-4-4-3.314 0-6-2.686-6-6h2c0 2.21 1.79 4 4 4 3.314 0 6 2.686 6 6 0 2.21 1.79 4 4 4h2c-2.21 0-4-1.79-4-4zm25.522 2.522l-1.044-1.044 4.478-4.478 1.044 1.044-4.478 4.478zm-2 2l-1.044-1.044 4.478-4.478 1.044 1.044-4.478 4.478zM10 10c0 2.21 1.79 4 4 4 3.314 0 6 2.686 6 6h-2c0-2.21-1.79-4-4-4-3.314 0-6-2.686-6-6 0-2.21-1.79-4-4-4H4c2.21 0 4 1.79 4 4zm20 10c0 2.21 1.79 4 4 4 3.314 0 6 2.686 6 6h-2c0-2.21-1.79-4-4-4-3.314 0-6-2.686-6-6 0-2.21-1.79-4-4-4h-2c2.21 0 4 1.79 4 4zm20 0c0-2.21-1.79-4-4-4-3.314 0-6-2.686-6-6h2c0 2.21 1.79 4 4 4 3.314 0 6 2.686 6 6 0 2.21 1.79 4 4 4h2c-2.21 0-4-1.79-4-4z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
        }

        /* Arch Shape for Branding */
        .arch-image {
            border-radius: 160px 160px 20px 20px;
        }
    </style>
</head>

<body class="antialiased selection:bg-terracotta-500 selection:text-white bg-pattern">

    <!-- 1. NAVBAR -->
    <nav x-data="{ mobileMenu: false, scrolled: false }" @scroll.window="scrolled = (window.pageYOffset > 20)"
        class="fixed w-full z-50 transition-all duration-300"
        :class="scrolled ? 'bg-sand-100/95 backdrop-blur-md shadow-md py-3 border-b border-sand-200' : 'bg-transparent py-6'">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center gap-2">
                    <div
                        class="w-10 h-10 bg-terracotta-600 text-white rounded-full flex items-center justify-center shadow-lg">
                        <i class="fa-solid fa-moon"></i>
                    </div>
                    <span class="text-2xl font-display font-bold text-espresso-900 tracking-wider">Arabian<span
                            class="text-terracotta-600">Taste.</span></span>
                </div>

                <!-- Desktop Menu -->
                <div
                    class="hidden md:flex space-x-10 items-center font-bold text-espresso-900 text-xs uppercase tracking-widest">
                    <a href="#hero" class="hover:text-terracotta-600 transition">Beranda</a>
                    <a href="#menu" class="hover:text-terracotta-600 transition">Menu Pilihan</a>
                    <a href="#tentang" class="hover:text-terracotta-600 transition">Cerita Kami</a>
                    <a href="#kontak" class="hover:text-terracotta-600 transition">Kontak</a>
                </div>

                <!-- Desktop CTA -->
                <div class="hidden md:block">
                    <a href="https://wa.me/62812345678"
                        class="bg-terracotta-600 text-white px-7 py-2.5 rounded-full font-bold hover:bg-terracotta-800 transition shadow-lg flex items-center gap-2 text-sm uppercase tracking-wider">
                        Pesan Sekarang
                    </a>
                </div>

                <!-- Mobile Button -->
                <div class="md:hidden flex items-center">
                    <button @click="mobileMenu = !mobileMenu" class="text-espresso-900 focus:outline-none text-2xl">
                        <i class="fa-solid" :class="mobileMenu ? 'fa-xmark' : 'fa-bars'"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div x-cloak x-show="mobileMenu" x-transition
            class="md:hidden bg-sand-50 absolute w-full shadow-2xl border-t border-sand-200">
            <div class="px-6 py-8 flex flex-col space-y-5 text-center">
                <a href="#hero" @click="mobileMenu = false"
                    class="block font-bold text-espresso-900 uppercase tracking-widest text-sm hover:text-terracotta-600">Beranda</a>
                <a href="#menu" @click="mobileMenu = false"
                    class="block font-bold text-espresso-900 uppercase tracking-widest text-sm hover:text-terracotta-600">Menu
                    Pilihan</a>
                <a href="#tentang" @click="mobileMenu = false"
                    class="block font-bold text-espresso-900 uppercase tracking-widest text-sm hover:text-terracotta-600">Kisah
                    Kami</a>
                <a href="https://wa.me/62812345678"
                    class="bg-terracotta-600 text-white py-3 rounded-full font-bold uppercase tracking-widest text-xs mt-4">WhatsApp
                    Admin</a>
            </div>
        </div>
    </nav>

    <!-- 2. HERO SECTION -->
    <section id="hero" class="relative pt-32 pb-20 lg:pt-48 lg:pb-32 overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row items-center gap-16">

                <!-- Text Content -->
                <div class="w-full lg:w-1/2 text-center lg:text-left z-10">
                    <p class="text-terracotta-600 font-bold tracking-[0.3em] text-xs uppercase mb-4">Citarasa Autentik
                        Gurun Pasir</p>
                    <h1 class="text-5xl md:text-6xl lg:text-7xl font-display text-espresso-900 leading-tight mb-6">
                        Kehangatan <br>
                        Di Setiap <span class="italic text-terracotta-600">Sajian.</span>
                    </h1>
                    <p class="text-espresso-900/70 mb-10 max-w-lg mx-auto lg:mx-0 font-medium leading-relaxed text-lg">
                        Nikmati kelezatan rempah pilihan dari resep turun-temurun. Kami menghadirkan suasana Makkah dan
                        Madinah langsung ke meja makan Anda.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                        <a href="#menu"
                            class="bg-terracotta-600 text-white px-10 py-4 rounded-xl font-bold hover:bg-terracotta-800 transition shadow-xl text-center uppercase tracking-widest text-sm">
                            Lihat Menu
                        </a>
                        <a href="#tentang"
                            class="bg-white border-2 border-sand-200 text-espresso-900 px-10 py-4 rounded-xl font-bold hover:bg-sand-50 transition text-center uppercase tracking-widest text-sm">
                            Tentang Kami
                        </a>
                    </div>
                </div>

                <!-- Image Content (Arch Style) -->
                <div class="w-full lg:w-1/2 relative flex justify-center">
                    <div class="relative w-full max-w-sm md:max-w-md">
                        <div
                            class="absolute inset-0 border-2 border-sand-500 transform translate-x-4 translate-y-4 arch-image -z-10">
                        </div>
                        <img src="{{ asset('images/kuliner-arab-hero.png') }}" alt="Makanan Timur Tengah"
                            class="w-full h-auto object-cover arch-image shadow-2xl">

                        <!-- Mini Badge -->
                        <div
                            class="absolute -bottom-6 -right-6 bg-white p-5 rounded-2xl shadow-xl border border-sand-100 flex items-center gap-4">
                            <div
                                class="w-12 h-12 bg-terracotta-50 text-terracotta-600 rounded-full flex items-center justify-center text-2xl shadow-inner">
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <div>
                                <p class="text-[10px] text-espresso-900/50 font-bold uppercase tracking-widest">Favorit
                                    Klien</p>
                                <p class="font-display font-bold text-espresso-900 text-lg leading-none">Nasi Kebuli
                                    Premium</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 3. KEUNGGULAN (VALUES) -->
    <section class="py-16 bg-espresso-900 text-sand-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12 text-center">
                <div class="p-4 group">
                    <i
                        class="fa-solid fa-mortar-pestle text-4xl text-terracotta-500 mb-6 group-hover:scale-110 transition duration-300"></i>
                    <h3 class="font-display text-xl font-bold mb-3 tracking-widest uppercase">Rempah Pilihan</h3>
                    <p class="font-light text-sm text-sand-100/70 leading-relaxed">Kami hanya menggunakan rempah asli
                        yang didatangkan langsung dari Timur Tengah untuk menjaga cita rasa.</p>
                </div>
                <div class="p-4 group border-y md:border-y-0 md:border-x border-sand-200/10">
                    <i
                        class="fa-solid fa-certificate text-4xl text-terracotta-500 mb-6 group-hover:scale-110 transition duration-300"></i>
                    <h3 class="font-display text-xl font-bold mb-3 tracking-widest uppercase">100% Halal</h3>
                    <p class="font-light text-sm text-sand-100/70 leading-relaxed">Seluruh proses pengolahan kami
                        mengikuti standar kehalalan yang ketat dan higienis.</p>
                </div>
                <div class="p-4 group">
                    <i
                        class="fa-solid fa-heart text-4xl text-terracotta-500 mb-6 group-hover:scale-110 transition duration-300"></i>
                    <h3 class="font-display text-xl font-bold mb-3 tracking-widest uppercase">Resep Turun-Temurun</h3>
                    <p class="font-light text-sm text-sand-100/70 leading-relaxed">Menyajikan hidangan dengan resep
                        rahasia keluarga yang telah dijaga selama puluhan tahun.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. DAFTAR MENU (MENU PIIHAN) -->
    <section id="menu" class="py-24 bg-sand-50/50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-display text-espresso-900 font-bold mb-4 uppercase tracking-widest">Menu
                    Terfavorit</h2>
                <div class="w-24 h-1 bg-terracotta-600 mx-auto mb-6"></div>
                <p class="text-espresso-900/60 max-w-xl mx-auto">Manjakan lidah Anda dengan pilihan menu andalan kami
                    yang kaya akan aroma dan rasa.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                <!-- Menu 1 -->
                <div
                    class="bg-white rounded-3xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-500 border border-sand-200">
                    <div class="h-64 overflow-hidden">
                        <img src="{{ asset('images/kuliner1.png') }}" alt="Nasi Mandhi"
                            class="w-full h-full object-cover hover:scale-110 transition duration-700">
                    </div>
                    <div class="p-8 text-center">
                        <h3 class="font-display font-bold text-espresso-900 text-xl mb-2 uppercase tracking-wide">Nasi
                            Mandhi Kambing</h3>
                        <p class="text-sm text-espresso-900/60 font-medium mb-6">Nasi basmati aromatik dengan potongan
                            kambing muda yang empuk dan sambal maraq.</p>
                        <p class="text-2xl font-bold text-terracotta-600 mb-6">Rp 75.000</p>
                        <a href="https://wa.me/62812345678?text=Halo,%20saya%20mau%20pesan%20Nasi%20Mandhi"
                            class="block w-full border-2 border-terracotta-600 text-terracotta-600 py-3 rounded-xl font-bold hover:bg-terracotta-600 hover:text-white transition uppercase text-xs tracking-widest">
                            Pesan via WA
                        </a>
                    </div>
                </div>

                <!-- Menu 2 -->
                <div
                    class="bg-white rounded-3xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-500 border border-sand-200 relative">
                    <div
                        class="absolute top-4 left-4 bg-espresso-900 text-sand-50 text-[10px] font-bold uppercase tracking-widest px-3 py-1 rounded-full z-10 shadow-md">
                        Terlaris</div>
                    <div class="h-64 overflow-hidden">
                        <img src="{{ asset('images/kuliner2.png') }}" alt="Kebab"
                            class="w-full h-full object-cover hover:scale-110 transition duration-700">
                    </div>
                    <div class="p-8 text-center">
                        <h3 class="font-display font-bold text-espresso-900 text-xl mb-2 uppercase tracking-wide">Kebab
                            Sultan Mix</h3>
                        <p class="text-sm text-espresso-900/60 font-medium mb-6">Tortilla gandum dengan isian daging
                            sapi premium, sayuran segar, dan saus spesial racikan kami.</p>
                        <p class="text-2xl font-bold text-terracotta-600 mb-6">Rp 35.000</p>
                        <a href="https://wa.me/62812345678?text=Halo,%20saya%20mau%20pesan%20Kebab%20Sultan"
                            class="block w-full bg-terracotta-600 text-white py-3 rounded-xl font-bold hover:bg-terracotta-800 transition shadow-lg uppercase text-xs tracking-widest">
                            Pesan via WA
                        </a>
                    </div>
                </div>

                <!-- Menu 3 -->
                <div
                    class="bg-white rounded-3xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-500 border border-sand-200">
                    <div class="h-64 overflow-hidden">
                        <img src="{{ asset('images/kuliner3.png') }}" alt="Umm Ali"
                            class="w-full h-full object-cover hover:scale-110 transition duration-700">
                    </div>
                    <div class="p-8 text-center">
                        <h3 class="font-display font-bold text-espresso-900 text-xl mb-2 uppercase tracking-wide">Umm
                            Ali Dessert</h3>
                        <p class="text-sm text-espresso-900/60 font-medium mb-6">Puding roti khas Mesir dengan campuran
                            susu, kismis, kacang almond, dan taburan kayu manis.</p>
                        <p class="text-2xl font-bold text-terracotta-600 mb-6">Rp 25.000</p>
                        <a href="https://wa.me/62812345678?text=Halo,%20saya%20mau%20pesan%20Umm%20Ali"
                            class="block w-full border-2 border-terracotta-600 text-terracotta-600 py-3 rounded-xl font-bold hover:bg-terracotta-600 hover:text-white transition uppercase text-xs tracking-widest">
                            Pesan via WA
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. TENTANG KAMI (STORY) -->
    <section id="tentang" class="py-24 bg-white relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row items-center gap-16">
                <!-- Image Collage Style -->
                <div class="w-full lg:w-1/2 relative">
                    <div class="grid grid-cols-2 gap-4">
                        <img src="{{ asset('images/about-arab1.png') }}" alt="Suasana"
                            class="w-full h-64 object-cover rounded-3xl shadow-lg border-4 border-sand-100">
                        <img src="{{ asset('images/about-arab2.png') }}" alt="Masakan"
                            class="w-full h-64 object-cover rounded-3xl shadow-lg border-4 border-sand-100 mt-8">
                    </div>
                    <!-- Decorative Element -->
                    <div class="absolute -z-10 -bottom-10 -left-10 w-40 h-40 bg-sand-200 rounded-full opacity-50">
                    </div>
                </div>

                <!-- Text -->
                <div class="w-full lg:w-1/2">
                    <h2 class="text-terracotta-600 font-bold tracking-widest text-xs uppercase mb-4">Kisah Dibalik Rasa
                    </h2>
                    <h3
                        class="text-4xl font-display font-bold text-espresso-900 mb-6 leading-tight uppercase tracking-wide">
                        Warisan Rempah <br>Dua Generasi.</h3>
                    <p class="text-espresso-900/70 mb-6 font-medium leading-relaxed">
                        Berawal dari kecintaan keluarga kami pada tradisi kuliner Timur Tengah saat menetap di Madinah
                        puluhan tahun lalu. Kami ingin membawa keajaiban rasa tersebut ke tanah air.
                    </p>
                    <p class="text-espresso-900/70 mb-8 font-medium leading-relaxed">
                        Setiap porsi yang kami sajikan bukan sekadar makanan, melainkan cerita tentang keramahan,
                        kebersamaan, dan ketulusan dalam menjamu tamu. Di sini, Anda adalah tamu istimewa kami.
                    </p>

                    <div class="flex items-center gap-6 p-6 bg-sand-50 rounded-2xl border border-sand-200">
                        <div class="text-center">
                            <p class="text-3xl font-display font-bold text-terracotta-600">12K+</p>
                            <p class="text-[10px] font-bold uppercase tracking-widest text-espresso-900/50">Pelanggan
                                Puas</p>
                        </div>
                        <div class="w-px h-12 bg-sand-200"></div>
                        <div class="text-center">
                            <p class="text-3xl font-display font-bold text-terracotta-600">15+</p>
                            <p class="text-[10px] font-bold uppercase tracking-widest text-espresso-900/50">Menu
                                Pilihan</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 6. TESTIMONI -->
    <section class="py-24 bg-terracotta-600 text-sand-50">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <i class="fa-solid fa-quote-left text-5xl text-terracotta-800 mb-8 opacity-40"></i>
            <h2 class="text-3xl font-display font-bold mb-12 uppercase tracking-widest">Apa Kata Mereka?</h2>

            <p class="text-xl md:text-2xl font-medium leading-relaxed mb-10 italic">
                "Rasanya benar-benar mengingatkan saya saat beribadah di Tanah Suci. Rempahnya sangat kuat tapi tetap
                seimbang di lidah. Daging kambingnya lembut banget dan gak bau sama sekali. Luar biasa!"
            </p>
            <div class="flex flex-col items-center">
                <div class="w-16 h-16 rounded-full border-2 border-sand-200 p-1 mb-4">
                    <img src="{{ asset('images/user1.png') }}" alt="Customer"
                        class="w-full h-full rounded-full object-cover">
                </div>
                <p class="font-bold text-lg">H. Ahmad Fauzi</p>
                <p class="text-xs text-sand-200 uppercase tracking-widest mt-1">Jamaah Umroh & Pelanggan Setia</p>
            </div>
        </div>
    </section>

    <!-- 7. FOOTER -->
    <footer id="kontak" class="bg-espresso-900 text-sand-100 pt-20 pb-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-16">
                <!-- Brand Info -->
                <div class="md:col-span-1">
                    <div class="flex items-center gap-2 mb-6">
                        <div
                            class="w-8 h-8 bg-terracotta-600 text-white rounded-full flex items-center justify-center">
                            <i class="fa-solid fa-moon"></i>
                        </div>
                        <span class="text-xl font-display font-bold text-white tracking-wider">Arabian<span
                                class="text-terracotta-600">Taste.</span></span>
                    </div>
                    <p class="text-sand-100/60 font-light text-sm leading-relaxed mb-6">Membawa kehangatan rempah Timur
                        Tengah langsung ke meja Anda. Sajian penuh berkah, rasa tak terlupakan.</p>
                    <div class="flex gap-4">
                        <a href="#"
                            class="w-10 h-10 border border-sand-500/30 rounded-full flex items-center justify-center hover:bg-terracotta-600 hover:border-terracotta-600 transition duration-300"><i
                                class="fa-brands fa-instagram"></i></a>
                        <a href="#"
                            class="w-10 h-10 border border-sand-500/30 rounded-full flex items-center justify-center hover:bg-terracotta-600 hover:border-terracotta-600 transition duration-300"><i
                                class="fa-brands fa-tiktok"></i></a>
                    </div>
                </div>

                <!-- Tautan Cepat -->
                <div>
                    <h4 class="font-display font-bold text-terracotta-500 uppercase tracking-widest text-xs mb-6">Menu
                        Navigasi</h4>
                    <ul class="space-y-4 text-sm font-medium text-sand-100/70 uppercase tracking-tighter">
                        <li><a href="#hero" class="hover:text-terracotta-500 transition">Halaman Utama</a></li>
                        <li><a href="#menu" class="hover:text-terracotta-500 transition">Daftar Menu</a></li>
                        <li><a href="#tentang" class="hover:text-terracotta-500 transition">Tentang Kami</a></li>
                        <li><a href="#" class="hover:text-terracotta-500 transition">Kerjasama Event</a></li>
                    </ul>
                </div>

                <!-- Jam Operasional -->
                <div>
                    <h4 class="font-display font-bold text-terracotta-500 uppercase tracking-widest text-xs mb-6">Jam
                        Operasional</h4>
                    <ul class="space-y-3 text-sm font-light text-sand-100/70">
                        <li class="flex justify-between border-b border-sand-500/10 pb-2"><span>Senin - Sabtu:</span>
                            <span>10:00 - 21:00</span>
                        </li>
                        <li class="flex justify-between border-b border-sand-500/10 pb-2"><span>Minggu:</span>
                            <span>12:00 - 22:00</span>
                        </li>
                        <li class="text-xs text-terracotta-500 pt-2 italic">*Libur pada Hari Besar Islam</li>
                    </ul>
                </div>

                <!-- Lokasi -->
                <div>
                    <h4 class="font-display font-bold text-terracotta-500 uppercase tracking-widest text-xs mb-6">
                        Kunjungi Kedai</h4>
                    <ul class="space-y-4 text-sm font-light text-sand-100/70">
                        <li class="flex items-start gap-3"><i
                                class="fa-solid fa-location-dot mt-1 text-terracotta-500"></i> Komp. Kuliner Makkah,
                            Blok A-1, Batam Center, Batam.</li>
                        <li class="flex items-center gap-3"><i class="fa-solid fa-phone text-terracotta-500"></i>
                            0812-3456-7890 (WA)</li>
                    </ul>
                </div>
            </div>

            <!-- Copyright -->
            <div
                class="border-t border-sand-500/10 pt-8 flex flex-col md:flex-row justify-between items-center gap-4 text-xs font-medium text-sand-500 tracking-widest uppercase">
                <p>&copy; 2026 Arabian Taste UMKM. Syukron Katsiran.</p>
            </div>
        </div>
    </footer>

</body>

</html>
