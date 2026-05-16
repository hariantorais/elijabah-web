<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Darul Ilmi | Minimalist Modern Boarding School</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <!-- Google Fonts -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap');

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #FDFBF7;
            /* Soft Sand/Beige Background */
            color: #1e293b;
        }

        /* Custom Utilities */
        .text-emerald-deep {
            color: #064e3b;
        }

        /* Tailwind emerald-900 */
        .bg-emerald-deep {
            background-color: #064e3b;
        }

        .glass-header {
            background: rgba(253, 251, 247, 0.85);
            backdrop-filter: blur(12px);
            border-bottom: 1px solid rgba(6, 78, 59, 0.05);
        }

        .shadow-soft {
            box-shadow: 0 20px 40px -15px rgba(6, 78, 59, 0.05);
        }

        /* Subtle Pattern */
        .islamic-pattern {
            background-image: radial-gradient(#064e3b 0.7px, transparent 0.7px);
            background-size: 24px 24px;
            opacity: 0.05;
        }
    </style>
</head>

<body class="antialiased overflow-x-hidden" x-data="{ mobileMenu: false }">

    <!-- 1. CLEAN NAVIGATION -->
    <nav class="fixed top-0 w-full z-[100] glass-header transition-all duration-300">
        <div class="max-w-[85rem] mx-auto px-6 py-4 flex justify-between items-center">

            <!-- Logo -->
            <div class="flex items-center gap-3">
                <div
                    class="w-10 h-10 border border-emerald-900/20 rounded-full flex items-center justify-center text-emerald-deep">
                    <i class="fa-solid fa-kaaba text-lg"></i>
                </div>
                <div class="leading-none flex flex-col">
                    <span class="text-xl font-extrabold tracking-tight text-emerald-deep uppercase">Darul Ilmi</span>
                    <span class="text-[8px] font-bold text-slate-500 tracking-[0.3em] uppercase mt-1">Modern Boarding
                        School</span>
                </div>
            </div>

            <!-- Desktop Menu -->
            <div class="hidden lg:flex items-center gap-10">
                <a href="#profil"
                    class="text-xs font-bold text-slate-600 uppercase tracking-widest hover:text-emerald-deep transition">Profil</a>
                <a href="#program"
                    class="text-xs font-bold text-slate-600 uppercase tracking-widest hover:text-emerald-deep transition">Program</a>
                <a href="#fasilitas"
                    class="text-xs font-bold text-slate-600 uppercase tracking-widest hover:text-emerald-deep transition">Fasilitas</a>
                <a href="#berita"
                    class="text-xs font-bold text-slate-600 uppercase tracking-widest hover:text-emerald-deep transition">Jurnal</a>
                <a href="#kontak"
                    class="text-xs font-bold text-slate-600 uppercase tracking-widest hover:text-emerald-deep transition">Kontak</a>
            </div>

            <!-- CTA Desktop -->
            <div class="hidden lg:block">
                <button
                    class="bg-emerald-deep text-white px-7 py-3 rounded-full font-bold text-xs uppercase tracking-widest hover:bg-emerald-800 transition shadow-lg">
                    Daftar PSB
                </button>
            </div>

            <!-- Mobile Toggle -->
            <button @click="mobileMenu = !mobileMenu" class="lg:hidden text-emerald-deep text-2xl focus:outline-none">
                <i :class="mobileMenu ? 'fa-solid fa-xmark' : 'fa-solid fa-bars'"></i>
            </button>
        </div>

        <!-- Mobile Menu Overlay -->
        <div x-show="mobileMenu" x-collapse x-cloak class="lg:hidden bg-white border-t border-slate-100 shadow-xl">
            <div class="px-6 py-6 flex flex-col gap-6">
                <a href="#profil" @click="mobileMenu = false"
                    class="text-sm font-bold text-slate-800 uppercase tracking-widest border-b border-slate-50 pb-2">Profil
                    & Sambutan</a>
                <a href="#program" @click="mobileMenu = false"
                    class="text-sm font-bold text-slate-800 uppercase tracking-widest border-b border-slate-50 pb-2">Program
                    Unggulan</a>
                <a href="#fasilitas" @click="mobileMenu = false"
                    class="text-sm font-bold text-slate-800 uppercase tracking-widest border-b border-slate-50 pb-2">Fasilitas
                    Kampus</a>
                <a href="#kontak" @click="mobileMenu = false"
                    class="text-sm font-bold text-slate-800 uppercase tracking-widest border-b border-slate-50 pb-2">Lokasi
                    & Kontak</a>
                <button
                    class="w-full bg-emerald-deep text-white py-4 rounded-full font-bold uppercase tracking-widest text-xs mt-2">Pendaftaran
                    2026</button>
            </div>
        </div>
    </nav>

    <!-- 2. HERO SECTION (MINIMALIST SPLIT) -->
    <header class="pt-32 lg:pt-48 pb-20 px-6 relative overflow-hidden">
        <div class="absolute inset-0 islamic-pattern"></div>

        <div class="max-w-[85rem] mx-auto grid lg:grid-cols-12 gap-12 items-center relative z-10">
            <!-- Text -->
            <div class="lg:col-span-6 text-center lg:text-left">
                <div class="inline-flex items-center gap-3 mb-6">
                    <div class="w-10 h-px bg-emerald-deep"></div>
                    <span class="text-emerald-deep text-[10px] font-bold uppercase tracking-[0.3em]">Penerimaan Santri
                        Baru 2026</span>
                </div>
                <h1
                    class="text-4xl md:text-6xl lg:text-[5rem] font-extrabold text-emerald-deep tracking-tight leading-[1.05] mb-8">
                    Mencetak <br>
                    Ulama Intelek <span class="font-light italic text-slate-500">&</span> <br>
                    Intelektual Ulama.
                </h1>
                <p
                    class="text-base md:text-lg text-slate-600 font-medium leading-relaxed mb-10 max-w-lg mx-auto lg:mx-0">
                    Pondok Pesantren Modern dengan perpaduan kurikulum Timur Tengah dan penguasaan Teknologi Informasi
                    untuk kemandirian abad 21.
                </p>
                <div class="flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-4">
                    <button
                        class="w-full sm:w-auto bg-emerald-deep text-white px-8 py-4 rounded-full font-bold text-xs uppercase tracking-widest hover:bg-emerald-800 transition shadow-soft">
                        Mulai Pendaftaran
                    </button>
                    <button
                        class="w-full sm:w-auto bg-transparent border border-emerald-900/20 text-emerald-deep px-8 py-4 rounded-full font-bold text-xs uppercase tracking-widest hover:bg-emerald-50 transition">
                        Unduh Brosur
                    </button>
                </div>
            </div>

            <!-- Image Visual -->
            <div class="lg:col-span-6 relative mt-10 lg:mt-0">
                <div
                    class="relative rounded-[2.5rem] overflow-hidden shadow-soft border-[10px] border-white h-[400px] md:h-[550px] group">
                    <img src="{{ asset('images/education/ponpes-hero.png') }}"
                        class="w-full h-full object-cover group-hover:scale-105 transition duration-1000"
                        alt="Santri">
                    <!-- Elegant Badge -->
                    <div
                        class="absolute bottom-6 left-6 bg-white/95 backdrop-blur-md p-5 rounded-2xl shadow-xl border border-white max-w-[200px]">
                        <h4 class="text-3xl font-black text-emerald-deep mb-1">30 <span
                                class="text-sm uppercase tracking-widest text-slate-400">Juz</span></h4>
                        <p class="text-[10px] text-slate-500 font-bold uppercase tracking-widest leading-relaxed">Target
                            Hafalan Mutqin</p>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- 3. PARTNERS & ACCREDITATION -->
    <section class="border-y border-emerald-900/10 py-10 px-6 bg-white">
        <div class="max-w-[85rem] mx-auto flex flex-col md:flex-row justify-between items-center gap-10">
            <p
                class="text-[10px] font-bold text-slate-400 uppercase tracking-[0.2em] text-center md:text-left whitespace-nowrap">
                Jejaring Internasional & Partner</p>
            <div
                class="flex flex-wrap justify-center md:justify-end items-center gap-8 md:gap-16 opacity-60 grayscale hover:grayscale-0 transition duration-500 w-full">
                <div class="text-lg font-bold text-slate-700 flex items-center gap-2"><i
                        class="fa-solid fa-book-quran"></i> Al-Azhar Kairo</div>
                <div class="text-lg font-bold text-slate-700 flex items-center gap-2"><i
                        class="fa-solid fa-building-columns"></i> Univ. Madinah</div>
                <div class="text-lg font-bold text-slate-700 flex items-center gap-2"><i
                        class="fa-brands fa-google"></i> Google for Edu</div>
                <div class="text-lg font-bold text-slate-700 flex items-center gap-2"><i class="fa-brands fa-aws"></i>
                    AWS Academy</div>
            </div>
        </div>
    </section>

    <!-- 4. SAMBUTAN & PROFIL (ASYMMETRICAL LAYOUT) -->
    <section id="profil" class="py-24 lg:py-32 px-6">
        <div class="max-w-[85rem] mx-auto">
            <div class="grid lg:grid-cols-12 gap-12 items-center">

                <!-- Image Section -->
                <div class="lg:col-span-5 relative">
                    <div class="absolute top-10 -left-6 lg:-left-10 w-full h-full bg-emerald-50 rounded-[2.5rem] -z-10">
                    </div>
                    <img src="{{ asset('images/owner.png') }}"
                        class="w-full h-[450px] lg:h-[600px] object-cover rounded-[2.5rem] shadow-soft grayscale"
                        alt="Pimpinan">
                </div>

                <!-- Text Section -->
                <div class="lg:col-span-7 lg:pl-16 mt-10 lg:mt-0">
                    <div class="inline-flex items-center gap-3 mb-6">
                        <div class="w-10 h-px bg-emerald-deep"></div>
                        <span
                            class="text-emerald-deep text-[10px] font-bold uppercase tracking-[0.3em]">Muqaddimah</span>
                    </div>

                    <h2 class="text-3xl md:text-5xl font-extrabold text-emerald-deep tracking-tight leading-[1.2] mb-8">
                        Memadukan Keaslian Salaf dengan Kemajuan Zaman.</h2>

                    <div class="relative">
                        <i class="fa-solid fa-quote-left text-5xl text-emerald-900/10 absolute -top-4 -left-4"></i>
                        <p
                            class="text-slate-600 text-lg md:text-xl font-medium leading-relaxed mb-6 relative z-10 italic">
                            "Misi utama kami bukanlah sekadar mencetak lulusan, melainkan membangun generasi pemimpin
                            yang hatinya terpaut pada masjid, namun akalnya mampu bersaing di kancah global."
                        </p>
                    </div>

                    <p class="text-slate-500 text-sm md:text-base leading-relaxed mb-10">
                        Darul Ilmi Boarding School hadir sebagai jawaban atas tantangan pendidikan modern. Kami
                        mengintegrasikan kurikulum pesantren tradisional (Kitab Kuning & Tahfidz) dengan keterampilan
                        abad 21 (Coding, Digital Marketing, & Bahasa Internasional).
                    </p>

                    <div class="flex items-center gap-5 pt-8 border-t border-emerald-900/10">
                        <div
                            class="w-14 h-14 rounded-full bg-emerald-deep flex items-center justify-center text-white">
                            <i class="fa-solid fa-user-tie"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-slate-900 text-lg">KH. Abdullah Faiz, Lc., M.A.</h4>
                            <p class="text-[10px] font-bold text-slate-500 uppercase tracking-widest mt-1">Pengasuh
                                Pondok Pesantren</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 5. PROGRAM & ALASAN MEMILIH (CLEAN CARDS) -->
    <section id="program" class="py-24 lg:py-32 px-6 bg-white border-y border-emerald-900/5">
        <div class="max-w-[85rem] mx-auto">
            <div class="flex flex-col md:flex-row justify-between items-start md:items-end mb-16 gap-6">
                <div class="max-w-2xl">
                    <h2 class="text-3xl md:text-5xl font-extrabold text-emerald-deep tracking-tight mb-4">Program
                        Unggulan.</h2>
                    <p class="text-slate-500 text-lg">Empat pilar utama pendidikan yang menjadikan santri Darul Ilmi
                        berbeda dan siap menghadapi masa depan.</p>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Card 1 -->
                <div
                    class="p-8 rounded-[2rem] bg-[#FDFBF7] border border-emerald-900/5 hover:shadow-soft hover:-translate-y-2 transition duration-500 group">
                    <div
                        class="w-12 h-12 bg-white rounded-xl flex items-center justify-center text-emerald-deep text-xl shadow-sm mb-6 group-hover:bg-emerald-deep group-hover:text-white transition">
                        <i class="fa-solid fa-book-quran"></i>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Tahfidz Bersanad</h3>
                    <p class="text-sm text-slate-500 leading-relaxed">Sistem karantina dan talaqqi langsung dengan
                        Masyayikh untuk memastikan bacaan yang tartil dan mutqin.</p>
                </div>
                <!-- Card 2 -->
                <div
                    class="p-8 rounded-[2rem] bg-[#FDFBF7] border border-emerald-900/5 hover:shadow-soft hover:-translate-y-2 transition duration-500 group">
                    <div
                        class="w-12 h-12 bg-white rounded-xl flex items-center justify-center text-emerald-deep text-xl shadow-sm mb-6 group-hover:bg-emerald-deep group-hover:text-white transition">
                        <i class="fa-solid fa-laptop-code"></i>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Teknologi Terapan</h3>
                    <p class="text-sm text-slate-500 leading-relaxed">Laboratorium iMac untuk pembelajaran Fullstack
                        Web Development, UI/UX Design, dan dasar Artificial Intelligence.</p>
                </div>
                <!-- Card 3 -->
                <div
                    class="p-8 rounded-[2rem] bg-[#FDFBF7] border border-emerald-900/5 hover:shadow-soft hover:-translate-y-2 transition duration-500 group">
                    <div
                        class="w-12 h-12 bg-white rounded-xl flex items-center justify-center text-emerald-deep text-xl shadow-sm mb-6 group-hover:bg-emerald-deep group-hover:text-white transition">
                        <i class="fa-solid fa-language"></i>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Bilingual Habit</h3>
                    <p class="text-sm text-slate-500 leading-relaxed">Kewajiban berkomunikasi dalam Bahasa Arab &
                        Inggris di area asrama untuk melatih kefasihan santri secara natural.</p>
                </div>
                <!-- Card 4 -->
                <div
                    class="p-8 rounded-[2rem] bg-[#FDFBF7] border border-emerald-900/5 hover:shadow-soft hover:-translate-y-2 transition duration-500 group">
                    <div
                        class="w-12 h-12 bg-white rounded-xl flex items-center justify-center text-emerald-deep text-xl shadow-sm mb-6 group-hover:bg-emerald-deep group-hover:text-white transition">
                        <i class="fa-solid fa-chart-line"></i>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Santri-Preneur</h3>
                    <p class="text-sm text-slate-500 leading-relaxed">Membekali santri dengan ilmu bisnis, digital
                        marketing, dan praktik kewirausahaan langsung di koperasi pondok.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 6. FASILITAS & GALERI (DYNAMIC GRID) -->
    <section id="fasilitas" class="py-24 lg:py-32 px-6">
        <div class="max-w-[85rem] mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-5xl font-extrabold text-emerald-deep tracking-tight mb-4">Fasilitas Modern.
                </h2>
                <p class="text-[10px] font-bold text-slate-400 uppercase tracking-[0.3em]">Mendukung Kenyamanan Belajar
                    & Ibadah</p>
            </div>

            <!-- Bento Box Gallery -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-4 md:gap-6 h-auto md:h-[600px]">
                <div
                    class="md:col-span-2 md:row-span-2 relative rounded-[2rem] overflow-hidden group h-[300px] md:h-full">
                    <img src="{{ asset('images/education/ponpes-hero.png') }}"
                        class="w-full h-full object-cover group-hover:scale-105 transition duration-1000">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-emerald-900/90 via-emerald-900/20 to-transparent flex items-end p-8">
                        <div>
                            <h4 class="text-white font-bold text-2xl mb-1">Masjid Jami' Darul Ilmi</h4>
                            <p class="text-slate-200 text-sm">Pusat ibadah dan halaqah yang nyaman ber-AC.</p>
                        </div>
                    </div>
                </div>
                <div class="md:col-span-2 relative rounded-[2rem] overflow-hidden group h-[200px] md:h-full">
                    <img src="{{ asset('images/education/asrama.png') }}"
                        class="w-full h-full object-cover group-hover:scale-105 transition duration-1000">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-emerald-900/90 via-emerald-900/20 to-transparent flex items-end p-6">
                        <div>
                            <h4 class="text-white font-bold text-xl mb-1">Asrama Eksklusif</h4>
                            <p class="text-slate-200 text-xs">Maksimal 6 santri per kamar dengan kamar mandi dalam.</p>
                        </div>
                    </div>
                </div>
                <div class="md:col-span-1 relative rounded-[2rem] overflow-hidden group h-[200px] md:h-full">
                    <img src="{{ asset('images/education/lab.png') }}"
                        class="w-full h-full object-cover group-hover:scale-105 transition duration-1000">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-emerald-900/90 via-emerald-900/20 to-transparent flex items-end p-6">
                        <h4 class="text-white font-bold text-lg">Laboratorium Mac</h4>
                    </div>
                </div>
                <div class="md:col-span-1 relative rounded-[2rem] overflow-hidden group h-[200px] md:h-full">
                    <img src="{{ asset('images/education/library.png') }}"
                        class="w-full h-full object-cover group-hover:scale-105 transition duration-1000">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-emerald-900/90 via-emerald-900/20 to-transparent flex items-end p-6">
                        <h4 class="text-white font-bold text-lg">Perpustakaan Digital</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 7. BERITA & ARTIKEL TERBARU -->
    <section id="berita" class="py-24 lg:py-32 px-6 bg-white border-t border-emerald-900/5">
        <div class="max-w-[85rem] mx-auto">
            <div class="flex flex-col md:flex-row justify-between items-start md:items-end mb-16 gap-6">
                <div>
                    <h2 class="text-3xl md:text-5xl font-extrabold text-emerald-deep tracking-tight mb-2">Jurnal
                        Pondok.</h2>
                    <p class="text-slate-500">Berita kegiatan, prestasi santri, dan artikel Islami.</p>
                </div>
                <a href="#"
                    class="text-[10px] font-bold text-emerald-deep uppercase tracking-widest border-b border-emerald-deep pb-1 hover:text-emerald-600 transition">Lihat
                    Semua Berita</a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                <!-- Blog 1 -->
                <article class="group cursor-pointer">
                    <div
                        class="overflow-hidden rounded-[2rem] mb-6 relative shadow-sm border border-slate-100 group-hover:shadow-soft transition duration-500">
                        <img src="{{ asset('images/education/juara.png') }}"
                            class="w-full h-64 object-cover group-hover:scale-105 transition duration-700">
                        <div
                            class="absolute top-4 left-4 bg-white/90 backdrop-blur px-3 py-1 rounded-full text-[9px] font-bold text-emerald-deep uppercase tracking-widest">
                            Prestasi</div>
                    </div>
                    <span class="text-slate-400 text-[10px] font-bold uppercase tracking-widest mb-3 block">08 Mei
                        2026</span>
                    <h4
                        class="text-xl font-bold text-slate-900 mb-3 group-hover:text-emerald-deep transition leading-snug">
                        Alhamdulillah, Santri Darul Ilmi Lolos Seleksi Universitas Al-Azhar Kairo</h4>
                    <p class="text-slate-500 text-sm leading-relaxed line-clamp-2">Tahun ini sebanyak 15 santri akhir
                        kami berhasil mendapatkan beasiswa penuh untuk melanjutkan studi di Mesir...</p>
                </article>

                <!-- Blog 2 -->
                <article class="group cursor-pointer">
                    <div
                        class="overflow-hidden rounded-[2rem] mb-6 relative shadow-sm border border-slate-100 group-hover:shadow-soft transition duration-500">
                        <img src="{{ asset('images/education/coding.png') }}"
                            class="w-full h-64 object-cover group-hover:scale-105 transition duration-700">
                        <div
                            class="absolute top-4 left-4 bg-white/90 backdrop-blur px-3 py-1 rounded-full text-[9px] font-bold text-emerald-deep uppercase tracking-widest">
                            Kegiatan</div>
                    </div>
                    <span class="text-slate-400 text-[10px] font-bold uppercase tracking-widest mb-3 block">05 Mei
                        2026</span>
                    <h4
                        class="text-xl font-bold text-slate-900 mb-3 group-hover:text-emerald-deep transition leading-snug">
                        Pelatihan Koding Web Development Bersama Praktisi Startup Jakarta</h4>
                    <p class="text-slate-500 text-sm leading-relaxed line-clamp-2">Membekali santri kelas akhir dengan
                        keterampilan membuat aplikasi web untuk menghadapi dunia kerja digital...</p>
                </article>

                <!-- Blog 3 -->
                <article class="group cursor-pointer">
                    <div
                        class="overflow-hidden rounded-[2rem] mb-6 relative shadow-sm border border-slate-100 group-hover:shadow-soft transition duration-500">
                        <img src="{{ asset('images/education/kunjungan-ulama.png') }}"
                            class="w-full h-64 object-cover group-hover:scale-105 transition duration-700">
                        <div
                            class="absolute top-4 left-4 bg-white/90 backdrop-blur px-3 py-1 rounded-full text-[9px] font-bold text-emerald-deep uppercase tracking-widest">
                            Tausiyah</div>
                    </div>
                    <span class="text-slate-400 text-[10px] font-bold uppercase tracking-widest mb-3 block">01 Mei
                        2026</span>
                    <h4
                        class="text-xl font-bold text-slate-900 mb-3 group-hover:text-emerald-deep transition leading-snug">
                        Menjaga Adab Menuntut Ilmu di Tengah Derasnya Arus Informasi Digital</h4>
                    <p class="text-slate-500 text-sm leading-relaxed line-clamp-2">Artikel nasehat dari KH. Abdullah
                        Faiz mengenai pentingnya menyaring informasi di era internet...</p>
                </article>
            </div>
        </div>
    </section>

    <!-- 8. KONTAK & PETA (SPLIT CLEAN LAYOUT) -->
    <section id="kontak" class="py-24 lg:py-0 flex flex-col lg:flex-row bg-[#FDFBF7]">
        <!-- Info -->
        <div class="lg:w-1/2 p-8 lg:p-24 flex flex-col justify-center">
            <h2 class="text-3xl lg:text-5xl font-extrabold text-emerald-deep tracking-tight mb-6">Hubungi Kami.</h2>
            <p class="text-slate-500 mb-12 max-w-md leading-relaxed">Pusat informasi pendaftaran santri baru dan
                kunjungan silaturahmi wali santri.</p>

            <div class="space-y-8 mb-12">
                <div class="flex items-start gap-5">
                    <div
                        class="w-12 h-12 bg-white rounded-full flex items-center justify-center text-emerald-deep shadow-sm shrink-0">
                        <i class="fa-solid fa-map-location-dot"></i>
                    </div>
                    <div>
                        <h5 class="font-bold text-slate-900 mb-1">Alamat Pondok</h5>
                        <p class="text-sm text-slate-500 leading-relaxed">Jl. Pendidikan Islami No. 99, Kawasan Darul
                            Ilmi<br>Batam Centre, Kepulauan Riau</p>
                    </div>
                </div>
                <div class="flex items-start gap-5">
                    <div
                        class="w-12 h-12 bg-white rounded-full flex items-center justify-center text-emerald-deep shadow-sm shrink-0">
                        <i class="fa-solid fa-phone"></i>
                    </div>
                    <div>
                        <h5 class="font-bold text-slate-900 mb-1">Call Center</h5>
                        <p class="text-sm text-slate-500">+62 811 0000 1111</p>
                    </div>
                </div>
                <div class="flex items-start gap-5">
                    <div
                        class="w-12 h-12 bg-white rounded-full flex items-center justify-center text-emerald-deep shadow-sm shrink-0">
                        <i class="fa-brands fa-whatsapp text-lg"></i>
                    </div>
                    <div>
                        <h5 class="font-bold text-slate-900 mb-1">WhatsApp PSB</h5>
                        <p class="text-sm text-slate-500">+62 812 3333 4444 (Ust. Ahmad)</p>
                    </div>
                </div>
            </div>

            <button
                class="bg-emerald-deep text-white px-8 py-4 rounded-full font-bold text-xs uppercase tracking-widest hover:bg-emerald-800 transition w-fit shadow-soft">
                Tanya via WhatsApp
            </button>
        </div>

        <!-- Google Maps -->
        <div class="lg:w-1/2 h-[400px] lg:h-auto min-h-[500px]">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127632.40428514869!2d103.95757754326503!3d1.0827255152862024!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d98d41ba3c260f%3A0x6b69d9c223c2a632!2sBatam%2C%20Batam%20City%2C%20Riau%20Islands!5e0!3m2!1sen!2sid!4v1715155500000!5m2!1sen!2sid"
                width="100%" height="100%" style="border:0; filter: grayscale(20%) sepia(10%);"
                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </section>

    <!-- 9. FOOTER CLEAN -->
    <footer class="bg-emerald-950 pt-20 pb-10 px-6 text-emerald-50">
        <div class="max-w-[85rem] mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-16">

                <!-- Brand -->
                <div class="lg:col-span-1">
                    <div class="flex items-center gap-3 mb-6">
                        <div
                            class="w-10 h-10 border border-emerald-400/30 rounded-full flex items-center justify-center text-white">
                            <i class="fa-solid fa-kaaba text-sm"></i>
                        </div>
                        <span class="text-xl font-extrabold tracking-tight text-white uppercase">Darul Ilmi</span>
                    </div>
                    <p class="text-emerald-200/70 text-sm leading-relaxed mb-6">
                        Pondok Pesantren Modern yang memadukan keilmuan Islam murni dengan kecakapan teknologi masa
                        depan.
                    </p>
                    <div class="flex gap-4">
                        <a href="#"
                            class="w-10 h-10 rounded-full bg-emerald-900 flex items-center justify-center text-emerald-200 hover:text-white hover:bg-emerald-700 transition"><i
                                class="fa-brands fa-instagram"></i></a>
                        <a href="#"
                            class="w-10 h-10 rounded-full bg-emerald-900 flex items-center justify-center text-emerald-200 hover:text-white hover:bg-emerald-700 transition"><i
                                class="fa-brands fa-youtube"></i></a>
                        <a href="#"
                            class="w-10 h-10 rounded-full bg-emerald-900 flex items-center justify-center text-emerald-200 hover:text-white hover:bg-emerald-700 transition"><i
                                class="fa-brands fa-facebook-f"></i></a>
                    </div>
                </div>

                <!-- Info -->
                <div>
                    <h4 class="text-white font-bold text-xs uppercase tracking-widest mb-6">Informasi</h4>
                    <ul class="space-y-4 text-sm text-emerald-200/70">
                        <li><a href="#" class="hover:text-white transition">Tentang Pesantren</a></li>
                        <li><a href="#" class="hover:text-white transition">Visi & Misi</a></li>
                        <li><a href="#" class="hover:text-white transition">Fasilitas Asrama</a></li>
                        <li><a href="#" class="hover:text-white transition">Karir & Rekrutmen</a></li>
                    </ul>
                </div>

                <!-- Pendidikan -->
                <div>
                    <h4 class="text-white font-bold text-xs uppercase tracking-widest mb-6">Pendidikan</h4>
                    <ul class="space-y-4 text-sm text-emerald-200/70">
                        <li><a href="#" class="hover:text-white transition">SMP IT Boarding</a></li>
                        <li><a href="#" class="hover:text-white transition">SMA IT Boarding</a></li>
                        <li><a href="#" class="hover:text-white transition">Ma'had Aly (S1)</a></li>
                        <li><a href="#" class="hover:text-white transition">Daurah Tahfidz</a></li>
                    </ul>
                </div>

                <!-- PSB -->
                <div>
                    <h4 class="text-white font-bold text-xs uppercase tracking-widest mb-6">Pendaftaran</h4>
                    <ul class="space-y-4 text-sm text-emerald-200/70">
                        <li><a href="#" class="hover:text-white transition">Alur Pendaftaran</a></li>
                        <li><a href="#" class="hover:text-white transition">Rincian Biaya</a></li>
                        <li><a href="#" class="hover:text-white transition">Program Beasiswa</a></li>
                        <li><a href="#" class="hover:text-white transition">FAQ PSB</a></li>
                    </ul>
                </div>

            </div>

            <div class="border-t border-emerald-900 pt-8 flex flex-col md:flex-row justify-between items-center gap-4">
                <p class="text-emerald-500 text-[10px] uppercase tracking-widest font-bold">
                    &copy; 2026 Elijabah International Group. All rights reserved.
                </p>
                <div class="flex gap-6 text-[10px] text-emerald-500 uppercase tracking-widest font-bold">
                    <a href="#" class="hover:text-white transition">Kebijakan Privasi</a>
                    <a href="#" class="hover:text-white transition">Syarat Ketentuan</a>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>
