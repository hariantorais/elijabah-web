import { motion } from 'framer-motion';
import {
    Check,
    Zap,
    Layers,
    Cpu,
    ArrowRight,
    Sparkles,
    ShieldCheck,
    Globe,
} from 'lucide-react';
import React from 'react';

const tiers = [
    {
        name: 'Digital Branding',
        price: '1.3jt',
        oldPrice: '2.5jt',
        target: 'Profil Kredibel & Profesional',
        desc: 'Solusi tepat untuk membangun wajah digital yang terpercaya bagi publik',
        features: [
            'Landing Page / Company Profile',
            'Desain Responsif (Lancar di HP)',
            'Integrasi WhatsApp & Google Maps',
            'Optimasi Google Search (SEO)',
            'Include Domain & Hosting (1 tahun)',
            'Sertifikat Keamanan SSL',
        ],
        icon: <Zap className="h-6 w-6 text-emerald-500" />,
        highlight: false,
        btnText: 'Mulai Branding',
    },
    {
        name: 'Infrastruktur Digital',
        price: '2.5jt',
        oldPrice: '3,2jt',
        target: 'Promosi & Kelola Data',
        desc: 'Membangun kepercayaan di mata pengunjung, memudahkan pekerjaan di sisi pengelola',
        features: [
            'Semua Fitur Digital Branding',
            'Dashboard Admin (Kelola Data)',
            'Laporan Otomatis (Download PDF)',
            'Manajemen Inventaris / Paket',
            'Panduan Penggunaan Lengkap',
            'Dukungan Teknis (1 tahun)',
        ],
        icon: <Layers className="h-6 w-6 text-white" />,
        highlight: true,
        btnText: 'Bangun Sistem Sekarang',
    },
    {
        name: 'Enterprise Custom',
        price: '5jt+',
        target: 'Sistem Unik Skala Besar',
        desc: 'Arsitektur sistem yang dibangun 100% mengikuti alur kerja bisnis atau lembaga Anda',
        features: [
            'Semua Fitur Integrated System',
            'Alur Bisnis Sesuai Permintaan',
            'Integrasi Pembayaran Online',
            'Keamanan Enkripsi Berlapis',
            'Pemeliharaan & Update Prioritas',
            'Sistem Database Skala Besar',
        ],
        icon: <Cpu className="h-6 w-6 text-slate-400" />,
        highlight: false,
        btnText: 'Konsultasi Eksklusif',
    },
];

const containerVariants = {
    hidden: { opacity: 0 },
    visible: {
        opacity: 1,
        transition: { staggerChildren: 0.2 },
    },
};

const cardVariants = {
    hidden: { opacity: 0, y: 40 },
    visible: {
        opacity: 1,
        y: 0,
        transition: { duration: 0.8, ease: 'easeOut' },
    },
};

