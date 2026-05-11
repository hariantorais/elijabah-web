<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aris Chandra | Principal Architect & Urban Strategist</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,600;1,400&family=Montserrat:wght@300;400;600;700&display=swap');

        body {
            font-family: 'Montserrat', sans-serif;
            background-color: #1a1a1a;
            /* Charcoal */
            color: #e5e5e5;
            /* Warm Grey */
        }

        h1,
        h2,
        h3,
        .font-serif {
            font-family: 'Cormorant Garamond', serif;
        }

        /* Layout Lines */
        .grid-line {
            border-color: rgba(229, 229, 229, 0.1);
        }

        /* Bronze Accent */
        .text-bronze {
            color: #A67C52;
        }

        .bg-bronze {
            background-color: #A67C52;
        }

        /* Image Reveal Effect */
        .img-reveal {
            filter: grayscale(100%) brightness(0.7);
            transition: all 0.7s ease;
        }

        .group:hover .img-reveal {
            filter: grayscale(0%) brightness(1);
            transform: scale(1.03);
        }

        /* Custom Selection */
        ::selection {
            background: #A67C52;
            color: white;
        }
    </style>
</head>

<body class="antialiased" x-data="{ mobileMenu: false }">

    <nav class="fixed top-0 w-full z-[100] border-b grid-line bg-[#1a1a1a]/95 backdrop-blur-md">
        <div class="max-w-[100rem] mx-auto flex justify-between items-center px-6 lg:px-12 py-6">
            <a href="#" class="flex items-center gap-4 group">
                <div
                    class="w-10 h-10 border grid-line flex items-center justify-center group-hover:border-bronze transition-colors">
                    <span class="text-xl font-serif text-white">A</span>
                </div>
                <div class="leading-none">
                    <span class="text-lg font-bold tracking-[0.3em] uppercase block">Aris Chandra</span>
                    <span class="text-[9px] font-medium text-bronze uppercase tracking-[0.4em] mt-1">Architecture &
                        Planning</span>
                </div>
            </a>

            <div class="hidden lg:flex items-center gap-16">
                <a href="#projects"
                    class="text-[10px] font-bold uppercase tracking-[0.3em] hover:text-bronze transition-colors">Index</a>
                <a href="#philosophy"
                    class="text-[10px] font-bold uppercase tracking-[0.3em] hover:text-bronze transition-colors">Vision</a>
                <a href="#process"
                    class="text-[10px] font-bold uppercase tracking-[0.3em] hover:text-bronze transition-colors">Process</a>
                <a href="#contact"
                    class="bg-bronze text-white px-8 py-3 text-[10px] font-bold uppercase tracking-[0.3em] hover:bg-white hover:text-black transition-all">Connect</a>
            </div>

            <button @click="mobileMenu = !mobileMenu" class="lg:hidden text-2xl focus:outline-none">
                <i :class="mobileMenu ? 'fa-solid fa-xmark' : 'fa-solid fa-bars-staggered'"></i>
            </button>
        </div>

        <div x-show="mobileMenu" x-collapse x-cloak class="lg:hidden bg-[#1a1a1a] border-t grid-line">
            <div class="p-8 flex flex-col gap-8 text-center">
                <a href="#projects" @click="mobileMenu = false" class="text-3xl font-serif italic">The Works</a>
                <a href="#philosophy" @click="mobileMenu = false" class="text-3xl font-serif italic">Philosophy</a>
                <a href="#process" @click="mobileMenu = false" class="text-3xl font-serif italic">Services</a>
                <a href="#contact" @click="mobileMenu = false"
                    class="text-[10px] font-bold uppercase tracking-[0.3em] text-bronze">Contact Inquiry</a>
            </div>
        </div>
    </nav>

    <header class="min-h-screen flex flex-col justify-center pt-20">
        <div class="max-w-[100rem] mx-auto px-6 lg:px-12 w-full grid lg:grid-cols-12 gap-12 items-center">

            <div class="lg:col-span-7 z-10">
                <p class="text-xs font-bold uppercase tracking-[0.5em] text-bronze mb-8">Established 2012 — Indonesia
                </p>
                <h1 class="text-6xl md:text-8xl lg:text-[9rem] font-serif leading-[0.9] text-white mb-10">
                    Evolving <br>
                    <span class="italic font-light ml-0 lg:ml-20">the Void.</span>
                </h1>
                <p class="max-w-lg text-lg text-slate-400 font-light leading-relaxed mb-12">
                    Menciptakan ruang yang melampaui estetika visual. Kami merancang dialog antara cahaya, material, dan
                    keberlanjutan hidup manusia.
                </p>
                <div class="flex items-center gap-10">
                    <a href="#projects"
                        class="group flex items-center gap-4 text-[10px] font-bold uppercase tracking-[0.4em]">
                        View Projects
                        <span class="w-12 h-px bg-bronze group-hover:w-20 transition-all"></span>
                    </a>
                </div>
            </div>

            <div class="lg:col-span-5 relative">
                <div class="relative overflow-hidden aspect-[3/4] border-l-4 border-bronze shadow-2xl">
                    <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?q=80&w=1000&auto=format&fit=crop"
                        class="w-full h-full object-cover img-reveal" alt="Modern Architecture">
                </div>
                <div class="absolute -bottom-10 -left-10 lg:-left-20 bg-[#222] border grid-line p-8 hidden md:block">
                    <div class="flex gap-8">
                        <div>
                            <span class="block text-4xl font-serif text-white">50+</span>
                            <span class="text-[9px] font-bold uppercase tracking-widest text-slate-500">Built
                                Projects</span>
                        </div>
                        <div class="w-px grid-line border-l"></div>
                        <div>
                            <span class="block text-4xl font-serif text-white">03</span>
                            <span class="text-[9px] font-bold uppercase tracking-widest text-slate-500">Design
                                Awards</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section id="philosophy" class="py-32 lg:py-56 border-y grid-line relative overflow-hidden">
        <div class="absolute inset-0 opacity-[0.03] pointer-events-none"
            style="background-image: linear-gradient(#e5e5e5 1px, transparent 1px), linear-gradient(90deg, #e5e5e5 1px, transparent 1px); background-size: 100px 100px;">
        </div>

        <div class="max-w-7xl mx-auto px-6 grid lg:grid-cols-2 gap-24 items-start relative z-10">
            <div>
                <h2 class="text-sm font-bold uppercase tracking-[0.5em] text-bronze mb-12">The Philosophy</h2>
                <p class="text-4xl md:text-5xl font-serif italic text-white leading-tight">
                    "Arsitektur bukanlah sekadar menyusun bata, melainkan tentang bagaimana kita mengatur emosi dan
                    memori di dalam sebuah ruang."
                </p>
            </div>
            <div class="space-y-8 text-slate-400 font-light leading-relaxed text-lg">
                <p>
                    Sebagai Principal Architect, saya percaya bahwa keberhasilan sebuah karya arsitektur diukur dari
                    kemampuannya untuk beradaptasi dengan lingkungan dan memberikan kenyamanan psikologis bagi
                    penghuninya.
                </p>
                <p>
                    Setiap garis yang ditarik adalah sebuah keputusan strategis. Kami mengutamakan penggunaan material
                    lokal yang dieksekusi dengan teknik modern, menciptakan sintesis antara tradisi dan masa depan.
                </p>
                <div class="pt-8">
                    <img src="https://placehold.co/300x100/1a1a1a/A67C52?text=Chandra+Signature" class="h-16 opacity-50"
                        alt="Signature">
                </div>
            </div>
        </div>
    </section>

    <section id="projects" class="py-32 px-6 lg:px-12 max-w-[100rem] mx-auto">
        <div class="flex justify-between items-center mb-20 border-b grid-line pb-10">
            <h2 class="text-4xl md:text-6xl font-serif text-white">Project Index</h2>
            <p class="text-[10px] font-bold uppercase tracking-[0.4em] text-slate-500">2012 — 2026</p>
        </div>

        <div class="space-y-0 border-b grid-line">
            <div class="group py-12 border-t grid-line hover:bg-white/5 transition-all duration-500">
                <div class="grid lg:grid-cols-12 gap-8 items-center cursor-pointer">
                    <div class="lg:col-span-1 text-[10px] font-bold text-slate-600 uppercase tracking-widest">01 / 04
                    </div>
                    <div class="lg:col-span-5">
                        <h3
                            class="text-3xl md:text-5xl font-serif text-white group-hover:text-bronze transition-colors tracking-tight">
                            The Obsidian Villa</h3>
                    </div>
                    <div class="lg:col-span-3 text-[10px] font-medium uppercase tracking-[0.2em] text-slate-500">Bali,
                        Indonesia • Residential</div>
                    <div
                        class="lg:col-span-3 text-right hidden lg:block opacity-0 group-hover:opacity-100 transition-opacity">
                        <img src="https://images.unsplash.com/photo-1613490493576-7fde63acd811?q=80&w=400&auto=format&fit=crop"
                            class="w-48 h-24 object-cover inline-block border grid-line" alt="Villa Project">
                    </div>
                </div>
            </div>

            <div class="group py-12 border-t grid-line hover:bg-white/5 transition-all duration-500">
                <div class="grid lg:grid-cols-12 gap-8 items-center cursor-pointer">
                    <div class="lg:col-span-1 text-[10px] font-bold text-slate-600 uppercase tracking-widest">02 / 04
                    </div>
                    <div class="lg:col-span-5">
                        <h3
                            class="text-3xl md:text-5xl font-serif text-white group-hover:text-bronze transition-colors tracking-tight">
                            Candi Urban Park</h3>
                    </div>
                    <div class="lg:col-span-3 text-[10px] font-medium uppercase tracking-[0.2em] text-slate-500">
                        Yogyakarta • Public Space</div>
                    <div
                        class="lg:col-span-3 text-right hidden lg:block opacity-0 group-hover:opacity-100 transition-opacity">
                        <img src="https://images.unsplash.com/photo-1518005020251-58296bbf61f1?q=80&w=400&auto=format&fit=crop"
                            class="w-48 h-24 object-cover inline-block border grid-line" alt="Park Project">
                    </div>
                </div>
            </div>

            <div class="group py-12 border-t grid-line hover:bg-white/5 transition-all duration-500">
                <div class="grid lg:grid-cols-12 gap-8 items-center cursor-pointer">
                    <div class="lg:col-span-1 text-[10px] font-bold text-slate-600 uppercase tracking-widest">03 / 04
                    </div>
                    <div class="lg:col-span-5">
                        <h3
                            class="text-3xl md:text-5xl font-serif text-white group-hover:text-bronze transition-colors tracking-tight">
                            Sky-Garden Corporate</h3>
                    </div>
                    <div class="lg:col-span-3 text-[10px] font-medium uppercase tracking-[0.2em] text-slate-500">
                        Singapore • Office Tower</div>
                    <div
                        class="lg:col-span-3 text-right hidden lg:block opacity-0 group-hover:opacity-100 transition-opacity">
                        <img src="https://images.unsplash.com/photo-1449156001499-47c59b1093f7?q=80&w=400&auto=format&fit=crop"
                            class="w-48 h-24 object-cover inline-block border grid-line" alt="Office Project">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="process" class="py-32 bg-[#151515]">
        <div class="max-w-7xl mx-auto px-6">
            <div class="mb-20">
                <h2 class="text-sm font-bold uppercase tracking-[0.5em] text-bronze mb-6">Expertise</h2>
                <h3 class="text-4xl md:text-6xl font-serif text-white">Holistic Solutions.</h3>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-1">
                <div class="border grid-line p-10 hover:bg-[#1a1a1a] transition-colors">
                    <span class="text-xs font-bold text-bronze uppercase tracking-widest block mb-10">01</span>
                    <h4 class="text-2xl font-serif text-white mb-4">Architectural Design</h4>
                    <p class="text-sm text-slate-500 leading-relaxed">Dari sketsa konsep hingga gambar kerja mendetail
                        untuk hunian mewah, gedung komersial, dan fasilitas publik.</p>
                </div>
                <div class="border grid-line p-10 hover:bg-[#1a1a1a] transition-colors">
                    <span class="text-xs font-bold text-bronze uppercase tracking-widest block mb-10">02</span>
                    <h4 class="text-2xl font-serif text-white mb-4">Urban Strategic Planning</h4>
                    <p class="text-sm text-slate-500 leading-relaxed">Konsultasi pengembangan kawasan, tata kota makro,
                        dan integrasi ekosistem hijau dalam pusat bisnis.</p>
                </div>
                <div class="border grid-line p-10 hover:bg-[#1a1a1a] transition-colors">
                    <span class="text-xs font-bold text-bronze uppercase tracking-widest block mb-10">03</span>
                    <h4 class="text-2xl font-serif text-white mb-4">Interior Architecture</h4>
                    <p class="text-sm text-slate-500 leading-relaxed">Menyatukan fungsi interior dengan struktur
                        bangunan untuk menciptakan pengalaman ruang yang mengalir.</p>
                </div>
            </div>
        </div>
    </section>

    <footer id="contact" class="py-32 px-6 lg:px-12 border-t grid-line relative">
        <div class="max-w-[100rem] mx-auto grid lg:grid-cols-2 gap-24">

            <div>
                <h2 class="text-5xl md:text-7xl font-serif text-white mb-12">Let's build <br> the <span
                        class="italic text-bronze">future.</span></h2>
                <div class="space-y-8">
                    <div>
                        <span class="text-[10px] font-bold uppercase tracking-[0.3em] text-slate-600 block mb-2">Office
                            Headquarters</span>
                        <p class="text-xl font-light">Jl. Arsitektur No. 88, Menteng, <br> Jakarta Pusat, Indonesia</p>
                    </div>
                    <div>
                        <span
                            class="text-[10px] font-bold uppercase tracking-[0.3em] text-slate-600 block mb-2">Electronic
                            Mail</span>
                        <p class="text-xl font-light text-bronze border-b w-fit border-bronze pb-1">
                            studio@arischandra.com</p>
                    </div>
                </div>

                <div class="flex gap-10 mt-20">
                    <a href="#"
                        class="text-xs font-bold uppercase tracking-widest text-slate-500 hover:text-white transition">Instagram</a>
                    <a href="#"
                        class="text-xs font-bold uppercase tracking-widest text-slate-500 hover:text-white transition">Behance</a>
                    <a href="#"
                        class="text-xs font-bold uppercase tracking-widest text-slate-500 hover:text-white transition">LinkedIn</a>
                </div>
            </div>

            <div class="bg-[#222] p-10 lg:p-16 border grid-line shadow-2xl">
                <h3 class="text-2xl font-serif italic text-white mb-10">Inquire About Your Project</h3>
                <form class="space-y-8">
                    <div class="border-b grid-line pb-2">
                        <input type="text" placeholder="YOUR NAME"
                            class="bg-transparent w-full focus:outline-none text-xs font-bold tracking-widest uppercase placeholder:text-slate-700">
                    </div>
                    <div class="border-b grid-line pb-2">
                        <input type="email" placeholder="EMAIL ADDRESS"
                            class="bg-transparent w-full focus:outline-none text-xs font-bold tracking-widest uppercase placeholder:text-slate-700">
                    </div>
                    <div class="border-b grid-line pb-2">
                        <textarea placeholder="PROJECT BRIEF" rows="4"
                            class="bg-transparent w-full focus:outline-none text-xs font-bold tracking-widest uppercase placeholder:text-slate-700"></textarea>
                    </div>
                    <button
                        class="w-full bg-white text-black py-4 text-[10px] font-bold uppercase tracking-[0.4em] hover:bg-bronze hover:text-white transition-all">Send
                        Inquiry</button>
                </form>
            </div>
        </div>

        <div
            class="max-w-[100rem] mx-auto mt-32 pt-8 border-t grid-line flex flex-col md:flex-row justify-between items-center gap-6">
            <p class="text-[10px] font-bold text-slate-600 uppercase tracking-widest">© 2026 Aris Chandra Studio.
                Produced by Elijabah International.</p>
            <div class="flex gap-10 text-[10px] font-bold text-slate-600 uppercase tracking-widest">
                <a href="#" class="hover:text-white">Privacy</a>
                <a href="#" class="hover:text-white">Terms</a>
            </div>
        </div>
    </footer>

</body>

</html>
