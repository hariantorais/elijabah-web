<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Al-Ihsan | Premium Islamic Boarding School</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- Alpine.js untuk Menu Mobile -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <!-- Google Fonts -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800;900&display=swap');

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #f8fafc;
        }

        .glass-nav {
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(16px);
            border-bottom: 1px solid rgba(226, 232, 240, 0.8);
        }

        .shadow-premium {
            box-shadow: 0 10px 40px -10px rgba(4, 47, 46, 0.08);
        }
    </style>
</head>

<body class="text-slate-900 antialiased" x-data="{ mobileMenu: false }">

    <!-- 1. NAVIGATION (RESPONSIVE) -->
    <nav class="fixed top-0 w-full z-[100] glass-nav transition-all duration-300">
        <div class="max-w-[85rem] mx-auto px-6 py-4 flex justify-between items-center">

            <!-- Logo -->
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 bg-emerald-700 rounded-xl flex items-center justify-center text-white shadow-md">
                    <i class="fa-solid fa-mosque text-sm"></i>
                </div>
                <div class="leading-none">
                    <span class="text-xl font-extrabold tracking-tight text-emerald-950 block">Al-Ihsan</span>
                    <span
                        class="text-[9px] font-bold text-emerald-600 tracking-[0.3em] uppercase block mt-0.5">International</span>
                </div>
            </div>

            <!-- Desktop Menu -->
            <div class="hidden lg:flex items-center gap-10">
                <a href="#profil"
                    class="text-xs font-bold text-slate-500 uppercase tracking-widest hover:text-emerald-700 transition">Profil</a>
                <a href="#akademik"
                    class="text-xs font-bold text-slate-500 uppercase tracking-widest hover:text-emerald-700 transition">Akademik</a>
                <a href="#fasilitas"
                    class="text-xs font-bold text-slate-500 uppercase tracking-widest hover:text-emerald-700 transition">Fasilitas</a>
                <a href="#berita"
                    class="text-xs font-bold text-slate-500 uppercase tracking-widest hover:text-emerald-700 transition">Berita</a>
            </div>

            <!-- CTA Desktop -->
            <div class="hidden lg:block">
                <button
                    class="bg-emerald-700 text-white px-6 py-3 rounded-xl font-bold text-xs uppercase tracking-widest hover:bg-emerald-800 transition shadow-lg shadow-emerald-700/30">
                    Daftar PSB 2026
                </button>
            </div>

            <!-- Mobile Toggle Button -->
            <button @click="mobileMenu = !mobileMenu" class="lg:hidden text-emerald-950 text-2xl focus:outline-none">
                <i :class="mobileMenu ? 'fa-solid fa-xmark' : 'fa-solid fa-bars-staggered'"></i>
            </button>
        </div>

        <!-- Mobile Menu Dropdown -->
        <div x-show="mobileMenu" x-collapse x-cloak class="lg:hidden bg-white border-t border-slate-100 shadow-2xl">
            <div class="px-6 py-6 flex flex-col gap-6">
                <a href="#profil" @click="mobileMenu = false"
                    class="text-base font-bold text-slate-800 flex items-center gap-3"><i
                        class="fa-solid fa-building text-emerald-600 w-5"></i> Profil Pesantren</a>
                <a href="#akademik" @click="mobileMenu = false"
                    class="text-base font-bold text-slate-800 flex items-center gap-3"><i
                        class="fa-solid fa-book-quran text-emerald-600 w-5"></i> Program Akademik</a>
                <a href="#fasilitas" @click="mobileMenu = false"
                    class="text-base font-bold text-slate-800 flex items-center gap-3"><i
                        class="fa-solid fa-school text-emerald-600 w-5"></i> Fasilitas Kampus</a>
                <a href="#berita" @click="mobileMenu = false"
                    class="text-base font-bold text-slate-800 flex items-center gap-3"><i
                        class="fa-solid fa-newspaper text-emerald-600 w-5"></i> Berita & Warta</a>
                <hr class="border-slate-100">
                <button
                    class="w-full bg-emerald-700 text-white py-4 rounded-xl font-bold uppercase tracking-widest text-sm shadow-lg">Daftar
                    PSB 2026</button>
            </div>
        </div>
    </nav>

    <!-- 2. HERO SECTION -->
    <header class="pt-28 md:pt-40 pb-16 md:pb-32 px-6 overflow-hidden relative">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-[0.03] z-0"
            style="background-image: radial-gradient(#064e3b 2px, transparent 2px); background-size: 30px 30px;"></div>

        <div class="max-w-[85rem] mx-auto grid lg:grid-cols-12 gap-12 lg:gap-8 items-center relative z-10">
            <!-- Text Content -->
            <div class="lg:col-span-6 text-center lg:text-left">
                <div
                    class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-emerald-50 border border-emerald-100 text-emerald-700 text-[10px] font-bold uppercase tracking-widest mb-6">
                    <span class="w-2 h-2 rounded-full bg-amber-500 animate-pulse"></span> Target 30 Juz Mutqin
                </div>
                <h1
                    class="text-4xl md:text-5xl lg:text-7xl font-black text-emerald-950 tracking-tight leading-[1.1] mb-6">
                    Mencetak Hafidz <br class="hidden md:block">
                    <span class="text-emerald-600">Berwawasan Global.</span>
                </h1>
                <p
                    class="text-base md:text-lg text-slate-500 font-medium leading-relaxed mb-10 max-w-xl mx-auto lg:mx-0">
                    Perpaduan sempurna antara kurikulum salafiyah otentik, kemahiran bahasa internasional, dan literasi
                    teknologi digital.
                </p>
                <div class="flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-4">
                    <button
                        class="w-full sm:w-auto bg-slate-900 text-white px-8 py-4 rounded-xl font-bold text-sm uppercase tracking-widest hover:bg-emerald-700 transition shadow-premium">
                        Mulai Pendaftaran
                    </button>
                    <button
                        class="w-full sm:w-auto bg-white text-slate-700 border border-slate-200 px-8 py-4 rounded-xl font-bold text-sm hover:bg-slate-50 transition flex items-center justify-center gap-3">
                        <i class="fa-solid fa-play-circle text-emerald-600 text-lg"></i> Video Profil
                    </button>
                </div>
            </div>

            <!-- Image Visual -->
            <div class="lg:col-span-6 relative mt-10 lg:mt-0">
                <div
                    class="absolute inset-0 bg-emerald-600 rounded-[2rem] transform rotate-3 scale-105 opacity-10 hidden lg:block">
                </div>
                <div
                    class="relative rounded-[2rem] overflow-hidden shadow-premium h-[350px] md:h-[500px] border border-slate-100">
                    <img src="{{ asset('images/education/ponpes-hero.png') }}" class="w-full h-full object-cover"
                        alt="Santri">
                    <!-- Overlay Badge -->
                    <div
                        class="absolute bottom-6 left-6 right-6 md:right-auto md:w-72 bg-white/95 backdrop-blur-md p-5 rounded-xl shadow-xl border border-white">
                        <div class="flex items-center justify-between mb-2">
                            <span
                                class="text-[10px] font-bold text-emerald-600 uppercase tracking-widest">Akreditasi</span>
                            <i class="fa-solid fa-certificate text-amber-500"></i>
                        </div>
                        <h4 class="text-2xl font-black text-slate-900 mb-1">A (Unggul)</h4>
                        <p class="text-xs text-slate-500 font-medium">Diakui secara Nasional & Internasional.</p>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- 3. QUICK STATS BAR -->
    <section class="border-y border-slate-200 bg-white py-10 px-6">
        <div
            class="max-w-[85rem] mx-auto grid grid-cols-2 md:grid-cols-4 gap-8 divide-x-0 md:divide-x divide-slate-100">
            <div class="text-center md:px-4">
                <h3 class="text-3xl md:text-4xl font-black text-emerald-700 mb-1">100%</h3>
                <p class="text-[9px] font-bold text-slate-400 uppercase tracking-widest">Fasilitas Ber-AC</p>
            </div>
            <div class="text-center md:px-4">
                <h3 class="text-3xl md:text-4xl font-black text-slate-900 mb-1">45+</h3>
                <p class="text-[9px] font-bold text-slate-400 uppercase tracking-widest">Ustadz Bersanad</p>
            </div>
            <div class="text-center md:px-4">
                <h3 class="text-3xl md:text-4xl font-black text-emerald-700 mb-1">3 Bhs</h3>
                <p class="text-[9px] font-bold text-slate-400 uppercase tracking-widest">Arab, Inggris, IT</p>
            </div>
            <div class="text-center md:px-4">
                <h3 class="text-3xl md:text-4xl font-black text-slate-900 mb-1">24 Jam</h3>
                <p class="text-[9px] font-bold text-slate-400 uppercase tracking-widest">Pengawasan Asrama</p>
            </div>
        </div>
    </section>

    <!-- 4. ACADEMICS (BENTO BOX GRID) -->
    <section id="akademik" class="py-20 md:py-32 px-6 bg-slate-50">
        <div class="max-w-[85rem] mx-auto">

            <div class="max-w-2xl mb-12 md:mb-16">
                <h2 class="text-3xl md:text-5xl font-black text-emerald-950 tracking-tight mb-4">Program Unggulan.</h2>
                <p class="text-slate-500 text-base md:text-lg">Kurikulum holistik yang menyeimbangkan kecerdasan
                    spiritual, intelektual, dan keterampilan abad 21.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

                <!-- Bento 1: Tahfidz (Besar) -->
                <div
                    class="md:col-span-2 bg-emerald-900 rounded-[2rem] p-8 md:p-12 relative overflow-hidden group shadow-premium">
                    <i
                        class="fa-solid fa-book-quran text-8xl text-emerald-800 absolute -bottom-4 -right-4 transform group-hover:scale-110 transition duration-700"></i>
                    <div class="relative z-10">
                        <span
                            class="inline-block bg-amber-500 text-white px-3 py-1 rounded-lg text-[10px] font-bold uppercase tracking-widest mb-6">Core
                            Program</span>
                        <h3 class="text-2xl md:text-4xl font-black text-white mb-4 leading-tight">Tahfidz & Dirasah
                            Islamiyah</h3>
                        <p class="text-emerald-100 max-w-md text-sm leading-relaxed mb-8">Metode Talaqqi bersanad yang
                            memastikan kualitas hafalan mutqin. Dilengkapi pendalaman bahasa Arab dan kajian Kitab
                            Kuning (Sorogan).</p>
                        <a href="#"
                            class="inline-flex items-center gap-2 text-amber-400 text-sm font-bold hover:gap-4 transition-all">Pelajari
                            Kurikulum <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- Bento 2: IT Lab -->
                <div
                    class="md:col-span-1 bg-white rounded-[2rem] p-8 border border-slate-200 shadow-sm hover:shadow-premium hover:border-emerald-200 transition flex flex-col justify-between">
                    <div>
                        <div
                            class="w-12 h-12 bg-emerald-50 text-emerald-600 rounded-xl flex items-center justify-center text-xl mb-6">
                            <i class="fa-solid fa-laptop-code"></i>
                        </div>
                        <h3 class="text-xl font-black text-emerald-950 mb-3">Teknologi & IT</h3>
                        <p class="text-slate-500 text-sm leading-relaxed">Pelajaran koding dasar, desain multimedia,
                            dan literasi digital sebagai bekal kemandirian.</p>
                    </div>
                </div>

                <!-- Bento 3: Global Languange -->
                <div
                    class="md:col-span-1 bg-white rounded-[2rem] p-8 border border-slate-200 shadow-sm hover:shadow-premium hover:border-emerald-200 transition flex flex-col justify-between">
                    <div>
                        <div
                            class="w-12 h-12 bg-amber-50 text-amber-600 rounded-xl flex items-center justify-center text-xl mb-6">
                            <i class="fa-solid fa-earth-asia"></i>
                        </div>
                        <h3 class="text-xl font-black text-emerald-950 mb-3">Global Language</h3>
                        <p class="text-slate-500 text-sm leading-relaxed">Area wajib berbahasa Inggris dan Arab harian
                            untuk membangun kepercayaan diri santri.</p>
                    </div>
                </div>

                <!-- Bento 4: Leadership -->
                <div
                    class="md:col-span-2 bg-white rounded-[2rem] p-8 md:p-10 border border-slate-200 shadow-sm flex flex-col md:flex-row gap-8 items-center justify-between">
                    <div class="flex-1">
                        <span
                            class="text-slate-400 text-[10px] font-bold uppercase tracking-widest mb-3 block">Extracurricular</span>
                        <h3 class="text-2xl font-black text-emerald-950 mb-3">Leadership & Life Skills</h3>
                        <p class="text-slate-500 text-sm leading-relaxed">Beragam kegiatan seperti Pramuka, Memanah,
                            Berkuda, dan Public Speaking untuk membentuk karakter pemimpin umat.</p>
                    </div>
                    <div class="w-full md:w-1/3 shrink-0">
                        <img src="{{ asset('images/education/archery.png') }}"
                            class="w-full h-32 md:h-40 object-cover rounded-xl" alt="Kegiatan">
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 5. FASILITAS KAMPUS (CLEAN GRID) -->
    <section id="fasilitas" class="py-20 md:py-32 px-6 bg-white">
        <div class="max-w-[85rem] mx-auto">
            <div class="flex flex-col md:flex-row justify-between items-start md:items-end mb-12 gap-6">
                <div class="max-w-2xl">
                    <h2 class="text-3xl md:text-5xl font-black text-emerald-950 tracking-tight mb-4">Fasilitas Kampus.
                    </h2>
                    <p class="text-slate-500 text-lg">Lingkungan asri, bersih, dan aman yang mendukung penuh aktivitas
                        belajar dan ibadah santri 24 jam.</p>
                </div>
                <button
                    class="bg-slate-100 text-slate-700 px-6 py-3 rounded-xl font-bold text-sm hover:bg-slate-200 transition">
                    Lihat Galeri Penuh
                </button>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Fasilitas 1 -->
                <div class="relative rounded-[2rem] overflow-hidden h-[250px] md:h-[350px] group shadow-sm">
                    <img src="{{ asset('images/education/ponpes-hero.png') }}"
                        class="w-full h-full object-cover group-hover:scale-105 transition duration-700">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-slate-900/90 via-slate-900/20 to-transparent flex items-end p-6 md:p-8">
                        <div>
                            <h4 class="text-xl font-bold text-white mb-1">Masjid Jami'</h4>
                            <p class="text-slate-300 text-xs font-medium">Pusat ibadah berkapasitas 2000 jamaah.</p>
                        </div>
                    </div>
                </div>
                <!-- Fasilitas 2 -->
                <div class="relative rounded-[2rem] overflow-hidden h-[250px] md:h-[350px] group shadow-sm">
                    <img src="{{ asset('images/education/asrama.png') }}"
                        class="w-full h-full object-cover group-hover:scale-105 transition duration-700">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-slate-900/90 via-slate-900/20 to-transparent flex items-end p-6 md:p-8">
                        <div>
                            <h4 class="text-xl font-bold text-white mb-1">Asrama Eksklusif</h4>
                            <p class="text-slate-300 text-xs font-medium">Ber-AC, lemari pribadi, & kamar mandi dalam.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Fasilitas 3 -->
                <div class="relative rounded-[2rem] overflow-hidden h-[250px] md:h-[350px] group shadow-sm">
                    <img src="{{ asset('images/education/library.png') }}"
                        class="w-full h-full object-cover group-hover:scale-105 transition duration-700">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-slate-900/90 via-slate-900/20 to-transparent flex items-end p-6 md:p-8">
                        <div>
                            <h4 class="text-xl font-bold text-white mb-1">Lab Multimedia</h4>
                            <p class="text-slate-300 text-xs font-medium">Fasilitas iMac & PC spesifikasi tinggi.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 6. WARTA & BERITA -->
    <section id="berita" class="py-20 md:py-32 px-6 bg-slate-50 border-t border-slate-200">
        <div class="max-w-[85rem] mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-5xl font-black text-emerald-950 tracking-tight mb-4">Warta Pondok.</h2>
                <p class="text-[10px] font-bold text-emerald-600 uppercase tracking-widest">Informasi, Prestasi &
                    Artikel Inspiratif</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Blog Card -->
                <article
                    class="bg-white rounded-[2rem] p-4 border border-slate-100 shadow-sm hover:shadow-premium transition group">
                    <div class="h-48 md:h-56 overflow-hidden rounded-2xl mb-5">
                        <img src="{{ asset('images/education/juara.png') }}"
                            class="w-full h-full object-cover group-hover:scale-105 transition duration-700">
                    </div>
                    <div class="px-2">
                        <span
                            class="text-[10px] font-bold text-emerald-600 uppercase tracking-widest mb-2 block">Prestasi</span>
                        <h4
                            class="text-lg font-black text-slate-900 mb-3 leading-snug group-hover:text-emerald-700 transition">
                            Santri Al-Ihsan Juara 3 Tahfidz 30 Juz Tingkat Nasional</h4>
                        <p class="text-slate-500 text-xs leading-relaxed mb-4 line-clamp-2">Kemenangan luar biasa yang
                            diraih oleh ananda Zaidan di ajang MTQ Nasional 2026...</p>
                        <div class="flex items-center gap-3 pt-4 border-t border-slate-50">
                            <div class="w-6 h-6 rounded-full bg-slate-200"></div>
                            <span class="text-[10px] font-bold text-slate-400">08 Mei 2026 • Oleh Admin</span>
                        </div>
                    </div>
                </article>

                <article
                    class="bg-white rounded-[2rem] p-4 border border-slate-100 shadow-sm hover:shadow-premium transition group">
                    <div class="h-48 md:h-56 overflow-hidden rounded-2xl mb-5">
                        <img src="{{ asset('images/education/kunjungan-ulama.png') }}"
                            class="w-full h-full object-cover group-hover:scale-105 transition duration-700">
                    </div>
                    <div class="px-2">
                        <span
                            class="text-[10px] font-bold text-emerald-600 uppercase tracking-widest mb-2 block">Kegiatan</span>
                        <h4
                            class="text-lg font-black text-slate-900 mb-3 leading-snug group-hover:text-emerald-700 transition">
                            Kunjungan Studi Banding Syeikh dari Universitas Al-Azhar Kairo</h4>
                        <p class="text-slate-500 text-xs leading-relaxed mb-4 line-clamp-2">Mempererat tali silaturahmi
                            pendidikan dan menguji langsung kualitas hafalan santri...</p>
                        <div class="flex items-center gap-3 pt-4 border-t border-slate-50">
                            <div class="w-6 h-6 rounded-full bg-slate-200"></div>
                            <span class="text-[10px] font-bold text-slate-400">05 Mei 2026 • Oleh Humas</span>
                        </div>
                    </div>
                </article>

                <article
                    class="bg-white rounded-[2rem] p-4 border border-slate-100 shadow-sm hover:shadow-premium transition group">
                    <div class="h-48 md:h-56 overflow-hidden rounded-2xl mb-5">
                        <img src="{{ asset('images/education/campus-hero.png') }}"
                            class="w-full h-full object-cover group-hover:scale-105 transition duration-700">
                    </div>
                    <div class="px-2">
                        <span
                            class="text-[10px] font-bold text-amber-500 uppercase tracking-widest mb-2 block">Pengumuman</span>
                        <h4
                            class="text-lg font-black text-slate-900 mb-3 leading-snug group-hover:text-emerald-700 transition">
                            Informasi Lengkap Pendaftaran Santri Baru (PSB) Tahun 2026/2027</h4>
                        <p class="text-slate-500 text-xs leading-relaxed mb-4 line-clamp-2">Simak jadwal ujian masuk,
                            rincian biaya, dan syarat pendaftaran santri baru...</p>
                        <div class="flex items-center gap-3 pt-4 border-t border-slate-50">
                            <div class="w-6 h-6 rounded-full bg-slate-200"></div>
                            <span class="text-[10px] font-bold text-slate-400">01 Mei 2026 • Oleh Panitia PSB</span>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- 7. FOOTER (CLEAN & STRUCTURED) -->
    <footer class="bg-white pt-20 pb-10 px-6 border-t border-slate-200">
        <div class="max-w-[85rem] mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-12 mb-16">

                <!-- Brand Info -->
                <div class="lg:col-span-2">
                    <div class="flex items-center gap-3 mb-6">
                        <div
                            class="w-10 h-10 bg-emerald-700 rounded-xl flex items-center justify-center text-white shadow-md">
                            <i class="fa-solid fa-mosque text-sm"></i>
                        </div>
                        <span class="text-2xl font-extrabold tracking-tight text-emerald-950">Al-Ihsan</span>
                    </div>
                    <p class="text-slate-500 text-sm leading-relaxed mb-6 max-w-sm">
                        Lembaga pendidikan Islam berstandar internasional yang mencetak generasi hafidz, beradab, dan
                        melek teknologi.
                    </p>
                    <div class="flex gap-4">
                        <a href="#"
                            class="w-10 h-10 rounded-full bg-slate-50 border border-slate-200 flex items-center justify-center text-slate-500 hover:text-emerald-700 hover:border-emerald-200 transition"><i
                                class="fa-brands fa-instagram"></i></a>
                        <a href="#"
                            class="w-10 h-10 rounded-full bg-slate-50 border border-slate-200 flex items-center justify-center text-slate-500 hover:text-emerald-700 hover:border-emerald-200 transition"><i
                                class="fa-brands fa-youtube"></i></a>
                        <a href="#"
                            class="w-10 h-10 rounded-full bg-slate-50 border border-slate-200 flex items-center justify-center text-slate-500 hover:text-emerald-700 hover:border-emerald-200 transition"><i
                                class="fa-brands fa-facebook-f"></i></a>
                    </div>
                </div>

                <!-- Links -->
                <div>
                    <h4 class="text-emerald-950 font-bold mb-6 text-sm uppercase tracking-wider">Navigasi</h4>
                    <ul class="space-y-4 text-sm text-slate-500 font-medium">
                        <li><a href="#" class="hover:text-emerald-700 transition">Tentang Kami</a></li>
                        <li><a href="#" class="hover:text-emerald-700 transition">Kurikulum</a></li>
                        <li><a href="#" class="hover:text-emerald-700 transition">Biaya Pendidikan</a></li>
                        <li><a href="#" class="hover:text-emerald-700 transition">Brosur PDF</a></li>
                    </ul>
                </div>

                <!-- Program -->
                <div>
                    <h4 class="text-emerald-950 font-bold mb-6 text-sm uppercase tracking-wider">Jenjang</h4>
                    <ul class="space-y-4 text-sm text-slate-500 font-medium">
                        <li><a href="#" class="hover:text-emerald-700 transition">SMP IT</a></li>
                        <li><a href="#" class="hover:text-emerald-700 transition">SMA IT</a></li>
                        <li><a href="#" class="hover:text-emerald-700 transition">Ma'had Aly</a></li>
                    </ul>
                </div>

                <!-- Contact -->
                <div>
                    <h4 class="text-emerald-950 font-bold mb-6 text-sm uppercase tracking-wider">Kontak</h4>
                    <ul class="space-y-4 text-sm text-slate-500 font-medium">
                        <li class="flex items-start gap-3"><i
                                class="fa-solid fa-location-dot mt-1 text-emerald-600"></i> Jl. Pendidikan No. 1, Batam
                            Centre, Kepri</li>
                        <li class="flex items-center gap-3"><i class="fa-solid fa-phone text-emerald-600"></i> +62 811
                            2222 3333</li>
                        <li class="flex items-center gap-3"><i class="fa-solid fa-envelope text-emerald-600"></i>
                            info@alihsan.sch.id</li>
                    </ul>
                </div>

            </div>

            <div class="border-t border-slate-200 pt-8 flex flex-col md:flex-row justify-between items-center gap-4">
                <p class="text-slate-400 text-xs font-semibold">
                    &copy; 2026 Elijabah International Group. Hak Cipta Dilindungi.
                </p>
                <div class="flex gap-6 text-xs font-semibold text-slate-400">
                    <a href="#" class="hover:text-emerald-700 transition">Kebijakan Privasi</a>
                    <a href="#" class="hover:text-emerald-700 transition">Syarat & Ketentuan</a>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>
