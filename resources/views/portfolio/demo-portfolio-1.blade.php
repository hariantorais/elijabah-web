<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dr. Adrian Kusuma | Spesialis Jantung & Pembuluh Darah</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <!-- Google Fonts -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;0,900;1,400&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap');

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #0f172a;
        }

        /* Slate 900 base */
        .font-serif {
            font-family: 'Playfair Display', serif;
        }

        .glass-nav {
            background: rgba(15, 23, 42, 0.85);
            backdrop-filter: blur(20px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
        }

        /* Medical Blue Gradient */
        .text-gradient {
            background: linear-gradient(to right, #38bdf8, #2dd4bf);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        /* Custom Shadows */
        .shadow-medical {
            box-shadow: 0 10px 40px -10px rgba(56, 189, 248, 0.15);
        }
    </style>
</head>

<body class="text-slate-300 antialiased selection:bg-sky-500 selection:text-white" x-data="{ mobileMenu: false }">

    <!-- 1. NAVIGATION -->
    <nav class="fixed top-0 w-full z-[100] glass-nav transition-all duration-300">
        <div class="max-w-7xl mx-auto px-6 py-5 flex justify-between items-center">

            <!-- Logo -->
            <div class="flex items-center gap-3">
                <div
                    class="w-10 h-10 bg-sky-600 rounded-full flex items-center justify-center text-white shadow-md shadow-sky-900/50">
                    <i class="fa-solid fa-heart-pulse text-sm"></i>
                </div>
                <div class="leading-none">
                    <span class="text-xl font-bold tracking-tight text-white uppercase font-serif">Dr. Adrian K.</span>
                    <span
                        class="text-[8px] font-bold text-sky-400 tracking-[0.2em] uppercase block mt-1">Cardiologist</span>
                </div>
            </div>

            <!-- Desktop Menu -->
            <div
                class="hidden md:flex items-center gap-10 text-[10px] font-bold uppercase tracking-[0.3em] text-slate-400">
                <a href="#about" class="hover:text-white transition">Profil</a>
                <a href="#expertise" class="hover:text-white transition">Keahlian</a>
                <a href="#publications" class="hover:text-white transition">Publikasi</a>
                <a href="#clinic" class="hover:text-white transition">Praktek</a>
            </div>

            <!-- CTA Desktop -->
            <div class="hidden md:block">
                <a href="#clinic"
                    class="bg-sky-600 text-white px-6 py-3 rounded-full text-[10px] font-bold uppercase tracking-widest hover:bg-sky-500 transition shadow-medical">
                    Buat Janji Temu
                </a>
            </div>

            <!-- Mobile Toggle -->
            <button @click="mobileMenu = !mobileMenu" class="md:hidden text-white text-2xl focus:outline-none">
                <i :class="mobileMenu ? 'fa-solid fa-xmark' : 'fa-solid fa-bars-staggered'"></i>
            </button>
        </div>

        <!-- Mobile Menu -->
        <div x-show="mobileMenu" x-collapse x-cloak
            class="md:hidden bg-slate-900 border-t border-slate-800 px-6 py-8 flex flex-col gap-6">
            <a href="#about" @click="mobileMenu = false"
                class="text-2xl font-serif text-white border-b border-slate-800 pb-2">Profil</a>
            <a href="#expertise" @click="mobileMenu = false"
                class="text-2xl font-serif text-white border-b border-slate-800 pb-2">Spesialisasi</a>
            <a href="#publications" @click="mobileMenu = false"
                class="text-2xl font-serif text-white border-b border-slate-800 pb-2">Jurnal Medis</a>
            <button @click="mobileMenu = false; window.location.href='#clinic'"
                class="w-full bg-sky-600 py-4 rounded-full font-bold text-white uppercase tracking-widest text-xs mt-4">Janji
                Temu</button>
        </div>
    </nav>

    <!-- 2. HERO SECTION -->
    <header class="min-h-screen flex items-center pt-24 lg:pt-0 px-6 relative overflow-hidden">
        <!-- Medical Glow Backgrounds -->
        <div class="absolute top-40 right-[-10%] w-96 h-96 bg-sky-600/10 blur-[120px] rounded-full"></div>
        <div class="absolute bottom-20 left-[-5%] w-72 h-72 bg-teal-600/10 blur-[100px] rounded-full"></div>

        <div class="max-w-7xl mx-auto grid lg:grid-cols-12 gap-12 lg:gap-16 items-center relative z-10 w-full">
            <div class="lg:col-span-7">
                <div class="inline-flex items-center gap-3 mb-8">
                    <span class="w-2 h-2 bg-sky-500 rounded-full animate-pulse"></span>
                    <span
                        class="text-sky-400 text-[10px] font-bold uppercase tracking-[0.2em] border border-sky-500/30 bg-sky-500/10 px-3 py-1 rounded-full">
                        Fellow of Indonesian Heart Association
                    </span>
                </div>

                <h1
                    class="text-5xl md:text-7xl lg:text-[5rem] font-serif font-bold text-white leading-[1] tracking-tight mb-8">
                    Menyelamatkan Nyawa dengan <br> <span class="italic text-gradient">Presisi & Empati.</span>
                </h1>

                <p
                    class="text-base md:text-xl text-slate-400 font-light leading-relaxed max-w-xl mb-12 border-l-2 border-sky-500 pl-5">
                    Konsultan Kardiologi Intervensi dengan pengalaman lebih dari 15 tahun. Berdedikasi untuk memberikan
                    perawatan jantung berstandar global dengan pendekatan personal.
                </p>

                <div class="flex flex-col sm:flex-row gap-5 items-center">
                    <a href="#clinic"
                        class="w-full sm:w-auto text-center bg-white text-slate-900 px-8 py-4 rounded-full font-bold text-xs uppercase tracking-widest hover:bg-sky-50 hover:text-sky-700 transition-all shadow-medical">
                        Jadwal Praktek
                    </a>
                    <a href="#about"
                        class="w-full sm:w-auto text-center bg-transparent border border-slate-700 text-white px-8 py-4 rounded-full font-bold text-xs uppercase tracking-widest hover:bg-slate-800 transition">
                        Profil Dokter
                    </a>
                </div>
            </div>

            <div class="lg:col-span-5 relative mt-12 lg:mt-0">
                <div
                    class="relative rounded-[3rem] overflow-hidden grayscale hover:grayscale-0 transition duration-700 border border-slate-700 shadow-2xl h-[450px] md:h-[600px]">
                    <!-- Menggunakan gambar dari unsplash (tema dokter) via source.unsplash atau placeholder berkualitas -->
                    <img src="https://images.unsplash.com/photo-1612349317150-e413f6a5b16d?q=80&w=800&auto=format&fit=crop"
                        alt="Dr. Adrian Kusuma" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/20 to-transparent"></div>
                </div>
                <!-- Stat Badge -->
                <div
                    class="absolute -bottom-6 -left-6 md:-left-12 bg-sky-600/90 backdrop-blur p-6 md:p-8 rounded-[2rem] shadow-2xl border border-sky-400/30">
                    <h4 class="text-3xl md:text-4xl font-bold text-white mb-1">3,000+</h4>
                    <p class="text-[9px] font-bold text-sky-100 uppercase tracking-widest leading-tight">Prosedur
                        Intervensi<br>Berhasil Dilakukan</p>
                </div>
            </div>
        </div>
    </header>

    <!-- 3. HOSPITAL AFFILIATIONS -->
    <section class="py-12 border-y border-slate-800 bg-slate-900/50">
        <div class="max-w-7xl mx-auto px-6">
            <p class="text-center text-[10px] font-bold text-slate-500 uppercase tracking-[0.3em] mb-8">Berafiliasi
                dengan Rumah Sakit Terkemuka</p>
            <div
                class="flex flex-wrap justify-center items-center gap-10 md:gap-20 opacity-50 grayscale hover:grayscale-0 transition duration-500">
                <div class="text-xl md:text-2xl font-bold font-serif text-white"><i
                        class="fa-solid fa-hospital text-sky-500 mr-2"></i> Siloam Hospitals</div>
                <div class="text-xl md:text-2xl font-bold font-serif text-white"><i
                        class="fa-solid fa-plus-square text-sky-500 mr-2"></i> Pondok Indah Group</div>
                <div class="text-xl md:text-2xl font-bold font-serif text-white"><i
                        class="fa-solid fa-heart-crack text-sky-500 mr-2"></i> National Cardiac Center</div>
            </div>
        </div>
    </section>

    <!-- 4. EXPERTISE / MEDICAL FOCUS -->
    <section id="expertise" class="py-24 lg:py-32 px-6">
        <div class="max-w-7xl mx-auto">
            <div class="grid lg:grid-cols-2 gap-12 lg:gap-20 items-end mb-20">
                <h2 class="text-4xl md:text-5xl lg:text-6xl font-serif font-bold text-white leading-tight">
                    Fokus Layanan & <br> Spesialisasi Medis.
                </h2>
                <p class="text-slate-400 text-base md:text-lg font-light leading-relaxed">
                    Setiap detak jantung sangat berharga. Saya menggabungkan teknologi diagnostik terbaru dengan
                    protokol pengobatan berbasis bukti (Evidence-Based Medicine) untuk memberikan hasil klinis terbaik
                    bagi pasien.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 lg:gap-10">
                <!-- Area 1 -->
                <div
                    class="group p-8 lg:p-10 bg-slate-800/30 border border-slate-700/50 rounded-[2.5rem] hover:border-sky-500/50 hover:bg-slate-800/80 transition-all duration-300">
                    <div
                        class="w-14 h-14 bg-sky-500/10 text-sky-400 rounded-2xl flex items-center justify-center text-2xl mb-8 group-hover:bg-sky-500 group-hover:text-white transition shadow-medical">
                        <i class="fa-solid fa-stethoscoppe"></i> <!-- Fallback if typo in fa icon -->
                        <i class="fa-solid fa-stethoscope"></i>
                    </div>
                    <h4 class="text-xl font-serif font-bold text-white mb-4">Kardiologi Intervensi</h4>
                    <p class="text-slate-500 text-sm leading-relaxed mb-6">Penanganan penyumbatan pembuluh darah koroner
                        kompleks dengan teknik minimal invasif (Pemasangan Stent/Ring Jantung, Angioplasti).</p>
                    <a href="#"
                        class="text-[10px] font-bold text-sky-400 uppercase tracking-widest group-hover:text-white transition">Pelajari
                        Lebih Lanjut &rarr;</a>
                </div>

                <!-- Area 2 -->
                <div
                    class="group p-8 lg:p-10 bg-slate-800/30 border border-slate-700/50 rounded-[2.5rem] hover:border-teal-500/50 hover:bg-slate-800/80 transition-all duration-300">
                    <div
                        class="w-14 h-14 bg-teal-500/10 text-teal-400 rounded-2xl flex items-center justify-center text-2xl mb-8 group-hover:bg-teal-500 group-hover:text-white transition">
                        <i class="fa-solid fa-heart-circle-check"></i>
                    </div>
                    <h4 class="text-xl font-serif font-bold text-white mb-4">Manajemen Gagal Jantung</h4>
                    <p class="text-slate-500 text-sm leading-relaxed mb-6">Perawatan komprehensif untuk pasien gagal
                        jantung akut dan kronis, mengoptimalkan fungsi jantung untuk meningkatkan kualitas hidup.</p>
                    <a href="#"
                        class="text-[10px] font-bold text-teal-400 uppercase tracking-widest group-hover:text-white transition">Pelajari
                        Lebih Lanjut &rarr;</a>
                </div>

                <!-- Area 3 -->
                <div
                    class="group p-8 lg:p-10 bg-slate-800/30 border border-slate-700/50 rounded-[2.5rem] hover:border-indigo-500/50 hover:bg-slate-800/80 transition-all duration-300">
                    <div
                        class="w-14 h-14 bg-indigo-500/10 text-indigo-400 rounded-2xl flex items-center justify-center text-2xl mb-8 group-hover:bg-indigo-500 group-hover:text-white transition">
                        <i class="fa-solid fa-apple-whole"></i>
                    </div>
                    <h4 class="text-xl font-serif font-bold text-white mb-4">Kardiologi Preventif</h4>
                    <p class="text-slate-500 text-sm leading-relaxed mb-6">Deteksi dini risiko penyakit kardiovaskular,
                        manajemen hipertensi, kolesterol, dan modifikasi gaya hidup (Lifestyle Medicine).</p>
                    <a href="#"
                        class="text-[10px] font-bold text-indigo-400 uppercase tracking-widest group-hover:text-white transition">Pelajari
                        Lebih Lanjut &rarr;</a>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. PUBLICATIONS & CASES (EDITORIAL LAYOUT) -->
    <section id="publications" class="py-24 lg:py-32 px-6 bg-slate-900/50 border-t border-slate-800">
        <div class="max-w-7xl mx-auto">
            <div class="flex flex-col md:flex-row justify-between items-start md:items-end mb-16 gap-6">
                <div>
                    <h2 class="text-4xl md:text-5xl font-serif font-bold text-white mb-4">Publikasi & Opini Medis.</h2>
                    <p class="text-slate-400">Dedikasi pada riset untuk memajukan ilmu kedokteran kardiovaskular.</p>
                </div>
                <a href="#"
                    class="text-[10px] font-bold text-sky-400 uppercase tracking-[0.3em] border-b border-sky-400/30 pb-1 hover:text-white hover:border-white transition">Semua
                    Publikasi</a>
            </div>

            <div class="space-y-12 lg:space-y-24">
                <!-- Highlight Case 1 -->
                <article class="grid lg:grid-cols-12 gap-10 lg:gap-16 items-center group">
                    <div
                        class="lg:col-span-7 overflow-hidden rounded-[3rem] bg-slate-800 border border-slate-700 aspect-video relative">
                        <!-- Gambar ruang operasi/jantung -->
                        <img src="https://images.unsplash.com/photo-1551076805-e1869033e561?q=80&w=800&auto=format&fit=crop"
                            alt="Ruang Operasi"
                            class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition duration-1000">
                        <div
                            class="absolute top-6 left-6 bg-slate-900/90 backdrop-blur px-4 py-1.5 rounded-full border border-slate-700 text-[10px] font-bold uppercase tracking-widest text-sky-400">
                            Jurnal Internasional
                        </div>
                    </div>
                    <div class="lg:col-span-5">
                        <span class="text-slate-500 text-xs font-bold uppercase tracking-widest mb-4 block">Asian
                            Journal of Cardiology • 2025</span>
                        <h3
                            class="text-2xl md:text-3xl font-serif font-bold text-white mb-4 group-hover:text-sky-400 transition leading-snug">
                            "Inovasi Teknik Pemasangan Stent pada Kasus Kalsifikasi Koroner Berat."
                        </h3>
                        <p class="text-slate-400 text-sm leading-relaxed mb-8 line-clamp-4">
                            Studi observasional mengenai penggunaan Rotablator dan Intravascular Ultrasound (IVUS) untuk
                            menurunkan tingkat komplikasi pada pasien usia lanjut dengan kalsifikasi parah di arteri
                            koroner.
                        </p>
                        <a href="#"
                            class="bg-white/5 border border-slate-700 text-white px-6 py-3 rounded-full font-bold text-xs uppercase tracking-widest hover:bg-white hover:text-slate-900 transition inline-block">Baca
                            Jurnal</a>
                    </div>
                </article>

                <!-- Highlight Case 2 -->
                <article class="grid lg:grid-cols-12 gap-10 lg:gap-16 items-center group">
                    <div
                        class="lg:col-span-7 lg:order-2 overflow-hidden rounded-[3rem] bg-slate-800 border border-slate-700 aspect-video relative">
                        <!-- Gambar teknologi/dokter -->
                        <img src="https://images.unsplash.com/photo-1579684385127-1ef15d508118?q=80&w=800&auto=format&fit=crop"
                            alt="Konsultasi Medis"
                            class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition duration-1000">
                        <div
                            class="absolute top-6 left-6 bg-slate-900/90 backdrop-blur px-4 py-1.5 rounded-full border border-slate-700 text-[10px] font-bold uppercase tracking-widest text-teal-400">
                            Artikel Edukasi
                        </div>
                    </div>
                    <div class="lg:col-span-5 lg:order-1">
                        <span class="text-slate-500 text-xs font-bold uppercase tracking-widest mb-4 block">Majalah
                            Kesehatan • 2026</span>
                        <h3
                            class="text-2xl md:text-3xl font-serif font-bold text-white mb-4 group-hover:text-teal-400 transition leading-snug">
                            "Serangan Jantung di Usia Muda: Mitos, Fakta, dan Cara Pencegahannya."
                        </h3>
                        <p class="text-slate-400 text-sm leading-relaxed mb-8 line-clamp-4">
                            Pergeseran tren penyakit jantung yang kini banyak menyerang usia produktif (dibawah 40
                            tahun). Membahas kaitan antara stres kerja, pola makan modern, dan genetika.
                        </p>
                        <a href="#"
                            class="bg-white/5 border border-slate-700 text-white px-6 py-3 rounded-full font-bold text-xs uppercase tracking-widest hover:bg-white hover:text-slate-900 transition inline-block">Baca
                            Artikel</a>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- 6. CLINIC & BOOKING / FOOTER -->
    <footer id="clinic" class="pt-24 lg:pt-32 pb-12 px-6 border-t border-slate-800 relative overflow-hidden">
        <!-- Glow -->
        <div
            class="absolute bottom-0 left-1/2 -translate-x-1/2 w-3/4 h-64 bg-sky-900/20 blur-[150px] rounded-full pointer-events-none">
        </div>

        <div class="max-w-7xl mx-auto">
            <div class="grid lg:grid-cols-2 gap-16 mb-24">
                <!-- Booking Text -->
                <div>
                    <h2 class="text-5xl md:text-6xl font-serif font-bold text-white mb-6 tracking-tight leading-none">
                        Jadwalkan <br> <span class="italic text-sky-400">Konsultasi Anda.</span></h2>
                    <p class="text-slate-400 text-lg font-light mb-10 max-w-md">Kesehatan jantung Anda tidak bisa
                        menunggu. Hubungi asisten medis kami untuk mengatur jadwal pertemuan di klinik terdekat.</p>

                    <a href="https://wa.me/628110000000" target="_blank"
                        class="inline-flex items-center gap-4 bg-sky-600 text-white px-8 py-4 rounded-full font-bold text-sm hover:bg-sky-500 transition shadow-medical group">
                        <i class="fa-brands fa-whatsapp text-xl"></i>
                        <span>Chat Asisten via WhatsApp</span>
                        <i class="fa-solid fa-arrow-right ml-2 group-hover:translate-x-2 transition-transform"></i>
                    </a>
                </div>

                <!-- Locations -->
                <div class="bg-slate-900 border border-slate-800 p-8 md:p-10 rounded-[2.5rem]">
                    <h3 class="text-xl font-bold text-white mb-8 border-b border-slate-800 pb-4">Jadwal Praktek Aktif
                    </h3>

                    <div class="space-y-8">
                        <div class="flex items-start gap-4">
                            <div
                                class="w-10 h-10 rounded-full bg-slate-800 flex items-center justify-center text-sky-400 shrink-0 border border-slate-700">
                                <i class="fa-solid fa-building"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-white text-lg mb-1">RS Siloam Kebon Jeruk</h4>
                                <p class="text-sm text-slate-400 mb-2">Jl. Perjuangan No.8, Jakarta Barat</p>
                                <p class="text-xs font-bold text-sky-500 uppercase tracking-widest">Senin & Rabu (09:00
                                    - 14:00)</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div
                                class="w-10 h-10 rounded-full bg-slate-800 flex items-center justify-center text-sky-400 shrink-0 border border-slate-700">
                                <i class="fa-solid fa-building"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-white text-lg mb-1">Jakarta Heart Center</h4>
                                <p class="text-sm text-slate-400 mb-2">Jl. Matraman Raya, Jakarta Timur</p>
                                <p class="text-xs font-bold text-sky-500 uppercase tracking-widest">Selasa & Kamis
                                    (15:00 - 19:00)</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bottom Footer -->
            <div class="pt-8 border-t border-slate-800 flex flex-col md:flex-row justify-between items-center gap-6">
                <div class="flex items-center gap-3">
                    <i class="fa-solid fa-heart-pulse text-sky-500"></i>
                    <p class="text-[10px] font-bold text-slate-500 uppercase tracking-[0.2em]">© 2026 Dr. Adrian
                        Kusuma, Sp.JP(K)</p>
                </div>
                <div class="flex gap-8">
                    <a href="#"
                        class="text-[10px] font-bold text-slate-500 uppercase tracking-widest hover:text-white transition">LinkedIn</a>
                    <a href="#"
                        class="text-[10px] font-bold text-slate-500 uppercase tracking-widest hover:text-white transition">ResearchGate</a>
                    <a href="#"
                        class="text-[10px] font-bold text-slate-500 uppercase tracking-widest hover:text-white transition">Halodoc</a>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>
