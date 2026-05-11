 <section id="hero" class="relative pt-32 pb-20 lg:pt-40 lg:pb-32 overflow-hidden">
     <!-- Abstract Tech Backgrounds -->
     <div
         class="absolute top-20 right-0 w-[500px] h-[500px] bg-cyan-400/20 rounded-full mix-blend-multiply filter blur-3xl opacity-70 -z-10 animate-float">
     </div>
     <div class="absolute bottom-0 left-10 w-[600px] h-[600px] bg-brand-400/20 rounded-full mix-blend-multiply filter blur-3xl opacity-70 -z-10"
         style="animation: float 8s ease-in-out infinite;"></div>

     <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
         <div class="flex flex-col lg:flex-row items-center gap-12">

             <!-- Text Content -->
             <div class="w-full lg:w-1/2 text-center lg:text-left">
                 <div
                     class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-brand-50 text-brand-600 font-bold text-xs uppercase tracking-widest mb-6 border border-brand-100 shadow-sm">
                     <i class="fa-solid fa-rocket text-brand-500"></i> Tingkatkan Bisnis Anda Ke Level Digital
                 </div>
                 <h1
                     class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-slate-900 leading-[1.1] mb-6 tracking-tight">
                     Buat Website Impian <br>
                     Lebih Cepat, <span class="text-transparent bg-clip-text bg-tech-gradient">Lebih Cerdas.</span>
                 </h1>
                 <p class="text-lg text-slate-600 mb-8 max-w-lg mx-auto lg:mx-0 font-medium leading-relaxed">
                     Kami membantu Bisnis Owner & UMKM membangun identitas digital yang profesional, responsif, dan
                     siap mendatangkan lebih banyak klien.
                 </p>
                 <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                     <a href="#harga"
                         class="bg-tech-gradient text-white px-8 py-3.5 rounded-full font-bold hover:shadow-lg hover:shadow-brand-500/40 transition duration-300 text-center flex items-center justify-center gap-2">
                         Lihat Harga <i class="fa-solid fa-arrow-right"></i>
                     </a>
                     <a href="https://wa.me/{{ settings('contact_phone') }}?text=Halo, saya mau tanya-tanya tentang jasa pembuatan website"
                         class="bg-white border-2 border-slate-200 text-slate-700 px-8 py-3.5 rounded-full font-bold hover:border-brand-500 hover:text-brand-600 transition duration-300 text-center">
                         Konsultasi Gratis <i class="fa-brands fa-fw fa-whatsapp"></i>
                     </a>
                 </div>

                 <!-- Tech Stack Icons -->
                 <div class="mt-10 pt-8 border-t border-slate-200">
                     <!-- Judul dibuat terpisah dari container icon agar tidak merusak spacing -->
                     <p
                         class="text-[10px] font-extrabold uppercase tracking-[0.2em] text-slate-500 text-center lg:text-left mb-6">
                         Dibangun dengan teknologi modern
                     </p>

                     <!-- Container Ikon -->
                     <div
                         class="flex flex-wrap justify-center lg:justify-start items-center gap-x-8 gap-y-6 text-slate-400 text-3xl">


                         <!-- React JS -->
                         <i class="fa-brands fa-react hover:text-[#61DAFB] transition-all duration-300 cursor-pointer"
                             title="React JS"></i>

                         <!-- Node.js -->
                         <i class="fa-brands fa-node-js hover:text-[#339933] transition-all duration-300 cursor-pointer"
                             title="Node.js"></i>

                         <!-- Express -->
                         <i class="fa-solid fa-server hover:text-slate-600 transition-all duration-300 cursor-pointer"
                             title="Express.js"></i>

                         <!-- Laravel -->
                         <i class="fa-brands fa-laravel hover:text-[#FF2D20] transition-all duration-300 cursor-pointer"
                             title="Laravel"></i>

                         <!-- MongoDB -->
                         <i class="fa-solid fa-leaf hover:text-[#47A248] transition-all duration-300 cursor-pointer"
                             title="MongoDB"></i>

                         <!-- MySQL -->
                         <i class="fa-solid fa-database hover:text-[#4479A1] transition-all duration-300 cursor-pointer"
                             title="MySQL"></i>

                         <!-- Figma -->
                         <i class="fa-brands fa-figma hover:text-[#F24E1E] transition-all duration-300 cursor-pointer"
                             title="Figma"></i>
                     </div>
                 </div>
             </div>

             <!-- Image Content (Dashboard/Mockup Placeholder) -->
             <div class="w-full lg:w-1/2 relative">
                 <div
                     class="relative bg-white rounded-2xl shadow-2xl border border-slate-100 p-2 transform rotate-1 hover:rotate-0 transition duration-500">
                     <!-- Mac OS style window dots -->
                     <div class="flex gap-2 px-3 py-2 border-b border-slate-100 mb-2 bg-slate-50 rounded-t-xl">
                         <div class="w-3 h-3 rounded-full bg-red-400"></div>
                         <div class="w-3 h-3 rounded-full bg-amber-400"></div>
                         <div class="w-3 h-3 rounded-full bg-emerald-400"></div>
                     </div>
                     <img src="{{ asset('images/web-mockup.png') }}" alt="Web Mockup" class="w-full h-auto rounded-b-xl"
                         style="min-height: 300px; background: #e2e8f0;">

                     <!-- Floating Stats -->
                     <div class="absolute -left-6 top-1/3 glass p-4 rounded-xl shadow-xl flex items-center gap-3 animate-float"
                         style="animation-delay: 1s;">
                         <div
                             class="w-10 h-10 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center text-xl">
                             <i class="fa-solid fa-chart-line"></i>
                         </div>
                         <div>
                             <p class="text-xs text-slate-500 font-bold uppercase">SEO Score</p>
                             <p class="font-extrabold text-slate-900">99/100</p>
                         </div>
                     </div>
                     <div class="absolute -right-6 bottom-10 glass p-4 rounded-xl shadow-xl flex items-center gap-3 animate-float"
                         style="animation-delay: 2s;">
                         <div
                             class="w-10 h-10 rounded-full bg-brand-100 text-brand-600 flex items-center justify-center text-xl">
                             <i class="fa-solid fa-bolt"></i>
                         </div>
                         <div>
                             <p class="text-xs text-slate-500 font-bold uppercase">Load Time</p>
                             <p class="font-extrabold text-slate-900">&lt; 1.5 Detik</p>
                         </div>
                     </div>
                 </div>
             </div>

         </div>
     </div>
 </section>
