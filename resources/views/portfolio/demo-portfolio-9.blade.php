<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chef Rian Adhitama | Modern Indonesian Gastronomy</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <!-- Google Fonts -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Bodoni+Moda:ital,opsz,wght@0,6..96,400;0,6..96,600;0,6..96,700;1,6..96,400&family=Lato:wght@300;400;700&display=swap');

        body {
            font-family: 'Lato', sans-serif;
            background-color: #0c0a09;
            /* Stone 950 (Truffle Black) */
            color: #d6d3d1;
            /* Stone 300 */
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        .font-serif {
            font-family: 'Bodoni Moda', serif;
        }

        /* Signature Accent: Burnt Orange / Saffron */
        .text-saffron {
            color: #c2410c;
        }

        .bg-saffron {
            background-color: #c2410c;
        }

        .border-saffron {
            border-color: #c2410c;
        }

        /* Menu Border Styles */
        .menu-border {
            border-color: rgba(214, 211, 209, 0.1);
        }

        /* Image Reveal Hover */
        .dish-img {
            filter: brightness(0.6) saturate(0.8);
            transition: all 0.7s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .group:hover .dish-img {
            filter: brightness(1) saturate(1.1);
            transform: scale(1.05);
        }

        /* Elegant Slow Fade in */
        @keyframes slowFade {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fade {
            animation: slowFade 1.5s ease-out forwards;
        }
    </style>
</head>

<body class="antialiased selection:bg-[#c2410c] selection:text-white" x-data="{ mobileMenu: false, scrolled: false }"
    @scroll.window="scrolled = (window.pageYOffset > 50)">

    <!-- 1. ELEGANT NAVIGATION -->
    <nav :class="scrolled ? 'bg-[#0c0a09]/95 backdrop-blur-md border-b menu-border py-4' : 'bg-transparent py-8'"
        class="fixed top-0 w-full z-[100] transition-all duration-500">
        <div class="max-w-7xl mx-auto px-6 lg:px-12 flex justify-between items-center">

            <!-- Logo Initials -->
            <a href="#" class="text-3xl font-serif font-bold text-white tracking-widest uppercase">
                R<span class="text-saffron">.</span>A
            </a>

            <!-- Desktop Menu -->
            <div class="hidden md:flex items-center gap-12 text-xs uppercase tracking-[0.3em] font-bold text-stone-400">
                <a href="#philosophy"
                    class="hover:text-white hover:border-b hover:border-saffron pb-1 transition-all">Philosophy</a>
                <a href="#tasting"
                    class="hover:text-white hover:border-b hover:border-saffron pb-1 transition-all">Signature</a>
                <a href="#experiences"
                    class="hover:text-white hover:border-b hover:border-saffron pb-1 transition-all">Experiences</a>
            </div>

            <!-- CTA Desktop -->
            <div class="hidden md:block">
                <a href="#inquiry"
                    class="border border-stone-500 text-white px-8 py-3 text-[10px] uppercase tracking-[0.3em] font-bold hover:bg-white hover:text-black transition-colors">
                    Inquire
                </a>
            </div>

            <!-- Mobile Toggle -->
            <button @click="mobileMenu = !mobileMenu" class="md:hidden text-white text-2xl focus:outline-none">
                <i :class="mobileMenu ? 'fa-solid fa-xmark' : 'fa-solid fa-bars'"></i>
            </button>
        </div>

        <!-- Mobile Menu Fullscreen -->
        <div x-show="mobileMenu" x-collapse x-cloak
            class="md:hidden bg-[#0c0a09] border-t menu-border mt-4 absolute w-full left-0 h-screen">
            <div class="px-6 py-12 flex flex-col gap-8 text-center">
                <a href="#philosophy" @click="mobileMenu = false"
                    class="text-3xl font-serif text-white italic">Philosophy</a>
                <a href="#tasting" @click="mobileMenu = false" class="text-3xl font-serif text-white italic">The
                    Menu</a>
                <a href="#experiences" @click="mobileMenu = false" class="text-3xl font-serif text-white italic">Private
                    Dining</a>
                <a href="#inquiry" @click="mobileMenu = false"
                    class="mt-8 border border-saffron text-saffron py-4 text-xs uppercase tracking-widest font-bold">Book
                    an Experience</a>
            </div>
        </div>
    </nav>

    <!-- 2. IMMERSIVE HERO -->
    <header class="h-screen relative flex items-center justify-center overflow-hidden">
        <!-- Background Image -->
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('images/kuliner-arab-hero.png') }}"
                class="w-full h-full object-cover filter brightness-[0.3]" alt="Fine Dining Plating">
        </div>

        <!-- Subtle Vignette -->
        <div class="absolute inset-0 bg-gradient-to-t from-[#0c0a09] via-transparent to-transparent z-0"></div>

        <div class="relative z-10 text-center px-6 animate-fade">
            <span class="text-saffron text-[10px] font-bold uppercase tracking-[0.5em] block mb-6">Culinary Artist &
                Consultant</span>
            <h1 class="text-6xl md:text-8xl lg:text-[8rem] font-serif font-normal text-white leading-none mb-6">
                Redefining <br>
                <span class="italic text-stone-400">Nusantara</span>
            </h1>
            <div class="w-px h-24 bg-saffron mx-auto mt-12"></div>
        </div>
    </header>

    <!-- 3. THE CHEF'S PHILOSOPHY -->
    <section id="philosophy" class="py-24 lg:py-40 px-6 max-w-7xl mx-auto">
        <div class="grid lg:grid-cols-2 gap-16 lg:gap-24 items-center">

            <div class="relative group">
                <div class="aspect-[3/4] overflow-hidden border border-stone-800 p-2">
                    <!-- Image of Chef -->
                    <img src="https://images.unsplash.com/photo-1577219491135-ce391730fb2c?q=80&w=800&auto=format&fit=crop"
                        class="w-full h-full object-cover dish-img" alt="Chef Rian">
                </div>
                <!-- Badge -->
                <div
                    class="absolute -bottom-8 -right-8 bg-[#0c0a09] border menu-border p-6 text-center w-48 hidden md:block">
                    <i class="fa-solid fa-award text-3xl text-saffron mb-2"></i>
                    <p class="text-[9px] uppercase tracking-widest text-stone-400">Michelin Trained</p>
                </div>
            </div>

            <div>
                <h2 class="text-xs uppercase tracking-[0.4em] font-bold text-saffron mb-8">The Philosophy</h2>
                <h3 class="text-4xl md:text-5xl font-serif text-white leading-tight mb-8">
                    "Makanan bukan sekadar kalori, melainkan memori yang <span class="italic text-stone-400">terhidang
                        di atas meja.</span>"
                </h3>

                <div class="space-y-6 text-stone-400 font-light text-lg leading-relaxed">
                    <p>
                        Setelah menghabiskan lebih dari satu dekade di dapur *fine-dining* Eropa, saya kembali ke akar
                        saya. Misi saya adalah mengangkat bahan-bahan lokal Indonesia—dari rempah Maluku hingga hasil
                        laut Timur—ke panggung gastronomi dunia.
                    </p>
                    <p>
                        Pendekatan saya menggabungkan teknik memasak presisi khas Prancis (French technique) dengan
                        profil rasa nusantara yang *bold*, kompleks, dan sarat akan cerita budaya.
                    </p>
                </div>

                <div class="mt-12 flex items-center gap-6">
                    <img src="https://placehold.co/200x80/0c0a09/c2410c?text=Rian+Adhitama" class="h-12 opacity-80"
                        alt="Chef Signature">
                    <span
                        class="text-[10px] uppercase tracking-widest text-stone-500 font-bold border-l menu-border pl-6">Executive
                        Chef</span>
                </div>
            </div>

        </div>
    </section>

    <!-- 4. SIGNATURE DISHES (GALLERY) -->
    <section id="tasting" class="py-24 bg-[#110e0d] border-y menu-border">
        <div class="max-w-[100rem] mx-auto px-6 lg:px-12">

            <div class="flex flex-col md:flex-row justify-between items-end mb-16 gap-6">
                <div>
                    <h2 class="text-xs uppercase tracking-[0.4em] font-bold text-saffron mb-4">The Tasting Menu</h2>
                    <h3 class="text-4xl md:text-6xl font-serif text-white">Signature Dishes.</h3>
                </div>
                <p class="text-stone-400 text-sm max-w-sm md:text-right font-light">Evolusi konstan dari menu *omakase*
                    kami yang menyesuaikan dengan musim dan hasil bumi terbaik hari ini.</p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <!-- Dish 1 -->
                <div class="group cursor-pointer">
                    <div class="aspect-square overflow-hidden mb-6 relative">
                        <img src="https://images.unsplash.com/photo-1550966871-3ed3cdb5ed0c?q=80&w=600&auto=format&fit=crop"
                            class="w-full h-full object-cover dish-img" alt="Dish">
                        <div
                            class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                            <span
                                class="border border-white/30 text-white px-6 py-2 text-[10px] uppercase tracking-widest">View
                                Details</span>
                        </div>
                    </div>
                    <div class="flex justify-between items-start border-b menu-border pb-4">
                        <div>
                            <h4 class="text-2xl font-serif text-white mb-1">Cured Scallop & Kecombrang</h4>
                            <p class="text-xs text-stone-500 font-light">Hokkaido Scallop, Torch Ginger Ponzu, Kemangi
                                Oil</p>
                        </div>
                    </div>
                </div>

                <!-- Dish 2 -->
                <div class="group cursor-pointer md:mt-12">
                    <div class="aspect-square overflow-hidden mb-6 relative">
                        <img src="https://images.unsplash.com/photo-1600891964092-4316c288032e?q=80&w=600&auto=format&fit=crop"
                            class="w-full h-full object-cover dish-img" alt="Dish">
                        <div
                            class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                            <span
                                class="border border-white/30 text-white px-6 py-2 text-[10px] uppercase tracking-widest">View
                                Details</span>
                        </div>
                    </div>
                    <div class="flex justify-between items-start border-b menu-border pb-4">
                        <div>
                            <h4 class="text-2xl font-serif text-white mb-1">Aged Wagyu 'Rawon'</h4>
                            <p class="text-xs text-stone-500 font-light">MB9 Wagyu Striploin, Black Nut Glaze, Salted
                                Egg Emulsion</p>
                        </div>
                    </div>
                </div>

                <!-- Dish 3 -->
                <div class="group cursor-pointer">
                    <div class="aspect-square overflow-hidden mb-6 relative">
                        <img src="https://images.unsplash.com/photo-1481931715705-36f5f79f1f3d?q=80&w=600&auto=format&fit=crop"
                            class="w-full h-full object-cover dish-img" alt="Dish">
                        <div
                            class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                            <span
                                class="border border-white/30 text-white px-6 py-2 text-[10px] uppercase tracking-widest">View
                                Details</span>
                        </div>
                    </div>
                    <div class="flex justify-between items-start border-b menu-border pb-4">
                        <div>
                            <h4 class="text-2xl font-serif text-white mb-1">Deconstructed Klepon</h4>
                            <p class="text-xs text-stone-500 font-light">Pandan Mousse, Liquid Palm Sugar Core, Toasted
                                Coconut</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- 5. EXPERIENCES / SERVICES (MENU STYLE) -->
    <section id="experiences" class="py-24 lg:py-32 px-6 max-w-4xl mx-auto">
        <div class="text-center mb-20">
            <h2 class="text-xs uppercase tracking-[0.4em] font-bold text-saffron mb-4">Services</h2>
            <h3 class="text-4xl md:text-5xl font-serif text-white">Culinary Experiences.</h3>
        </div>

        <div class="space-y-12">
            <!-- Item 1 -->
            <div class="border-b menu-border pb-12">
                <div class="flex justify-between items-end mb-4">
                    <h4 class="text-2xl md:text-3xl font-serif text-white">Private Dining (Omakase)</h4>
                    <span class="text-sm font-bold text-saffron uppercase tracking-widest">Starting at $250/pax</span>
                </div>
                <p class="text-stone-400 font-light leading-relaxed">
                    Pengalaman bersantap intim di kediaman Anda (hingga 12 tamu). Menu kustom yang terdiri dari 7 hingga
                    9 *courses*, disiapkan, dimasak, dan dipresentasikan secara langsung oleh Chef Rian. Sudah termasuk
                    *wine pairing* opsional yang dikurasi oleh Sommelier kami.
                </p>
            </div>

            <!-- Item 2 -->
            <div class="border-b menu-border pb-12">
                <div class="flex justify-between items-end mb-4">
                    <h4 class="text-2xl md:text-3xl font-serif text-white">Restaurant Consulting</h4>
                    <span class="text-sm font-bold text-saffron uppercase tracking-widest">Inquire</span>
                </div>
                <p class="text-stone-400 font-light leading-relaxed">
                    Layanan konsultasi *End-to-End* untuk investor dan grup perhotelan. Mulai dari R&D (Research &
                    Development) menu, audit rantai pasok dapur (*supply chain*), pelatihan efisiensi staf dapur, hingga
                    standarisasi keamanan pangan kelas internasional.
                </p>
            </div>

            <!-- Item 3 -->
            <div class="border-b menu-border pb-12">
                <div class="flex justify-between items-end mb-4">
                    <h4 class="text-2xl md:text-3xl font-serif text-white">Exclusive Masterclass</h4>
                    <span class="text-sm font-bold text-saffron uppercase tracking-widest">Inquire</span>
                </div>
                <p class="text-stone-400 font-light leading-relaxed">
                    Sesi privat atau korporat untuk mempelajari teknik dapur modern (*Sous-vide, Fermentation,
                    Emulsions*). Ideal untuk *team building* perusahaan level eksekutif yang mencari aktivitas elegan.
                </p>
            </div>
        </div>
    </section>

    <!-- 6. BOOKING / INQUIRY & FOOTER -->
    <footer id="inquiry" class="bg-[#050404] py-24 px-6 border-t menu-border">
        <div class="max-w-7xl mx-auto grid lg:grid-cols-2 gap-20">

            <!-- Contact Info -->
            <div>
                <h2 class="text-5xl md:text-7xl font-serif text-white mb-8">Reserve an <br> <span
                        class="italic text-saffron">Experience.</span></h2>
                <p class="text-stone-500 font-light mb-12 max-w-md">Ketersediaan untuk *Private Dining* dibatasi
                    maksimal 4 kali dalam sebulan untuk menjaga kualitas tertinggi. Harap melakukan reservasi setidaknya
                    30 hari sebelumnya.</p>

                <div class="space-y-8 mb-12">
                    <div>
                        <span
                            class="text-[9px] font-bold uppercase tracking-[0.3em] text-saffron block mb-2">Management
                            & Booking</span>
                        <p class="text-white text-lg font-serif">concierge@chefrian.com</p>
                    </div>
                    <div>
                        <span class="text-[9px] font-bold uppercase tracking-[0.3em] text-saffron block mb-2">Press &
                            Media</span>
                        <p class="text-white text-lg font-serif">pr@chefrian.com</p>
                    </div>
                </div>

                <div class="flex gap-8">
                    <a href="#"
                        class="w-10 h-10 border border-stone-700 rounded-full flex items-center justify-center text-stone-400 hover:text-white hover:border-saffron transition-all"><i
                            class="fa-brands fa-instagram"></i></a>
                    <a href="#"
                        class="w-10 h-10 border border-stone-700 rounded-full flex items-center justify-center text-stone-400 hover:text-white hover:border-saffron transition-all"><i
                            class="fa-brands fa-linkedin-in"></i></a>
                </div>
            </div>

            <!-- Sleek Form -->
            <div class="border menu-border p-10 bg-[#0c0a09]">
                <h3 class="text-2xl font-serif text-white mb-8">Direct Inquiry</h3>
                <form class="space-y-8">
                    <div class="border-b menu-border pb-2">
                        <input type="text" placeholder="Name or Organization"
                            class="w-full bg-transparent outline-none text-white placeholder:text-stone-600 text-sm font-light">
                    </div>
                    <div class="border-b menu-border pb-2">
                        <input type="email" placeholder="Email Address"
                            class="w-full bg-transparent outline-none text-white placeholder:text-stone-600 text-sm font-light">
                    </div>
                    <div class="border-b menu-border pb-2">
                        <select
                            class="w-full bg-transparent outline-none text-stone-400 text-sm font-light [&>option]:bg-[#0c0a09]">
                            <option value="">Select Service Type...</option>
                            <option value="private">Private Dining (Omakase)</option>
                            <option value="consulting">Restaurant Consulting</option>
                            <option value="masterclass">Masterclass / Event</option>
                        </select>
                    </div>
                    <div class="border-b menu-border pb-2">
                        <textarea placeholder="Event Details (Date, Location, Guest Count)" rows="3"
                            class="w-full bg-transparent outline-none text-white placeholder:text-stone-600 text-sm font-light"></textarea>
                    </div>
                    <button
                        class="bg-white text-black w-full py-4 text-xs font-bold uppercase tracking-widest hover:bg-saffron hover:text-white transition-colors">
                        Submit Request
                    </button>
                </form>
            </div>
        </div>

        <div
            class="max-w-7xl mx-auto mt-24 pt-8 border-t menu-border text-center text-[9px] font-bold uppercase tracking-[0.3em] text-stone-600">
            © 2026 Chef Rian Adhitama. Fine Dining Portfolio by Elijabah Group.
        </div>
    </footer>

</body>

</html>
