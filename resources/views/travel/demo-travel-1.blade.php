<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mabrur Travel - Ibadah Haji & Umroh Sesuai Sunnah</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&family=Playfair+Display:wght@700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        h1,
        h2,
        h3,
        .font-serif {
            font-family: 'Playfair Display', serif;
        }

        .glass-nav {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
        }

        .hero-gradient {
            background: linear-gradient(rgba(6, 78, 59, 0.7), rgba(6, 78, 59, 0.6)), url('https://images.unsplash.com/photo-1591604129939-f1efa4d9f7fa?q=80&w=2070&auto=format&fit=crop');
            background-size: cover;
            background-position: center;
        }
    </style>
</head>

<body class="bg-slate-50 text-slate-800" x-data="{ mobileMenu: false }">

    <nav x-data="{ mobileMenu: false }" class="fixed w-full z-50 glass-nav border-b border-slate-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-20 items-center">
                <div class="flex-shrink-0 flex items-center">
                    <span class="text-2xl font-bold text-emerald-800 tracking-tighter">MABRUR<span
                            class="text-amber-500">.</span></span>
                </div>

                <!-- Menu Desktop -->
                <div class="hidden md:flex space-x-8 items-center text-sm font-semibold uppercase tracking-wider">
                    <a href="#profil" class="hover:text-emerald-600 transition">Profil</a>
                    <a href="#fitur" class="hover:text-emerald-600 transition">Keunggulan</a>
                    <a href="#paket" class="hover:text-emerald-600 transition">Paket</a>
                    <a href="#galeri" class="hover:text-emerald-600 transition">Galeri</a>
                    <a href="#faq" class="hover:text-emerald-600 transition">FAQ</a>
                    <a href="https://wa.me/62812345678"
                        class="bg-emerald-700 text-white px-6 py-3 rounded-full hover:bg-emerald-800 transition shadow-lg">Konsultasi
                        WA</a>
                </div>

                <!-- Tombol Toggle Mobile -->
                <div class="md:hidden">
                    <button @click="mobileMenu = !mobileMenu" class="text-slate-600 focus:outline-none">
                        <!-- Icon berubah antara menu (bars) dan close (x) -->
                        <i class="fa-solid text-2xl" :class="mobileMenu ? 'fa-xmark' : 'fa-bars'"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Dropdown Menu Mobile -->
        <!-- x-cloak mencegah menu berkedip sebelum Alpine.js dimuat -->
        <div x-cloak x-show="mobileMenu" x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="opacity-0 -translate-y-2" x-transition:enter-end="opacity-100 translate-y-0"
            x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0"
            x-transition:leave-end="opacity-0 -translate-y-2"
            class="md:hidden bg-white border-b border-slate-100 p-4 space-y-4 shadow-xl absolute w-full">

            <a href="#profil" @click="mobileMenu = false" class="block font-semibold hover:text-emerald-600">Profil</a>
            <a href="#fitur" @click="mobileMenu = false"
                class="block font-semibold hover:text-emerald-600">Keunggulan</a>
            <a href="#paket" @click="mobileMenu = false" class="block font-semibold hover:text-emerald-600">Paket</a>
            <a href="#galeri" @click="mobileMenu = false" class="block font-semibold hover:text-emerald-600">Galeri</a>
            <a href="#faq" @click="mobileMenu = false" class="block font-semibold hover:text-emerald-600">FAQ</a>
            <a href="https://wa.me/62812345678"
                class="block w-full text-center bg-emerald-700 text-white py-3 rounded-lg hover:bg-emerald-800">WhatsApp</a>
        </div>
    </nav>

    <section class="hero-gradient h-screen flex items-center justify-center text-center px-4" x-data="{ loaded: false }"
        x-init="setTimeout(() => loaded = true, 100)">
        <!-- Tambahan mt-16 agar teks tidak tertutup navigasi saat di HP -->
        <div class="max-w-4xl mt-16 md:mt-0">

            <!-- Headline -->
            <h1 class="text-4xl md:text-7xl text-white font-bold mb-6 leading-tight transition-all duration-1000 transform"
                :class="loaded ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'">
                Niatkan Ibadah, Kami Mudahkan Langkah
            </h1>

            <!-- Subheadline -->
            <p class="text-lg md:text-xl text-emerald-50 mb-10 transition-all duration-1000 delay-300 transform"
                :class="loaded ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'">
                Penyelenggara Haji & Umroh Resmi Kemenag dengan bimbingan sesuai Sunnah Rasulullah ﷺ. Fasilitas bintang
                5, harga tetap terjangkau.
            </p>

            <!-- Tombol CTA -->
            <div class="flex flex-col md:flex-row gap-4 justify-center transition-all duration-1000 delay-500 transform"
                :class="loaded ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'">
                <a href="#paket"
                    class="bg-amber-500 text-emerald-950 px-10 py-4 rounded-full font-bold text-lg hover:bg-amber-400 transition shadow-2xl">
                    Pilih Paket Sekarang
                </a>
                <a href="#profil"
                    class="border-2 border-white text-white px-10 py-4 rounded-full font-bold text-lg hover:bg-white hover:text-emerald-900 transition">
                    Tentang Kami
                </a>
            </div>

        </div>
    </section>

    <section class="relative -mt-16 z-10 max-w-6xl mx-auto px-4">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 bg-white p-8 rounded-3xl shadow-2xl border border-slate-100">
            <div class="text-center p-4 border-r border-slate-100 last:border-0">
                <div class="text-3xl font-bold text-emerald-700">15+</div>
                <div class="text-xs text-slate-500 uppercase tracking-widest font-bold">Tahun Pengalaman</div>
            </div>
            <div class="text-center p-4 border-r border-slate-100 last:border-0">
                <div class="text-3xl font-bold text-emerald-700">12k+</div>
                <div class="text-xs text-slate-500 uppercase tracking-widest font-bold">Jemaah Berangkat</div>
            </div>
            <div class="text-center p-4 border-r border-slate-100 last:border-0">
                <div class="text-3xl font-bold text-emerald-700">99%</div>
                <div class="text-xs text-slate-500 uppercase tracking-widest font-bold">Kepuasan Jemaah</div>
            </div>
            <div class="text-center p-4 border-r border-slate-100 last:border-0">
                <div class="text-3xl font-bold text-emerald-700">100%</div>
                <div class="text-xs text-slate-500 uppercase tracking-widest font-bold">Izin Resmi RI</div>
            </div>
        </div>
    </section>

    <section id="profil" class="py-24 bg-white overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row items-center gap-16">
                <div class="md:w-1/2 relative">
                    <img src="https://images.unsplash.com/photo-1591604129939-f1efa4d9f7fa?q=80&w=800&auto=format&fit=crop"
                        class="rounded-[40px] shadow-2xl z-10 relative" alt="About">
                    <div class="absolute -bottom-6 -right-6 w-48 h-48 bg-amber-100 rounded-full -z-0"></div>
                </div>
                <div class="md:w-1/2">
                    <span class="text-emerald-700 font-bold tracking-widest uppercase text-sm mb-4 block">Sejarah &
                        Dedikasi</span>
                    <h2 class="text-4xl font-bold mb-6 text-slate-900 leading-tight">Melayani Tamu Allah Sejak 2008
                        dengan Penuh Amanah</h2>
                    <p class="text-slate-600 mb-6 text-lg leading-relaxed">
                        Mabrur Travel didirikan dengan visi menjadi jembatan spiritual bagi muslim Indonesia yang
                        merindukan Baitullah. Kami bukan sekadar agen perjalanan, tapi sahabat ibadah Anda.
                    </p>
                    <div class="space-y-4">
                        <div class="flex items-start gap-4">
                            <div class="bg-emerald-100 p-2 rounded-lg text-emerald-700"><i
                                    class="fa-solid fa-check"></i></div>
                            <div>
                                <h4 class="font-bold">Misi Utama</h4>
                                <p class="text-sm text-slate-500">Membimbing jemaah meraih predikat Haji & Umroh yang
                                    mabrur sesuai tuntunan Al-Qur'an dan Sunnah.</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="bg-emerald-100 p-2 rounded-lg text-emerald-700"><i
                                    class="fa-solid fa-check"></i></div>
                            <div>
                                <h4 class="font-bold">Keamanan Finansial</h4>
                                <p class="text-sm text-slate-500">Sistem pembayaran transparan dan aman dengan jaminan
                                    keberangkatan tepat waktu.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="fitur" class="py-24 bg-slate-900 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold mb-4">Mengapa Jemaah Memilih Kami?</h2>
                <div class="w-20 h-1 bg-amber-500 mx-auto"></div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                <div class="text-center p-8 rounded-3xl bg-slate-800 hover:bg-slate-700 transition">
                    <i class="fa-solid fa-kaaba text-5xl text-amber-500 mb-6 block"></i>
                    <h3 class="text-xl font-bold mb-4">Hotel Ring 1</h3>
                    <p class="text-slate-400">Jarak hotel sangat dekat dengan Masjidil Haram (Makkah) dan Masjid Nabawi
                        (Madinah).</p>
                </div>
                <div class="text-center p-8 rounded-3xl bg-slate-800 hover:bg-slate-700 transition">
                    <i class="fa-solid fa-book-quran text-5xl text-amber-500 mb-6 block"></i>
                    <h3 class="text-xl font-bold mb-4">Bimbingan Sunnah</h3>
                    <p class="text-slate-400">Manasik dan pembimbingan intensif sesuai tata cara Nabi ﷺ tanpa bid'ah
                        dan khurafat.</p>
                </div>
                <div class="text-center p-8 rounded-3xl bg-slate-800 hover:bg-slate-700 transition">
                    <i class="fa-solid fa-plane-departure text-5xl text-amber-500 mb-6 block"></i>
                    <h3 class="text-xl font-bold mb-4">Kepastian Jadwal</h3>
                    <p class="text-slate-400">Tiket pesawat sudah diblok (pnr) sebelum pendaftaran dibuka. Pasti
                        berangkat, pasti harinya.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="paket" class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-slate-900 mb-4">Paket Perjalanan Terbaik</h2>
                <p class="text-slate-500">Harga All-in tanpa biaya tambahan yang disembunyikan.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div
                    class="border border-slate-200 rounded-[40px] p-8 flex flex-col hover:border-emerald-500 transition duration-500 hover:shadow-2xl">
                    <div class="bg-slate-100 rounded-3xl h-48 mb-6 overflow-hidden">
                        <img src="{{ asset('images/doa.png') }}" class="w-full h-full object-cover" alt="Package">
                    </div>
                    <h3 class="text-2xl font-bold mb-2">Umroh Hemat</h3>
                    <p class="text-emerald-700 font-bold text-3xl mb-6">Rp 28.9 jt</p>
                    <ul class="space-y-3 text-slate-600 mb-8 flex-grow text-sm">
                        <li><i class="fa-solid fa-hotel mr-2 text-emerald-600"></i> Hotel Bintang 4</li>
                        <li><i class="fa-solid fa-plane mr-2 text-emerald-600"></i> Lion Air / Saudia</li>
                        <li><i class="fa-solid fa-clock mr-2 text-emerald-600"></i> Program 9 Hari</li>
                        <li><i class="fa-solid fa-utensils mr-2 text-emerald-600"></i> Fullboard Nusantara</li>
                    </ul>
                    <a href="#"
                        class="block text-center border-2 border-emerald-700 text-emerald-700 py-4 rounded-full font-bold hover:bg-emerald-700 hover:text-white transition">Detail
                        Paket</a>
                </div>

                <div
                    class="bg-emerald-900 rounded-[40px] p-8 flex flex-col transform md:-translate-y-6 shadow-2xl relative overflow-hidden">
                    <div
                        class="absolute top-6 right-6 bg-amber-500 text-emerald-950 px-4 py-1 rounded-full text-xs font-bold uppercase">
                        Best Seller</div>
                    <div class="bg-emerald-800 rounded-3xl h-48 mb-6 overflow-hidden">
                        <img src="{{ asset('images/tawaf.png') }}" class="w-full h-full object-cover" alt="Package">
                    </div>
                    <h3 class="text-2xl font-bold mb-2 text-white">Umroh VIP Plus</h3>
                    <p class="text-amber-400 font-bold text-3xl mb-6">Rp 38.5 jt</p>
                    <ul class="space-y-3 text-emerald-100 mb-8 flex-grow text-sm">
                        <li><i class="fa-solid fa-hotel mr-2 text-amber-500"></i> Hotel Bintang 5 (Depan Masjid)</li>
                        <li><i class="fa-solid fa-plane mr-2 text-amber-500"></i> Saudi Airlines Direct</li>
                        <li><i class="fa-solid fa-train-subway mr-2 text-amber-500"></i> Kereta Cepat Haramain</li>
                        <li><i class="fa-solid fa-gift mr-2 text-amber-500"></i> City Tour Thaif</li>
                    </ul>
                    <a href="#"
                        class="block text-center bg-amber-500 text-emerald-950 py-4 rounded-full font-bold hover:bg-amber-400 transition">Daftar
                        Sekarang</a>
                </div>

                <div
                    class="border border-slate-200 rounded-[40px] p-8 flex flex-col hover:border-emerald-500 transition duration-500 hover:shadow-2xl">
                    <div class="bg-slate-100 rounded-3xl h-48 mb-6 overflow-hidden">
                        <img src="{{ asset('images/mekkah.png') }}" class="w-full h-full object-cover"
                            alt="Package">
                    </div>
                    <h3 class="text-2xl font-bold mb-2">Haji Khusus</h3>
                    <p class="text-emerald-700 font-bold text-3xl mb-6">$ 14.500</p>
                    <ul class="space-y-3 text-slate-600 mb-8 flex-grow text-sm">
                        <li><i class="fa-solid fa-id-card mr-2 text-emerald-600"></i> Visa Haji Furoda / Resmi</li>
                        <li><i class="fa-solid fa-campground mr-2 text-emerald-600"></i> Tenda Maktab VIP Arafah</li>
                        <li><i class="fa-solid fa-star mr-2 text-emerald-600"></i> Tanpa Antre Bertahun-tahun</li>
                        <li><i class="fa-solid fa-user-doctor mr-2 text-emerald-600"></i> Tim Medis Standby</li>
                    </ul>
                    <a href="#"
                        class="block text-center border-2 border-emerald-700 text-emerald-700 py-4 rounded-full font-bold hover:bg-emerald-700 hover:text-white transition">Konsultasi
                        Haji</a>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-4xl font-bold text-center mb-16">Apa Kata Mereka?</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-10 rounded-[30px] shadow-sm italic text-slate-600 relative">
                    <i class="fa-solid fa-quote-left absolute top-6 left-6 text-emerald-100 text-4xl"></i>
                    "Alhamdulillah, bimbingan ustadznya sangat detail. Baru kali ini saya merasa umroh benar-benar
                    sesuai sunnah. Fasilitas hotel di Makkah luar biasa dekat."
                    <div class="mt-8 flex items-center gap-4 not-italic">
                        <div class="w-12 h-12 bg-slate-200 rounded-full overflow-hidden">
                            <img src="https://i.pravatar.cc/150?u=1" alt="avatar">
                        </div>
                        <div>
                            <p class="font-bold text-slate-900">H. Ahmad Subarkah</p>
                            <p class="text-xs text-emerald-600 uppercase">Jemaah Jakarta</p>
                        </div>
                    </div>
                </div>
                <div class="bg-white p-10 rounded-[30px] shadow-sm italic text-slate-600 relative">
                    <i class="fa-solid fa-quote-left absolute top-6 left-6 text-emerald-100 text-4xl"></i>
                    "Sangat puas dengan pelayanan Mabrur Travel. Dari pendaftaran sampai pulang semua diurus dengan
                    rapi. Tim mutawwif di sana sangat membantu orang tua saya."
                    <div class="mt-8 flex items-center gap-4 not-italic">
                        <div class="w-12 h-12 bg-slate-200 rounded-full overflow-hidden">
                            <img src="https://i.pravatar.cc/150?u=2" alt="avatar">
                        </div>
                        <div>
                            <p class="font-bold text-slate-900">Hj. Siti Aminah</p>
                            <p class="text-xs text-emerald-600 uppercase">Jemaah Bandung</p>
                        </div>
                    </div>
                </div>
                <div class="bg-white p-10 rounded-[30px] shadow-sm italic text-slate-600 relative">
                    <i class="fa-solid fa-quote-left absolute top-6 left-6 text-emerald-100 text-4xl"></i>
                    "Terima kasih Mabrur. Haji Furoda kami berjalan lancar tanpa kendala visa. Tenda di Mina sangat
                    nyaman. Rekomendasi sekali untuk keluarga."
                    <div class="mt-8 flex items-center gap-4 not-italic">
                        <div class="w-12 h-12 bg-slate-200 rounded-full overflow-hidden">
                            <img src="https://i.pravatar.cc/150?u=3" alt="avatar">
                        </div>
                        <div>
                            <p class="font-bold text-slate-900">Dr. Hendrawan</p>
                            <p class="text-xs text-emerald-600 uppercase">Jemaah Surabaya</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="galeri" class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-4xl font-bold mb-16">Dokumentasi Jemaah</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <img src="{{ asset('images/madinah.png') }}"
                    class="w-full h-64 object-cover rounded-2xl hover:scale-105 transition" alt="G1">
                <img src="{{ asset('images/mekkah.png') }}"
                    class="w-full h-64 object-cover rounded-2xl hover:scale-105 transition" alt="G2">
                <img src="{{ asset('images/doa.png') }}"
                    class="w-full h-64 object-cover rounded-2xl hover:scale-105 transition" alt="G3">
                <img src="{{ asset('images/tawaf.png') }}"
                    class="w-full h-64 object-cover rounded-2xl hover:scale-105 transition" alt="G4">
            </div>
        </div>
    </section>

    <section class="py-24 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-4xl font-bold mb-16">Pembimbing Ibadah</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
                <div>
                    <img src="{{ asset('images/owner.png') }}"
                        class="w-48 h-48 rounded-full mx-auto mb-6 border-4 border-emerald-700 p-2 shadow-xl"
                        alt="T1">
                    <h4 class="text-xl font-bold text-slate-900">Ustaz Dr. Khalid Lc. MA</h4>
                    <p class="text-emerald-700">Pembimbing Utama</p>
                </div>
                <div>
                    <img src="{{ asset('images/user1.png') }}"
                        class="w-48 h-48 rounded-full mx-auto mb-6 border-4 border-emerald-700 p-2 shadow-xl"
                        alt="T2">
                    <h4 class="text-xl font-bold text-slate-900">Ustaz Abdullah Syakir</h4>
                    <p class="text-emerald-700">Manasik & Fiqih</p>
                </div>
                <div>
                    <img src="{{ asset('images/user2.png') }}"
                        class="w-48 h-48 rounded-full mx-auto mb-6 border-4 border-emerald-700 p-2 shadow-xl"
                        alt="T3">
                    <h4 class="text-xl font-bold text-slate-900">Ustaz Muhammad Fauzan</h4>
                    <p class="text-emerald-700">Mutawwif Senior</p>
                </div>
            </div>
        </div>
    </section>

    <section id="faq" class="py-24 bg-white" x-data="{ selected: null }">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-4xl font-bold text-center mb-16">Pertanyaan Umum</h2>
            <div class="space-y-4">
                <div class="border border-slate-200 rounded-2xl overflow-hidden">
                    <button class="w-full flex justify-between items-center p-6 text-left font-bold"
                        @click="selected !== 1 ? selected = 1 : selected = null">
                        <span>Apa saja syarat pendaftaran Umroh?</span>
                        <i :class="selected === 1 ? 'fa-minus' : 'fa-plus'" class="fa-solid text-emerald-600"></i>
                    </button>
                    <div x-show="selected === 1" x-transition
                        class="p-6 pt-0 text-slate-600 border-t border-slate-50">
                        Syarat utama adalah Paspor dengan masa berlaku minimal 7 bulan, Buku Kuning Vaksin Meningitis,
                        Pas foto 4x6 (2 lembar), dan fotokopi KTP/KK.
                    </div>
                </div>
                <div class="border border-slate-200 rounded-2xl overflow-hidden">
                    <button class="w-full flex justify-between items-center p-6 text-left font-bold"
                        @click="selected !== 2 ? selected = 2 : selected = null">
                        <span>Apakah harga paket sudah termasuk perlengkapan?</span>
                        <i :class="selected === 2 ? 'fa-minus' : 'fa-plus'" class="fa-solid text-emerald-600"></i>
                    </button>
                    <div x-show="selected === 2" x-transition
                        class="p-6 pt-0 text-slate-600 border-t border-slate-50">
                        Ya, semua paket kami bersifat All-in. Sudah termasuk kain ihram/mukena, koper, tas selempang,
                        kain seragam, buku doa, dan air zam-zam 5 liter.
                    </div>
                </div>
                <div class="border border-slate-200 rounded-2xl overflow-hidden">
                    <button class="w-full flex justify-between items-center p-6 text-left font-bold"
                        @click="selected !== 3 ? selected = 3 : selected = null">
                        <span>Bagaimana sistem pembayarannya?</span>
                        <i :class="selected === 3 ? 'fa-minus' : 'fa-plus'" class="fa-solid text-emerald-600"></i>
                    </button>
                    <div x-show="selected === 3" x-transition
                        class="p-6 pt-0 text-slate-600 border-t border-slate-50">
                        Pembayaran awal (Booking Fee) sebesar Rp 5.000.000. Pelunasan dilakukan maksimal 45 hari sebelum
                        jadwal keberangkatan.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-slate-900 text-white py-20">
        <div
            class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-4 gap-12 border-b border-slate-800 pb-16">
            <div class="col-span-1 md:col-span-1">
                <span class="text-3xl font-bold text-emerald-400 mb-6 block tracking-tighter">MABRUR<span
                        class="text-amber-500">.</span></span>
                <p class="text-slate-400 leading-relaxed mb-6">Penyelenggara Perjalanan Ibadah Umroh (PPIU) resmi
                    Kemenag RI dengan komitmen pelayanan sepenuh hati.</p>
                <div class="flex gap-4">
                    <a href="#"
                        class="w-10 h-10 bg-slate-800 rounded-full flex items-center justify-center hover:bg-emerald-700 transition"><i
                            class="fa-brands fa-instagram"></i></a>
                    <a href="#"
                        class="w-10 h-10 bg-slate-800 rounded-full flex items-center justify-center hover:bg-emerald-700 transition"><i
                            class="fa-brands fa-facebook"></i></a>
                    <a href="#"
                        class="w-10 h-10 bg-slate-800 rounded-full flex items-center justify-center hover:bg-emerald-700 transition"><i
                            class="fa-brands fa-youtube"></i></a>
                </div>
            </div>
            <div>
                <h4 class="font-bold mb-6 uppercase tracking-widest text-sm text-amber-500">Tautan Cepat</h4>
                <ul class="space-y-4 text-slate-400 text-sm">
                    <li><a href="#profil" class="hover:text-white transition">Tentang Kami</a></li>
                    <li><a href="#paket" class="hover:text-white transition">Paket Ibadah</a></li>
                    <li><a href="#galeri" class="hover:text-white transition">Dokumentasi</a></li>
                    <li><a href="#faq" class="hover:text-white transition">Bantuan FAQ</a></li>
                </ul>
            </div>
            <div>
                <h4 class="font-bold mb-6 uppercase tracking-widest text-sm text-amber-500">Kontak Kami</h4>
                <ul class="space-y-4 text-slate-400 text-sm">
                    <li><i class="fa-solid fa-phone mr-2 text-emerald-500"></i> (021) 1234 5678</li>
                    <li><i class="fa-solid fa-envelope mr-2 text-emerald-500"></i> salam@mabrurtravel.id</li>
                    <li><i class="fa-solid fa-location-dot mr-2 text-emerald-500"></i> Jl. Kebayoran Baru No. 12,
                        Jakarta Selatan</li>
                </ul>
            </div>
            <div>
                <h4 class="font-bold mb-6 uppercase tracking-widest text-sm text-amber-500">Izin & Legalitas</h4>
                <div class="bg-slate-800 p-4 rounded-xl border border-slate-700">
                    <p class="text-xs text-slate-300 font-bold mb-2">Izin PPIU No:</p>
                    <p class="text-sm font-mono text-amber-500">U.123/2023</p>
                    <p class="text-xs text-slate-300 font-bold mt-4 mb-2">Izin PIHK No:</p>
                    <p class="text-sm font-mono text-amber-500">H.456/2023</p>
                </div>
            </div>
        </div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-12 text-center text-slate-500 text-xs">
            &copy; 2024 Mabrur Travel - PT. Syiar Cahaya Amanah. All rights reserved.
        </div>
    </footer>

</body>

</html>
