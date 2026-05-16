<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Elijabah - Jasa Pembuatan Website Biro Travel | UMKM | Bisnis Owner | Lembaga Pendidikan Termurah</title>

    <!-- Tailwind CSS & Alpine JS -->

    <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/collapse@3.x.x/dist/cdn.min.js"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Font: Plus Jakarta Sans -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    @vite(['resources/css/app.css', 'resources/js/app.js'])



    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #f8fafc;
            color: #334155;
        }

        [x-cloak] {
            display: none !important;
        }

        /* Floating Animation */
        .animate-float {
            animation: float 6s ease-in-out infinite;
        }

        @keyframes float {
            0% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-15px);
            }

            100% {
                transform: translateY(0px);
            }
        }

        /* Glassmorphism utility */
        .glass {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }
    </style>
</head>

<body class="antialiased selection:bg-brand-500 selection:text-white">

    <!-- 1. NAVBAR (GLASSMORPHISM) -->
    <nav x-data="{ mobileMenu: false, scrolled: false }" @scroll.window="scrolled = (window.pageYOffset > 20)"
        class="fixed w-full z-50 transition-all duration-300"
        :class="scrolled ? 'glass shadow-sm py-4' : 'bg-transparent py-6'">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center gap-2">
                    <div class="w-10 h-10 rounded-xl  flex items-center justify-center ">
                        <!-- Mengganti ikon <i> dengan <img> -->
                        <img src="{{ asset('favicon.ico') }}" alt="Logo" class="object-contain">
                    </div>
                    <span class="text-2xl font-extrabold text-slate-900 tracking-tight">
                        Web<span class="text-transparent bg-clip-text bg-tech-gradient">Elijabah.</span>
                    </span>
                </div>

                <!-- Desktop Menu -->
                <div class="hidden md:flex space-x-8 items-center font-semibold text-slate-600 text-sm">
                    <a href="#hero" class="hover:text-brand-600 transition">Beranda</a>
                    <a href="#layanan" class="hover:text-brand-600 transition">Layanan</a>
                    <a href="#template" class="hover:text-brand-600 transition">Template</a>
                    <a href="#harga" class="hover:text-brand-600 transition">Harga</a>
                    <a href="#pemesanan" class="hover:text-brand-600 transition">Cara Pesan</a>
                    <a href="#faq" class="hover:text-brand-600 transition">FAQ</a>
                </div>

                <!-- Desktop CTA -->
                <div class="hidden md:block">
                    <a href="https://wa.me/{{ settings('contact_phone') }}"
                        class="bg-slate-900 text-white px-6 py-2.5 rounded-full font-bold hover:bg-brand-600 transition duration-300 shadow-lg flex items-center gap-2 text-sm">
                        Konsultasi Gratis <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>

                <!-- Mobile Button -->
                <div class="md:hidden flex items-center">
                    <button @click="mobileMenu = !mobileMenu" class="text-slate-900 focus:outline-none text-2xl">
                        <i class="fa-solid" :class="mobileMenu ? 'fa-xmark' : 'fa-bars'"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div x-cloak x-show="mobileMenu" x-transition
            class="md:hidden bg-white absolute w-full shadow-2xl border-t border-slate-100">
            <div class="px-6 py-8 space-y-4 text-center">
                <a href="#hero" @click="mobileMenu = false"
                    class="block font-bold text-slate-700 text-lg hover:text-brand-600">Beranda</a>
                <a href="#layanan" @click="mobileMenu = false"
                    class="block font-bold text-slate-700 text-lg hover:text-brand-600">Layanan</a>
                <a href="#template" @click="mobileMenu = false"
                    class="block font-bold text-slate-700 text-lg hover:text-brand-600">Template</a>
                <a href="#harga" @click="mobileMenu = false"
                    class="block font-bold text-slate-700 text-lg hover:text-brand-600">Harga</a>
                <a href="#pemesanan" @click="mobileMenu = false"
                    class="block font-bold text-slate-700 text-lg hover:text-brand-600">Cara Pesan</a>
                <a href="#faq" @click="mobileMenu = false"
                    class="block font-bold text-slate-700 text-lg hover:text-brand-600">FAQ</a>
                <a href="https://wa.me/{{ settings('contact_phone') }}"
                    class="block w-full bg-tech-gradient text-white py-3 rounded-xl font-bold mt-4 shadow-md">
                    Hubungi Kami
                </a>
            </div>
        </div>
    </nav>

    @include('sections/hero-section')
    @include('sections/why-section')
    @include('sections/services-section')
    @include('sections/templates-section')
    @include('sections.business-solutions-section')
    @include('sections/pricing-section')
    @include('sections/order-flow-section')
    @include('sections/cta-section')
    @include('sections/faq-section')
    <footer class="bg-white border-t border-slate-200 pt-16 pb-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-12">
                <!-- Brand -->
                <div class="md:col-span-1">
                    <div class="flex items-center gap-2 mb-6">
                        <div class="w-8 h-8 rounded-xl  flex items-center justify-center ">
                            <!-- Mengganti ikon <i> dengan <img> -->
                            <img src="{{ asset('favicon.ico') }}" alt="Logo" class="object-contain">
                        </div>
                        <span class="text-xl font-extrabold text-slate-900 tracking-tight">Web<span
                                class="text-brand-500">Elijabah.</span></span>
                    </div>
                    <p class="text-slate-500 text-sm leading-relaxed mb-6">{{ settings('app_description') }}</p>
                    <div class="flex gap-4">
                        <a href="#" class="text-slate-400 hover:text-brand-500 transition text-xl"><i
                                class="fa-brands fa-linkedin"></i></a>
                        <a href="#" class="text-slate-400 hover:text-brand-500 transition text-xl"><i
                                class="fa-brands fa-instagram"></i></a>
                        <a href="#" class="text-slate-400 hover:text-brand-500 transition text-xl"><i
                                class="fa-brands fa-github"></i></a>
                    </div>
                </div>

                <!-- Lintas Tautan -->
                <div>
                    <h4 class="font-bold text-slate-900 mb-6">Layanan Menu</h4>
                    <ul class="space-y-3 text-sm font-medium text-slate-500">
                        <li><a href="#hero" class="hover:text-brand-500 transition">Beranda</a></li>
                        <li><a href="#layanan" class="hover:text-brand-500 transition">Jasa Website</a></li>
                        <li><a href="#template" class="hover:text-brand-500 transition">Template</a></li>
                        <li><a href="#harga" class="hover:text-brand-500 transition">Daftar Harga</a></li>
                    </ul>
                </div>

                <!-- Kebijakan -->
                <div>
                    <h4 class="font-bold text-slate-900 mb-6">Kebijakan Bisnis</h4>
                    <ul class="space-y-3 text-sm font-medium text-slate-500">
                        <li><a href="#" class="hover:text-brand-500 transition">Terms of Service</a></li>
                        <li><a href="#" class="hover:text-brand-500 transition">Privacy Policy</a></li>
                        <li><a href="#" class="hover:text-brand-500 transition">Kebijakan Refund</a></li>
                        <li><a href="#" class="hover:text-brand-500 transition">Maintenance Support</a></li>
                    </ul>
                </div>

                <!-- Kontak -->
                <div>
                    <h4 class="font-bold text-slate-900 mb-6">Kontak Admin</h4>
                    <ul class="space-y-4 text-sm font-medium text-slate-500">
                        <li class="flex items-center gap-3"><i class="fa-solid fa-envelope text-brand-500"></i>
                            {{ settings('contact_email') }}</li>
                        <li class="flex items-center gap-3"><i
                                class="fa-brands fa-whatsapp text-brand-500 text-lg"></i>
                            {{ settings('contact_phone') }}</li>

                    </ul>
                </div>
            </div>

            <!-- Copyright -->
            <div
                class="border-t border-slate-200 pt-8 flex flex-col md:flex-row justify-between items-center gap-4 text-slate-400 text-sm font-medium">
                <p>&copy; 2026 Elijabah International Group. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Floating WhatsApp Button -->
    <a href="https://wa.me/{{ settings('contact_phone') }}?text=Halo,+saya+ingin+tanya+tentang+jasa+pembuatan+website"
        target="_blank" class="fixed bottom-6 right-6 z-[999] group">

        <!-- Label Tooltip (Muncul saat di-hover) -->
        <span
            class="absolute right-full mr-4 top-1/2 -translate-y-1/2 bg-white text-slate-900 px-4 py-2 rounded-xl shadow-xl text-sm font-bold border border-slate-100 opacity-0 group-hover:opacity-100 transition-all duration-300 pointer-events-none whitespace-nowrap">
            Ada pertanyaan? Chat kami
        </span>

        <!-- Efek Ping (Gelombang di belakang tombol) -->
        <span class="absolute inset-0 rounded-full bg-emerald-500 animate-ping opacity-20"></span>

        <!-- Tombol Utama -->
        <div
            class="relative bg-emerald-500 text-white w-14 h-14 md:w-16 md:h-16 rounded-full shadow-2xl flex items-center justify-center text-3xl transition-all duration-300 group-hover:scale-110 group-hover:bg-emerald-600 group-active:scale-95">
            <i class="fa-brands fa-whatsapp"></i>
        </div>
    </a>

</body>

</html>
