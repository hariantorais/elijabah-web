<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elena Rostova | Editorial Photographer</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <!-- Google Fonts -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500&family=Outfit:wght@300;400;600;800&display=swap');

        body {
            font-family: 'Inter', sans-serif;
            background-color: #FAFAFA;
            /* Off-white / Gallery White */
            color: #18181b;
            /* Zinc 900 */
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        .font-display {
            font-family: 'Outfit', sans-serif;
        }

        /* Smooth Masonry Transitions */
        .masonry-item img {
            transition: all 0.6s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .masonry-item:hover img {
            transform: scale(1.02);
        }

        /* Custom minimalist scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: #FAFAFA;
        }

        ::-webkit-scrollbar-thumb {
            background: #e4e4e7;
            border-radius: 10px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #d4d4d8;
        }
    </style>
</head>

<body class="antialiased selection:bg-zinc-900 selection:text-white" x-data="{ mobileMenu: false, scrolled: false }"
    @scroll.window="scrolled = (window.pageYOffset > 50)">

    <!-- 1. MINIMALIST NAVIGATION -->
    <nav :class="{ 'bg-white/90 backdrop-blur-md shadow-sm': scrolled, 'bg-transparent': !scrolled }"
        class="fixed top-0 w-full z-[100] transition-all duration-300">
        <div class="max-w-[90rem] mx-auto px-6 lg:px-12 py-6 flex justify-between items-center">

            <!-- Logo / Name -->
            <a href="#" class="text-2xl font-display font-extrabold tracking-tighter uppercase z-50 relative">
                Elena Rostova.
            </a>

            <!-- Desktop Menu -->
            <div class="hidden md:flex items-center gap-12 text-sm font-medium tracking-wide uppercase">
                <a href="#work" class="text-zinc-500 hover:text-zinc-900 transition-colors">Selected Works</a>
                <a href="#about" class="text-zinc-500 hover:text-zinc-900 transition-colors">The Artist</a>
                <a href="#services" class="text-zinc-500 hover:text-zinc-900 transition-colors">Services</a>
            </div>

            <!-- CTA Desktop -->
            <div class="hidden md:block">
                <a href="#contact"
                    class="text-sm font-medium tracking-wide uppercase border-b border-zinc-900 pb-1 hover:text-zinc-500 hover:border-zinc-500 transition-colors">
                    Book a Shoot
                </a>
            </div>

            <!-- Mobile Toggle -->
            <button @click="mobileMenu = !mobileMenu"
                class="md:hidden text-zinc-900 text-2xl z-50 relative focus:outline-none">
                <i :class="mobileMenu ? 'fa-solid fa-xmark' : 'fa-solid fa-bars'"></i>
            </button>
        </div>

        <!-- Mobile Fullscreen Menu -->
        <div x-show="mobileMenu" x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 -translate-y-full" x-transition:enter-end="opacity-100 translate-y-0"
            x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 translate-y-0"
            x-transition:leave-end="opacity-0 -translate-y-full"
            class="fixed inset-0 bg-white z-40 flex flex-col justify-center items-center gap-8" x-cloak>
            <a href="#work" @click="mobileMenu = false"
                class="text-4xl font-display font-bold uppercase tracking-tighter hover:text-zinc-500">Works</a>
            <a href="#about" @click="mobileMenu = false"
                class="text-4xl font-display font-bold uppercase tracking-tighter hover:text-zinc-500">About</a>
            <a href="#services" @click="mobileMenu = false"
                class="text-4xl font-display font-bold uppercase tracking-tighter hover:text-zinc-500">Services</a>
            <a href="#contact" @click="mobileMenu = false"
                class="text-4xl font-display font-bold uppercase tracking-tighter hover:text-zinc-500">Contact</a>
        </div>
    </nav>

    <!-- 2. TYPOGRAPHY HERO -->
    <header class="pt-40 lg:pt-56 pb-20 px-6 lg:px-12 max-w-[90rem] mx-auto">
        <div class="flex flex-col items-center text-center">
            <p class="text-xs font-bold uppercase tracking-[0.3em] text-zinc-400 mb-8">Editorial & Commercial
                Photographer</p>
            <h1
                class="text-5xl md:text-7xl lg:text-[7rem] font-display font-extrabold uppercase tracking-tighter leading-[0.9] text-zinc-900 mb-10">
                Capturing The <br>
                <span class="text-zinc-400">Poetry</span> of Reality.
            </h1>
            <p class="max-w-2xl text-lg md:text-xl text-zinc-500 font-light leading-relaxed">
                Menangkap esensi, emosi, dan keanggunan melalui lensa. Berbasis di Bali & Jakarta, tersedia untuk
                penugasan komersial di seluruh dunia.
            </p>
        </div>
    </header>

    <!-- 3. MASONRY GALLERY (THE CORE PORTFOLIO) -->
    <section id="work" class="px-6 lg:px-12 pb-32 max-w-[90rem] mx-auto">
        <div class="flex justify-between items-end mb-12">
            <h2 class="text-2xl font-display font-bold uppercase tracking-tight">Selected Archives</h2>
            <div class="hidden sm:flex gap-6 text-xs font-bold uppercase tracking-widest text-zinc-400">
                <span class="text-zinc-900">All</span>
                <a href="#" class="hover:text-zinc-900 transition-colors">Fashion</a>
                <a href="#" class="hover:text-zinc-900 transition-colors">Portrait</a>
                <a href="#" class="hover:text-zinc-900 transition-colors">Editorial</a>
            </div>
        </div>

        <!-- CSS Columns Masonry -->
        <div class="columns-1 md:columns-2 lg:columns-3 gap-6 space-y-6">

            <!-- Image 1 (Portrait) -->
            <div class="masonry-item break-inside-avoid relative overflow-hidden group bg-zinc-200">
                <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?q=80&w=800&auto=format&fit=crop"
                    class="w-full h-auto grayscale group-hover:grayscale-0" alt="Editorial Shoot">
                <div
                    class="absolute inset-0 bg-zinc-900/0 group-hover:bg-zinc-900/20 transition-all duration-500 flex flex-col justify-end p-6 opacity-0 group-hover:opacity-100">
                    <p class="text-white font-bold uppercase tracking-widest text-xs mb-1">Vogue Indonesia</p>
                    <p class="text-zinc-300 text-xs">Editorial Portrait</p>
                </div>
            </div>

            <!-- Image 2 (Landscape) -->
            <div class="masonry-item break-inside-avoid relative overflow-hidden group bg-zinc-200">
                <img src="https://images.unsplash.com/photo-1469334031218-e382a71b716b?q=80&w=800&auto=format&fit=crop"
                    class="w-full h-auto grayscale group-hover:grayscale-0" alt="Fashion Outdoor">
                <div
                    class="absolute inset-0 bg-zinc-900/0 group-hover:bg-zinc-900/20 transition-all duration-500 flex flex-col justify-end p-6 opacity-0 group-hover:opacity-100">
                    <p class="text-white font-bold uppercase tracking-widest text-xs mb-1">Summer Collection '25</p>
                    <p class="text-zinc-300 text-xs">Commercial Campaign</p>
                </div>
            </div>

            <!-- Image 3 (Portrait Tall) -->
            <div class="masonry-item break-inside-avoid relative overflow-hidden group bg-zinc-200">
                <img src="https://images.unsplash.com/photo-1515886657613-9f3515b0c78f?q=80&w=800&auto=format&fit=crop"
                    class="w-full h-auto grayscale group-hover:grayscale-0" alt="Studio Fashion">
                <div
                    class="absolute inset-0 bg-zinc-900/0 group-hover:bg-zinc-900/20 transition-all duration-500 flex flex-col justify-end p-6 opacity-0 group-hover:opacity-100">
                    <p class="text-white font-bold uppercase tracking-widest text-xs mb-1">ZARA Fall/Winter</p>
                    <p class="text-zinc-300 text-xs">Lookbook Studio</p>
                </div>
            </div>

            <!-- Image 4 (Square-ish) -->
            <div class="masonry-item break-inside-avoid relative overflow-hidden group bg-zinc-200">
                <img src="https://images.unsplash.com/photo-1509631179647-0c5d0d7b9c87?q=80&w=800&auto=format&fit=crop"
                    class="w-full h-auto grayscale group-hover:grayscale-0" alt="Beauty Close Up">
                <div
                    class="absolute inset-0 bg-zinc-900/0 group-hover:bg-zinc-900/20 transition-all duration-500 flex flex-col justify-end p-6 opacity-0 group-hover:opacity-100">
                    <p class="text-white font-bold uppercase tracking-widest text-xs mb-1">L'Oreal Beauty</p>
                    <p class="text-zinc-300 text-xs">Macro Detail</p>
                </div>
            </div>

            <!-- Image 5 (Portrait) -->
            <div class="masonry-item break-inside-avoid relative overflow-hidden group bg-zinc-200">
                <img src="https://images.unsplash.com/photo-1483985988355-763728e1935b?q=80&w=800&auto=format&fit=crop"
                    class="w-full h-auto grayscale group-hover:grayscale-0" alt="Urban Fashion">
                <div
                    class="absolute inset-0 bg-zinc-900/0 group-hover:bg-zinc-900/20 transition-all duration-500 flex flex-col justify-end p-6 opacity-0 group-hover:opacity-100">
                    <p class="text-white font-bold uppercase tracking-widest text-xs mb-1">Street Style</p>
                    <p class="text-zinc-300 text-xs">Personal Project</p>
                </div>
            </div>

            <!-- Image 6 (Landscape) -->
            <div class="masonry-item break-inside-avoid relative overflow-hidden group bg-zinc-200">
                <img src="https://images.unsplash.com/photo-1541829070764-84a7d30dd3f3?q=80&w=800&auto=format&fit=crop"
                    class="w-full h-auto grayscale group-hover:grayscale-0" alt="Editorial Landscape">
                <div
                    class="absolute inset-0 bg-zinc-900/0 group-hover:bg-zinc-900/20 transition-all duration-500 flex flex-col justify-end p-6 opacity-0 group-hover:opacity-100">
                    <p class="text-white font-bold uppercase tracking-widest text-xs mb-1">Harper's Bazaar</p>
                    <p class="text-zinc-300 text-xs">Cover Story</p>
                </div>
            </div>

        </div>

        <div class="text-center mt-16">
            <a href="#"
                class="inline-block text-xs font-bold uppercase tracking-[0.2em] border border-zinc-300 px-8 py-4 hover:bg-zinc-900 hover:text-white hover:border-zinc-900 transition-all">
                Load More Archives
            </a>
        </div>
    </section>

    <!-- 4. ABOUT (MAGAZINE SPREAD STYLE) -->
    <section id="about" class="py-24 lg:py-32 bg-white">
        <div class="max-w-[90rem] mx-auto px-6 lg:px-12">
            <div class="grid lg:grid-cols-2 gap-16 lg:gap-24 items-center">

                <!-- Large Image Portrait -->
                <div class="order-2 lg:order-1 relative">
                    <img src="https://images.unsplash.com/photo-1554046920-90dc5225bc41?q=80&w=800&auto=format&fit=crop"
                        alt="Elena with Camera" class="w-full h-auto lg:w-4/5 ml-auto filter brightness-95">
                    <div
                        class="absolute bottom-10 -left-6 lg:left-10 bg-white p-6 shadow-xl w-64 border border-zinc-100">
                        <p class="font-display font-bold text-3xl mb-1">"Cahaya adalah bahasa, kamera adalah pena."</p>
                    </div>
                </div>

                <!-- Biography Text -->
                <div class="order-1 lg:order-2">
                    <h2 class="text-sm font-bold uppercase tracking-[0.3em] text-zinc-400 mb-6">The Artist</h2>
                    <h3 class="text-4xl md:text-5xl font-display font-extrabold tracking-tight mb-8 leading-tight">
                        Melihat dunia melalui <br>bingkai yang berbeda.</h3>

                    <div class="space-y-6 text-zinc-500 font-light leading-relaxed text-lg">
                        <p>Berawal dari kecintaan pada film analog, perjalanan saya di dunia fotografi telah membawa
                            saya bekerjasama dengan puluhan *brand* fashion dan majalah gaya hidup di Asia Tenggara.</p>
                        <p>Fokus utama saya adalah menceritakan kisah yang otentik. Saya percaya bahwa setiap subjek
                            memiliki narasi visualnya sendiri yang menunggu untuk diungkap melalui pencahayaan yang
                            tepat dan komposisi yang jujur.</p>
                    </div>

                    <div class="mt-12 pt-8 border-t border-zinc-100 grid grid-cols-2 gap-8">
                        <div>
                            <h4 class="text-zinc-900 font-bold mb-2">Exhibitions</h4>
                            <ul class="text-sm text-zinc-500 space-y-1">
                                <li>Jakarta Photo Week (2025)</li>
                                <li>Bali Art Collective (2024)</li>
                            </ul>
                        </div>
                        <div>
                            <h4 class="text-zinc-900 font-bold mb-2">Publications</h4>
                            <ul class="text-sm text-zinc-500 space-y-1">
                                <li>Vogue Indonesia</li>
                                <li>Elle Magazine</li>
                                <li>HighEnd</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 5. SERVICES & RATES (MINIMAL LIST) -->
    <section id="services" class="py-24 lg:py-32 px-6 lg:px-12 max-w-[90rem] mx-auto">
        <div class="mb-16 md:mb-24">
            <h2 class="text-sm font-bold uppercase tracking-[0.3em] text-zinc-400 mb-4">Capabilities</h2>
            <h3 class="text-4xl font-display font-bold uppercase tracking-tighter">Services & Rates.</h3>
        </div>

        <div class="flex flex-col border-t border-zinc-200">
            <!-- Service 1 -->
            <div
                class="py-8 md:py-12 border-b border-zinc-200 flex flex-col md:flex-row md:items-center justify-between gap-6 group">
                <div class="md:w-1/2">
                    <h4 class="text-2xl font-display font-bold uppercase mb-2">Commercial & Lookbook</h4>
                    <p class="text-zinc-500 text-sm max-w-md leading-relaxed">Sesi foto komersial untuk kebutuhan
                        katalog brand, kampanye e-commerce, dan sosial media. Termasuk lisensi komersial.</p>
                </div>
                <div class="md:w-1/4 text-left md:text-right">
                    <span class="text-xs font-bold uppercase tracking-widest text-zinc-400 block mb-1">Starting
                        At</span>
                    <span class="text-xl font-medium">Rp 8.500.000 / Day</span>
                </div>
            </div>

            <!-- Service 2 -->
            <div
                class="py-8 md:py-12 border-b border-zinc-200 flex flex-col md:flex-row md:items-center justify-between gap-6 group">
                <div class="md:w-1/2">
                    <h4 class="text-2xl font-display font-bold uppercase mb-2">Editorial & Magazine</h4>
                    <p class="text-zinc-500 text-sm max-w-md leading-relaxed">Konseptualisasi dan eksekusi visual untuk
                        fitur majalah, artikel fashion, dan *cover story*. Kolaborasi mendalam dengan Art Director.</p>
                </div>
                <div class="md:w-1/4 text-left md:text-right">
                    <span class="text-xs font-bold uppercase tracking-widest text-zinc-400 block mb-1">Starting
                        At</span>
                    <span class="text-xl font-medium">Rp 12.000.000 / Proj</span>
                </div>
            </div>

            <!-- Service 3 -->
            <div
                class="py-8 md:py-12 border-b border-zinc-200 flex flex-col md:flex-row md:items-center justify-between gap-6 group">
                <div class="md:w-1/2">
                    <h4 class="text-2xl font-display font-bold uppercase mb-2">Personal Portraiture</h4>
                    <p class="text-zinc-500 text-sm max-w-md leading-relaxed">Sesi privat di studio atau lokasi
                        (outdoor) untuk kebutuhan *personal branding*, profil eksekutif, atau *fine-art portrait*.</p>
                </div>
                <div class="md:w-1/4 text-left md:text-right">
                    <span class="text-xs font-bold uppercase tracking-widest text-zinc-400 block mb-1">Starting
                        At</span>
                    <span class="text-xl font-medium">Rp 4.000.000 / Session</span>
                </div>
            </div>
        </div>
    </section>

    <!-- 6. MASSIVE CONTACT FOOTER -->
    <footer id="contact" class="bg-zinc-900 text-white pt-32 pb-12 px-6 lg:px-12">
        <div class="max-w-[90rem] mx-auto">
            <div class="mb-20 text-center md:text-left">
                <p class="text-xs font-bold uppercase tracking-[0.3em] text-zinc-500 mb-6">Have a project in mind?</p>
                <!-- Giant Text Link -->
                <a href="mailto:booking@elenarostova.com"
                    class="text-5xl md:text-8xl lg:text-[9rem] font-display font-extrabold uppercase tracking-tighter leading-none hover:text-zinc-400 transition-colors break-words">
                    LET'S SHOOT.
                </a>
            </div>

            <div class="grid md:grid-cols-3 gap-12 pt-12 border-t border-zinc-800">
                <!-- Info -->
                <div class="text-center md:text-left">
                    <h5 class="text-xs font-bold uppercase tracking-[0.2em] text-zinc-500 mb-4">Studio / Inquiries</h5>
                    <p class="text-zinc-300 font-medium text-lg">booking@elenarostova.com</p>
                    <p class="text-zinc-300 font-medium text-lg">+62 811 2233 4455</p>
                </div>

                <!-- Locations -->
                <div class="text-center md:text-left">
                    <h5 class="text-xs font-bold uppercase tracking-[0.2em] text-zinc-500 mb-4">Based In</h5>
                    <p class="text-zinc-300 font-medium">Jakarta Selatan, ID</p>
                    <p class="text-zinc-300 font-medium">Canggu, Bali</p>
                </div>

                <!-- Socials -->
                <div class="text-center md:text-right">
                    <h5 class="text-xs font-bold uppercase tracking-[0.2em] text-zinc-500 mb-4">Follow</h5>
                    <div class="flex flex-col md:items-end gap-2 text-zinc-300 font-medium">
                        <a href="#" class="hover:text-white transition-colors">Instagram @elenarostova</a>
                        <a href="#" class="hover:text-white transition-colors">Behance /elenashoots</a>
                        <a href="#" class="hover:text-white transition-colors">Pinterest /elenarostova</a>
                    </div>
                </div>
            </div>

            <div class="mt-20 text-center md:text-left text-zinc-600 text-[10px] font-bold uppercase tracking-widest">
                © 2026 Elena Rostova Photography. Designed by Elijabah Group.
            </div>
        </div>
    </footer>

</body>

</html>
