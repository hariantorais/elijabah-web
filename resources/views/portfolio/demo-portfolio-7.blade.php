<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zara Vania | Digital Creator & Storyteller</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <!-- Google Fonts -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,700&family=Syne:wght@600;700;800&display=swap');

        body {
            font-family: 'DM Sans', sans-serif;
            background-color: #050505;
            /* Pitch Black */
            color: #f3f4f6;
            overflow-x: hidden;
        }

        h1,
        h2,
        h3,
        h4,
        .font-display {
            font-family: 'Syne', sans-serif;
        }

        /* Vibrant Gradients */
        .bg-magenta-gradient {
            background: linear-gradient(135deg, #d946ef, #8b5cf6);
        }

        .text-magenta-gradient {
            background: linear-gradient(135deg, #d946ef, #8b5cf6);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        /* Glass Pill */
        .glass-pill {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(16px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        /* Scrolling Marquee */
        .marquee-container {
            overflow: hidden;
            white-space: nowrap;
            display: flex;
        }

        .marquee-content {
            display: flex;
            animation: marquee 20s linear infinite;
        }

        @keyframes marquee {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(-50%);
            }
        }

        /* Soft Image Glow */
        .glow-shadow {
            box-shadow: 0 0 80px -20px rgba(217, 70, 239, 0.4);
        }
    </style>
</head>

<body class="selection:bg-fuchsia-500 selection:text-white" x-data="{ mobileMenu: false, scrolled: false }"
    @scroll.window="scrolled = (window.pageYOffset > 50)">

    <!-- 1. DYNAMIC NAVIGATION -->
    <nav :class="scrolled ? 'bg-[#050505]/90 backdrop-blur-xl border-b border-white/10 py-4' : 'bg-transparent py-6'"
        class="fixed top-0 w-full z-[100] transition-all duration-300">
        <div class="max-w-7xl mx-auto px-6 flex justify-between items-center">

            <!-- Logo -->
            <a href="#" class="flex items-center gap-2">
                <div
                    class="w-8 h-8 rounded-full bg-magenta-gradient flex items-center justify-center text-white font-bold font-display">
                    Z</div>
                <span class="text-xl font-bold font-display tracking-tight text-white">Zara Vania.</span>
            </a>

            <!-- Desktop Menu -->
            <div class="hidden md:flex items-center gap-2 bg-white/5 border border-white/10 rounded-full p-1.5">
                <a href="#about"
                    class="px-5 py-2 rounded-full text-sm font-medium text-gray-400 hover:text-white hover:bg-white/10 transition">Profile</a>
                <a href="#stats"
                    class="px-5 py-2 rounded-full text-sm font-medium text-gray-400 hover:text-white hover:bg-white/10 transition">Metrics</a>
                <a href="#content"
                    class="px-5 py-2 rounded-full text-sm font-medium text-gray-400 hover:text-white hover:bg-white/10 transition">Content</a>
                <a href="#shop"
                    class="px-5 py-2 rounded-full text-sm font-medium text-gray-400 hover:text-white hover:bg-white/10 transition">Shop</a>
            </div>

            <!-- CTA Desktop -->
            <div class="hidden md:block">
                <a href="#collab"
                    class="bg-white text-black px-6 py-3 rounded-full text-sm font-bold hover:scale-105 transition-transform flex items-center gap-2">
                    Let's Collab <i class="fa-solid fa-wand-magic-sparkles"></i>
                </a>
            </div>

            <!-- Mobile Toggle -->
            <button @click="mobileMenu = !mobileMenu" class="md:hidden text-white text-2xl focus:outline-none">
                <i :class="mobileMenu ? 'fa-solid fa-xmark' : 'fa-solid fa-bars'"></i>
            </button>
        </div>

        <!-- Mobile Menu -->
        <div x-show="mobileMenu" x-collapse x-cloak
            class="md:hidden absolute top-full left-0 w-full bg-[#050505] border-b border-white/10">
            <div class="px-6 py-8 flex flex-col gap-6 text-center">
                <a href="#about" @click="mobileMenu = false"
                    class="text-xl font-display font-bold text-white">Profile</a>
                <a href="#stats" @click="mobileMenu = false"
                    class="text-xl font-display font-bold text-white">Metrics</a>
                <a href="#content" @click="mobileMenu = false"
                    class="text-xl font-display font-bold text-white">Content</a>
                <a href="#collab" @click="mobileMenu = false"
                    class="bg-magenta-gradient text-white py-4 rounded-full font-bold text-sm mt-4">Work With Me</a>
            </div>
        </div>
    </nav>

    <!-- 2. HERO SECTION (VIBRANT SPLIT) -->
    <header class="pt-32 lg:pt-40 pb-20 px-6 relative overflow-hidden">
        <!-- Abstract Shapes -->
        <div
            class="absolute top-20 right-0 w-[500px] h-[500px] bg-fuchsia-600/30 blur-[150px] rounded-full pointer-events-none">
        </div>
        <div
            class="absolute bottom-0 left-0 w-[400px] h-[400px] bg-violet-600/20 blur-[120px] rounded-full pointer-events-none">
        </div>

        <div class="max-w-7xl mx-auto grid lg:grid-cols-12 gap-12 items-center relative z-10">
            <!-- Text Content -->
            <div class="lg:col-span-6 text-center lg:text-left">
                <div class="inline-flex items-center gap-2 glass-pill px-4 py-2 rounded-full mb-8">
                    <span class="relative flex h-2.5 w-2.5">
                        <span
                            class="animate-ping absolute inline-flex h-full w-full rounded-full bg-fuchsia-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2.5 w-2.5 bg-fuchsia-500"></span>
                    </span>
                    <span class="text-xs font-bold uppercase tracking-widest text-fuchsia-200">New Vlog Uploaded</span>
                </div>

                <h1
                    class="text-5xl md:text-7xl lg:text-[5.5rem] font-display font-extrabold leading-[1] mb-6 tracking-tight">
                    Create. <br> Inspire. <br>
                    <span class="text-magenta-gradient">Influence.</span>
                </h1>

                <p class="text-lg md:text-xl text-gray-400 font-medium leading-relaxed mb-10 max-w-lg mx-auto lg:mx-0">
                    Kreator gaya hidup & teknologi yang mengubah audiens menjadi komunitas. Menggabungkan visual estetik
                    dengan *storytelling* yang otentik.
                </p>

                <div class="flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-4">
                    <a href="#collab"
                        class="w-full sm:w-auto bg-magenta-gradient text-white px-8 py-4 rounded-full font-bold hover:shadow-[0_0_30px_-5px_rgba(217,70,239,0.5)] transition-all flex items-center justify-center gap-3">
                        <i class="fa-solid fa-envelope"></i> Request Media Kit
                    </a>
                    <div class="flex gap-4">
                        <a href="#"
                            class="w-14 h-14 rounded-full glass-pill flex items-center justify-center text-xl hover:bg-white hover:text-black transition-colors"><i
                                class="fa-brands fa-youtube"></i></a>
                        <a href="#"
                            class="w-14 h-14 rounded-full glass-pill flex items-center justify-center text-xl hover:bg-white hover:text-black transition-colors"><i
                                class="fa-brands fa-tiktok"></i></a>
                        <a href="#"
                            class="w-14 h-14 rounded-full glass-pill flex items-center justify-center text-xl hover:bg-white hover:text-black transition-colors"><i
                                class="fa-brands fa-instagram"></i></a>
                    </div>
                </div>
            </div>

            <!-- Visual Profile -->
            <div class="lg:col-span-6 relative mt-10 lg:mt-0 flex justify-center lg:justify-end">
                <div
                    class="relative w-[320px] h-[400px] md:w-[450px] md:h-[550px] rounded-[3rem] p-2 bg-gradient-to-br from-fuchsia-500 to-violet-600 glow-shadow">
                    <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?q=80&w=800&auto=format&fit=crop"
                        alt="Zara Vania" class="w-full h-full object-cover rounded-[2.5rem]">

                    <!-- Floating Follower Card -->
                    <div
                        class="absolute -bottom-6 -left-6 md:-left-12 glass-pill p-5 rounded-3xl flex items-center gap-4">
                        <div
                            class="w-12 h-12 bg-black rounded-full flex items-center justify-center text-white text-xl">
                            <i class="fa-solid fa-users"></i>
                        </div>
                        <div>
                            <h4 class="font-display font-bold text-white text-xl">4.2M+</h4>
                            <p class="text-xs text-gray-300 font-medium">Total Following</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- 3. BRAND COLLABORATIONS (MARQUEE) -->
    <section class="py-10 border-y border-white/10 bg-white/5 overflow-hidden">
        <div class="marquee-container">
            <div
                class="marquee-content items-center gap-16 md:gap-24 opacity-50 grayscale hover:grayscale-0 transition duration-500">
                <span class="text-2xl font-display font-bold text-white">SAMSUNG</span>
                <span class="text-2xl font-display font-bold text-white">SEPHORA</span>
                <span class="text-2xl font-display font-bold text-white">TRAVELOKA</span>
                <span class="text-2xl font-display font-bold text-white">SONY</span>
                <span class="text-2xl font-display font-bold text-white">L'OREAL</span>
                <span class="text-2xl font-display font-bold text-white">NIKE</span>
                <!-- Duplicate for seamless scroll -->
                <span class="text-2xl font-display font-bold text-white">SAMSUNG</span>
                <span class="text-2xl font-display font-bold text-white">SEPHORA</span>
                <span class="text-2xl font-display font-bold text-white">TRAVELOKA</span>
                <span class="text-2xl font-display font-bold text-white">SONY</span>
                <span class="text-2xl font-display font-bold text-white">L'OREAL</span>
                <span class="text-2xl font-display font-bold text-white">NIKE</span>
            </div>
        </div>
    </section>

    <!-- 4. AUDIENCE METRICS (THE MEDIA KIT) -->
    <section id="stats" class="py-24 lg:py-32 px-6 relative">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-xs font-bold uppercase tracking-widest text-fuchsia-400 mb-4">Audience Demographics
                </h2>
                <h3 class="text-4xl md:text-5xl font-display font-bold text-white tracking-tight">Angka yang Berbicara.
                </h3>
                <p class="text-gray-400 mt-4 max-w-xl mx-auto">Audiens saya didominasi oleh Gen-Z dan Milenial yang
                    memiliki minat tinggi pada teknologi, *traveling*, dan *fashion* berkelanjutan.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- YouTube -->
                <div
                    class="glass-pill p-8 rounded-[2rem] text-center hover:-translate-y-2 transition-transform duration-300">
                    <i class="fa-brands fa-youtube text-5xl text-[#FF0000] mb-6"></i>
                    <h4 class="text-4xl font-display font-bold text-white mb-2">1.2M</h4>
                    <p class="text-gray-400 font-medium mb-6">Subscribers</p>
                    <div class="border-t border-white/10 pt-6 flex justify-between px-4">
                        <div>
                            <span class="block text-xl font-bold text-white">15M</span>
                            <span class="text-[10px] text-gray-500 uppercase tracking-widest">Monthly Views</span>
                        </div>
                        <div>
                            <span class="block text-xl font-bold text-white">8.5%</span>
                            <span class="text-[10px] text-gray-500 uppercase tracking-widest">Engagement</span>
                        </div>
                    </div>
                </div>

                <!-- TikTok -->
                <div
                    class="glass-pill p-8 rounded-[2rem] text-center hover:-translate-y-2 transition-transform duration-300">
                    <i class="fa-brands fa-tiktok text-5xl text-white mb-6"></i>
                    <h4 class="text-4xl font-display font-bold text-white mb-2">2.5M</h4>
                    <p class="text-gray-400 font-medium mb-6">Followers</p>
                    <div class="border-t border-white/10 pt-6 flex justify-between px-4">
                        <div>
                            <span class="block text-xl font-bold text-white">40M</span>
                            <span class="text-[10px] text-gray-500 uppercase tracking-widest">Monthly Views</span>
                        </div>
                        <div>
                            <span class="block text-xl font-bold text-white">12%</span>
                            <span class="text-[10px] text-gray-500 uppercase tracking-widest">Engagement</span>
                        </div>
                    </div>
                </div>

                <!-- Instagram -->
                <div
                    class="glass-pill p-8 rounded-[2rem] text-center hover:-translate-y-2 transition-transform duration-300">
                    <i class="fa-brands fa-instagram text-5xl text-[#E1306C] mb-6"></i>
                    <h4 class="text-4xl font-display font-bold text-white mb-2">850K</h4>
                    <p class="text-gray-400 font-medium mb-6">Followers</p>
                    <div class="border-t border-white/10 pt-6 flex justify-between px-4">
                        <div>
                            <span class="block text-xl font-bold text-white">2.5M</span>
                            <span class="text-[10px] text-gray-500 uppercase tracking-widest">Reel Views</span>
                        </div>
                        <div>
                            <span class="block text-xl font-bold text-white">6%</span>
                            <span class="text-[10px] text-gray-500 uppercase tracking-widest">Engagement</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. CONTENT HIGHLIGHTS (Bento Video Grid) -->
    <section id="content" class="py-24 bg-white/5 border-y border-white/10 px-6">
        <div class="max-w-7xl mx-auto">
            <div class="flex flex-col md:flex-row justify-between items-end mb-16 gap-6">
                <div>
                    <h2 class="text-xs font-bold uppercase tracking-widest text-fuchsia-400 mb-2">Content Portfolio
                    </h2>
                    <h3 class="text-4xl md:text-5xl font-display font-bold text-white">Top Performing.</h3>
                </div>
                <a href="#"
                    class="bg-white/10 text-white px-6 py-2 rounded-full text-sm font-medium hover:bg-white hover:text-black transition">
                    View YouTube Channel
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Video 1 (Large) -->
                <div class="md:col-span-2 relative group overflow-hidden rounded-[2rem] h-64 md:h-96">
                    <img src="https://images.unsplash.com/photo-1522869635100-9f4c5e86aa37?q=80&w=800&auto=format&fit=crop"
                        class="w-full h-full object-cover group-hover:scale-105 transition duration-700">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent flex flex-col justify-end p-8">
                        <div
                            class="w-12 h-12 bg-white/20 backdrop-blur-md rounded-full flex items-center justify-center text-white text-xl mb-4 group-hover:bg-magenta-gradient transition-colors">
                            <i class="fa-solid fa-play ml-1"></i>
                        </div>
                        <span class="text-fuchsia-400 text-xs font-bold uppercase tracking-widest mb-2">Vlog • 1.5M
                            Views</span>
                        <h4 class="text-2xl font-display font-bold text-white">Solo Traveling 7 Hari di Kyoto.</h4>
                    </div>
                </div>

                <!-- Vertical Shorts/Reels Style -->
                <div class="md:col-span-1 grid grid-cols-2 md:grid-cols-1 gap-6">
                    <div class="relative group overflow-hidden rounded-[2rem] h-64 md:h-[11.25rem]">
                        <img src="https://images.unsplash.com/photo-1512446816042-444d641267d4?q=80&w=400&auto=format&fit=crop"
                            class="w-full h-full object-cover group-hover:scale-105 transition duration-700">
                        <div class="absolute inset-0 bg-black/50 flex flex-col justify-end p-5">
                            <span class="text-fuchsia-400 text-[10px] font-bold uppercase tracking-widest mb-1">Tech
                                Review</span>
                            <h4 class="text-sm font-display font-bold text-white">Sony ZV-E10 Setup</h4>
                        </div>
                    </div>
                    <div class="relative group overflow-hidden rounded-[2rem] h-64 md:h-[11.25rem]">
                        <img src="https://images.unsplash.com/photo-1483985988355-763728e1935b?q=80&w=400&auto=format&fit=crop"
                            class="w-full h-full object-cover group-hover:scale-105 transition duration-700">
                        <div class="absolute inset-0 bg-black/50 flex flex-col justify-end p-5">
                            <span class="text-fuchsia-400 text-[10px] font-bold uppercase tracking-widest mb-1">Fashion
                                Reel</span>
                            <h4 class="text-sm font-display font-bold text-white">OOTD Thrift Finds</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 6. DIGITAL PRODUCTS (Presets/Merch) -->
    <section id="shop" class="py-24 px-6">
        <div class="max-w-7xl mx-auto">
            <div
                class="bg-gradient-to-r from-fuchsia-600/20 to-violet-600/20 rounded-[3rem] p-10 lg:p-16 border border-white/10 flex flex-col lg:flex-row items-center gap-12">
                <div class="lg:w-1/2 text-center lg:text-left">
                    <div
                        class="inline-block bg-white/10 text-white px-3 py-1 rounded-full text-[10px] font-bold uppercase tracking-widest mb-6">
                        Digital Store</div>
                    <h3 class="text-4xl md:text-5xl font-display font-bold text-white mb-6 tracking-tight">Editing
                        Presets <br> <span class="text-magenta-gradient">Vol. 2</span></h3>
                    <p class="text-gray-400 mb-8 leading-relaxed max-w-md mx-auto lg:mx-0">
                        Dapatkan warna *cinematic* persis seperti di video YouTube saya. Paket terdiri dari 10 Lightroom
                        Presets & 5 Video LUTs yang siap pakai.
                    </p>
                    <button
                        class="bg-white text-black px-8 py-3 rounded-full font-bold hover:bg-gray-200 transition">Beli
                        Sekarang (Rp 249.000)</button>
                </div>

                <div class="lg:w-1/2 w-full grid grid-cols-2 gap-4">
                    <img src="https://images.unsplash.com/photo-1492691527719-9d1e07e534b4?q=80&w=400&auto=format&fit=crop"
                        class="rounded-3xl w-full h-48 object-cover">
                    <img src="https://images.unsplash.com/photo-1516483638261-f4085eeac1bc?q=80&w=400&auto=format&fit=crop"
                        class="rounded-3xl w-full h-48 object-cover mt-8">
                </div>
            </div>
        </div>
    </section>

    <!-- 7. CONTACT / BUSINESS INQUIRY -->
    <footer id="collab" class="pt-24 pb-12 px-6 bg-black relative border-t border-white/10 overflow-hidden">
        <!-- Glow -->
        <div
            class="absolute bottom-0 right-0 w-[400px] h-[400px] bg-fuchsia-600/20 blur-[150px] rounded-full pointer-events-none">
        </div>

        <div class="max-w-7xl mx-auto grid lg:grid-cols-2 gap-16 mb-20">
            <div>
                <h2
                    class="text-6xl md:text-7xl font-display font-extrabold text-white leading-none mb-8 tracking-tight">
                    Let's Create <br> <span class="text-magenta-gradient">Together.</span></h2>
                <p class="text-gray-400 text-lg mb-10 max-w-md leading-relaxed">
                    Tertarik untuk menempatkan produk Anda di depan jutaan mata? Isi formulir untuk mendapatkan Media
                    Kit lengkap beserta *rate card* terbaru.
                </p>

                <div class="space-y-6">
                    <div>
                        <span
                            class="text-[10px] font-bold uppercase tracking-widest text-fuchsia-400 block mb-1">Business
                            Management</span>
                        <p class="text-white text-lg font-medium">partnership@zaravania.com</p>
                    </div>
                    <div>
                        <span
                            class="text-[10px] font-bold uppercase tracking-widest text-fuchsia-400 block mb-1">Talent
                            Agency</span>
                        <p class="text-white text-lg font-medium">Elijabah Creator Network</p>
                    </div>
                </div>
            </div>

            <div class="glass-pill p-8 md:p-10 rounded-[2.5rem]">
                <form class="space-y-6">
                    <div>
                        <label class="text-[10px] font-bold uppercase tracking-widest text-gray-400 block mb-2">Brand /
                            Agency Name</label>
                        <input type="text"
                            class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-white focus:outline-none focus:border-fuchsia-500 transition">
                    </div>
                    <div>
                        <label class="text-[10px] font-bold uppercase tracking-widest text-gray-400 block mb-2">Work
                            Email</label>
                        <input type="email"
                            class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-white focus:outline-none focus:border-fuchsia-500 transition">
                    </div>
                    <div>
                        <label
                            class="text-[10px] font-bold uppercase tracking-widest text-gray-400 block mb-2">Campaign
                            Details</label>
                        <textarea rows="4"
                            class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-white focus:outline-none focus:border-fuchsia-500 transition"></textarea>
                    </div>
                    <button
                        class="w-full bg-magenta-gradient text-white font-bold py-4 rounded-xl hover:shadow-[0_0_20px_-5px_rgba(217,70,239,0.5)] transition-all">Request
                        Media Kit</button>
                </form>
            </div>
        </div>

        <div
            class="max-w-7xl mx-auto pt-8 border-t border-white/10 flex flex-col md:flex-row justify-between items-center gap-6">
            <p class="text-[10px] font-bold text-gray-500 uppercase tracking-widest">© 2026 Zara Vania. Developed by
                Elijabah Group.</p>
            <div class="flex gap-6 text-[10px] font-bold text-gray-500 uppercase tracking-widest">
                <a href="#" class="hover:text-white transition">Instagram</a>
                <a href="#" class="hover:text-white transition">TikTok</a>
                <a href="#" class="hover:text-white transition">YouTube</a>
            </div>
        </div>
    </footer>

</body>

</html>
