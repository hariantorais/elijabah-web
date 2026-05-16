<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edutech Learning Hub | LMS & Digital Academy</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <!-- Google Fonts -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800;900&display=swap');

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #f8fafc;
        }

        .glass-nav {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(12px);
            border-bottom: 1px solid rgba(226, 232, 240, 0.8);
        }

        .shadow-tech {
            box-shadow: 0 10px 40px -10px rgba(79, 70, 229, 0.15);
        }

        .mesh-bg {
            background-image: radial-gradient(at 100% 0%, hsla(240, 100%, 94%, 1) 0, transparent 50%), radial-gradient(at 0% 100%, hsla(220, 100%, 94%, 1) 0, transparent 50%);
        }
    </style>
</head>

<body class="text-slate-900 antialiased" x-data="{ mobileMenu: false }">

    <!-- 1. NAVIGATION -->
    <nav class="fixed top-0 w-full z-[100] glass-nav transition-all duration-300">
        <div class="max-w-[85rem] mx-auto px-6 py-4 flex justify-between items-center">

            <!-- Logo -->
            <div class="flex items-center gap-3">
                <div
                    class="w-10 h-10 bg-indigo-600 rounded-xl flex items-center justify-center text-white shadow-md shadow-indigo-200">
                    <i class="fa-solid fa-laptop-code text-sm"></i>
                </div>
                <div class="leading-none">
                    <span class="text-xl font-extrabold tracking-tight text-slate-900 block">EduHub</span>
                    <span class="text-[9px] font-bold text-indigo-600 tracking-[0.3em] uppercase block mt-0.5">Digital
                        Academy</span>
                </div>
            </div>

            <!-- Desktop Menu -->
            <div class="hidden lg:flex items-center gap-8">
                <a href="#profil"
                    class="text-xs font-bold text-slate-500 uppercase tracking-widest hover:text-indigo-600 transition">Profil</a>
                <a href="#keunggulan"
                    class="text-xs font-bold text-slate-500 uppercase tracking-widest hover:text-indigo-600 transition">Program</a>
                <a href="#fasilitas"
                    class="text-xs font-bold text-slate-500 uppercase tracking-widest hover:text-indigo-600 transition">Fasilitas</a>
                <a href="#berita"
                    class="text-xs font-bold text-slate-500 uppercase tracking-widest hover:text-indigo-600 transition">Berita</a>
                <a href="#kontak"
                    class="text-xs font-bold text-slate-500 uppercase tracking-widest hover:text-indigo-600 transition">Kontak</a>
            </div>

            <!-- CTA Desktop -->
            <div class="hidden lg:flex gap-3">
                <button
                    class="bg-indigo-50 text-indigo-600 px-5 py-2.5 rounded-xl font-bold text-xs hover:bg-indigo-100 transition">Masuk
                    LMS</button>
                <button
                    class="bg-indigo-600 text-white px-5 py-2.5 rounded-xl font-bold text-xs shadow-lg shadow-indigo-600/30 hover:bg-indigo-700 transition">
                    Daftar Sekarang
                </button>
            </div>

            <!-- Mobile Toggle Button -->
            <button @click="mobileMenu = !mobileMenu" class="lg:hidden text-slate-900 text-2xl focus:outline-none">
                <i :class="mobileMenu ? 'fa-solid fa-xmark' : 'fa-solid fa-bars-staggered'"></i>
            </button>
        </div>

        <!-- Mobile Menu Dropdown -->
        <div x-show="mobileMenu" x-collapse x-cloak class="lg:hidden bg-white border-t border-slate-100 shadow-2xl">
            <div class="px-6 py-6 flex flex-col gap-6">
                <a href="#profil" @click="mobileMenu = false"
                    class="text-base font-bold text-slate-800 flex items-center gap-3"><i
                        class="fa-solid fa-building text-indigo-600 w-5"></i> Profil Lembaga</a>
                <a href="#keunggulan" @click="mobileMenu = false"
                    class="text-base font-bold text-slate-800 flex items-center gap-3"><i
                        class="fa-solid fa-star text-indigo-600 w-5"></i> Keunggulan</a>
                <a href="#fasilitas" @click="mobileMenu = false"
                    class="text-base font-bold text-slate-800 flex items-center gap-3"><i
                        class="fa-solid fa-server text-indigo-600 w-5"></i> Fasilitas</a>
                <a href="#kontak" @click="mobileMenu = false"
                    class="text-base font-bold text-slate-800 flex items-center gap-3"><i
                        class="fa-solid fa-map-location-dot text-indigo-600 w-5"></i> Kontak & Map</a>
                <hr class="border-slate-100">
                <div class="grid grid-cols-2 gap-3">
                    <button class="bg-indigo-50 text-indigo-600 py-3 rounded-xl font-bold text-sm">Masuk LMS</button>
                    <button class="bg-indigo-600 text-white py-3 rounded-xl font-bold text-sm shadow-md">Daftar</button>
                </div>
            </div>
        </div>
    </nav>

    <!-- 2. HERO SECTION -->
    <header class="pt-32 lg:pt-44 pb-20 px-6 mesh-bg overflow-hidden relative">
        <div class="max-w-[85rem] mx-auto grid lg:grid-cols-12 gap-12 items-center relative z-10">
            <!-- Text Content -->
            <div class="lg:col-span-6 text-center lg:text-left">
                <div
                    class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white border border-indigo-100 text-indigo-700 text-[10px] font-bold uppercase tracking-widest mb-6 shadow-sm">
                    <i class="fa-solid fa-rocket text-indigo-500"></i> Platform Edukasi No.1 di Batam
                </div>
                <h1
                    class="text-4xl md:text-5xl lg:text-6xl font-black text-slate-900 tracking-tight leading-[1.1] mb-6">
                    Akselerasi Karir Digital Anda Bersama <span class="text-indigo-600">EduHub.</span>
                </h1>
                <p class="text-base text-slate-500 font-medium leading-relaxed mb-8 max-w-xl mx-auto lg:mx-0">
                    Tingkatkan skill koding, desain, dan bisnis digital melalui sistem manajemen pembelajaran (LMS)
                    interaktif dan mentor praktisi industri.
                </p>
                <div class="flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-4">
                    <button
                        class="w-full sm:w-auto bg-slate-900 text-white px-8 py-4 rounded-xl font-bold text-sm hover:bg-indigo-600 transition shadow-tech">
                        Mulai Belajar Gratis
                    </button>
                    <button
                        class="w-full sm:w-auto bg-white text-slate-700 border border-slate-200 px-8 py-4 rounded-xl font-bold text-sm hover:bg-slate-50 transition flex items-center justify-center gap-3">
                        <i class="fa-solid fa-laptop text-indigo-600"></i> Demo LMS
                    </button>
                </div>
            </div>

            <!-- Image Visual / App Mockup -->
            <div class="lg:col-span-6 relative mt-8 lg:mt-0">
                <div
                    class="relative rounded-[2rem] overflow-hidden shadow-2xl border-8 border-white bg-slate-100 h-[350px] md:h-[450px]">
                    <img src="{{ asset('images/education/lms.png') }}" class="w-full h-full object-cover"
                        alt="LMS Dashboard">

                    <!-- Floating Badge -->
                    <div
                        class="absolute bottom-6 left-6 bg-white/90 backdrop-blur p-4 rounded-xl shadow-lg border border-white flex items-center gap-4">
                        <div
                            class="w-12 h-12 bg-green-100 text-green-600 rounded-full flex items-center justify-center text-xl">
                            <i class="fa-solid fa-check-double"></i>
                        </div>
                        <div>
                            <p class="text-[10px] font-bold text-slate-400 uppercase tracking-widest">Tingkat Kelulusan
                            </p>
                            <h4 class="text-xl font-black text-slate-900">96.5%</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- 3. PARTNERS & ACCREDITATION -->
    <section class="border-y border-slate-200 bg-white py-8 px-6">
        <div class="max-w-[85rem] mx-auto">
            <p class="text-center text-[10px] font-bold text-slate-400 uppercase tracking-widest mb-6">Partner Industri
                & Teknologi Kami</p>
            <div
                class="flex flex-wrap justify-center items-center gap-8 md:gap-16 opacity-50 grayscale hover:grayscale-0 transition duration-500">
                <div class="text-xl font-black text-slate-700 flex items-center gap-2"><i
                        class="fa-brands fa-google text-2xl"></i> Google Edu</div>
                <div class="text-xl font-black text-slate-700 flex items-center gap-2"><i
                        class="fa-brands fa-aws text-2xl"></i> AWS Academy</div>
                <div class="text-xl font-black text-slate-700 flex items-center gap-2"><i
                        class="fa-brands fa-microsoft text-2xl"></i> Microsoft</div>
                <div class="text-xl font-black text-slate-700 flex items-center gap-2"><i
                        class="fa-brands fa-figma text-2xl"></i> Figma</div>
            </div>
        </div>
    </section>

    <!-- 4. SAMBUTAN & PROFIL LEMBAGA -->
    <section id="profil" class="py-20 lg:py-32 px-6 bg-slate-50">
        <div class="max-w-[85rem] mx-auto grid lg:grid-cols-12 gap-12 lg:gap-20 items-center">

            <!-- Foto & Sambutan -->
            <div class="lg:col-span-5 relative">
                <div
                    class="relative rounded-[2rem] overflow-hidden shadow-tech border-4 border-white h-[400px] md:h-[500px]">
                    <img src="{{ asset('images/education/ceo.png') }}"
                        class="w-full h-full object-cover grayscale hover:grayscale-0 transition duration-700">
                </div>
                <div
                    class="absolute -bottom-6 -right-6 lg:-right-12 bg-indigo-600 text-white p-6 md:p-8 rounded-[2rem] shadow-xl w-[90%] md:w-80">
                    <i class="fa-solid fa-quote-left text-3xl text-indigo-400/50 mb-3 block"></i>
                    <p class="text-sm font-medium leading-relaxed italic mb-4">"Teknologi bukan sekadar alat, tapi
                        jembatan untuk menciptakan talenta digital yang siap bersaing di pasar global."</p>
                    <h5 class="font-bold text-white">Harianto Rais, M.Kom</h5>
                    <p class="text-[10px] text-indigo-200 uppercase tracking-widest mt-1">Founder & CEO EduHub</p>
                </div>
            </div>

            <!-- Profil Detail -->
            <div class="lg:col-span-7 mt-10 lg:mt-0">
                <span class="text-indigo-600 font-bold text-[10px] uppercase tracking-[0.3em] mb-4 block">Profil
                    Lembaga</span>
                <h2 class="text-3xl md:text-5xl font-black text-slate-900 tracking-tight leading-tight mb-6">
                    Transformasi Pendidikan di Era Industri 5.0.</h2>
                <p class="text-slate-500 text-base leading-relaxed mb-6">
                    Berdiri sejak tahun 2026 di Batam, EduHub Digital Academy didedikasikan untuk menjembatani
                    kesenjangan antara kurikulum akademis tradisional dengan kebutuhan nyata industri teknologi masa
                    kini.
                </p>
                <p class="text-slate-500 text-base leading-relaxed mb-8">
                    Kami menghadirkan ekosistem belajar yang tidak hanya berfokus pada teori, melainkan
                    <strong>Project-Based Learning</strong>. Setiap siswa akan membangun portofolio riil sebelum mereka
                    lulus.
                </p>

                <div class="grid grid-cols-2 gap-6 pt-8 border-t border-slate-200">
                    <div>
                        <h4 class="text-3xl font-black text-indigo-600 mb-1">50+</h4>
                        <p class="text-xs font-bold text-slate-500">Mentor Praktisi Industri</p>
                    </div>
                    <div>
                        <h4 class="text-3xl font-black text-indigo-600 mb-1">3.5K</h4>
                        <p class="text-xs font-bold text-slate-500">Alumni Terserap Kerja</p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- 5. KENAPA MEMILIH KAMI (KEUNGGULAN / BENTO BOX) -->
    <section id="keunggulan" class="py-20 lg:py-32 px-6 bg-white">
        <div class="max-w-[85rem] mx-auto">
            <div class="text-center mb-16">
                <span class="text-indigo-600 font-bold text-[10px] uppercase tracking-[0.3em] mb-2 block">Why Choose
                    Us</span>
                <h2 class="text-3xl md:text-5xl font-black text-slate-900 tracking-tight">Keunggulan Ekosistem EduHub
                </h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Card 1 -->
                <div
                    class="bg-slate-50 rounded-[2rem] p-8 border border-slate-100 hover:shadow-tech hover:border-indigo-100 transition group">
                    <div
                        class="w-12 h-12 bg-white text-indigo-600 rounded-xl flex items-center justify-center text-xl shadow-sm mb-6 group-hover:bg-indigo-600 group-hover:text-white transition">
                        <i class="fa-solid fa-display"></i>
                    </div>
                    <h3 class="text-lg font-black text-slate-900 mb-3">LMS Interaktif</h3>
                    <p class="text-sm text-slate-500 leading-relaxed">Platform belajar mandiri dengan video materi 4K,
                        kuis otomatis, dan pelacakan progres real-time.</p>
                </div>
                <!-- Card 2 -->
                <div
                    class="bg-slate-50 rounded-[2rem] p-8 border border-slate-100 hover:shadow-tech hover:border-indigo-100 transition group">
                    <div
                        class="w-12 h-12 bg-white text-indigo-600 rounded-xl flex items-center justify-center text-xl shadow-sm mb-6 group-hover:bg-indigo-600 group-hover:text-white transition">
                        <i class="fa-solid fa-user-tie"></i>
                    </div>
                    <h3 class="text-lg font-black text-slate-900 mb-3">Expert Mentors</h3>
                    <p class="text-sm text-slate-500 leading-relaxed">Dibimbing langsung oleh praktisi senior dari
                        perusahaan teknologi dan startup ternama.</p>
                </div>
                <!-- Card 3 -->
                <div
                    class="bg-slate-50 rounded-[2rem] p-8 border border-slate-100 hover:shadow-tech hover:border-indigo-100 transition group">
                    <div
                        class="w-12 h-12 bg-white text-indigo-600 rounded-xl flex items-center justify-center text-xl shadow-sm mb-6 group-hover:bg-indigo-600 group-hover:text-white transition">
                        <i class="fa-solid fa-briefcase"></i>
                    </div>
                    <h3 class="text-lg font-black text-slate-900 mb-3">Career Coaching</h3>
                    <p class="text-sm text-slate-500 leading-relaxed">Fasilitas review CV, simulasi interview, dan
                        penyaluran kerja ke hiring partner kami.</p>
                </div>
                <!-- Card 4 -->
                <div
                    class="bg-slate-50 rounded-[2rem] p-8 border border-slate-100 hover:shadow-tech hover:border-indigo-100 transition group">
                    <div
                        class="w-12 h-12 bg-white text-indigo-600 rounded-xl flex items-center justify-center text-xl shadow-sm mb-6 group-hover:bg-indigo-600 group-hover:text-white transition">
                        <i class="fa-solid fa-certificate"></i>
                    </div>
                    <h3 class="text-lg font-black text-slate-900 mb-3">Sertifikasi Global</h3>
                    <p class="text-sm text-slate-500 leading-relaxed">Dapatkan sertifikat kompetensi yang diakui secara
                        internasional setelah lulus program.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 6. FASILITAS & GALERI (COMBINED LAYOUT) -->
    <section id="fasilitas" class="py-20 lg:py-32 px-6 bg-slate-900 text-white rounded-t-[3rem] lg:rounded-t-[4rem]">
        <div class="max-w-[85rem] mx-auto">
            <div class="flex flex-col lg:flex-row justify-between items-end mb-16 gap-6">
                <div>
                    <h2 class="text-3xl md:text-5xl font-black tracking-tight mb-4">Tech Campus & Hub.</h2>
                    <p class="text-slate-400 text-base">Fasilitas luring (offline) berstandar industri untuk mendukung
                        produktivitas.</p>
                </div>
                <button
                    class="bg-white/10 border border-white/20 px-6 py-3 rounded-xl text-sm font-bold hover:bg-white hover:text-slate-900 transition">
                    Lihat Semua Galeri
                </button>
            </div>

            <!-- Custom Masonry Gallery -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-4 h-auto md:h-[500px]">
                <div class="md:col-span-2 md:row-span-2 relative rounded-[2rem] overflow-hidden group h-64 md:h-full">
                    <img src="{{ asset('images/education/coding.png') }}"
                        class="w-full h-full object-cover group-hover:scale-105 transition duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/90 to-transparent flex items-end p-6">
                        <h4 class="text-xl font-bold">Creative Co-Working Space</h4>
                    </div>
                </div>
                <div class="md:col-span-1 md:row-span-1 relative rounded-[2rem] overflow-hidden group h-48 md:h-full">
                    <img src="{{ asset('images/education/studio.png') }}"
                        class="w-full h-full object-cover group-hover:scale-105 transition duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/90 to-transparent flex items-end p-6">
                        <h4 class="text-sm font-bold">Podcast & Media Studio</h4>
                    </div>
                </div>
                <div class="md:col-span-1 md:row-span-1 relative rounded-[2rem] overflow-hidden group h-48 md:h-full">
                    <img src="{{ asset('images/education/server-room.png') }}"
                        class="w-full h-full object-cover group-hover:scale-105 transition duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/90 to-transparent flex items-end p-6">
                        <h4 class="text-sm font-bold">Hardware & Server Lab</h4>
                    </div>
                </div>
                <div class="md:col-span-2 relative rounded-[2rem] overflow-hidden group h-48 md:h-full">
                    <img src="{{ asset('images/education/auditorium.png') }}"
                        class="w-full h-full object-cover group-hover:scale-105 transition duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/90 to-transparent flex items-end p-6">
                        <h4 class="text-lg font-bold">Auditorium & Seminar Room</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 7. BERITA & ARTIKEL TERBARU -->
    <section id="berita" class="py-20 lg:py-32 px-6 bg-slate-50">
        <div class="max-w-[85rem] mx-auto">
            <div class="text-center mb-16">
                <span
                    class="text-indigo-600 font-bold text-[10px] uppercase tracking-[0.3em] mb-2 block">Insights</span>
                <h2 class="text-3xl md:text-5xl font-black text-slate-900 tracking-tight">Artikel & Tech News</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Berita 1 -->
                <article
                    class="bg-white rounded-[2rem] p-4 border border-slate-200 shadow-sm hover:shadow-tech transition group">
                    <div class="h-48 overflow-hidden rounded-[1.5rem] mb-5">
                        <img src="{{ asset('images/education/auditorium.png') }}"
                            class="w-full h-full object-cover group-hover:scale-105 transition duration-700">
                    </div>
                    <div class="px-2">
                        <span
                            class="text-[10px] font-bold text-indigo-600 uppercase tracking-widest mb-2 block">Event</span>
                        <h4
                            class="text-lg font-black text-slate-900 mb-3 leading-snug group-hover:text-indigo-600 transition">
                            Seminar Karir: Peluang Menjadi Full Stack Developer di 2026</h4>
                        <p class="text-slate-500 text-sm leading-relaxed mb-4 line-clamp-2">Mengupas tuntas tools
                            terbaru, gaji, dan roadmap menjadi web developer yang dicari perusahaan...</p>
                        <p class="text-[10px] font-bold text-slate-400">12 Mei 2026</p>
                    </div>
                </article>
                <!-- Berita 2 -->
                <article
                    class="bg-white rounded-[2rem] p-4 border border-slate-200 shadow-sm hover:shadow-tech transition group">
                    <div class="h-48 overflow-hidden rounded-[1.5rem] mb-5">
                        <img src="{{ asset('images/education/lms.png') }}"
                            class="w-full h-full object-cover group-hover:scale-105 transition duration-700">
                    </div>
                    <div class="px-2">
                        <span class="text-[10px] font-bold text-indigo-600 uppercase tracking-widest mb-2 block">Update
                            Platform</span>
                        <h4
                            class="text-lg font-black text-slate-900 mb-3 leading-snug group-hover:text-indigo-600 transition">
                            Peluncuran Fitur 'AI Code Reviewer' pada Dashboard EduHub</h4>
                        <p class="text-slate-500 text-sm leading-relaxed mb-4 line-clamp-2">Kini siswa dapat
                            memeriksakan sintaks kodenya langsung di dalam LMS dengan bantuan AI...</p>
                        <p class="text-[10px] font-bold text-slate-400">05 Mei 2026</p>
                    </div>
                </article>
                <!-- Berita 3 -->
                <article
                    class="bg-white rounded-[2rem] p-4 border border-slate-200 shadow-sm hover:shadow-tech transition group">
                    <div class="h-48 overflow-hidden rounded-[1.5rem] mb-5">
                        <img src="{{ asset('images/education/coding.png') }}"
                            class="w-full h-full object-cover group-hover:scale-105 transition duration-700">
                    </div>
                    <div class="px-2">
                        <span class="text-[10px] font-bold text-indigo-600 uppercase tracking-widest mb-2 block">Kisah
                            Sukses</span>
                        <h4
                            class="text-lg font-black text-slate-900 mb-3 leading-snug group-hover:text-indigo-600 transition">
                            Dari Kasir Minimarket Menjadi UI/UX Designer di Startup Unicorn</h4>
                        <p class="text-slate-500 text-sm leading-relaxed mb-4 line-clamp-2">Baca perjalanan inspiratif
                            Budi, lulusan Bootcamp Batch 5 yang kini bekerja di Singapura...</p>
                        <p class="text-[10px] font-bold text-slate-400">01 Mei 2026</p>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- 8. KONTAK & MAP -->
    <section id="kontak" class="py-20 lg:py-32 px-6 bg-white">
        <div
            class="max-w-[85rem] mx-auto bg-slate-50 rounded-[3rem] border border-slate-200 overflow-hidden shadow-sm">
            <div class="grid lg:grid-cols-2">
                <!-- Info Kontak -->
                <div class="p-8 lg:p-16">
                    <h2 class="text-3xl md:text-4xl font-black text-slate-900 tracking-tight mb-4">Mari Berdiskusi.
                    </h2>
                    <p class="text-slate-500 mb-10 text-sm">Konsultasikan kebutuhan belajar atau pendaftaran bootcamp
                        Anda bersama tim admission kami.</p>

                    <div class="space-y-6 mb-10">
                        <div class="flex items-start gap-4">
                            <div
                                class="w-12 h-12 bg-white rounded-xl flex items-center justify-center text-indigo-600 shadow-sm border border-slate-100 shrink-0">
                                <i class="fa-solid fa-map-location-dot"></i>
                            </div>
                            <div>
                                <h5 class="font-bold text-slate-900 mb-1">Lokasi Kampus</h5>
                                <p class="text-sm text-slate-500">Jl. Teknologi No. 88, Batam Centre<br>Kepulauan Riau,
                                    Indonesia 29461</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div
                                class="w-12 h-12 bg-white rounded-xl flex items-center justify-center text-indigo-600 shadow-sm border border-slate-100 shrink-0">
                                <i class="fa-solid fa-envelope"></i>
                            </div>
                            <div>
                                <h5 class="font-bold text-slate-900 mb-1">Email Resmi</h5>
                                <p class="text-sm text-slate-500">hello@eduhub.academy</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div
                                class="w-12 h-12 bg-white rounded-xl flex items-center justify-center text-indigo-600 shadow-sm border border-slate-100 shrink-0">
                                <i class="fa-brands fa-whatsapp text-xl"></i>
                            </div>
                            <div>
                                <h5 class="font-bold text-slate-900 mb-1">WhatsApp Admin</h5>
                                <p class="text-sm text-slate-500">+62 811 2233 4455</p>
                            </div>
                        </div>
                    </div>

                    <button
                        class="bg-indigo-600 text-white px-8 py-4 rounded-xl font-bold text-sm hover:bg-indigo-700 transition w-full sm:w-auto text-center shadow-lg shadow-indigo-600/20">
                        Hubungi via WhatsApp
                    </button>
                </div>

                <!-- Google Map Placeholder -->
                <div class="relative h-[400px] lg:h-full bg-slate-200">
                    <!-- Iframe Google Maps asli bisa dimasukkan di sini. Ini dummy iframe image -->
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127632.40428514869!2d103.95757754326503!3d1.0827255152862024!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d98d41ba3c260f%3A0x6b69d9c223c2a632!2sBatam%2C%20Batam%20City%2C%20Riau%20Islands!5e0!3m2!1sen!2sid!4v1715155500000!5m2!1sen!2sid"
                        width="100%" height="100%" style="border:0; filter: grayscale(50%);" allowfullscreen=""
                        loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </div>
    </section>

    <!-- 9. FOOTER -->
    <footer class="bg-slate-900 pt-20 pb-10 px-6 text-white border-t border-slate-800">
        <div class="max-w-[85rem] mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-16">

                <!-- Brand Info -->
                <div class="lg:col-span-1">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="w-10 h-10 bg-indigo-600 rounded-xl flex items-center justify-center text-white">
                            <i class="fa-solid fa-laptop-code text-sm"></i>
                        </div>
                        <span class="text-2xl font-black tracking-tight">EduHub</span>
                    </div>
                    <p class="text-slate-400 text-sm leading-relaxed mb-6">
                        Platform edukasi dan bootcamp digital terbaik untuk mempersiapkan karir teknologi Anda.
                    </p>
                    <div class="flex gap-4">
                        <a href="#"
                            class="w-10 h-10 rounded-full bg-slate-800 flex items-center justify-center text-slate-400 hover:text-white hover:bg-indigo-600 transition"><i
                                class="fa-brands fa-instagram"></i></a>
                        <a href="#"
                            class="w-10 h-10 rounded-full bg-slate-800 flex items-center justify-center text-slate-400 hover:text-white hover:bg-indigo-600 transition"><i
                                class="fa-brands fa-youtube"></i></a>
                        <a href="#"
                            class="w-10 h-10 rounded-full bg-slate-800 flex items-center justify-center text-slate-400 hover:text-white hover:bg-indigo-600 transition"><i
                                class="fa-brands fa-linkedin-in"></i></a>
                    </div>
                </div>

                <!-- Program -->
                <div>
                    <h4 class="font-bold mb-6 text-sm text-white">Program Belajar</h4>
                    <ul class="space-y-4 text-sm text-slate-400">
                        <li><a href="#" class="hover:text-indigo-400 transition">Fullstack Web Dev</a></li>
                        <li><a href="#" class="hover:text-indigo-400 transition">UI/UX Design</a></li>
                        <li><a href="#" class="hover:text-indigo-400 transition">Data Science Basic</a></li>
                        <li><a href="#" class="hover:text-indigo-400 transition">Digital Marketing</a></li>
                    </ul>
                </div>

                <!-- Akses Cepat -->
                <div>
                    <h4 class="font-bold mb-6 text-sm text-white">Akses Cepat</h4>
                    <ul class="space-y-4 text-sm text-slate-400">
                        <li><a href="#" class="hover:text-indigo-400 transition">Tentang EduHub</a></li>
                        <li><a href="#" class="hover:text-indigo-400 transition">Fasilitas Kampus</a></li>
                        <li><a href="#" class="hover:text-indigo-400 transition">Testimoni Alumni</a></li>
                        <li><a href="#" class="hover:text-indigo-400 transition">FAQ Pendaftaran</a></li>
                    </ul>
                </div>

                <!-- LMS Access -->
                <div>
                    <h4 class="font-bold mb-6 text-sm text-white">Portal Siswa</h4>
                    <p class="text-sm text-slate-400 mb-4">Sudah terdaftar sebagai siswa? Masuk ke dashboard untuk
                        melanjutkan materi.</p>
                    <button
                        class="w-full bg-slate-800 text-white py-3 rounded-xl font-bold text-sm border border-slate-700 hover:bg-slate-700 transition">Masuk
                        LMS EduHub</button>
                </div>

            </div>

            <div class="border-t border-slate-800 pt-8 flex flex-col md:flex-row justify-between items-center gap-4">
                <p class="text-slate-500 text-xs">
                    &copy; 2026 Elijabah International Group. Hak Cipta Dilindungi.
                </p>
                <div class="flex gap-6 text-xs text-slate-500">
                    <a href="#" class="hover:text-white transition">Kebijakan Privasi</a>
                    <a href="#" class="hover:text-white transition">Syarat & Ketentuan</a>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>
