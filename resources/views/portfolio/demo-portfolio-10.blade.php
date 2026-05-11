<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ust. Ahmad Fadhil | Mutawwif & Pembimbing Umrah</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <!-- Google Fonts -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Cinzel:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@300;400;500;600;700&family=Amiri:ital@0;1&display=swap');

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #FAFAFA;
            color: #1f2937;
        }

        h1,
        h2,
        h3,
        h4,
        .font-cinzel {
            font-family: 'Cinzel', serif;
        }

        .font-arabic {
            font-family: 'Amiri', serif;
        }

        /* Haramain Palette */
        .text-mecca-gold {
            color: #D4AF37;
        }

        .bg-mecca-gold {
            background-color: #D4AF37;
        }

        .border-mecca-gold {
            border-color: #D4AF37;
        }

        .text-nabawi-green {
            color: #064E3B;
        }

        .bg-nabawi-green {
            background-color: #064E3B;
        }

        /* Soft Elements */
        .glass-card {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(212, 175, 55, 0.2);
        }

        .shadow-spiritual {
            box-shadow: 0 20px 40px -15px rgba(6, 78, 59, 0.08);
        }

        /* Subtle Pattern Background */
        .islamic-pattern {
            background-color: #064E3B;
            background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23d4af37' fill-opacity='0.1'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
        }
    </style>
</head>

