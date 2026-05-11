  <section id="faq" class="py-24 bg-slate-900 relative overflow-hidden">
        <!-- Dekorasi Background -->
        <div
            class="absolute top-0 left-1/2 -translate-x-1/2 w-full h-full bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] from-brand-500/5 via-transparent to-transparent pointer-events-none">
        </div>

        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <!-- Header -->
            <div class="text-center mb-16">
                <span class="text-brand-400 font-bold tracking-widest text-xs uppercase mb-3 block">Pertanyaan
                    Umum</span>
                <h2 class="text-3xl md:text-4xl font-extrabold text-white mb-4">Sering Ditanyakan</h2>
                <p class="text-slate-400 font-medium">Masih bingung? Berikut jawaban untuk keraguan Anda.</p>
            </div>

            <!-- FAQ Accordion (Alpine.js) -->
            <div x-data="{ active: 1 }" class="space-y-4">

                <!-- Pertanyaan 1 -->
                <div
                    class="bg-slate-800/50 border border-slate-700 rounded-2xl overflow-hidden transition-all duration-300">
                    <button @click="active = active === 1 ? null : 1"
                        class="w-full flex items-center justify-between p-6 text-left focus:outline-none">
                        <span class="text-white font-bold">Saya gaptek, apakah dibantu sampai websitenya jadi?</span>
                        <i class="fa-solid fa-chevron-down text-brand-400 transition-transform duration-300"
                            :class="active === 1 ? 'rotate-180' : ''"></i>
                    </button>
                    <div x-show="active === 1" x-collapse>
                        <div class="px-6 pb-6 text-slate-400 text-sm leading-relaxed border-t border-slate-700/50 pt-4">
                            Tentu saja! Anda cukup kirimkan foto produk dan nama usaha melalui WhatsApp. Kami yang
                            kerjakan semuanya sampai website aktif dan siap jualan.
                        </div>
                    </div>
                </div>

                <!-- Pertanyaan 2 -->
                <div
                    class="bg-slate-800/50 border border-slate-700 rounded-2xl overflow-hidden transition-all duration-300">
                    <button @click="active = active === 2 ? null : 2"
                        class="w-full flex items-center justify-between p-6 text-left focus:outline-none">
                        <span class="text-white font-bold">Apakah ada biaya bulanan yang harus dibayar?</span>
                        <i class="fa-solid fa-chevron-down text-brand-400 transition-transform duration-300"
                            :class="active === 2 ? 'rotate-180' : ''"></i>
                    </button>
                    <div x-show="active === 2" x-collapse>
                        <div class="px-6 pb-6 text-slate-400 text-sm leading-relaxed border-t border-slate-700/50 pt-4">
                            <strong>Tidak ada biaya bulanan.</strong> Anda cukup bayar sekali di depan. Biaya
                            perpanjangan (Domain & Hosting) baru dibayar 1 tahun kemudian dengan harga yang sangat
                            terjangkau.
                        </div>
                    </div>
                </div>

                <!-- Pertanyaan 3 -->
                <div
                    class="bg-slate-800/50 border border-slate-700 rounded-2xl overflow-hidden transition-all duration-300">
                    <button @click="active = active === 3 ? null : 3"
                        class="w-full flex items-center justify-between p-6 text-left focus:outline-none">
                        <span class="text-white font-bold">Berapa lama proses pengerjaannya?</span>
                        <i class="fa-solid fa-chevron-down text-brand-400 transition-transform duration-300"
                            :class="active === 3 ? 'rotate-180' : ''"></i>
                    </button>
                    <div x-show="active === 3" x-collapse>
                        <div class="px-6 pb-6 text-slate-400 text-sm leading-relaxed border-t border-slate-700/50 pt-4">
                            Untuk Paket Hemat, website Anda bisa online dalam <strong>3-5 hari kerja</strong> setelah
                            semua data kami terima.
                        </div>
                    </div>
                </div>

                <!-- Pertanyaan 4 -->
                <div
                    class="bg-slate-800/50 border border-slate-700 rounded-2xl overflow-hidden transition-all duration-300">
                    <button @click="active = active === 4 ? null : 4"
                        class="w-full flex items-center justify-between p-6 text-left focus:outline-none">
                        <span class="text-white font-bold">Bisa ganti-ganti tulisan atau foto sendiri nantinya?</span>
                        <i class="fa-solid fa-chevron-down text-brand-400 transition-transform duration-300"
                            :class="active === 4 ? 'rotate-180' : ''"></i>
                    </button>
                    <div x-show="active === 4" x-collapse>
                        <div
                            class="px-6 pb-6 text-slate-400 text-sm leading-relaxed border-t border-slate-700/50 pt-4">
                            Bisa! Kami menggunakan sistem yang mudah. Kami juga akan memberikan panduan singkat agar
                            Anda bisa mengubah harga atau foto produk secara mandiri.
                        </div>
                    </div>
                </div>

                <div
                    class="bg-slate-800/50 border border-slate-700 rounded-2xl overflow-hidden transition-all duration-300">
                    <button @click="active = active === 5 ? null : 5"
                        class="w-full flex items-center justify-between p-6 text-left focus:outline-none">
                        <span class="text-white font-bold">Apakah website saya bisa muncul di pencarian Google?</span>
                        <i class="fa-solid fa-chevron-down text-brand-400 transition-transform duration-300"
                            :class="active === 5 ? 'rotate-180' : ''"></i>
                    </button>
                    <div x-show="active === 5" x-collapse>
                        <div
                            class="px-6 pb-6 text-slate-400 text-sm leading-relaxed border-t border-slate-700/50 pt-4">
                            <strong>Pasti.</strong> Kami membantu mendaftarkan website Anda ke Google (Search Console)
                            agar usaha Anda bisa ditemukan saat orang mencari nama usaha Anda.
                        </div>
                    </div>
                </div>

                <!-- Pertanyaan 6 -->
                <div
                    class="bg-slate-800/50 border border-slate-700 rounded-2xl overflow-hidden transition-all duration-300">
                    <button @click="active = active === 6 ? null : 6"
                        class="w-full flex items-center justify-between p-6 text-left focus:outline-none">
                        <span class="text-white font-bold">Bagaimana sistem pembayarannya? Apakah aman?</span>
                        <i class="fa-solid fa-chevron-down text-brand-400 transition-transform duration-300"
                            :class="active === 6 ? 'rotate-180' : ''"></i>
                    </button>
                    <div x-show="active === 6" x-collapse>
                        <div
                            class="px-6 pb-6 text-slate-400 text-sm leading-relaxed border-t border-slate-700/50 pt-4">
                            Sangat aman. Sistem kami menggunakan <strong>DP (Uang Muka) 50%</strong> di awal sebagai
                            tanda jadi pengerjaan, dan pelunasan dilakukan setelah website selesai dan Anda cek
                            kualitasnya.
                        </div>
                    </div>
                </div>

                <!-- Pertanyaan 7 -->
                <div
                    class="bg-slate-800/50 border border-slate-700 rounded-2xl overflow-hidden transition-all duration-300">
                    <button @click="active = active === 7 ? null : 7"
                        class="w-full flex items-center justify-between p-6 text-left focus:outline-none">
                        <span class="text-white font-bold">Kalau domain/hosting habis tahun depan, gimana?</span>
                        <i class="fa-solid fa-chevron-down text-brand-400 transition-transform duration-300"
                            :class="active === 7 ? 'rotate-180' : ''"></i>
                    </button>
                    <div x-show="active === 7" x-collapse>
                        <div
                            class="px-6 pb-6 text-slate-400 text-sm leading-relaxed border-t border-slate-700/50 pt-4">
                            Jangan khawatir. Kami akan <strong>mengingatkan Anda 1 bulan sebelum jatuh tempo</strong>
                            agar website tidak mati. Kami akan bantu proses perpanjangannya sehingga Anda tinggal terima
                            beres.
                        </div>
                    </div>
                </div>

                <!-- Pertanyaan 8 -->
                <div
                    class="bg-slate-800/50 border border-slate-700 rounded-2xl overflow-hidden transition-all duration-300">
                    <button @click="active = active === 8 ? null : 8"
                        class="w-full flex items-center justify-between p-6 text-left focus:outline-none">
                        <span class="text-white font-bold">Bisa pakai nama usaha saya sendiri untuk alamat
                            webnya?</span>
                        <i class="fa-solid fa-chevron-down text-brand-400 transition-transform duration-300"
                            :class="active === 8 ? 'rotate-180' : ''"></i>
                    </button>
                    <div x-show="active === 8" x-collapse>
                        <div
                            class="px-6 pb-6 text-slate-400 text-sm leading-relaxed border-t border-slate-700/50 pt-4">
                            Bisa banget! Selama nama domain tersebut belum dipakai orang lain, Anda bebas menentukan
                            alamat webnya (contoh: www.tokoecho.com atau www.jasaservis-batam.com).
                        </div>
                    </div>
                </div>

            </div>

            <!-- Footer FAQ -->
            <div class="text-center mt-12">
                <p class="text-slate-500 text-sm">Pertanyaan Anda belum terjawab?
                    <a href="https://wa.me/{{ settings('contact_phone') }}"
                        class="text-brand-400 font-bold hover:underline">Tanya langsung via WhatsApp</a>
                </p>
            </div>
        </div>
    </section>