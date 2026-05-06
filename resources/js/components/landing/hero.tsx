import { motion } from 'framer-motion';
import { ArrowRight, CheckCircle } from 'lucide-react';

export default function Hero() {
    return (
        <section className="relative flex min-h-screen items-center overflow-hidden px-6">
            {/* Background Decoration - Dengan tambahan Motif Grid */}
            <div className="bg-linier-to-l absolute top-0 right-0 -z-10 h-full w-2/3 translate-x-32 skew-x-12 rounded-l-[200px] from-emerald-50/80 to-transparent">
                {/* MOTIF GRID (Menempel di dalam div dekorasi) */}
                <div
                    className="absolute inset-0 opacity-[0.15]"
                    style={{
                        backgroundImage: `url("data:image/svg+xml,%3Csvg width='40' height='40' viewBox='0 0 40 40' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='%23006442' fill-opacity='0.2' fill-rule='evenodd'%3E%3Cpath d='M0 40L40 40V39L1 39V0H0v40z'/%3E%3C/g%3E%3C/svg%3E")`,
                        maskImage:
                            'linear-gradient(to left, white, transparent)', // Agar motif memudar searah gradient
                    }}
                ></div>
            </div>

            {/* Floating Glow - Menambah kesan modern */}
            <div className="absolute top-1/4 right-[10%] -z-10 h-64 w-64 animate-pulse rounded-full bg-[#006442]/5 blur-3xl"></div>

            <div className="mx-auto grid max-w-7xl items-center gap-16 lg:grid-cols-2">
                <motion.div
                    initial={{ opacity: 0, x: -50 }}
                    animate={{ opacity: 1, x: 0 }}
                    transition={{ duration: 1, ease: 'circOut' }}
                >
                    {/* Headline - Perbaikan Spacing & Typography */}
                    <h1 className="mb-8 text-6xl leading-[0.85] font-black tracking-tighter italic md:text-[3.8rem]">
                        Bangun{' '}
                        <span className="text-[#006442]">Kepercayaan</span>{' '}
                        <br />
                        Digital{' '}
                        <span className="relative inline-block">
                            Bisnis
                            {/* Efek Garis Bawah yang muncul saat load */}
                            <motion.span
                                initial={{ width: 0 }}
                                whileInView={{ width: '100%' }}
                                transition={{ delay: 0.5, duration: 0.8 }}
                                className="absolute bottom-4 left-0 -z-10 h-4 bg-emerald-100"
                            ></motion.span>
                        </span>{' '}
                        & Lembaga
                    </h1>

                    {/* Sub-headline - Spacing diperlebar agar tidak sesak */}
                    <p className="md:text-1xl mb-12 max-w-lg text-xl leading-relaxed font-medium text-slate-600">
                        Kami membantu lembaga pendidikan, travel umroh, dan UMKM
                        tampil{' '}
                        <span className="font-bold text-slate-900 underline decoration-[#006442] decoration-2 underline-offset-4">
                            lebih terpercaya
                        </span>{' '}
                        lewat website berkualitas yang dirancang khusus untuk
                        hasil nyata.
                    </p>

                    {/* CTA Group */}
                    <div className="flex flex-col gap-6 sm:flex-row sm:items-center">
                        <motion.button
                            whileHover={{
                                scale: 1.05,
                                boxShadow: '0 20px 40px rgba(0,100,66,0.2)',
                            }}
                            whileTap={{ scale: 0.95 }}
                            className="group flex items-center justify-center gap-4 rounded-4xl bg-[#006442] px-12 py-4 text-xl font-black text-white transition-all"
                        >
                            Konsultasi Sekarang{' '}
                            <ArrowRight className="h-6 w-6 transition-transform group-hover:translate-x-2" />
                        </motion.button>
                    </div>
                </motion.div>

                {/* Right Side Image - Ditambah efek floating & badge success */}
                <motion.div
                    initial={{ scale: 0.8, opacity: 0, rotate: 5 }}
                    animate={{ scale: 1, opacity: 1, rotate: 2 }}
                    transition={{ duration: 1.2, delay: 0.2 }}
                    className="relative hidden lg:block"
                >
                    <div className="absolute -inset-10 animate-pulse rounded-full bg-emerald-100/40 opacity-50 blur-[120px]"></div>

                    <div className="group relative">
                        {/* Glow Effect on Hover */}
                        <div className="bg-linier-to-r absolute -inset-2 rounded-[3.5rem] from-[#006442] to-emerald-400 opacity-20 blur transition duration-1000 group-hover:opacity-40"></div>

                        <img
                            src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=2426"
                            className="relative rounded-[3.5rem] border-4 border-white shadow-2xl transition-all duration-700 group-hover:scale-[1.02] group-hover:rotate-0"
                            alt="Strategic Dashboard"
                        />

                        {/* Success Badge - Menambah Trust */}
                        <motion.div
                            animate={{ y: [0, 15, 0] }}
                            transition={{
                                duration: 4,
                                repeat: Infinity,
                                ease: 'easeInOut',
                            }}
                            className="absolute -bottom-10 -left-10 z-20 rounded-3xl border border-slate-100 bg-white p-6 shadow-2xl"
                        >
                            <div className="flex items-center gap-4">
                                <div className="flex h-12 w-12 items-center justify-center rounded-2xl bg-emerald-50 text-[#006442]">
                                    <CheckCircle className="h-7 w-7" />
                                </div>
                                <div>
                                    <p className="mb-1 text-[10px] leading-none font-black tracking-widest text-slate-400 uppercase">
                                        Pengerjaan
                                    </p>
                                    <p className="text-lg leading-none font-black tracking-tight text-slate-900 italic">
                                        Cepat & Profesional
                                    </p>
                                </div>
                            </div>
                        </motion.div>
                    </div>
                </motion.div>
            </div>
        </section>
    );
}
