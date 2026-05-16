<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deva | Full Stack Developer & Architect</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Fira+Code:wght@400;500;600&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap');

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #030712;
            /* Gray 950 */
            color: #9ca3af;
            /* Gray 400 */
        }

        .font-mono {
            font-family: 'Fira Code', monospace;
        }

        /* Neon Accents */
        .text-cyan-neon {
            color: #22d3ee;
        }

        .text-emerald-neon {
            color: #34d399;
        }

        .glass-nav {
            background: rgba(3, 7, 18, 0.8);
            backdrop-filter: blur(12px);
            border-bottom: 1px solid rgba(34, 211, 238, 0.1);
        }

        .border-neon {
            border-color: rgba(34, 211, 238, 0.2);
        }

        /* Terminal Blinking Cursor */
        .cursor-blink {
            animation: blink 1s step-end infinite;
        }

        @keyframes blink {
            50% {
                opacity: 0;
            }
        }

        /* Subtle Glow on Hover */
        .hover-glow:hover {
            box-shadow: 0 0 20px -5px rgba(34, 211, 238, 0.3);
            border-color: rgba(34, 211, 238, 0.5);
        }
    </style>
</head>

<body class="antialiased selection:bg-cyan-900 selection:text-cyan-100" x-data="{ mobileMenu: false }">

    <!-- 1. NAVIGATION (IDE STYLE) -->
    <nav class="fixed top-0 w-full z-[100] glass-nav">
        <div class="max-w-6xl mx-auto px-6 py-4 flex justify-between items-center">

            <!-- Logo -->
            <a href="#" class="flex items-center gap-2 group">
                <span class="font-mono text-cyan-neon text-xl font-bold">&lt;</span>
                <span class="text-lg font-bold text-gray-100 tracking-tight">deva</span>
                <span
                    class="font-mono text-cyan-neon text-xl font-bold group-hover:translate-x-1 transition-transform">/&gt;</span>
            </a>

            <!-- Desktop Menu -->
            <div class="hidden md:flex items-center gap-8 font-mono text-xs text-gray-400">
                <a href="#about" class="hover:text-cyan-neon transition-colors"><span
                        class="text-emerald-neon">01.</span> About</a>
                <a href="#skills" class="hover:text-cyan-neon transition-colors"><span
                        class="text-emerald-neon">02.</span> Skills</a>
                <a href="#experience" class="hover:text-cyan-neon transition-colors"><span
                        class="text-emerald-neon">03.</span> Experience</a>
                <a href="#projects" class="hover:text-cyan-neon transition-colors"><span
                        class="text-emerald-neon">04.</span> Work</a>
            </div>

            <!-- CTA Desktop -->
            <div class="hidden md:block">
                <a href="#contact"
                    class="font-mono text-xs text-cyan-neon border border-cyan-neon/50 px-5 py-2.5 rounded hover:bg-cyan-neon/10 transition-colors">
                    Resume.pdf
                </a>
            </div>

            <button @click="mobileMenu = !mobileMenu" class="md:hidden text-cyan-neon text-2xl focus:outline-none">
                <i :class="mobileMenu ? 'fa-solid fa-xmark' : 'fa-solid fa-bars'"></i>
            </button>
        </div>

        <!-- Mobile Menu -->
        <div x-show="mobileMenu" x-collapse x-cloak
            class="md:hidden bg-[#030712] border-t border-gray-800 px-6 py-8 flex flex-col gap-6 font-mono">
            <a href="#about" @click="mobileMenu = false" class="text-lg text-gray-300 hover:text-cyan-neon"><span
                    class="text-emerald-neon">01.</span> About</a>
            <a href="#skills" @click="mobileMenu = false" class="text-lg text-gray-300 hover:text-cyan-neon"><span
                    class="text-emerald-neon">02.</span> Skills</a>
            <a href="#experience" @click="mobileMenu = false" class="text-lg text-gray-300 hover:text-cyan-neon"><span
                    class="text-emerald-neon">03.</span> Experience</a>
            <a href="#projects" @click="mobileMenu = false" class="text-lg text-gray-300 hover:text-cyan-neon"><span
                    class="text-emerald-neon">04.</span> Work</a>
            <button
                class="w-full border border-cyan-neon text-cyan-neon py-3 rounded mt-4 hover:bg-cyan-neon/10">Download
                Resume</button>
        </div>
    </nav>

    <!-- 2. HERO SECTION (TERMINAL VIBE) -->
    <header class="min-h-screen flex items-center pt-20 px-6 relative">
        <!-- Background Grid -->
        <div
            class="absolute inset-0 bg-[linear-gradient(rgba(255,255,255,0.02)_1px,transparent_1px),linear-gradient(90deg,rgba(255,255,255,0.02)_1px,transparent_1px)] bg-[size:4rem_4rem] [mask-image:radial-gradient(ellipse_60%_60%_at_50%_50%,#000_70%,transparent_100%)] pointer-events-none">
        </div>

        <div class="max-w-6xl mx-auto w-full relative z-10 pt-10">
            <div class="font-mono text-cyan-neon mb-5 text-sm md:text-base">
                <span class="text-emerald-neon">~</span> /home/visitor > ./greet.sh
            </div>

            <h1 class="text-5xl md:text-7xl font-extrabold text-gray-100 tracking-tight mb-4">
                Hi, I'm Deva.
            </h1>
            <h2 class="text-4xl md:text-6xl font-bold text-gray-500 tracking-tight mb-8">
                I architect scalable systems.
            </h2>

            <p class="max-w-2xl text-base md:text-lg text-gray-400 leading-relaxed mb-10">
                Saya adalah seorang <span class="text-cyan-neon font-medium">Senior Full Stack Developer</span> dengan
                pengalaman lebih dari 7 tahun. Berfokus pada pengembangan aplikasi web berkinerja tinggi, API Gateway,
                dan infrastruktur *cloud* yang tangguh.
            </p>

            <div class="flex flex-wrap items-center gap-6 font-mono">
                <a href="#projects"
                    class="bg-cyan-neon/10 text-cyan-neon border border-cyan-neon/50 px-8 py-4 rounded font-bold hover:bg-cyan-neon/20 transition-colors">
                    Check out my work
                </a>
                <div class="flex gap-5 text-xl">
                    <a href="#" class="text-gray-500 hover:text-white transition-colors"><i
                            class="fa-brands fa-github"></i></a>
                    <a href="#" class="text-gray-500 hover:text-cyan-neon transition-colors"><i
                            class="fa-brands fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
    </header>

    <!-- 3. ABOUT & TECH STACK (CODE BLOCK STYLE) -->
    <section id="skills" class="py-24 px-6 border-t border-gray-800/50 bg-[#0a0f1c]">
        <div class="max-w-6xl mx-auto">
            <div class="flex items-center gap-4 mb-16">
                <h2 class="text-2xl md:text-3xl font-bold text-gray-100"><span
                        class="font-mono text-emerald-neon text-xl font-normal">02.</span> Tech Stack & Tools</h2>
                <div class="h-px bg-gray-800 flex-1"></div>
            </div>

            <div class="grid lg:grid-cols-2 gap-12 items-start">
                <!-- Text -->
                <div class="space-y-6 text-gray-400 leading-relaxed">
                    <p>
                        Filosofi saya dalam *engineering* adalah memilih alat yang tepat untuk menyelesaikan masalah
                        secara efisien. Saya memiliki spesialisasi mendalam di ekosistem <span
                            class="text-emerald-neon">PHP/Laravel</span> untuk *backend* monolitik, dan <span
                            class="text-cyan-neon">TypeScript/Next.js</span> untuk *frontend* interaktif.
                    </p>
                    <p>
                        Selain koding, saya juga terbiasa mengelola *deployment pipeline*, manajemen VPS berbasis Ubuntu
                        Linux, implementasi kontainer, hingga optimasi *database*.
                    </p>
                    <p>Berikut adalah teknologi yang saya gunakan setiap hari:</p>
                </div>

                <!-- Terminal Window -->
                <div class="rounded-xl bg-[#030712] border border-gray-800 overflow-hidden shadow-2xl">
                    <div class="bg-gray-900 px-4 py-2 flex items-center gap-2 border-b border-gray-800">
                        <div class="w-3 h-3 rounded-full bg-red-500"></div>
                        <div class="w-3 h-3 rounded-full bg-yellow-500"></div>
                        <div class="w-3 h-3 rounded-full bg-green-500"></div>
                        <span class="ml-4 font-mono text-[10px] text-gray-500">stack.json</span>
                    </div>
                    <div class="p-6 font-mono text-sm overflow-x-auto text-gray-300">
                        <pre><code class="language-json">{
  <span class="text-cyan-neon">"frontend"</span>: [
    <span class="text-emerald-neon">"React.js"</span>, 
    <span class="text-emerald-neon">"Next.js"</span>, 
    <span class="text-emerald-neon">"TailwindCSS"</span>, 
    <span class="text-emerald-neon">"TypeScript"</span>
  ],
  <span class="text-cyan-neon">"backend"</span>: [
    <span class="text-emerald-neon">"Laravel (PHP)"</span>, 
    <span class="text-emerald-neon">"Node.js"</span>, 
    <span class="text-emerald-neon">"Express"</span>
  ],
  <span class="text-cyan-neon">"database"</span>: [
    <span class="text-emerald-neon">"PostgreSQL"</span>, 
    <span class="text-emerald-neon">"MySQL"</span>, 
    <span class="text-emerald-neon">"Neon DB"</span>
  ],
  <span class="text-cyan-neon">"devops_tools"</span>: [
    <span class="text-emerald-neon">"Docker"</span>, 
    <span class="text-emerald-neon">"PM2"</span>, 
    <span class="text-emerald-neon">"Ubuntu VPS"</span>, 
    <span class="text-emerald-neon">"CyberPanel"</span>
  ]
}<span class="cursor-blink font-bold text-gray-100">_</span></code></pre>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. EXPERIENCE (TIMELINE) -->
    <section id="experience" class="py-24 px-6">
        <div class="max-w-3xl mx-auto">
            <div class="flex items-center gap-4 mb-16">
                <h2 class="text-2xl md:text-3xl font-bold text-gray-100"><span
                        class="font-mono text-emerald-neon text-xl font-normal">03.</span> Where I've Worked</h2>
                <div class="h-px bg-gray-800 flex-1"></div>
            </div>

            <div class="space-y-12 border-l-2 border-gray-800 ml-3 md:ml-0 pl-6 md:pl-10 relative">

                <!-- Job 1 -->
                <div class="relative">
                    <div
                        class="absolute w-4 h-4 bg-[#030712] border-2 border-cyan-neon rounded-full -left-[33px] md:-left-[49px] top-1">
                    </div>
                    <h3 class="text-xl font-bold text-gray-100">Senior Full Stack Developer <span
                            class="text-cyan-neon">@ Elijabah Tech</span></h3>
                    <p class="font-mono text-xs text-gray-500 mb-4 mt-1">Februari 2026 - Sekarang | Batam / Remote</p>
                    <ul class="space-y-3 text-sm text-gray-400">
                        <li class="flex items-start gap-3">
                            <i class="fa-solid fa-caret-right text-cyan-neon mt-1 text-xs"></i>
                            <span>Memimpin pengembangan arsitektur *microservices* untuk *WhatsApp API Gateway* kustom
                                menggunakan Node.js dan *library* Baileys.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="fa-solid fa-caret-right text-cyan-neon mt-1 text-xs"></i>
                            <span>Merancang dan men-*deploy* aplikasi *Contact Management* (SaaS) berbasis React.js dan
                                Neon Serverless Database dengan *uptime* 99.9%.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="fa-solid fa-caret-right text-cyan-neon mt-1 text-xs"></i>
                            <span>Mengoptimalkan server *production* berbasis Ubuntu dengan integrasi Docker dan PM2
                                untuk kelancaran *runtime* aplikasi.</span>
                        </li>
                    </ul>
                </div>

                <!-- Job 2 -->
                <div class="relative">
                    <div
                        class="absolute w-4 h-4 bg-[#030712] border-2 border-gray-600 rounded-full -left-[33px] md:-left-[49px] top-1">
                    </div>
                    <h3 class="text-xl font-bold text-gray-100">Backend Laravel Developer <span
                            class="text-cyan-neon">@ CreativeHub Studio</span></h3>
                    <p class="font-mono text-xs text-gray-500 mb-4 mt-1">Januari 2020 - Desember 2025 | Jakarta</p>
                    <ul class="space-y-3 text-sm text-gray-400">
                        <li class="flex items-start gap-3">
                            <i class="fa-solid fa-caret-right text-emerald-neon mt-1 text-xs"></i>
                            <span>Mengembangkan API RESTful yang aman dan skalabel untuk 5+ aplikasi *mobile* dan *web
                                platform* skala *enterprise*.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="fa-solid fa-caret-right text-emerald-neon mt-1 text-xs"></i>
                            <span>Mengurangi *query load time* database MySQL hingga 40% melalui implementasi *caching*
                                (Redis) dan optimasi *indexing*.</span>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </section>

    <!-- 5. FEATURED PROJECTS (BENTO/CARD GRID) -->
    <section id="projects" class="py-24 px-6 bg-[#0a0f1c] border-y border-gray-800/50">
        <div class="max-w-6xl mx-auto">
            <div class="flex items-center gap-4 mb-16">
                <h2 class="text-2xl md:text-3xl font-bold text-gray-100"><span
                        class="font-mono text-emerald-neon text-xl font-normal">04.</span> Some Things I've Built</h2>
                <div class="h-px bg-gray-800 flex-1"></div>
            </div>

            <div class="grid md:grid-cols-2 gap-8">

                <!-- Project 1 -->
                <article
                    class="bg-[#030712] border border-gray-800 rounded-xl overflow-hidden hover-glow group flex flex-col h-full">
                    <div class="h-48 overflow-hidden relative border-b border-gray-800">
                        <img src="https://placehold.co/800x600/111827/22d3ee?text=WA+API+Gateway"
                            class="w-full h-full object-cover opacity-60 group-hover:opacity-100 transition duration-500">
                        <div
                            class="absolute inset-0 bg-cyan-900/20 group-hover:bg-transparent transition duration-500">
                        </div>
                    </div>
                    <div class="p-8 flex flex-col flex-1">
                        <div class="flex justify-between items-center mb-4">
                            <i class="fa-regular fa-folder text-4xl text-cyan-neon"></i>
                            <div class="flex gap-4 text-xl text-gray-400">
                                <a href="#" class="hover:text-cyan-neon transition"><i
                                        class="fa-brands fa-github"></i></a>
                                <a href="#" class="hover:text-cyan-neon transition"><i
                                        class="fa-solid fa-arrow-up-right-from-square"></i></a>
                            </div>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-100 mb-4 group-hover:text-cyan-neon transition">
                            WAGateway Microservice</h3>
                        <p class="text-sm text-gray-400 mb-6 flex-1">
                            Sistem API mandiri berbasis *Baileys library* untuk mengirim dan menerima pesan WhatsApp
                            secara *programmatic*. Dilengkapi dengan *webhook*, autentikasi multi-device, dan dijalankan
                            menggunakan PM2 di Ubuntu Server.
                        </p>
                        <ul class="flex flex-wrap gap-3 font-mono text-[10px] text-gray-500">
                            <li>Node.js</li>
                            <li>Express</li>
                            <li>Baileys</li>
                            <li>PM2</li>
                        </ul>
                    </div>
                </article>

                <!-- Project 2 -->
                <article
                    class="bg-[#030712] border border-gray-800 rounded-xl overflow-hidden hover-glow group flex flex-col h-full">
                    <div class="h-48 overflow-hidden relative border-b border-gray-800">
                        <img src="https://placehold.co/800x600/111827/34d399?text=Contact+MGT+App"
                            class="w-full h-full object-cover opacity-60 group-hover:opacity-100 transition duration-500">
                        <div
                            class="absolute inset-0 bg-emerald-900/20 group-hover:bg-transparent transition duration-500">
                        </div>
                    </div>
                    <div class="p-8 flex flex-col flex-1">
                        <div class="flex justify-between items-center mb-4">
                            <i class="fa-regular fa-folder text-4xl text-cyan-neon"></i>
                            <div class="flex gap-4 text-xl text-gray-400">
                                <a href="#" class="hover:text-cyan-neon transition"><i
                                        class="fa-brands fa-github"></i></a>
                                <a href="#" class="hover:text-cyan-neon transition"><i
                                        class="fa-solid fa-arrow-up-right-from-square"></i></a>
                            </div>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-100 mb-4 group-hover:text-cyan-neon transition">
                            OmniContact CRM</h3>
                        <p class="text-sm text-gray-400 mb-6 flex-1">
                            Aplikasi Single Page Application (SPA) manajemen kontak *real-time*. Menggunakan *serverless
                            database* untuk performa maksimal dan Docker untuk standardisasi *environment development*.
                        </p>
                        <ul class="flex flex-wrap gap-3 font-mono text-[10px] text-gray-500">
                            <li>Next.js</li>
                            <li>TypeScript</li>
                            <li>Neon DB</li>
                            <li>Tailwind</li>
                        </ul>
                    </div>
                </article>

            </div>
        </div>
    </section>

    <!-- 6. CONTACT SECTION -->
    <footer id="contact" class="py-32 px-6">
        <div class="max-w-2xl mx-auto text-center">
            <h2 class="font-mono text-cyan-neon mb-4"><span class="text-emerald-neon">05.</span> What's Next?</h2>
            <h3 class="text-4xl md:text-5xl font-extrabold text-gray-100 mb-6">Get In Touch</h3>
            <p class="text-gray-400 mb-12 leading-relaxed">
                Saat ini saya sedang terbuka untuk peluang baru, baik pengerjaan proyek *freelance* maupun posisi
                *full-time* strategis. Kotak masuk saya selalu terbuka. Mari diskusikan bagaimana saya dapat membantu
                membangun produk Anda.
            </p>
            <a href="mailto:hello@deva.dev"
                class="inline-block bg-transparent font-mono text-cyan-neon border border-cyan-neon px-8 py-4 rounded hover:bg-cyan-neon/10 transition-colors">
                Say Hello
            </a>

            <div class="mt-32 text-center font-mono text-[10px] text-gray-600">
                <a href="#" class="hover:text-cyan-neon transition">Designed & Built with Laravel &
                    TailwindCSS</a>
                <p class="mt-2">© 2026 Elijabah Tech Portfolio</p>
            </div>
        </div>
    </footer>

</body>

</html>
