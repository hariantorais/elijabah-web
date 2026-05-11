<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dr. Haris Soedjatmiko, S.H., LL.M. | Corporate Lawyer</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <!-- Google Fonts -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500&family=DM+Sans:wght@400;500;600&display=swap');

        body {
            font-family: 'DM Sans', sans-serif;
            background-color: #F7F5F0;
            /* Cream / Ivory */
            color: #1a1a1a;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        .font-serif,
        .logo-text {
            font-family: 'Lora', serif;
        }

        /* Custom Colors */
        .bg-forest {
            background-color: #112A22;
        }

        .text-forest {
            color: #112A22;
        }

        .bg-brass {
            background-color: #B8995E;
        }

        .text-brass {
            color: #B8995E;
        }

        .border-brass {
            border-color: #B8995E;
        }

        /* Thin Classic Borders */
        .border-classic {
            border-color: rgba(17, 42, 34, 0.15);
        }

        .border-classic-light {
            border-color: rgba(247, 245, 240, 0.15);
        }

        /* Smooth Reveal */
        .img-classic {
            filter: sepia(20%) contrast(110%);
            transition: filter 0.5s ease;
        }

        .group:hover .img-classic {
            filter: sepia(0%) contrast(100%);
        }
    </style>
</head>

<body class="antialiased selection:bg-[#112A22] selection:text-[#B8995E]" x-data="{ mobileMenu: false, scrolled: false }"
    @scroll.window="scrolled = (window.pageYOffset > 50)">

    <!-- 1. TOP ANNOUNCEMENT BAR -->
    <div
        class="bg-forest text-white py-2 text-center text-[10px] font-bold uppercase tracking-[0.2em] border-b border-brass">
        Pengecualian: Informasi di situs ini bukan merupakan nasihat hukum formal.
    </div>

    <!-- 2. FORMAL NAVIGATION -->
    <nav :class="scrolled ? 'bg-[#F7F5F0]/95 backdrop-blur-sm shadow-sm py-4' : 'bg-transparent py-8'"
        class="fixed top-8 w-full z-[100] transition-all duration-300 border-b border-classic">
        <div class="max-w-7xl mx-auto px-6 lg:px-12 flex justify-between items-center">

            <!-- Logo -->
            <a href="#" class="flex flex-col">
                <span
                    class="text-2xl lg:text-3xl font-serif font-bold text-forest uppercase tracking-widest leading-none">Soedjatmiko.</span>
                <span class="text-[9px] font-bold uppercase tracking-[0.3em] text-brass mt-1">Counselor At Law</span>
            </a>

            <!-- Desktop Menu -->
            <div class="hidden lg:flex items-center gap-10 text-[11px] font-bold uppercase tracking-widest text-forest">
                <a href="#about" class="hover:text-brass transition-colors">Profil Advokat</a>
                <a href="#practice" class="hover:text-brass transition-colors">Area Praktik</a>
                <a href="#cases" class="hover:text-brass transition-colors">Rekam Jejak</a>
                <a href="#insights" class="hover:text-brass transition-colors">Publikasi Hukum</a>
            </div>

            <!-- CTA Desktop -->
            <div class="hidden lg:block">
                <a href="#contact"
                    class="border-2 border-forest text-forest px-8 py-3 text-[11px] font-bold uppercase tracking-widest hover:bg-forest hover:text-[#F7F5F0] transition-colors">
                    Evaluasi Kasus
                </a>
            </div>

            <!-- Mobile Toggle -->
            <button @click="mobileMenu = !mobileMenu" class="lg:hidden text-forest text-2xl focus:outline-none">
                <i :class="mobileMenu ? 'fa-solid fa-xmark' : 'fa-solid fa-bars'"></i>
            </button>
        </div>

        <!-- Mobile Menu -->
        <div x-show="mobileMenu" x-collapse x-cloak class="lg:hidden bg-[#F7F5F0] border-t border-classic mt-4">
            <div class="px-6 py-8 flex flex-col gap-6 text-center">
                <a href="#about" @click="mobileMenu = false" class="text-xl font-serif text-forest">Profil Advokat</a>
                <a href="#practice" @click="mobileMenu = false" class="text-xl font-serif text-forest">Area Praktik
                    Hukum</a>
                <a href="#cases" @click="mobileMenu = false" class="text-xl font-serif text-forest">Rekam Jejak</a>
                <a href="#contact" @click="mobileMenu = false"
                    class="bg-forest text-[#F7F5F0] py-4 mt-4 text-[11px] font-bold uppercase tracking-widest">Konsultasi
                    Privat</a>
            </div>
        </div>
    </nav>

    <!-- 3. HERO SECTION (CLASSIC EDITORIAL) -->
    <header class="pt-40 lg:pt-52 pb-20 px-6 lg:px-12 max-w-7xl mx-auto">
        <div class="grid lg:grid-cols-12 gap-16 items-center">

            <!-- Text Content -->
            <div class="lg:col-span-7">
                <div class="flex items-center gap-4 mb-8">
                    <div class="w-12 h-px bg-brass"></div>
                    <span class="text-brass text-[10px] font-bold uppercase tracking-[0.3em]">Litigasi &
                        Korporasi</span>
                </div>

                <h1 class="text-5xl md:text-7xl font-serif text-forest leading-[1.1] mb-8">
                    Melindungi Aset <br> & Reputasi <br> <span class="italic text-brass">Perusahaan Anda.</span>
                </h1>

                <p class="text-lg text-forest/70 font-medium leading-relaxed max-w-lg mb-12">
                    Memberikan representasi hukum tingkat tinggi untuk sengketa komersial yang kompleks, kepatuhan
                    regulasi, dan perlindungan hak kekayaan intelektual.
                </p>

                <div class="flex flex-col sm:flex-row gap-6">
                    <a href="#contact"
                        class="bg-forest text-[#F7F5F0] px-8 py-4 text-center text-xs font-bold uppercase tracking-widest hover:bg-[#0a1a15] transition-colors">
                        Jadwalkan Konsultasi
                    </a>
                    <div class="flex items-center gap-4 px-4 border-l border-classic">
                        <i class="fa-solid fa-scale-balanced text-3xl text-brass"></i>
                        <div>
                            <p class="text-xs font-bold text-forest uppercase tracking-widest">PERADI Certified</p>
                            <p class="text-[10px] text-forest/60 uppercase tracking-widest">Lisensi Advokat Aktif</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Image/Portrait -->
            <div class="lg:col-span-5">
                <div class="relative p-3 border border-classic group">
                    <div class="overflow-hidden aspect-[3/4]">
                        <!-- Gambar profesional pengacara -->
                        <img src="https://images.unsplash.com/photo-1556157382-97eda2d62296?q=80&w=800&auto=format&fit=crop"
                            alt="Dr. Haris Soedjatmiko"
                            class="w-full h-full object-cover img-classic group-hover:scale-105 transition duration-1000">
                    </div>
                    <!-- Badge -->
                    <div class="absolute -bottom-6 -left-6 bg-[#F7F5F0] border border-classic p-6 w-48 text-center">
                        <h4 class="text-3xl font-serif text-forest mb-1">15+</h4>
                        <p class="text-[9px] font-bold text-brass uppercase tracking-widest">Tahun Dedikasi Hukum</p>
                    </div>
                </div>
            </div>

        </div>
    </header>

    <!-- 4. PRACTICE AREAS (FORMAL COLUMNS) -->
    <section id="practice" class="py-24 border-t border-classic bg-white">
        <div class="max-w-7xl mx-auto px-6 lg:px-12">
            <div class="text-center mb-20">
                <h2 class="text-brass text-[10px] font-bold uppercase tracking-[0.3em] mb-4">Fokus Layanan</h2>
                <h3 class="text-4xl md:text-5xl font-serif text-forest">Area Praktik Hukum.</h3>
            </div>

            <div class="grid md:grid-cols-3 gap-0 border border-classic">

                <!-- Area 1 -->
                <div
                    class="p-10 lg:p-14 border-b md:border-b-0 md:border-r border-classic hover:bg-[#F7F5F0] transition-colors group">
                    <i
                        class="fa-solid fa-building-columns text-4xl text-brass mb-8 group-hover:scale-110 transition-transform"></i>
                    <h4 class="text-2xl font-serif text-forest mb-4">Hukum Korporasi & Bisnis</h4>
                    <p class="text-sm text-forest/70 leading-relaxed mb-8">
                        Pendirian PT, penyusunan kontrak komersial (*drafting*), restrukturisasi perusahaan, hingga
                        pendampingan negosiasi Merger & Akuisisi (M&A).
                    </p>
                    <a href="#"
                        class="text-[10px] font-bold text-forest uppercase tracking-widest border-b border-forest pb-1 group-hover:text-brass group-hover:border-brass transition-colors">Pelajari
                        Lebih Lanjut</a>
                </div>

                <!-- Area 2 -->
                <div
                    class="p-10 lg:p-14 border-b md:border-b-0 md:border-r border-classic hover:bg-[#F7F5F0] transition-colors group bg-[#F7F5F0] md:bg-transparent">
                    <i
                        class="fa-solid fa-gavel text-4xl text-brass mb-8 group-hover:scale-110 transition-transform"></i>
                    <h4 class="text-2xl font-serif text-forest mb-4">Litigasi Komersial</h4>
                    <p class="text-sm text-forest/70 leading-relaxed mb-8">
                        Representasi klien di pengadilan perdata, pengadilan niaga (PKPU & Kepailitan), serta arbitrase
                        sengketa bisnis tingkat nasional maupun internasional.
                    </p>
                    <a href="#"
                        class="text-[10px] font-bold text-forest uppercase tracking-widest border-b border-forest pb-1 group-hover:text-brass group-hover:border-brass transition-colors">Pelajari
                        Lebih Lanjut</a>
                </div>

                <!-- Area 3 -->
                <div class="p-10 lg:p-14 hover:bg-[#F7F5F0] transition-colors group">
                    <i
                        class="fa-solid fa-copyright text-4xl text-brass mb-8 group-hover:scale-110 transition-transform"></i>
                    <h4 class="text-2xl font-serif text-forest mb-4">Kekayaan Intelektual (HAKI)</h4>
                    <p class="text-sm text-forest/70 leading-relaxed mb-8">
                        Pendaftaran, perlindungan, dan penegakan hukum untuk Merek Dagang, Hak Cipta, Paten, dan Desain
                        Industri dari ancaman plagiarisme.
                    </p>
                    <a href="#"
                        class="text-[10px] font-bold text-forest uppercase tracking-widest border-b border-forest pb-1 group-hover:text-brass group-hover:border-brass transition-colors">Pelajari
                        Lebih Lanjut</a>
                </div>

            </div>
        </div>
    </section>

    <!-- 5. TRACK RECORD (DARK SECTION) -->
    <section id="cases" class="py-24 bg-forest text-[#F7F5F0] border-y border-brass">
        <div class="max-w-7xl mx-auto px-6 lg:px-12">
            <div class="grid lg:grid-cols-2 gap-16 items-center">

                <div>
                    <h2 class="text-brass text-[10px] font-bold uppercase tracking-[0.3em] mb-4">Rekam Jejak</h2>
                    <h3 class="text-4xl md:text-5xl font-serif mb-8 leading-tight">Berkomitmen pada <br> <span
                            class="italic text-brass">Hasil Akhir.</span></h3>
                    <p class="text-[#F7F5F0]/70 text-lg font-light leading-relaxed mb-10">
                        Kami tidak hanya memberikan opini hukum, tetapi menyusun strategi taktis untuk memenangkan
                        posisi klien. Kerahasiaan klien (Attorney-Client Privilege) adalah prioritas mutlak kami.
                    </p>

                    <!-- Stats Grid -->
                    <div class="grid grid-cols-2 gap-8 border-t border-classic-light pt-8">
                        <div>
                            <span class="block text-4xl font-serif text-brass mb-2">Rp 2.5T+</span>
                            <span class="text-[10px] font-bold uppercase tracking-widest text-[#F7F5F0]/50">Nilai
                                Sengketa Dimenangkan</span>
                        </div>
                        <div>
                            <span class="block text-4xl font-serif text-brass mb-2">300+</span>
                            <span class="text-[10px] font-bold uppercase tracking-widest text-[#F7F5F0]/50">Kontrak
                                Korporasi Disusun</span>
                        </div>
                    </div>
                </div>

                <!-- Quote Block -->
                <div class="bg-[#0a1a15] p-10 lg:p-14 border border-classic-light relative">
                    <i class="fa-solid fa-quote-left text-5xl text-brass/20 absolute top-8 left-8"></i>
                    <p
                        class="text-xl md:text-2xl font-serif italic leading-relaxed text-[#F7F5F0] mb-8 relative z-10 pt-6">
                        "Hukum adalah tameng sekaligus pedang. Kunci dalam memenangkan sengketa bukanlah siapa yang
                        berbicara paling keras, melainkan siapa yang memiliki argumen dan bukti paling presisi."
                    </p>
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-px bg-brass"></div>
                        <h4 class="font-bold text-xs uppercase tracking-widest text-brass">Dr. Haris Soedjatmiko</h4>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 6. INSIGHTS / LEGAL ARTICLES -->
    <section id="insights" class="py-24 bg-[#F7F5F0]">
        <div class="max-w-7xl mx-auto px-6 lg:px-12">
            <div class="flex justify-between items-end mb-16 border-b border-classic pb-8">
                <div>
                    <h2 class="text-brass text-[10px] font-bold uppercase tracking-[0.3em] mb-4">Publikasi Hukum</h2>
                    <h3 class="text-4xl font-serif text-forest">Opini & Kajian Hukum.</h3>
                </div>
                <a href="#"
                    class="hidden sm:block text-[10px] font-bold text-forest uppercase tracking-widest border-b border-forest hover:text-brass transition-colors">Semua
                    Artikel</a>
            </div>

            <div class="grid md:grid-cols-2 gap-12">
                <!-- Article 1 -->
                <article class="group cursor-pointer">
                    <div class="flex items-center gap-4 mb-4">
                        <span class="text-[10px] font-bold uppercase tracking-widest text-brass">Hukum Bisnis</span>
                        <span class="w-1 h-1 bg-forest rounded-full"></span>
                        <span class="text-[10px] font-bold uppercase tracking-widest text-forest/50">12 Mei 2026</span>
                    </div>
                    <h4
                        class="text-2xl font-serif font-bold text-forest mb-4 group-hover:text-brass transition-colors leading-snug">
                        Implikasi Hukum Penggunaan AI (Artificial Intelligence) dalam Pembuatan Kontrak Perusahaan.
                    </h4>
                    <p class="text-sm text-forest/70 leading-relaxed mb-6">
                        Menganalisis celah hukum dan risiko tanggung jawab perdata jika terjadi kerugian akibat
                        *drafting* otomatis oleh AI. Siapa yang harus bertanggung jawab?
                    </p>
                    <span
                        class="text-xs font-bold text-forest uppercase tracking-widest group-hover:text-brass transition-colors">Baca
                        Kajian &rarr;</span>
                </article>

                <!-- Article 2 -->
                <article class="group cursor-pointer">
                    <div class="flex items-center gap-4 mb-4">
                        <span class="text-[10px] font-bold uppercase tracking-widest text-brass">Regulasi Tenaga
                            Kerja</span>
                        <span class="w-1 h-1 bg-forest rounded-full"></span>
                        <span class="text-[10px] font-bold uppercase tracking-widest text-forest/50">05 Apr 2026</span>
                    </div>
                    <h4
                        class="text-2xl font-serif font-bold text-forest mb-4 group-hover:text-brass transition-colors leading-snug">
                        Panduan Restrukturisasi Karyawan Secara Aman Berdasarkan UU Cipta Kerja Terbaru.
                    </h4>
                    <p class="text-sm text-forest/70 leading-relaxed mb-6">
                        Langkah-langkah legal bagi manajemen perusahaan (HRD & Direksi) untuk melakukan efisiensi (PHK)
                        guna menghindari sengketa di Pengadilan Hubungan Industrial (PHI).
                    </p>
                    <span
                        class="text-xs font-bold text-forest uppercase tracking-widest group-hover:text-brass transition-colors">Baca
                        Kajian &rarr;</span>
                </article>
            </div>
        </div>
    </section>

    <!-- 7. CONTACT & DISCLAIMER FOOTER -->
    <footer id="contact" class="bg-forest text-[#F7F5F0] pt-24 border-t-8 border-brass">
        <div class="max-w-7xl mx-auto px-6 lg:px-12">

            <div class="grid lg:grid-cols-12 gap-16 mb-20">
                <!-- Contact Info -->
                <div class="lg:col-span-5">
                    <h2 class="text-4xl md:text-5xl font-serif mb-8">Membutuhkan <br> <span
                            class="italic text-brass">Nasihat Hukum?</span></h2>
                    <p class="text-[#F7F5F0]/70 text-sm leading-relaxed mb-10">
                        Harap dicatat bahwa mengirimkan pesan melalui formulir ini tidak secara otomatis menciptakan
                        hubungan pengacara-klien (attorney-client relationship) hingga ada perjanjian resmi yang
                        ditandatangani.
                    </p>

                    <div class="space-y-6">
                        <div>
                            <span class="text-[10px] font-bold uppercase tracking-widest text-brass block mb-1">Kantor
                                Pusat</span>
                            <p class="text-sm">Equity Tower, 35th Floor<br>SCBD, Jakarta Selatan 12190</p>
                        </div>
                        <div>
                            <span class="text-[10px] font-bold uppercase tracking-widest text-brass block mb-1">Kontak
                                Resmi</span>
                            <p class="text-sm">T: +62 21 555 8888<br>E: legal@soedjatmikolaw.com</p>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="lg:col-span-7 bg-[#0a1a15] p-8 lg:p-12 border border-classic-light">
                    <form class="space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label
                                    class="text-[10px] font-bold uppercase tracking-widest text-brass block mb-2">Nama
                                    Lengkap / Instansi</label>
                                <input type="text"
                                    class="w-full bg-transparent border-b border-classic-light focus:border-brass text-[#F7F5F0] py-2 outline-none text-sm transition-colors">
                            </div>
                            <div>
                                <label
                                    class="text-[10px] font-bold uppercase tracking-widest text-brass block mb-2">Email
                                    Resmi</label>
                                <input type="email"
                                    class="w-full bg-transparent border-b border-classic-light focus:border-brass text-[#F7F5F0] py-2 outline-none text-sm transition-colors">
                            </div>
                        </div>
                        <div>
                            <label class="text-[10px] font-bold uppercase tracking-widest text-brass block mb-2">Area
                                Hukum yang Dituju</label>
                            <select
                                class="w-full bg-transparent border-b border-classic-light focus:border-brass text-[#F7F5F0] py-2 outline-none text-sm transition-colors [&>option]:bg-forest">
                                <option>Sengketa Bisnis / Litigasi</option>
                                <option>Pendirian/Restrukturisasi PT</option>
                                <option>Hak Kekayaan Intelektual</option>
                                <option>Lainnya</option>
                            </select>
                        </div>
                        <div>
                            <label
                                class="text-[10px] font-bold uppercase tracking-widest text-brass block mb-2">Ringkasan
                                Kasus (Singkat)</label>
                            <textarea rows="3"
                                class="w-full bg-transparent border-b border-classic-light focus:border-brass text-[#F7F5F0] py-2 outline-none text-sm transition-colors"></textarea>
                            <p class="text-[9px] text-[#F7F5F0]/40 mt-2">*Mohon tidak mencantumkan informasi rahasia
                                pada form publik ini.</p>
                        </div>
                        <button
                            class="bg-brass text-forest px-8 py-4 text-xs font-bold uppercase tracking-widest w-full hover:bg-white transition-colors mt-4">
                            Ajukan Peninjauan Kasus
                        </button>
                    </form>
                </div>
            </div>

            <!-- Legal Disclaimer / Footer Bottom -->
            <div class="py-8 border-t border-classic-light text-center flex flex-col items-center">
                <p
                    class="text-[9px] font-medium uppercase tracking-widest text-[#F7F5F0]/50 mb-4 max-w-4xl leading-relaxed">
                    ATTORNEY ADVERTISING DISCLAIMER: Situs web ini dirancang hanya untuk tujuan informasi umum.
                    Informasi yang disajikan di situs ini tidak boleh ditafsirkan sebagai nasihat hukum formal atau
                    pembentukan hubungan pengacara/klien. Hasil masa lalu tidak menjamin hasil serupa di masa mendatang.
                </p>
                <p class="text-[10px] font-bold uppercase tracking-[0.2em] text-brass">
                    &copy; 2026 Soedjatmiko Law. All Rights Reserved.
                </p>
            </div>
        </div>
    </footer>

</body>

</html>
