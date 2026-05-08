<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Little Bloom | Premium Kindergarten & PAUD</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <!-- Google Fonts -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@400;600;700;800;900&display=swap');

        /* Menggunakan Quicksand untuk kesan bulat & ramah, dan Jakarta Sans untuk teks detail */
        h1,
        h2,
        h3,
        h4,
        h5,
        .font-heading {
            font-family: 'Quicksand', sans-serif;
        }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #fffaf0;
            /* Soft cream background */
        }

        .glass-nav {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(12px);
            border-bottom: 2px dashed rgba(251, 146, 60, 0.2);
        }

        .blob-shape {
            border-radius: 40% 60% 70% 30% / 40% 50% 60% 50%;
        }

        .shadow-playful {
            box-shadow: 0 10px 40px -10px rgba(244, 63, 94, 0.15);
        }
    </style>
</head>

<body class="text-slate-800 antialiased overflow-x-hidden" x-data="{ mobileMenu: false }">

    <!-- 1. PLAYFUL NAVIGATION -->
    <nav class="fixed top-0 w-full z-[100] glass-nav transition-all duration-300">
        <div class="max-w-[85rem] mx-auto px-6 py-4 flex justify-between items-center">

            <!-- Logo -->
            <div class="flex items-center gap-3">
                <div
                    class="w-12 h-12 bg-rose-500 rounded-full flex items-center justify-center text-white shadow-md shadow-rose-200 border-4 border-white">
                    <i class="fa-solid fa-shapes text-lg"></i>
                </div>
                <div class="leading-none">
                    <span class="text-2xl font-bold tracking-tight text-slate-900 font-heading block">Little
                        Bloom</span>
                    <span class="text-[9px] font-bold text-sky-500 tracking-[0.2em] uppercase block mt-1">Creative
                        Preschool</span>
                </div>
            </div>

            <!-- Desktop Menu -->
            <div
                class="hidden lg:flex items-center gap-8 bg-white/50 px-8 py-3 rounded-full border border-slate-100 shadow-sm">
                <a href="#profil"
                    class="text-xs font-bold text-slate-500 uppercase tracking-widest hover:text-rose-500 transition">Profil</a>
                <a href="#program"
                    class="text-xs font-bold text-slate-500 uppercase tracking-widest hover:text-sky-500 transition">Kelas</a>
                <a href="#fasilitas"
                    class="text-xs font-bold text-slate-500 uppercase tracking-widest hover:text-amber-500 transition">Fasilitas</a>
                <a href="#galeri"
                    class="text-xs font-bold text-slate-500 uppercase tracking-widest hover:text-teal-500 transition">Galeri</a>
            </div>

            <!-- CTA Desktop -->
            <div class="hidden lg:block">
                <button
                    class="bg-amber-400 text-slate-900 px-6 py-3 rounded-full font-bold text-xs uppercase tracking-widest hover:bg-amber-300 transition shadow-lg shadow-amber-400/40 hover:-translate-y-1 transform duration-300">
                    Daftar Murid Baru
                </button>
            </div>

            <!-- Mobile Toggle -->
            <button @click="mobileMenu = !mobileMenu" class="lg:hidden text-rose-500 text-3xl focus:outline-none">
                <i :class="mobileMenu ? 'fa-solid fa-circle-xmark' : 'fa-solid fa-bars'"></i>
            </button>
        </div>

        <!-- Mobile Menu -->
        <div x-show="mobileMenu" x-collapse x-cloak
            class="lg:hidden bg-white border-t border-rose-100 shadow-2xl rounded-b-[2rem]">
            <div class="px-6 py-8 flex flex-col gap-6 text-center">
                <a href="#profil" @click="mobileMenu = false"
                    class="text-lg font-bold text-slate-700 font-heading hover:text-rose-500">Profil & Sambutan</a>
                <a href="#program" @click="mobileMenu = false"
                    class="text-lg font-bold text-slate-700 font-heading hover:text-sky-500">Program Kelas</a>
                <a href="#fasilitas" @click="mobileMenu = false"
                    class="text-lg font-bold text-slate-700 font-heading hover:text-amber-500">Fasilitas Bermain</a>
                <a href="#kontak" @click="mobileMenu = false"
                    class="text-lg font-bold text-slate-700 font-heading hover:text-teal-500">Lokasi & Kontak</a>
                <button
                    class="w-full bg-rose-500 text-white py-4 rounded-full font-bold uppercase tracking-widest text-sm shadow-lg mt-4">Daftar
                    Sekarang</button>
            </div>
        </div>
    </nav>

    <!-- 2. HERO SECTION (COLORFUL & FRIENDLY) -->
    <header class="pt-32 lg:pt-48 pb-20 px-6 relative overflow-hidden">
        <!-- Floating Decorative Shapes -->
        <div
            class="absolute top-20 left-10 w-24 h-24 bg-sky-200 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-pulse">
        </div>
        <div class="absolute top-40 right-20 w-32 h-32 bg-rose-200 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-pulse"
            style="animation-delay: 2s;"></div>
        <div class="absolute bottom-10 left-1/3 w-28 h-28 bg-amber-200 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-pulse"
            style="animation-delay: 4s;"></div>

        <div class="max-w-[85rem] mx-auto grid lg:grid-cols-12 gap-12 items-center relative z-10">
            <!-- Hero Text -->
            <div class="lg:col-span-6 text-center lg:text-left">
                <div
                    class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white border-2 border-rose-100 text-rose-500 text-[10px] font-bold uppercase tracking-widest mb-6 shadow-sm">
                    <i class="fa-solid fa-face-smile-beam"></i> Penerimaan Siswa Baru 2026
                </div>
                <h1
                    class="text-4xl md:text-5xl lg:text-7xl font-bold text-slate-900 tracking-tight leading-[1.1] mb-6 font-heading">
                    Tumbuh Ceria, <br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-rose-500 to-amber-500">Cerdas, &
                        Kreatif.</span>
                </h1>
                <p
                    class="text-base md:text-lg text-slate-500 font-medium leading-relaxed mb-10 max-w-lg mx-auto lg:mx-0">
                    Membangun pondasi karakter dan kognitif anak usia dini melalui metode bermain sambil belajar dalam
                    lingkungan yang aman dan penuh kasih sayang.
                </p>
                <div class="flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-4">
                    <button
                        class="w-full sm:w-auto bg-rose-500 text-white px-8 py-4 rounded-full font-bold text-sm hover:bg-rose-600 transition shadow-playful hover:-translate-y-1 transform duration-300">
                        Jadwalkan Kunjungan
                    </button>
                    <button
                        class="w-full sm:w-auto bg-white text-slate-700 border-2 border-slate-100 px-8 py-4 rounded-full font-bold text-sm hover:bg-slate-50 transition flex items-center justify-center gap-3">
                        <i class="fa-solid fa-download text-sky-500"></i> Unduh Brosur
                    </button>
                </div>
            </div>

            <!-- Hero Image (Blob Shape) -->
            <div class="lg:col-span-6 relative mt-10 lg:mt-0 flex justify-center">
                <div
                    class="relative w-[300px] h-[300px] md:w-[450px] md:h-[450px] blob-shape overflow-hidden border-8 border-white shadow-2xl z-10">
                    <img src="{{ asset('images/education/anak-tk.png') }}" class="w-full h-full object-cover"
                        alt="Anak TK Bermain">
                </div>
                <!-- Mini Card Decor -->
                <div class="absolute bottom-10 -left-6 md:left-0 bg-white p-4 rounded-3xl shadow-xl border-2 border-white flex items-center gap-4 z-20 animate-bounce"
                    style="animation-duration: 3s;">
                    <div
                        class="w-12 h-12 bg-teal-100 text-teal-500 rounded-full flex items-center justify-center text-xl">
                        <i class="fa-solid fa-shield-halved"></i>
                    </div>
                    <div>
                        <p class="text-[10px] font-bold text-slate-400 uppercase tracking-widest">Lingkungan</p>
                        <h4 class="text-lg font-bold text-slate-800 font-heading">100% Aman</h4>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- 3. QUICK STATS (COLORFUL CARDS) -->
    <section class="py-10 px-6">
        <div class="max-w-[85rem] mx-auto grid grid-cols-2 md:grid-cols-4 gap-6">
            <div
                class="bg-white p-6 rounded-[2rem] text-center shadow-sm border border-slate-100 hover:shadow-xl transition">
                <div
                    class="w-12 h-12 mx-auto bg-rose-50 text-rose-500 rounded-full flex items-center justify-center text-xl mb-3">
                    <i class="fa-solid fa-children"></i>
                </div>
                <h3 class="text-3xl font-bold text-slate-800 font-heading mb-1">300+</h3>
                <p class="text-[9px] font-bold text-slate-400 uppercase tracking-widest">Siswa Aktif</p>
            </div>
            <div
                class="bg-white p-6 rounded-[2rem] text-center shadow-sm border border-slate-100 hover:shadow-xl transition">
                <div
                    class="w-12 h-12 mx-auto bg-sky-50 text-sky-500 rounded-full flex items-center justify-center text-xl mb-3">
                    <i class="fa-solid fa-chalkboard-user"></i>
                </div>
                <h3 class="text-3xl font-bold text-slate-800 font-heading mb-1">25+</h3>
                <p class="text-[9px] font-bold text-slate-400 uppercase tracking-widest">Guru Tersertifikasi</p>
            </div>
            <div
                class="bg-white p-6 rounded-[2rem] text-center shadow-sm border border-slate-100 hover:shadow-xl transition">
                <div
                    class="w-12 h-12 mx-auto bg-amber-50 text-amber-500 rounded-full flex items-center justify-center text-xl mb-3">
                    <i class="fa-solid fa-palette"></i>
                </div>
                <h3 class="text-3xl font-bold text-slate-800 font-heading mb-1">10+</h3>
                <p class="text-[9px] font-bold text-slate-400 uppercase tracking-widest">Kelas Kreatif</p>
            </div>
            <div
                class="bg-white p-6 rounded-[2rem] text-center shadow-sm border border-slate-100 hover:shadow-xl transition">
                <div
                    class="w-12 h-12 mx-auto bg-teal-50 text-teal-500 rounded-full flex items-center justify-center text-xl mb-3">
                    <i class="fa-solid fa-award"></i>
                </div>
                <h3 class="text-3xl font-bold text-slate-800 font-heading mb-1">A</h3>
                <p class="text-[9px] font-bold text-slate-400 uppercase tracking-widest">Akreditasi BAN-PAUD</p>
            </div>
        </div>
    </section>

    <!-- 4. SAMBUTAN & PROFIL -->
    <section id="profil" class="py-20 lg:py-32 px-6">
        <div
            class="max-w-[85rem] mx-auto bg-white rounded-[3rem] p-8 md:p-16 shadow-sm border border-slate-100 flex flex-col lg:flex-row gap-12 lg:gap-20 items-center">
            <div class="lg:w-2/5 relative">
                <div class="w-full h-[400px] rounded-[3rem] overflow-hidden border-8 border-sky-50 shadow-lg">
                    <img src="{{ asset('images/education/kepala-sekolah.png') }}" class="w-full h-full object-cover"
                        alt="Kepala Sekolah">
                </div>
                <!-- Decoration -->
                <i class="fa-solid fa-star text-amber-400 text-4xl absolute -top-4 -right-4 animate-spin-slow"></i>
            </div>
            <div class="lg:w-3/5">
                <span class="text-sky-500 font-bold text-[10px] uppercase tracking-[0.3em] mb-4 block">Sambutan
                    Hangat</span>
                <h2 class="text-3xl md:text-5xl font-bold text-slate-900 font-heading leading-tight mb-6">Setiap Anak
                    Adalah Bintang yang Menunggu Waktunya Bersinar.</h2>
                <p class="text-slate-500 text-base leading-relaxed mb-6">
                    Selamat datang di Little Bloom. Sejak didirikan, komitmen kami adalah menyediakan rumah kedua bagi
                    anak-anak Anda. Kami merancang kurikulum yang menstimulasi rasa ingin tahu alami mereka melalui
                    seni, musik, dan permainan interaktif.
                </p>
                <div class="flex items-center gap-4 mt-8">
                    <div class="w-12 h-12 rounded-full bg-sky-100 flex items-center justify-center text-sky-600"><i
                            class="fa-solid fa-heart"></i></div>
                    <div>
                        <h4 class="font-bold text-slate-800 font-heading">Bunda Sarah, S.Pd., M.Psi.</h4>
                        <p class="text-[10px] font-bold text-slate-400 uppercase tracking-widest mt-0.5">Kepala Sekolah
                            Little Bloom</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. PROGRAM KELAS (PLAYFUL CARDS) -->
    <section id="program" class="py-20 lg:py-32 px-6 bg-slate-50 border-y border-slate-100">
        <div class="max-w-[85rem] mx-auto">
            <div class="text-center mb-16">
                <span class="text-rose-500 font-bold text-[10px] uppercase tracking-[0.3em] mb-2 block">Pilihan
                    Kelas</span>
                <h2 class="text-3xl md:text-5xl font-bold text-slate-900 font-heading tracking-tight">Program Belajar
                    Sesuai Usia</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Program 1 (Playgroup) -->
                <div
                    class="bg-white rounded-[3rem] p-8 border-4 border-amber-100 hover:-translate-y-2 hover:shadow-xl hover:shadow-amber-200/50 transition duration-300 relative overflow-hidden group">
                    <div
                        class="absolute top-0 right-0 w-32 h-32 bg-amber-50 rounded-bl-[4rem] -z-0 group-hover:scale-110 transition">
                    </div>
                    <div class="relative z-10">
                        <div
                            class="w-16 h-16 bg-amber-400 text-white rounded-2xl flex items-center justify-center text-3xl mb-6 shadow-md rotate-3">
                            <i class="fa-solid fa-shapes"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-slate-800 font-heading mb-2">Playgroup</h3>
                        <span
                            class="inline-block bg-amber-100 text-amber-700 text-[10px] font-bold px-3 py-1 rounded-full mb-4">Usia
                            2 - 3 Tahun</span>
                        <p class="text-slate-500 text-sm leading-relaxed mb-6">Fokus pada stimulasi motorik kasar &
                            halus, pengenalan warna, sosialisasi, dan kemandirian dasar (toilet training).</p>
                        <ul class="space-y-3 mb-8">
                            <li class="flex items-center gap-3 text-xs font-bold text-slate-600"><i
                                    class="fa-solid fa-circle-check text-amber-500"></i> Maks 10 anak / kelas</li>
                            <li class="flex items-center gap-3 text-xs font-bold text-slate-600"><i
                                    class="fa-solid fa-circle-check text-amber-500"></i> 2 Guru Pendamping</li>
                        </ul>
                    </div>
                </div>

                <!-- Program 2 (TK A) -->
                <div
                    class="bg-white rounded-[3rem] p-8 border-4 border-sky-100 hover:-translate-y-2 hover:shadow-xl hover:shadow-sky-200/50 transition duration-300 relative overflow-hidden group mt-0 md:-mt-8">
                    <div
                        class="absolute top-0 right-0 w-32 h-32 bg-sky-50 rounded-bl-[4rem] -z-0 group-hover:scale-110 transition">
                    </div>
                    <div class="relative z-10">
                        <div
                            class="w-16 h-16 bg-sky-500 text-white rounded-2xl flex items-center justify-center text-3xl mb-6 shadow-md -rotate-3">
                            <i class="fa-solid fa-puzzle-piece"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-slate-800 font-heading mb-2">TK A (Nursery)</h3>
                        <span
                            class="inline-block bg-sky-100 text-sky-700 text-[10px] font-bold px-3 py-1 rounded-full mb-4">Usia
                            4 - 5 Tahun</span>
                        <p class="text-slate-500 text-sm leading-relaxed mb-6">Pengenalan huruf, angka, bernyanyi,
                            serta melatih kecerdasan emosional dan bahasa melalui *story telling*.</p>
                        <ul class="space-y-3 mb-8">
                            <li class="flex items-center gap-3 text-xs font-bold text-slate-600"><i
                                    class="fa-solid fa-circle-check text-sky-500"></i> Pengenalan Calistung Dasar</li>
                            <li class="flex items-center gap-3 text-xs font-bold text-slate-600"><i
                                    class="fa-solid fa-circle-check text-sky-500"></i> Field Trip Rutin</li>
                        </ul>
                    </div>
                </div>

                <!-- Program 3 (TK B) -->
                <div
                    class="bg-white rounded-[3rem] p-8 border-4 border-teal-100 hover:-translate-y-2 hover:shadow-xl hover:shadow-teal-200/50 transition duration-300 relative overflow-hidden group">
                    <div
                        class="absolute top-0 right-0 w-32 h-32 bg-teal-50 rounded-bl-[4rem] -z-0 group-hover:scale-110 transition">
                    </div>
                    <div class="relative z-10">
                        <div
                            class="w-16 h-16 bg-teal-500 text-white rounded-2xl flex items-center justify-center text-3xl mb-6 shadow-md rotate-3">
                            <i class="fa-solid fa-graduation-cap"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-slate-800 font-heading mb-2">TK B (Kindergarten)</h3>
                        <span
                            class="inline-block bg-teal-100 text-teal-700 text-[10px] font-bold px-3 py-1 rounded-full mb-4">Usia
                            5 - 6 Tahun</span>
                        <p class="text-slate-500 text-sm leading-relaxed mb-6">Persiapan matang menuju Sekolah Dasar
                            (SD). Pemantapan baca tulis berhitung, bahasa Inggris dasar, dan sains sederhana.</p>
                        <ul class="space-y-3 mb-8">
                            <li class="flex items-center gap-3 text-xs font-bold text-slate-600"><i
                                    class="fa-solid fa-circle-check text-teal-500"></i> Kesiapan Kognitif SD</li>
                            <li class="flex items-center gap-3 text-xs font-bold text-slate-600"><i
                                    class="fa-solid fa-circle-check text-teal-500"></i> Kelas Minat Bakat (Ekskul)</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 6. FASILITAS & GALERI -->
    <section id="fasilitas" class="py-20 lg:py-32 px-6">
        <div class="max-w-[85rem] mx-auto">
            <div class="flex flex-col md:flex-row justify-between items-end mb-12 gap-6">
                <div class="max-w-2xl">
                    <h2 class="text-3xl md:text-5xl font-bold text-slate-900 font-heading tracking-tight mb-4">
                        Lingkungan Belajar yang Menyenangkan.</h2>
                    <p class="text-slate-500 text-base">Fasilitas kami dirancang khusus dengan standar keamanan tinggi
                        (kid-friendly) untuk mendukung kreativitas anak.</p>
                </div>
            </div>

            <!-- Galeri Masonry Ramah Anak -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-4 md:gap-6 h-auto md:h-[600px]" id="galeri">
                <!-- Image 1 -->
                <div
                    class="md:col-span-2 md:row-span-2 relative rounded-[3rem] overflow-hidden h-[250px] md:h-full border-4 border-rose-100 shadow-sm group">
                    <img src="{{ asset('images/education/indoor-playground.png') }}"
                        class="w-full h-full object-cover group-hover:scale-105 transition duration-700">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-slate-900/70 to-transparent flex items-end p-8 opacity-0 group-hover:opacity-100 transition">
                        <h4 class="text-2xl font-bold text-white font-heading">Indoor Playground</h4>
                    </div>
                </div>
                <!-- Image 2 -->
                <div
                    class="md:col-span-1 md:row-span-1 relative rounded-[2rem] md:rounded-[3rem] overflow-hidden h-[200px] md:h-full border-4 border-amber-100 shadow-sm group">
                    <img src="{{ asset('images/education/art-studio.png') }}"
                        class="w-full h-full object-cover group-hover:scale-105 transition duration-700">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-slate-900/70 to-transparent flex items-end p-6 opacity-0 group-hover:opacity-100 transition">
                        <h4 class="text-lg font-bold text-white font-heading">Creative Art Studio</h4>
                    </div>
                </div>
                <!-- Image 3 -->
                <div
                    class="md:col-span-1 md:row-span-1 relative rounded-[2rem] md:rounded-[3rem] overflow-hidden h-[200px] md:h-full border-4 border-sky-100 shadow-sm group">
                    <img src="{{ asset('images/education/mini-library.png') }}"
                        class="w-full h-full object-cover group-hover:scale-105 transition duration-700">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-slate-900/70 to-transparent flex items-end p-6 opacity-0 group-hover:opacity-100 transition">
                        <h4 class="text-lg font-bold text-white font-heading">Reading Corner</h4>
                    </div>
                </div>
                <!-- Image 4 -->
                <div
                    class="md:col-span-2 relative rounded-[3rem] overflow-hidden h-[200px] md:h-full border-4 border-teal-100 shadow-sm group">
                    <img src="{{ asset('images/education/outdoor-garden.png') }}"
                        class="w-full h-full object-cover group-hover:scale-105 transition duration-700">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-slate-900/70 to-transparent flex items-end p-8 opacity-0 group-hover:opacity-100 transition">
                        <h4 class="text-xl font-bold text-white font-heading">Mini Garden & Outdoor Play</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 7. ARTIKEL & KEGIATAN -->
    <section id="berita" class="py-20 lg:py-32 px-6 bg-white border-t border-slate-100">
        <div class="max-w-[85rem] mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-5xl font-bold text-slate-900 font-heading tracking-tight mb-4">Keseruan di
                    Sekolah.</h2>
                <p class="text-[10px] font-bold text-sky-500 uppercase tracking-widest">Update Berita & Kegiatan
                    Parenting</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Blog 1 -->
                <article
                    class="bg-slate-50 rounded-[2.5rem] p-4 border border-slate-100 hover:shadow-xl hover:shadow-rose-100 transition group">
                    <div class="h-48 overflow-hidden rounded-[2rem] mb-5 relative">
                        <img src="{{ asset('images/education/cooking-class.png') }}"
                            class="w-full h-full object-cover group-hover:scale-105 transition duration-700">
                        <div
                            class="absolute top-4 left-4 bg-white/90 backdrop-blur px-3 py-1 rounded-full text-[9px] font-bold text-rose-500 uppercase tracking-widest">
                            Kegiatan</div>
                    </div>
                    <div class="px-2">
                        <h4
                            class="text-lg font-bold text-slate-800 font-heading mb-3 leading-snug group-hover:text-rose-500 transition">
                            Keseruan "Little Chef Day" Bersama Bunda & Ayah</h4>
                        <p class="text-slate-500 text-xs leading-relaxed mb-4 line-clamp-2">Mengasah motorik halus
                            anak-anak melalui kegiatan menghias cupcake bersama orang tua di akhir pekan...</p>
                    </div>
                </article>
                <!-- Blog 2 -->
                <article
                    class="bg-slate-50 rounded-[2.5rem] p-4 border border-slate-100 hover:shadow-xl hover:shadow-amber-100 transition group">
                    <div class="h-48 overflow-hidden rounded-[2rem] mb-5 relative">
                        <img src="{{ asset('images/education/parenting.png') }}"
                            class="w-full h-full object-cover group-hover:scale-105 transition duration-700">
                        <div
                            class="absolute top-4 left-4 bg-white/90 backdrop-blur px-3 py-1 rounded-full text-[9px] font-bold text-amber-500 uppercase tracking-widest">
                            Parenting</div>
                    </div>
                    <div class="px-2">
                        <h4
                            class="text-lg font-bold text-slate-800 font-heading mb-3 leading-snug group-hover:text-amber-500 transition">
                            Cara Mengatasi Tantrum Pada Anak Usia 3 Tahun</h4>
                        <p class="text-slate-500 text-xs leading-relaxed mb-4 line-clamp-2">Tips praktis dari psikolog
                            anak kami untuk menenangkan si kecil tanpa harus meninggikan suara...</p>
                    </div>
                </article>
                <!-- Blog 3 -->
                <article
                    class="bg-slate-50 rounded-[2.5rem] p-4 border border-slate-100 hover:shadow-xl hover:shadow-sky-100 transition group">
                    <div class="h-48 overflow-hidden rounded-[2rem] mb-5 relative">
                        <img src="{{ asset('images/education/field-trip.png') }}"
                            class="w-full h-full object-cover group-hover:scale-105 transition duration-700">
                        <div
                            class="absolute top-4 left-4 bg-white/90 backdrop-blur px-3 py-1 rounded-full text-[9px] font-bold text-sky-500 uppercase tracking-widest">
                            Field Trip</div>
                    </div>
                    <div class="px-2">
                        <h4
                            class="text-lg font-bold text-slate-800 font-heading mb-3 leading-snug group-hover:text-sky-500 transition">
                            Kunjungan Edukatif ke Pemadam Kebakaran Kota Batam</h4>
                        <p class="text-slate-500 text-xs leading-relaxed mb-4 line-clamp-2">Siswa-siswi TK B belajar
                            profesi pemadam kebakaran dengan riang gembira. Lihat keseruan mereka...</p>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- 8. KONTAK & LOKASI -->
    <section id="kontak" class="py-20 lg:py-32 px-6 bg-slate-900 rounded-t-[3rem] lg:rounded-t-[5rem] text-white">
        <div class="max-w-[85rem] mx-auto">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl md:text-5xl font-bold font-heading mb-6 text-white">Kunjungi Rumah Kedua Si
                        Kecil.</h2>
                    <p class="text-slate-400 mb-10 text-sm leading-relaxed">Pintu kami selalu terbuka untuk Ayah &
                        Bunda yang ingin melihat langsung fasilitas dan proses belajar mengajar di Little Bloom.</p>

                    <div class="space-y-6 mb-10">
                        <div class="flex items-start gap-4">
                            <div
                                class="w-12 h-12 bg-white/10 rounded-full flex items-center justify-center text-amber-400 shrink-0">
                                <i class="fa-solid fa-map-location-dot"></i>
                            </div>
                            <div>
                                <h5 class="font-bold mb-1 text-white">Lokasi Kami</h5>
                                <p class="text-sm text-slate-400">Jl. Taman Ceria No. 12, Kompleks EduHub<br>Batam
                                    Centre, Kepri</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div
                                class="w-12 h-12 bg-white/10 rounded-full flex items-center justify-center text-rose-400 shrink-0">
                                <i class="fa-brands fa-whatsapp text-xl"></i>
                            </div>
                            <div>
                                <h5 class="font-bold mb-1 text-white">Telepon / WA Admin</h5>
                                <p class="text-sm text-slate-400">+62 812 3344 5566 (Bunda Tari)</p>
                            </div>
                        </div>
                    </div>

                    <button
                        class="bg-amber-400 text-slate-900 px-8 py-4 rounded-full font-bold text-sm hover:bg-amber-300 transition w-full sm:w-auto text-center shadow-lg shadow-amber-400/20">
                        Chat Admin via WhatsApp
                    </button>
                </div>

                <!-- Google Maps Embed -->
                <div class="rounded-[3rem] overflow-hidden h-[300px] md:h-[450px] border-8 border-white/10">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127632.40428514869!2d103.95757754326503!3d1.0827255152862024!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d98d41ba3c260f%3A0x6b69d9c223c2a632!2sBatam%2C%20Batam%20City%2C%20Riau%20Islands!5e0!3m2!1sen!2sid!4v1715155500000!5m2!1sen!2sid"
                        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </div>
    </section>

    <!-- 9. FOOTER -->
    <footer class="bg-slate-950 pt-16 pb-8 px-6 border-t border-slate-800">
        <div class="max-w-[85rem] mx-auto flex flex-col md:flex-row justify-between items-center gap-8">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 bg-rose-500 rounded-full flex items-center justify-center text-white">
                    <i class="fa-solid fa-shapes text-sm"></i>
                </div>
                <span class="text-2xl font-bold font-heading text-white">Little Bloom</span>
            </div>

            <div class="flex gap-6 text-[10px] font-bold text-slate-400 uppercase tracking-widest">
                <a href="#" class="hover:text-rose-400 transition">Instagram</a>
                <a href="#" class="hover:text-sky-400 transition">Facebook</a>
                <a href="#" class="hover:text-amber-400 transition">Youtube</a>
            </div>

            <p class="text-[9px] font-bold text-slate-500 uppercase tracking-[0.2em]">
                &copy; 2026 Elijabah International Group. Hak Cipta Dilindungi.
            </p>
        </div>
    </footer>

</body>

</html>
