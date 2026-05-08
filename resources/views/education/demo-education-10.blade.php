<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Veritas Business School | Executive Education</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <!-- Google Fonts -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600;700&family=Syne:wght@400;500;600;700;800&display=swap');

        body {
            font-family: 'Manrope', sans-serif;
            background-color: #050505;
            /* Deep Midnight Black */
            color: #f5f5f5;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        .font-syne {
            font-family: 'Syne', sans-serif;
        }

        /* Custom Colors & Utilities */
        .text-crimson {
            color: #D91636;
        }

        .bg-crimson {
            background-color: #D91636;
        }

        .border-onyx {
            border-color: #1f1f1f;
        }

        .glass-dark {
            background: rgba(5, 5, 5, 0.85);
            backdrop-filter: blur(16px);
        }

        .hover-red-glow:hover {
            box-shadow: 0 0 25px -5px rgba(217, 22, 54, 0.4);
        }

        /* Grid Borders */
        .grid-border-container {
            border-top: 1px solid #1f1f1f;
            border-bottom: 1px solid #1f1f1f;
        }

        .grid-border-item {
            border-right: 1px solid #1f1f1f;
            border-bottom: 1px solid #1f1f1f;
        }
    </style>
</head>

<body class="antialiased selection:bg-crimson selection:text-white" x-data="{ mobileMenu: false }">

    <!-- 1. CORPORATE NAVIGATION -->
    <nav class="fixed top-0 w-full z-[100] glass-dark border-b border-onyx transition-all duration-300">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">

            <!-- Logo -->
            <div class="flex items-center gap-3">
                <div class="w-8 h-8 bg-crimson flex items-center justify-center text-white">
                    <i class="fa-solid fa-chart-simple text-sm"></i>
                </div>
                <span class="text-xl font-bold font-syne tracking-wide text-white uppercase">Veritas <span
                        class="text-slate-500 font-medium text-sm">B-School</span></span>
            </div>

            <!-- Desktop Menu -->
            <div class="hidden lg:flex items-center gap-10">
                <a href="#about"
                    class="text-xs font-semibold text-slate-400 uppercase tracking-[0.15em] hover:text-white transition-colors">The
                    Institute</a>
                <a href="#programs"
                    class="text-xs font-semibold text-slate-400 uppercase tracking-[0.15em] hover:text-white transition-colors">Executive
                    Programs</a>
                <a href="#campus"
                    class="text-xs font-semibold text-slate-400 uppercase tracking-[0.15em] hover:text-white transition-colors">Campus</a>
                <a href="#insights"
                    class="text-xs font-semibold text-slate-400 uppercase tracking-[0.15em] hover:text-white transition-colors">Insights</a>
            </div>

            <!-- CTA Desktop -->
            <div class="hidden lg:flex items-center gap-6">
                <button
                    class="bg-white text-black px-6 py-2.5 font-bold text-[10px] uppercase tracking-[0.2em] hover:bg-crimson hover:text-white transition-colors">
                    Apply Now
                </button>
            </div>

            <!-- Mobile Toggle -->
            <button @click="mobileMenu = !mobileMenu" class="lg:hidden text-white text-2xl focus:outline-none">
                <i :class="mobileMenu ? 'fa-solid fa-xmark' : 'fa-solid fa-bars'"></i>
            </button>
        </div>

        <!-- Mobile Menu Overlay -->
        <div x-show="mobileMenu" x-collapse x-cloak class="lg:hidden bg-[#050505] border-t border-onyx">
            <div class="px-6 py-6 flex flex-col gap-4">
                <a href="#about" @click="mobileMenu = false"
                    class="text-sm font-bold text-slate-300 uppercase tracking-widest border-b border-onyx pb-3 hover:text-white">The
                    Institute</a>
                <a href="#programs" @click="mobileMenu = false"
                    class="text-sm font-bold text-slate-300 uppercase tracking-widest border-b border-onyx pb-3 hover:text-white">Executive
                    Programs</a>
                <a href="#campus" @click="mobileMenu = false"
                    class="text-sm font-bold text-slate-300 uppercase tracking-widest border-b border-onyx pb-3 hover:text-white">Facilities</a>
                <a href="#insights" @click="mobileMenu = false"
                    class="text-sm font-bold text-slate-300 uppercase tracking-widest border-b border-onyx pb-3 hover:text-white">Insights
                    & News</a>
                <button
                    class="w-full bg-crimson text-white py-4 mt-4 font-bold uppercase tracking-[0.2em] text-xs">Admissions
                    2026</button>
            </div>
        </div>
    </nav>

    <!-- 2. HERO SECTION (DATA-DRIVEN AESTHETIC) -->
    <header class="pt-32 lg:pt-40 pb-20 px-6 relative overflow-hidden">
        <div class="max-w-7xl mx-auto grid lg:grid-cols-12 gap-12 items-center relative z-10">
            <!-- Text Content -->
            <div class="lg:col-span-7 text-left">
                <div class="inline-flex items-center gap-3 mb-8">
                    <span class="w-2 h-2 bg-crimson rounded-full animate-ping"></span>
                    <span class="w-2 h-2 bg-crimson rounded-full absolute"></span>
                    <span class="text-slate-400 text-[10px] font-bold uppercase tracking-[0.3em] ml-2">Executive
                        Education Batam</span>
                </div>

                <h1
                    class="text-5xl md:text-6xl lg:text-[5.5rem] font-syne font-bold text-white tracking-tight leading-[1] mb-8">
                    Forge Your <br>
                    <span class="text-slate-500">Global</span> Legacy.
                </h1>

                <p
                    class="text-base md:text-lg text-slate-400 font-light leading-relaxed mb-12 max-w-xl border-l-2 border-crimson pl-4">
                    Program Mini MBA dan kepemimpinan eksekutif yang dirancang untuk direktur, pendiri startup, dan
                    manajer level atas. Transformasi karir Anda dalam 16 minggu.
                </p>

                <div class="flex flex-col sm:flex-row items-center gap-4">
                    <button
                        class="w-full sm:w-auto bg-crimson text-white px-8 py-4 font-bold text-xs uppercase tracking-widest hover:bg-white hover:text-black transition-colors hover-red-glow">
                        Download Prospectus
                    </button>
                    <button
                        class="w-full sm:w-auto bg-transparent border border-onyx text-white px-8 py-4 font-bold text-xs uppercase tracking-widest hover:bg-onyx transition-colors flex items-center justify-center gap-3">
                        <i class="fa-solid fa-calendar-check text-crimson"></i> Konsultasi Karir
                    </button>
                </div>
            </div>

            <!-- Visual / Dashboard Style -->
            <div class="lg:col-span-5 relative mt-10 lg:mt-0">
                <div class="relative overflow-hidden border border-onyx bg-[#0a0a0a] p-2">
                    <img src="https://placehold.co/800x1000/111/fff?text=Executive+Class"
                        class="w-full h-[400px] md:h-[550px] object-cover filter grayscale hover:grayscale-0 transition duration-700"
                        alt="Executive Student">

                    <!-- Financial/Data Overlay -->
                    <div
                        class="absolute bottom-6 left-6 right-6 bg-[#050505]/95 backdrop-blur-md border border-onyx p-5 flex items-center justify-between">
                        <div>
                            <p class="text-[9px] font-bold text-slate-500 uppercase tracking-widest mb-1">Rata-rata
                                Kenaikan Gaji</p>
                            <h4 class="text-2xl font-syne font-bold text-white">+ 65.4%</h4>
                        </div>
                        <div class="h-10 w-16 flex items-end gap-1">
                            <div class="w-full bg-onyx h-1/3"></div>
                            <div class="w-full bg-slate-700 h-2/3"></div>
                            <div class="w-full bg-crimson h-full"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- 3. ALUMNI HIRING PARTNERS (TICKER) -->
    <section class="border-y border-onyx bg-[#0a0a0a] py-8 overflow-hidden">
        <div class="max-w-7xl mx-auto px-6 flex flex-col md:flex-row items-center gap-8">
            <span
                class="text-[10px] font-bold text-slate-500 uppercase tracking-widest whitespace-nowrap md:border-r border-onyx md:pr-8">Alumni
                Network</span>
            <div
                class="flex flex-wrap justify-center items-center gap-8 md:gap-12 opacity-40 grayscale hover:grayscale-0 transition duration-500">
                <span class="text-lg font-syne font-bold text-white">McKinsey & Co.</span>
                <span class="text-lg font-syne font-bold text-white">Goldman Sachs</span>
                <span class="text-lg font-syne font-bold text-white">Bloomberg</span>
                <span class="text-lg font-syne font-bold text-white">Bain & Company</span>
                <span class="text-lg font-syne font-bold text-white">Gojek</span>
            </div>
        </div>
    </section>

    <!-- 4. THE INSTITUTE (EDITORIAL ABOUT) -->
    <section id="about" class="py-24 lg:py-32 px-6">
        <div class="max-w-7xl mx-auto grid lg:grid-cols-2 gap-16 items-start">

            <!-- Big Typography -->
            <div>
                <h2 class="text-3xl md:text-5xl font-syne font-bold text-white leading-[1.2] mb-8">
                    Defining the New Standard of <span class="text-crimson">Leadership.</span>
                </h2>
                <div class="grid grid-cols-2 gap-6 border-t border-onyx pt-8">
                    <div>
                        <h4 class="text-4xl font-syne font-bold text-white mb-2">Top 5</h4>
                        <p class="text-xs text-slate-400 font-medium uppercase tracking-widest">Sekolah Bisnis Eksekutif
                            se-Asia Tenggara</p>
                    </div>
                    <div>
                        <h4 class="text-4xl font-syne font-bold text-white mb-2">1,200+</h4>
                        <p class="text-xs text-slate-400 font-medium uppercase tracking-widest">Jaringan Alumni C-Level
                        </p>
                    </div>
                </div>
            </div>

            <!-- Content -->
            <div class="border-l border-onyx pl-0 lg:pl-10">
                <p class="text-slate-400 text-base leading-relaxed mb-8">
                    Veritas Business School bukan sekadar lembaga akademik. Kami adalah hub bagi para visioner,
                    inovator, dan pengambil keputusan. Kurikulum kami tidak disusun dari buku teks lampau, melainkan
                    dari studi kasus nyata yang sedang terjadi di lantai bursa dan ruang direksi global hari ini.
                </p>
                <div class="bg-[#0a0a0a] border border-onyx p-8 relative">
                    <i class="fa-solid fa-quote-left text-3xl text-crimson absolute top-6 left-6 opacity-30"></i>
                    <p class="text-white text-lg font-medium leading-relaxed italic mb-6 relative z-10 pl-4">
                        "Kepemimpinan di era disrupsi digital menuntut ketangkasan (agility). Di Veritas, kami melatih
                        Anda untuk membaca data, mengambil risiko terukur, dan memimpin dengan integritas."
                    </p>
                    <div class="flex items-center gap-4 pl-4">
                        <img src="https://placehold.co/100x100/111/fff?text=Dean"
                            class="w-12 h-12 grayscale border border-onyx" alt="Dean">
                        <div>
                            <h5 class="font-bold text-white text-sm">Dr. Jonathan K.</h5>
                            <p class="text-[9px] text-slate-500 uppercase tracking-widest mt-1">Dean of Veritas
                                B-School</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- 5. EXECUTIVE PROGRAMS (GRID LAYOUT) -->
    <section id="programs" class="py-24 lg:py-32 px-6 bg-[#0a0a0a] border-y border-onyx">
        <div class="max-w-7xl mx-auto">
            <div class="flex flex-col md:flex-row justify-between items-start md:items-end mb-16 gap-6">
                <div>
                    <h2 class="text-3xl md:text-5xl font-syne font-bold text-white mb-2">Executive Programs.</h2>
                    <p class="text-slate-400">Dirancang untuk mengakselerasi lintasan karir Anda tanpa meninggalkan
                        pekerjaan utama.</p>
                </div>
                <button
                    class="text-[10px] font-bold text-slate-300 uppercase tracking-[0.2em] border-b border-crimson pb-1 hover:text-white transition-colors">
                    Unduh Silabus Lengkap
                </button>
            </div>

            <!-- Wireframe Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 grid-border-container border-l border-onyx">

                <!-- Program 1 -->
                <div class="p-10 grid-border-item hover:bg-[#111] transition-colors group relative overflow-hidden">
                    <div
                        class="w-full h-1 bg-crimson absolute top-0 left-0 transform -translate-x-full group-hover:translate-x-0 transition duration-500">
                    </div>
                    <span class="text-[10px] font-bold text-crimson uppercase tracking-[0.2em] mb-4 block">16 Minggu •
                        Hybrid</span>
                    <h3 class="text-2xl font-syne font-bold text-white mb-4">Mini MBA: Global Strategy & Leadership
                    </h3>
                    <p class="text-slate-400 text-sm leading-relaxed mb-8">Membedah strategi negosiasi tingkat tinggi,
                        manajemen krisis operasional, dan perencanaan keuangan korporat skala multinasional.</p>
                    <a href="#"
                        class="inline-flex items-center gap-2 text-white text-xs font-bold uppercase tracking-widest hover:text-crimson transition-colors">
                        Details <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>

                <!-- Program 2 -->
                <div class="p-10 grid-border-item hover:bg-[#111] transition-colors group relative overflow-hidden">
                    <div
                        class="w-full h-1 bg-crimson absolute top-0 left-0 transform -translate-x-full group-hover:translate-x-0 transition duration-500">
                    </div>
                    <span class="text-[10px] font-bold text-crimson uppercase tracking-[0.2em] mb-4 block">12 Minggu •
                        Online</span>
                    <h3 class="text-2xl font-syne font-bold text-white mb-4">Data Analytics & Business Intelligence
                    </h3>
                    <p class="text-slate-400 text-sm leading-relaxed mb-8">Ubah raw data menjadi keputusan strategis.
                        Menguasai Python for Finance, SQL, Tableau, dan Predictive Modeling.</p>
                    <a href="#"
                        class="inline-flex items-center gap-2 text-white text-xs font-bold uppercase tracking-widest hover:text-crimson transition-colors">
                        Details <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>

                <!-- Program 3 -->
                <div class="p-10 grid-border-item hover:bg-[#111] transition-colors group relative overflow-hidden">
                    <div
                        class="w-full h-1 bg-crimson absolute top-0 left-0 transform -translate-x-full group-hover:translate-x-0 transition duration-500">
                    </div>
                    <span class="text-[10px] font-bold text-crimson uppercase tracking-[0.2em] mb-4 block">8 Minggu •
                        On-Campus</span>
                    <h3 class="text-2xl font-syne font-bold text-white mb-4">FinTech & Digital Innovation</h3>
                    <p class="text-slate-400 text-sm leading-relaxed mb-8">Eksplorasi ekosistem keuangan digital,
                        Blockchain, regulasi perbankan digital, dan strategi membangun startup FinTech.</p>
                    <a href="#"
                        class="inline-flex items-center gap-2 text-white text-xs font-bold uppercase tracking-widest hover:text-crimson transition-colors">
                        Details <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>

            </div>
        </div>
    </section>

    <!-- 6. CAMPUS & FACILITIES -->
    <section id="campus" class="py-24 lg:py-32 px-6 relative overflow-hidden">
        <!-- Accent Glow -->
        <div
            class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-crimson/10 blur-[120px] rounded-full pointer-events-none">
        </div>

        <div class="max-w-7xl mx-auto text-center mb-16 relative z-10">
            <h2 class="text-3xl md:text-5xl font-syne font-bold text-white mb-4">Executive Campus.</h2>
            <p class="text-slate-400 max-w-2xl mx-auto">Berlokasi di pusat bisnis Batam Centre. Fasilitas kami
                dirancang menyerupai kantor pusat perusahaan Fortune 500 untuk memberikan lingkungan diskusi yang elit.
            </p>
        </div>

        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 relative z-10">
            <div class="border border-onyx bg-[#0a0a0a] group">
                <div class="h-64 overflow-hidden border-b border-onyx">
                    <img src="https://placehold.co/600x400/111/fff?text=Boardroom"
                        class="w-full h-full object-cover filter grayscale group-hover:grayscale-0 transition duration-700">
                </div>
                <div class="p-6">
                    <h4 class="text-lg font-syne font-bold text-white mb-2">The Boardroom</h4>
                    <p class="text-sm text-slate-500">Ruang diskusi bergaya meja bundar eksklusif untuk simulasi studi
                        kasus.</p>
                </div>
            </div>
            <div class="border border-onyx bg-[#0a0a0a] group">
                <div class="h-64 overflow-hidden border-b border-onyx">
                    <img src="https://placehold.co/600x400/111/fff?text=Trading+Lab"
                        class="w-full h-full object-cover filter grayscale group-hover:grayscale-0 transition duration-700">
                </div>
                <div class="p-6">
                    <h4 class="text-lg font-syne font-bold text-white mb-2">Bloomberg Trading Lab</h4>
                    <p class="text-sm text-slate-500">Akses langsung ke terminal Bloomberg untuk analisis pasar
                        real-time.</p>
                </div>
            </div>
            <div class="border border-onyx bg-[#0a0a0a] group md:col-span-2 lg:col-span-1">
                <div class="h-64 overflow-hidden border-b border-onyx">
                    <img src="https://placehold.co/600x400/111/fff?text=Executive+Lounge"
                        class="w-full h-full object-cover filter grayscale group-hover:grayscale-0 transition duration-700">
                </div>
                <div class="p-6">
                    <h4 class="text-lg font-syne font-bold text-white mb-2">Networking Lounge</h4>
                    <p class="text-sm text-slate-500">Area privat dengan layanan premium untuk berjejaring antar
                        eksekutif.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 7. INSIGHTS & BUSINESS REVIEW (MAGAZINE STYLE) -->
    <section id="insights" class="py-24 lg:py-32 px-6 bg-[#0a0a0a] border-t border-onyx">
        <div class="max-w-7xl mx-auto">
            <div class="flex justify-between items-end mb-12">
                <h2 class="text-3xl md:text-4xl font-syne font-bold text-white">Veritas Business Review.</h2>
            </div>

            <div class="grid lg:grid-cols-12 gap-8">
                <!-- Highlight Article (Left) -->
                <article
                    class="lg:col-span-7 border border-onyx bg-[#050505] group cursor-pointer hover:border-crimson transition-colors">
                    <div class="h-[300px] md:h-[400px] overflow-hidden border-b border-onyx relative">
                        <img src="https://placehold.co/800x600/111/fff?text=AI+in+Business"
                            class="w-full h-full object-cover filter grayscale group-hover:grayscale-0 transition duration-700">
                        <div
                            class="absolute top-6 left-6 bg-crimson text-white px-3 py-1 text-[9px] font-bold uppercase tracking-widest">
                            Technology</div>
                    </div>
                    <div class="p-8 md:p-10">
                        <span class="text-[10px] text-slate-500 font-bold uppercase tracking-widest mb-3 block">08 Mei
                            2026 • Oleh Prof. William H.</span>
                        <h3
                            class="text-2xl md:text-3xl font-syne font-bold text-white mb-4 leading-tight group-hover:text-crimson transition-colors">
                            Bagaimana Generative AI Mengubah Lanskap Konsultan Manajemen Global</h3>
                        <p class="text-slate-400 text-sm leading-relaxed line-clamp-3">Analisis mendalam mengenai
                            dampak kecerdasan buatan terhadap efisiensi operasional di perusahaan Big 4. Apakah peran
                            analis junior akan tergantikan?</p>
                    </div>
                </article>

                <!-- Side Articles (Right) -->
                <div class="lg:col-span-5 flex flex-col gap-8">
                    <article
                        class="border border-onyx bg-[#050505] group cursor-pointer hover:border-crimson transition-colors flex flex-col sm:flex-row h-full">
                        <div
                            class="sm:w-2/5 h-48 sm:h-full overflow-hidden border-b sm:border-b-0 sm:border-r border-onyx relative">
                            <img src="https://placehold.co/400x400/111/fff?text=Startup"
                                class="w-full h-full object-cover filter grayscale group-hover:grayscale-0 transition duration-700">
                        </div>
                        <div class="p-6 sm:w-3/5 flex flex-col justify-center">
                            <span
                                class="text-[9px] text-crimson font-bold uppercase tracking-widest mb-2 block">Entrepreneurship</span>
                            <h4
                                class="text-lg font-syne font-bold text-white mb-2 leading-snug group-hover:text-crimson transition-colors">
                                Survive & Thrive: Strategi Startup di Era Suku Bunga Tinggi</h4>
                            <p class="text-slate-500 text-xs line-clamp-2">Mengelola runway dan strategi pivoting saat
                                pendanaan VC mengering.</p>
                        </div>
                    </article>

                    <article
                        class="border border-onyx bg-[#050505] group cursor-pointer hover:border-crimson transition-colors flex flex-col sm:flex-row h-full">
                        <div
                            class="sm:w-2/5 h-48 sm:h-full overflow-hidden border-b sm:border-b-0 sm:border-r border-onyx relative">
                            <img src="https://placehold.co/400x400/111/fff?text=Finance"
                                class="w-full h-full object-cover filter grayscale group-hover:grayscale-0 transition duration-700">
                        </div>
                        <div class="p-6 sm:w-3/5 flex flex-col justify-center">
                            <span
                                class="text-[9px] text-crimson font-bold uppercase tracking-widest mb-2 block">Economics</span>
                            <h4
                                class="text-lg font-syne font-bold text-white mb-2 leading-snug group-hover:text-crimson transition-colors">
                                Proyeksi Pasar Modal Asia Tenggara Q3 2026</h4>
                            <p class="text-slate-500 text-xs line-clamp-2">Insight dari alumni Veritas yang kini
                                memimpin bank investasi terkemuka.</p>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <!-- 8. ADMISSIONS & LOCATION -->
    <section class="border-y border-onyx grid lg:grid-cols-2">
        <!-- Contact/Admissions Block -->
        <div class="p-10 lg:p-24 flex flex-col justify-center">
            <h2 class="text-3xl md:text-5xl font-syne font-bold text-white mb-6">Take The Next Step.</h2>
            <p class="text-slate-400 text-base mb-12">Pendaftaran untuk kelas Mini MBA Batch 15 tahun 2026 telah
                dibuka. Kelas dibatasi hanya untuk 30 eksekutif terpilih.</p>

            <div class="space-y-6 mb-12">
                <div class="flex items-center gap-4 border-b border-onyx pb-4">
                    <i class="fa-solid fa-map-pin text-crimson w-6"></i>
                    <div>
                        <h5 class="font-bold text-white text-sm">Veritas Tower, Business District</h5>
                        <p class="text-xs text-slate-500">Batam Centre, Indonesia 29461</p>
                    </div>
                </div>
                <div class="flex items-center gap-4 border-b border-onyx pb-4">
                    <i class="fa-solid fa-envelope text-crimson w-6"></i>
                    <div>
                        <h5 class="font-bold text-white text-sm">Executive Admissions</h5>
                        <p class="text-xs text-slate-500">admissions@veritas.edu</p>
                    </div>
                </div>
                <div class="flex items-center gap-4 border-b border-onyx pb-4">
                    <i class="fa-brands fa-linkedin text-crimson w-6"></i>
                    <div>
                        <h5 class="font-bold text-white text-sm">Corporate Relations</h5>
                        <p class="text-xs text-slate-500">linkedin.com/school/veritas-bschool</p>
                    </div>
                </div>
            </div>

            <button
                class="bg-white text-black px-8 py-4 font-bold text-xs uppercase tracking-[0.2em] w-fit hover:bg-crimson hover:text-white transition-colors">
                Jadwalkan Wawancara
            </button>
        </div>

        <!-- Google Maps (Dark/Corporate Filter) -->
        <div class="h-[400px] lg:h-auto min-h-[500px] border-t lg:border-t-0 lg:border-l border-onyx">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127632.40428514869!2d103.95757754326503!3d1.0827255152862024!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d98d41ba3c260f%3A0x6b69d9c223c2a632!2sBatam%2C%20Batam%20City%2C%20Riau%20Islands!5e0!3m2!1sen!2sid!4v1715155500000!5m2!1sen!2sid"
                width="100%" height="100%" style="border:0; filter: grayscale(100%) invert(100%) contrast(120%);"
                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </section>

    <!-- 9. CORPORATE FOOTER -->
    <footer class="bg-[#050505] pt-20 pb-10 px-6">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-16">

                <div class="lg:col-span-1">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="w-8 h-8 bg-crimson flex items-center justify-center text-white">
                            <i class="fa-solid fa-chart-simple text-xs"></i>
                        </div>
                        <span class="text-xl font-bold font-syne tracking-wide text-white uppercase">Veritas</span>
                    </div>
                    <p class="text-slate-500 text-xs leading-relaxed mb-6">
                        Membentuk pemimpin bisnis masa depan melalui pendidikan eksekutif yang didorong oleh data dan
                        studi kasus global.
                    </p>
                </div>

                <div>
                    <h4 class="text-white font-bold text-[10px] uppercase tracking-[0.2em] mb-6">Programs</h4>
                    <ul class="space-y-3 text-sm text-slate-400">
                        <li><a href="#" class="hover:text-white transition-colors">Executive MBA</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Data Strategy Leadership</a>
                        </li>
                        <li><a href="#" class="hover:text-white transition-colors">Corporate Finance</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Custom Corporate Training</a>
                        </li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-white font-bold text-[10px] uppercase tracking-[0.2em] mb-6">Institute</h4>
                    <ul class="space-y-3 text-sm text-slate-400">
                        <li><a href="#" class="hover:text-white transition-colors">Faculty Directory</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Alumni Network</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Research Center</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Careers at Veritas</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-white font-bold text-[10px] uppercase tracking-[0.2em] mb-6">Legal & Resources</h4>
                    <ul class="space-y-3 text-sm text-slate-400">
                        <li><a href="#" class="hover:text-white transition-colors">Student Portal Login</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Privacy Policy</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Terms of Service</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Accreditation Info</a></li>
                    </ul>
                </div>

            </div>

            <div class="border-t border-onyx pt-8 flex flex-col md:flex-row justify-between items-center gap-4">
                <p class="text-slate-600 text-[10px] font-bold uppercase tracking-[0.2em]">
                    &copy; 2026 Elijabah International Group. Veritas Business School.
                </p>
                <div class="flex gap-5 text-slate-600">
                    <a href="#" class="hover:text-white transition"><i
                            class="fa-brands fa-linkedin-in"></i></a>
                    <a href="#" class="hover:text-white transition"><i class="fa-brands fa-twitter"></i></a>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>
