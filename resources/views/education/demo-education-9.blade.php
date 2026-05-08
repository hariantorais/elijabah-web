<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bumi Pertiwi | Sekolah Alam & Eco-School</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <!-- Google Fonts -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500&family=Nunito:wght@300;400;600;700;800&display=swap');

        body {
            font-family: 'Nunito', sans-serif;
            background-color: #F8F5F0;
            /* Warm Sand */
            color: #2C3D30;
            /* Forest Green Text */
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        .font-serif {
            font-family: 'Lora', serif;
        }

        /* Custom Colors */
        .text-forest {
            color: #2C3D30;
        }

        .bg-forest {
            background-color: #2C3D30;
        }

        .text-terracotta {
            color: #C07F67;
        }

        .bg-terracotta {
            background-color: #C07F67;
        }

        .text-sage {
            color: #8B9D83;
        }

        .bg-sage {
            background-color: #8B9D83;
        }

        /* Organic Shapes */
        .leaf-shape {
            border-radius: 60% 40% 30% 70% / 60% 30% 70% 40%;
        }

        .stone-shape {
            border-radius: 40% 60% 70% 30% / 40% 50% 60% 50%;
        }

        .card-organic {
            border-radius: 2rem 4rem 2rem 0;
        }

        /* Subtle Noise Texture for earthy feel */
        .bg-texture {
            background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noiseFilter'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.8' numOctaves='3' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noiseFilter)' opacity='0.04'/%3E%3C/svg%3E");
        }
    </style>
</head>

