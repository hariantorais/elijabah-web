<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pratama Wijaya, MBA | Senior Strategy Consultant</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:ital,wght@0,400;0,700;0,900;1,400&display=swap');

        body {
            font-family: 'Inter', sans-serif;
            background-color: #fdfdfd;
            color: #1e293b;
        }

        h1,
        h2,
        h3,
        h4,
        .font-serif {
            font-family: 'Playfair Display', serif;
        }

        .bg-navy {
            background-color: #0f172a;
        }

        .text-gold {
            color: #c5a059;
        }

        .border-gold {
            border-color: #c5a059;
        }

        /* Layout Borders */
        .section-divider {
            border-top: 1px solid #e2e8f0;
        }

        .vertical-divider {
            border-left: 1px solid #e2e8f0;
        }

        /* Animation */
        .fade-in {
            animation: fadeIn 1s ease-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>

<body class="antialiased selection:bg-slate-800 selection:text-white" x-data="{ scrolled: false }"
    @scroll.window="scrolled = (window.pageYOffset > 50)">

    <div class="hidden lg:block bg-navy py-2 text-white border-b border-white/5">
        <div
            class="max-w-7xl mx-auto px-6 flex justify-between items-center text-[10px] font-bold uppercase tracking-[0.2em]">
            <div class="flex gap-6">
                <span><i class="fa-solid fa-location-dot text-gold mr-2"></i> Jakarta • Singapore • London</span>
                <span><i class="fa-solid fa-clock text-gold mr-2"></i> GMT+7 Available</span>
            </div>
            <div class="flex gap-6">
                <a href="#" class="hover:text-gold transition">Private Briefing</a>
                <a href="#" class="hover:text-gold transition">Member Portal</a>
            </div>
        </div>
    </div>

    <nav :class="scrolled ? 'bg-white/95 backdrop-blur-md shadow-lg py-3' : 'bg-white py-6'"
        class="sticky top-0 w-full z-[100] transition-all duration-300 border-b border-slate-100">
        <div class="max-w-7xl mx-auto px-6 flex justify-between items-center">
            <div class="flex items-center gap-4">
                <div class="w-10 h-10 bg-navy flex items-center justify-center text-gold text-xl font-serif font-bold">P
                </div>
                <div class="leading-none">
                    <span class="text-xl font-bold tracking-tighter text-slate-900 font-serif">Pratama Wijaya,
                        MBA</span>
                    <span class="text-[9px] font-bold text-slate-400 tracking-[0.3em] uppercase block mt-1">Strategic
                        Advisory</span>
                </div>
            </div>

            <div
                class="hidden lg:flex items-center gap-10 text-[10px] font-bold uppercase tracking-widest text-slate-600">
                <a href="#about" class="hover:text-navy transition">The Advisor</a>
                <a href="#expertise" class="hover:text-navy transition">Consultancy</a>
                <a href="#impact" class="hover:text-navy transition">Impact</a>
                <a href="#insights" class="hover:text-navy transition">Insights</a>
                <a href="#contact" class="bg-navy text-white px-6 py-3 hover:bg-slate-800 transition">Get Started</a>
            </div>
        </div>
    </nav>

    <header class="bg-white overflow-hidden">
        <div class="max-w-7xl mx-auto grid lg:grid-cols-12 border-x border-slate-100">
            <div class="lg:col-span-7 p-10 lg:p-20 flex flex-col justify-center">
                <span class="text-gold font-bold text-[10px] uppercase tracking-[0.5em] mb-8 block">Global Business
                    Strategy</span>
                <h1
                    class="text-5xl md:text-7xl lg:text-8xl font-serif font-bold text-slate-900 leading-[0.95] mb-10 fade-in">
                    Navigating <br> <span class="italic font-light">Complex</span> <br> Realities.
                </h1>
                <p class="text-lg text-slate-500 font-light leading-relaxed max-w-lg mb-12">
                    Membantu pemimpin perusahaan dalam mengambil keputusan kritis melalui analisis berbasis data,
                    restrukturisasi strategis, dan transformasi digital yang terukur.
                </p>
                <div class="flex flex-col sm:flex-row gap-6">
                    <button
                        class="bg-navy text-white px-10 py-4 font-bold text-xs uppercase tracking-widest hover:bg-slate-800 transition shadow-xl">Consultancy
                        Profile</button>
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-px bg-slate-300"></div>
                        <span class="text-[10px] font-bold text-slate-400 uppercase tracking-widest">Est. 2010</span>
                    </div>
                </div>
            </div>
            <div class="lg:col-span-5 relative bg-slate-100">
                <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?q=80&w=800&auto=format&fit=crop"
                    alt="Pratama Wijaya" class="w-full h-full object-cover filter contrast-110">
            </div>
        </div>
    </header>

    <section class="bg-navy text-white py-16">
        <div class="max-w-7xl mx-auto px-6 grid grid-cols-2 lg:grid-cols-4 gap-12 text-center">
            <div>
                <h4 class="text-4xl md:text-5xl font-serif text-gold mb-2">12+</h4>
                <p class="text-[9px] font-bold uppercase tracking-[0.3em] text-slate-400">Years in Strategy</p>
            </div>
            <div>
                <h4 class="text-4xl md:text-5xl font-serif text-gold mb-2">500M+</h4>
                <p class="text-[9px] font-bold uppercase tracking-[0.3em] text-slate-400">Revenue Managed ($)</p>
            </div>
            <div>
                <h4 class="text-4xl md:text-5xl font-serif text-gold mb-2">40+</h4>
                <p class="text-[9px] font-bold uppercase tracking-[0.3em] text-slate-400">Corporate Clients</p>
            </div>
            <div>
                <h4 class="text-4xl md:text-5xl font-serif text-gold mb-2">150%</h4>
                <p class="text-[9px] font-bold uppercase tracking-[0.3em] text-slate-400">Avg. Growth Impact</p>
            </div>
        </div>
    </section>

    <section id="about" class="py-24 lg:py-32 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid lg:grid-cols-2 gap-20 items-start">
                <div>
                    <h2 class="text-sm font-bold text-gold uppercase tracking-[0.5em] mb-12">The Advisor</h2>
                    <h3 class="text-4xl md:text-5xl font-serif text-slate-900 leading-tight mb-8">
                        Keunggulan Strategis <br> Bukanlah Sebuah <span class="italic">Kebetulan.</span>
                    </h3>
                    <div class="space-y-6 text-slate-500 font-light text-lg leading-relaxed">
                        <p>
                            Sebagai penasihat strategis, fokus saya adalah membedah inefisiensi yang menghambat
                            pertumbuhan perusahaan Anda. Dengan latar belakang MBA dari institusi ternama dan pengalaman
                            lapangan di berbagai industri (Fintech, Agrikultur, & Retail), saya membawa perspektif
                            global ke masalah lokal Anda.
                        </p>
                        <p>
                            Pendekatan saya bersifat holistik—mulai dari audit operasional, pemetaan kompetitor, hingga
                            implementasi solusi teknologi yang tepat sasaran.
                        </p>
                    </div>
                </div>

                <div class="grid grid-cols-1 gap-1">
                    <div
                        class="bg-slate-50 p-10 border border-slate-100 hover:bg-white hover:shadow-xl transition duration-500 group">
                        <div class="text-navy text-2xl mb-6 group-hover:text-gold transition"><i
                                class="fa-solid fa-chess-knight"></i></div>
                        <h4 class="text-xl font-bold mb-4">Strategic Auditing</h4>
                        <p class="text-sm text-slate-500 leading-relaxed">Melakukan tinjauan menyeluruh terhadap proses
                            bisnis saat ini untuk mengidentifikasi celah keuntungan yang hilang.</p>
                    </div>
                    <div
                        class="bg-slate-50 p-10 border border-slate-100 hover:bg-white hover:shadow-xl transition duration-500 group">
                        <div class="text-navy text-2xl mb-6 group-hover:text-gold transition"><i
                                class="fa-solid fa-chart-line"></i></div>
                        <h4 class="text-xl font-bold mb-4">Growth Acceleration</h4>
                        <p class="text-sm text-slate-500 leading-relaxed">Merancang peta jalan ekspansi pasar baik
                            secara organik maupun melalui integrasi Merger & Akuisisi.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="expertise" class="py-24 bg-slate-900 text-white">
        <div class="max-w-7xl mx-auto px-6">
            <div class="mb-20">
                <h2 class="text-sm font-bold text-gold uppercase tracking-[0.5em] mb-4">Consultancy Areas</h2>
                <h3 class="text-4xl md:text-6xl font-serif">Deep Domain Expertise.</h3>
            </div>

            <div class="grid md:grid-cols-3 gap-0 border border-white/10">
                <div class="p-12 border-b md:border-b-0 md:border-r border-white/10 hover:bg-white/5 transition">
                    <h4 class="text-2xl font-serif mb-6 text-gold">Mergers & Acquisitions</h4>
                    <ul class="space-y-4 text-sm text-slate-400 font-light">
                        <li class="flex items-center gap-3"><i class="fa-solid fa-check text-xs"></i> Due Diligence</li>
                        <li class="flex items-center gap-3"><i class="fa-solid fa-check text-xs"></i> Valuation Modeling
                        </li>
                        <li class="flex items-center gap-3"><i class="fa-solid fa-check text-xs"></i> Post-Merger
                            Integration</li>
                    </ul>
                </div>
                <div class="p-12 border-b md:border-b-0 md:border-r border-white/10 hover:bg-white/5 transition">
                    <h4 class="text-2xl font-serif mb-6 text-gold">Digital Transformation</h4>
                    <ul class="space-y-4 text-sm text-slate-400 font-light">
                        <li class="flex items-center gap-3"><i class="fa-solid fa-check text-xs"></i> Tech Stack
                            Optimization</li>
                        <li class="flex items-center gap-3"><i class="fa-solid fa-check text-xs"></i> Data Governance
                        </li>
                        <li class="flex items-center gap-3"><i class="fa-solid fa-check text-xs"></i> Automation
                            Workflow</li>
                    </ul>
                </div>
                <div class="p-12 hover:bg-white/5 transition">
                    <h4 class="text-2xl font-serif mb-6 text-gold">Corporate Governance</h4>
                    <ul class="space-y-4 text-sm text-slate-400 font-light">
                        <li class="flex items-center gap-3"><i class="fa-solid fa-check text-xs"></i> Risk Management
                        </li>
                        <li class="flex items-center gap-3"><i class="fa-solid fa-check text-xs"></i> Compliance
                            Advisory</li>
                        <li class="flex items-center gap-3"><i class="fa-solid fa-check text-xs"></i> Board Advisory
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="impact" class="py-24 lg:py-32 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex flex-col md:flex-row justify-between items-end mb-20 gap-8">
                <div class="max-w-2xl">
                    <h2 class="text-sm font-bold text-gold uppercase tracking-[0.5em] mb-4">Case Studies</h2>
                    <h3 class="text-4xl md:text-5xl font-serif text-slate-900">Proven Results.</h3>
                </div>
                <a href="#"
                    class="text-[10px] font-bold text-slate-500 uppercase tracking-widest border-b-2 border-gold pb-2">View
                    Portfolio Index</a>
            </div>

            <div class="grid md:grid-cols-2 gap-12">
                <div class="group cursor-pointer">
                    <div class="h-80 overflow-hidden mb-8 relative">
                        <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?q=80&w=800&auto=format&fit=crop"
                            class="w-full h-full object-cover group-hover:scale-105 transition duration-700">
                        <div
                            class="absolute bottom-6 left-6 bg-navy text-white px-4 py-2 text-[10px] font-bold uppercase tracking-widest">
                            Fintech Expansion</div>
                    </div>
                    <h4 class="text-2xl font-serif font-bold mb-4 group-hover:text-gold transition">Restrukturisasi
                        Operasional & Ekspansi Pasar Regional (SEA)</h4>
                    <p class="text-slate-500 text-sm leading-relaxed mb-6 font-light">Membantu startup Fintech seri-B
                        dalam mengoptimalkan biaya operasional sebesar 30% dan meluncurkan layanan di 3 negara baru
                        dalam 12 bulan.</p>
                    <div class="flex items-center gap-6">
                        <div>
                            <span class="block text-xl font-bold text-navy">30%</span>
                            <span class="text-[9px] font-bold text-slate-400 uppercase tracking-widest">Cost
                                Reduction</span>
                        </div>
                        <div class="w-px h-8 bg-slate-200"></div>
                        <div>
                            <span class="block text-xl font-bold text-navy">12 Mo.</span>
                            <span class="text-[9px] font-bold text-slate-400 uppercase tracking-widest">Execution
                                Time</span>
                        </div>
                    </div>
                </div>

                <div class="group cursor-pointer">
                    <div class="h-80 overflow-hidden mb-8 relative">
                        <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?q=80&w=800&auto=format&fit=crop"
                            class="w-full h-full object-cover group-hover:scale-105 transition duration-700">
                        <div
                            class="absolute bottom-6 left-6 bg-navy text-white px-4 py-2 text-[10px] font-bold uppercase tracking-widest">
                            Corporate Turnaround</div>
                    </div>
                    <h4 class="text-2xl font-serif font-bold mb-4 group-hover:text-gold transition">Digital
                        Transformation & Turnaround Perusahaan Manufaktur</h4>
                    <p class="text-slate-500 text-sm leading-relaxed mb-6 font-light">Implementasi sistem ERP kustom
                        dan manajemen perubahan untuk perusahaan manufaktur tradisional, mengembalikan profitabilitas
                        setelah 3 tahun defisit.</p>
                    <div class="flex items-center gap-6">
                        <div>
                            <span class="block text-xl font-bold text-navy">2.5X</span>
                            <span class="text-[9px] font-bold text-slate-400 uppercase tracking-widest">Efficiency
                                Increase</span>
                        </div>
                        <div class="w-px h-8 bg-slate-200"></div>
                        <div>
                            <span class="block text-xl font-bold text-navy">ROI 18%</span>
                            <span class="text-[9px] font-bold text-slate-400 uppercase tracking-widest">After 1st
                                Year</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="insights" class="py-24 bg-slate-50 border-y border-slate-100">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-sm font-bold text-gold uppercase tracking-[0.5em] mb-4">Strategic Insights</h2>
                <h3 class="text-4xl md:text-5xl font-serif text-slate-900 leading-tight">Thinking Ahead.</h3>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <article
                    class="bg-white border border-slate-200 p-8 hover:shadow-2xl transition duration-500 flex flex-col justify-between">
                    <div>
                        <span class="text-[9px] font-bold text-gold uppercase tracking-widest mb-4 block">Economy • 5
                            Min Read</span>
                        <h4 class="text-xl font-bold mb-4 leading-snug">Menghadapi Resesi 2026: Strategi Likuiditas
                            untuk Perusahaan Menengah.</h4>
                        <p class="text-xs text-slate-500 font-light leading-relaxed mb-8">Bagaimana menjaga arus kas
                            tetap stabil di tengah ketidakpastian pasar global melalui efisiensi inventaris...</p>
                    </div>
                    <a href="#"
                        class="text-[10px] font-bold text-navy uppercase tracking-widest flex items-center gap-3 group">
                        Read Analysis <span class="w-8 h-px bg-gold group-hover:w-12 transition-all"></span>
                    </a>
                </article>

                <article
                    class="bg-white border border-slate-200 p-8 hover:shadow-2xl transition duration-500 flex flex-col justify-between">
                    <div>
                        <span class="text-[9px] font-bold text-gold uppercase tracking-widest mb-4 block">Tech • 7 Min
                            Read</span>
                        <h4 class="text-xl font-bold mb-4 leading-snug">Implementasi AI dalam Pengambilan Keputusan
                            Tingkat Direksi.</h4>
                        <p class="text-xs text-slate-500 font-light leading-relaxed mb-8">Mengapa data-driven
                            leadership tidak lagi bersifat opsional di era otomatisasi kecerdasan buatan...</p>
                    </div>
                    <a href="#"
                        class="text-[10px] font-bold text-navy uppercase tracking-widest flex items-center gap-3 group">
                        Read Analysis <span class="w-8 h-px bg-gold group-hover:w-12 transition-all"></span>
                    </a>
                </article>

                <article
                    class="bg-white border border-slate-200 p-8 hover:shadow-2xl transition duration-500 flex flex-col justify-between">
                    <div>
                        <span class="text-[9px] font-bold text-gold uppercase tracking-widest mb-4 block">M&A • 6 Min
                            Read</span>
                        <h4 class="text-xl font-bold mb-4 leading-snug">Kultur Perusahaan: Faktor Terpenting dalam
                            Keberhasilan Merger.</h4>
                        <p class="text-xs text-slate-500 font-light leading-relaxed mb-8">Menganalisis mengapa banyak
                            penggabungan perusahaan gagal karena mengabaikan integrasi budaya kerja...</p>
                    </div>
                    <a href="#"
                        class="text-[10px] font-bold text-navy uppercase tracking-widest flex items-center gap-3 group">
                        Read Analysis <span class="w-8 h-px bg-gold group-hover:w-12 transition-all"></span>
                    </a>
                </article>
            </div>
        </div>
    </section>

    <footer id="contact" class="bg-navy text-white pt-24 lg:pt-32 pb-12">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid lg:grid-cols-2 gap-20 mb-24">
                <div>
                    <h2 class="text-4xl md:text-6xl font-serif mb-8 leading-none">Let's Discuss <br> Your <span
                            class="italic text-gold">Next Move.</span></h2>
                    <p class="text-slate-400 text-lg font-light mb-12 max-w-md">Tersedia untuk penugasan konsultasi
                        jangka panjang, sesi strategi privat, atau pembicara dalam konferensi bisnis internasional.</p>

                    <div class="space-y-8">
                        <div class="flex items-center gap-6">
                            <div
                                class="w-12 h-12 rounded-full border border-white/10 flex items-center justify-center text-gold">
                                <i class="fa-solid fa-envelope"></i></div>
                            <div>
                                <span
                                    class="text-[9px] font-bold text-slate-500 uppercase tracking-widest block mb-1">Direct
                                    Communication</span>
                                <p class="text-lg">office@pratamawijaya.com</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-6">
                            <div
                                class="w-12 h-12 rounded-full border border-white/10 flex items-center justify-center text-gold">
                                <i class="fa-solid fa-phone"></i></div>
                            <div>
                                <span
                                    class="text-[9px] font-bold text-slate-500 uppercase tracking-widest block mb-1">Private
                                    Line</span>
                                <p class="text-lg">+62 811 2233 4455</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white/5 p-10 lg:p-16 border border-white/10 shadow-2xl">
                    <form class="space-y-6">
                        <div class="grid grid-cols-2 gap-6">
                            <div class="space-y-2">
                                <label class="text-[9px] font-bold uppercase tracking-widest text-slate-400">Full
                                    Name</label>
                                <input type="text"
                                    class="w-full bg-transparent border-b border-white/20 focus:border-gold outline-none py-2 text-sm">
                            </div>
                            <div class="space-y-2">
                                <label
                                    class="text-[9px] font-bold uppercase tracking-widest text-slate-400">Organization</label>
                                <input type="text"
                                    class="w-full bg-transparent border-b border-white/20 focus:border-gold outline-none py-2 text-sm">
                            </div>
                        </div>
                        <div class="space-y-2">
                            <label class="text-[9px] font-bold uppercase tracking-widest text-slate-400">Strategic
                                Needs</label>
                            <select
                                class="w-full bg-transparent border-b border-white/20 focus:border-gold outline-none py-2 text-sm text-slate-400">
                                <option>Business Turnaround</option>
                                <option>Market Expansion</option>
                                <option>Digital Transformation</option>
                                <option>M&A Advisory</option>
                            </select>
                        </div>
                        <div class="space-y-2">
                            <label
                                class="text-[9px] font-bold uppercase tracking-widest text-slate-400">Message</label>
                            <textarea rows="4"
                                class="w-full bg-transparent border-b border-white/20 focus:border-gold outline-none py-2 text-sm"></textarea>
                        </div>
                        <button
                            class="w-full bg-gold text-navy font-bold py-4 uppercase tracking-[0.3em] text-[10px] hover:bg-white transition-colors">Request
                            Consultation</button>
                    </form>
                </div>
            </div>

            <div class="pt-12 border-t border-white/5 flex flex-col md:flex-row justify-between items-center gap-8">
                <div class="flex items-center gap-4">
                    <span class="text-xl font-serif font-bold text-white">PW</span>
                    <span class="text-[9px] font-bold text-slate-500 uppercase tracking-widest">© 2026 Pratama Wijaya
                        Studio. <br> Powered by Elijabah Group.</span>
                </div>
                <div class="flex gap-8 text-[10px] font-bold text-slate-500 uppercase tracking-widest">
                    <a href="#" class="hover:text-white">LinkedIn</a>
                    <a href="#" class="hover:text-white">Bloomberg</a>
                    <a href="#" class="hover:text-white">Financial Times</a>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>