export default function Pricing() {
    return (
        <section
            id="harga"
            className="relative overflow-hidden bg-[#FCFCFC] px-6 py-40"
        >
            {/* Background Decor */}
            <div className="pointer-events-none absolute top-0 left-0 -z-10 h-full w-full bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] opacity-[0.03]"></div>

            <div className="mx-auto max-w-7xl">
                {/* Header Section */}
                <div className="mx-auto max-w-7xl">
                    {/* Header Section */}
                    <div className="mb-24 grid items-end gap-10 lg:grid-cols-2">
                        <motion.div
                            initial={{ opacity: 0, x: -30 }}
                            whileInView={{ opacity: 1, x: 0 }}
                            viewport={{ once: true }}
                            className="flex flex-col"
                        >
                            <h2 className="mb-6 text-xs font-black tracking-[0.4em] text-[#006442] uppercase underline decoration-4 underline-offset-8">
                                Pilihan Paket Digitalisasi
                            </h2>
                            <h3 className="text-5xl leading-tight font-black tracking-tighter italic md:text-5xl">
                                Bangun Sistem Anda{' '}
                                <span className="text-[#006442]">
                                    Sekarang Juga.
                                </span>
                            </h3>
                        </motion.div>

                        <motion.div
                            initial={{ opacity: 0, x: 30 }}
                            whileInView={{ opacity: 1, x: 0 }}
                            viewport={{ once: true }}
                            className="lg:mb-2" // Memberikan sedikit margin bawah agar sejajar dengan baseline teks kiri
                        >
                            <p className="border-l-4 border-emerald-100 pl-8 text-lg leading-relaxed font-medium text-slate-500">
                                Pilih paket yang sesuai dengan skala kebutuhan
                                bisnis atau lembaga Anda. Setiap opsi dirancang
                                untuk memberikan otoritas penuh pada identitas
                                digital dan efisiensi operasional Anda.
                            </p>
                        </motion.div>
                    </div>
                </div>

                {/* Pricing Grid */}
                <motion.div
                    variants={containerVariants}
                    initial="hidden"
                    whileInView="visible"
                    viewport={{ once: true }}
                    className="grid gap-8 lg:grid-cols-3"
                >
                    {tiers.map((tier, idx) => (
                        <motion.div
                            key={idx}
                            variants={cardVariants}
                            whileHover={{
                                y: -15,
                                transition: { duration: 0.3 },
                            }}
                            className={`relative flex flex-col rounded-[3rem] p-10 transition-all duration-500 ${
                                tier.highlight
                                    ? 'bg-slate-950 text-white shadow-[0_40px_100px_rgba(0,100,66,0.15)] ring-4 ring-emerald-500/10'
                                    : 'border border-slate-100 bg-white shadow-xl shadow-slate-200/50'
                            }`}
                        >
                            {tier.highlight && (
                                <div className="absolute -top-5 left-1/2 flex -translate-x-1/2 items-center gap-2 rounded-full bg-emerald-500 px-6 py-2 text-[10px] font-black tracking-widest text-white uppercase shadow-lg">
                                    <Sparkles className="h-3 w-3 fill-white" />
                                    Direkomendasikan
                                </div>
                            )}

                            <div className="mb-10">
                                <div
                                    className={`mb-8 flex h-14 w-14 items-center justify-center rounded-2xl ${
                                        tier.highlight
                                            ? 'bg-emerald-500 shadow-[0_10px_30px_rgba(16,185,129,0.4)]'
                                            : 'bg-slate-50'
                                    }`}
                                >
                                    {tier.icon}
                                </div>
                                <h4 className="mb-2 text-3xl font-black tracking-tight italic">
                                    {tier.name}
                                </h4>
                                <p
                                    className={`mb-6 text-[10px] font-black tracking-[0.2em] uppercase ${
                                        tier.highlight
                                            ? 'text-emerald-400'
                                            : 'text-[#006442]'
                                    }`}
                                >
                                    {tier.target}
                                </p>
                                <p
                                    className={`text-sm leading-relaxed font-medium ${
                                        tier.highlight
                                            ? 'text-slate-400'
                                            : 'text-slate-500'
                                    }`}
                                >
                                    {tier.desc}
                                </p>
                            </div>

                            <div className="mb-10">
                                {/* Harga Coret (Hanya tampil jika oldPrice ada dan bukan 'Custom') */}
                                {tier.oldPrice && tier.price !== 'Custom' && (
                                    <span
                                        className={`line-through ${
                                            tier.highlight
                                                ? 'text-emerald-400/60'
                                                : 'text-slate-400'
                                        }`}
                                    >
                                        Rp {tier.oldPrice}
                                    </span>
                                )}

                                <div className="flex items-baseline gap-2">
                                    <span
                                        className={`text-5xl font-black tracking-tighter ${
                                            tier.highlight
                                                ? 'text-white'
                                                : 'text-slate-950'
                                        }`}
                                    >
                                        {tier.price === 'Custom'
                                            ? 'Hubungi'
                                            : `Rp ${tier.price}`}
                                    </span>
                                </div>
                            </div>

                            <ul className="mb-12 flex-1 space-y-5 border-t border-slate-100 pt-10">
                                {tier.features.map((f, i) => (
                                    <li
                                        key={i}
                                        className="flex items-start gap-4 text-sm font-medium"
                                    >
                                        <div
                                            className={`mt-1 flex h-5 w-5 shrink-0 items-center justify-center rounded-full ${
                                                tier.highlight
                                                    ? 'bg-emerald-500/20'
                                                    : 'bg-emerald-50'
                                            }`}
                                        >
                                            <Check
                                                className={`h-3 w-3 ${tier.highlight ? 'text-emerald-400' : 'text-[#006442]'}`}
                                            />
                                        </div>
                                        <span
                                            className={
                                                f.includes('Semua Fitur')
                                                    ? 'font-black text-emerald-500'
                                                    : ''
                                            }
                                        >
                                            {f}
                                        </span>
                                    </li>
                                ))}
                            </ul>

                            <button
                                className={`group rounded-2rem flex w-full items-center justify-center gap-3 py-6 text-xs font-black tracking-[0.2em] uppercase transition-all ${
                                    tier.highlight
                                        ? 'bg-emerald-500 text-white shadow-xl shadow-emerald-500/40 hover:bg-white hover:text-slate-900'
                                        : 'bg-slate-950 text-white hover:bg-[#006442]'
                                }`}
                            >
                                {tier.btnText}{' '}
                                <ArrowRight className="h-4 w-4 transition-transform group-hover:translate-x-2" />
                            </button>
                        </motion.div>
                    ))}
                </motion.div>

                {/* Bottom Trust Indicators */}
                <motion.div
                    initial={{ opacity: 0, y: 30 }}
                    whileInView={{ opacity: 1, y: 0 }}
                    viewport={{ once: true }}
                    className="mt-32 grid gap-12 border-t border-slate-200 pt-20 md:grid-cols-3"
                >
                    <div className="flex items-center gap-6">
                        <ShieldCheck className="h-10 w-10 text-[#006442] opacity-50" />
                        <div>
                            <p className="font-black text-slate-900 italic">
                                Sistem Pembayaran Aman
                            </p>
                            <p className="text-sm text-slate-500">
                                DP 50% di awal, pelunasan setelah website live.
                            </p>
                        </div>
                    </div>
                    <div className="flex items-center gap-6">
                        <Globe className="h-10 w-10 text-[#006442] opacity-50" />
                        <div>
                            <p className="font-black text-slate-900 italic">
                                Terima Beres (All-In)
                            </p>
                            <p className="text-sm text-slate-500">
                                Sudah termasuk Domain, Hosting, & SSL gratis.
                            </p>
                        </div>
                    </div>
                    <div className="flex items-center gap-6">
                        <Sparkles className="h-10 w-10 text-[#006442] opacity-50" />
                        <div>
                            <p className="font-black text-slate-900 italic">
                                After-Sales Support
                            </p>
                            <p className="text-sm text-slate-500">
                                Bantuan teknis 24/7 jika terjadi kendala.
                            </p>
                        </div>
                    </div>
                </motion.div>
            </div>
        </section>
    );
}
