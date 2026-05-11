<section class="py-24 bg-white relative">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Main CTA Card -->
        <div class="relative rounded-[3rem] overflow-hidden bg-slate-900 text-white shadow-2xl shadow-slate-900/20">

            <!-- Efek Latar Belakang Kaca -->
            <div
                class="absolute top-0 right-0 w-[30rem] h-[30rem] bg-brand-500/20 rounded-full blur-[100px] pointer-events-none transform translate-x-1/3 -translate-y-1/3">
            </div>
            <div
                class="absolute bottom-0 left-0 w-[20rem] h-[20rem] bg-cyan-500/10 rounded-full blur-[80px] pointer-events-none transform -translate-x-1/3 translate-y-1/3">
            </div>

            <div
                class="relative z-10 p-10 md:p-16 lg:p-20 flex flex-col lg:flex-row items-center justify-between gap-12">

                <!-- Kiri: Konten Teks Ajakan -->
                <div class="lg:w-7/12 text-center lg:text-left">

                    <!-- Label Status -->
                    <div
                        class="inline-flex items-center gap-3 px-4 py-2 rounded-full bg-slate-800 border border-slate-700 text-brand-400 text-xs font-bold uppercase tracking-widest mb-8 shadow-inner">
                        <span class="relative flex h-2.5 w-2.5">
                            <span
                                class="animate-ping absolute inline-flex h-full w-full rounded-full bg-brand-400 opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-2.5 w-2.5 bg-brand-500"></span>
                        </span>
                        Let's Build Together
                    </div>

                    <h2 class="text-3xl md:text-5xl font-black mb-6 leading-tight">
                        Siap Membangun Website & <br class="hidden lg:block">
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-400 to-cyan-400">Sistem
                            Bisnis Anda?</span>
                    </h2>

                    <p class="text-slate-400 text-lg mb-0 leading-relaxed max-w-2xl mx-auto lg:mx-0">
                        Jangan biarkan kompetitor mendahului Anda. Jadikan WebElijabah sebagai mitra teknologi Anda
                        untuk menciptakan infrastruktur digital yang profesional, cepat, dan terukur.
                    </p>
                </div>

                <!-- Kanan: Tombol Aksi (Dua Pilihan) -->
                <div class="lg:w-5/12 flex flex-col items-center lg:items-end w-full">

                    <div class="w-full flex flex-col gap-4">
                        <!-- Tombol Primary (Ke Pricing) -->
                        <a href="#harga"
                            class="w-full flex items-center justify-center gap-3 bg-brand-600 text-white px-8 py-4 rounded-2xl font-bold text-lg hover:bg-brand-500 hover:shadow-[0_0_20px_rgba(var(--brand-500),0.4)] transition-all duration-300 group">
                            Lihat Pilihan Paket
                            <i class="fa-solid fa-arrow-right group-hover:translate-x-1 transition-transform"></i>
                        </a>

                        <!-- Tombol Secondary (Ke WhatsApp) -->
                        <a href="https://wa.me/{{ settings('contact_phone') }}?text=Halo,%20saya%20tertarik%20menggunakan%20jasa%20Elijabah%20Digital,%20ingin%20konsultasi%20dulu."
                            class="w-full flex items-center justify-center gap-3 bg-slate-800 border border-slate-700 text-white px-8 py-4 rounded-2xl font-bold text-lg hover:bg-slate-700 hover:border-slate-500 transition-all duration-300 group">
                            <i
                                class="fa-brands fa-whatsapp text-xl text-emerald-400 group-hover:scale-110 transition-transform"></i>
                            Tanya & Konsultasi Gratis
                        </a>
                    </div>

                    <!-- Trust Signal -->
                    <p
                        class="text-slate-400 text-sm flex items-center justify-center lg:justify-start gap-2 font-medium mt-6">
                        <i class="fa-solid fa-bolt text-amber-400"></i> Proses Cepat & Transparan
                    </p>

                </div>

            </div>
        </div>
    </div>
</section>
