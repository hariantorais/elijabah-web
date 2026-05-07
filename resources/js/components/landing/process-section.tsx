import { usePage } from '@inertiajs/react';
import { motion } from 'framer-motion';
import {
    MessageSquare,
    FileSearch,
    Terminal,
    Rocket,
    ArrowDown,
} from 'lucide-react';
import React from 'react';
import type { Contact } from '@/types/data';

export default function ProcessSection() {
    const { contacts } = usePage<{ contacts: Contact }>().props;
    const steps = [
        {
            title: 'Konsultasi Gratis',
            desc: 'Diskusi via WhatsApp untuk membedah kebutuhan lembaga atau bisnis Anda tanpa biaya sepeserpun.',
            icon: <MessageSquare className="h-7 w-7" />,
            accent: 'from-blue-500 to-cyan-400',
        },
        {
            title: 'Strategi & DP',
            desc: 'Penyusunan struktur sistem & penawaran. Pengerjaan dimulai secara profesional setelah DP 50%.',
            icon: <FileSearch className="h-7 w-7" />,
            accent: 'from-amber-500 to-orange-400',
        },
        {
            title: 'Development',
            desc: 'Proses development dimulai. Anda akan menerima link preview untuk melihat progres.',
            icon: <Terminal className="h-7 w-7" />,
            accent: 'from-emerald-600 to-teal-400',
        },
        {
            title: 'Review & Live',
            desc: 'Pengecekan akhir bersama. Setelah pelunasan, website langsung kami online-kan ke domain Anda.',
            icon: <Rocket className="h-7 w-7" />,
            accent: 'from-[#006442] to-emerald-400',
        },
    ];

    return (
        <section
            id="proses"
            className="relative overflow-hidden bg-white px-6 py-15 lg:py-40"
        >
            {/* --- MODERN BACKGROUND ELEMENTS --- */}
            <div className="absolute inset-0 -z-10 overflow-hidden">
                <div className="absolute top-[10%] left-[10%] h-[40%] w-[40%] rounded-full bg-emerald-50/60 blur-[120px]" />
                <div className="absolute top-[20%] right-[10%] h-[50%] w-[40%] rounded-full bg-blue-50/50 blur-[120px]" />
            </div>

            {/* Grid Pattern */}
            <div className="absolute inset-0 -z-10 [mask-image:radial-gradient(ellipse_at_center,white,transparent)] opacity-[0.4]">
                <svg
                    className="h-full w-full"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <defs>
                        <pattern
                            id="grid-pattern"
                            width="40"
                            height="40"
                            patternUnits="userSpaceOnUse"
                        >
                            <path
                                d="M 40 0 L 0 0 0 40"
                                fill="none"
                                stroke="#e2e8f0"
                                strokeWidth="0.5"
                            />
                        </pattern>
                    </defs>
                    <rect
                        width="100%"
                        height="100%"
                        fill="url(#grid-pattern)"
                    />
                </svg>
            </div>

            <div className="relative mx-auto max-w-7xl">
                {/* Header dengan Animasi Reveal */}
                <motion.div
                    initial={{ opacity: 0, y: 30 }}
                    whileInView={{ opacity: 1, y: 0 }}
                    viewport={{ once: true }}
                    className="mb-24 text-center"
                >
                    <div className="mb-6 inline-flex items-center gap-2 rounded-full border border-emerald-100 bg-white px-4 py-2 text-[10px] font-black tracking-[0.3em] text-[#006442] uppercase shadow-sm">
                        Cara Pemesanan
                    </div>
                    <h3 className="text-4xl leading-none font-black tracking-tighter italic md:text-6xl">
                        Dari Ide{' '}
                        <span className="text-[#006442]">
                            Hingga Peluncuran.
                        </span>
                    </h3>
                </motion.div>

                {/* Container Steps */}
                <div className="relative grid gap-8 lg:grid-cols-4">
                    {/* Progress Line (Desktop) */}
                    <div className="absolute top-12 left-0 -z-10 hidden h-px w-full bg-slate-200 lg:block">
                        <motion.div
                            initial={{ width: 0 }}
                            whileInView={{ width: '100%' }}
                            transition={{ duration: 2, ease: 'easeInOut' }}
                            className="h-full bg-linear-to-r from-transparent via-[#006442] to-transparent"
                        />
                    </div>

                    {steps.map((step, i) => (
                        <motion.div
                            key={i}
                            initial={{ opacity: 0, x: i % 2 === 0 ? -20 : 20 }}
                            whileInView={{ opacity: 1, x: 0 }}
                            viewport={{ once: true, margin: '-100px' }}
                            transition={{ duration: 0.6, delay: i * 0.1 }}
                            className="group relative"
                        >
                            {/* Card UI dengan Glassmorphism */}
                            <div className="relative h-full overflow-hidden rounded-2xl border border-white bg-white/70 p-5 shadow-[0_8px_30px_rgb(0,0,0,0.04)] backdrop-blur-xl transition-all duration-500 group-hover:bg-white group-hover:shadow-[0_20px_50px_rgba(0,100,66,0.06)] hover:-translate-y-2 lg:p-8">
                                {/* Background Number Decor */}
                                <span className="absolute -top-4 -right-4 text-9xl font-black text-slate-100 opacity-[0.2] transition-opacity group-hover:opacity-[0.3]">
                                    0{i + 1}
                                </span>

                                {/* Icon Holder */}
                                <div
                                    className={`h-16 w-16 rounded-2xl bg-gradient-to-br ${step.accent} mb-8 p-px shadow-lg shadow-emerald-900/10`}
                                >
                                    <div className="flex h-full w-full items-center justify-center rounded-[calc(1rem-1px)] bg-white text-slate-800">
                                        {step.icon}
                                    </div>
                                </div>

                                <div className="relative z-10">
                                    <h4 className="mb-4 flex items-center gap-2 text-xl font-black tracking-tight italic">
                                        <span className="font-mono text-sm text-[#006442] not-italic">
                                            0{i + 1}.
                                        </span>
                                        {step.title}
                                    </h4>
                                    <p className="text-sm leading-relaxed font-medium text-slate-500">
                                        {step.desc}
                                    </p>
                                </div>

                                {/* Link Indicator (Mobile) */}
                                <div className="mt-8 flex items-center gap-2 lg:hidden">
                                    {i !== steps.length - 1 && (
                                        <motion.div
                                            animate={{ y: [0, 5, 0] }}
                                            transition={{
                                                repeat: Infinity,
                                                duration: 2,
                                            }}
                                            className="flex items-center gap-2 text-[#006442]"
                                        >
                                            <ArrowDown className="h-4 w-4" />
                                            <span className="text-[9px] font-black tracking-widest uppercase">
                                                Next Step
                                            </span>
                                        </motion.div>
                                    )}
                                </div>
                            </div>
                        </motion.div>
                    ))}
                </div>

                {/* Final CTA Card - Menggunakan Dark Gradient Modern */}
                <motion.div
                    initial={{ opacity: 0, scale: 0.95 }}
                    whileInView={{ opacity: 1, scale: 1 }}
                    className="relative mt-15 overflow-hidden rounded-[3rem] bg-[#0A0F0D] p-1 shadow-2xl shadow-emerald-950/20 lg:mt-35"
                >
                    {/* Inner Glow Background */}
                    <div className="absolute top-0 right-0 -mt-20 -mr-20 h-64 w-64 rounded-full bg-[#006442] opacity-20 blur-[80px]" />

                    <div className="relative rounded-[2.9rem] bg-slate-900/60 p-5 text-center backdrop-blur-3xl md:p-20 lg:p-12">
                        <h4 className="mb-8 text-3xl font-black tracking-tighter text-white italic md:text-5xl">
                            Siap Meluncurkan <br className="hidden md:block" />
                            <span className="text-emerald-400">
                                Website Profesional
                            </span>{' '}
                            Anda?
                        </h4>
                        <p className="mx-auto mb-12 max-w-2xl text-lg leading-relaxed text-slate-400">
                            Perluas jangkauan dengan website profesional. Mulai
                            dari konsultasi gratis melalui WhatsApp.
                        </p>

                        <div className="flex flex-col items-center justify-center gap-6 md:flex-row">
                            <a
                                href={`https://wa.me/62${contacts.phone.replace(/[^0-9]/g, '')}`}
                                target="_blank"
                                rel="noopener noreferrer"
                                className="block md:inline-block" // Agar tombol tidak rusak bentuknya
                            >
                                <motion.button
                                    whileHover={{ scale: 1.05 }}
                                    whileTap={{ scale: 0.95 }}
                                    className="flex w-full items-center justify-center gap-4 rounded-2xl bg-[#006442] px-5 py-5 text-lg font-black text-white shadow-xl transition-all md:w-auto lg:px-12"
                                >
                                    Chat WhatsApp{' '}
                                    <MessageSquare className="h-6 w-6 fill-white" />
                                </motion.button>
                            </a>
                            <span className="text-xs font-black tracking-[0.3em] text-slate-600 uppercase">
                                Atau
                            </span>
                            <a
                                href="#harga"
                                className="border-b border-white/20 pb-1 text-sm font-bold text-white transition-all hover:border-emerald-400"
                            >
                                Lihat Pilihan Paket
                            </a>
                        </div>
                    </div>
                </motion.div>
            </div>
        </section>
    );
}
