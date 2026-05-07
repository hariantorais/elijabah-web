<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mabrur Travel - Exclusive Luxury Theme</title>

    <!-- Tailwind CSS & Alpine JS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Fonts: Playfair Display (Luxury Serif) & Montserrat (Clean Sans) -->
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        gold: {
                            DEFAULT: '#D4AF37',
                            light: '#F3E5AB',
                            dark: '#AA8C2C',
                        }
                    },
                    fontFamily: {
                        sans: ['Montserrat', 'sans-serif'],
                        serif: ['Playfair Display', 'serif'],
                    }
                }
            }
        }
    </script>

    <style>
        body {
            background-color: #09090b;
            /* zinc-950 */
            color: #d4d4d8;
            /* zinc-300 */
        }

        [x-cloak] {
            display: none !important;
        }

        .glass-dark {
            background: rgba(9, 9, 11, 0.85);
            backdrop-filter: blur(12px);
            border-bottom: 1px solid rgba(212, 175, 55, 0.15);
        }

        .gold-gradient-text {
            background: linear-gradient(to right, #F3E5AB, #D4AF37, #AA8C2C);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        /* Subtle gold glow effect */
        .glow-gold {
            box-shadow: 0 0 20px rgba(212, 175, 55, 0.15);
        }
    </style>
</head>

<body class="antialiased selection:bg-gold selection:text-zinc-950">

    <!-- 1. LUXURY NAVIGATION -->
    <nav x-data="{ mobileMenu: false, scrolled: false }" @scroll.window="scrolled = (window.pageYOffset > 50)"
        class="fixed w-full z-50 transition-all duration-500"
        :class="scrolled ? 'glass-dark py-4' : 'bg-transparent py-6'">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center gap-3">
                    <img src="{{ asset('images/owner.png') }}" alt="Logo Icon"
                        class="w-8 h-8 rounded-full border border-gold object-cover grayscale brightness-200">
                    <span class="text-2xl font-serif font-bold text-white tracking-widest uppercase">Mabrur<span
                            class="text-gold">.</span></span>
                </div>

                <!-- Desktop Menu -->
                <div
                    class="hidden lg:flex space-x-8 items-center text-xs font-semibold tracking-[0.15em] uppercase text-zinc-300">
                    <a href="#profil" class="hover:text-gold transition duration-300">Profil</a>
                    <a href="#whyus" class="hover:text-gold transition duration-300">Keistimewaan</a>
                    <a href="#paket" class="hover:text-gold transition duration-300">Program VIP</a>
                    <a href="#galeri" class="hover:text-gold transition duration-300">Galeri</a>
                    <a href="#faq" class="hover:text-gold transition duration-300">FAQ</a>
                    <a href="https://wa.me/62812345678"
                        class="border border-gold text-gold px-6 py-2.5 hover:bg-gold hover:text-zinc-950 transition duration-300">
                        Reservasi
                    </a>
                </div>

                <!-- Mobile Button -->
                <div class="lg:hidden">
                    <button @click="mobileMenu = !mobileMenu" class="text-gold focus:outline-none">
                        <i class="fa-solid text-2xl" :class="mobileMenu ? 'fa-xmark' : 'fa-bars-staggered'"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div x-cloak x-show="mobileMenu" x-transition
            class="lg:hidden bg-zinc-950 border-b border-gold/20 absolute w-full shadow-2xl">
            <div class="px-4 py-6 space-y-4 text-center">
                <a href="#profil" @click="mobileMenu = false"
                    class="block text-sm tracking-widest uppercase font-medium text-zinc-300 hover:text-gold">Profil</a>
                <a href="#whyus" @click="mobileMenu = false"
                    class="block text-sm tracking-widest uppercase font-medium text-zinc-300 hover:text-gold">Keistimewaan</a>
                <a href="#paket" @click="mobileMenu = false"
                    class="block text-sm tracking-widest uppercase font-medium text-zinc-300 hover:text-gold">Program
                    VIP</a>
                <a href="#galeri" @click="mobileMenu = false"
                    class="block text-sm tracking-widest uppercase font-medium text-zinc-300 hover:text-gold">Galeri</a>
                <a href="#blog" @click="mobileMenu = false"
                    class="block text-sm tracking-widest uppercase font-medium text-zinc-300 hover:text-gold">Jurnal</a>
                <a href="https://wa.me/62812345678"
                    class="inline-block mt-4 border border-gold text-gold px-8 py-3 w-full hover:bg-gold hover:text-zinc-950 transition">Reservasi
                    Sekarang</a>
            </div>
        </div>
    </nav>

    <!-- 2. DRAMATIC HERO SECTION -->
    <section class="relative h-screen flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('images/mekkah.png') }}" class="w-full h-full object-cover scale-105" alt="Mekkah VIP">
            <div class="absolute inset-0 bg-gradient-to-b from-zinc-950/80 via-zinc-950/60 to-zinc-950"></div>
        </div>

        <div class="relative z-10 text-center px-4 max-w-4xl mx-auto mt-20">
            <span class="text-gold font-medium tracking-[0.2em] text-xs md:text-sm uppercase mb-6 block">Pengalaman
                Spiritual Eksklusif</span>
            <h1
                class="text-4xl md:text-6xl lg:text-7xl font-serif font-bold text-white leading-tight mb-8 drop-shadow-2xl">
                Perjalanan Suci <br> <span class="font-light italic gold-gradient-text">Bintang Lima.</span>
            </h1>
            <p class="text-zinc-300 text-lg md:text-xl font-light mb-12 max-w-2xl mx-auto leading-relaxed">
                Kami meredefinisi kenyamanan ibadah Anda dengan privasi, fasilitas kelas dunia, dan pembimbingan syar'i
                yang personal.
            </p>
            <div class="flex flex-col sm:flex-row gap-6 justify-center items-center">
                <a href="#paket"
                    class="bg-gold text-zinc-950 px-10 py-4 font-semibold tracking-wider uppercase text-sm hover:bg-gold-light transition duration-300 glow-gold">Lihat
                    Program VIP</a>
                <a href="#profil"
                    class="text-white border-b border-gold pb-1 font-medium tracking-wide hover:text-gold transition duration-300 flex items-center gap-2">
                    Eksplorasi Layanan <i class="fa-solid fa-arrow-down text-xs"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- 3. ELEGANT PROFILE -->
    <section id="profil" class="py-24 lg:py-32 bg-zinc-950">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row items-center gap-16 lg:gap-24">
                <div class="w-full lg:w-1/2 relative">
                    <div class="absolute inset-0 border border-gold/30 translate-x-4 translate-y-4 z-0"></div>
                    <img src="{{ asset('images/tawaf.png') }}" alt="Tawaf"
                        class="w-full h-[500px] object-cover relative z-10 grayscale hover:grayscale-0 transition duration-700">
                </div>
                <div class="w-full lg:w-1/2">
                    <div class="flex items-center gap-4 mb-6">
                        <div class="h-px w-12 bg-gold"></div>
                        <span class="text-gold text-xs font-bold tracking-[0.2em] uppercase">Filosofi Mabrur</span>
                    </div>
                    <h2 class="text-3xl md:text-4xl font-serif text-white mb-8 leading-snug">Menjaga Kekhusyukan di
                        Setiap Langkah Anda.</h2>
                    <p class="text-zinc-400 font-light leading-relaxed mb-6">
                        Berdiri sebagai penyedia layanan haji dan umroh eksklusif, kami percaya bahwa ibadah tidak
                        seharusnya diwarnai oleh kelelahan administratif dan ketidaknyamanan akomodasi.
                    </p>
                    <p class="text-zinc-400 font-light leading-relaxed mb-10">
                        Kami menghadirkan konsep *Tailor-Made Spiritual Journey*, di mana jadwal perjalanan, menu
                        makanan, hingga privasi manasik dapat disesuaikan untuk kenyamanan keluarga Anda.
                    </p>

                    <div class="flex items-center gap-6 pt-6 border-t border-zinc-800">
                        <img src="{{ asset('images/owner.png') }}" alt="Founder"
                            class="w-16 h-16 rounded-full object-cover grayscale border border-gold/50">
                        <div>
                            <p class="text-white font-serif italic text-lg">H. Harianto Rais</p>
                            <p class="text-gold text-xs tracking-widest uppercase mt-1">Founder & CEO</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. WHY US (LUXURY ICONS) -->
    <section id="whyus" class="py-24 bg-zinc-900 border-y border-zinc-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-serif text-white mb-16"><span
                    class="italic text-gold">Keistimewaan</span> Pelayanan Kami</h2>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
                <div class="p-6">
                    <i class="fa-solid fa-crown text-4xl text-gold mb-6"></i>
                    <h3 class="text-white font-serif text-xl mb-4">Akomodasi VVIP</h3>
                    <p class="text-zinc-400 font-light text-sm leading-relaxed">Menginap secara eksklusif di
                        hotel-hotel bintang 5 terkemuka yang berada tepat di pelataran Masjidil Haram dan Masjid Nabawi.
                    </p>
                </div>
                <div class="p-6">
                    <i class="fa-solid fa-user-tie text-4xl text-gold mb-6"></i>
                    <h3 class="text-white font-serif text-xl mb-4">Muthawwif Pribadi</h3>
                    <p class="text-zinc-400 font-light text-sm leading-relaxed">Satu pembimbing tersertifikasi untuk
                        rasio jemaah yang kecil, memastikan ibadah Anda terpantau dan terbimbing sempurna.</p>
                </div>
                <div class="p-6">
                    <i class="fa-solid fa-utensils text-4xl text-gold mb-6"></i>
                    <h3 class="text-white font-serif text-xl mb-4">Fine Dining Halal</h3>
                    <p class="text-zinc-400 font-light text-sm leading-relaxed">Akses ke restoran eksklusif dengan
                        hidangan berkelas internasional maupun menu otentik Nusantara sesuai selera Anda.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. VIP PACKAGES -->
    <section id="paket" class="py-24 lg:py-32 bg-zinc-950">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-20">
                <div class="flex justify-center items-center gap-4 mb-4">
                    <div class="h-px w-8 bg-gold"></div>
                    <span class="text-gold text-xs font-bold tracking-[0.2em] uppercase">Katalog Perjalanan</span>
                    <div class="h-px w-8 bg-gold"></div>
                </div>
                <h2 class="text-3xl md:text-5xl font-serif text-white">Program Ibadah <span
                        class="italic text-gold">Premium</span></h2>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Package 1 -->
                <div
                    class="border border-zinc-800 bg-zinc-900/50 p-8 flex flex-col hover:border-gold/50 transition duration-500 group">
                    <h3 class="text-2xl font-serif text-white mb-2">Umroh Executive</h3>
                    <p class="text-zinc-500 text-sm mb-8">Keseimbangan antara ibadah dan kenyamanan.</p>
                    <p class="text-gold text-3xl font-light mb-8">Rp 38 Juta <span class="text-sm text-zinc-500">/
                            pax</span></p>

                    <div class="relative h-48 mb-8 overflow-hidden">
                        <img src="{{ asset('images/madinah.png') }}"
                            class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition duration-700"
                            alt="Executive">
                    </div>

                    <ul class="space-y-4 text-zinc-300 font-light text-sm flex-grow mb-10">
                        <li class="flex items-start gap-3"><i class="fa-solid fa-check text-gold mt-0.5 text-xs"></i>
                            Pesawat Saudia Airlines</li>
                        <li class="flex items-start gap-3"><i class="fa-solid fa-check text-gold mt-0.5 text-xs"></i>
                            Hotel Bintang 5 (Makkah/Madinah)</li>
                        <li class="flex items-start gap-3"><i class="fa-solid fa-check text-gold mt-0.5 text-xs"></i>
                            Durasi 9 Hari</li>
                    </ul>
                    <a href="#"
                        class="block text-center border border-zinc-700 text-white py-3 uppercase tracking-widest text-xs hover:bg-white hover:text-zinc-950 transition duration-300">Detail
                        Program</a>
                </div>

                <!-- Package 2 (VVIP Highlight) -->
                <div
                    class="border border-gold bg-zinc-900 p-8 flex flex-col transform lg:-translate-y-6 glow-gold relative">
                    <div
                        class="absolute -top-3 left-1/2 transform -translate-x-1/2 bg-gold text-zinc-950 text-xs font-bold tracking-[0.2em] uppercase px-4 py-1">
                        Best Choice</div>
                    <h3 class="text-2xl font-serif text-white mb-2 text-center">Umroh VVIP Plus</h3>
                    <p class="text-zinc-400 text-sm mb-8 text-center">Pengalaman ultimate tanpa kompromi.</p>
                    <p class="gold-gradient-text text-4xl font-serif text-center mb-8">Rp 55 Juta <span
                            class="text-sm text-zinc-500 font-sans font-light">/ pax</span></p>

                    <div class="relative h-48 mb-8 overflow-hidden border border-gold/20">
                        <img src="{{ asset('images/hotel.png') }}" class="w-full h-full object-cover" alt="VVIP">
                    </div>

                    <ul class="space-y-4 text-zinc-300 font-light text-sm flex-grow mb-10">
                        <li class="flex items-start gap-3"><i class="fa-solid fa-gem text-gold mt-0.5 text-xs"></i>
                            Penerbangan Business Class</li>
                        <li class="flex items-start gap-3"><i class="fa-solid fa-gem text-gold mt-0.5 text-xs"></i>
                            Suite Room Hotel Bintang 5</li>
                        <li class="flex items-start gap-3"><i class="fa-solid fa-gem text-gold mt-0.5 text-xs"></i>
                            Kereta Cepat First Class</li>
                        <li class="flex items-start gap-3"><i class="fa-solid fa-gem text-gold mt-0.5 text-xs"></i>
                            Transportasi Private GMC/Alphard</li>
                    </ul>
                    <a href="#"
                        class="block text-center bg-gold text-zinc-950 py-4 uppercase tracking-widest font-semibold text-xs hover:bg-gold-light transition duration-300">Reservasi
                        VVIP</a>
                </div>

                <!-- Package 3 -->
                <div
                    class="border border-zinc-800 bg-zinc-900/50 p-8 flex flex-col hover:border-gold/50 transition duration-500 group">
                    <h3 class="text-2xl font-serif text-white mb-2">Haji Furoda</h3>
                    <p class="text-zinc-500 text-sm mb-8">Berangkat haji tanpa antrean panjang.</p>
                    <p class="text-gold text-3xl font-light mb-8">$ 18,500 <span
                            class="text-sm text-zinc-500">Mulai</span></p>

                    <div class="relative h-48 mb-8 overflow-hidden">
                        <img src="{{ asset('images/tawaf.png') }}"
                            class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition duration-700"
                            alt="Haji Furoda">
                    </div>

                    <ul class="space-y-4 text-zinc-300 font-light text-sm flex-grow mb-10">
                        <li class="flex items-start gap-3"><i class="fa-solid fa-check text-gold mt-0.5 text-xs"></i>
                            Visa Mujamalah Resmi Khusus</li>
                        <li class="flex items-start gap-3"><i class="fa-solid fa-check text-gold mt-0.5 text-xs"></i>
                            Tenda AC Maktab VIP Mina</li>
                        <li class="flex items-start gap-3"><i class="fa-solid fa-check text-gold mt-0.5 text-xs"></i>
                            Dokter Pribadi Rombongan</li>
                    </ul>
                    <a href="#"
                        class="block text-center border border-zinc-700 text-white py-3 uppercase tracking-widest text-xs hover:bg-white hover:text-zinc-950 transition duration-300">Konsultasi
                        Haji</a>
                </div>
            </div>
        </div>
    </section>

    <!-- 6. ELEGANT GALLERY -->
    <section id="galeri" class="py-24 bg-zinc-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-end mb-16 gap-6">
                <div>
                    <h2 class="text-3xl md:text-4xl font-serif text-white mb-4">Galeri <span
                            class="italic text-gold">Perjalanan</span></h2>
                    <p class="text-zinc-400 font-light">Momen-momen spiritual yang terekam secara elegan.</p>
                </div>
                <a href="#"
                    class="text-gold font-medium text-sm tracking-wider uppercase hover:text-white transition flex items-center gap-2">
                    Follow Instagram <i class="fa-solid fa-arrow-right-long"></i>
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="relative group overflow-hidden border border-zinc-800">
                    <img src="{{ asset('images/mekkah.png') }}"
                        class="w-full h-72 object-cover opacity-80 group-hover:opacity-100 group-hover:scale-105 transition duration-700"
                        alt="Galeri 1">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-zinc-950/80 to-transparent opacity-0 group-hover:opacity-100 transition duration-500 flex items-end p-6">
                        <p class="text-white font-serif text-xl">Masjidil Haram</p>
                    </div>
                </div>
                <div class="relative group overflow-hidden border border-zinc-800">
                    <img src="{{ asset('images/madinah.png') }}"
                        class="w-full h-72 object-cover opacity-80 group-hover:opacity-100 group-hover:scale-105 transition duration-700"
                        alt="Galeri 2">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-zinc-950/80 to-transparent opacity-0 group-hover:opacity-100 transition duration-500 flex items-end p-6">
                        <p class="text-white font-serif text-xl">Raudhah Nabawi</p>
                    </div>
                </div>
                <div class="relative group overflow-hidden border border-zinc-800">
                    <img src="{{ asset('images/hotel.png') }}"
                        class="w-full h-72 object-cover opacity-80 group-hover:opacity-100 group-hover:scale-105 transition duration-700"
                        alt="Galeri 3">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-zinc-950/80 to-transparent opacity-0 group-hover:opacity-100 transition duration-500 flex items-end p-6">
                        <p class="text-white font-serif text-xl">Akomodasi Premium</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 7. TESTIMONIALS -->
    <section id="testimoni" class="py-24 lg:py-32 bg-zinc-950 relative border-y border-zinc-800">
        <i class="fa-solid fa-quote-right text-[15rem] absolute top-10 right-10 text-zinc-900 z-0"></i>
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
            <span class="text-gold text-xs font-bold tracking-[0.2em] uppercase mb-8 block">Kesan Klien VVIP</span>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-16">
                <!-- Testimonial 1 -->
                <div>
                    <p class="text-xl md:text-2xl font-serif text-zinc-300 italic leading-relaxed mb-8">
                        "Pelayanan yang benar-benar tanpa cela. Mulai dari penjemputan di bandara hingga handling
                        bagasi, kami sekeluarga diperlakukan layaknya tamu kehormatan."
                    </p>
                    <div class="flex flex-col items-center">
                        <img src="{{ asset('images/user1.png') }}" alt="Client"
                            class="w-16 h-16 rounded-full grayscale border border-gold mb-4">
                        <p class="text-white uppercase tracking-widest text-sm">Bpk. H. Reyhan</p>
                        <p class="text-gold text-xs mt-1">Direktur Perusahaan Multinasional</p>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div>
                    <p class="text-xl md:text-2xl font-serif text-zinc-300 italic leading-relaxed mb-8">
                        "Sangat memuaskan. Muthawwif sangat berilmu dan bijaksana. Hotel benar-benar menghadap Ka'bah,
                        memudahkan saya beribadah walau kondisi sedang ramai."
                    </p>
                    <div class="flex flex-col items-center">
                        <img src="{{ asset('images/user2.png') }}" alt="Client"
                            class="w-16 h-16 rounded-full grayscale border border-gold mb-4">
                        <p class="text-white uppercase tracking-widest text-sm">Ibu Hj. Safira</p>
                        <p class="text-gold text-xs mt-1">Jemaah Haji Furoda 2025</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 8. FAQ SECTION (MINIMALIST) -->
    <section id="faq" class="py-24 bg-zinc-900">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-serif text-white">Informasi <span class="italic text-gold">Penting</span>
                </h2>
            </div>

            <div class="space-y-2" x-data="{ active: null }">
                <!-- FAQ 1 -->
                <div class="border-b border-zinc-800">
                    <button @click="active = active === 1 ? null : 1"
                        class="w-full py-6 flex justify-between items-center text-left focus:outline-none group">
                        <span class="font-serif text-lg text-zinc-300 group-hover:text-gold transition">Fasilitas apa
                            yang membedakan VVIP dengan Reguler?</span>
                        <i class="fa-solid text-gold text-sm transition-transform"
                            :class="active === 1 ? 'rotate-45' : 'fa-plus'"></i>
                    </button>
                    <div x-show="active === 1" x-collapse>
                        <p class="pb-6 text-zinc-500 font-light leading-relaxed">
                            Program VVIP difokuskan pada privasi dan kemewahan. Anda mendapatkan tiket Business Class,
                            akomodasi Suite Room di Ring 1, transportasi pribadi (*Private Car*), serta pendampingan
                            muthawwif khusus hanya untuk keluarga Anda tanpa digabung dengan rombongan besar.
                        </p>
                    </div>
                </div>

                <!-- FAQ 2 -->
                <div class="border-b border-zinc-800">
                    <button @click="active = active === 2 ? null : 2"
                        class="w-full py-6 flex justify-between items-center text-left focus:outline-none group">
                        <span class="font-serif text-lg text-zinc-300 group-hover:text-gold transition">Bagaimana
                            dengan keamanan dana pendaftaran?</span>
                        <i class="fa-solid text-gold text-sm transition-transform"
                            :class="active === 2 ? 'rotate-45' : 'fa-plus'"></i>
                    </button>
                    <div x-show="active === 2" x-collapse>
                        <p class="pb-6 text-zinc-500 font-light leading-relaxed">
                            Kami adalah biro resmi bersertifikasi Kemenag RI dengan rekam jejak tanpa gagal berangkat.
                            Pembayaran dilakukan melalui rekening perusahaan (PT) resmi, bukan perorangan, dilengkapi
                            dengan MOU dan kuitansi bermaterai.
                        </p>
                    </div>
                </div>

                <!-- FAQ 3 -->
                <div class="border-b border-zinc-800">
                    <button @click="active = active === 3 ? null : 3"
                        class="w-full py-6 flex justify-between items-center text-left focus:outline-none group">
                        <span class="font-serif text-lg text-zinc-300 group-hover:text-gold transition">Apakah
                            menyediakan layanan Badal Umroh/Haji?</span>
                        <i class="fa-solid text-gold text-sm transition-transform"
                            :class="active === 3 ? 'rotate-45' : 'fa-plus'"></i>
                    </button>
                    <div x-show="active === 3" x-collapse>
                        <p class="pb-6 text-zinc-500 font-light leading-relaxed">
                            Tentu. Layanan Badal dikerjakan oleh para asatidz dan penuntut ilmu bermukim di Makkah yang
                            telah memenuhi syarat syar'i (telah menunaikan haji/umroh untuk dirinya sendiri). Sertifikat
                            dan dokumentasi video akan diberikan.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 9. JOURNAL / BLOG -->
    <section id="blog" class="py-24 bg-zinc-950">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-serif text-white mb-4">Jurnal <span class="italic text-gold">Spiritual</span>
                </h2>
                <p class="text-zinc-500 font-light">Kumpulan literasi, panduan, dan wawasan seputar tanah suci.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Blog 1 -->
                <article class="group cursor-pointer">
                    <div class="overflow-hidden border border-zinc-800 mb-6">
                        <img src="{{ asset('images/mekkah.png') }}" alt="Mekkah"
                            class="w-full h-64 object-cover opacity-80 group-hover:opacity-100 group-hover:scale-105 transition duration-700">
                    </div>
                    <p class="text-gold text-xs tracking-widest uppercase mb-3">Tafsir & Sejarah</p>
                    <h3 class="text-white font-serif text-xl mb-3 group-hover:text-gold transition">Mengenal Lebih
                        Dekat Sejarah Pembuatan Kiswah Ka'bah</h3>
                    <p class="text-zinc-500 font-light text-sm mb-4 line-clamp-2">Kiswah bukan sekadar kain penutup,
                        melainkan simbol keagungan Baitullah yang pembuatannya membutuhkan ratusan kilogram sutra dan
                        benang emas murni.</p>
                    <a href="#"
                        class="text-white text-xs uppercase tracking-widest border-b border-gold pb-1 group-hover:text-gold transition">Baca
                        Artikel</a>
                </article>

                <!-- Blog 2 -->
                <article class="group cursor-pointer">
                    <div class="overflow-hidden border border-zinc-800 mb-6">
                        <img src="{{ asset('images/madinah.png') }}" alt="Madinah"
                            class="w-full h-64 object-cover opacity-80 group-hover:opacity-100 group-hover:scale-105 transition duration-700">
                    </div>
                    <p class="text-gold text-xs tracking-widest uppercase mb-3">Panduan Adab</p>
                    <h3 class="text-white font-serif text-xl mb-3 group-hover:text-gold transition">Adab dan Etika
                        Berziarah ke Makam Rasulullah ﷺ</h3>
                    <p class="text-zinc-500 font-light text-sm mb-4 line-clamp-2">Berada di Masjid Nabawi menuntut kita
                        untuk menjaga adab dan merendahkan suara sebagai bentuk penghormatan tertinggi kepada Baginda
                        Nabi.</p>
                    <a href="#"
                        class="text-white text-xs uppercase tracking-widest border-b border-gold pb-1 group-hover:text-gold transition">Baca
                        Artikel</a>
                </article>

                <!-- Blog 3 -->
                <article class="group cursor-pointer">
                    <div class="overflow-hidden border border-zinc-800 mb-6">
                        <img src="{{ asset('images/hotel.png') }}" alt="Hotel"
                            class="w-full h-64 object-cover opacity-80 group-hover:opacity-100 group-hover:scale-105 transition duration-700">
                    </div>
                    <p class="text-gold text-xs tracking-widest uppercase mb-3">Gaya Hidup</p>
                    <h3 class="text-white font-serif text-xl mb-3 group-hover:text-gold transition">Memilih Akomodasi
                        Ideal untuk Umroh Bersama Lansia</h3>
                    <p class="text-zinc-500 font-light text-sm mb-4 line-clamp-2">Faktor jarak, ketersediaan kursi
                        roda, dan akses lift khusus menjadi poin krusial saat merencanakan perjalanan ibadah bersama
                        orang tua.</p>
                    <a href="#"
                        class="text-white text-xs uppercase tracking-widest border-b border-gold pb-1 group-hover:text-gold transition">Baca
                        Artikel</a>
                </article>
            </div>
        </div>
    </section>

    <!-- 10. LUXURY FOOTER -->
    <footer class="bg-black pt-24 pb-12 border-t border-zinc-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col items-center text-center mb-16">
                <div class="w-16 h-16 border border-gold rounded-full flex items-center justify-center mb-6">
                    <img src="{{ asset('images/owner.png') }}" alt="Logo"
                        class="w-14 h-14 rounded-full grayscale brightness-200 object-cover">
                </div>
                <h2 class="text-3xl font-serif text-white tracking-widest uppercase mb-6">Mabrur<span
                        class="text-gold">.</span></h2>
                <p class="text-zinc-500 font-light max-w-md mx-auto mb-8">
                    Elevating your spiritual journey through unparalleled luxury, privacy, and authentic Islamic
                    guidance.
                </p>
                <div class="flex gap-6">
                    <a href="#" class="text-zinc-500 hover:text-gold transition"><i
                            class="fa-brands fa-instagram text-xl"></i></a>
                    <a href="#" class="text-zinc-500 hover:text-gold transition"><i
                            class="fa-brands fa-linkedin-in text-xl"></i></a>
                    <a href="#" class="text-zinc-500 hover:text-gold transition"><i
                            class="fa-brands fa-youtube text-xl"></i></a>
                </div>
            </div>

            <div
                class="grid grid-cols-1 md:grid-cols-3 gap-8 border-y border-zinc-900 py-12 mb-12 text-center md:text-left">
                <div>
                    <h4 class="text-white uppercase tracking-widest text-xs mb-4">Layanan Utama</h4>
                    <ul class="space-y-3 text-zinc-500 font-light text-sm">
                        <li><a href="#" class="hover:text-gold transition">Umroh VVIP</a></li>
                        <li><a href="#" class="hover:text-gold transition">Umroh Korporasi</a></li>
                        <li><a href="#" class="hover:text-gold transition">Haji Furoda / Khusus</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-white uppercase tracking-widest text-xs mb-4">Legalitas</h4>
                    <ul class="space-y-3 text-zinc-500 font-light text-sm">
                        <li>Izin PPIU No. U.123/2023</li>
                        <li>Izin PIHK No. H.456/2023</li>
                        <li>Terdaftar di Kemenag RI</li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-white uppercase tracking-widest text-xs mb-4">Reservasi & Konsultasi</h4>
                    <p class="text-gold font-serif text-xl mb-2">+62 812 3456 7890</p>
                    <p class="text-zinc-500 font-light text-sm">concierge@mabrurvip.com</p>
                    <p class="text-zinc-500 font-light text-sm mt-4">Plaza Office Tower Lt. 15<br>Jakarta Pusat,
                        Indonesia</p>
                </div>
            </div>

            <div class="text-center">
                <p class="text-zinc-600 text-xs tracking-wider uppercase">
                    &copy; 2026 Mabrur Luxury Travel. Hak Cipta Dilindungi Undang-Undang.
                </p>
            </div>
        </div>
    </footer>

</body>

</html>
