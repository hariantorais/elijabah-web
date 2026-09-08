<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Primary Meta Tags & SEO -->
    <title>Web Elijabah - Jasa Pembuatan Website Biro Travel, UMKM & Bisnis</title>
    <meta name="title" content="Web Elijabah - Jasa Pembuatan Website Biro Travel, UMKM & Bisnis">
    <meta name="description" content="Jasa pembuatan website profesional untuk travel umroh, UMKM, dan bisnis owner. Desain modern, cepat, SEO-friendly, gratis domain & garansi teknis Batam & Indonesia.">
    <meta name="keywords" content="jasa pembuatan website, web travel umroh, website umkm, bikin website profesional, jasa web batam, web development indonesia, sistem erp umroh">
    <meta name="author" content="Web Elijabah">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Geo & Language Meta Tags -->
    <meta name="geo.region" content="ID-KR">
    <meta name="geo.placename" content="Batam Center">
    <meta name="language" content="Indonesian">

    <!-- Mobile & PWA Theme -->
    <meta name="theme-color" content="#0284c7">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta name="apple-mobile-web-app-title" content="Web Elijabah">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="Web Elijabah - Jasa Pembuatan Website Biro Travel, UMKM & Bisnis">
    <meta property="og:description" content="Solusi pembuatan website profesional, cepat, dan siap mendatangkan klien untuk Biro Travel, UMKM, dan Bisnis Owner.">
    <meta property="og:image" content="{{ asset('images/web-mockup.png') }}">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:alt" content="Mockup Layanan Pembuatan Website Web Elijabah">
    <meta property="og:site_name" content="Web Elijabah">
    <meta property="og:locale" content="id_ID">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="{{ url()->current() }}">
    <meta name="twitter:title" content="Web Elijabah - Jasa Pembuatan Website Biro Travel, UMKM & Bisnis">
    <meta name="twitter:description" content="Solusi pembuatan website profesional, cepat, dan siap mendatangkan klien untuk Biro Travel, UMKM, dan Bisnis Owner.">
    <meta name="twitter:image" content="{{ asset('images/web-mockup.png') }}">

    <!-- Favicon & Icons -->
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <link rel="apple-touch-icon" href="{{ asset('apple-touch-icon.png') }}">

    <!-- Resource Hints for Performance -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="dns-prefetch" href="https://cdnjs.cloudflare.com">
    <link rel="dns-prefetch" href="https://cdn.jsdelivr.net">
    <link rel="dns-prefetch" href="https://unpkg.com">

    <!-- Alpine JS Plugins & Core -->
    <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/collapse@3.x.x/dist/cdn.min.js"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Font: Plus Jakarta Sans -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @php
        $schemaData = [
            '@context' => 'https://schema.org',
            '@graph' => [
                [
                    '@type' => 'WebSite',
                    '@id' => url('/') . '/#website',
                    'url' => url('/'),
                    'name' => 'Web Elijabah',
                    'description' => settings('app_description'),
                    'inLanguage' => 'id-ID',
                ],
                [
                    '@type' => ['ProfessionalService', 'Organization'],
                    '@id' => url('/') . '/#organization',
                    'name' => 'Web Elijabah',
                    'legalName' => 'Elijabah International Group',
                    'url' => url('/'),
                    'logo' => asset('favicon.ico'),
                    'image' => asset('images/web-mockup.png'),
                    'description' => settings('app_description'),
                    'telephone' => settings('contact_phone'),
                    'email' => settings('contact_email'),
                    'address' => [
                        '@type' => 'PostalAddress',
                        'streetAddress' => 'Batam Center',
                        'addressLocality' => 'Batam',
                        'addressRegion' => 'Kepulauan Riau',
                        'addressCountry' => 'ID',
                    ],
                    'priceRange' => '$$',
                    'areaServed' => [
                        '@type' => 'Country',
                        'name' => 'Indonesia',
                    ],
                    'sameAs' => [
                        'https://www.instagram.com',
                        'https://www.linkedin.com',
                    ],
                ],
                [
                    '@type' => 'FAQPage',
                    '@id' => url('/') . '/#faq',
                    'mainEntity' => [
                        [
                            '@type' => 'Question',
                            'name' => 'Saya gaptek, apakah dibantu sampai websitenya jadi?',
                            'acceptedAnswer' => [
                                '@type' => 'Answer',
                                'text' => 'Tentu saja! Anda cukup kirimkan foto produk dan nama usaha melalui WhatsApp. Kami yang kerjakan semuanya sampai website aktif dan siap jualan.',
                            ],
                        ],
                        [
                            '@type' => 'Question',
                            'name' => 'Apakah ada biaya bulanan yang harus dibayar?',
                            'acceptedAnswer' => [
                                '@type' => 'Answer',
                                'text' => 'Tidak ada biaya bulanan. Anda cukup bayar sekali di depan. Biaya perpanjangan (Domain & Hosting) baru dibayar 1 tahun kemudian dengan harga yang sangat terjangkau.',
                            ],
                        ],
                        [
                            '@type' => 'Question',
                            'name' => 'Berapa lama proses pengerjaannya?',
                            'acceptedAnswer' => [
                                '@type' => 'Answer',
                                'text' => 'Untuk paket branding rata-rata 3-7 hari kerja setelah data materi lengkap kami terima. Paket custom disesuaikan dengan kompleksitas alur sistem.',
                            ],
                        ],
                        [
                            '@type' => 'Question',
                            'name' => 'Apakah website sudah SEO Friendly?',
                            'acceptedAnswer' => [
                                '@type' => 'Answer',
                                'text' => 'Ya, semua website dibangun dengan struktur kode semantik, meta tag lengkap, sitemap XML, dan kecepatan tinggi agar mudah terindeks oleh mesin pencari Google.',
                            ],
                        ],
                    ],
                ],
            ],
        ];
    @endphp
    <!-- Schema.org JSON-LD Structured Data -->
    <script type="application/ld+json">
    {!! json_encode($schemaData, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}
    </script>

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

    <!-- Aksesibilitas: Skip to Main Content Link -->
    <a href="#main-content"
        class="sr-only focus:not-sr-only focus:fixed focus:top-4 focus:left-4 focus:z-[100] focus:px-4 focus:py-2.5 focus:bg-brand-600 focus:text-white focus:rounded-xl focus:shadow-xl focus:outline-none font-bold text-sm">
        Langsung ke konten utama
    </a>

    <!-- 1. HEADER & NAVBAR (GLASSMORPHISM) -->
    <header role="banner">
        <nav x-data="{ mobileMenu: false, scrolled: false }" @scroll.window="scrolled = (window.pageYOffset > 20)"
            aria-label="Navigasi Utama"
            class="fixed w-full z-50 transition-all duration-300"
            :class="scrolled ? 'glass shadow-sm py-4' : 'bg-transparent py-6'">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between items-center">
                    <!-- Logo -->
                    <a href="{{ url('/') }}" class="flex-shrink-0 flex items-center gap-2" aria-label="Beranda Web Elijabah">
                        <div class="w-10 h-10 rounded-xl flex items-center justify-center">
                            <img src="{{ asset('favicon.ico') }}" alt="Logo Web Elijabah" width="40" height="40" class="object-contain">
                        </div>
                        <span class="text-2xl font-extrabold text-slate-900 tracking-tight">
                            Web<span class="text-transparent bg-clip-text bg-tech-gradient">Elijabah.</span>
                        </span>
                    </a>

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
                            Konsultasi Gratis <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
                        </a>
                    </div>

                    <!-- Mobile Button -->
                    <div class="md:hidden flex items-center">
                        <button @click="mobileMenu = !mobileMenu"
                            :aria-expanded="mobileMenu"
                            aria-label="Toggle menu navigasi"
                            class="text-slate-900 focus:outline-none text-2xl p-2 rounded-lg">
                            <i class="fa-solid" :class="mobileMenu ? 'fa-xmark' : 'fa-bars'" aria-hidden="true"></i>
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
    </header>

    <!-- MAIN CONTENT (SEMANTIC LANDMARK) -->
    <main id="main-content" role="main">
        @include('sections/hero-section')
        @include('sections/why-section')
        @include('sections/services-section')
        @include('sections/templates-section')
        @include('sections.business-solutions-section')
        @include('sections/pricing-section')
        @include('sections/order-flow-section')
        @include('sections/cta-section')
        @include('sections/faq-section')
    </main>

    <!-- FOOTER (SEMANTIC LANDMARK) -->
    <footer role="contentinfo" class="bg-white border-t border-slate-200 pt-16 pb-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-12">
                <!-- Brand -->
                <div class="md:col-span-1">
                    <div class="flex items-center gap-2 mb-6">
                        <div class="w-8 h-8 rounded-xl flex items-center justify-center">
                            <img src="{{ asset('favicon.ico') }}" alt="Logo Web Elijabah" width="32" height="32" class="object-contain">
                        </div>
                        <span class="text-xl font-extrabold text-slate-900 tracking-tight">Web<span
                                class="text-brand-500">Elijabah.</span></span>
                    </div>
                    <p class="text-slate-500 text-sm leading-relaxed mb-6">{{ settings('app_description') }}</p>
                    <div class="flex gap-4">
                        <a href="#" aria-label="LinkedIn Elijabah" class="text-slate-400 hover:text-brand-500 transition text-xl"><i
                                class="fa-brands fa-linkedin" aria-hidden="true"></i></a>
                        <a href="#" aria-label="Instagram Elijabah" class="text-slate-400 hover:text-brand-500 transition text-xl"><i
                                class="fa-brands fa-instagram" aria-hidden="true"></i></a>
                        <a href="#" aria-label="GitHub Elijabah" class="text-slate-400 hover:text-brand-500 transition text-xl"><i
                                class="fa-brands fa-github" aria-hidden="true"></i></a>
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
                        <li class="flex items-center gap-3"><i class="fa-solid fa-envelope text-brand-500" aria-hidden="true"></i>
                            {{ settings('contact_email') }}</li>
                        <li class="flex items-center gap-3"><i
                                class="fa-brands fa-whatsapp text-brand-500 text-lg" aria-hidden="true"></i>
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
        target="_blank"
        rel="noopener noreferrer"
        aria-label="Hubungi kami melalui WhatsApp"
        class="fixed bottom-6 right-6 z-[999] group">

        <!-- Label Tooltip (Muncul saat di-hover) -->
        <span
            class="absolute right-full mr-4 top-1/2 -translate-y-1/2 bg-white text-slate-900 px-4 py-2 rounded-xl shadow-xl text-sm font-bold border border-slate-100 opacity-0 group-hover:opacity-100 transition-all duration-300 pointer-events-none whitespace-nowrap">
            Ada pertanyaan? Chat kami
        </span>

        <!-- Efek Ping (Gelombang di belakang tombol) -->
        <span class="absolute inset-0 rounded-full bg-emerald-500 animate-ping opacity-20" aria-hidden="true"></span>

        <!-- Tombol Utama -->
        <div
            class="relative bg-emerald-500 text-white w-14 h-14 md:w-16 md:h-16 rounded-full shadow-2xl flex items-center justify-center text-3xl transition-all duration-300 group-hover:scale-110 group-hover:bg-emerald-600 group-active:scale-95">
            <i class="fa-brands fa-whatsapp" aria-hidden="true"></i>
        </div>
    </a>

</body>

</html>
