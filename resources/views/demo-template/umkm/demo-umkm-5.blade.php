<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UMKM Urban - Edgy & Neo-Brutalism Theme</title>

    <!-- Tailwind CSS & Alpine JS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Fonts: Oswald (Headings) & Inter (Body) -->
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Oswald:wght@400;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        dark: '#09090b', // zinc-950
                        light: '#fafafa', // zinc-50
                        accent: '#ef4444', // red-500
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        display: ['Oswald', 'sans-serif'],
                    },
                    boxShadow: {
                        'brutal': '4px 4px 0px 0px rgba(9, 9, 11, 1)',
                        'brutal-lg': '8px 8px 0px 0px rgba(9, 9, 11, 1)',
                        'brutal-accent': '4px 4px 0px 0px rgba(239, 68, 68, 1)',
                    }
                }
            }
        }
    </script>

    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #fafafa;
            color: #09090b;
        }

        [x-cloak] {
            display: none !important;
        }

        /* Marquee Animation */
        .marquee-container {
            overflow: hidden;
            white-space: nowrap;
            display: flex;
        }

        .marquee-content {
            display: flex;
            animation: marquee 15s linear infinite;
        }

        @keyframes marquee {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(-50%);
            }
        }

        /* Glitch or Hard Hover effects */
        .hover-invert:hover {
            background-color: #09090b;
            color: #fafafa;
        }
    </style>
</head>

