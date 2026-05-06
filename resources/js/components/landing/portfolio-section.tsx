import { motion } from 'framer-motion';
import { ExternalLink, Github, Code2, Layout } from 'lucide-react';
import React from 'react';

export default function PortfolioSection() {
    const projects = [
        {
            title: 'Travel Umroh Terpadu',
            category: 'Web System & Management',
            desc: 'Sistem manajemen jamaah, paket perjalanan, dan pembayaran otomatis untuk agen travel umroh.',
            tech: ['Laravel', 'Livewire', 'Tailwind'],
            link: '#',
            image: 'https://images.unsplash.com/photo-1584551246679-0daf3d275d0f?auto=format&fit=crop&q=80&w=800',
        },
        {
            title: 'Sistem Akademik Pesantren',
            category: 'Educational Platform',
            desc: 'Digitalisasi data santri, kurikulum, dan laporan perkembangan otomatis dalam satu pintu.',
            tech: ['React.js', 'Node.js', 'PostgreSQL'],
            link: '#',
            image: 'https://images.unsplash.com/photo-1546410531-bb4caa6b424d?auto=format&fit=crop&q=80&w=800',
        },
        {
            title: 'Smart Inventory UMKM',
            category: 'Enterprise Solution',
            desc: 'Aplikasi pengelolaan stok barang dan laporan keuangan real-time untuk pelaku usaha lokal.',
            tech: ['TALL Stack', 'Alpine.js', 'MySQL'],
            link: '#',
            image: 'https://images.unsplash.com/photo-1556740734-7f95826913e8?auto=format&fit=crop&q=80&w=800',
        },
    ];

    return (
        <section
            id="portfolio"
            className="relative overflow-hidden bg-white px-6 py-32"
        >
            <div className="mx-auto max-w-7xl">
                {/* --- HEADER SECTION --- */}
                <div className="mb-24 grid items-end gap-10 lg:grid-cols-2">
                    <motion.div
                        initial={{ opacity: 0, x: -30 }}
                        whileInView={{ opacity: 1, x: 0 }}
                        viewport={{ once: true }}
                    >
                        <h2 className="mb-6 text-xs font-black tracking-[0.4em] text-[#006442] uppercase underline decoration-4 underline-offset-8">
                            Karya Terpilih
                        </h2>
                        <h3 className="text-5xl leading-tight font-black tracking-tighter italic md:text-7xl">
                            Transformasi Digital <br />
                            <span className="text-[#006442]">
                                Yang Telah Terwujud.
                            </span>
                        </h3>
                    </motion.div>

                    <motion.div
                        initial={{ opacity: 0, x: 30 }}
                        whileInView={{ opacity: 1, x: 0 }}
                        viewport={{ once: true }}
                        className="lg:mb-2"
                    >
                        <p className="border-l-4 border-emerald-100 pl-8 text-lg leading-relaxed font-medium text-slate-500">
                            Setiap proyek adalah bukti komitmen kami dalam
                            menghadirkan sistem yang tidak hanya indah secara
                            visual, tetapi juga kuat secara arsitektur teknis
                            untuk mendukung skalabilitas lembaga Anda.
                        </p>
                    </motion.div>
                </div>

                {/* --- PROJECT GRID --- */}
                <div className="grid gap-12 md:grid-cols-2 lg:grid-cols-3">
                    {projects.map((project, idx) => (
                        <motion.div
                            key={idx}
                            initial={{ opacity: 0, y: 20 }}
                            whileInView={{ opacity: 1, y: 0 }}
                            viewport={{ once: true }}
                            transition={{ delay: idx * 0.1 }}
                            className="group relative flex flex-col rounded-[3rem] border border-emerald-50 bg-emerald-50/30 p-4 backdrop-blur-xl transition-all duration-500 hover:-translate-y-3 hover:bg-emerald-50/60 hover:shadow-[0_30px_60px_-15px_rgba(0,100,66,0.1)]"
                        >
                            {/* Image Container */}
                            <div className="relative h-64 w-full overflow-hidden rounded-[2.5rem] shadow-inner">
                                <img
                                    src={project.image}
                                    alt={project.title}
                                    className="h-full w-full object-cover transition-transform duration-700 group-hover:scale-110"
                                />
                                <div className="absolute inset-0 bg-gradient-to-t from-emerald-900/40 to-transparent opacity-0 transition-opacity duration-500 group-hover:opacity-100" />

                                {/* Hover Action Buttons */}
                                <div className="absolute inset-0 flex items-center justify-center gap-4 opacity-0 transition-all duration-500 group-hover:opacity-100">
                                    <button className="rounded-full bg-white p-3 text-[#006442] shadow-xl transition-colors hover:bg-[#006442] hover:text-white">
                                        <ExternalLink size={20} />
                                    </button>
                                    <button className="rounded-full bg-white p-3 text-[#006442] shadow-xl transition-colors hover:bg-[#006442] hover:text-white">
                                        <Github size={20} />
                                    </button>
                                </div>
                            </div>

                            {/* Project Content */}
                            <div className="px-4 py-8">
                                <div className="mb-4 flex items-center justify-between">
                                    <span className="rounded-full bg-emerald-100 px-3 py-1 text-[10px] font-black tracking-widest text-[#006442] uppercase">
                                        {project.category}
                                    </span>
                                </div>
                                <h4 className="mb-3 text-2xl font-black tracking-tight italic transition-colors group-hover:text-[#006442]">
                                    {project.title}
                                </h4>
                                <p className="mb-6 text-sm leading-relaxed font-medium text-slate-500">
                                    {project.desc}
                                </p>

                                {/* Tech Stack Badges */}
                                <div className="flex flex-wrap gap-2 border-t border-emerald-100/50 pt-4">
                                    {project.tech.map((t, i) => (
                                        <span
                                            key={i}
                                            className="flex items-center gap-1.5 text-[11px] font-bold text-slate-600"
                                        >
                                            <Code2
                                                size={12}
                                                className="text-emerald-500"
                                            />
                                            {t}
                                        </span>
                                    ))}
                                </div>
                            </div>
                        </motion.div>
                    ))}
                </div>

                {/* --- BOTTOM DECORATION --- */}
                <motion.div
                    initial={{ opacity: 0 }}
                    whileInView={{ opacity: 1 }}
                    className="mt-24 text-center"
                >
                    <p className="text-xs font-black tracking-[0.5em] text-slate-300 uppercase">
                        & More Projects Coming Soon
                    </p>
                </motion.div>
            </div>
        </section>
    );
}
