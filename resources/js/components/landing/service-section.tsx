import { motion } from 'framer-motion';
import { Globe, BookOpen, Store, Cpu } from 'lucide-react';
import React from 'react';

const services = [
    {
        cat: 'Travel Haji & Umroh',
        title: 'Website Umroh Premium',
        desc: 'Landing page konversi tinggi dengan katalog paket keberangkatan dan integrasi WhatsApp jamaah.',
        icon: Globe,
        color: 'bg-emerald-500',
    },
    {
        cat: 'Pesantren & Sekolah',
        title: 'Portal Pesantren Digital',
        desc: 'Sistem informasi santri, PPDB online, dan sistem donasi transparan untuk tingkatkan trust.',
        icon: BookOpen,
        color: 'bg-[#006442]',
    },
    {
        cat: 'UMKM',
        title: 'Website Katalog Lokal',
        desc: 'Identitas digital profesional dengan SEO lokal agar bisnis Anda mudah ditemukan buyer.',
        icon: Store,
        color: 'bg-amber-500',
    },
    {
        cat: 'Custom App',
        title: 'Sistem Khusus',
        desc: 'Sistem 100% custom sesuai kebutuhan: ERP, manajemen internal, atau integrasi API.',
        icon: Cpu,
        color: 'bg-slate-800',
    },
];

export default function ServiceSection() {
    return (
        <section id="layanan" className="bg-slate-50 px-6 py-40">
            <div className="mx-auto max-w-7xl">
                <div className="mb-24 max-w-4xl">
                    <h2 className="mb-4 text-xs font-black tracking-[0.4em] text-[#006442] uppercase underline decoration-4 underline-offset-8">
                        Layanan Kami
                    </h2>
                    <h3 className="text-4xl font-black tracking-tighter italic md:text-5xl">
                        Temukan layanan paling sesuai dengan <br />
                        <span className="text-[#006442]">
                            kebutuhan bisnis Anda
                        </span>
                    </h3>
                </div>

                <div className="grid gap-8 md:grid-cols-2 lg:grid-cols-4">
                    {services.map((s, i) => (
                        <motion.div
                            key={i}
                            initial={{ opacity: 0, y: 30 }}
                            whileInView={{ opacity: 1, y: 0 }}
                            whileHover={{ y: -15 }}
                            className="group flex flex-col rounded-[3rem] border border-slate-100 bg-white p-10 shadow-sm transition-all hover:shadow-2xl"
                        >
                            <div
                                className={`mb-10 flex h-16 w-16 items-center justify-center rounded-2xl bg-slate-50 transition-all duration-500 group-hover:bg-[#006442] group-hover:text-white`}
                            >
                                <s.icon className="h-8 w-8" />
                            </div>
                            <div className="flex-1">
                                <p className="mb-3 text-[10px] font-black tracking-widest text-[#006442] uppercase">
                                    {s.cat}
                                </p>
                                <h4 className="mb-4 text-2xl leading-none font-bold tracking-tight italic">
                                    {s.title}
                                </h4>
                                <p className="mb-10 text-sm leading-relaxed text-slate-500">
                                    {s.desc}
                                </p>
                            </div>
                        </motion.div>
                    ))}
                </div>
            </div>
        </section>
    );
}
