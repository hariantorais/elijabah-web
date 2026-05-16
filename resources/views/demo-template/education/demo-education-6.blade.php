<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Global Heritage | International School Batam</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <!-- Google Fonts -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;0,700;0,900;1,400&family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap');

        /* Font Mapping */
        .font-serif {
            font-family: 'Playfair Display', serif;
        }

        .font-sans {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #fcfcfc;
        }

        /* Premium Utilities */
        .glass-dark {
            background: rgba(15, 23, 42, 0.95);
            backdrop-filter: blur(16px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
        }

        .shadow-gold {
            box-shadow: 0 10px 40px -10px rgba(212, 175, 55, 0.3);
        }

        .text-gold {
            color: #d4af37;
        }

        .bg-gold {
            background-color: #d4af37;
        }

        .border-gold {
            border-color: #d4af37;
        }

        /* Subtle Image Zoom */
        .img-zoom-hover {
            transition: transform 0.8s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        }

        .group:hover .img-zoom-hover {
            transform: scale(1.05);
        }
    </style>
</head>

<body class="text-slate-800 antialiased" x-data="{ mobileMenu: false }">

    <!-- 1. ELITE NAVIGATION -->
    <nav class="fixed top-0 w-full z-[100] glass-dark transition-all duration-300">
        <div class="max-w-[85rem] mx-auto px-6 py-4 flex justify-between items-center">

            <!-- Logo -->
            <div class="flex items-center gap-4">
                <div class="w-10 h-10 border border-gold/50 rounded-full flex items-center justify-center text-gold">
                    <i class="fa-solid fa-globe text-lg"></i>
                </div>
                <div class="leading-none flex flex-col">
                    <span class="text-xl font-bold tracking-widest text-white font-serif uppercase">Global
                        Heritage</span>
                    <span class="text-[8px] font-medium text-slate-400 tracking-[0.4em] uppercase mt-1">International
                        School</span>
                </div>
            </div>

            <!-- Desktop Menu -->
            <div class="hidden lg:flex items-center gap-10">
                <a href="#about"
                    class="text-[11px] font-bold text-slate-300 uppercase tracking-[0.15em] hover:text-gold transition duration-300">Our
                    School</a>
                <a href="#academics"
                    class="text-[11px] font-bold text-slate-300 uppercase tracking-[0.15em] hover:text-gold transition duration-300">Academics</a>
                <a href="#campus"
                    class="text-[11px] font-bold text-slate-300 uppercase tracking-[0.15em] hover:text-gold transition duration-300">Campus
                    Life</a>
                <a href="#news"
                    class="text-[11px] font-bold text-slate-300 uppercase tracking-[0.15em] hover:text-gold transition duration-300">News
                    & Events</a>
            </div>

            <!-- CTA Desktop -->
            <div class="hidden lg:flex items-center gap-6">
                <a href="#"
                    class="text-[11px] font-bold text-white uppercase tracking-widest hover:text-gold transition">Portal</a>
                <button
                    class="bg-gold text-slate-900 px-7 py-3 rounded-none font-bold text-[10px] uppercase tracking-[0.2em] hover:bg-white transition duration-300 shadow-gold">
                    Admissions
                </button>
            </div>

            <!-- Mobile Toggle -->
            <button @click="mobileMenu = !mobileMenu" class="lg:hidden text-gold text-2xl focus:outline-none">
                <i :class="mobileMenu ? 'fa-solid fa-xmark' : 'fa-solid fa-bars-staggered'"></i>
            </button>
        </div>

        <!-- Mobile Menu Overlay -->
        <div x-show="mobileMenu" x-collapse x-cloak class="lg:hidden bg-slate-900 border-t border-slate-800 shadow-2xl">
            <div class="px-6 py-8 flex flex-col gap-6">
                <a href="#about" @click="mobileMenu = false"
                    class="text-sm font-bold text-white uppercase tracking-widest">Our School</a>
                <a href="#academics" @click="mobileMenu = false"
                    class="text-sm font-bold text-white uppercase tracking-widest">Academics</a>
                <a href="#campus" @click="mobileMenu = false"
                    class="text-sm font-bold text-white uppercase tracking-widest">Campus Life</a>
                <a href="#news" @click="mobileMenu = false"
                    class="text-sm font-bold text-white uppercase tracking-widest">News & Events</a>
                <div class="h-px bg-slate-800 w-full my-2"></div>
                <button
                    class="w-full bg-gold text-slate-900 py-4 font-bold uppercase tracking-[0.2em] text-xs">Admissions
                    2026</button>
            </div>
        </div>
    </nav>

    <!-- 2. HERO SECTION (EDITORIAL STYLE) -->
    <header class="relative pt-32 pb-20 lg:pt-0 lg:pb-0 lg:h-screen flex items-center bg-slate-900 overflow-hidden">
        <!-- Background Image with Overlay -->
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('images/education/campus-hero.png') }}"
                class="w-full h-full object-cover opacity-40 mix-blend-overlay" alt="Campus">
            <div class="absolute inset-0 bg-gradient-to-r from-slate-900 via-slate-900/80 to-transparent"></div>
        </div>

        <div class="max-w-[85rem] mx-auto px-6 w-full relative z-10">
            <div class="max-w-3xl">
                <div class="inline-flex items-center gap-3 mb-8">
                    <div class="w-12 h-px bg-gold"></div>
                    <span class="text-gold text-[10px] font-bold uppercase tracking-[0.3em]">Cambridge & IB World
                        School</span>
                </div>

                <h1 class="text-5xl md:text-7xl lg:text-[5.5rem] font-serif text-white leading-[1.1] mb-8">
                    Empowering <br>
                    <span class="italic text-gold">Global Leaders</span> <br>
                    of Tomorrow.
                </h1>

                <p class="text-slate-300 text-base md:text-lg font-light leading-relaxed mb-12 max-w-xl">
                    Memberikan pendidikan bertaraf internasional melalui kurikulum global yang diakui, membentuk
                    karakter, inovasi, dan integritas untuk menghadapi tantangan masa depan.
                </p>

                <div class="flex flex-col sm:flex-row gap-5">
                    <button
                        class="bg-gold text-slate-900 px-10 py-4 rounded-none font-bold text-xs uppercase tracking-[0.2em] hover:bg-white transition duration-300">
                        Inquire Now
                    </button>
                    <button
                        class="bg-transparent border border-white text-white px-10 py-4 rounded-none font-bold text-xs uppercase tracking-[0.2em] hover:bg-white hover:text-slate-900 transition duration-300">
                        Book a Tour
                    </button>
                </div>
            </div>
        </div>

        <!-- Scroll Indicator -->
        <div
            class="absolute bottom-10 left-1/2 -translate-x-1/2 text-white/50 flex flex-col items-center gap-2 hidden lg:flex">
            <span class="text-[9px] uppercase tracking-[0.3em]">Scroll</span>
            <div class="w-px h-12 bg-gradient-to-b from-gold to-transparent"></div>
        </div>
    </header>

    <!-- 3. ACCREDITATION & STATS BAR -->
    <section class="bg-white border-b border-slate-200 py-10 px-6">
        <div class="max-w-[85rem] mx-auto flex flex-col lg:flex-row justify-between items-center gap-10">
            <!-- Logos -->
            <div
                class="flex flex-wrap justify-center lg:justify-start items-center gap-8 md:gap-12 opacity-60 grayscale">
                <span class="text-sm font-bold text-slate-800 uppercase tracking-widest"><i
                        class="fa-solid fa-award"></i> IB Diploma</span>
                <span class="text-sm font-bold text-slate-800 uppercase tracking-widest"><i
                        class="fa-solid fa-graduation-cap"></i> Cambridge</span>
                <span class="text-sm font-bold text-slate-800 uppercase tracking-widest"><i
                        class="fa-solid fa-shield"></i> CIS Member</span>
            </div>
            <!-- Divider -->
            <div class="hidden lg:block w-px h-8 bg-slate-300"></div>
            <!-- Quick Stats -->
            <div class="flex gap-8 text-center">
                <div>
                    <h4 class="text-2xl font-serif text-slate-900">40+</h4>
                    <p class="text-[9px] font-bold text-slate-400 uppercase tracking-[0.2em] mt-1">Nationalities</p>
                </div>
                <div>
                    <h4 class="text-2xl font-serif text-slate-900">100%</h4>
                    <p class="text-[9px] font-bold text-slate-400 uppercase tracking-[0.2em] mt-1">Univ. Acceptance</p>
                </div>
                <div>
                    <h4 class="text-2xl font-serif text-slate-900">1:8</h4>
                    <p class="text-[9px] font-bold text-slate-400 uppercase tracking-[0.2em] mt-1">Teacher Ratio</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. WELCOME FROM PRINCIPAL (EDITORIAL LAYOUT) -->
    <section id="about" class="py-24 lg:py-32 px-6 bg-[#f9fafb]">
        <div class="max-w-[85rem] mx-auto grid lg:grid-cols-12 gap-16 items-center">

            <div class="lg:col-span-5 relative">
                <div class="absolute -top-6 -left-6 w-32 h-32 border border-gold z-0 hidden lg:block"></div>
                <div class="relative z-10">
                    <img src="{{ asset('images/education/campus-hero.png') }}"
                        class="w-full h-[500px] lg:h-[650px] object-cover shadow-2xl" alt="Head of School">
                </div>
                <div class="absolute -bottom-10 -right-10 bg-slate-900 text-white p-8 z-20 hidden md:block">
                    <i class="fa-solid fa-quote-right text-4xl text-gold opacity-50"></i>
                </div>
            </div>

            <div class="lg:col-span-7 lg:pl-10">
                <div class="inline-flex items-center gap-3 mb-6">
                    <div class="w-8 h-px bg-gold"></div>
                    <span class="text-gold text-[10px] font-bold uppercase tracking-[0.2em]">Message from Head of
                        School</span>
                </div>

                <h2 class="text-4xl lg:text-5xl font-serif text-slate-900 mb-8 leading-[1.2]">A Tradition of Excellence
                    & Innovation.</h2>

                <p class="text-slate-600 text-lg font-light leading-relaxed mb-6">
                    "Selamat datang di Global Heritage International School. Sejak pendiriannya, kami berkomitmen untuk
                    menyediakan pendidikan holistik yang membina keunggulan akademis dan kekuatan karakter."
                </p>
                <p class="text-slate-600 text-base font-light leading-relaxed mb-10">
                    Siswa kami tidak hanya diajarkan untuk menghafal, tetapi didorong untuk berpikir kritis, bertanya,
                    dan memecahkan masalah kompleks dalam skala global. Dengan fasilitas mutakhir dan pendidik kelas
                    dunia, kami memastikan setiap anak mencapai potensi terbaik mereka.
                </p>

                <div class="flex items-center gap-6">
                    <img src="https://placehold.co/200x80/ffffff/d4af37?text=Signature"
                        class="h-12 mix-blend-multiply" alt="Signature">
                    <div>
                        <h5 class="text-slate-900 font-bold text-sm">Dr. Elizabeth Montgomery</h5>
                        <p class="text-slate-400 text-[10px] uppercase tracking-widest mt-1">Head of School, GHIS</p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- 5. ACADEMIC PATHWAYS (HOVER CARDS) -->
    <section id="academics" class="py-24 lg:py-32 px-6 bg-slate-900 text-white">
        <div class="max-w-[85rem] mx-auto">
            <div class="flex flex-col md:flex-row justify-between items-start md:items-end mb-16 gap-8">
                <div class="max-w-2xl">
                    <div class="inline-flex items-center gap-3 mb-6">
                        <div class="w-8 h-px bg-gold"></div>
                        <span class="text-gold text-[10px] font-bold uppercase tracking-[0.2em]">Educational
                            Journey</span>
                    </div>
                    <h2 class="text-4xl lg:text-5xl font-serif leading-[1.2]">Academic Pathways</h2>
                </div>
                <button
                    class="text-[10px] font-bold uppercase tracking-[0.2em] border-b border-gold pb-1 hover:text-gold transition">
                    View Full Curriculum
                </button>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Program 1 -->
                <div class="group relative h-[450px] overflow-hidden bg-slate-800">
                    <img src="{{ asset('images/education/anak-tk.png') }}"
                        class="absolute inset-0 w-full h-full object-cover opacity-50 img-zoom-hover">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/40 to-transparent">
                    </div>

                    <div class="absolute inset-0 p-8 flex flex-col justify-end">
                        <span class="text-gold text-[10px] font-bold uppercase tracking-widest mb-2">Ages 3 - 5</span>
                        <h3 class="text-2xl font-serif mb-4 group-hover:-translate-y-2 transition duration-500">Early
                            Years Programme</h3>
                        <div
                            class="h-0 opacity-0 group-hover:h-auto group-hover:opacity-100 transition-all duration-500 overflow-hidden">
                            <p class="text-slate-300 text-sm font-light mb-6 line-clamp-3">Membangun pondasi rasa ingin
                                tahu melalui metode Play-Based Learning yang dirancang oleh Cambridge Early Years.</p>
                            <a href="#"
                                class="text-[10px] font-bold uppercase tracking-widest text-gold hover:text-white transition">Discover
                                <i class="fa-solid fa-arrow-right ml-1"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Program 2 -->
                <div class="group relative h-[450px] overflow-hidden bg-slate-800">
                    <img src="{{ asset('images/education/art-studio.png') }}"
                        class="absolute inset-0 w-full h-full object-cover opacity-50 img-zoom-hover">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/40 to-transparent">
                    </div>

                    <div class="absolute inset-0 p-8 flex flex-col justify-end">
                        <span class="text-gold text-[10px] font-bold uppercase tracking-widest mb-2">Ages 6 - 11</span>
                        <h3 class="text-2xl font-serif mb-4 group-hover:-translate-y-2 transition duration-500">Primary
                            Education</h3>
                        <div
                            class="h-0 opacity-0 group-hover:h-auto group-hover:opacity-100 transition-all duration-500 overflow-hidden">
                            <p class="text-slate-300 text-sm font-light mb-6 line-clamp-3">Fokus pada literasi,
                                numerasi, dan sains dasar dengan pendekatan inquiry-based learning untuk merangsang pola
                                pikir kritis anak.</p>
                            <a href="#"
                                class="text-[10px] font-bold uppercase tracking-widest text-gold hover:text-white transition">Discover
                                <i class="fa-solid fa-arrow-right ml-1"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Program 3 -->
                <div class="group relative h-[450px] overflow-hidden bg-slate-800">
                    <img src="{{ asset('images/education/ceo.png') }}"
                        class="absolute inset-0 w-full h-full object-cover opacity-50 img-zoom-hover">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/40 to-transparent">
                    </div>

                    <div class="absolute inset-0 p-8 flex flex-col justify-end">
                        <span class="text-gold text-[10px] font-bold uppercase tracking-widest mb-2">Ages 12 -
                            18</span>
                        <h3 class="text-2xl font-serif mb-4 group-hover:-translate-y-2 transition duration-500">
                            Secondary & IB Diploma</h3>
                        <div
                            class="h-0 opacity-0 group-hover:h-auto group-hover:opacity-100 transition-all duration-500 overflow-hidden">
                            <p class="text-slate-300 text-sm font-light mb-6 line-clamp-3">Program IGCSE dan
                                International Baccalaureate (IB) Diploma untuk mempersiapkan siswa menuju universitas
                                terkemuka dunia.</p>
                            <a href="#"
                                class="text-[10px] font-bold uppercase tracking-widest text-gold hover:text-white transition">Discover
                                <i class="fa-solid fa-arrow-right ml-1"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 6. CAMPUS FACILITIES (MASONRY) -->
    <section id="campus" class="py-24 lg:py-32 px-6 bg-white">
        <div class="max-w-[85rem] mx-auto">
            <div class="text-center mb-16 max-w-2xl mx-auto">
                <div class="inline-flex items-center gap-3 mb-4">
                    <div class="w-8 h-px bg-gold"></div>
                    <span class="text-gold text-[10px] font-bold uppercase tracking-[0.2em]">World-Class Campus</span>
                    <div class="w-8 h-px bg-gold"></div>
                </div>
                <h2 class="text-4xl lg:text-5xl font-serif text-slate-900 mb-6">Facilities Designed to Inspire.</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-4 gap-4 h-auto md:h-[600px]">
                <div class="md:col-span-2 md:row-span-2 relative overflow-hidden group h-[300px] md:h-full">
                    <img src="{{ asset('images/education/library.png') }}"
                        class="w-full h-full object-cover img-zoom-hover">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 to-transparent flex items-end p-8">
                        <div>
                            <h4 class="text-white font-serif text-2xl mb-1">Global Knowledge Hub</h4>
                            <p class="text-slate-300 text-sm font-light">Perpustakaan digital & fisik.</p>
                        </div>
                    </div>
                </div>
                <div class="md:col-span-1 relative overflow-hidden group h-[200px] md:h-full">
                    <img src="{{ asset('images/education/lab.png') }}"
                        class="w-full h-full object-cover img-zoom-hover">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 to-transparent flex items-end p-6">
                        <h4 class="text-white font-serif text-lg">Science Labs</h4>
                    </div>
                </div>
                <div class="md:col-span-1 relative overflow-hidden group h-[200px] md:h-full">
                    <img src="{{ asset('images/education/art-studio.png') }}"
                        class="w-full h-full object-cover img-zoom-hover">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 to-transparent flex items-end p-6">
                        <h4 class="text-white font-serif text-lg">Arts Centre</h4>
                    </div>
                </div>
                <div class="md:col-span-2 relative overflow-hidden group h-[200px] md:h-full">
                    <img src="{{ asset('images/education/sport.png') }}"
                        class="w-full h-full object-cover img-zoom-hover">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 to-transparent flex items-end p-6">
                        <h4 class="text-white font-serif text-xl">Olympic Sports Complex</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 7. NEWS & EVENTS (CORPORATE CARDS) -->
    <section id="news" class="py-24 lg:py-32 px-6 bg-[#f9fafb] border-t border-slate-200">
        <div class="max-w-[85rem] mx-auto">
            <div class="flex justify-between items-end mb-16">
                <div>
                    <h2 class="text-4xl font-serif text-slate-900 mb-2">Latest Insights.</h2>
                    <p class="text-slate-500 font-light">News, events, and achievements from our community.</p>
                </div>
                <a href="#"
                    class="hidden md:block text-[10px] font-bold text-slate-900 uppercase tracking-widest border-b border-slate-900 pb-1 hover:text-gold hover:border-gold transition">All
                    News</a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                <!-- News 1 -->
                <article class="group cursor-pointer">
                    <div class="overflow-hidden aspect-video mb-6 relative">
                        <img src="{{ asset('images/education/podium.png') }}"
                            class="w-full h-full object-cover img-zoom-hover">
                        <div
                            class="absolute top-4 left-4 bg-white px-3 py-1 text-[9px] font-bold uppercase tracking-widest text-slate-900">
                            Achievement</div>
                    </div>
                    <span class="text-gold text-[10px] font-bold uppercase tracking-widest mb-3 block">May 08,
                        2026</span>
                    <h4 class="text-xl font-serif text-slate-900 mb-3 group-hover:text-gold transition leading-snug">
                        Class of 2026 Achieves 100% Acceptance to Top 50 Global Universities</h4>
                    <p class="text-slate-500 text-sm font-light leading-relaxed line-clamp-2">A historic milestone for
                        GHIS as our graduating class secures placements in Ivy League and Russell Group institutions...
                    </p>
                </article>

                <!-- News 2 -->
                <article class="group cursor-pointer">
                    <div class="overflow-hidden aspect-video mb-6 relative">
                        <img src="{{ asset('images/education/perpustakaan-besar.png') }}"
                            class="w-full h-full object-cover img-zoom-hover">
                        <div
                            class="absolute top-4 left-4 bg-white px-3 py-1 text-[9px] font-bold uppercase tracking-widest text-slate-900">
                            Event</div>
                    </div>
                    <span class="text-gold text-[10px] font-bold uppercase tracking-widest mb-3 block">May 02,
                        2026</span>
                    <h4 class="text-xl font-serif text-slate-900 mb-3 group-hover:text-gold transition leading-snug">
                        Annual Global Science & Innovation Fair 2026</h4>
                    <p class="text-slate-500 text-sm font-light leading-relaxed line-clamp-2">Students from Middle and
                        High School showcased groundbreaking projects addressing global climate challenges...</p>
                </article>

                <!-- News 3 -->
                <article class="group cursor-pointer">
                    <div class="overflow-hidden aspect-video mb-6 relative">
                        <img src="{{ asset('images/education/auditorium.png') }}"
                            class="w-full h-full object-cover img-zoom-hover">
                        <div
                            class="absolute top-4 left-4 bg-white px-3 py-1 text-[9px] font-bold uppercase tracking-widest text-slate-900">
                            Activity</div>
                    </div>
                    <span class="text-gold text-[10px] font-bold uppercase tracking-widest mb-3 block">April 28,
                        2026</span>
                    <h4 class="text-xl font-serif text-slate-900 mb-3 group-hover:text-gold transition leading-snug">
                        GHIS Hosts International Model United Nations Conference</h4>
                    <p class="text-slate-500 text-sm font-light leading-relaxed line-clamp-2">Delegates from 15
                        international schools gathered to debate pressing geopolitical issues in our auditorium...</p>
                </article>
            </div>
        </div>
    </section>

    <!-- 8. ADMISSIONS / CONTACT & MAP -->
    <section class="py-24 lg:py-0 bg-slate-900 flex flex-col lg:flex-row">
        <!-- Contact Content -->
        <div class="lg:w-1/2 p-8 lg:p-24 flex flex-col justify-center text-white">
            <h2 class="text-4xl lg:text-5xl font-serif mb-6">Begin Your Journey.</h2>
            <p class="text-slate-400 font-light mb-12 max-w-md">Our Admissions team is ready to guide you through the
                enrollment process. Book a private campus tour today.</p>

            <div class="space-y-8 mb-12">
                <div class="flex items-start gap-4">
                    <i class="fa-solid fa-map-pin text-gold text-xl mt-1"></i>
                    <div>
                        <h5 class="font-bold text-white uppercase tracking-widest text-xs mb-2">Campus Address</h5>
                        <p class="text-slate-400 text-sm font-light">GHIS Boulevard, International District<br>Batam,
                            Indonesia 29461</p>
                    </div>
                </div>
                <div class="flex items-start gap-4">
                    <i class="fa-solid fa-phone text-gold text-xl mt-1"></i>
                    <div>
                        <h5 class="font-bold text-white uppercase tracking-widest text-xs mb-2">Admissions Office</h5>
                        <p class="text-slate-400 text-sm font-light">+62 811 000 1111</p>
                    </div>
                </div>
                <div class="flex items-start gap-4">
                    <i class="fa-solid fa-envelope text-gold text-xl mt-1"></i>
                    <div>
                        <h5 class="font-bold text-white uppercase tracking-widest text-xs mb-2">Email Inquiry</h5>
                        <p class="text-slate-400 text-sm font-light">admissions@ghis.edu</p>
                    </div>
                </div>
            </div>

            <button
                class="bg-gold text-slate-900 px-8 py-4 w-fit font-bold text-xs uppercase tracking-[0.2em] hover:bg-white transition duration-300">
                Contact Admissions
            </button>
        </div>

        <!-- Map -->
        <div class="lg:w-1/2 h-[400px] lg:h-auto min-h-[500px]">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127632.40428514869!2d103.95757754326503!3d1.0827255152862024!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d98d41ba3c260f%3A0x6b69d9c223c2a632!2sBatam%2C%20Batam%20City%2C%20Riau%20Islands!5e0!3m2!1sen!2sid!4v1715155500000!5m2!1sen!2sid"
                width="100%" height="100%" style="border:0; filter: grayscale(80%) contrast(120%);"
                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </section>

    <!-- 9. ELITE FOOTER -->
    <footer class="bg-slate-950 pt-20 pb-10 px-6 border-t border-slate-800">
        <div class="max-w-[85rem] mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-16">

                <!-- Brand -->
                <div class="lg:col-span-1">
                    <div class="flex items-center gap-3 mb-6">
                        <div
                            class="w-8 h-8 border border-gold/50 rounded-full flex items-center justify-center text-gold">
                            <i class="fa-solid fa-globe text-xs"></i>
                        </div>
                        <span class="text-xl font-bold tracking-widest text-white font-serif uppercase">GHIS</span>
                    </div>
                    <p class="text-slate-400 text-sm font-light leading-relaxed mb-6">
                        Shaping the global leaders of tomorrow through rigorous academics and character development.
                    </p>
                    <div class="flex gap-5">
                        <a href="#" class="text-slate-400 hover:text-gold transition"><i
                                class="fa-brands fa-linkedin-in"></i></a>
                        <a href="#" class="text-slate-400 hover:text-gold transition"><i
                                class="fa-brands fa-instagram"></i></a>
                        <a href="#" class="text-slate-400 hover:text-gold transition"><i
                                class="fa-brands fa-youtube"></i></a>
                    </div>
                </div>

                <!-- Links -->
                <div>
                    <h4 class="text-white font-bold text-xs uppercase tracking-widest mb-6">About Us</h4>
                    <ul class="space-y-3 text-sm text-slate-400 font-light">
                        <li><a href="#" class="hover:text-gold transition">Head of School</a></li>
                        <li><a href="#" class="hover:text-gold transition">Vision & Mission</a></li>
                        <li><a href="#" class="hover:text-gold transition">Accreditations</a></li>
                        <li><a href="#" class="hover:text-gold transition">Careers</a></li>
                    </ul>
                </div>

                <!-- Academics -->
                <div>
                    <h4 class="text-white font-bold text-xs uppercase tracking-widest mb-6">Academics</h4>
                    <ul class="space-y-3 text-sm text-slate-400 font-light">
                        <li><a href="#" class="hover:text-gold transition">Early Years</a></li>
                        <li><a href="#" class="hover:text-gold transition">Primary School</a></li>
                        <li><a href="#" class="hover:text-gold transition">Secondary School</a></li>
                        <li><a href="#" class="hover:text-gold transition">IB Diploma Programme</a></li>
                    </ul>
                </div>

                <!-- Admissions -->
                <div>
                    <h4 class="text-white font-bold text-xs uppercase tracking-widest mb-6">Admissions</h4>
                    <ul class="space-y-3 text-sm text-slate-400 font-light">
                        <li><a href="#" class="hover:text-gold transition">How to Apply</a></li>
                        <li><a href="#" class="hover:text-gold transition">Tuition & Fees</a></li>
                        <li><a href="#" class="hover:text-gold transition">Scholarships</a></li>
                        <li><a href="#" class="hover:text-gold transition">Book a Tour</a></li>
                    </ul>
                </div>

            </div>

            <div class="border-t border-slate-800 pt-8 flex flex-col md:flex-row justify-between items-center gap-4">
                <p class="text-slate-500 text-[10px] uppercase tracking-widest">
                    &copy; 2026 Elijabah International Group. All rights reserved.
                </p>
                <div class="flex gap-6 text-[10px] text-slate-500 uppercase tracking-widest">
                    <a href="#" class="hover:text-white transition">Privacy Policy</a>
                    <a href="#" class="hover:text-white transition">Terms of Use</a>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>
