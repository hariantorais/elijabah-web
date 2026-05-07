<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lembaga Pendidikan Modern - Comprehensive Institutional Theme</title>

    <!-- Tailwind CSS & Alpine JS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Fonts: Plus Jakarta Sans (Modern Academic) -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        edu: {
                            50: '#f0f7ff',
                            600: '#2563eb', // Academic Blue
                            800: '#1e40af',
                            900: '#1e3a8a',
                        },
                        accent: {
                            500: '#f59e0b', // Gold / Amber
                        }
                    },
                    fontFamily: {
                        sans: ['"Plus Jakarta Sans"', 'sans-serif'],
                    }
                }
            }
        }
    </script>

    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #fbfcfd;
            color: #1e293b;
        }

        [x-cloak] {
            display: none !important;
        }

        .step-line::after {
            content: '';
            position: absolute;
            top: 2rem;
            bottom: 0;
            left: 50%;
            width: 2px;
            background: #e2e8f0;
            z-index: -1;
        }
    </style>
</head>

<body class="antialiased">

    <!-- 1. HEADER & NAVIGATION -->
    <nav x-data="{ mobileMenu: false, scrolled: false }" @scroll.window="scrolled = (window.pageYOffset > 50)"
        class="fixed w-full z-50 transition-all duration-300"
        :class="scrolled ? 'bg-white shadow-xl py-3' : 'bg-white/90 backdrop-blur-md py-5'">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex justify-between items-center">
            <div class="flex items-center gap-3">
                <div
                    class="w-10 h-10 bg-edu-600 rounded-lg flex items-center justify-center text-white text-xl shadow-lg">
                    <i class="fa-solid fa-graduation-cap"></i>
                </div>
                <div class="leading-tight">
                    <span class="block text-lg font-extrabold text-edu-900 tracking-tight">AKADEMI NUSANTARA</span>
                    <span class="block text-[10px] font-bold text-edu-600 uppercase tracking-widest">Unggul - Beradab -
                        Global</span>
                </div>
            </div>

            <div
                class="hidden lg:flex items-center gap-8 font-bold text-slate-600 text-[13px] uppercase tracking-wider">
                <a href="#profil" class="hover:text-edu-600 transition">Profil</a>
                <a href="#kurikulum" class="hover:text-edu-600 transition">Kurikulum</a>
                <a href="#fasilitas" class="hover:text-edu-600 transition">Fasilitas</a>
                <a href="#pendaftaran" class="hover:text-edu-600 transition">Alur Daftar</a>
                <a href="https://wa.me/62812345678"
                    class="bg-edu-600 text-white px-6 py-2.5 rounded-full hover:bg-edu-800 transition shadow-lg shadow-edu-600/20">PPDB
                    2026</a>
            </div>

            <button @click="mobileMenu = !mobileMenu" class="lg:hidden text-edu-900 text-2xl"><i
                    class="fa-solid fa-bars"></i></button>
        </div>

        <!-- Mobile Menu -->
        <div x-cloak x-show="mobileMenu" x-transition class="lg:hidden bg-white border-t p-6 space-y-4 shadow-2xl">
            <a href="#profil" @click="mobileMenu = false" class="block font-bold">PROFIL LEMBAGA</a>
            <a href="#kurikulum" @click="mobileMenu = false" class="block font-bold">KURIKULUM</a>
            <a href="#pendaftaran" @click="mobileMenu = false" class="block font-bold">ALUR PENDAFTARAN</a>
            <a href="https://wa.me/62812345678"
                class="block w-full bg-edu-600 text-white py-3 text-center rounded-lg font-bold">HUBUNGI KAMI</a>
        </div>
    </nav>

    <!-- 2. HERO: CALL TO ACTION UTAMA -->
    <section class="relative pt-32 pb-20 lg:pt-56 lg:pb-40 bg-edu-900 text-white overflow-hidden">
        <div class="absolute inset-0 opacity-20">
            <img src="https://images.unsplash.com/photo-1523050853063-bd803755160b?auto=format&fit=crop&w=1920"
                class="w-full h-full object-cover" alt="Background">
        </div>
        <div
            class="max-w-7xl mx-auto px-4 relative z-10 text-center lg:text-left flex flex-col lg:flex-row items-center gap-16">
            <div class="lg:w-3/5">
                <h1 class="text-4xl md:text-6xl font-extrabold leading-tight mb-6">Investasi Terbaik Untuk <span
                        class="text-accent-500">Masa Depan</span> Putra-Putri Anda.</h1>
                <p class="text-lg text-edu-50/80 mb-10 max-w-xl mx-auto lg:mx-0">Pendidikan terintegrasi dengan
                    penguatan karakter, teknologi modern, dan lingkungan belajar yang inspiratif untuk mencetak pemimpin
                    masa depan.</p>
                <div class="flex flex-wrap gap-4 justify-center lg:justify-start">
                    <a href="#pendaftaran"
                        class="bg-accent-500 text-white px-8 py-4 rounded-xl font-bold shadow-xl hover:bg-amber-600 transition">Daftar
                        Sekarang</a>
                    <a href="#"
                        class="bg-white/10 backdrop-blur border border-white/20 px-8 py-4 rounded-xl font-bold hover:bg-white/20 transition">Download
                        Brosur</a>
                </div>
            </div>
            <div class="lg:w-2/5 hidden lg:block">
                <div class="bg-white/10 backdrop-blur-xl p-8 rounded-3xl border border-white/20 shadow-2xl">
                    <h3 class="text-xl font-bold mb-4">Agenda Terdekat:</h3>
                    <ul class="space-y-4">
                        <li class="flex gap-4 items-start">
                            <div class="bg-accent-500 p-2 rounded-lg text-xs font-bold">15 MEI</div>
                            <p class="text-sm font-medium">Open House & Trial Class Gelombang I</p>
                        </li>
                        <li class="flex gap-4 items-start">
                            <div class="bg-edu-600 p-2 rounded-lg text-xs font-bold">20 MEI</div>
                            <p class="text-sm font-medium">Seminar Parenting: Digital Wellbeing</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. KATA SAMBUTAN PIMPINAN (WELCOME MESSAGE) -->
    <section id="sambutan" class="py-24 bg-white overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row items-center gap-16 lg:gap-24">

                <!-- Image Side with Decorative Frames -->
                <div class="w-full lg:w-2/5 relative">
                    <div class="relative z-10 rounded-[2rem] overflow-hidden shadow-2xl border-8 border-white">
                        <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?auto=format&fit=crop&w=800&q=80"
                            alt="Pimpinan Lembaga"
                            class="w-full h-[500px] object-cover object-top grayscale hover:grayscale-0 transition duration-700">
                    </div>
                    <!-- Decorative Elements -->
                    <div class="absolute -top-6 -left-6 w-32 h-32 bg-edu-50 rounded-full -z-10"></div>
                    <div class="absolute -bottom-10 -right-10 w-64 h-64 bg-accent-500/10 rounded-full -z-10"></div>
                    <div
                        class="absolute bottom-10 -left-10 bg-edu-900 text-white p-6 rounded-2xl shadow-xl hidden md:block">
                        <p class="font-bold text-2xl tracking-tight">30+ Tahun</p>
                        <p class="text-[10px] uppercase tracking-widest text-edu-200">Dedikasi Pendidikan</p>
                    </div>
                </div>

                <!-- Text Side -->
                <div class="w-full lg:w-3/5">
                    <div
                        class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-edu-50 text-edu-600 font-bold text-xs uppercase tracking-widest mb-6">
                        <span class="w-2 h-2 rounded-full bg-edu-600 animate-pulse"></span> Sambutan Pimpinan
                    </div>

                    <h2 class="text-3xl md:text-4xl font-extrabold text-edu-900 leading-tight mb-8">
                        Menyiapkan Generasi yang <span class="text-edu-600">Kokoh Spiritual</span> dan <span
                            class="text-accent-500">Mapan Intelektual.</span>
                    </h2>

                    <div class="space-y-6 text-slate-600 leading-relaxed italic">
                        <p>
                            "Assalamu’alaikum Warahmatullahi Wabarakatuh,"
                        </p>
                        <p>
                            Selamat datang di Akademi Nusantara. Pendidikan bukan sekadar proses transfer ilmu
                            pengetahuan, melainkan upaya menanamkan benih peradaban. Di sini, kami percaya bahwa setiap
                            anak adalah amanah yang memiliki potensi unik dan tak terbatas.
                        </p>
                        <p>
                            Fokus kami bukan hanya pada nilai di atas kertas, tetapi pada pembentukan karakter (Akhlakul
                            Karimah) yang akan menjadi kompas hidup mereka di era yang terus berubah. Kami berkomitmen
                            menciptakan lingkungan yang aman, suportif, dan inovatif bagi putra-putri Anda.
                        </p>
                        <p>
                            Mari bersama-sama membimbing mereka menjadi pemimpin yang berwawasan global namun tetap
                            berpijak pada nilai-nilai luhur nusantara.
                        </p>
                    </div>

                    <div class="mt-10 pt-8 border-t border-slate-100 flex flex-col sm:flex-row items-center gap-6">
                        <div class="flex flex-col items-center sm:items-start">
                            <p class="text-xl font-extrabold text-edu-900">Dr. H. Ahmad Fauzi, M.Pd.</p>
                            <p class="text-sm font-bold text-slate-400 uppercase tracking-widest">Kepala Yayasan &
                                Direktur Akademik</p>
                        </div>
                        <div class="hidden sm:block h-12 w-px bg-slate-200"></div>
                        <img src="https://upload.wikimedia.org/wikipedia/commons/3/3a/Jon_Kirsch%27s_Signature.png"
                            alt="Tanda Tangan" class="h-12 opacity-60 grayscale" onerror="this.style.display='none'">
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 3. KURIKULUM & UNGGULAN -->
    <section id="kurikulum" class="py-24">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-extrabold text-edu-900 mb-4">Kurikulum & Pembelajaran</h2>
                <p class="text-slate-500">Kami memadukan standar nasional dengan metode pembelajaran inovatif.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div
                    class="bg-white p-10 rounded-3xl shadow-sm border border-slate-100 hover:shadow-xl transition-all">
                    <div
                        class="w-14 h-14 bg-edu-50 text-edu-600 rounded-2xl flex items-center justify-center text-2xl mb-6">
                        <i class="fa-solid fa-book-open"></i>
                    </div>
                    <h4 class="text-xl font-bold mb-4">Kurikulum Merdeka</h4>
                    <p class="text-sm text-slate-500 leading-relaxed">Memberikan ruang eksplorasi yang luas bagi siswa
                        untuk mengasah minat dan bakat sesuai tahapan perkembangan.</p>
                </div>
                <div
                    class="bg-white p-10 rounded-3xl shadow-sm border border-slate-100 hover:shadow-xl transition-all">
                    <div
                        class="w-14 h-14 bg-orange-50 text-orange-600 rounded-2xl flex items-center justify-center text-2xl mb-6">
                        <i class="fa-solid fa-microchip"></i>
                    </div>
                    <h4 class="text-xl font-bold mb-4">Digital Fluency</h4>
                    <p class="text-sm text-slate-500 leading-relaxed">Integrasi teknologi dalam kelas, termasuk koding
                        dasar, literasi digital, dan penggunaan perangkat edukasi modern.</p>
                </div>
                <div
                    class="bg-white p-10 rounded-3xl shadow-sm border border-slate-100 hover:shadow-xl transition-all">
                    <div
                        class="w-14 h-14 bg-green-50 text-green-600 rounded-2xl flex items-center justify-center text-2xl mb-6">
                        <i class="fa-solid fa-heart-pulse"></i>
                    </div>
                    <h4 class="text-xl font-bold mb-4">Character Building</h4>
                    <p class="text-sm text-slate-500 leading-relaxed">Pembiasaan nilai-nilai religius, etika, dan
                        kemandirian melalui program bimbingan konseling dan mentor sebaya.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. ALUR PENDAFTARAN (STEP-BY-STEP) -->
    <section id="pendaftaran" class="py-24 bg-slate-50">
        <div class="max-w-4xl mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-extrabold text-edu-900 mb-4">Alur Pendaftaran (PPDB)</h2>
                <p class="text-slate-500">Proses pendaftaran yang mudah dan transparan.</p>
            </div>

            <div class="space-y-12 relative">
                <div class="hidden md:block absolute left-1/2 -translate-x-1/2 top-0 bottom-0 w-1 bg-slate-200 -z-0">
                </div>

                <!-- Step 1 -->
                <div class="flex flex-col md:flex-row items-center gap-8 relative z-10">
                    <div class="md:w-1/2 md:text-right">
                        <h5 class="text-xl font-bold text-edu-900">1. Registrasi Online</h5>
                        <p class="text-sm text-slate-500 mt-2">Mengisi formulir melalui website resmi dan mengunggah
                            dokumen (KK, Akta Kelahiran).</p>
                    </div>
                    <div
                        class="w-12 h-12 bg-edu-600 text-white rounded-full flex items-center justify-center font-bold shadow-lg">
                        1</div>
                    <div class="md:w-1/2"></div>
                </div>

                <!-- Step 2 -->
                <div class="flex flex-col md:flex-row-reverse items-center gap-8 relative z-10">
                    <div class="md:w-1/2 md:text-left">
                        <h5 class="text-xl font-bold text-edu-900">2. Observasi & Wawancara</h5>
                        <p class="text-sm text-slate-500 mt-2">Pemetaan kemampuan siswa dan sesi diskusi antara sekolah
                            dengan orang tua.</p>
                    </div>
                    <div
                        class="w-12 h-12 bg-edu-600 text-white rounded-full flex items-center justify-center font-bold shadow-lg">
                        2</div>
                    <div class="md:w-1/2"></div>
                </div>

                <!-- Step 3 -->
                <div class="flex flex-col md:flex-row items-center gap-8 relative z-10">
                    <div class="md:w-1/2 md:text-right">
                        <h5 class="text-xl font-bold text-edu-900">3. Pengumuman & Daftar Ulang</h5>
                        <p class="text-sm text-slate-500 mt-2">Penerimaan surat keputusan dan penyelesaian administrasi
                            biaya pendidikan.</p>
                    </div>
                    <div
                        class="w-12 h-12 bg-edu-600 text-white rounded-full flex items-center justify-center font-bold shadow-lg">
                        3</div>
                    <div class="md:w-1/2"></div>
                </div>
            </div>

            <div class="mt-16 bg-white p-8 rounded-3xl border-2 border-dashed border-edu-200 text-center">
                <p class="font-bold text-edu-900 mb-4">Butuh panduan lebih lengkap?</p>
                <a href="#" class="inline-flex items-center gap-2 text-edu-600 font-bold hover:underline">
                    <i class="fa-solid fa-file-pdf"></i> Download Panduan PPDB 2026 (PDF)
                </a>
            </div>
        </div>
    </section>

    <!-- 5. FASILITAS (GALLERY) -->
    <section id="fasilitas" class="py-24">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-extrabold text-edu-900 mb-4">Fasilitas Penunjang</h2>
                <p class="text-slate-500">Lingkungan yang nyaman dan modern untuk kreativitas tanpa batas.</p>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="group relative overflow-hidden rounded-2xl h-64">
                    <img src="https://images.unsplash.com/photo-1541339907198-e08756ebafe3?auto=format&fit=crop&w=600"
                        class="w-full h-full object-cover group-hover:scale-110 transition duration-500"
                        alt="Lab">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent flex items-end p-6">
                        <span class="text-white font-bold text-sm">Laboratorium Sains</span>
                    </div>
                </div>
                <div class="group relative overflow-hidden rounded-2xl h-64">
                    <img src="https://images.unsplash.com/photo-1524178232363-1fb28f74b671?auto=format&fit=crop&w=600"
                        class="w-full h-full object-cover group-hover:scale-110 transition duration-500"
                        alt="Library">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent flex items-end p-6">
                        <span class="text-white font-bold text-sm">Perpustakaan Digital</span>
                    </div>
                </div>
                <div class="group relative overflow-hidden rounded-2xl h-64">
                    <img src="https://images.unsplash.com/photo-1577416414929-7a302fad6f61?auto=format&fit=crop&w=600"
                        class="w-full h-full object-cover group-hover:scale-110 transition duration-500"
                        alt="Sport">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent flex items-end p-6">
                        <span class="text-white font-bold text-sm">Gedung Olahraga</span>
                    </div>
                </div>
                <div class="group relative overflow-hidden rounded-2xl h-64">
                    <img src="https://images.unsplash.com/photo-1497633762265-9d179a990aa6?auto=format&fit=crop&w=600"
                        class="w-full h-full object-cover group-hover:scale-110 transition duration-500"
                        alt="Creative">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent flex items-end p-6">
                        <span class="text-white font-bold text-sm">Ruang Kreatif Siswa</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="berita" class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-between items-end mb-12 gap-6">
                <div class="max-w-2xl">
                    <h2 class="text-3xl font-extrabold text-edu-900 mb-4">Warta & Inspirasi</h2>
                    <p class="text-slate-500">Ikuti perkembangan terbaru kegiatan sekolah dan dapatkan wawasan
                        bermanfaat seputar dunia pendidikan dan parenting.</p>
                </div>
                <a href="#"
                    class="hidden md:flex items-center gap-2 bg-edu-50 text-edu-600 px-6 py-3 rounded-full font-bold text-sm hover:bg-edu-600 hover:text-white transition group">
                    Lihat Semua Berita <i class="fa-solid fa-arrow-right group-hover:translate-x-1 transition"></i>
                </a>
            </div>

            <!-- Kategori Filter (Simulasi Alpine.js) -->
            <div x-data="{ selected: 'semua' }" class="mb-10">
                <div class="flex flex-wrap gap-3 mb-10">
                    <button @click="selected = 'semua'"
                        :class="selected === 'semua' ? 'bg-edu-600 text-white' : 'bg-slate-100 text-slate-600'"
                        class="px-5 py-2 rounded-full text-xs font-bold uppercase tracking-widest transition">Semua</button>
                    <button @click="selected = 'kegiatan'"
                        :class="selected === 'kegiatan' ? 'bg-edu-600 text-white' : 'bg-slate-100 text-slate-600'"
                        class="px-5 py-2 rounded-full text-xs font-bold uppercase tracking-widest transition">Kegiatan</button>
                    <button @click="selected = 'prestasi'"
                        :class="selected === 'prestasi' ? 'bg-edu-600 text-white' : 'bg-slate-100 text-slate-600'"
                        class="px-5 py-2 rounded-full text-xs font-bold uppercase tracking-widest transition">Prestasi</button>
                    <button @click="selected = 'artikel'"
                        :class="selected === 'artikel' ? 'bg-edu-600 text-white' : 'bg-slate-100 text-slate-600'"
                        class="px-5 py-2 rounded-full text-xs font-bold uppercase tracking-widest transition">Artikel
                        Parenting</button>
                </div>

                <!-- Grid Berita -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">

                    <!-- Berita 1 (Kegiatan) -->
                    <article x-show="selected === 'semua' || selected === 'kegiatan'" x-transition
                        class="group cursor-pointer">
                        <div class="relative overflow-hidden rounded-2xl mb-6 aspect-video shadow-md">
                            <img src="https://images.unsplash.com/photo-1509062522246-3755977927d7?auto=format&fit=crop&w=600"
                                class="w-full h-full object-cover group-hover:scale-110 transition duration-500"
                                alt="Field Trip">
                            <div
                                class="absolute top-4 left-4 bg-white/90 backdrop-blur-sm px-3 py-1 rounded-lg shadow-sm">
                                <span
                                    class="text-[10px] font-black text-edu-600 uppercase tracking-tighter">Kegiatan</span>
                            </div>
                        </div>
                        <div class="flex items-center gap-3 mb-3 text-xs font-bold text-slate-400">
                            <span><i class="fa-regular fa-calendar mr-1"></i> 05 Mei 2026</span>
                            <span>•</span>
                            <span><i class="fa-regular fa-user mr-1"></i> Humas Akademi</span>
                        </div>
                        <h4
                            class="text-xl font-bold text-edu-900 group-hover:text-edu-600 transition mb-3 leading-snug">
                            Menjelajah Alam: Keseruan Field Trip Siswa Kelas 4 ke Geopark Nasional.</h4>
                        <p class="text-sm text-slate-500 line-clamp-2 mb-4">Kegiatan ini bertujuan mengenalkan
                            ekosistem alam dan pentingnya menjaga kelestarian lingkungan sejak dini melalui observasi
                            langsung.</p>
                        <span
                            class="text-edu-600 text-xs font-bold uppercase tracking-widest flex items-center gap-2">Baca
                            Selengkapnya <i class="fa-solid fa-chevron-right text-[10px]"></i></span>
                    </article>

                    <!-- Berita 2 (Prestasi) -->
                    <article x-show="selected === 'semua' || selected === 'prestasi'" x-transition
                        class="group cursor-pointer">
                        <div class="relative overflow-hidden rounded-2xl mb-6 aspect-video shadow-md">
                            <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&w=600"
                                class="w-full h-full object-cover group-hover:scale-110 transition duration-500"
                                alt="Competition">
                            <div class="absolute top-4 left-4 bg-accent-500 text-white px-3 py-1 rounded-lg shadow-sm">
                                <span class="text-[10px] font-black uppercase tracking-tighter">Prestasi</span>
                            </div>
                        </div>
                        <div class="flex items-center gap-3 mb-3 text-xs font-bold text-slate-400">
                            <span><i class="fa-regular fa-calendar mr-1"></i> 28 April 2026</span>
                            <span>•</span>
                            <span><i class="fa-regular fa-user mr-1"></i> Tim Kesiswaan</span>
                        </div>
                        <h4
                            class="text-xl font-bold text-edu-900 group-hover:text-edu-600 transition mb-3 leading-snug">
                            Siswa Akademi Nusantara Meraih Medali Emas di World Robot Olympiad 2026.</h4>
                        <p class="text-sm text-slate-500 line-clamp-2 mb-4">Tim robotik sekolah berhasil mengalahkan
                            perwakilan dari 15 negara melalui inovasi robot pemilah sampah otomatis.</p>
                        <span
                            class="text-edu-600 text-xs font-bold uppercase tracking-widest flex items-center gap-2">Baca
                            Selengkapnya <i class="fa-solid fa-chevron-right text-[10px]"></i></span>
                    </article>

                    <!-- Berita 3 (Artikel Parenting) -->
                    <article x-show="selected === 'semua' || selected === 'artikel'" x-transition
                        class="group cursor-pointer">
                        <div
                            class="relative overflow-hidden rounded-2xl mb-6 aspect-video shadow-md bg-edu-50 flex items-center justify-center">
                            <img src="https://images.unsplash.com/photo-1491438590914-bc09fcaaf77a?auto=format&fit=crop&w=600"
                                class="w-full h-full object-cover group-hover:scale-110 transition duration-500"
                                alt="Parenting">
                            <div class="absolute top-4 left-4 bg-indigo-600 text-white px-3 py-1 rounded-lg shadow-sm">
                                <span class="text-[10px] font-black uppercase tracking-tighter">Artikel
                                    Parenting</span>
                            </div>
                        </div>
                        <div class="flex items-center gap-3 mb-3 text-xs font-bold text-slate-400">
                            <span><i class="fa-regular fa-calendar mr-1"></i> 20 April 2026</span>
                            <span>•</span>
                            <span><i class="fa-regular fa-user mr-1"></i> Konselor Sekolah</span>
                        </div>
                        <h4
                            class="text-xl font-bold text-edu-900 group-hover:text-edu-600 transition mb-3 leading-snug">
                            5 Cara Membangun Komunikasi Efektif dengan Anak di Era Digital.</h4>
                        <p class="text-sm text-slate-500 line-clamp-2 mb-4">Menghadapi tantangan gadget, orang tua
                            perlu strategi khusus agar ikatan emosional dengan anak tetap terjaga dengan baik.</p>
                        <span
                            class="text-edu-600 text-xs font-bold uppercase tracking-widest flex items-center gap-2">Baca
                            Selengkapnya <i class="fa-solid fa-chevron-right text-[10px]"></i></span>
                    </article>

                </div>
            </div>

            <!-- Mobile View Button -->
            <div class="mt-12 text-center md:hidden">
                <a href="#"
                    class="inline-block bg-edu-600 text-white px-10 py-4 rounded-full font-bold shadow-lg">Lihat Semua
                    Berita</a>
            </div>
        </div>
    </section>

    <!-- 8. NEWSLETTER / SUBSCRIBE -->
    <section class="py-16 bg-edu-900 overflow-hidden relative">
        <div class="max-w-5xl mx-auto px-4 relative z-10">
            <div
                class="bg-white/10 backdrop-blur-md p-10 md:p-16 rounded-[3rem] border border-white/20 flex flex-col md:flex-row items-center justify-between gap-10">
                <div class="md:w-1/2">
                    <h3 class="text-2xl md:text-3xl font-bold text-white mb-4">Jangan Lewatkan Update Info Pendaftaran.
                    </h3>
                    <p class="text-edu-100/70">Daftarkan email Anda untuk menerima informasi jadwal tes, beasiswa, dan
                        artikel parenting rutin.</p>
                </div>
                <div class="md:w-1/2 w-full">
                    <form class="flex flex-col sm:flex-row gap-3">
                        <input type="email" placeholder="Alamat Email Anda"
                            class="flex-grow px-6 py-4 rounded-2xl bg-white focus:outline-none focus:ring-2 focus:ring-accent-500 transition shadow-inner">
                        <button
                            class="bg-accent-500 text-white px-8 py-4 rounded-2xl font-bold hover:bg-amber-600 transition shadow-lg">Langganan</button>
                    </form>
                    <p class="text-[10px] text-edu-100/50 mt-3 text-center sm:text-left">*Kami menjamin kerahasiaan
                        data email Anda.</p>
                </div>
            </div>
        </div>
        <!-- Decorative Circle -->
        <div class="absolute -top-24 -right-24 w-64 h-64 bg-accent-500 rounded-full blur-[80px] opacity-20"></div>
    </section>

    <!-- 6. FAQ (TANYA JAWAB) -->
    <section class="py-24 bg-edu-50">
        <div class="max-w-3xl mx-auto px-4">
            <h2 class="text-3xl font-extrabold text-edu-900 text-center mb-12">Sering Ditanyakan</h2>
            <div x-data="{ active: null }" class="space-y-4">
                <div class="bg-white rounded-2xl border border-slate-100 overflow-hidden">
                    <button @click="active = (active === 1 ? null : 1)"
                        class="w-full p-6 text-left font-bold flex justify-between items-center text-edu-900">
                        Apakah tersedia layanan antar-jemput?
                        <i class="fa-solid" :class="active === 1 ? 'fa-minus' : 'fa-plus'"></i>
                    </button>
                    <div x-show="active === 1" x-collapse class="px-6 pb-6 text-sm text-slate-500">
                        Ya, kami menyediakan layanan antar-jemput berbayar untuk area dalam radius 15 km dari lokasi
                        sekolah dengan armada yang aman.
                    </div>
                </div>
                <div class="bg-white rounded-2xl border border-slate-100 overflow-hidden">
                    <button @click="active = (active === 2 ? null : 2)"
                        class="w-full p-6 text-left font-bold flex justify-between items-center text-edu-900">
                        Bagaimana sistem beasiswa di sini?
                        <i class="fa-solid" :class="active === 2 ? 'fa-minus' : 'fa-plus'"></i>
                    </button>
                    <div x-show="active === 2" x-collapse class="px-6 pb-6 text-sm text-slate-500">
                        Tersedia beasiswa Prestasi Akademik, Tahfidz Al-Qur'an (khusus Pesantren), dan beasiswa bantuan
                        sosial bagi yang memenuhi kriteria.
                    </div>
                </div>
                <div class="bg-white rounded-2xl border border-slate-100 overflow-hidden">
                    <button @click="active = (active === 3 ? null : 3)"
                        class="w-full p-6 text-left font-bold flex justify-between items-center text-edu-900">
                        Apakah kurikulum internasional juga digunakan?
                        <i class="fa-solid" :class="active === 3 ? 'fa-minus' : 'fa-plus'"></i>
                    </button>
                    <div x-show="active === 3" x-collapse class="px-6 pb-6 text-sm text-slate-500">
                        Kami mengadopsi beberapa modul Cambridge untuk mata pelajaran Bahasa Inggris dan Sains sebagai
                        penguatan kurikulum nasional.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 7. FOOTER -->
    <footer class="bg-white border-t pt-20 pb-10">
        <div class="max-w-7xl mx-auto px-4 grid grid-cols-1 md:grid-cols-4 gap-12 mb-16">
            <div class="col-span-1 md:col-span-2">
                <div class="flex items-center gap-3 mb-6">
                    <div class="w-10 h-10 bg-edu-600 rounded-lg flex items-center justify-center text-white text-xl">
                        <i class="fa-solid fa-graduation-cap"></i>
                    </div>
                    <span class="text-xl font-extrabold text-edu-900">AKADEMI NUSANTARA</span>
                </div>
                <p class="text-slate-500 max-w-sm mb-8">Lembaga pendidikan terakreditasi A yang berfokus pada
                    pengembangan potensi akademik, karakter, dan keterampilan masa depan.</p>
                <div class="flex gap-4">
                    <a href="#" class="text-slate-400 hover:text-edu-600 text-xl"><i
                            class="fa-brands fa-facebook"></i></a>
                    <a href="#" class="text-slate-400 hover:text-edu-600 text-xl"><i
                            class="fa-brands fa-instagram"></i></a>
                    <a href="#" class="text-slate-400 hover:text-edu-600 text-xl"><i
                            class="fa-brands fa-youtube"></i></a>
                </div>
            </div>
            <div>
                <h6 class="font-bold mb-6">Halaman Penting</h6>
                <ul class="space-y-4 text-sm text-slate-500">
                    <li><a href="#" class="hover:text-edu-600">Pendaftaran (PPDB)</a></li>
                    <li><a href="#" class="hover:text-edu-600">Layanan Psikologi</a></li>
                    <li><a href="#" class="hover:text-edu-600">Alumni & Karir</a></li>
                    <li><a href="#" class="hover:text-edu-600">Laporan Keuangan Yayasan</a></li>
                </ul>
            </div>
            <div>
                <h6 class="font-bold mb-6">Hubungi Kantor</h6>
                <p class="text-sm text-slate-500 mb-4">Jl. Pendidikan No.1, Jakarta, Indonesia</p>
                <p class="text-sm font-bold text-edu-900">(021) 1234-5678</p>
                <p class="text-sm text-slate-500">humas@akademinusantara.ac.id</p>
            </div>
        </div>
        <div class="text-center text-xs text-slate-400 pt-8 border-t">
            &copy; 2026 Yayasan Akademi Nusantara. Hak Cipta Dilindungi.
        </div>
    </footer>

</body>

</html>
