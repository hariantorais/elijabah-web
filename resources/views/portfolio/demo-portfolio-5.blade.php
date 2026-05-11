<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kian Mahendra | UI/UX & Product Designer</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <!-- Google Fonts -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500&family=Sora:wght@400;600;700;800&display=swap');

        body {
            font-family: 'Inter', sans-serif;
            background-color: #09090b;
            /* Zinc 950 */
            color: #a1a1aa;
            /* Zinc 400 */
            overflow-x: hidden;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        .font-display {
            font-family: 'Sora', sans-serif;
        }

        /* Animated Background Gradients (Aurora Effect) */
        .aurora-bg {
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            z-index: -1;
            overflow: hidden;
            background: #09090b;
        }

        .blob {
            position: absolute;
            filter: blur(100px);
            opacity: 0.4;
            animation: float 10s infinite ease-in-out alternate;
        }

        .blob-1 {
            top: -10%;
            left: -10%;
            width: 500px;
            height: 500px;
            background: #7c3aed;
            animation-delay: 0s;
        }

        .blob-2 {
            bottom: -20%;
            right: -10%;
            width: 600px;
            height: 600px;
            background: #2563eb;
            animation-delay: -5s;
        }

        .blob-3 {
            top: 40%;
            left: 40%;
            width: 400px;
            height: 400px;
            background: #db2777;
            opacity: 0.2;
            animation-delay: -2s;
        }

        @keyframes float {
            0% {
                transform: translate(0, 0) scale(1);
            }

            100% {
                transform: translate(30px, 50px) scale(1.1);
            }
        }

        /* Bento Card Glassmorphism & Hover FX */
        .bento-card {
            background: rgba(24, 24, 27, 0.6);
            /* Zinc 900 with opacity */
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.05);
            border-radius: 2rem;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
        }

        .bento-card::before {
            content: "";
            position: absolute;
            inset: 0;
            background: linear-gradient(to bottom right, rgba(255, 255, 255, 0.1), transparent);
            opacity: 0;
            transition: opacity 0.4s ease;
        }

        .bento-card:hover {
            transform: translateY(-5px);
            border-color: rgba(255, 255, 255, 0.2);
            box-shadow: 0 20px 40px -10px rgba(0, 0, 0, 0.5), 0 0 30px -10px rgba(124, 58, 237, 0.2);
        }

        .bento-card:hover::before {
            opacity: 1;
        }

        /* Animated Text Gradient */
        .text-animate-gradient {
            background: linear-gradient(to right, #a855f7, #3b82f6, #ec4899, #a855f7);
            background-size: 200% auto;
            color: transparent;
            -webkit-background-clip: text;
            animation: textGradient 4s linear infinite;
        }

        @keyframes textGradient {
            0% {
                background-position: 0% center;
            }

            100% {
                background-position: 200% center;
            }
        }

        /* Marquee Animation */
        .marquee-inner {
            display: flex;
            width: max-content;
            animation: marquee 15s linear infinite;
        }

        @keyframes marquee {
            to {
                transform: translateX(-50%);
            }
        }

        /* Image Zoom on Hover */
        .img-zoom {
            transition: transform 0.6s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .group:hover .img-zoom {
            transform: scale(1.05);
        }
    </style>
</head>

<body class="selection:bg-violet-600 selection:text-white" x-data="{ mobileMenu: false }">

    <!-- Ambient Aurora Background -->
    <div class="aurora-bg">
        <div class="blob blob-1"></div>
        <div class="blob blob-2"></div>
        <div class="blob blob-3"></div>
    </div>

    <!-- 1. FLOATING PILL NAVIGATION -->
    <nav class="fixed top-6 w-full z-[100] px-6 flex justify-center">
        <div
            class="bg-zinc-900/80 backdrop-blur-xl border border-white/10 rounded-full px-6 py-3 flex items-center justify-between gap-8 md:gap-16 shadow-2xl">
            <!-- Logo -->
            <a href="#" class="text-white font-display font-bold text-xl tracking-tighter">KM.</a>

            <!-- Desktop Links -->
            <div class="hidden md:flex items-center gap-8 text-sm font-medium text-zinc-400">
                <a href="#work" class="hover:text-white transition-colors">Work</a>
                <a href="#about" class="hover:text-white transition-colors">About</a>
                <a href="#stack" class="hover:text-white transition-colors">Stack</a>
            </div>

            <!-- CTA & Mobile Toggle -->
            <div class="flex items-center gap-4">
                <a href="#contact"
                    class="hidden md:block bg-white text-black px-5 py-2 rounded-full text-sm font-bold hover:scale-105 transition-transform">Let's
                    Talk</a>
                <button @click="mobileMenu = !mobileMenu" class="md:hidden text-white focus:outline-none">
                    <i :class="mobileMenu ? 'fa-solid fa-xmark' : 'fa-solid fa-bars'" class="text-xl"></i>
                </button>
            </div>
        </div>
    </nav>

    <!-- Mobile Dropdown -->
    <div x-show="mobileMenu" x-collapse
        class="fixed top-24 left-6 right-6 z-[90] md:hidden bg-zinc-900/95 backdrop-blur-2xl border border-white/10 rounded-3xl p-6 shadow-2xl">
        <div class="flex flex-col gap-6 text-center font-display text-lg">
            <a href="#work" @click="mobileMenu = false" class="text-white">Work</a>
            <a href="#about" @click="mobileMenu = false" class="text-white">About</a>
            <a href="#stack" @click="mobileMenu = false" class="text-white">Tech Stack</a>
            <a href="#contact" @click="mobileMenu = false"
                class="bg-violet-600 text-white py-3 rounded-full font-bold">Contact Me</a>
        </div>
    </div>

    <!-- 2. BENTO GRID LAYOUT -->
    <main class="pt-32 pb-20 px-6 max-w-7xl mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6 auto-rows-[minmax(180px,auto)]">

            <!-- A. Hero / Intro (Col-Span-2, Row-Span-2) -->
            <div class="bento-card md:col-span-2 md:row-span-2 p-10 flex flex-col justify-center">
                <div
                    class="inline-flex items-center gap-2 bg-emerald-500/10 border border-emerald-500/20 px-3 py-1.5 rounded-full w-fit mb-8">
                    <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
                    <span class="text-[10px] font-bold uppercase tracking-widest text-emerald-400">Available for
                        Work</span>
                </div>
                <h1 class="text-4xl lg:text-6xl font-display font-bold text-white leading-[1.1] tracking-tight mb-6">
                    Mendesain produk yang <span class="text-animate-gradient">fungsional</span> & berkarakter.
                </h1>
                <p class="text-zinc-400 text-lg max-w-md leading-relaxed">
                    Hai, saya Kian. Lead Product Designer yang menggabungkan estetika visual (UI) dengan logika bisnis
                    (UX) untuk menciptakan produk digital kelas dunia.
                </p>
            </div>

            <!-- B. Profile Picture (Col-Span-1, Row-Span-2) -->
            <div class="bento-card md:col-span-1 lg:col-span-1 md:row-span-2 overflow-hidden group relative">
                <!-- Gunakan gambar orang sungguhan -->
                <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?q=80&w=600&auto=format&fit=crop"
                    class="w-full h-full object-cover img-zoom grayscale group-hover:grayscale-0" alt="Kian Mahendra">
                <div
                    class="absolute bottom-4 left-4 right-4 bg-black/50 backdrop-blur-md border border-white/10 p-4 rounded-2xl">
                    <p class="text-white font-bold text-sm">Kian Mahendra</p>
                    <p class="text-zinc-400 text-xs">Based in Jakarta, ID 🇮🇩</p>
                </div>
            </div>

            <!-- C. Stats / Experience (Col-Span-1) -->
            <div class="bento-card p-8 flex flex-col justify-center items-center text-center group">
                <h3 class="text-5xl font-display font-bold text-white mb-2 group-hover:scale-110 transition-transform">
                    06+</h3>
                <p class="text-zinc-400 text-sm font-medium">Tahun Pengalaman <br> Industri</p>
            </div>

            <!-- D. Marquee Skills (Col-Span-Full or 2) -->
            <div class="bento-card md:col-span-2 lg:col-span-3 p-8 flex flex-col justify-center overflow-hidden">
                <p class="text-xs font-bold uppercase tracking-widest text-zinc-500 mb-6">My Design Stack</p>
                <!-- Marquee Container -->
                <div class="w-full overflow-hidden mask-horizontal">
                    <div
                        class="marquee-inner flex gap-8 items-center text-3xl md:text-4xl text-zinc-700 hover:text-white transition-colors duration-500">
                        <i class="fa-brands fa-figma"></i> <span>Figma</span> •
                        <i class="fa-solid fa-pen-nib"></i> <span>Illustrator</span> •
                        <i class="fa-solid fa-cube"></i> <span>Spline 3D</span> •
                        <i class="fa-brands fa-react"></i> <span>React</span> •
                        <i class="fa-solid fa-code"></i> <span>Tailwind</span> •
                        <!-- Duplicate for infinite scroll -->
                        <i class="fa-brands fa-figma"></i> <span>Figma</span> •
                        <i class="fa-solid fa-pen-nib"></i> <span>Illustrator</span> •
                        <i class="fa-solid fa-cube"></i> <span>Spline 3D</span>
                    </div>
                </div>
            </div>

            <!-- E. Social Links (Col-Span-1) -->
            <div class="bento-card p-6 flex flex-col justify-between">
                <p class="text-xs font-bold uppercase tracking-widest text-zinc-500 mb-4">Let's Connect</p>
                <div class="grid grid-cols-2 gap-4">
                    <a href="#"
                        class="bg-white/5 hover:bg-violet-600 border border-white/10 rounded-2xl p-4 flex justify-center items-center text-2xl text-white transition-all"><i
                            class="fa-brands fa-dribbble"></i></a>
                    <a href="#"
                        class="bg-white/5 hover:bg-blue-600 border border-white/10 rounded-2xl p-4 flex justify-center items-center text-2xl text-white transition-all"><i
                            class="fa-brands fa-linkedin-in"></i></a>
                    <a href="#"
                        class="bg-white/5 hover:bg-zinc-800 border border-white/10 rounded-2xl p-4 flex justify-center items-center text-2xl text-white transition-all"><i
                            class="fa-brands fa-github"></i></a>
                    <a href="#"
                        class="bg-white/5 hover:bg-blue-400 border border-white/10 rounded-2xl p-4 flex justify-center items-center text-2xl text-white transition-all"><i
                            class="fa-brands fa-twitter"></i></a>
                </div>
            </div>

            <!-- F. Large Project 1 (Col-Span-2) -->
            <div id="work" class="bento-card md:col-span-2 row-span-2 group cursor-pointer p-2 flex flex-col">
                <div class="w-full h-48 md:h-64 rounded-[1.5rem] overflow-hidden relative">
                    <img src="https://images.unsplash.com/photo-1618761714954-0b8cd0026356?q=80&w=800&auto=format&fit=crop"
                        class="w-full h-full object-cover img-zoom" alt="Fintech App">
                    <div
                        class="absolute top-4 left-4 bg-black/60 backdrop-blur px-3 py-1 rounded-full text-[10px] font-bold text-white uppercase tracking-widest border border-white/20">
                        Case Study</div>
                </div>
                <div class="p-6 md:p-8 flex-1 flex flex-col justify-between">
                    <div>
                        <h3
                            class="text-2xl font-display font-bold text-white mb-2 group-hover:text-violet-400 transition-colors">
                            NeoBank App Redesign</h3>
                        <p class="text-zinc-400 text-sm">Merombak total pengalaman pengguna (UX) untuk aplikasi
                            perbankan digital, meningkatkan retensi pengguna aktif harian sebesar 45%.</p>
                    </div>
                    <div class="flex justify-between items-center mt-6">
                        <span class="text-xs text-zinc-500">Fintech • UI/UX</span>
                        <div
                            class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center text-white group-hover:bg-violet-600 transition-colors">
                            <i class="fa-solid fa-arrow-right -rotate-45"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- G. Large Project 2 (Col-Span-2) -->
            <div class="bento-card md:col-span-2 row-span-2 group cursor-pointer p-2 flex flex-col">
                <div class="w-full h-48 md:h-64 rounded-[1.5rem] overflow-hidden relative">
                    <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?q=80&w=800&auto=format&fit=crop"
                        class="w-full h-full object-cover img-zoom" alt="Dashboard SaaS">
                    <div
                        class="absolute top-4 left-4 bg-black/60 backdrop-blur px-3 py-1 rounded-full text-[10px] font-bold text-white uppercase tracking-widest border border-white/20">
                        Web App</div>
                </div>
                <div class="p-6 md:p-8 flex-1 flex flex-col justify-between">
                    <div>
                        <h3
                            class="text-2xl font-display font-bold text-white mb-2 group-hover:text-blue-400 transition-colors">
                            OmniTrack SaaS Dashboard</h3>
                        <p class="text-zinc-400 text-sm">Desain sistem (Design System) komprehensif untuk platform
                            analitik data B2B, mempercepat proses development frontend hingga 2x lipat.</p>
                    </div>
                    <div class="flex justify-between items-center mt-6">
                        <span class="text-xs text-zinc-500">SaaS • Design System</span>
                        <div
                            class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center text-white group-hover:bg-blue-600 transition-colors">
                            <i class="fa-solid fa-arrow-right -rotate-45"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- H. Massive CTA / Contact (Col-Span-Full) -->
            <div id="contact"
                class="bento-card md:col-span-full p-10 md:p-16 text-center group overflow-hidden relative">
                <!-- Background reveal effect -->
                <div
                    class="absolute inset-0 bg-violet-600 opacity-0 group-hover:opacity-100 transition-opacity duration-500 z-0">
                </div>

                <div class="relative z-10">
                    <h2 class="text-3xl md:text-5xl font-display font-bold text-white mb-6 tracking-tight">Punya proyek
                        menarik?</h2>
                    <p class="text-zinc-400 group-hover:text-violet-200 transition-colors mb-10 max-w-lg mx-auto">
                        Saya selalu terbuka untuk diskusi mengenai desain produk, *freelance*, atau kolaborasi ide gila
                        lainnya.
                    </p>
                    <a href="mailto:hello@kianm.design"
                        class="inline-flex items-center gap-4 bg-white text-black px-8 py-4 rounded-full font-bold hover:scale-105 transition-transform shadow-xl">
                        <span>hello@kianm.design</span>
                        <i class="fa-solid fa-paper-plane"></i>
                    </a>
                </div>
            </div>

        </div>
    </main>

    <footer
        class="text-center py-8 text-xs font-bold uppercase tracking-widest text-zinc-600 border-t border-white/5 relative z-10">
        © 2026 Kian Mahendra. Crafted with <i class="fa-solid fa-heart text-violet-500 mx-1"></i> in Indonesia.
    </footer>

</body>

</html>
