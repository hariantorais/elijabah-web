<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UMKM Beauty & Spa - Calming Lavender Theme</title>

    <!-- Tailwind CSS & Alpine JS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Fonts: Cormorant Garamond (Serif) & Nunito (Sans) -->
    <link
        href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500&family=Nunito:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        lavender: {
                            50: '#f8f6fa',
                            100: '#ece5f2',
                            200: '#d9cce5',
                            300: '#c1aed3',
                            500: '#9b7eb5',
                            600: '#81629d',
                            /* Main Brand Color */
                            700: '#694e81',
                            800: '#513d63',
                            900: '#382a45',
                        },
                        pearl: {
                            50: '#fdfbfb',
                            100: '#f7f3f5',
                        }
                    },
                    fontFamily: {
                        sans: ['Nunito', 'sans-serif'],
                        serif: ['Cormorant Garamond', 'serif'],
                    }
                }
            }
        }
    </script>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background-color: #fdfbfb;
            color: #513d63;
        }

        [x-cloak] {
            display: none !important;
        }

        /* Soft Pill Shape for Images */
        .shape-pill {
            border-radius: 999px 999px 0 0;
        }

        /* Subtle floating animation */
        @keyframes float {
            0% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-10px);
            }

            100% {
                transform: translateY(0px);
            }
        }

        .animate-float {
            animation: float 6s ease-in-out infinite;
        }
    </style>
</head>