<body class="antialiased selection:bg-[#064E3B] selection:text-white" x-data="{ mobileMenu: false, scrolled: false }"
    @scroll.window="scrolled = (window.pageYOffset > 50)">

    <!-- 1. NAVIGATION -->
    <nav :class="scrolled ? 'bg-white/95 backdrop-blur-md shadow-sm py-4' : 'bg-transparent py-6'"
        class="fixed top-0 w-full z-[100] transition-all duration-300">
        <div class="max-w-7xl mx-auto px-6 flex justify-between items-center">

            <!-- Logo -->
            <a href="#" class="flex items-center gap-3">
                <div
                    class="w-10 h-10 bg-nabawi-green rounded-full flex items-center justify-center text-mecca-gold border-2 border-mecca-gold">
                    <i class="fa-solid fa-kaaba text-sm"></i>
                </div>
                <div class="leading-none hidden sm:block">
                    <span class="text-lg font-cinzel font-bold text-nabawi-green uppercase tracking-wider">Ahmad
                        Fadhil</span>
                    <span class="text-[9px] font-bold text-mecca-gold tracking-[0.2em] uppercase block mt-1">Mutawwif &
                        Guide</span>
                </div>
            </a>

            <!-- Desktop Menu -->
            <div
                class="hidden md:flex items-center gap-8 text-[11px] font-bold uppercase tracking-widest text-nabawi-green">
                <a href="#about" class="hover:text-mecca-gold transition-colors">Profil</a>
                <a href="#services" class="hover:text-mecca-gold transition-colors">Layanan Bimbingan</a>
                <a href="#gallery" class="hover:text-mecca-gold transition-colors">Galeri Perjalanan</a>
                <a href="#testimonials" class="hover:text-mecca-gold transition-colors">Testimoni</a>
            </div>

            <!-- CTA Desktop -->
            <div class="hidden md:block">
                <a href="#contact"
                    class="bg-nabawi-green text-white px-6 py-2.5 rounded-full text-[10px] font-bold uppercase tracking-widest hover:bg-[#043326] transition-colors border border-nabawi-green">
                    Hubungi Mutawwif
                </a>
            </div>

            <!-- Mobile Toggle -->
            <button @click="mobileMenu = !mobileMenu" class="md:hidden text-nabawi-green text-2xl focus:outline-none">
                <i :class="mobileMenu ? 'fa-solid fa-xmark' : 'fa-solid fa-bars'"></i>
            </button>
        </div>

        <!-- Mobile Menu -->
        <div x-show="mobileMenu" x-collapse x-cloak
            class="md:hidden absolute top-full left-0 w-full bg-white border-t border-gray-100 shadow-lg">
            <div class="px-6 py-6 flex flex-col gap-4 text-center">
                <a href="#about" @click="mobileMenu = false"
                    class="text-sm font-bold text-nabawi-green uppercase tracking-widest border-b border-gray-50 pb-3">Profil</a>
                <a href="#services" @click="mobileMenu = false"
                    class="text-sm font-bold text-nabawi-green uppercase tracking-widest border-b border-gray-50 pb-3">Layanan
                    Bimbingan</a>
                <a href="#gallery" @click="mobileMenu = false"
                    class="text-sm font-bold text-nabawi-green uppercase tracking-widest border-b border-gray-50 pb-3">Galeri
                    Perjalanan</a>
                <a href="#contact" @click="mobileMenu = false"
                    class="bg-mecca-gold text-white py-3 rounded-full font-bold text-xs uppercase tracking-widest mt-2">Konsultasi
                    Umrah</a>
            </div>
        </div>
    </nav>

    <!-- 2. HERO SECTION -->
    <header class="relative pt-32 lg:pt-40 pb-20 px-6 min-h-[90vh] flex items-center">
        <!-- Background Image (Soft Mecca/Madinah) -->
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1565552643983-c405a6b0521e?q=80&w=1600&auto=format&fit=crop"
                class="w-full h-full object-cover opacity-[0.15] grayscale" alt="Masjidil Haram">
            <div class="absolute inset-0 bg-gradient-to-b from-white/80 via-white/95 to-[#FAFAFA]"></div>
        </div>

        <div class="max-w-7xl mx-auto grid lg:grid-cols-2 gap-12 items-center relative z-10 w-full">
            <div class="text-center lg:text-left">
                <!-- Bismillah Arabic -->
                <p class="font-arabic text-2xl md:text-3xl text-mecca-gold mb-6">بِسْمِ اللَّهِ الرَّحْمَنِ الرَّحِيم
                </p>

                <h1 class="text-4xl md:text-6xl font-cinzel font-bold text-nabawi-green leading-[1.1] mb-6">
                    Membimbing Perjalanan <br> Suci Anda dengan <br> <span class="text-mecca-gold italic">Ilmu &
                        Hati.</span>
                </h1>

                <p class="text-gray-600 text-lg md:text-xl font-light leading-relaxed mb-10 max-w-lg mx-auto lg:mx-0">
                    Menghadirkan pengalaman Umrah yang khusyuk, sesuai sunnah, dan penuh makna. Bersama merajut rindu di
                    Tanah Haramain.
                </p>

                <div class="flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-4">
                    <a href="#contact"
                        class="w-full sm:w-auto bg-nabawi-green text-white px-8 py-4 rounded-full font-bold text-xs uppercase tracking-widest hover:bg-[#043326] transition shadow-lg">
                        Jadwalkan Konsultasi
                    </a>
                    <a href="#services"
                        class="w-full sm:w-auto bg-white text-nabawi-green border border-gray-200 px-8 py-4 rounded-full font-bold text-xs uppercase tracking-widest hover:border-mecca-gold transition flex items-center justify-center gap-2">
                        <i class="fa-solid fa-book-quran text-mecca-gold"></i> Program Manasik
                    </a>
                </div>
            </div>

            <!-- Profile Picture with Subtle Arch Frame -->
            <div class="relative flex justify-center mt-10 lg:mt-0">
                <div
                    class="relative w-72 h-96 md:w-80 md:h-[28rem] rounded-t-[10rem] overflow-hidden border-4 border-white shadow-2xl p-2 bg-white">
                    <img src="{{ asset('images/user2.png') }}" alt="Ustadz Ahmad Fadhil"
                        class="w-full h-full object-cover rounded-t-[9rem] filter contrast-110">
                </div>
                <!-- Floating Badge -->
                <div
                    class="absolute -bottom-6 bg-white glass-card px-6 py-4 rounded-2xl shadow-spiritual flex items-center gap-4">
                    <div
                        class="w-12 h-12 bg-mecca-gold/10 rounded-full flex items-center justify-center text-mecca-gold text-2xl">
                        <i class="fa-solid fa-certificate"></i>
                    </div>
                    <div>
                        <p class="text-nabawi-green font-bold text-lg leading-none">Tersertifikasi</p>
                        <p class="text-gray-500 text-[10px] uppercase tracking-widest font-bold mt-1">Kemenag RI & BNSP
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- 3. PROFILE & EXPERIENCE -->
    <section id="about" class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid lg:grid-cols-12 gap-16 items-center">

                <div class="lg:col-span-5 order-2 lg:order-1">
                    <div class="grid grid-cols-2 gap-4">
                        <div class="bg-gray-50 p-6 rounded-2xl border border-gray-100 text-center">
                            <h4 class="text-3xl font-cinzel font-bold text-nabawi-green mb-1">10+</h4>
                            <p class="text-[10px] font-bold text-gray-500 uppercase tracking-widest">Tahun Berkhidmat
                            </p>
                        </div>
                        <div class="bg-gray-50 p-6 rounded-2xl border border-gray-100 text-center">
                            <h4 class="text-3xl font-cinzel font-bold text-nabawi-green mb-1">50+</h4>
                            <p class="text-[10px] font-bold text-gray-500 uppercase tracking-widest">Keberangkatan</p>
                        </div>
                        <div class="bg-gray-50 p-6 rounded-2xl border border-gray-100 text-center col-span-2">
                            <h4 class="text-3xl font-cinzel font-bold text-nabawi-green mb-1">2,000+</h4>
                            <p class="text-[10px] font-bold text-gray-500 uppercase tracking-widest">Jamaah Telah
                                Dibimbing</p>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-7 order-1 lg:order-2">
                    <h2 class="text-[10px] font-bold text-mecca-gold uppercase tracking-[0.3em] mb-4">Profil Mutawwif
                    </h2>
                    <h3 class="text-3xl md:text-4xl font-cinzel font-bold text-nabawi-green mb-6 leading-tight">
                        Pelayan Tamu Allah (Duyufurrahman).
                    </h3>
                    <div class="space-y-4 text-gray-600 font-light leading-relaxed">
                        <p>Alumnus Universitas Islam Madinah dengan spesialisasi Sejarah Islam (Sirah Nabawiyah).
                            Dedikasi saya adalah memastikan setiap jamaah tidak hanya menjalankan rukun secara sah,
                            tetapi juga memahami sejarah dan hikmah di balik setiap tempat yang diinjak di Tanah Suci.
                        </p>
                        <p>Bagi saya, menjadi Mutawwif bukanlah sekadar profesi pemandu wisata, melainkan tanggung jawab
                            spiritual untuk mengantarkan doa dan harapan jamaah di Baitullah.</p>
                    </div>
                    <div class="mt-8">
                        <img src="https://placehold.co/200x80/ffffff/d4af37?text=Ahmad+Fadhil" class="h-12"
                            alt="Signature">
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 4. SERVICES / EXPERTISE -->
    <section id="services" class="py-24 islamic-pattern text-white">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-[10px] font-bold text-mecca-gold uppercase tracking-[0.3em] mb-4">Ruang Lingkup Khidmat
                </h2>
                <h3 class="text-3xl md:text-4xl font-cinzel font-bold">Layanan Bimbingan Ibadah.</h3>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <!-- Service 1 -->
                <div
                    class="bg-white/10 backdrop-blur-md border border-white/20 p-8 rounded-2xl hover:bg-white/20 transition duration-300">
                    <div
                        class="w-14 h-14 bg-mecca-gold text-nabawi-green rounded-full flex items-center justify-center text-2xl mb-6 shadow-lg">
                        <i class="fa-solid fa-users"></i>
                    </div>
                    <h4 class="text-xl font-cinzel font-bold mb-4">Private Umrah Family</h4>
                    <p class="text-white/80 text-sm font-light leading-relaxed">
                        Bimbingan eksklusif untuk satu keluarga. Jadwal lebih fleksibel, *city tour* disesuaikan, dan
                        pendampingan personal sejak manasik hingga tawaf wada'.
                    </p>
                </div>

                <!-- Service 2 -->
                <div
                    class="bg-white/10 backdrop-blur-md border border-white/20 p-8 rounded-2xl hover:bg-white/20 transition duration-300">
                    <div
                        class="w-14 h-14 bg-mecca-gold text-nabawi-green rounded-full flex items-center justify-center text-2xl mb-6 shadow-lg">
                        <i class="fa-solid fa-mosque"></i>
                    </div>
                    <h4 class="text-xl font-cinzel font-bold mb-4">Kajian Sirah Nabawiyah</h4>
                    <p class="text-white/80 text-sm font-light leading-relaxed">
                        Pendalaman sejarah secara langsung di lokasi bersejarah (Jabal Nur, Jabal Uhud, Masjid Quba)
                        untuk meresapi perjuangan Rasulullah ﷺ.
                    </p>
                </div>

                <!-- Service 3 -->
                <div
                    class="bg-white/10 backdrop-blur-md border border-white/20 p-8 rounded-2xl hover:bg-white/20 transition duration-300">
                    <div
                        class="w-14 h-14 bg-mecca-gold text-nabawi-green rounded-full flex items-center justify-center text-2xl mb-6 shadow-lg">
                        <i class="fa-solid fa-plane-departure"></i>
                    </div>
                    <h4 class="text-xl font-cinzel font-bold mb-4">Tour Leader Agency</h4>
                    <p class="text-white/80 text-sm font-light leading-relaxed">
                        Bermitra dengan biro travel resmi (PPIU) sebagai pembimbing utama rombongan korporasi atau
                        instansi dengan standar layanan profesional (SOP).
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. GALLERY (MEMORIES OF HOLY LAND) -->
    <section id="gallery" class="py-24 bg-gray-50 border-y border-gray-100">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex flex-col md:flex-row justify-between items-end mb-12 gap-4">
                <div>
                    <h2 class="text-[10px] font-bold text-mecca-gold uppercase tracking-[0.3em] mb-4">Jejak Langkah
                    </h2>
                    <h3 class="text-3xl md:text-4xl font-cinzel font-bold text-nabawi-green">Galeri Haramain.</h3>
                </div>
                <a href="https://instagram.com" target="_blank"
                    class="text-sm font-bold text-nabawi-green flex items-center gap-2 hover:text-mecca-gold transition">
                    <i class="fa-brands fa-instagram text-xl"></i> Lihat Update di Instagram
                </a>
            </div>

            <!-- Simple Masonry/Grid -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="col-span-2 row-span-2 rounded-2xl overflow-hidden aspect-square relative group">
                    <img src="{{ asset('images/mekkah.png') }}"
                        class="w-full h-full object-cover group-hover:scale-105 transition duration-700">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-6">
                        <p class="text-white font-cinzel font-bold text-xl">Masjidil Haram, Makkah</p>
                    </div>
                </div>
                <div class="rounded-2xl overflow-hidden aspect-square relative group">
                    <img src="{{ asset('images/madinah.png') }}"
                        class="w-full h-full object-cover group-hover:scale-105 transition duration-700">
                </div>
                <div class="rounded-2xl overflow-hidden aspect-square relative group">
                    <img src="{{ asset('images/tawaf.png') }}"
                        class="w-full h-full object-cover group-hover:scale-105 transition duration-700">
                </div>
                <div class="col-span-2 md:col-span-2 rounded-2xl overflow-hidden aspect-[2/1] relative group">
                    <img src="{{ asset('images/doa.png') }}"
                        class="w-full h-full object-cover group-hover:scale-105 transition duration-700">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-6">
                        <p class="text-white font-cinzel font-bold text-xl">Masjid Nabawi, Madinah</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 6. TESTIMONIALS -->
    <section id="testimonials" class="py-24 bg-white">
        <div class="max-w-4xl mx-auto px-6 text-center">
            <i class="fa-solid fa-quote-left text-6xl text-gray-100 mb-8"></i>
            <h3 class="text-2xl md:text-3xl font-cinzel font-medium text-nabawi-green leading-relaxed mb-8">
                "Alhamdulillah, bimbingan Ustadz Ahmad sangat sabar dan mencerahkan. Penjelasan beliau di Jabal Uhud
                membuat rombongan kami menitikkan air mata. Umrah yang sangat berkesan bagi keluarga kami."
            </h3>
            <div class="flex items-center justify-center gap-4">
                <div class="w-12 h-12 rounded-full bg-gray-200 overflow-hidden">
                    <img src="https://placehold.co/100x100/e5e7eb/064E3B?text=KF" class="w-full h-full object-cover">
                </div>
                <div class="text-left">
                    <p class="font-bold text-nabawi-green">Bpk. Keluarga Firdaus</p>
                    <p class="text-[10px] font-bold text-mecca-gold uppercase tracking-widest">Umrah Private Ramadhan
                        2025</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 7. CONTACT / CTA -->
    <footer id="contact" class="bg-nabawi-green pt-24 pb-12 px-6 relative overflow-hidden">
        <!-- Subtle pattern -->
        <div class="absolute inset-0 opacity-5 pointer-events-none"
            style="background-image: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%23ffffff\' fill-opacity=\'1\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');">
        </div>

        <div class="max-w-7xl mx-auto grid lg:grid-cols-2 gap-16 relative z-10 mb-20">
            <div>
                <h2 class="text-4xl md:text-5xl font-cinzel font-bold text-white mb-6">Mulai Rencanakan <br> <span
                        class="text-mecca-gold">Perjalanan Suci Anda.</span></h2>
                <p class="text-white/80 font-light mb-10 max-w-md leading-relaxed">
                    Baik Anda merencanakan Umrah keluarga, grup instansi, maupun mencari konsultan untuk biro travel
                    Anda, silakan hubungi saya untuk diskusi lebih lanjut.
                </p>

                <a href="https://wa.me/628110000000" target="_blank"
                    class="inline-flex items-center gap-4 bg-mecca-gold text-nabawi-green px-8 py-4 rounded-full font-bold hover:bg-white transition shadow-xl">
                    <i class="fa-brands fa-whatsapp text-2xl"></i>
                    <span>Konsultasi via WhatsApp</span>
                </a>
            </div>

            <div class="bg-white p-8 md:p-10 rounded-3xl shadow-2xl">
                <h3 class="text-2xl font-cinzel font-bold text-nabawi-green mb-6">Kirim Pesan Langsung</h3>
                <form class="space-y-6">
                    <div>
                        <label class="text-[10px] font-bold text-gray-500 uppercase tracking-widest block mb-2">Nama
                            Lengkap / Instansi</label>
                        <input type="text"
                            class="w-full border-b border-gray-300 py-2 focus:border-mecca-gold focus:outline-none transition">
                    </div>
                    <div>
                        <label
                            class="text-[10px] font-bold text-gray-500 uppercase tracking-widest block mb-2">Kebutuhan
                            Layanan</label>
                        <select
                            class="w-full border-b border-gray-300 py-2 focus:border-mecca-gold focus:outline-none transition bg-white">
                            <option>Private Umrah Family</option>
                            <option>Tour Leader Agency (Biro)</option>
                            <option>Konsultasi Pembuatan Itinerary</option>
                        </select>
                    </div>
                    <div>
                        <label class="text-[10px] font-bold text-gray-500 uppercase tracking-widest block mb-2">Pesan &
                            Rencana Bulan Keberangkatan</label>
                        <textarea rows="3"
                            class="w-full border-b border-gray-300 py-2 focus:border-mecca-gold focus:outline-none transition"></textarea>
                    </div>
                    <button
                        class="w-full bg-nabawi-green text-white font-bold py-4 rounded-xl text-xs uppercase tracking-widest hover:bg-[#043326] transition">Kirim
                        Pesan</button>
                </form>
            </div>
        </div>

        <div
            class="max-w-7xl mx-auto border-t border-white/20 pt-8 flex flex-col md:flex-row justify-between items-center gap-4 relative z-10 text-white/60">
            <p class="text-[10px] font-bold uppercase tracking-widest">© 2026 Ahmad Fadhil. All Rights Reserved.</p>
            <div class="flex gap-6 text-xl">
                <a href="#" class="hover:text-mecca-gold transition"><i class="fa-brands fa-instagram"></i></a>
                <a href="#" class="hover:text-mecca-gold transition"><i class="fa-brands fa-youtube"></i></a>
            </div>
        </div>
    </footer>

</body>

</html>
