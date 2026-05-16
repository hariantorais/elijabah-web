<section id="harga" class="py-24 bg-slate-900 text-white relative overflow-hidden">
    <!-- Abstract Tech Backgrounds -->
    <div
        class="absolute top-0 right-0 w-[400px] h-[400px] bg-brand-500/20 rounded-full mix-blend-screen filter blur-3xl opacity-50">
    </div>
    <div
        class="absolute bottom-0 left-0 w-[400px] h-[400px] bg-cyan-500/20 rounded-full mix-blend-screen filter blur-3xl opacity-50">
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-16">
            <span class="text-brand-400 font-bold tracking-widest text-xs uppercase mb-3 block">Mulai Go
                Digital</span>
            <h2 class="text-3xl md:text-4xl font-extrabold text-white mb-4">Bangun Website Profesional Anda
                Sekarang Juga</h2>
            <p class="text-slate-400 max-w-2xl mx-auto font-medium">Semua paket sudah termasuk <strong>Gratis
                    Domain (.com)</strong>. Bayar sekali, usaha langsung tampil di Google.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-center max-w-6xl mx-auto">
            @foreach ($packages as $package)
                <div
                    class="relative transition duration-300 rounded-3xl p-8 
            {{ $package->is_popular
                ? 'bg-gradient-to-br from-brand-600 to-brand-800 border-2 border-brand-400 shadow-2xl shadow-brand-500/20 transform md:-translate-y-6 overflow-hidden'
                : 'bg-slate-800/50 backdrop-blur-sm border border-slate-700 hover:border-slate-500' }}">

                    @if ($package->is_popular)
                        <div
                            class="absolute top-0 right-0 bg-amber-400 text-amber-950 text-[10px] font-black uppercase px-4 py-1 rounded-bl-xl shadow-md">
                            Pilihan Terbaik
                        </div>
                    @endif

                    <h3 class="text-xl font-bold mb-2 {{ $package->is_popular ? 'text-white' : 'text-slate-200' }}">
                        {{ $package->name }}
                    </h3>

                    <p class="text-xs mb-6 {{ $package->is_popular ? 'text-brand-100' : 'text-slate-400' }}">
                        {{ $package->description }}
                    </p>

                    <div class="mb-8">
                        @if ($package->original_price)
                            <div class="flex items-center gap-2 mb-1">
                                <span class="text-brand-300/80 line-through text-sm decoration-amber-400/60">
                                    Rp {{ number_format($package->original_price / 1000000, 1, ',', '.') }} Jt
                                </span>
                                <span
                                    class="bg-amber-400/20 text-amber-300 text-[9px] font-bold px-2 py-0.5 rounded-full border border-amber-400/30">
                                    {{ $package->discount_label }}
                                </span>
                            </div>
                        @endif
                        <div class="flex items-baseline">
                            <span class="text-4xl font-extrabold text-white">
                                Rp {{ number_format($package->price / 1000000, 1, ',', '.') }}
                            </span>
                            <span class="text-lg ml-1 {{ $package->is_popular ? 'text-brand-100' : 'text-slate-400' }}">
                                Jt</span>
                        </div>
                    </div>

                    <ul
                        class="space-y-3 mb-8 text-sm {{ $package->is_popular ? 'text-white font-medium' : 'text-slate-300' }}">
                        @foreach ($package->features as $feature)
                            <li class="flex items-center gap-3">
                                <i
                                    class="fa-solid {{ $package->is_popular ? 'fa-circle-check text-amber-300' : 'fa-check text-emerald-400' }}"></i>
                                {{ $feature }}
                            </li>
                        @endforeach
                    </ul>

                    <a href="{{ $package->cta_link ?? 'https://wa.me/' . settings('contact_phone') . '?text=Halo, saya mau pesan ' . $package->name }}"
                        class="block w-full text-center py-3 rounded-xl font-bold transition-all duration-200 active:scale-95
                {{ $package->is_popular
                    ? 'bg-white text-brand-700 shadow-xl uppercase text-[10px] tracking-widest hover:scale-[1.02]'
                    : 'bg-slate-700 text-white hover:bg-brand-600' }}">
                        {{ $package->cta_text }}
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</section>