<body class="antialiased selection:bg-accent selection:text-white">

    <!-- 1. NAVBAR (THICK BORDERS) -->
    <nav x-data="{ mobileMenu: false }" class="fixed w-full z-50 bg-light border-b-4 border-dark">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center gap-2">
                    <span class="text-3xl font-display font-bold uppercase tracking-widest">
                        Fresh<span class="text-accent">Kicks.</span>
                    </span>
                </div>

                <!-- Desktop Menu -->
                <div
                    class="hidden md:flex items-center gap-8 font-display text-lg font-semibold uppercase tracking-wider">
                    <a href="#hero" class="hover:text-accent transition">Home</a>
                    <a href="#layanan" class="hover:text-accent transition">Layanan</a>
                    <a href="#portfolio" class="hover:text-accent transition">Hasil Kerja</a>
                    <a href="#lokasi" class="hover:text-accent transition">Lokasi</a>
                </div>

                <!-- Desktop CTA -->
                <div class="hidden md:block">
                    <a href="#"
                        class="bg-accent text-light border-2 border-dark px-6 py-2 font-display text-lg font-bold uppercase tracking-widest shadow-brutal hover:translate-x-[2px] hover:translate-y-[2px] hover:shadow-none transition-all">
                        Booking WA
                    </a>
                </div>

                <!-- Mobile Button -->
                <div class="md:hidden flex items-center">
                    <button @click="mobileMenu = !mobileMenu" class="text-dark focus:outline-none text-3xl">
                        <i class="fa-solid" :class="mobileMenu ? 'fa-xmark' : 'fa-bars'"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div x-cloak x-show="mobileMenu" x-transition class="md:hidden bg-light absolute w-full border-b-4 border-dark">
            <div
                class="flex flex-col text-center font-display text-xl font-bold uppercase tracking-widest divide-y-2 divide-dark">
                <a href="#hero" @click="mobileMenu = false"
                    class="py-4 hover:bg-dark hover:text-light transition">Home</a>
                <a href="#layanan" @click="mobileMenu = false"
                    class="py-4 hover:bg-dark hover:text-light transition">Daftar Layanan</a>
                <a href="#portfolio" @click="mobileMenu = false"
                    class="py-4 hover:bg-dark hover:text-light transition">Before & After</a>
                <div class="p-6">
                    <a href="#"
                        class="block w-full bg-accent text-light border-2 border-dark py-3 shadow-brutal active:translate-x-[2px] active:translate-y-[2px] active:shadow-none">
                        Drop / Pick-up Sekarang
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- 2. HERO SECTION -->
    <section id="hero" class="pt-32 pb-20 lg:pt-40 lg:pb-32 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto">
        <div class="flex flex-col lg:flex-row items-center gap-12">

            <!-- Text Content -->
            <div class="w-full lg:w-1/2">
                <div
                    class="inline-block border-2 border-dark px-4 py-1 font-display font-bold uppercase tracking-widest text-sm bg-accent text-light mb-6 shadow-brutal">
                    #1 Shoe Care di Kota Ini
                </div>
                <h1 class="text-6xl lg:text-7xl xl:text-8xl font-display font-bold uppercase leading-[0.9] mb-6">
                    Bikin <br>
                    Sneakers <br>
                    <span class="text-transparent bg-clip-text bg-accent" style="-webkit-text-stroke: 2px #09090b;">Baru
                        Lagi.</span>
                </h1>
                <p class="font-sans text-lg text-gray-700 mb-10 max-w-md font-medium">
                    Kotor, kuning, atau pudar? Bawa ke mari. Kami ahlinya mengembalikan kejayaan sepatu kesayanganmu
                    dengan premium chemical.
                </p>
                <div class="flex flex-wrap gap-6">
                    <a href="#layanan"
                        class="bg-dark text-light border-2 border-dark px-8 py-4 font-display text-xl font-bold uppercase tracking-widest shadow-brutal hover:translate-x-[2px] hover:translate-y-[2px] hover:shadow-none transition-all flex items-center gap-3">
                        Cek Harga <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Image Content -->
            <div class="w-full lg:w-1/2 relative">
                <!-- Brutalism Background Box -->
                <div class="absolute inset-0 bg-accent transform translate-x-4 translate-y-4 border-4 border-dark z-0">
                </div>
                <img src="{{ asset('images/urban-hero.png') }}" alt="Cuci Sepatu"
                    class="w-full h-auto object-cover border-4 border-dark relative z-10 grayscale hover:grayscale-0 transition duration-500">

                <!-- Floating Badge -->
                <div
                    class="absolute -bottom-6 -left-6 bg-light border-4 border-dark p-4 shadow-brutal z-20 flex items-center gap-4 hover:-translate-y-2 transition duration-300">
                    <i class="fa-solid fa-truck-fast text-3xl text-accent"></i>
                    <div>
                        <p class="font-display font-bold text-xl uppercase tracking-wider">Free Pick-Up</p>
                        <p class="font-sans text-sm font-bold">Min. 3 Pasang Sepatu</p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- 3. SCROLLING MARQUEE (TICKER) -->
    <div class="bg-dark text-light py-4 border-y-4 border-dark transform -rotate-1 scale-105 my-10 overflow-hidden">
        <div class="marquee-container font-display text-2xl font-bold uppercase tracking-widest">
            <div class="marquee-content flex gap-8">
                <span>• DEEP CLEANING</span>
                <span>• UNYELLOWING</span>
                <span>• REPAINT</span>
                <span>• REGLUE</span>
                <span>• LEATHER CARE</span>
                <span>• WATER REPELLENT</span>
                <!-- Duplicate for infinite scroll loop -->
                <span>• DEEP CLEANING</span>
                <span>• UNYELLOWING</span>
                <span>• REPAINT</span>
                <span>• REGLUE</span>
                <span>• LEATHER CARE</span>
                <span>• WATER REPELLENT</span>
            </div>
        </div>
    </div>

    <!-- 4. SERVICES (LAYANAN KAMI) -->
    <section id="layanan" class="py-20 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row justify-between items-end mb-16 gap-6">
            <div>
                <h2 class="text-5xl lg:text-6xl font-display font-bold uppercase leading-none mb-2">Pilih Treatment.
                </h2>
                <p class="font-sans font-medium text-gray-600 text-lg">Sesuaikan dengan kebutuhan dan kondisi sepatumu.
                </p>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Service 1 -->
            <div
                class="bg-light border-4 border-dark p-6 shadow-brutal hover:-translate-y-2 hover:shadow-brutal-lg transition-all duration-300 flex flex-col h-full">
                <i class="fa-solid fa-soap text-4xl text-accent mb-6"></i>
                <h3 class="font-display text-2xl font-bold uppercase tracking-wider mb-2">Deep Clean</h3>
                <p class="font-sans text-sm text-gray-600 mb-6 flex-grow">Pencucian detail ke seluruh bagian sepatu.
                    Outsole, insole, upper, sampai tali sepatu. Bersih wangi maksimal.</p>
                <div class="border-t-2 border-dark pt-4 mt-auto">
                    <p class="font-display text-2xl font-bold">Rp 45.000</p>
                    <a href="#"
                        class="mt-4 block text-center w-full bg-dark text-light border-2 border-dark py-2 font-display font-bold uppercase hover:bg-light hover:text-dark transition">Order</a>
                </div>
            </div>

            <!-- Service 2 -->
            <div
                class="bg-accent border-4 border-dark p-6 shadow-brutal hover:-translate-y-2 hover:shadow-brutal-lg transition-all duration-300 flex flex-col h-full text-dark">
                <div class="flex justify-between items-start mb-6">
                    <i class="fa-solid fa-sun text-4xl"></i>
                    <span class="bg-dark text-light text-[10px] font-display font-bold uppercase px-2 py-1">Best
                        Seller</span>
                </div>
                <h3 class="font-display text-2xl font-bold uppercase tracking-wider mb-2">Unyellowing</h3>
                <p class="font-sans text-sm font-medium mb-6 flex-grow">Menghilangkan warna kuning pada midsole akibat
                    oksidasi. Sol sepatu kembali putih cerah seperti baru beli.</p>
                <div class="border-t-2 border-dark pt-4 mt-auto">
                    <p class="font-display text-2xl font-bold">Rp 65.000</p>
                    <a href="#"
                        class="mt-4 block text-center w-full bg-light text-dark border-2 border-dark py-2 font-display font-bold uppercase hover:bg-dark hover:text-light transition">Order</a>
                </div>
            </div>

            <!-- Service 3 -->
            <div
                class="bg-light border-4 border-dark p-6 shadow-brutal hover:-translate-y-2 hover:shadow-brutal-lg transition-all duration-300 flex flex-col h-full">
                <i class="fa-solid fa-paintbrush text-4xl text-accent mb-6"></i>
                <h3 class="font-display text-2xl font-bold uppercase tracking-wider mb-2">Repaint</h3>
                <p class="font-sans text-sm text-gray-600 mb-6 flex-grow">Warna sepatu pudar? Kita cat ulang dengan cat
                    khusus leather/canvas anti luntur. Warna bisa request bebas.</p>
                <div class="border-t-2 border-dark pt-4 mt-auto">
                    <p class="font-display text-2xl font-bold">Rp 120.000</p>
                    <a href="#"
                        class="mt-4 block text-center w-full bg-dark text-light border-2 border-dark py-2 font-display font-bold uppercase hover:bg-light hover:text-dark transition">Order</a>
                </div>
            </div>

            <!-- Service 4 -->
            <div
                class="bg-light border-4 border-dark p-6 shadow-brutal hover:-translate-y-2 hover:shadow-brutal-lg transition-all duration-300 flex flex-col h-full">
                <i class="fa-solid fa-shoe-prints text-4xl text-accent mb-6"></i>
                <h3 class="font-display text-2xl font-bold uppercase tracking-wider mb-2">Reglue</h3>
                <p class="font-sans text-sm text-gray-600 mb-6 flex-grow">Sol sepatu menganga atau lepas? Kita lem
                    ulang dengan perekat khusus sepatu yang super kuat dan tahan lama.</p>
                <div class="border-t-2 border-dark pt-4 mt-auto">
                    <p class="font-display text-2xl font-bold">Rp 80.000</p>
                    <a href="#"
                        class="mt-4 block text-center w-full bg-dark text-light border-2 border-dark py-2 font-display font-bold uppercase hover:bg-light hover:text-dark transition">Order</a>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. PORTFOLIO / HASIL KERJA (BEFORE & AFTER) -->
    <section id="portfolio" class="py-20 bg-dark text-light border-y-4 border-dark">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-5xl lg:text-6xl font-display font-bold uppercase leading-none mb-4">Bukti Bukan Janji.
                </h2>
                <p class="font-sans text-gray-400 text-lg max-w-xl mx-auto">Geser hasil kerja kami. Dari buluk jadi
                    kinclong. Awas jangan kaget.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Gallery Item 1 -->
                <div class="group relative border-4 border-light overflow-hidden shadow-brutal bg-light">
                    <div
                        class="absolute top-4 left-4 bg-accent text-light font-display font-bold px-3 py-1 uppercase z-20 border-2 border-dark">
                        Unyellowing</div>
                    <img src="{{ asset('images/urban1.png') }}" alt="Before After 1"
                        class="w-full h-[300px] object-cover grayscale group-hover:grayscale-0 transition duration-500">
                    <div
                        class="absolute bottom-0 w-full bg-dark text-light p-4 border-t-4 border-light translate-y-full group-hover:translate-y-0 transition duration-300">
                        <p class="font-display font-bold text-xl uppercase">Air Force 1 White</p>
                        <p class="font-sans text-sm">Pengerjaan 3 Hari</p>
                    </div>
                </div>
                <!-- Gallery Item 2 -->
                <div class="group relative border-4 border-light overflow-hidden shadow-brutal bg-light">
                    <div
                        class="absolute top-4 left-4 bg-accent text-light font-display font-bold px-3 py-1 uppercase z-20 border-2 border-dark">
                        Deep Clean</div>
                    <img src="{{ asset('images/urban2.png') }}" alt="Before After 2"
                        class="w-full h-[300px] object-cover grayscale group-hover:grayscale-0 transition duration-500">
                    <div
                        class="absolute bottom-0 w-full bg-dark text-light p-4 border-t-4 border-light translate-y-full group-hover:translate-y-0 transition duration-300">
                        <p class="font-display font-bold text-xl uppercase">Vans Old Skool</p>
                        <p class="font-sans text-sm">Pengerjaan 2 Hari</p>
                    </div>
                </div>
                <!-- Gallery Item 3 -->
                <div class="group relative border-4 border-light overflow-hidden shadow-brutal bg-light">
                    <div
                        class="absolute top-4 left-4 bg-accent text-light font-display font-bold px-3 py-1 uppercase z-20 border-2 border-dark">
                        Repaint</div>
                    <img src="{{ asset('images/urban3.png') }}" alt="Before After 3"
                        class="w-full h-[300px] object-cover grayscale group-hover:grayscale-0 transition duration-500">
                    <div
                        class="absolute bottom-0 w-full bg-dark text-light p-4 border-t-4 border-light translate-y-full group-hover:translate-y-0 transition duration-300">
                        <p class="font-display font-bold text-xl uppercase">Jordan 1 Bred</p>
                        <p class="font-sans text-sm">Pengerjaan 5 Hari</p>
                    </div>
                </div>
            </div>

            <div class="text-center mt-12">
                <a href="#"
                    class="inline-block bg-transparent text-light border-4 border-light px-8 py-4 font-display text-xl font-bold uppercase tracking-widest hover:bg-light hover:text-dark transition-colors">
                    Lihat Portofolio di IG
                </a>
            </div>
        </div>
    </section>

    <!-- 6. WHY US / STATS -->
    <section class="py-20 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">

            <div class="grid grid-cols-2 gap-6">
                <!-- Stat Card -->
                <div class="border-4 border-dark p-6 bg-light shadow-brutal text-center">
                    <p class="font-display text-5xl font-bold text-accent mb-2">5K+</p>
                    <p class="font-sans font-bold text-sm uppercase">Sepatu Dicuci</p>
                </div>
                <div class="border-4 border-dark p-6 bg-light shadow-brutal text-center translate-y-6">
                    <p class="font-display text-5xl font-bold text-accent mb-2">4.9</p>
                    <p class="font-sans font-bold text-sm uppercase">Rating G-Maps</p>
                </div>
                <div class="border-4 border-dark p-6 bg-light shadow-brutal text-center">
                    <p class="font-display text-5xl font-bold text-accent mb-2">12</p>
                    <p class="font-sans font-bold text-sm uppercase">Shoe Technician</p>
                </div>
                <div class="border-4 border-dark p-6 bg-light shadow-brutal text-center translate-y-6">
                    <p class="font-display text-5xl font-bold text-accent mb-2">24H</p>
                    <p class="font-sans font-bold text-sm uppercase">Fast Service</p>
                </div>
            </div>

            <div>
                <h2 class="text-5xl font-display font-bold uppercase leading-none mb-6">Kenapa Harus<br>Di FreshKicks?
                </h2>
                <ul class="space-y-6 font-sans text-lg font-medium">
                    <li class="flex items-start gap-4">
                        <i class="fa-solid fa-flask text-2xl text-accent mt-1"></i>
                        <div>
                            <span class="font-display font-bold uppercase text-xl block mb-1">Premium Chemicals</span>
                            <span class="text-gray-600 text-sm">Kami menggunakan sabun cuci sepatu khusus yang aman
                                untuk material kanvas, suede, nubuck, maupun kulit. Tidak merusak warna.</span>
                        </div>
                    </li>
                    <li class="flex items-start gap-4">
                        <i class="fa-solid fa-shield-cat text-2xl text-accent mt-1"></i>
                        <div>
                            <span class="font-display font-bold uppercase text-xl block mb-1">Garansi Cuci Ulang</span>
                            <span class="text-gray-600 text-sm">Hasil kurang bersih? Klaim dalam 1x24 jam, kami cuci
                                ulang tanpa biaya tambahan. Kepuasan lo nomor satu.</span>
                        </div>
                    </li>
                    <li class="flex items-start gap-4">
                        <i class="fa-solid fa-motorcycle text-2xl text-accent mt-1"></i>
                        <div>
                            <span class="font-display font-bold uppercase text-xl block mb-1">Antar Jemput
                                (Pick-Up)</span>
                            <span class="text-gray-600 text-sm">Mager keluar rumah? Chat WA aja, kurir kita yang
                                samperin ke rumah lo. Praktis dan anti ribet.</span>
                        </div>
                    </li>
                </ul>
            </div>

        </div>
    </section>

    <!-- 7. CTA / LOKASI -->
    <section id="lokasi" class="py-20 bg-accent border-t-4 border-dark">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div
                class="bg-light border-4 border-dark p-8 md:p-16 shadow-brutal flex flex-col md:flex-row items-center justify-between gap-10 relative overflow-hidden">
                <!-- Decorative Element -->
                <i
                    class="fa-solid fa-shoe-prints absolute -right-10 -top-10 text-9xl text-dark opacity-5 -rotate-45"></i>

                <div class="w-full md:w-2/3 relative z-10">
                    <h2 class="text-4xl md:text-5xl font-display font-bold uppercase leading-none mb-4">Sepatu
                        Kotor<br>Jangan Disimpen!</h2>
                    <p class="font-sans font-medium text-lg mb-8 max-w-md">Drop sepatumu di workshop kita atau minta
                        kurir buat pick-up sekarang juga.</p>
                    <div class="flex flex-wrap gap-4">
                        <a href="#"
                            class="bg-dark text-light border-2 border-dark px-8 py-3 font-display text-lg font-bold uppercase tracking-widest hover:bg-light hover:text-dark hover:shadow-brutal transition-all flex items-center gap-2">
                            <i class="fa-brands fa-whatsapp text-2xl text-green-500"></i> Order via WA
                        </a>
                        <a href="#"
                            class="bg-transparent text-dark border-2 border-dark px-8 py-3 font-display text-lg font-bold uppercase tracking-widest hover:bg-dark hover:text-light transition-all">
                            Google Maps
                        </a>
                    </div>
                </div>

                <div
                    class="w-full md:w-1/3 relative z-10 font-sans font-bold border-l-0 md:border-l-4 border-dark md:pl-10 pt-8 md:pt-0 border-t-4 md:border-t-0">
                    <p class="font-display text-2xl uppercase mb-2">Workshop</p>
                    <p class="mb-4">Jl. Skena Abadi No. 99, Selatan Kota.<br>Sebelah Kopi Senja.</p>
                    <p class="font-display text-2xl uppercase mb-2 mt-6">Jam Buka</p>
                    <p>Buka Tiap Hari<br>10:00 Pagi - 09:00 Malam</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 8. FOOTER -->
    <footer class="bg-dark text-light pt-16 pb-8 border-t-4 border-dark">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div
                class="flex flex-col md:flex-row justify-between items-center md:items-start gap-10 mb-12 border-b-4 border-light pb-12">
                <!-- Brand -->
                <div class="text-center md:text-left">
                    <span class="text-4xl font-display font-bold uppercase tracking-widest block mb-4">
                        Fresh<span class="text-accent">Kicks.</span>
                    </span>
                    <p class="font-sans text-gray-400 font-medium max-w-xs">Pusat perawatan sepatu terbaik. Mengubah
                        sepatu buluk jadi layak pamer lagi.</p>
                </div>

                <!-- Links -->
                <div
                    class="flex flex-wrap justify-center md:justify-end gap-x-12 gap-y-6 font-display text-xl font-bold uppercase tracking-widest">
                    <div class="flex flex-col gap-4 text-center md:text-right">
                        <a href="#layanan" class="hover:text-accent transition">Daftar Harga</a>
                        <a href="#portfolio" class="hover:text-accent transition">Galeri</a>
                        <a href="#" class="hover:text-accent transition">Syarat & Ketentuan</a>
                    </div>
                    <div class="flex flex-col gap-4 text-center md:text-right">
                        <a href="#" class="hover:text-accent transition">Instagram</a>
                        <a href="#" class="hover:text-accent transition">TikTok</a>
                        <a href="#" class="hover:text-accent transition text-accent">WhatsApp
                            Kami</a>
                    </div>
                </div>
            </div>

            <!-- Copyright -->
            <div
                class="flex flex-col md:flex-row justify-between items-center gap-4 font-display font-bold uppercase text-sm tracking-widest text-gray-400">
                <p>EST. 2026 &copy; FRESHKICKS SHOE CARE.</p>
            </div>
        </div>
    </footer>

</body>

</html>
