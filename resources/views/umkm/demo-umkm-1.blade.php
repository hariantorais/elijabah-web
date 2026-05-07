<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UMKM Kuliner - Fresh & Friendly Theme</title>

    <!-- Tailwind CSS & Alpine JS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Font: Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brand: {
                            50: '#fff7ed',
                            100: '#ffedd5',
                            400: '#fb923c',
                            500: '#f97316', // Main Orange
                            600: '#ea580c',
                            900: '#7c2d12',
                        },
                        accent: {
                            500: '#eab308', // Yellow
                        }
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
            background-color: #fafaf9;
        }

        [x-cloak] {
            display: none !important;
        }

        /* Custom blob shape for hero image */
        .blob-shape {
            border-radius: 40% 60% 70% 30% / 40% 50% 60% 50%;
        }
    </style>
</head>

<body class="text-gray-800 antialiased selection:bg-brand-500 selection:text-white">

    <!-- 1. NAVBAR -->
    <nav x-data="{ mobileMenu: false, scrolled: false }" @scroll.window="scrolled = (window.pageYOffset > 20)"
        class="fixed w-full z-50 transition-all duration-300"
        :class="scrolled ? 'bg-white/95 backdrop-blur-md shadow-sm py-3' : 'bg-transparent py-5'">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center gap-2">
                    <div
                        class="w-10 h-10 bg-brand-500 text-white rounded-full flex items-center justify-center text-xl shadow-lg shadow-brand-500/30">
                        <i class="fa-solid fa-burger"></i>
                    </div>
                    <span class="text-2xl font-extrabold text-gray-900 tracking-tight">Lezat<span
                            class="text-brand-500">Nia</span></span>
                </div>

                <!-- Desktop Menu -->
                <div class="hidden md:flex space-x-8 items-center font-semibold text-gray-600">
                    <a href="#hero" class="hover:text-brand-500 transition">Beranda</a>
                    <a href="#menu" class="hover:text-brand-500 transition">Menu Kami</a>
                    <a href="#tentang" class="hover:text-brand-500 transition">Tentang</a>
                    <a href="#testimoni" class="hover:text-brand-500 transition">Review</a>
                </div>

                <!-- Desktop CTA -->
                <div class="hidden md:block">
                    <a href="#"
                        class="bg-brand-500 text-white px-6 py-2.5 rounded-full font-bold hover:bg-brand-600 transition shadow-lg shadow-brand-500/30 flex items-center gap-2">
                        <i class="fa-brands fa-whatsapp text-lg"></i> Pesan Sekarang
                    </a>
                </div>

                <!-- Mobile Button -->
                <div class="md:hidden flex items-center">
                    <button @click="mobileMenu = !mobileMenu" class="text-gray-900 focus:outline-none text-2xl">
                        <i class="fa-solid" :class="mobileMenu ? 'fa-xmark' : 'fa-bars'"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div x-cloak x-show="mobileMenu" x-transition
            class="md:hidden bg-white absolute w-full shadow-xl border-t border-gray-100">
            <div class="px-4 py-6 space-y-4 text-center">
                <a href="#hero" @click="mobileMenu = false"
                    class="block font-semibold text-gray-700 text-lg hover:text-brand-500">Beranda</a>
                <a href="#menu" @click="mobileMenu = false"
                    class="block font-semibold text-gray-700 text-lg hover:text-brand-500">Daftar Menu</a>
                <a href="#tentang" @click="mobileMenu = false"
                    class="block font-semibold text-gray-700 text-lg hover:text-brand-500">Tentang Kami</a>
                <a href="#testimoni" @click="mobileMenu = false"
                    class="block font-semibold text-gray-700 text-lg hover:text-brand-500">Testimoni</a>
                <a href="#"
                    class="block w-full bg-brand-500 text-white py-3 rounded-full font-bold mt-4 shadow-md">
                    <i class="fa-brands fa-whatsapp"></i> Chat via WhatsApp
                </a>
            </div>
        </div>
    </nav>

    <!-- 2. HERO SECTION -->
    <section id="hero" class="relative pt-32 pb-20 lg:pt-40 lg:pb-28 overflow-hidden bg-brand-50">
        <!-- Decorative Background Elements -->
        <div
            class="absolute top-20 right-10 w-64 h-64 bg-accent-500/20 rounded-full mix-blend-multiply filter blur-3xl opacity-70 animate-blob">
        </div>
        <div
            class="absolute bottom-10 left-10 w-72 h-72 bg-brand-500/20 rounded-full mix-blend-multiply filter blur-3xl opacity-70 animate-blob animation-delay-2000">
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="flex flex-col lg:flex-row items-center gap-12">

                <!-- Text Content -->
                <div class="w-full lg:w-1/2 text-center lg:text-left">
                    <div
                        class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-orange-100 text-brand-600 font-bold text-sm mb-6 border border-orange-200">
                        <i class="fa-solid fa-fire text-brand-500"></i> Fresh dari Dapur Kami
                    </div>
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-gray-900 leading-tight mb-6">
                        Rasakan <span class="text-brand-500">Kenikmatan</span> di Setiap Gigitannya.
                    </h1>
                    <p class="text-lg text-gray-600 mb-8 max-w-lg mx-auto lg:mx-0 font-medium">
                        Dibuat dengan bahan-bahan premium pilihan dan resep rahasia keluarga. Siap memanjakan lidah Anda
                        kapan saja!
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                        <a href="#menu"
                            class="bg-brand-500 text-white px-8 py-4 rounded-full font-bold hover:bg-brand-600 transition shadow-lg shadow-brand-500/30 text-center text-lg">
                            Lihat Menu Kami
                        </a>
                        <a href="#tentang"
                            class="bg-white border-2 border-brand-100 text-brand-600 px-8 py-4 rounded-full font-bold hover:bg-brand-50 transition text-center text-lg">
                            Cerita Kami
                        </a>
                    </div>

                    <!-- Social Proof / Delivery info -->
                    <div
                        class="mt-8 flex items-center justify-center lg:justify-start gap-4 text-sm font-semibold text-gray-500">
                        <div class="flex items-center gap-1"><i class="fa-solid fa-motorcycle text-brand-500"></i> Bisa
                            Delivery</div>
                        <span class="w-1.5 h-1.5 bg-gray-300 rounded-full"></span>
                        <div class="flex items-center gap-1"><i class="fa-solid fa-star text-accent-500"></i> Rating
                            4.9/5</div>
                        <span class="w-1.5 h-1.5 bg-gray-300 rounded-full"></span>
                        <div class="flex items-center gap-1"><i class="fa-solid fa-certificate text-green-500"></i> 100%
                            Halal</div>
                    </div>
                </div>

                <!-- Image Content -->
                <div class="w-full lg:w-1/2 relative">
                    <img src="{{ asset('images/kuliner1.png') }}" alt="Produk Unggulan"
                        class="w-full max-w-md mx-auto object-cover blob-shape shadow-2xl border-4 border-white relative z-10">

                    <!-- Floating Badge -->
                    <div class="absolute bottom-10 -left-6 md:left-10 bg-white p-4 rounded-2xl shadow-xl border border-gray-100 z-20 animate-bounce"
                        style="animation-duration: 3s;">
                        <div class="flex items-center gap-3">
                            <div
                                class="w-10 h-10 bg-green-100 text-green-600 rounded-full flex items-center justify-center text-xl">
                                <i class="fa-solid fa-leaf"></i>
                            </div>
                            <div>
                                <p class="text-xs text-gray-500 font-bold uppercase">Kualitas</p>
                                <p class="font-extrabold text-gray-900">Bahan Segar</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. KEUNGGULAN -->
    <section class="py-16 bg-white relative -mt-6 z-20 rounded-t-[3rem]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div
                class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center divide-y md:divide-y-0 md:divide-x divide-gray-100">
                <div class="p-6">
                    <div
                        class="w-16 h-16 bg-brand-50 text-brand-500 rounded-full flex items-center justify-center text-3xl mx-auto mb-4">
                        <i class="fa-solid fa-kitchen-set"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Resep Autentik</h3>
                    <p class="text-gray-500 text-sm">Dimasak dengan bumbu rempah pilihan yang menjaga cita rasa asli
                        sejak dulu.</p>
                </div>
                <div class="p-6">
                    <div
                        class="w-16 h-16 bg-brand-50 text-brand-500 rounded-full flex items-center justify-center text-3xl mx-auto mb-4">
                        <i class="fa-solid fa-stopwatch"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Dibuat Fresh</h3>
                    <p class="text-gray-500 text-sm">Tidak ada produk kemarin. Semua pesanan dibuat segar di hari yang
                        sama.</p>
                </div>
                <div class="p-6">
                    <div
                        class="w-16 h-16 bg-brand-50 text-brand-500 rounded-full flex items-center justify-center text-3xl mx-auto mb-4">
                        <i class="fa-solid fa-box-open"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Kemasan Aman</h3>
                    <p class="text-gray-500 text-sm">Dikemas secara higienis dengan packaging food-grade yang ramah
                        lingkungan.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. DAFTAR MENU (KATALOG PRODUK) -->
    <section id="menu" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <span class="text-brand-500 font-bold tracking-widest text-sm uppercase mb-2 block">Katalog
                    Produk</span>
                <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900">Menu Andalan Kami</h2>
                <p class="text-gray-600 mt-4 max-w-2xl mx-auto">Pilih produk favorit Anda. Klik pesan untuk langsung
                    terhubung dengan admin kami via WhatsApp.</p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Produk 1 (Best Seller) -->
                <div
                    class="bg-white rounded-3xl overflow-hidden shadow-sm hover:shadow-xl transition-shadow duration-300 border border-gray-100 group relative">
                    <div
                        class="absolute top-4 left-4 bg-red-500 text-white text-xs font-bold px-3 py-1 rounded-full z-10 shadow-md">
                        Best Seller</div>
                    <div class="h-48 overflow-hidden relative">
                        <img src="{{ asset('images/kuliner1.png') }}" alt="Produk 1"
                            class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-1">Ayam Bakar Madu</h3>
                        <p class="text-gray-500 text-xs mb-4 line-clamp-2">Ayam pilihan dibakar dengan olesan madu
                            murni dan rempah rahasia. Free lalapan & sambal.</p>
                        <div class="flex justify-between items-center mb-4">
                            <span class="text-2xl font-black text-brand-600">Rp 35.000</span>
                        </div>
                        <a href="#?text=Halo%20min,%20saya%20mau%20pesan%20Ayam%20Bakar%20Madu" target="_blank"
                            class="block w-full text-center bg-green-500 text-white py-2.5 rounded-xl font-bold hover:bg-green-600 transition flex justify-center items-center gap-2">
                            <i class="fa-brands fa-whatsapp text-lg"></i> Pesan
                        </a>
                    </div>
                </div>

                <!-- Produk 2 -->
                <div
                    class="bg-white rounded-3xl overflow-hidden shadow-sm hover:shadow-xl transition-shadow duration-300 border border-gray-100 group">
                    <div class="h-48 overflow-hidden relative">
                        <img src="{{ asset('images/kuliner2.png') }}" alt="Produk 2"
                            class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-1">Nasi Goreng Spesial</h3>
                        <p class="text-gray-500 text-xs mb-4 line-clamp-2">Nasi goreng dengan bumbu rempah Jawa, telur
                            mata sapi, ayam suwir, dan kerupuk.</p>
                        <div class="flex justify-between items-center mb-4">
                            <span class="text-2xl font-black text-brand-600">Rp 25.000</span>
                        </div>
                        <a href="#?text=Halo%20min,%20saya%20mau%20pesan%20Nasi%20Goreng%20Spesial" target="_blank"
                            class="block w-full text-center bg-green-500 text-white py-2.5 rounded-xl font-bold hover:bg-green-600 transition flex justify-center items-center gap-2">
                            <i class="fa-brands fa-whatsapp text-lg"></i> Pesan
                        </a>
                    </div>
                </div>

                <!-- Produk 3 -->
                <div
                    class="bg-white rounded-3xl overflow-hidden shadow-sm hover:shadow-xl transition-shadow duration-300 border border-gray-100 group">
                    <div class="h-48 overflow-hidden relative">
                        <img src="{{ asset('images/kuliner3.png') }}" alt="Produk 3"
                            class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-1">Es Kopi Susu Aren</h3>
                        <p class="text-gray-500 text-xs mb-4 line-clamp-2">Perpaduan espresso arabica murni dengan susu
                            segar dan manisnya gula aren asli.</p>
                        <div class="flex justify-between items-center mb-4">
                            <span class="text-2xl font-black text-brand-600">Rp 18.000</span>
                        </div>
                        <a href="#?text=Halo%20min,%20saya%20mau%20pesan%20Es%20Kopi%20Susu%20Aren" target="_blank"
                            class="block w-full text-center bg-green-500 text-white py-2.5 rounded-xl font-bold hover:bg-green-600 transition flex justify-center items-center gap-2">
                            <i class="fa-brands fa-whatsapp text-lg"></i> Pesan
                        </a>
                    </div>
                </div>

                <!-- Produk 4 -->
                <div
                    class="bg-white rounded-3xl overflow-hidden shadow-sm hover:shadow-xl transition-shadow duration-300 border border-gray-100 group relative">
                    <div
                        class="absolute top-4 left-4 bg-brand-500 text-white text-xs font-bold px-3 py-1 rounded-full z-10 shadow-md">
                        Promo</div>
                    <div class="h-48 overflow-hidden relative">
                        <img src="{{ asset('images/kuliner4.png') }}" alt="Produk 4"
                            class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-1">Paket Kenyang (Ber-2)</h3>
                        <p class="text-gray-500 text-xs mb-4 line-clamp-2">2 Nasi Putih + 2 Ayam Geprek + 2 Es Teh
                            Manis. Cocok untuk makan siang bareng.</p>
                        <div class="flex justify-between items-center mb-4">
                            <div class="flex flex-col">
                                <span class="text-xs text-gray-400 line-through">Rp 60.000</span>
                                <span class="text-2xl font-black text-brand-600">Rp 45.000</span>
                            </div>
                        </div>
                        <a href="#?text=Halo%20min,%20saya%20mau%20pesan%20Paket%20Kenyang" target="_blank"
                            class="block w-full text-center bg-green-500 text-white py-2.5 rounded-xl font-bold hover:bg-green-600 transition flex justify-center items-center gap-2">
                            <i class="fa-brands fa-whatsapp text-lg"></i> Pesan
                        </a>
                    </div>
                </div>
            </div>

            <!-- Button Lihat Full Menu (Optional for link to GoFood/ShopeeFood) -->
            <div class="text-center mt-12">
                <a href="#"
                    class="inline-flex items-center gap-2 bg-white border-2 border-brand-500 text-brand-600 px-8 py-3 rounded-full font-bold hover:bg-brand-50 transition">
                    Lihat Semua Menu di GoFood <i class="fa-solid fa-arrow-up-right-from-square text-sm"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- 5. TENTANG KAMI -->
    <section id="tentang" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row items-center gap-16">
                <!-- Image Collage -->
                <div class="w-full lg:w-1/2 relative">
                    <div class="absolute -inset-4 bg-orange-100 rounded-[3rem] transform -rotate-3 z-0"></div>
                    <img src="{{ asset('images/kuliner1.png') }}" alt="Proses Memasak"
                        class="rounded-[3rem] shadow-xl w-full h-[400px] object-cover relative z-10">
                    <div
                        class="absolute -bottom-6 -right-6 bg-white p-6 rounded-3xl shadow-lg border border-gray-100 z-20 hidden md:block">
                        <p class="text-4xl font-black text-brand-500 mb-1">5+</p>
                        <p class="text-sm font-bold text-gray-600">Tahun Melayani</p>
                    </div>
                </div>

                <!-- Text Content -->
                <div class="w-full lg:w-1/2">
                    <span class="text-brand-500 font-bold tracking-widest text-sm uppercase mb-2 block">Cerita
                        Kami</span>
                    <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 mb-6">Berawal Dari Dapur Rumah Untuk
                        Anda.</h2>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        LezatNia bermula dari hobi memasak di dapur kecil keluarga pada tahun 2019. Resep yang awalnya
                        hanya dinikmati oleh kerabat, kini telah memanjakan ribuan pelanggan di kota ini.
                    </p>
                    <p class="text-gray-600 mb-8 leading-relaxed">
                        Kami sangat menjaga kebersihan dan kualitas bahan baku. Prinsip kami sederhana:
                        <strong>Menyajikan makanan yang sama amannya dengan makanan untuk keluarga kami
                            sendiri.</strong> Terima kasih telah menjadi bagian dari perjalanan UMKM lokal kami!
                    </p>

                    <div class="flex items-center gap-4">
                        <img src="{{ asset('images/owner.png') }}" alt="Owner"
                            class="w-14 h-14 rounded-full object-cover ring-2 ring-brand-500">
                        <div>
                            <p class="text-gray-900 font-bold text-lg">Nia Kurniawati</p>
                            <p class="text-gray-500 text-sm">Owner LezatNia</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 6. TESTIMONI -->
    <section id="testimoni" class="py-20 bg-brand-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <span class="text-brand-500 font-bold tracking-widest text-sm uppercase mb-2 block">Kata Mereka</span>
                <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900">Review Pelanggan Setia</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Testimoni 1 -->
                <div class="bg-white p-8 rounded-3xl shadow-sm border border-orange-100 relative">
                    <i class="fa-solid fa-quote-right absolute top-6 right-6 text-4xl text-orange-100"></i>
                    <div class="flex text-accent-500 mb-4 text-sm"><i class="fa-solid fa-star"></i><i
                            class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                            class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
                    <p class="text-gray-600 mb-6 relative z-10 italic">"Gak nyangka ayam bakarnya se-enak ini! Bumbunya
                        meresap sampai ke tulang, porsinya juga ngenyangin banget. Recommended buat makan siang kantor."
                    </p>
                    <div class="flex items-center gap-3">
                        <div
                            class="w-10 h-10 bg-gray-200 rounded-full flex items-center justify-center font-bold text-gray-600">
                            B</div>
                        <div>
                            <p class="font-bold text-gray-900 text-sm">Budi Santoso</p>
                            <p class="text-xs text-gray-500">Pegawai Kantoran</p>
                        </div>
                    </div>
                </div>
                <!-- Testimoni 2 -->
                <div class="bg-white p-8 rounded-3xl shadow-sm border border-orange-100 relative">
                    <i class="fa-solid fa-quote-right absolute top-6 right-6 text-4xl text-orange-100"></i>
                    <div class="flex text-accent-500 mb-4 text-sm"><i class="fa-solid fa-star"></i><i
                            class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                            class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i></div>
                    <p class="text-gray-600 mb-6 relative z-10 italic">"Kopi susu arennya juara! Pas banget manisnya
                        gak bikin eneg. Udah langganan pesen via WA tiap sore buat nemenin nugas. Sukses terus ya!"</p>
                    <div class="flex items-center gap-3">
                        <div
                            class="w-10 h-10 bg-gray-200 rounded-full flex items-center justify-center font-bold text-gray-600">
                            S</div>
                        <div>
                            <p class="font-bold text-gray-900 text-sm">Siska Amanda</p>
                            <p class="text-xs text-gray-500">Mahasiswi</p>
                        </div>
                    </div>
                </div>
                <!-- Testimoni 3 -->
                <div class="bg-white p-8 rounded-3xl shadow-sm border border-orange-100 relative">
                    <i class="fa-solid fa-quote-right absolute top-6 right-6 text-4xl text-orange-100"></i>
                    <div class="flex text-accent-500 mb-4 text-sm"><i class="fa-solid fa-star"></i><i
                            class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                            class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
                    <p class="text-gray-600 mb-6 relative z-10 italic">"Pesan buat acara arisan keluarga, adminnya
                        ramah banget dan pengiriman on-time. Semua keluarga bilang masakannya enak kayak masakan rumah."
                    </p>
                    <div class="flex items-center gap-3">
                        <div
                            class="w-10 h-10 bg-gray-200 rounded-full flex items-center justify-center font-bold text-gray-600">
                            I</div>
                        <div>
                            <p class="font-bold text-gray-900 text-sm">Ibu Rini</p>
                            <p class="text-xs text-gray-500">Ibu Rumah Tangga</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 7. INSTAGRAM FEED & CTA -->
    <section class="py-20 bg-white border-b border-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-brand-500 rounded-[3rem] p-10 md:p-16 text-center text-white relative overflow-hidden">
                <!-- Background Pattern -->
                <div class="absolute inset-0 opacity-10"
                    style="background-image: radial-gradient(#ffffff 2px, transparent 2px); background-size: 30px 30px;">
                </div>

                <div class="relative z-10 max-w-2xl mx-auto">
                    <h2 class="text-3xl md:text-5xl font-extrabold mb-6">Lapar? Jangan Ditahan!</h2>
                    <p class="text-brand-100 text-lg mb-8">Pesan sekarang dan nikmati promo gratis ongkir untuk area
                        berjarak maksimal 3KM dari dapur kami.</p>
                    <a href="#"
                        class="inline-flex items-center gap-3 bg-white text-brand-600 px-8 py-4 rounded-full font-bold text-lg hover:bg-gray-50 transition shadow-xl">
                        <i class="fa-brands fa-whatsapp text-2xl text-green-500"></i> Pesan via WhatsApp Sekarang
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- 8. FOOTER -->
    <footer class="bg-white pt-16 pb-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-12">
                <!-- Brand Info -->
                <div class="md:col-span-1">
                    <div class="flex items-center gap-2 mb-6">
                        <div
                            class="w-8 h-8 bg-brand-500 text-white rounded-full flex items-center justify-center text-sm">
                            <i class="fa-solid fa-burger"></i>
                        </div>
                        <span class="text-xl font-extrabold text-gray-900 tracking-tight">Lezat<span
                                class="text-brand-500">Nia</span></span>
                    </div>
                    <p class="text-gray-500 text-sm leading-relaxed mb-6">Menyajikan hidangan autentik yang dimasak
                        dengan penuh cinta untuk menemani hari-hari Anda.</p>
                    <div class="flex gap-4">
                        <a href="#"
                            class="w-10 h-10 bg-brand-50 text-brand-500 rounded-full flex items-center justify-center hover:bg-brand-500 hover:text-white transition"><i
                                class="fa-brands fa-instagram"></i></a>
                        <a href="#"
                            class="w-10 h-10 bg-brand-50 text-brand-500 rounded-full flex items-center justify-center hover:bg-brand-500 hover:text-white transition"><i
                                class="fa-brands fa-tiktok"></i></a>
                        <a href="#"
                            class="w-10 h-10 bg-brand-50 text-brand-500 rounded-full flex items-center justify-center hover:bg-brand-500 hover:text-white transition"><i
                                class="fa-brands fa-facebook-f"></i></a>
                    </div>
                </div>

                <!-- Navigasi -->
                <div>
                    <h4 class="font-bold text-gray-900 mb-6">Navigasi</h4>
                    <ul class="space-y-3 text-sm text-gray-500">
                        <li><a href="#hero" class="hover:text-brand-500 transition">Beranda</a></li>
                        <li><a href="#menu" class="hover:text-brand-500 transition">Daftar Menu</a></li>
                        <li><a href="#tentang" class="hover:text-brand-500 transition">Cerita Kami</a></li>
                        <li><a href="#testimoni" class="hover:text-brand-500 transition">Testimoni Pelanggan</a></li>
                    </ul>
                </div>

                <!-- Waktu Operasional -->
                <div>
                    <h4 class="font-bold text-gray-900 mb-6">Jam Operasional</h4>
                    <ul class="space-y-3 text-sm text-gray-500">
                        <li class="flex justify-between border-b border-gray-100 pb-2"><span>Senin - Jumat:</span>
                            <span class="font-semibold text-gray-900">09:00 - 21:00</span>
                        </li>
                        <li class="flex justify-between border-b border-gray-100 pb-2"><span>Sabtu - Minggu:</span>
                            <span class="font-semibold text-gray-900">10:00 - 22:00</span>
                        </li>
                        <li class="flex justify-between pt-1"><span>Hari Libur Nasional:</span> <span
                                class="font-semibold text-red-500">Tutup</span></li>
                    </ul>
                </div>

                <!-- Kontak -->
                <div>
                    <h4 class="font-bold text-gray-900 mb-6">Kunjungi Kami</h4>
                    <ul class="space-y-4 text-sm text-gray-500">
                        <li class="flex items-start gap-3"><i
                                class="fa-solid fa-location-dot mt-1 text-brand-500"></i> Jl. Ahmad Yani No. 123, Pusat
                            Kota, Batam 29432</li>
                        <li class="flex items-center gap-3"><i class="fa-solid fa-phone text-brand-500"></i>
                            0812-3456-7890 (WA Only)</li>
                        <li class="mt-4">
                            <!-- Link Gmaps -->
                            <a href="#"
                                class="inline-flex items-center gap-2 text-brand-600 font-semibold hover:text-brand-700">
                                Buka di Google Maps <i class="fa-solid fa-arrow-right text-xs"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-gray-100 pt-8 text-center text-gray-400 text-sm font-medium">
                &copy; 2026 LezatNia UMKM. Hak Cipta Dilindungi. Dibuat dengan cinta di Indonesia.
            </div>
        </div>
    </footer>

</body>

</html>
