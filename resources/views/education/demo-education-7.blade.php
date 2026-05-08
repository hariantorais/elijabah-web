<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VANGUARD | Creative Design & Tech Academy</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <!-- Google Fonts -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;600;700&display=swap');

        body {
            font-family: 'Space Grotesk', sans-serif;
            background-color: #ffffff;
            color: #000000;
        }

        /* NEO-BRUTALISM UTILITIES */
        .neo-border {
            border: 3px solid #000000;
        }

        .neo-shadow {
            box-shadow: 8px 8px 0px 0px #000000;
            transition: all 0.2s ease-in-out;
        }

        .neo-shadow:hover {
            box-shadow: 2px 2px 0px 0px #000000;
            transform: translate(6px, 6px);
        }

        .neo-shadow-sm {
            box-shadow: 4px 4px 0px 0px #000000;
        }

        .bg-neon {
            background-color: #ccff00;
        }

        /* Acid Green / Neon Yellow */
        .bg-purple-neo {
            background-color: #b088f9;
        }

        /* Marquee Animation */
        .marquee-container {
            overflow: hidden;
            white-space: nowrap;
            border-top: 3px solid #000;
            border-bottom: 3px solid #000;
        }

        .marquee-content {
            display: inline-block;
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

        /* Outline Text Effect */
        .text-outline {
            -webkit-text-stroke: 2px #000;
            color: transparent;
        }
    </style>
</head>

<body class="antialiased selection:bg-neon selection:text-black" x-data="{ mobileMenu: false }">

    <!-- 1. SHARP NAVIGATION -->
    <nav class="fixed top-0 w-full z-[100] bg-white neo-border border-l-0 border-r-0 border-t-0">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">

            <!-- Logo -->
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 bg-black text-white flex items-center justify-center text-xl font-bold">
                    V
                </div>
                <span class="text-2xl font-bold tracking-tighter uppercase">Vanguard.</span>
            </div>

            <!-- Desktop Menu -->
            <div class="hidden lg:flex items-center gap-8 font-bold text-sm uppercase">
                <a href="#about"
                    class="hover:bg-neon px-2 py-1 transition-colors border-2 border-transparent hover:border-black">Profil</a>
                <a href="#programs"
                    class="hover:bg-neon px-2 py-1 transition-colors border-2 border-transparent hover:border-black">Program</a>
                <a href="#facilities"
                    class="hover:bg-neon px-2 py-1 transition-colors border-2 border-transparent hover:border-black">Fasilitas</a>
                <a href="#journal"
                    class="hover:bg-neon px-2 py-1 transition-colors border-2 border-transparent hover:border-black">Jurnal</a>
            </div>

            <!-- CTA Desktop -->
            <div class="hidden lg:block">
                <a href="#contact"
                    class="bg-neon text-black px-6 py-3 font-bold uppercase tracking-widest neo-border neo-shadow inline-block">
                    Daftar Sekarang
                </a>
            </div>

            <!-- Mobile Toggle -->
            <button @click="mobileMenu = !mobileMenu"
                class="lg:hidden bg-neon p-2 neo-border neo-shadow-sm focus:outline-none">
                <i :class="mobileMenu ? 'fa-solid fa-xmark' : 'fa-solid fa-bars'" class="text-xl"></i>
            </button>
        </div>

        <!-- Mobile Menu Overlay -->
        <div x-show="mobileMenu" x-collapse x-cloak class="lg:hidden bg-white border-b-3 border-black">
            <div class="px-6 py-6 flex flex-col gap-4 font-bold uppercase text-lg">
                <a href="#about" @click="mobileMenu = false" class="border-b-2 border-black pb-2 hover:bg-neon">Profil
                    & Sambutan</a>
                <a href="#programs" @click="mobileMenu = false"
                    class="border-b-2 border-black pb-2 hover:bg-neon">Program Akademi</a>
                <a href="#facilities" @click="mobileMenu = false"
                    class="border-b-2 border-black pb-2 hover:bg-neon">Fasilitas & Galeri</a>
                <a href="#journal" @click="mobileMenu = false" class="border-b-2 border-black pb-2 hover:bg-neon">Jurnal
                    & Berita</a>
                <a href="#contact" class="bg-black text-white text-center py-4 mt-4 neo-shadow-sm">Lokasi & Kontak</a>
            </div>
        </div>
    </nav>

    <!-- 2. HERO SECTION (BRUTALIST SPLIT) -->
    <header
        class="pt-24 lg:pt-32 pb-10 px-6 lg:px-10 bg-[url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyMCIgaGVpZ2h0PSIyMCI+PGNpcmNsZSBjeD0iMiIgY3k9IjIiIHI9IjEiIGZpbGw9IiNjY2MiLz48L3N2Zz4=')]">
        <div class="max-w-7xl mx-auto grid lg:grid-cols-2 gap-10 lg:gap-0 items-stretch min-h-[70vh]">

            <!-- Left: Massive Typography -->
            <div
                class="flex flex-col justify-center py-10 lg:pr-10 border-b-3 lg:border-b-0 lg:border-r-3 border-black">
                <div class="inline-block bg-black text-white px-3 py-1 text-xs font-bold uppercase w-fit mb-6">Batch 15
                    Open</div>
                <h1 class="text-5xl md:text-7xl font-bold uppercase leading-[0.9] mb-6 tracking-tighter">
                    Design.<br>
                    Code.<br>
                    <span class="bg-neon px-2">Create.</span>
                </h1>
                <p class="text-lg font-medium mb-10 max-w-md">
                    Akademi kreatif terdepan. Kami mengubah pemula menjadi profesional di bidang UI/UX Design, Web
                    Development, dan Digital Arts.
                </p>
                <div class="flex flex-wrap gap-4">
                    <button
                        class="bg-black text-white px-8 py-4 font-bold uppercase tracking-widest neo-border neo-shadow">
                        Explore Programs
                    </button>
                    <button
                        class="bg-white text-black px-8 py-4 font-bold uppercase tracking-widest neo-border neo-shadow">
                        Tonton Video <i class="fa-solid fa-play ml-2"></i>
                    </button>
                </div>
            </div>

            <!-- Right: Asymmetrical Image Collage -->
            <div class="relative flex items-center justify-center lg:pl-10 pb-10 lg:pb-0">
                <div class="w-full h-[400px] lg:h-full bg-purple-neo neo-border neo-shadow relative overflow-hidden">
                    <img src="https://placehold.co/800x1000/b088f9/000000?text=Student+Working"
                        class="w-full h-full object-cover mix-blend-luminosity hover:mix-blend-normal transition duration-500"
                        alt="Student">
                </div>
                <!-- Floating Element -->
                <div
                    class="absolute -bottom-6 -left-6 lg:left-0 bg-white p-4 neo-border neo-shadow flex items-center gap-4">
                    <div class="text-4xl font-bold">98%</div>
                    <div class="text-xs font-bold uppercase leading-tight">Hiring Rate<br>Lulusan Kami</div>
                </div>
            </div>

        </div>
    </header>

    <!-- 3. MARQUEE PARTNERS (RUNNING TEXT) -->
    <div class="bg-neon marquee-container py-4">
        <div class="marquee-content text-xl font-bold uppercase tracking-widest">
            OUR HIRING PARTNERS: GOOGLE • GOJEK • TOKOPEDIA • TRAVELOKA • MICROSOFT • ADOBE • FIGMA • VERCEL • OUR
            HIRING PARTNERS: GOOGLE • GOJEK • TOKOPEDIA • TRAVELOKA • MICROSOFT • ADOBE • FIGMA • VERCEL •
        </div>
    </div>

    <!-- 4. ABOUT & SAMBUTAN (STICKY LAYOUT) -->
    <section id="about" class="border-b-3 border-black">
        <div class="grid lg:grid-cols-12 min-h-screen">

            <!-- Sticky Left Side -->
            <div
                class="lg:col-span-5 bg-black text-white p-10 lg:p-16 lg:sticky lg:top-0 lg:h-screen flex flex-col justify-center">
                <h2 class="text-5xl lg:text-7xl font-bold uppercase tracking-tighter leading-none mb-6">Who <br> Are
                    <br> We?</h2>
                <p class="text-lg font-medium opacity-80 mb-8">Vanguard Academy didirikan untuk mendobrak sistem
                    pendidikan tradisional. Kami fokus pada portfolio, bukan sekadar teori.</p>
                <div class="w-24 h-2 bg-neon"></div>
            </div>

            <!-- Scrolling Right Side -->
            <div class="lg:col-span-7 bg-white p-10 lg:p-16">

                <!-- Sambutan Pimpinan -->
                <div class="mb-20">
                    <h3 class="text-2xl font-bold uppercase border-b-3 border-black pb-4 mb-6">Sambutan Direktur</h3>
                    <div class="neo-border p-6 bg-slate-50 relative">
                        <i
                            class="fa-solid fa-quote-left text-4xl text-neon absolute -top-5 -left-5 bg-black p-2 neo-border"></i>
                        <p class="text-lg font-medium mb-6 mt-4">
                            "Industri kreatif dan teknologi bergerak sangat cepat. Anda tidak bisa menghadapinya dengan
                            kurikulum yang dibuat 10 tahun lalu. Di Vanguard, apa yang Anda pelajari hari ini, adalah
                            apa yang dicari industri esok hari."
                        </p>
                        <div class="flex items-center gap-4">
                            <img src="https://placehold.co/100x100/000/fff?text=CEO"
                                class="w-16 h-16 rounded-full neo-border" alt="Direktur">
                            <div>
                                <h4 class="font-bold uppercase">Rangga Pradana</h4>
                                <p class="text-xs font-bold text-slate-500 uppercase">Founder & Design Director</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Kenapa Memilih Kami -->
                <div>
                    <h3 class="text-2xl font-bold uppercase border-b-3 border-black pb-4 mb-6">Why Vanguard?</h3>
                    <div class="grid sm:grid-cols-2 gap-6">
                        <div class="neo-border p-6 hover:bg-neon transition-colors">
                            <i class="fa-solid fa-folder-open text-3xl mb-4"></i>
                            <h4 class="font-bold uppercase mb-2">Portfolio-Based</h4>
                            <p class="text-sm font-medium">Tidak ada ujian tertulis. Lulusan dievaluasi dari produk
                                nyata yang mereka buat.</p>
                        </div>
                        <div class="neo-border p-6 hover:bg-purple-neo transition-colors">
                            <i class="fa-solid fa-chalkboard-user text-3xl mb-4"></i>
                            <h4 class="font-bold uppercase mb-2">Practitioner Mentors</h4>
                            <p class="text-sm font-medium">Diajar langsung oleh profesional aktif dari Tech Company.</p>
                        </div>
                        <div class="neo-border p-6 hover:bg-black hover:text-white transition-colors">
                            <i class="fa-solid fa-briefcase text-3xl mb-4"></i>
                            <h4 class="font-bold uppercase mb-2">Job Guarantee Program</h4>
                            <p class="text-sm font-medium">Penyaluran kerja pasca lulus melalui jaringan hiring partner
                                eksklusif kami.</p>
                        </div>
                        <div class="neo-border p-6 bg-slate-100">
                            <i class="fa-solid fa-clock text-3xl mb-4"></i>
                            <h4 class="font-bold uppercase mb-2">Intensive Bootcamp</h4>
                            <p class="text-sm font-medium">Kurikulum dipadatkan selama 16 minggu. Cepat, tangkas, dan
                                relevan.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- 5. PROGRAMS (ACCORDION LIST STYLE) -->
    <section id="programs" class="py-20 lg:py-32 px-6 lg:px-10 border-b-3 border-black bg-white"
        x-data="{ active: 1 }">
        <div class="max-w-7xl mx-auto">
            <h2 class="text-4xl lg:text-6xl font-bold uppercase tracking-tighter mb-12 text-center text-outline">Our
                Bootcamps</h2>

            <div class="flex flex-col border-3 border-black">

                <!-- Item 1 -->
                <div class="border-b-3 border-black group">
                    <button @click="active = active === 1 ? null : 1"
                        class="w-full flex justify-between items-center p-6 lg:p-8 bg-white hover:bg-neon transition-colors text-left focus:outline-none">
                        <div class="flex items-center gap-6">
                            <span class="text-2xl font-bold w-12 text-slate-400 hidden md:block">01</span>
                            <h3 class="text-2xl lg:text-4xl font-bold uppercase tracking-tighter">UI/UX Product Design
                            </h3>
                        </div>
                        <div class="flex items-center gap-6">
                            <span
                                class="text-sm font-bold uppercase border-2 border-black px-3 py-1 hidden sm:block">16
                                Minggu</span>
                            <i class="fa-solid fa-plus text-2xl" x-show="active !== 1"></i>
                            <i class="fa-solid fa-minus text-2xl" x-show="active === 1" x-cloak></i>
                        </div>
                    </button>
                    <div x-show="active === 1" x-collapse x-cloak
                        class="bg-slate-50 border-t-3 border-black p-6 lg:p-8 flex flex-col md:flex-row gap-8">
                        <p class="font-medium max-w-2xl text-lg">Pelajari end-to-end design process: dari User
                            Research, Wireframing, Prototyping di Figma, hingga Usability Testing. Anda akan lulus
                            dengan 3 case study nyata untuk portfolio.</p>
                        <button
                            class="bg-black text-white px-6 py-3 font-bold uppercase neo-border self-start neo-shadow-sm hover:bg-neon hover:text-black">Daftar
                            Kelas Ini</button>
                    </div>
                </div>

                <!-- Item 2 -->
                <div class="border-b-3 border-black group">
                    <button @click="active = active === 2 ? null : 2"
                        class="w-full flex justify-between items-center p-6 lg:p-8 bg-white hover:bg-purple-neo transition-colors text-left focus:outline-none">
                        <div class="flex items-center gap-6">
                            <span class="text-2xl font-bold w-12 text-slate-400 hidden md:block">02</span>
                            <h3 class="text-2xl lg:text-4xl font-bold uppercase tracking-tighter">Fullstack Web Dev
                            </h3>
                        </div>
                        <div class="flex items-center gap-6">
                            <span
                                class="text-sm font-bold uppercase border-2 border-black px-3 py-1 hidden sm:block">24
                                Minggu</span>
                            <i class="fa-solid fa-plus text-2xl" x-show="active !== 2"></i>
                            <i class="fa-solid fa-minus text-2xl" x-show="active === 2" x-cloak></i>
                        </div>
                    </button>
                    <div x-show="active === 2" x-collapse x-cloak
                        class="bg-slate-50 border-t-3 border-black p-6 lg:p-8 flex flex-col md:flex-row gap-8">
                        <p class="font-medium max-w-2xl text-lg">Kuasai MERN Stack (MongoDB, Express, React, Node.js).
                            Anda akan membangun aplikasi web kompleks, manajemen database, dan API integration.</p>
                        <button
                            class="bg-black text-white px-6 py-3 font-bold uppercase neo-border self-start neo-shadow-sm hover:bg-purple-neo hover:text-black">Daftar
                            Kelas Ini</button>
                    </div>
                </div>

                <!-- Item 3 -->
                <div class="group">
                    <button @click="active = active === 3 ? null : 3"
                        class="w-full flex justify-between items-center p-6 lg:p-8 bg-white hover:bg-yellow-400 transition-colors text-left focus:outline-none">
                        <div class="flex items-center gap-6">
                            <span class="text-2xl font-bold w-12 text-slate-400 hidden md:block">03</span>
                            <h3 class="text-2xl lg:text-4xl font-bold uppercase tracking-tighter">Digital Marketing
                            </h3>
                        </div>
                        <div class="flex items-center gap-6">
                            <span
                                class="text-sm font-bold uppercase border-2 border-black px-3 py-1 hidden sm:block">12
                                Minggu</span>
                            <i class="fa-solid fa-plus text-2xl" x-show="active !== 3"></i>
                            <i class="fa-solid fa-minus text-2xl" x-show="active === 3" x-cloak></i>
                        </div>
                    </button>
                    <div x-show="active === 3" x-collapse x-cloak
                        class="bg-slate-50 border-t-3 border-black p-6 lg:p-8 flex flex-col md:flex-row gap-8">
                        <p class="font-medium max-w-2xl text-lg">Pahami SEO, SEM, Facebook Ads, dan Tiktok Marketing.
                            Pelajari cara membaca data analytics untuk mengoptimalkan konversi penjualan.</p>
                        <button
                            class="bg-black text-white px-6 py-3 font-bold uppercase neo-border self-start neo-shadow-sm hover:bg-yellow-400 hover:text-black">Daftar
                            Kelas Ini</button>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 6. FACILITIES & GALLERY (SCATTERED BRUTALIST) -->
    <section id="facilities" class="py-20 lg:py-32 px-6 bg-slate-100 border-b-3 border-black overflow-hidden">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-4xl lg:text-6xl font-bold uppercase tracking-tighter mb-4">Creative Hub</h2>
                <p class="text-lg font-bold uppercase text-slate-500">Fasilitas Kampus yang Menginspirasi</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 md:gap-4 relative h-auto md:h-[600px]">
                <div
                    class="neo-border bg-white p-4 neo-shadow z-10 md:absolute md:top-10 md:left-10 md:w-80 transform md:-rotate-3 hover:rotate-0 transition duration-300">
                    <img src="https://placehold.co/600x400/000000/ffffff?text=Co-Working+Space"
                        class="w-full h-48 object-cover neo-border mb-4">
                    <h4 class="font-bold uppercase text-lg">24/7 Co-Working</h4>
                </div>

                <div
                    class="neo-border bg-neon p-4 neo-shadow z-20 md:absolute md:top-20 md:left-1/3 md:w-96 transform md:rotate-2 hover:rotate-0 transition duration-300">
                    <img src="https://placehold.co/600x400/ccff00/000000?text=Mac+Labs"
                        class="w-full h-56 object-cover neo-border mb-4">
                    <h4 class="font-bold uppercase text-lg">Mac Studio Lab</h4>
                </div>

                <div
                    class="neo-border bg-white p-4 neo-shadow z-30 md:absolute md:bottom-10 md:right-10 md:w-80 transform md:-rotate-6 hover:rotate-0 transition duration-300">
                    <img src="https://placehold.co/600x400/000000/ffffff?text=Lounge"
                        class="w-full h-48 object-cover neo-border mb-4">
                    <h4 class="font-bold uppercase text-lg">Creative Lounge</h4>
                </div>
            </div>
        </div>
    </section>

    <!-- 7. JOURNAL (TABLE LIST STYLE) -->
    <section id="journal" class="py-20 lg:py-32 px-6 bg-white border-b-3 border-black">
        <div class="max-w-7xl mx-auto">
            <div class="flex justify-between items-end mb-12">
                <h2 class="text-4xl lg:text-6xl font-bold uppercase tracking-tighter">Journal.</h2>
                <a href="#"
                    class="font-bold uppercase border-b-2 border-black pb-1 hover:text-slate-500 hidden sm:block">View
                    All Posts</a>
            </div>

            <div class="border-t-3 border-black flex flex-col">
                <!-- Row 1 -->
                <a href="#"
                    class="group grid grid-cols-1 md:grid-cols-12 gap-4 items-center border-b-3 border-black p-6 hover:bg-neon transition-colors">
                    <div class="md:col-span-2 font-bold uppercase text-slate-500 group-hover:text-black">12.05.2026
                    </div>
                    <div class="md:col-span-2 font-bold uppercase"><span
                            class="border-2 border-black px-2 py-1">Event</span></div>
                    <div class="md:col-span-7 text-xl lg:text-2xl font-bold uppercase tracking-tighter">Vanguard Design
                        Week: Pameran Portfolio Terbesar di Batam</div>
                    <div class="md:col-span-1 text-right hidden md:block"><i
                            class="fa-solid fa-arrow-right text-2xl -rotate-45 group-hover:rotate-0 transition-transform"></i>
                    </div>
                </a>
                <!-- Row 2 -->
                <a href="#"
                    class="group grid grid-cols-1 md:grid-cols-12 gap-4 items-center border-b-3 border-black p-6 hover:bg-purple-neo transition-colors">
                    <div class="md:col-span-2 font-bold uppercase text-slate-500 group-hover:text-black">08.05.2026
                    </div>
                    <div class="md:col-span-2 font-bold uppercase"><span
                            class="border-2 border-black px-2 py-1">Insight</span></div>
                    <div class="md:col-span-7 text-xl lg:text-2xl font-bold uppercase tracking-tighter">Tren UI/UX
                        2026: Kenapa Neo-Brutalism Kembali Digemari?</div>
                    <div class="md:col-span-1 text-right hidden md:block"><i
                            class="fa-solid fa-arrow-right text-2xl -rotate-45 group-hover:rotate-0 transition-transform"></i>
                    </div>
                </a>
                <!-- Row 3 -->
                <a href="#"
                    class="group grid grid-cols-1 md:grid-cols-12 gap-4 items-center border-b-3 border-black p-6 hover:bg-black hover:text-white transition-colors">
                    <div class="md:col-span-2 font-bold uppercase text-slate-500 group-hover:text-white">01.05.2026
                    </div>
                    <div class="md:col-span-2 font-bold uppercase"><span
                            class="border-2 border-white px-2 py-1">Alumni</span></div>
                    <div class="md:col-span-7 text-xl lg:text-2xl font-bold uppercase tracking-tighter">Dari Barista
                        Menjadi Frontend Developer di Startup Unicorn</div>
                    <div class="md:col-span-1 text-right hidden md:block"><i
                            class="fa-solid fa-arrow-right text-2xl -rotate-45 group-hover:rotate-0 transition-transform"></i>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- 8. CONTACT & MAP (DARK MODE) -->
    <section id="contact" class="grid lg:grid-cols-2 border-b-3 border-black">
        <!-- Text Block -->
        <div
            class="bg-black text-white p-10 lg:p-20 flex flex-col justify-center border-b-3 lg:border-b-0 lg:border-r-3 border-black">
            <h2 class="text-5xl lg:text-7xl font-bold uppercase tracking-tighter mb-8 leading-none">Ready to <br> Break
                The <br> <span class="text-neon">Rules?</span></h2>

            <div class="space-y-6 mb-12 font-bold uppercase">
                <div class="flex items-start gap-4">
                    <i class="fa-solid fa-location-dot text-2xl text-neon"></i>
                    <div>
                        <p class="text-sm text-slate-400 mb-1">Campus</p>
                        <p>Vanguard Hub, Distrik Kreatif<br>Batam Centre, Kepri 29461</p>
                    </div>
                </div>
                <div class="flex items-start gap-4">
                    <i class="fa-brands fa-whatsapp text-2xl text-neon"></i>
                    <div>
                        <p class="text-sm text-slate-400 mb-1">Admissions</p>
                        <p>+62 811 9999 0000</p>
                    </div>
                </div>
            </div>

            <button
                class="bg-neon text-black px-8 py-4 font-bold uppercase tracking-widest neo-border w-fit neo-shadow-sm hover:bg-white transition-colors">
                Hit Us Up on WhatsApp
            </button>
        </div>

        <!-- Google Map -->
        <div class="h-[400px] lg:h-auto min-h-[500px]">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127632.40428514869!2d103.95757754326503!3d1.0827255152862024!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d98d41ba3c260f%3A0x6b69d9c223c2a632!2sBatam%2C%20Batam%20City%2C%20Riau%20Islands!5e0!3m2!1sen!2sid!4v1715155500000!5m2!1sen!2sid"
                width="100%" height="100%" style="border:0; filter: grayscale(100%) invert(90%) contrast(150%);"
                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </section>

    <!-- 9. MEGA FOOTER -->
    <footer class="bg-neon py-16 px-6 border-b-8 border-black">
        <div class="max-w-7xl mx-auto flex flex-col md:flex-row justify-between items-center gap-10">

            <h1
                class="text-6xl md:text-8xl lg:text-[10rem] font-bold uppercase tracking-tighter text-outline text-center md:text-left leading-none">
                Vanguard.
            </h1>

            <div class="flex flex-col items-center md:items-end gap-6 font-bold uppercase">
                <div class="flex gap-4 text-2xl">
                    <a href="#"
                        class="hover:text-purple-neo neo-border p-2 bg-white neo-shadow-sm transition"><i
                            class="fa-brands fa-instagram"></i></a>
                    <a href="#"
                        class="hover:text-purple-neo neo-border p-2 bg-white neo-shadow-sm transition"><i
                            class="fa-brands fa-tiktok"></i></a>
                    <a href="#"
                        class="hover:text-purple-neo neo-border p-2 bg-white neo-shadow-sm transition"><i
                            class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <p class="text-xs text-center md:text-right border-2 border-black p-2 bg-white">
                    &copy; 2026 ELIJABAH INTERNATIONAL GROUP.
                </p>
            </div>

        </div>
    </footer>

</body>

</html>
