<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mabrur Travel - Booking Platform Style</title>

    <!-- Tailwind CSS & Alpine JS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Font: DM Sans (Sangat modern, bulat, dan bersih untuk UI) -->
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,300;9..40,400;9..40,500;9..40,600;9..40,700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        body {
            font-family: 'DM Sans', sans-serif;
            background-color: #fafaf9;
            /* stone-50 */
        }

        [x-cloak] {
            display: none !important;
        }

        .hero-overlay {
            background: linear-gradient(to right, rgba(13, 148, 136, 0.9), rgba(17, 94, 89, 0.7));
        }
    </style>
</head>

<body class="text-stone-800">

    <!-- Navbar: Solid App-like Header -->
    <nav x-data="{ mobileMenu: false, scrolled: false }" @scroll.window="scrolled = (window.pageYOffset > 10)"
        class="fixed w-full z-50 transition-all duration-300"
        :class="scrolled ? 'bg-teal-900 shadow-lg py-3' : 'bg-teal-900 py-5'">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center">

                <div class="flex-shrink-0 flex items-center gap-2">
                    <i class="fa-solid fa-kaaba text-amber-400 text-3xl"></i>
                    <span class="text-2xl font-bold text-white tracking-tight">Mabrur<span
                            class="text-amber-400 font-light">App</span></span>
                </div>

                <div class="hidden md:flex space-x-8 items-center text-sm font-medium text-teal-50">
                    <a href="#fitur" class="hover:text-amber-400 transition">Kenapa Kami</a>
                    <a href="#paket" class="hover:text-amber-400 transition">Paket Tersedia</a>
                    <a href="#fasilitas" class="hover:text-amber-400 transition">Fasilitas</a>
                    <a href="#tim" class="hover:text-amber-400 transition">Pembimbing</a>
                    <a href="https://wa.me/62812345678"
                        class="bg-amber-400 text-teal-950 px-5 py-2.5 rounded-lg font-bold hover:bg-amber-300 transition">
                        <i class="fa-brands fa-whatsapp mr-2"></i>Tanya Admin
                    </a>
                </div>

                <div class="md:hidden">
                    <button @click="mobileMenu = !mobileMenu" class="text-white focus:outline-none">
                        <i class="fa-solid text-2xl" :class="mobileMenu ? 'fa-xmark' : 'fa-bars'"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div x-cloak x-show="mobileMenu" x-transition
            class="md:hidden bg-teal-800 absolute w-full shadow-2xl border-t border-teal-700">
            <div class="px-4 py-4 space-y-2">
                <a href="#fitur" @click="mobileMenu = false"
                    class="block text-teal-100 hover:text-white hover:bg-teal-700 px-3 py-2 rounded-md font-medium">Kenapa
                    Kami</a>
                <a href="#paket" @click="mobileMenu = false"
                    class="block text-teal-100 hover:text-white hover:bg-teal-700 px-3 py-2 rounded-md font-medium">Paket
                    Tersedia</a>
                <a href="#fasilitas" @click="mobileMenu = false"
                    class="block text-teal-100 hover:text-white hover:bg-teal-700 px-3 py-2 rounded-md font-medium">Fasilitas</a>
                <a href="https://wa.me/62812345678"
                    class="block w-full text-center bg-amber-400 text-teal-900 py-3 rounded-lg font-bold mt-4">Hubungi
                    via WA</a>
            </div>
        </div>
    </nav>

    <!-- Hero Booking App Style -->
    <section class="relative pt-24 pb-32 lg:pt-36 lg:pb-40">
        <!-- Background Image with asset() -->
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('images/mekkah.png') }}" class="w-full h-full object-cover" alt="Mekkah Background">
            <div class="absolute inset-0 hero-overlay"></div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8" x-data="{ loaded: false }"
            x-init="setTimeout(() => loaded = true, 100)">
            <div class="text-center lg:text-left md:w-2/3 transition-all duration-700 transform"
                :class="loaded ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white leading-tight mb-6">
                    Pesan Perjalanan Ibadah Anda dengan Mudah & Aman.
                </h1>
                <p class="text-lg text-teal-50 mb-10 max-w-xl mx-auto lg:mx-0">
                    Biro travel bersertifikat Kemenag RI. Kami mengintegrasikan pelayanan ikhlas dengan kemudahan
                    teknologi untuk menjamin kekhusyukan ibadah Anda.
                </p>
            </div>

            <!-- Floating "Booking" Search Box -->
            <div class="bg-white p-6 rounded-2xl shadow-2xl mt-8 transition-all duration-700 delay-300 transform max-w-4xl"
                :class="loaded ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4 items-end">
                    <div class="col-span-1">
                        <label
                            class="block text-sm font-bold text-stone-500 mb-2 uppercase tracking-wide">Tujuan</label>
                        <div
                            class="bg-stone-100 p-3 rounded-lg flex items-center text-stone-700 font-medium border border-stone-200">
                            <i class="fa-solid fa-location-dot mr-3 text-teal-600"></i> Makkah & Madinah
                        </div>
                    </div>
                    <div class="col-span-1">
                        <label class="block text-sm font-bold text-stone-500 mb-2 uppercase tracking-wide">Bulan
                            Berangkat</label>
                        <select
                            class="w-full bg-stone-100 p-3 rounded-lg text-stone-700 font-medium border border-stone-200 focus:outline-none focus:ring-2 focus:ring-teal-500">
                            <option>Agustus 2026</option>
                            <option>September 2026</option>
                            <option>Oktober 2026</option>
                        </select>
                    </div>
                    <div class="col-span-1">
                        <label class="block text-sm font-bold text-stone-500 mb-2 uppercase tracking-wide">Jenis
                            Paket</label>
                        <select
                            class="w-full bg-stone-100 p-3 rounded-lg text-stone-700 font-medium border border-stone-200 focus:outline-none focus:ring-2 focus:ring-teal-500">
                            <option>Umroh Reguler</option>
                            <option>Umroh Plus Turki</option>
                            <option>Haji Khusus</option>
                        </select>
                    </div>
                    <div class="col-span-1">
                        <a href="#paket"
                            class="w-full block text-center bg-teal-600 text-white p-3 rounded-lg font-bold hover:bg-teal-700 transition shadow-md">
                            Cari Paket
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Us (App Grid) -->
    <section id="fitur" class="py-20 bg-stone-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                <div
                    class="bg-white p-6 rounded-2xl shadow-sm border border-stone-200 text-center hover:-translate-y-1 transition duration-300">
                    <div
                        class="w-14 h-14 mx-auto bg-teal-100 text-teal-600 rounded-xl flex items-center justify-center text-2xl mb-4">
                        <i class="fa-solid fa-shield-check"></i></div>
                    <h3 class="font-bold text-stone-900 mb-2">Legalitas Jelas</h3>
                    <p class="text-xs text-stone-500">Terdaftar di SISKOPATUH Kemenag RI.</p>
                </div>
                <div
                    class="bg-white p-6 rounded-2xl shadow-sm border border-stone-200 text-center hover:-translate-y-1 transition duration-300">
                    <div
                        class="w-14 h-14 mx-auto bg-teal-100 text-teal-600 rounded-xl flex items-center justify-center text-2xl mb-4">
                        <i class="fa-solid fa-plane-arrival"></i></div>
                    <h3 class="font-bold text-stone-900 mb-2">Pasti Jadwalnya</h3>
                    <p class="text-xs text-stone-500">Blok seat pesawat dilakukan jauh hari.</p>
                </div>
                <div
                    class="bg-white p-6 rounded-2xl shadow-sm border border-stone-200 text-center hover:-translate-y-1 transition duration-300">
                    <div
                        class="w-14 h-14 mx-auto bg-teal-100 text-teal-600 rounded-xl flex items-center justify-center text-2xl mb-4">
                        <i class="fa-solid fa-hotel"></i></div>
                    <h3 class="font-bold text-stone-900 mb-2">Hotel Ring 1</h3>
                    <p class="text-xs text-stone-500">Akomodasi dekat Masjid, hemat energi.</p>
                </div>
                <div
                    class="bg-white p-6 rounded-2xl shadow-sm border border-stone-200 text-center hover:-translate-y-1 transition duration-300">
                    <div
                        class="w-14 h-14 mx-auto bg-teal-100 text-teal-600 rounded-xl flex items-center justify-center text-2xl mb-4">
                        <i class="fa-solid fa-book-open-reader"></i></div>
                    <h3 class="font-bold text-stone-900 mb-2">Sesuai Sunnah</h3>
                    <p class="text-xs text-stone-500">Bimbingan ibadah murni ajaran Nabi ﷺ.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Packages (Card Layout) -->
    <section id="paket" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-end mb-10">
                <div>
                    <h2 class="text-3xl font-bold text-stone-900">Rekomendasi Paket</h2>
                    <p class="text-stone-500 mt-2">Harga All-in, tanpa biaya tersembunyi.</p>
                </div>
                <div class="hidden md:block">
                    <a href="#" class="text-teal-600 font-bold hover:text-teal-700">Lihat Semua <i
                            class="fa-solid fa-arrow-right ml-1"></i></a>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Card 1 -->
                <div
                    class="bg-white rounded-2xl border border-stone-200 overflow-hidden shadow-sm hover:shadow-xl transition-shadow flex flex-col">
                    <div class="h-48 relative">
                        <img src="{{ asset('images/madinah.png') }}" class="w-full h-full object-cover"
                            alt="Madinah">
                        <div
                            class="absolute top-4 left-4 bg-white/90 text-teal-800 text-xs font-bold px-3 py-1.5 rounded-lg shadow-sm">
                            <i class="fa-regular fa-clock mr-1"></i> 9 Hari
                        </div>
                    </div>
                    <div class="p-6 flex-grow flex flex-col">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="text-xl font-bold text-stone-900">Umroh Reguler</h3>
                            <span class="bg-teal-50 text-teal-700 text-xs font-bold px-2 py-1 rounded">Sisa 5
                                Seat</span>
                        </div>
                        <p class="text-teal-600 font-bold text-2xl mb-4">Rp 28.500.000</p>

                        <div class="space-y-2 mb-6 flex-grow">
                            <div class="flex items-center text-sm text-stone-600"><i
                                    class="fa-solid fa-plane w-6 text-stone-400"></i> Lion Air / Batik</div>
                            <div class="flex items-center text-sm text-stone-600"><i
                                    class="fa-solid fa-bed w-6 text-stone-400"></i> Bintang 4 (Makkah & Madinah)</div>
                        </div>
                        <button
                            class="w-full bg-stone-100 text-stone-800 font-bold py-3 rounded-lg hover:bg-teal-600 hover:text-white transition">Pilih
                            Paket</button>
                    </div>
                </div>

                <!-- Card 2 (Featured) -->
                <div
                    class="bg-teal-900 rounded-2xl border border-teal-800 overflow-hidden shadow-xl transform md:-translate-y-4 flex flex-col relative">
                    <div
                        class="absolute top-0 right-0 bg-amber-400 text-teal-900 font-bold text-xs px-4 py-1.5 rounded-bl-lg z-10">
                        TERPOPULER</div>
                    <div class="h-48 relative">
                        <img src="{{ asset('images/mekkah.png') }}" class="w-full h-full object-cover opacity-80"
                            alt="Mekkah">
                        <div
                            class="absolute top-4 left-4 bg-teal-900/90 text-white text-xs font-bold px-3 py-1.5 rounded-lg shadow-sm border border-teal-700">
                            <i class="fa-regular fa-clock mr-1"></i> 12 Hari
                        </div>
                    </div>
                    <div class="p-6 flex-grow flex flex-col">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="text-xl font-bold text-white">Umroh Premium VIP</h3>
                        </div>
                        <p class="text-amber-400 font-bold text-2xl mb-4">Rp 36.000.000</p>

                        <div class="space-y-2 mb-6 flex-grow text-teal-100">
                            <div class="flex items-center text-sm"><i
                                    class="fa-solid fa-plane w-6 text-amber-400"></i> Saudia Airlines (Direct)</div>
                            <div class="flex items-center text-sm"><i class="fa-solid fa-bed w-6 text-amber-400"></i>
                                Bintang 5 (Pelataran Masjid)</div>
                            <div class="flex items-center text-sm"><i
                                    class="fa-solid fa-train-subway w-6 text-amber-400"></i> Kereta Cepat Haramain
                            </div>
                        </div>
                        <button
                            class="w-full bg-amber-400 text-teal-900 font-bold py-3 rounded-lg hover:bg-amber-300 transition shadow-md">Booking
                            Sekarang</button>
                    </div>
                </div>

                <!-- Card 3 -->
                <div
                    class="bg-white rounded-2xl border border-stone-200 overflow-hidden shadow-sm hover:shadow-xl transition-shadow flex flex-col">
                    <div class="h-48 relative">
                        <img src="{{ asset('images/tawaf.png') }}" class="w-full h-full object-cover" alt="Tawaf">
                        <div
                            class="absolute top-4 left-4 bg-white/90 text-teal-800 text-xs font-bold px-3 py-1.5 rounded-lg shadow-sm">
                            <i class="fa-solid fa-crown mr-1"></i> Khusus
                        </div>
                    </div>
                    <div class="p-6 flex-grow flex flex-col">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="text-xl font-bold text-stone-900">Haji Plus / Furoda</h3>
                        </div>
                        <p class="text-teal-600 font-bold text-2xl mb-4">$ 13,500 <span
                                class="text-sm font-normal text-stone-500">Mulai</span></p>

                        <div class="space-y-2 mb-6 flex-grow">
                            <div class="flex items-center text-sm text-stone-600"><i
                                    class="fa-solid fa-id-badge w-6 text-stone-400"></i> Visa Mujamalah Resmi</div>
                            <div class="flex items-center text-sm text-stone-600"><i
                                    class="fa-solid fa-campground w-6 text-stone-400"></i> Tenda Maktab VIP</div>
                            <div class="flex items-center text-sm text-stone-600"><i
                                    class="fa-solid fa-user-doctor w-6 text-stone-400"></i> Tim Medis Pribadi</div>
                        </div>
                        <button
                            class="w-full bg-stone-100 text-stone-800 font-bold py-3 rounded-lg hover:bg-teal-600 hover:text-white transition">Jadwalkan
                            Konsultasi</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Facilities (Split Section) -->
    <section id="fasilitas" class="py-20 bg-stone-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div class="order-2 lg:order-1 relative">
                    <img src="{{ asset('images/hotel.png') }}"
                        class="rounded-2xl shadow-xl w-full object-cover h-[400px]" alt="Hotel">
                    <!-- Owner/Founder Badge Overlaid -->
                    <div
                        class="absolute -bottom-6 -right-6 md:bottom-6 md:-right-6 bg-white p-5 rounded-xl shadow-2xl border border-stone-100 flex items-center gap-4 max-w-xs">
                        <img src="{{ asset('images/owner.png') }}" alt="Founder"
                            class="w-16 h-16 rounded-full object-cover ring-2 ring-teal-500">
                        <div>
                            <p class="text-xs font-bold text-teal-600 uppercase">Pesan Founder</p>
                            <p class="text-sm text-stone-600 font-medium leading-tight">"Akomodasi terbaik agar Anda
                                fokus beribadah."</p>
                        </div>
                    </div>
                </div>
                <div class="order-1 lg:order-2">
                    <span class="bg-amber-100 text-amber-800 text-xs font-bold px-3 py-1 rounded-full">Fasilitas
                        Jemaah</span>
                    <h2 class="text-3xl font-bold text-stone-900 mt-4 mb-6">Kenyamanan Berstandar Internasional</h2>
                    <p class="text-stone-600 mb-8 text-lg">MabrurApp memastikan setiap komponen perjalanan, dari kursi
                        pesawat hingga kasur tempat Anda beristirahat, dipilih melalui quality control yang ketat.</p>

                    <ul class="space-y-4">
                        <li class="flex items-start gap-4">
                            <div
                                class="w-8 h-8 rounded-full bg-teal-100 text-teal-600 flex items-center justify-center flex-shrink-0 mt-1">
                                <i class="fa-solid fa-check text-sm"></i></div>
                            <div>
                                <h4 class="font-bold text-stone-900">Penerbangan Nyaman</h4>
                                <p class="text-sm text-stone-500">Menggunakan maskapai komersial bereputasi tinggi
                                    dengan durasi transit minimal.</p>
                            </div>
                        </li>
                        <li class="flex items-start gap-4">
                            <div
                                class="w-8 h-8 rounded-full bg-teal-100 text-teal-600 flex items-center justify-center flex-shrink-0 mt-1">
                                <i class="fa-solid fa-check text-sm"></i></div>
                            <div>
                                <h4 class="font-bold text-stone-900">Akomodasi Strategis</h4>
                                <p class="text-sm text-stone-500">Hotel ring 1 dan 2 di Makkah & Madinah untuk
                                    memudahkan mobilitas ke Masjid.</p>
                            </div>
                        </li>
                        <li class="flex items-start gap-4">
                            <div
                                class="w-8 h-8 rounded-full bg-teal-100 text-teal-600 flex items-center justify-center flex-shrink-0 mt-1">
                                <i class="fa-solid fa-check text-sm"></i></div>
                            <div>
                                <h4 class="font-bold text-stone-900">Katering Cita Rasa Nusantara</h4>
                                <p class="text-sm text-stone-500">Makanan 3x sehari yang disesuaikan dengan lidah orang
                                    Indonesia.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials & Reviews -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-stone-900 text-center mb-12">Rating & Ulasan Jemaah</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Ulasan 1 -->
                <div class="bg-stone-50 p-6 rounded-2xl border border-stone-200">
                    <div class="flex items-center gap-2 text-amber-400 mb-4 text-sm">
                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                            class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                            class="fa-solid fa-star"></i>
                    </div>
                    <p class="text-stone-700 mb-6 font-medium leading-relaxed">"Proses booking via admin sangat cepat
                        dan transparan. Tidak ada biaya tambahan ketika di tanah suci. Mutawwifnya juga sangat paham
                        sirah nabawiyah, jadi ibadah terasa sangat bermakna."</p>
                    <div class="flex items-center gap-4 border-t border-stone-200 pt-4">
                        <img src="{{ asset('images/user1.png') }}" alt="User 1"
                            class="w-12 h-12 rounded-full object-cover">
                        <div>
                            <p class="font-bold text-stone-900">Keluarga Bpk. Hendra</p>
                            <p class="text-xs text-stone-500">Alumni Umroh Ramadhan 2025</p>
                        </div>
                    </div>
                </div>

                <!-- Ulasan 2 -->
                <div class="bg-stone-50 p-6 rounded-2xl border border-stone-200">
                    <div class="flex items-center gap-2 text-amber-400 mb-4 text-sm">
                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                            class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                            class="fa-solid fa-star"></i>
                    </div>
                    <p class="text-stone-700 mb-6 font-medium leading-relaxed">"Untuk perjalanan membawa orang tua yang
                        sudah sepuh, biro ini sangat *recommended*. Ada pendampingan khusus kursi roda dan tim
                        kesehatannya selalu memantau."</p>
                    <div class="flex items-center gap-4 border-t border-stone-200 pt-4">
                        <img src="{{ asset('images/user2.png') }}" alt="User 2"
                            class="w-12 h-12 rounded-full object-cover">
                        <div>
                            <p class="font-bold text-stone-900">Ibu Dian Sastro</p>
                            <p class="text-xs text-stone-500">Alumni Umroh Premium 2026</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- App-Style Footer -->
    <footer class="bg-stone-900 text-stone-400 py-12 border-t-4 border-teal-600">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-4 gap-8">
            <div class="col-span-1 md:col-span-1">
                <div class="flex items-center gap-2 mb-4">
                    <i class="fa-solid fa-kaaba text-amber-400 text-2xl"></i>
                    <span class="text-xl font-bold text-white tracking-tight">Mabrur<span
                            class="text-amber-400 font-light">App</span></span>
                </div>
                <p class="text-sm mb-6">Platform pemesanan dan manajemen perjalanan Umroh & Haji terintegrasi.</p>
                <div class="flex gap-3">
                    <a href="#"
                        class="w-8 h-8 rounded-full bg-stone-800 flex items-center justify-center hover:bg-teal-600 hover:text-white transition"><i
                            class="fa-brands fa-facebook-f text-sm"></i></a>
                    <a href="#"
                        class="w-8 h-8 rounded-full bg-stone-800 flex items-center justify-center hover:bg-teal-600 hover:text-white transition"><i
                            class="fa-brands fa-instagram text-sm"></i></a>
                </div>
            </div>

            <div>
                <h4 class="text-white font-bold mb-4">Layanan</h4>
                <ul class="space-y-2 text-sm">
                    <li><a href="#" class="hover:text-amber-400 transition">Umroh Reguler</a></li>
                    <li><a href="#" class="hover:text-amber-400 transition">Umroh Plus</a></li>
                    <li><a href="#" class="hover:text-amber-400 transition">Haji Furoda</a></li>
                    <li><a href="#" class="hover:text-amber-400 transition">Badal Umroh</a></li>
                </ul>
            </div>

            <div>
                <h4 class="text-white font-bold mb-4">Dukungan</h4>
                <ul class="space-y-2 text-sm">
                    <li><a href="#" class="hover:text-amber-400 transition">Syarat & Ketentuan</a></li>
                    <li><a href="#" class="hover:text-amber-400 transition">Kebijakan Privasi</a></li>
                    <li><a href="#" class="hover:text-amber-400 transition">FAQ</a></li>
                    <li><a href="#" class="hover:text-amber-400 transition">Panduan Aplikasi</a></li>
                </ul>
            </div>

            <div>
                <h4 class="text-white font-bold mb-4">Download App</h4>
                <div class="space-y-3">
                    <a href="#"
                        class="block bg-stone-800 p-2 rounded-lg border border-stone-700 hover:border-teal-500 transition flex items-center gap-3">
                        <i class="fa-brands fa-google-play text-2xl text-stone-300"></i>
                        <div class="text-left">
                            <p class="text-[10px] uppercase leading-none">Get it on</p>
                            <p class="text-sm text-white font-bold leading-none mt-1">Google Play</p>
                        </div>
                    </a>
                    <a href="#"
                        class="block bg-stone-800 p-2 rounded-lg border border-stone-700 hover:border-teal-500 transition flex items-center gap-3">
                        <i class="fa-brands fa-apple text-2xl text-stone-300"></i>
                        <div class="text-left">
                            <p class="text-[10px] uppercase leading-none">Download on the</p>
                            <p class="text-sm text-white font-bold leading-none mt-1">App Store</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <div
            class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-12 pt-8 border-t border-stone-800 text-xs text-center md:text-left flex flex-col md:flex-row justify-between items-center gap-4">
            <p>&copy; 2026 Mabrur Travel App. All rights reserved.</p>
            <p>Izin PPIU Kemenag RI: No. U.123/2023</p>
        </div>
    </footer>

</body>

</html>