<body class="antialiased bg-texture" x-data="{ mobileMenu: false }">

    <!-- 1. ORGANIC FLOATING NAVIGATION -->
    <nav class="fixed top-6 w-full z-[100] px-4 transition-all duration-300">
        <div
            class="max-w-6xl mx-auto bg-[#F8F5F0]/90 backdrop-blur-md border border-[#8B9D83]/30 rounded-full px-6 py-3 flex justify-between items-center shadow-lg shadow-[#2C3D30]/5">

            <!-- Logo -->
            <div class="flex items-center gap-3">
                <div
                    class="w-10 h-10 bg-sage rounded-full flex items-center justify-center text-white leaf-shape shadow-sm">
                    <i class="fa-solid fa-leaf"></i>
                </div>
                <span class="text-xl font-bold font-serif text-forest tracking-tight">Bumi Pertiwi</span>
            </div>

            <!-- Desktop Menu -->
            <div class="hidden md:flex items-center gap-8">
                <a href="#filosofi"
                    class="text-sm font-bold text-forest hover:text-terracotta transition-colors">Filosofi</a>
                <a href="#program"
                    class="text-sm font-bold text-forest hover:text-terracotta transition-colors">Program</a>
                <a href="#galeri"
                    class="text-sm font-bold text-forest hover:text-terracotta transition-colors">Jelajah</a>
                <a href="#berita" class="text-sm font-bold text-forest hover:text-terracotta transition-colors">Kabar
                    Alam</a>
            </div>

            <!-- CTA Desktop -->
            <div class="hidden md:block">
                <a href="#kontak"
                    class="bg-terracotta text-white px-6 py-2.5 rounded-full font-bold text-sm hover:bg-[#a66a55] transition-colors shadow-md">
                    Trial Class
                </a>
            </div>

            <!-- Mobile Toggle -->
            <button @click="mobileMenu = !mobileMenu" class="md:hidden text-forest text-2xl focus:outline-none">
                <i :class="mobileMenu ? 'fa-solid fa-xmark' : 'fa-solid fa-bars'"></i>
            </button>
        </div>

        <!-- Mobile Menu Overlay -->
        <div x-show="mobileMenu" x-collapse x-cloak
            class="md:hidden mt-4 mx-4 bg-[#F8F5F0] border border-[#8B9D83]/30 rounded-3xl shadow-xl overflow-hidden">
            <div class="px-6 py-6 flex flex-col gap-4 text-center">
                <a href="#filosofi" @click="mobileMenu = false"
                    class="text-lg font-serif font-bold text-forest hover:text-terracotta border-b border-[#8B9D83]/20 pb-2">Filosofi
                    Kami</a>
                <a href="#program" @click="mobileMenu = false"
                    class="text-lg font-serif font-bold text-forest hover:text-terracotta border-b border-[#8B9D83]/20 pb-2">Program
                    Belajar</a>
                <a href="#galeri" @click="mobileMenu = false"
                    class="text-lg font-serif font-bold text-forest hover:text-terracotta border-b border-[#8B9D83]/20 pb-2">Jelajah
                    Alam</a>
                <a href="#berita" @click="mobileMenu = false"
                    class="text-lg font-serif font-bold text-forest hover:text-terracotta border-b border-[#8B9D83]/20 pb-2">Kabar
                    Alam</a>
                <button class="w-full bg-terracotta text-white py-3 rounded-full font-bold mt-2 shadow-md">Daftar Trial
                    Class</button>
            </div>
        </div>
    </nav>

    <!-- 2. EARTHY HERO SECTION -->
    <header class="pt-32 lg:pt-40 pb-20 px-6 relative overflow-hidden">
        <!-- Decor Elements -->
        <div class="absolute top-20 right-10 text-sage opacity-20 text-6xl rotate-45"><i class="fa-solid fa-leaf"></i>
        </div>
        <div class="absolute bottom-10 left-10 text-terracotta opacity-10 text-8xl -rotate-12"><i
                class="fa-solid fa-sun"></i></div>

        <div class="max-w-7xl mx-auto grid lg:grid-cols-2 gap-12 items-center relative z-10">
            <!-- Text Content -->
            <div class="text-center lg:text-left order-2 lg:order-1">
                <div class="inline-flex items-center gap-2 mb-6">
                    <span class="w-8 h-px bg-terracotta"></span>
                    <span class="text-terracotta text-xs font-bold uppercase tracking-widest">Pendidikan Berbasis
                        Alam</span>
                </div>
                <h1 class="text-5xl md:text-6xl lg:text-[5rem] font-serif font-bold text-forest leading-[1.1] mb-6">
                    Ruang Kelas Kami <br> Adalah <span class="italic text-sage">Alam Semesta.</span>
                </h1>
                <p class="text-lg text-forest/70 font-medium leading-relaxed mb-10 max-w-lg mx-auto lg:mx-0">
                    Membangun kecerdasan, karakter, dan empati anak dengan menjadikan alam sebagai guru terbaik. Bebas
                    bereksplorasi, bebas berkreasi.
                </p>
                <div class="flex flex-col sm:flex-row justify-center lg:justify-start gap-4">
                    <button
                        class="bg-forest text-white px-8 py-4 rounded-full font-bold shadow-lg hover:bg-[#1f2b22] transition-colors">
                        Mulai Petualangan
                    </button>
                    <button
                        class="bg-transparent border border-sage text-forest px-8 py-4 rounded-full font-bold hover:bg-sage/10 transition-colors flex items-center justify-center gap-2">
                        <i class="fa-solid fa-seedling text-sage"></i> Filosofi Kami
                    </button>
                </div>
            </div>

            <!-- Image Organic Mask -->
            <div class="order-1 lg:order-2 flex justify-center lg:justify-end">
                <div
                    class="relative w-[300px] h-[400px] md:w-[450px] md:h-[550px] leaf-shape overflow-hidden border-8 border-white shadow-xl">
                    <img src="https://placehold.co/800x1000/8B9D83/ffffff?text=Anak+Bermain+Lumpur"
                        class="w-full h-full object-cover" alt="Anak Bermain di Alam">
                </div>
                <!-- Floating Card -->
                <div
                    class="absolute bottom-10 lg:bottom-20 left-0 lg:left-10 bg-white/90 backdrop-blur p-5 rounded-3xl shadow-xl flex items-center gap-4">
                    <div
                        class="w-12 h-12 bg-terracotta/20 text-terracotta rounded-full flex items-center justify-center text-xl">
                        <i class="fa-solid fa-tree"></i>
                    </div>
                    <div>
                        <h4 class="font-serif font-bold text-forest text-lg">2 Hektar</h4>
                        <p class="text-xs font-bold text-forest/60">Area Hijau Terbuka</p>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- 3. FILOSOFI (ORGANIC CARDS) -->
    <section id="filosofi" class="py-20 lg:py-32 px-6 bg-sage/10">
        <div class="max-w-7xl mx-auto">
            <div class="text-center max-w-2xl mx-auto mb-16">
                <h2 class="text-4xl lg:text-5xl font-serif font-bold text-forest mb-4">Mengakar Kuat, Tumbuh Hebat.</h2>
                <p class="text-forest/70 text-lg">Kami percaya anak-anak belajar paling optimal saat mereka terlibat
                    langsung, kotor, dan terhubung dengan lingkungan di sekitarnya.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Filosofi 1 -->
                <div
                    class="bg-white p-8 card-organic shadow-sm hover:shadow-lg transition-shadow border border-sage/20">
                    <div
                        class="w-14 h-14 bg-sage/20 text-sage rounded-full flex items-center justify-center text-2xl mb-6">
                        <i class="fa-solid fa-mountain-sun"></i>
                    </div>
                    <h3 class="text-xl font-serif font-bold text-forest mb-3">Tanpa Sekat Dinding</h3>
                    <p class="text-forest/70 text-sm leading-relaxed">70% aktivitas belajar mengajar dilakukan di luar
                        ruangan. Menghirup udara segar dan belajar dari fenomena alam nyata.</p>
                </div>
                <!-- Filosofi 2 -->
                <div class="bg-forest p-8 card-organic shadow-lg transform md:-translate-y-6">
                    <div
                        class="w-14 h-14 bg-white/10 text-white rounded-full flex items-center justify-center text-2xl mb-6">
                        <i class="fa-solid fa-hand-holding-heart"></i>
                    </div>
                    <h3 class="text-xl font-serif font-bold text-white mb-3">Pendidikan Karakter</h3>
                    <p class="text-white/80 text-sm leading-relaxed">Menanamkan empati, keberanian mengambil risiko
                        (risk-taking), dan tanggung jawab lingkungan sejak usia dini.</p>
                </div>
                <!-- Filosofi 3 -->
                <div
                    class="bg-white p-8 card-organic shadow-sm hover:shadow-lg transition-shadow border border-terracotta/20">
                    <div
                        class="w-14 h-14 bg-terracotta/20 text-terracotta rounded-full flex items-center justify-center text-2xl mb-6">
                        <i class="fa-solid fa-magnifying-glass-chart"></i>
                    </div>
                    <h3 class="text-xl font-serif font-bold text-forest mb-3">Project-Based Learning</h3>
                    <p class="text-forest/70 text-sm leading-relaxed">Mata pelajaran dilebur dalam proyek nyata seperti
                        berkebun, membuat kompos, hingga wirausaha pasar alam.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. PROGRAM / JENJANG PENDIDIKAN -->
    <section id="program" class="py-20 lg:py-32 px-6">
        <div class="max-w-7xl mx-auto">
            <div class="flex flex-col md:flex-row justify-between items-end mb-16 gap-6">
                <div>
                    <div class="inline-flex items-center gap-2 mb-4">
                        <span class="w-6 h-px bg-sage"></span>
                        <span class="text-sage text-xs font-bold uppercase tracking-widest">Jenjang Pendidikan</span>
                    </div>
                    <h2 class="text-4xl lg:text-5xl font-serif font-bold text-forest">Tumbuh Bersama Kami.</h2>
                </div>
            </div>

            <div class="grid lg:grid-cols-3 gap-8">
                <!-- Program TK -->
                <div
                    class="group relative rounded-[3rem] overflow-hidden bg-white shadow-md hover:shadow-xl transition-all">
                    <div class="h-64 overflow-hidden">
                        <img src="https://placehold.co/600x400/8B9D83/ffffff?text=Taman+Kanak-Kanak"
                            class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-serif font-bold text-forest mb-2">Kelompok Bermain & TK</h3>
                        <span class="text-terracotta font-bold text-sm mb-4 block">Usia 3 - 6 Tahun</span>
                        <p class="text-forest/70 text-sm leading-relaxed mb-6">Fokus pada stimulasi sensori, motorik,
                            dan sosialisasi melalui permainan alam dan eksplorasi lingkungan sekitar.</p>
                        <a href="#"
                            class="inline-flex items-center gap-2 text-forest font-bold hover:text-sage transition-colors">
                            Lihat Kurikulum TK <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Program SD -->
                <div
                    class="group relative rounded-[3rem] overflow-hidden bg-white shadow-md hover:shadow-xl transition-all">
                    <div class="h-64 overflow-hidden">
                        <img src="https://placehold.co/600x400/C07F67/ffffff?text=Sekolah+Dasar"
                            class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-serif font-bold text-forest mb-2">Sekolah Dasar (SD)</h3>
                        <span class="text-terracotta font-bold text-sm mb-4 block">Usia 7 - 12 Tahun</span>
                        <p class="text-forest/70 text-sm leading-relaxed mb-6">Pembelajaran tematik integratif. Siswa
                            belajar matematika, sains, dan bahasa langsung dari alam melalui observasi.</p>
                        <a href="#"
                            class="inline-flex items-center gap-2 text-forest font-bold hover:text-sage transition-colors">
                            Lihat Kurikulum SD <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Program SMP -->
                <div
                    class="group relative rounded-[3rem] overflow-hidden bg-white shadow-md hover:shadow-xl transition-all">
                    <div class="h-64 overflow-hidden">
                        <img src="https://placehold.co/600x400/2C3D30/ffffff?text=Sekolah+Menengah"
                            class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-serif font-bold text-forest mb-2">Sekolah Menengah (SMP)</h3>
                        <span class="text-terracotta font-bold text-sm mb-4 block">Usia 13 - 15 Tahun</span>
                        <p class="text-forest/70 text-sm leading-relaxed mb-6">Fokus pada kepemimpinan (leadership),
                            kemandirian (survival skill), dan wirausaha (green business).</p>
                        <a href="#"
                            class="inline-flex items-center gap-2 text-forest font-bold hover:text-sage transition-colors">
                            Lihat Kurikulum SMP <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. GALERI KEGIATAN (ASYMMETRICAL ORGANIC GRID) -->
    <section id="galeri" class="py-20 lg:py-32 px-6 bg-forest text-[#F8F5F0]">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16">
                <i class="fa-solid fa-campground text-4xl text-terracotta mb-4"></i>
                <h2 class="text-4xl lg:text-5xl font-serif font-bold mb-4">Jelajah Jejak Alam.</h2>
                <p class="text-white/70 text-lg">Dokumentasi momen-momen magis saat anak-anak terhubung dengan alam.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-4 gap-6 h-auto md:h-[600px]">
                <div
                    class="md:col-span-2 md:row-span-2 rounded-[3rem] md:rounded-[4rem] rounded-br-none overflow-hidden group">
                    <img src="https://placehold.co/800x800/8B9D83/ffffff?text=Farming"
                        class="w-full h-full object-cover group-hover:scale-105 transition duration-1000">
                </div>
                <div class="md:col-span-1 rounded-[3rem] rounded-tl-none overflow-hidden h-[250px] md:h-auto">
                    <img src="https://placehold.co/400x400/C07F67/ffffff?text=Trekking"
                        class="w-full h-full object-cover group-hover:scale-105 transition duration-1000">
                </div>
                <div class="md:col-span-1 rounded-[3rem] overflow-hidden h-[250px] md:h-auto">
                    <img src="https://placehold.co/400x400/2C3D30/ffffff?text=Campfire"
                        class="w-full h-full object-cover group-hover:scale-105 transition duration-1000">
                </div>
                <div class="md:col-span-2 rounded-[3rem] rounded-tr-none overflow-hidden h-[250px] md:h-auto">
                    <img src="https://placehold.co/800x400/8B9D83/ffffff?text=Outbound+Kids"
                        class="w-full h-full object-cover group-hover:scale-105 transition duration-1000">
                </div>
            </div>

            <div class="text-center mt-12">
                <button
                    class="bg-transparent border-2 border-[#F8F5F0] text-[#F8F5F0] px-8 py-3 rounded-full font-bold hover:bg-[#F8F5F0] hover:text-forest transition-colors">
                    Lihat Galeri Lengkap
                </button>
            </div>
        </div>
    </section>

    <!-- 6. KABAR ALAM (BERITA / JURNAL) -->
    <section id="berita" class="py-20 lg:py-32 px-6">
        <div class="max-w-7xl mx-auto">
            <div class="flex flex-col md:flex-row justify-between items-start md:items-end mb-16 gap-6">
                <div>
                    <h2 class="text-4xl font-serif font-bold text-forest mb-2">Kabar Bumi.</h2>
                    <p class="text-forest/70">Artikel parenting, lingkungan, dan catatan kegiatan siswa.</p>
                </div>
                <a href="#"
                    class="font-bold text-terracotta hover:text-[#a66a55] border-b-2 border-terracotta pb-1 transition-colors">Jelajahi
                    Jurnal</a>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <!-- Jurnal 1 -->
                <article class="group cursor-pointer">
                    <div class="overflow-hidden rounded-[2.5rem] mb-6 relative">
                        <img src="https://placehold.co/600x400/8B9D83/ffffff?text=Panen+Sayur"
                            class="w-full h-64 object-cover group-hover:scale-105 transition duration-700">
                        <div
                            class="absolute top-4 left-4 bg-white/90 backdrop-blur px-4 py-1.5 rounded-full text-xs font-bold text-forest">
                            Kegiatan</div>
                    </div>
                    <span class="text-terracotta text-sm font-bold mb-2 block">08 Mei 2026</span>
                    <h4
                        class="text-2xl font-serif font-bold text-forest mb-3 leading-snug group-hover:text-terracotta transition">
                        Panen Raya Kebun Organik Bersama Siswa SD Bumi Pertiwi</h4>
                    <p class="text-forest/70 text-sm leading-relaxed line-clamp-2">Mengajarkan anak-anak darimana
                        makanan mereka berasal, dari menabur benih hingga menikmati hasil panen secara bersama-sama...
                    </p>
                </article>

                <!-- Jurnal 2 -->
                <article class="group cursor-pointer">
                    <div class="overflow-hidden rounded-[2.5rem] mb-6 relative">
                        <img src="https://placehold.co/600x400/C07F67/ffffff?text=Parenting"
                            class="w-full h-64 object-cover group-hover:scale-105 transition duration-700">
                        <div
                            class="absolute top-4 left-4 bg-white/90 backdrop-blur px-4 py-1.5 rounded-full text-xs font-bold text-forest">
                            Parenting</div>
                    </div>
                    <span class="text-terracotta text-sm font-bold mb-2 block">02 Mei 2026</span>
                    <h4
                        class="text-2xl font-serif font-bold text-forest mb-3 leading-snug group-hover:text-terracotta transition">
                        Mengapa Anak Perlu Bermain Lumpur? Penjelasan dari Sudut Psikologi</h4>
                    <p class="text-forest/70 text-sm leading-relaxed line-clamp-2">Banyak orang tua khawatir anaknya
                        kotor, padahal bermain di alam memiliki manfaat luar biasa untuk kekebalan tubuh dan motorik
                        anak...</p>
                </article>

                <!-- Jurnal 3 -->
                <article class="group cursor-pointer">
                    <div class="overflow-hidden rounded-[2.5rem] mb-6 relative">
                        <img src="https://placehold.co/600x400/2C3D30/ffffff?text=Zero+Waste"
                            class="w-full h-64 object-cover group-hover:scale-105 transition duration-700">
                        <div
                            class="absolute top-4 left-4 bg-white/90 backdrop-blur px-4 py-1.5 rounded-full text-xs font-bold text-forest">
                            Lingkungan</div>
                    </div>
                    <span class="text-terracotta text-sm font-bold mb-2 block">28 Apr 2026</span>
                    <h4
                        class="text-2xl font-serif font-bold text-forest mb-3 leading-snug group-hover:text-terracotta transition">
                        Penerapan Zero Waste di Lingkungan Sekolah Bumi Pertiwi</h4>
                    <p class="text-forest/70 text-sm leading-relaxed line-clamp-2">Mulai dari kebijakan tanpa plastik
                        sekali pakai hingga pengelolaan kompos dari sisa makanan katering sekolah...</p>
                </article>
            </div>
        </div>
    </section>

    <!-- 7. CONTACT & MAP -->
    <section id="kontak" class="py-20 lg:py-32 px-6 bg-sage/10">
        <div
            class="max-w-7xl mx-auto bg-white rounded-[3rem] overflow-hidden shadow-lg flex flex-col lg:flex-row border border-sage/20">
            <!-- Text Info -->
            <div class="lg:w-1/2 p-10 lg:p-16 flex flex-col justify-center">
                <h2 class="text-3xl lg:text-4xl font-serif font-bold text-forest mb-6">Mari Bergabung dengan Keluarga
                    Bumi.</h2>
                <p class="text-forest/70 mb-10 leading-relaxed">Daftarkan anak Anda untuk mengikuti <strong>Free Trial
                        Class</strong> dan rasakan langsung pengalaman belajar di alam terbuka.</p>

                <div class="space-y-6 mb-10">
                    <div class="flex items-start gap-4">
                        <div
                            class="w-10 h-10 bg-sage/20 rounded-full flex items-center justify-center text-sage shrink-0">
                            <i class="fa-solid fa-map-pin"></i></div>
                        <div>
                            <h5 class="font-bold text-forest mb-1">Lokasi Kampus Alam</h5>
                            <p class="text-sm text-forest/70">Kawasan Hijau Sekupang<br>Batam, Kepulauan Riau 29422</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div
                            class="w-10 h-10 bg-terracotta/20 rounded-full flex items-center justify-center text-terracotta shrink-0">
                            <i class="fa-brands fa-whatsapp text-lg"></i></div>
                        <div>
                            <h5 class="font-bold text-forest mb-1">WhatsApp Humas</h5>
                            <p class="text-sm text-forest/70">+62 811 2222 3333</p>
                        </div>
                    </div>
                </div>

                <button
                    class="bg-terracotta text-white px-8 py-4 rounded-full font-bold hover:bg-[#a66a55] transition-colors w-fit shadow-md">
                    Hubungi Kami via WA
                </button>
            </div>

            <!-- Map Map -->
            <div class="lg:w-1/2 h-[400px] lg:h-auto">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127632.40428514869!2d103.95757754326503!3d1.0827255152862024!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d98d41ba3c260f%3A0x6b69d9c223c2a632!2sBatam%2C%20Batam%20City%2C%20Riau%20Islands!5e0!3m2!1sen!2sid!4v1715155500000!5m2!1sen!2sid"
                    width="100%" height="100%"
                    style="border:0; filter: sepia(40%) hue-rotate(60deg) saturate(80%);" allowfullscreen=""
                    loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </section>

    <!-- 8. ORGANIC FOOTER -->
    <footer class="bg-forest pt-20 pb-10 px-6 text-[#F8F5F0]">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-16">

                <div class="lg:col-span-1">
                    <div class="flex items-center gap-3 mb-6">
                        <div
                            class="w-10 h-10 bg-sage rounded-full flex items-center justify-center text-white leaf-shape">
                            <i class="fa-solid fa-leaf"></i>
                        </div>
                        <span class="text-2xl font-bold font-serif tracking-tight">Bumi Pertiwi</span>
                    </div>
                    <p class="text-white/60 text-sm leading-relaxed mb-6">Sekolah alam pertama di Batam yang mengusung
                        konsep ramah anak, ramah lingkungan, dan ramah masa depan.</p>
                    <div class="flex gap-4">
                        <a href="#"
                            class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center text-white hover:bg-terracotta transition-colors"><i
                                class="fa-brands fa-instagram"></i></a>
                        <a href="#"
                            class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center text-white hover:bg-terracotta transition-colors"><i
                                class="fa-brands fa-youtube"></i></a>
                        <a href="#"
                            class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center text-white hover:bg-terracotta transition-colors"><i
                                class="fa-brands fa-facebook-f"></i></a>
                    </div>
                </div>

                <div>
                    <h4 class="font-bold text-sage uppercase tracking-widest text-xs mb-6">Pintasan</h4>
                    <ul class="space-y-4 text-sm text-white/60">
                        <li><a href="#" class="hover:text-white transition-colors">Filosofi & Pendiri</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Program Pendidikan</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Jadwal Trial Class</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Karir Pendidik</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="font-bold text-sage uppercase tracking-widest text-xs mb-6">Komunitas</h4>
                    <ul class="space-y-4 text-sm text-white/60">
                        <li><a href="#" class="hover:text-white transition-colors">Komite Orang Tua</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Bumi Pertiwi Farm</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Donasi Bibit & Pohon</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="font-bold text-sage uppercase tracking-widest text-xs mb-6">Jam Operasional</h4>
                    <ul class="space-y-4 text-sm text-white/60">
                        <li>Senin - Jumat: 07:30 - 15:00</li>
                        <li>Sabtu: 08:00 - 12:00 (Ekskul)</li>
                        <li>Minggu & Libur Nasional: Tutup</li>
                    </ul>
                </div>

            </div>

            <div
                class="border-t border-white/10 pt-8 flex flex-col md:flex-row justify-between items-center gap-4 text-xs text-white/50">
                <p>&copy; 2026 Elijabah International Group. Membangun Generasi, Merawat Bumi.</p>
                <div class="flex gap-6">
                    <a href="#" class="hover:text-white transition-colors">Kebijakan Privasi</a>
                    <a href="#" class="hover:text-white transition-colors">Aturan Sekolah</a>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>
