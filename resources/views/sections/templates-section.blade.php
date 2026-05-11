 <section id="template" x-data="{ activeFilter: 'umkm' }" class="py-24 bg-slate-50 border-t border-slate-100">
     <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

         <div class="text-center mb-16">
             <div class="inline-block bg-white border border-slate-200 rounded-full px-4 py-1.5 mb-4 shadow-sm">
                 <span class="text-slate-600 font-bold text-xs uppercase"><i
                         class="fa-solid fa-layer-group text-brand-500 mr-2"></i>[1] Paket Branding</span>
             </div>

             <h2 class="text-3xl md:text-4xl font-extrabold text-slate-900 mb-4">Pilih Wajah Digital Anda</h2>

             <p class="text-slate-500 max-w-2xl mx-auto font-medium text-lg leading-relaxed">
                 Anda tidak perlu memikirkan desain dari nol. Cukup pilih strukturnya, dan
                 biarkan tim kami menyulapnya menjadi identitas perusahaan Anda.
             </p>
         </div>
         <!-- Filter: Minimalis -->
         <div class="flex flex-wrap justify-center gap-2 mb-12">

             @foreach ($categories as $slug => $label)
                 <button @click="activeFilter = '{{ $slug }}'"
                     :class="activeFilter === '{{ $slug }}' ? 'bg-brand-600 text-white' :
                         'bg-white text-slate-600 hover:bg-slate-100'"
                     class="px-5 py-2 rounded-full text-xs font-bold transition border border-slate-200 shadow-sm">
                     {{ $label }}
                 </button>
             @endforeach
         </div>

         <!-- Grid: Mengikuti gaya Portfolio Anda -->
         <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
             @foreach ($templates as $item)
                 <div x-show="activeFilter === 'all' || activeFilter === '{{ $item['category_slug'] }}'"
                     x-transition:enter="transition ease-out duration-300"
                     x-transition:enter-start="opacity-0 transform scale-95"
                     x-transition:enter-end="opacity-100 transform scale-100"
                     class="group flex flex-col h-full bg-white rounded-3xl border border-slate-100 shadow-sm hover:shadow-2xl hover:shadow-brand-500/10 transition-all duration-500">

                     <!-- Frame Gambar -->
                     <div
                         class="relative w-full h-52 rounded-t-3xl overflow-hidden bg-slate-200 border border-slate-100">
                         <img src="{{ asset('images/templates/' . $item['route'] . '.png') }}" alt="{{ $item['name'] }}"
                             class="w-full h-full object-cover object-top group-hover:scale-110 transition duration-1000 ease-in-out"
                             onerror="this.src='https://placehold.co/600x800/cbd5e1/64748b?text={{ $item['uid'] }}'">

                         <!-- Overlay Gradient -->
                         <div
                             class="absolute inset-0 bg-gradient-to-t from-slate-900/40 via-transparent to-transparent opacity-60">
                         </div>

                         <!-- OVERLAY TOMBOL (HANYA DESKTOP - lg:flex) -->
                         <div
                             class="hidden lg:flex absolute inset-0 bg-slate-900/60 opacity-0 group-hover:opacity-100 backdrop-blur-[2px] transition-all duration-300 flex-col items-center justify-center gap-4">
                             <a href="{{ route($item['route']) }}"
                                 class="w-32 bg-white text-slate-900 py-2.5 rounded-xl font-bold text-sm text-center transform translate-y-4 group-hover:translate-y-0 transition-all duration-300 hover:bg-brand-500 hover:text-white">
                                 <i class="fa-solid fa-laptop-code mr-2"></i>Live Demo
                             </a>
                             <a href="https://wa.me/{{ settings('contact_phone') }}?text=Halo,+saya+ingin+menggunakan+template+{{ $item['uid'] }}"
                                 class="w-32 bg-brand-500 text-white py-2.5 rounded-xl font-bold text-sm text-center transform translate-y-4 group-hover:translate-y-0 transition-all duration-500 hover:bg-brand-600 shadow-lg">
                                 <i class="fa-brands fa-whatsapp mr-2"></i>Pilih
                             </a>
                         </div>

                         <!-- Palette Warna (Selalu terlihat, di mobile kita beri margin kanan agar tidak tabrakan) -->
                         <div
                             class="absolute bottom-4 left-4 flex gap-1.5 bg-white/20 backdrop-blur-md p-1.5 rounded-full z-10">
                             @foreach ($item['palette'] as $color)
                                 <div class="w-4 h-4 rounded-full border-2 border-white/50"
                                     style="background-color: {{ $color }}" title="{{ $color }}">
                                 </div>
                             @endforeach
                         </div>

                         <!-- Badge Kategori -->
                         <div class="absolute top-4 right-4 z-10">
                             <span
                                 class="bg-brand-500 text-white text-[9px] font-black px-3 py-1.5 rounded-lg uppercase tracking-widest shadow-lg">
                                 {{ $item['category_label'] }}
                             </span>
                         </div>
                     </div>

                     <!-- Bagian Info Content -->
                     <div class="flex flex-col flex-grow px-5 py-5">
                         <div class="flex justify-between items-start mb-2">
                             <h3
                                 class="text-xl font-extrabold text-slate-900 group-hover:text-brand-600 transition-colors duration-300 leading-tight">
                                 {{ $item['name'] }}
                             </h3>
                             <span class="text-[10px] font-bold text-slate-300 tracking-tighter">
                                 #{{ $item['uid'] }}
                             </span>
                         </div>

                         <p class="text-sm text-slate-500 leading-relaxed line-clamp-2 font-medium mb-5">
                             {{ $item['desc'] }}
                         </p>

                         <!-- TOMBOL KHUSUS MOBILE (HANYA MUNCUL DI BAWAH lg) -->
                         <div class="grid grid-cols-2 gap-3 mt-auto lg:hidden">
                             <a href="{{ route($item['route']) }}"
                                 class="flex items-center justify-center gap-2 bg-slate-100 text-slate-900 py-3 rounded-xl font-bold text-xs active:scale-95 transition-all">
                                 <i class="fa-solid fa-laptop-code text-brand-500"></i> Demo
                             </a>
                             <a href="https://wa.me/{{ settings('contact_phone') }}?text=Halo,+saya+ingin+menggunakan+template+{{ $item['uid'] }}"
                                 class="flex items-center justify-center gap-2 bg-brand-500 text-white py-3 rounded-xl font-bold text-xs shadow-md active:scale-95 transition-all">
                                 <i class="fa-brands fa-whatsapp"></i> Pilih
                             </a>
                         </div>
                     </div>
                 </div>
             @endforeach
         </div>

     </div>
 </section>
