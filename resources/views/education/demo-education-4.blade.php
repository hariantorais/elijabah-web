<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lexicon Academy | Enterprise Education</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap');

        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8fafc;
        }

        /* Custom subtle shadow for enterprise feel */
        .shadow-enterprise {
            box-shadow: 0 4px 24px -4px rgba(15, 23, 42, 0.04), 0 12px 32px -4px rgba(15, 23, 42, 0.04);
        }
    </style>
</head>

<body class="text-slate-900 antialiased" x-data="{ mobileMenu: false }">

    <!-- 1. ENTERPRISE NAVIGATION -->
    <nav class="fixed top-0 w-full z-[100] bg-white/90 backdrop-blur-md border-b border-slate-200 transition-all">
        <div class="max-w-[85rem] mx-auto px-6 py-4 flex justify-between items-center">

            <!-- Logo -->
            <div class="flex items-center gap-3">
                <div class="w-8 h-8 bg-blue-700 rounded-lg flex items-center justify-center text-white">
                    <i class="fa-solid fa-graduation-cap text-sm"></i>
                </div>
                <span class="text-xl font-bold tracking-tight text-slate-900">Lexicon<span
                        class="font-light text-slate-500">Academy</span></span>
            </div>

            <!-- Desktop Links -->
            <div class="hidden lg:flex gap-8 text-[13px] font-semibold text-slate-600">
                <a href="#about" class="hover:text-blue-700 transition">About Us</a>
                <a href="#academics" class="hover:text-blue-700 transition">Academics</a>
                <a href="#admissions" class="hover:text-blue-700 transition">Admissions</a>
                <a href="#campus" class="hover:text-blue-700 transition">Campus Life</a>
            </div>

            <!-- Desktop Actions -->
            <div class="hidden lg:flex items-center gap-4">
                <a href="#"
                    class="text-[13px] font-semibold text-slate-600 hover:text-blue-700 transition">Student Portal</a>
                <button
                    class="bg-blue-700 text-white px-5 py-2.5 rounded-lg font-semibold text-[13px] hover:bg-blue-800 transition shadow-sm">
                    Apply for 2026
                </button>
            </div>

            <!-- Mobile Menu Toggle -->
            <button @click="mobileMenu = !mobileMenu" class="lg:hidden text-slate-600 text-2xl focus:outline-none">
                <i :class="mobileMenu ? 'fa-solid fa-xmark' : 'fa-solid fa-bars'"></i>
            </button>
        </div>

        <!-- Mobile Menu Dropdown -->
        <div x-show="mobileMenu" x-collapse
            class="lg:hidden bg-white border-t border-slate-100 px-6 py-6 space-y-4 shadow-xl">
            <a href="#about" @click="mobileMenu = false" class="block text-base font-semibold text-slate-800">About
                Us</a>
            <a href="#academics" @click="mobileMenu = false"
                class="block text-base font-semibold text-slate-800">Academics</a>
            <a href="#campus" @click="mobileMenu = false" class="block text-base font-semibold text-slate-800">Campus
                Life</a>
            <div class="pt-4 border-t border-slate-100 flex flex-col gap-3">
                <a href="#"
                    class="block text-center text-sm font-semibold text-slate-600 border border-slate-200 py-3 rounded-lg">Student
                    Portal</a>
                <button class="w-full bg-blue-700 text-white py-3 rounded-lg font-semibold text-sm">Apply for
                    2026</button>
            </div>
        </div>
    </nav>

    <!-- 2. HERO SECTION (SPLIT LAYOUT) -->
    <header class="pt-28 lg:pt-40 pb-16 lg:pb-24 px-6 bg-white overflow-hidden">
        <div class="max-w-[85rem] mx-auto grid lg:grid-cols-12 gap-12 lg:gap-8 items-center">

            <!-- Hero Text -->
            <div class="lg:col-span-6 lg:pr-12 text-center lg:text-left">
                <div
                    class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-blue-50 border border-blue-100 text-blue-700 text-xs font-semibold mb-6">
                    <span class="w-2 h-2 rounded-full bg-blue-600 animate-pulse"></span>
                    Cambridge Assessment International Education
                </div>
                <h1
                    class="text-4xl md:text-5xl lg:text-7xl font-extrabold text-slate-900 tracking-tight leading-[1.1] mb-6">
                    Shaping the <br>
                    <span class="text-blue-700">Global Leaders</span> <br>
                    of Tomorrow.
                </h1>
                <p
                    class="text-base lg:text-lg text-slate-500 font-medium leading-relaxed mb-8 max-w-xl mx-auto lg:mx-0">
                    A premier educational institution combining rigorous academic standards with cutting-edge technology
                    to prepare students for the complexities of the 21st century.
                </p>
                <div class="flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-4">
                    <button
                        class="w-full sm:w-auto bg-slate-900 text-white px-8 py-3.5 rounded-lg font-semibold text-sm hover:bg-slate-800 transition shadow-enterprise">
                        Discover Our Curriculum
                    </button>
                    <button
                        class="w-full sm:w-auto bg-white text-slate-700 border border-slate-300 px-8 py-3.5 rounded-lg font-semibold text-sm hover:bg-slate-50 transition flex items-center justify-center gap-2">
                        <i class="fa-solid fa-play"></i> Watch Campus Tour
                    </button>
                </div>
            </div>

            <!-- Hero Image / Visual -->
            <div class="lg:col-span-6 relative">
                <!-- Decorative background shape -->
                <div class="absolute inset-0 bg-slate-100 rounded-3xl transform rotate-3 scale-105 hidden lg:block">
                </div>

                <div
                    class="relative rounded-2xl lg:rounded-3xl overflow-hidden shadow-enterprise h-[400px] lg:h-[600px] border border-slate-200/50">
                    <img src="{{ asset('images/education/campus-hero.png') }}" class="w-full h-full object-cover"
                        alt="Students">

                    <!-- Floating Data Card (Enterprise Touch) -->
                    <div
                        class="absolute bottom-6 left-6 right-6 lg:right-auto lg:w-72 bg-white/95 backdrop-blur border border-slate-200 p-5 rounded-xl shadow-xl">
                        <div class="flex items-center justify-between mb-2">
                            <span class="text-xs font-bold text-slate-500 uppercase tracking-wider">University
                                Acceptance</span>
                            <i class="fa-solid fa-arrow-trend-up text-emerald-500"></i>
                        </div>
                        <h4 class="text-3xl font-extrabold text-slate-900 mb-1">99.8%</h4>
                        <p class="text-xs text-slate-500 font-medium">Of graduates secured placements in Top 100 Global
                            Universities.</p>
                    </div>
                </div>
            </div>

        </div>
    </header>

    <!-- 3. ACCREDITATION LOGO BANNER -->
    <section class="border-y border-slate-200 bg-slate-50 py-8 px-6">
        <div class="max-w-[85rem] mx-auto">
            <p class="text-center text-xs font-semibold text-slate-400 uppercase tracking-widest mb-6">Accredited &
                Partnered With</p>
            <div
                class="flex flex-wrap justify-center items-center gap-8 md:gap-16 opacity-60 grayscale hover:grayscale-0 transition-all duration-500">
                <div class="text-xl font-black text-slate-800"><i class="fa-brands fa-microsoft"></i> Microsoft Ed</div>
                <div class="text-xl font-black text-slate-800"><i class="fa-brands fa-google"></i> Google for Edu</div>
                <div class="text-xl font-black text-slate-800"><i class="fa-brands fa-aws"></i> AWS Academy</div>
                <div class="text-xl font-black text-slate-800">Cambridge</div>
            </div>
        </div>
    </section>

    <!-- 4. ACADEMICS (ENTERPRISE BENTO-BOX GRID) -->
    <section id="academics" class="py-20 lg:py-32 px-6">
        <div class="max-w-[85rem] mx-auto">

            <div class="max-w-3xl mb-16">
                <h2 class="text-3xl lg:text-5xl font-extrabold text-slate-900 tracking-tight mb-4">A Curriculum Designed
                    for <br> Real-World Impact.</h2>
                <p class="text-slate-500 text-lg">We move beyond traditional memorization, focusing on critical
                    thinking, technological proficiency, and global citizenship.</p>
            </div>

            <!-- Bento Box Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 auto-rows-[minmax(250px,auto)]">

                <!-- Main Core (Span 2) -->
                <div
                    class="md:col-span-2 bg-slate-900 rounded-3xl p-8 lg:p-12 relative overflow-hidden group border border-slate-800">
                    <div
                        class="absolute top-0 right-0 p-8 opacity-10 transform group-hover:scale-110 transition duration-700">
                        <i class="fa-solid fa-globe text-9xl text-white"></i>
                    </div>
                    <div class="relative z-10 h-full flex flex-col justify-between">
                        <div>
                            <span class="text-blue-400 text-xs font-bold uppercase tracking-widest mb-3 block">Core
                                Academic</span>
                            <h3 class="text-2xl lg:text-4xl font-bold text-white mb-4 leading-tight">International
                                Baccalaureate (IB) Diploma</h3>
                            <p class="text-slate-400 max-w-md text-sm leading-relaxed">Recognized worldwide, our IB
                                program challenges students to excel in their studies and encourage both personal and
                                academic achievement.</p>
                        </div>
                        <div class="mt-8 pt-6 border-t border-slate-800 flex items-center gap-4">
                            <a href="#"
                                class="text-white text-sm font-semibold hover:text-blue-400 transition flex items-center gap-2">Explore
                                Syllabus <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- STEM (Span 1) -->
                <div
                    class="md:col-span-1 bg-white rounded-3xl p-8 lg:p-10 border border-slate-200 shadow-enterprise flex flex-col justify-between hover:border-blue-200 transition">
                    <div>
                        <div
                            class="w-12 h-12 bg-blue-50 text-blue-700 rounded-xl flex items-center justify-center text-xl mb-6">
                            <i class="fa-solid fa-microchip"></i>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 mb-3">STEM Excellence</h3>
                        <p class="text-slate-500 text-sm leading-relaxed">Advanced robotics, data science, and
                            engineering principles integrated from grade 7 onwards.</p>
                    </div>
                </div>

                <!-- Arts (Span 1) -->
                <div
                    class="md:col-span-1 bg-white rounded-3xl p-8 lg:p-10 border border-slate-200 shadow-enterprise flex flex-col justify-between hover:border-blue-200 transition">
                    <div>
                        <div
                            class="w-12 h-12 bg-amber-50 text-amber-600 rounded-xl flex items-center justify-center text-xl mb-6">
                            <i class="fa-solid fa-palette"></i>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 mb-3">Creative Arts</h3>
                        <p class="text-slate-500 text-sm leading-relaxed">Comprehensive programs in visual arts,
                            digital media, and performing arts to nurture creativity.</p>
                    </div>
                </div>

                <!-- Tech/LMS (Span 2) -->
                <div
                    class="md:col-span-2 bg-slate-50 rounded-3xl p-8 lg:p-12 border border-slate-200 flex flex-col justify-between">
                    <div class="flex flex-col md:flex-row gap-8 items-center">
                        <div class="flex-1">
                            <span class="text-slate-500 text-xs font-bold uppercase tracking-widest mb-3 block">Digital
                                Infrastructure</span>
                            <h3 class="text-2xl lg:text-3xl font-bold text-slate-900 mb-4">Powered by Custom Enterprise
                                LMS</h3>
                            <p class="text-slate-600 text-sm leading-relaxed mb-6">Our proprietary Learning Management
                                System ensures seamless collaboration between students, teachers, and parents. Track
                                progress, submit assignments, and access library resources in real-time.</p>
                            <ul class="space-y-2">
                                <li class="text-sm text-slate-700 font-medium flex items-center gap-2"><i
                                        class="fa-solid fa-check-circle text-blue-600"></i> Integrated Analytics
                                    Dashboard</li>
                                <li class="text-sm text-slate-700 font-medium flex items-center gap-2"><i
                                        class="fa-solid fa-check-circle text-blue-600"></i> 24/7 Access to Recorded
                                    Lectures</li>
                            </ul>
                        </div>
                        <!-- Decorative UI Element representing a dashboard -->
                        <div
                            class="w-full md:w-64 bg-white p-4 rounded-xl border border-slate-200 shadow-sm shrink-0 hidden sm:block">
                            <div class="flex items-center gap-2 mb-4">
                                <div class="w-8 h-8 rounded-full bg-slate-200"></div>
                                <div>
                                    <div class="w-20 h-2 bg-slate-200 rounded-full mb-1"></div>
                                    <div class="w-12 h-2 bg-slate-100 rounded-full"></div>
                                </div>
                            </div>
                            <div class="w-full h-24 bg-blue-50 rounded-lg border border-blue-100 mb-2"></div>
                            <div class="flex gap-2">
                                <div class="w-1/2 h-8 bg-slate-50 rounded border border-slate-100"></div>
                                <div class="w-1/2 h-8 bg-slate-50 rounded border border-slate-100"></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 5. CAMPUS LIFE (CLEAN MASONRY) -->
    <section id="campus" class="py-20 lg:py-32 px-6 bg-slate-900">
        <div class="max-w-[85rem] mx-auto">
            <div class="flex flex-col md:flex-row justify-between items-end mb-12 gap-6">
                <div class="max-w-2xl">
                    <h2 class="text-3xl lg:text-5xl font-extrabold text-white tracking-tight mb-4">World-Class
                        Facilities.</h2>
                    <p class="text-slate-400 text-lg">A 50-acre campus designed to inspire learning, foster
                        collaboration, and promote physical well-being.</p>
                </div>
                <button
                    class="bg-white/10 text-white border border-white/20 px-6 py-3 rounded-lg font-semibold text-sm hover:bg-white hover:text-slate-900 transition whitespace-nowrap">
                    View Full Gallery
                </button>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="md:col-span-2 relative rounded-2xl overflow-hidden h-64 md:h-96 group">
                    <img src="{{ asset('images/education/perpustakaan-besar.png') }}"
                        class="w-full h-full object-cover group-hover:scale-105 transition duration-700">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-slate-900/90 to-transparent flex items-end p-6 md:p-8">
                        <div>
                            <h4 class="text-xl font-bold text-white">The Grand Library</h4>
                            <p class="text-slate-300 text-sm">Over 100,000 digital and physical resources.</p>
                        </div>
                    </div>
                </div>
                <div class="md:col-span-1 relative rounded-2xl overflow-hidden h-64 md:h-96 group">
                    <img src="{{ asset('images/education/library.png') }}"
                        class="w-full h-full object-cover group-hover:scale-105 transition duration-700">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-slate-900/90 to-transparent flex items-end p-6 md:p-8">
                        <div>
                            <h4 class="text-xl font-bold text-white">Innovation Labs</h4>
                            <p class="text-slate-300 text-sm">Equipped with 3D printers & Mac Studios.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 6. STRUCTURED FOOTER -->
    <footer class="bg-white pt-20 pb-10 px-6 border-t border-slate-200">
        <div class="max-w-[85rem] mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-12 mb-16">

                <div class="lg:col-span-2">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="w-8 h-8 bg-blue-700 rounded-lg flex items-center justify-center text-white">
                            <i class="fa-solid fa-graduation-cap text-xs"></i>
                        </div>
                        <span class="text-xl font-bold tracking-tight text-slate-900">Lexicon<span
                                class="font-light text-slate-500">Academy</span></span>
                    </div>
                    <p class="text-slate-500 text-sm leading-relaxed mb-6 max-w-sm">
                        Committed to educational excellence, character building, and technological fluency for the
                        leaders of tomorrow.
                    </p>
                    <div class="flex gap-4">
                        <a href="#" class="text-slate-400 hover:text-blue-700 transition"><i
                                class="fa-brands fa-linkedin text-xl"></i></a>
                        <a href="#" class="text-slate-400 hover:text-blue-700 transition"><i
                                class="fa-brands fa-twitter text-xl"></i></a>
                        <a href="#" class="text-slate-400 hover:text-blue-700 transition"><i
                                class="fa-brands fa-instagram text-xl"></i></a>
                    </div>
                </div>

                <div>
                    <h4 class="text-slate-900 font-bold mb-6 text-sm">Admissions</h4>
                    <ul class="space-y-4 text-sm text-slate-500 font-medium">
                        <li><a href="#" class="hover:text-blue-700 transition">How to Apply</a></li>
                        <li><a href="#" class="hover:text-blue-700 transition">Tuition & Fees</a></li>
                        <li><a href="#" class="hover:text-blue-700 transition">Scholarships</a></li>
                        <li><a href="#" class="hover:text-blue-700 transition">International Students</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-slate-900 font-bold mb-6 text-sm">Academics</h4>
                    <ul class="space-y-4 text-sm text-slate-500 font-medium">
                        <li><a href="#" class="hover:text-blue-700 transition">Primary School</a></li>
                        <li><a href="#" class="hover:text-blue-700 transition">Middle School</a></li>
                        <li><a href="#" class="hover:text-blue-700 transition">High School (IB)</a></li>
                        <li><a href="#" class="hover:text-blue-700 transition">Faculty Directory</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-slate-900 font-bold mb-6 text-sm">Contact Us</h4>
                    <ul class="space-y-4 text-sm text-slate-500 font-medium">
                        <li class="flex gap-3"><i class="fa-solid fa-location-dot mt-1 text-slate-400"></i> 123
                            Education Boulevard, Business District, SG 12345</li>
                        <li class="flex gap-3"><i class="fa-solid fa-phone mt-1 text-slate-400"></i> +65 6789 0000
                        </li>
                        <li class="flex gap-3"><i class="fa-solid fa-envelope mt-1 text-slate-400"></i>
                            admissions@lexicon.edu</li>
                    </ul>
                </div>

            </div>

            <div class="border-t border-slate-200 pt-8 flex flex-col md:flex-row justify-between items-center gap-4">
                <p class="text-slate-500 text-xs font-medium">
                    &copy; 2026 Elijabah International Group. All rights reserved.
                </p>
                <div class="flex gap-6 text-xs font-medium text-slate-500">
                    <a href="#" class="hover:text-slate-900 transition">Privacy Policy</a>
                    <a href="#" class="hover:text-slate-900 transition">Terms of Service</a>
                    <a href="#" class="hover:text-slate-900 transition">Cookie Policy</a>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>