<body class="antialiased selection:bg-lavender-200 selection:text-lavender-900">

    <!-- 1. NAVBAR -->
    <nav x-data="{ mobileMenu: false, scrolled: false }" @scroll.window="scrolled = (window.pageYOffset > 20)"
        class="fixed w-full z-50 transition-all duration-500"
        :class="scrolled ? 'bg-pearl-50/90 backdrop-blur-md shadow-sm py-3' : 'bg-transparent py-6'">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center gap-2">
                    <i class="fa-solid fa-spa text-lavender-600 text-2xl"></i>
                    <span class="text-3xl font-serif font-bold text-lavender-800 tracking-wide">
                        Lumina<span class="font-light text-lavender-500 italic">.</span>
                    </span>
                </div>

                <!-- Desktop Menu -->
                <div class="hidden md:flex space-x-10 items-center font-medium text-lavender-800 text-sm">
                    <a href="#hero" class="hover:text-lavender-500 transition duration-300">Beranda</a>
                    <a href="#layanan" class="hover:text-lavender-500 transition duration-300">Layanan Spa</a>
                    <a href="#produk" class="hover:text-lavender-500 transition duration-300">Produk Skincare</a>
                    <a href="#testimoni" class="hover:text-lavender-500 transition duration-300">Testimoni</a>
                </div>

                <!-- Desktop CTA -->
                <div class="hidden md:block">
                    <a href="#"
                        class="bg-lavender-600 text-white px-8 py-2.5 rounded-full font-semibold hover:bg-lavender-700 transition duration-300 shadow-md shadow-lavender-600/20 flex items-center gap-2">
                        Reservasi
                    </a>
                </div>

                <!-- Mobile Button -->
                <div class="md:hidden flex items-center">
                    <button @click="mobileMenu = !mobileMenu" class="text-lavender-800 focus:outline-none text-2xl">
                        <i class="fa-solid" :class="mobileMenu ? 'fa-xmark' : 'fa-bars'"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div x-cloak x-show="mobileMenu" x-transition
            class="md:hidden bg-pearl-50 absolute w-full shadow-lg border-t border-lavender-100">
            <div class="px-6 py-8 space-y-5 text-center">
                <a href="#hero" @click="mobileMenu = false"
                    class="block font-serif text-xl text-lavender-800 hover:text-lavender-500">Beranda</a>
                <a href="#layanan" @click="mobileMenu = false"
                    class="block font-serif text-xl text-lavender-800 hover:text-lavender-500">Layanan Spa</a>
                <a href="#produk" @click="mobileMenu = false"
                    class="block font-serif text-xl text-lavender-800 hover:text-lavender-500">Produk Skincare</a>
                <a href="#testimoni" @click="mobileMenu = false"
                    class="block font-serif text-xl text-lavender-800 hover:text-lavender-500">Testimoni</a>
                <a href="#"
                    class="block w-full bg-lavender-600 text-white py-3 rounded-full font-bold mt-4 shadow-md">
                    Hubungi WhatsApp
                </a>
            </div>
        </div>
    </nav>

    <!-- 2. HERO SECTION -->
    <section id="hero"
        class="relative pt-32 pb-20 lg:pt-40 lg:pb-32 overflow-hidden bg-gradient-to-b from-lavender-50 to-pearl-50">
        <!-- Abstract Soft Shapes -->
        <div
            class="absolute top-0 right-0 w-[500px] h-[500px] bg-lavender-200/30 rounded-full mix-blend-multiply filter blur-3xl opacity-70 -z-10">
        </div>
        <div
            class="absolute bottom-10 left-10 w-[400px] h-[400px] bg-pink-100/40 rounded-full mix-blend-multiply filter blur-3xl opacity-70 -z-10 animate-float">
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row items-center gap-16">

                <!-- Text Content -->
                <div class="w-full lg:w-1/2 text-center lg:text-left z-10">
                    <p class="text-lavender-600 font-semibold tracking-[0.2em] text-xs uppercase mb-4">Pusat Relaksasi &
                        Kecantikan</p>
                    <h1 class="text-5xl md:text-6xl lg:text-7xl font-serif text-lavender-900 leading-tight mb-6">
                        Waktunya Untuk <br>
                        <span class="italic text-lavender-600 font-medium">Memanjakan Diri.</span>
                    </h1>
                    <p class="text-lavender-700 mb-10 max-w-md mx-auto lg:mx-0 font-light leading-relaxed text-lg">
                        Tinggalkan kepenatan sejenak. Temukan kembali kilau alami dan ketenangan batin Anda bersama
                        terapis profesional kami.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                        <a href="#"
                            class="bg-lavender-600 text-white px-8 py-3.5 rounded-full font-semibold hover:bg-lavender-700 transition duration-300 shadow-md shadow-lavender-600/20 text-center tracking-wide">
                            Booking Jadwal
                        </a>
                        <a href="#layanan"
                            class="bg-transparent border border-lavender-300 text-lavender-800 px-8 py-3.5 rounded-full font-semibold hover:bg-lavender-50 transition duration-300 text-center tracking-wide">
                            Eksplor Layanan
                        </a>
                    </div>
                </div>

                <!-- Image Content -->
                <div class="w-full lg:w-1/2 relative flex justify-center">
                    <div class="relative w-full max-w-sm md:max-w-md">
                        <div
                            class="absolute inset-0 bg-lavender-200 transform translate-x-4 translate-y-4 shape-pill -z-10">
                        </div>
                        <img src="{{ asset('images/spa-hero.png') }}" alt="Perawatan Wajah"
                            class="w-full h-auto object-cover shape-pill shadow-xl">

                        <!-- Mini Badge -->
                        <div class="absolute bottom-16 -left-8 bg-white/90 backdrop-blur-sm p-4 rounded-2xl shadow-lg border border-lavender-100 flex items-center gap-3 animate-float"
                            style="animation-delay: 1s;">
                            <div
                                class="w-10 h-10 bg-lavender-100 text-lavender-600 rounded-full flex items-center justify-center text-lg">
                                <i class="fa-solid fa-droplet"></i>
                            </div>
                            <div>
                                <p class="text-xs text-lavender-500 font-bold uppercase">100% Organik</p>
                                <p class="font-serif font-bold text-lavender-900">Bahan Alami</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 3. KEUNGGULAN (VALUE PROPOSITION) -->
    <section class="py-16 bg-white border-y border-lavender-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div
                class="grid grid-cols-1 md:grid-cols-3 gap-10 text-center divide-y md:divide-y-0 md:divide-x divide-lavender-100">
                <div class="p-6">
                    <i class="fa-solid fa-spa text-4xl text-lavender-400 mb-4"></i>
                    <h3 class="font-serif text-2xl font-bold text-lavender-900 mb-3">Terapis Tersertifikasi</h3>
                    <p class="font-light text-lavender-700 text-sm leading-relaxed">Ditangani langsung oleh ahlinya
                        untuk memastikan teknik pijatan dan perawatan yang tepat dan aman.</p>
                </div>
                <div class="p-6">
                    <i class="fa-solid fa-leaf text-4xl text-lavender-400 mb-4"></i>
                    <h3 class="font-serif text-2xl font-bold text-lavender-900 mb-3">Produk Berkualitas</h3>
                    <p class="font-light text-lavender-700 text-sm leading-relaxed">Hanya menggunakan essential oil,
                        scrub, dan serum berbahan dasar alam yang ramah untuk kulit sensitif.</p>
                </div>
                <div class="p-6">
                    <i class="fa-solid fa-bed text-4xl text-lavender-400 mb-4"></i>
                    <h3 class="font-serif text-2xl font-bold text-lavender-900 mb-3">Ruangan Privat</h3>
                    <p class="font-light text-lavender-700 text-sm leading-relaxed">Nikmati relaksasi maksimal tanpa
                        gangguan di ruang perawatan privat dengan aromaterapi yang menenangkan.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. SERVICES (LAYANAN SPA & SALON) -->
    <section id="layanan" class="py-24 bg-lavender-50/50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <span class="text-lavender-600 font-semibold tracking-widest text-xs uppercase mb-3 block">Menu
                    Perawatan</span>
                <h2 class="text-4xl font-serif text-lavender-900 font-bold mb-4">Pilih Relaksasi Anda</h2>
                <p class="text-lavender-700 max-w-2xl mx-auto font-light">Berbagai pilihan perawatan dari ujung kepala
                    hingga ujung kaki, dirancang khusus untuk mengembalikan energi Anda.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Service 1 -->
                <div
                    class="bg-white rounded-[2rem] overflow-hidden shadow-sm hover:shadow-xl transition-shadow duration-300 border border-lavender-100 group">
                    <div class="h-56 overflow-hidden">
                        <img src="{{ asset('images/spa1.png') }}" alt="Facial Treatment"
                            class="w-full h-full object-cover group-hover:scale-105 transition duration-700">
                    </div>
                    <div class="p-8 text-center">
                        <h3 class="font-serif font-bold text-lavender-900 text-2xl mb-2">Glow Facial Treatment</h3>
                        <p class="text-sm text-lavender-600 font-light mb-6">Pembersihan mendalam, ekstraksi komedo,
                            pijat wajah, dan masker organik untuk mencerahkan kulit kusam.</p>
                        <p class="text-xl font-bold text-lavender-800 mb-6">Rp 150.000 <span
                                class="text-sm font-normal text-lavender-400">/ 60 Min</span></p>
                        <a href="#?text=Halo,%20saya%20mau%20booking%20Glow%20Facial" target="_blank"
                            class="block w-full border border-lavender-300 text-lavender-700 py-3 rounded-full font-semibold hover:bg-lavender-50 transition">
                            Pilih Treatment
                        </a>
                    </div>
                </div>

                <!-- Service 2 -->
                <div
                    class="bg-white rounded-[2rem] overflow-hidden shadow-sm hover:shadow-xl transition-shadow duration-300 border border-lavender-100 group">
                    <div class="h-56 overflow-hidden">
                        <img src="{{ asset('images/spa2.png') }}" alt="Body Massage"
                            class="w-full h-full object-cover group-hover:scale-105 transition duration-700">
                    </div>
                    <div class="p-8 text-center">
                        <h3 class="font-serif font-bold text-lavender-900 text-2xl mb-2">Aromatherapy Massage</h3>
                        <p class="text-sm text-lavender-600 font-light mb-6">Pijat seluruh tubuh menggunakan teknik
                            relaksasi otot dipadu dengan minyak esensial pilihan Anda.</p>
                        <p class="text-xl font-bold text-lavender-800 mb-6">Rp 200.000 <span
                                class="text-sm font-normal text-lavender-400">/ 90 Min</span></p>
                        <a href="#?text=Halo,%20saya%20mau%20booking%20Aromatherapy%20Massage" target="_blank"
                            class="block w-full bg-lavender-600 text-white py-3 rounded-full font-semibold hover:bg-lavender-700 transition shadow-md shadow-lavender-600/20">
                            Pilih Treatment
                        </a>
                    </div>
                </div>

                <!-- Service 3 -->
                <div
                    class="bg-white rounded-[2rem] overflow-hidden shadow-sm hover:shadow-xl transition-shadow duration-300 border border-lavender-100 group">
                    <div class="h-56 overflow-hidden">
                        <img src="{{ asset('images/spa3.png') }}" alt="Hair Spa"
                            class="w-full h-full object-cover group-hover:scale-105 transition duration-700">
                    </div>
                    <div class="p-8 text-center">
                        <h3 class="font-serif font-bold text-lavender-900 text-2xl mb-2">Herbal Hair Spa</h3>
                        <p class="text-sm text-lavender-600 font-light mb-6">Perawatan rambut rontok dan kulit kepala
                            berminyak menggunakan ekstrak ginseng dan lidah buaya asli.</p>
                        <p class="text-xl font-bold text-lavender-800 mb-6">Rp 120.000 <span
                                class="text-sm font-normal text-lavender-400">/ 60 Min</span></p>
                        <a href="#?text=Halo,%20saya%20mau%20booking%20Herbal%20Hair%20Spa" target="_blank"
                            class="block w-full border border-lavender-300 text-lavender-700 py-3 rounded-full font-semibold hover:bg-lavender-50 transition">
                            Pilih Treatment
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. RETAIL PRODUCT (SKINCARE LOKAL) -->
    <section id="produk" class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row items-center gap-16">
                <!-- Image -->
                <div class="w-full lg:w-1/2 relative">
                    <img src="{{ asset('images/spa-product.png') }}" alt="Lumina Skincare"
                        class="w-full h-auto object-cover rounded-[3rem] shadow-xl relative z-10">
                    <div class="absolute -top-6 -right-6 w-full h-full bg-pink-50 rounded-[3rem] z-0"></div>
                </div>

                <!-- Text -->
                <div class="w-full lg:w-1/2">
                    <span
                        class="text-lavender-600 font-semibold tracking-widest text-xs uppercase mb-4 block">Perawatan
                        Di Rumah</span>
                    <h3 class="text-4xl font-serif font-bold text-lavender-900 mb-6 leading-tight">Lumina Skincare
                        <br>Botanical Series.
                    </h3>
                    <p class="text-lavender-700 mb-6 font-light leading-relaxed">
                        Bawa pulang pengalaman spa Anda. Kami memproduksi rangkaian *skincare* lokal dalam jumlah
                        terbatas (artisan batch) untuk memastikan kualitas dan kesegaran bahan.
                    </p>

                    <div class="space-y-4 mb-8">
                        <div class="flex items-center gap-4 bg-pearl-50 p-4 rounded-2xl border border-lavender-100">
                            <img src="{{ asset('images/product1.png') }}" alt="Serum"
                                class="w-16 h-16 rounded-xl object-cover">
                            <div>
                                <h4 class="font-serif font-bold text-lavender-900 text-lg">Rosehip Brightening Serum
                                </h4>
                                <p class="text-sm font-bold text-lavender-600">Rp 89.000</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-4 bg-pearl-50 p-4 rounded-2xl border border-lavender-100">
                            <img src="{{ asset('images/product2.png') }}" alt="Scrub"
                                class="w-16 h-16 rounded-xl object-cover">
                            <div>
                                <h4 class="font-serif font-bold text-lavender-900 text-lg">Coffee & Honey Body Scrub
                                </h4>
                                <p class="text-sm font-bold text-lavender-600">Rp 65.000</p>
                            </div>
                        </div>
                    </div>

                    <a href="#"
                        class="inline-flex items-center gap-2 text-lavender-600 font-bold hover:text-lavender-800 transition uppercase tracking-wider text-sm border-b-2 border-lavender-300 pb-1">
                        Pesan Produk via WA <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- 6. TESTIMONI -->
    <section id="testimoni" class="py-24 bg-lavender-800 text-pearl-50">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <i class="fa-solid fa-quote-left text-4xl text-lavender-400 mb-8 opacity-50"></i>

            <div x-data="{ currentSlide: 0 }" class="relative">
                <!-- Slide 1 -->
                <div x-show="currentSlide === 0" x-transition.opacity.duration.700ms>
                    <p class="text-2xl md:text-3xl font-serif leading-relaxed mb-10 italic">
                        "Tempatnya sangat *cozy* dan bersih. Pijatannya pas banget, pegal-pegal sepulang kerja langsung
                        hilang. Terapisnya ramah dan tidak berisik, benar-benar menghargai privasi kita."
                    </p>
                    <div class="flex flex-col items-center">
                        <img src="{{ asset('images/pakaian-owner.png') }}" alt="Customer"
                            class="w-14 h-14 rounded-full object-cover mb-3 border-2 border-lavender-400">
                        <p class="font-bold text-lg">Sari Wulandari</p>
                        <p class="text-xs text-lavender-300 uppercase tracking-widest mt-1">Pelanggan Setia</p>
                    </div>
                </div>

                <!-- Custom dots -->
                <div class="mt-12 flex justify-center gap-3">
                    <button @click="currentSlide = 0"
                        class="w-2.5 h-2.5 rounded-full transition-all duration-300 bg-white"></button>
                    <!-- Simulated 2nd slide dot -->
                    <button @click="currentSlide = 0" class="w-2.5 h-2.5 rounded-full bg-lavender-500"></button>
                    <button @click="currentSlide = 0" class="w-2.5 h-2.5 rounded-full bg-lavender-500"></button>
                </div>
            </div>
        </div>
    </section>

    <!-- 7. FOOTER -->
    <footer class="bg-pearl-50 pt-20 pb-10 border-t border-lavender-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-16">
                <!-- Brand -->
                <div class="md:col-span-1">
                    <div class="flex items-center gap-2 mb-6">
                        <i class="fa-solid fa-spa text-lavender-600 text-2xl"></i>
                        <span class="text-3xl font-serif font-bold text-lavender-800 tracking-wide">
                            Lumina<span class="font-light text-lavender-500 italic">.</span>
                        </span>
                    </div>
                    <p class="text-lavender-700 font-light text-sm leading-relaxed mb-6">Oase ketenangan di tengah
                        hiruk-pikuk kota. Menyediakan layanan kecantikan holistik untuk wanita modern.</p>
                    <div class="flex gap-4">
                        <a href="#"
                            class="w-10 h-10 bg-white border border-lavender-200 rounded-full flex items-center justify-center hover:bg-lavender-600 hover:text-white hover:border-lavender-600 transition text-lavender-600"><i
                                class="fa-brands fa-instagram"></i></a>
                        <a href="#"
                            class="w-10 h-10 bg-white border border-lavender-200 rounded-full flex items-center justify-center hover:bg-lavender-600 hover:text-white hover:border-lavender-600 transition text-lavender-600"><i
                                class="fa-brands fa-tiktok"></i></a>
                    </div>
                </div>

                <!-- Navigasi -->
                <div>
                    <h4 class="font-bold text-lavender-900 uppercase tracking-widest text-xs mb-6">Eksplorasi</h4>
                    <ul class="space-y-4 text-sm font-light text-lavender-700">
                        <li><a href="#hero" class="hover:text-lavender-500 transition">Tentang Kami</a></li>
                        <li><a href="#layanan" class="hover:text-lavender-500 transition">Daftar Layanan Spa</a></li>
                        <li><a href="#produk" class="hover:text-lavender-500 transition">Toko Skincare</a></li>
                        <li><a href="#" class="hover:text-lavender-500 transition">Karir Terapis</a></li>
                    </ul>
                </div>

                <!-- Info Operasional -->
                <div>
                    <h4 class="font-bold text-lavender-900 uppercase tracking-widest text-xs mb-6">Jam Operasional</h4>
                    <ul class="space-y-3 text-sm font-light text-lavender-700">
                        <li class="flex justify-between border-b border-lavender-100 pb-2"><span>Senin - Jumat:</span>
                            <span>09:00 - 20:00</span>
                        </li>
                        <li class="flex justify-between border-b border-lavender-100 pb-2"><span>Sabtu - Minggu:</span>
                            <span>08:00 - 21:00</span>
                        </li>
                        <li class="text-xs text-lavender-500 pt-2 italic">*Khusus Wanita (Women Only)</li>
                    </ul>
                </div>

                <!-- Kontak -->
                <div>
                    <h4 class="font-bold text-lavender-900 uppercase tracking-widest text-xs mb-6">Kunjungi Kami</h4>
                    <ul class="space-y-4 text-sm font-light text-lavender-700">
                        <li class="flex items-start gap-3"><i
                                class="fa-solid fa-location-dot mt-1 text-lavender-500"></i> Ruko Cempaka Putih Blok
                            D-4, Jalan Anggrek, Kota Kembang.</li>
                        <li class="flex items-center gap-3"><i class="fa-solid fa-phone text-lavender-500"></i>
                            0812-3456-7890</li>
                    </ul>
                </div>
            </div>

            <!-- Copyright -->
            <div
                class="border-t border-lavender-100 pt-8 flex flex-col md:flex-row justify-between items-center gap-4 text-xs font-light text-lavender-500 tracking-widest uppercase">
                <p>&copy; 2026 Lumina Beauty & Spa. Hak Cipta Dilindungi.</p>
                <p>Website by YourAgency.</p>
            </div>
        </div>
    </footer>

</body>

</html>
