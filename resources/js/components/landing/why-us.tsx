import React from 'react';
import { motion } from 'framer-motion';

const WhyChooseUs = () => {
    // Data object menyatu di dalam komponen
    const reasons = [
        {
            no: '01',
            icon: '⚡',
            title: 'Kecepatan Akses Maksimal',
            desc: 'Website super cepat yang terbuka dalam hitungan detik. Kami menjaga agar calon pelanggan tidak kabur hanya karena bosan menunggu website yang lambat.',
        },
        {
            no: '02',
            icon: '🎯',
            title: 'Desain Penggerak Penjualan',
            desc: 'Bukan cuma soal hiasan, setiap tombol dan susunan gambar diatur agar pengunjung segera menekan tombol pesan, daftar, atau chat WhatsApp Anda.',
        },
        {
            no: '03',
            icon: '📱',
            title: 'Rapi di HP & Komputer',
            desc: 'Tampilan otomatis menyesuaikan layar. Website Anda akan tetap terlihat cantik, jelas, dan profesional baik saat dibuka lewat HP maupun laptop.',
        },
        {
            no: '04',
            icon: '🔍',
            title: 'Mudah Ditemukan di Google',
            desc: 'Kami merakit kode website agar lebih disukai oleh mesin pencari. Membantu bisnis Anda muncul di barisan depan saat orang mencari layanan Anda.',
        },
        {
            no: '05',
            icon: '💡',
            title: 'Dukungan berkelanjutan',
            desc: 'Anda tidak sekadar membeli website, tapi mendapatkan rekan diskusi. Kami bantu memberikan masukan terbaik agar website Anda benar-benar menghasilkan.',
        },
        {
            no: '06',
            icon: '⚙️',
            title: 'Sistem Otomatis Khusus',
            desc: 'Solusi untuk alur kerja yang rumit: Kami bangunkan sistem otomatis untuk pendaftaran, pendataan pelanggan, hingga laporan yang didesain khusus hanya untuk bisnis Anda.',
            isSpecial: true,
        },
    ];

    return (
        <section className="relative overflow-hidden bg-slate-900 px-6 py-24 text-white lg:px-20">
            {/* Background Decorative Element */}
            <div className="absolute top-0 right-0 -mt-48 -mr-48 h-96 w-96 rounded-full bg-[#006442]/20 blur-[120px]" />
            <div className="absolute bottom-0 left-0 -mb-48 -ml-48 h-96 w-96 rounded-full bg-[#006442]/10 blur-[120px]" />

            <div className="relative z-10 mx-auto max-w-7xl">
                {/* Header Section */}
                <div className="mb-20 max-w-3xl">
                    <motion.h3
                        initial={{ opacity: 0, x: -20 }}
                        whileInView={{ opacity: 1, x: 0 }}
                        transition={{ delay: 0.1 }}
                        className="text-4xl leading-none font-black tracking-tighter md:text-5xl"
                    >
                        Kenapa Harus{' '}
                        <span className="bg-linear-to-r from-emerald-400 to-emerald-600 bg-clip-text text-transparent">
                            Tim Kami?
                        </span>
                    </motion.h3>
                    <p className="mt-6 max-w-xl text-lg leading-relaxed font-medium text-slate-400">
                        Kami tidak menjual "tampilan website", kami membangun
                        infrastruktur digital yang mengamankan dan membesarkan
                        bisnis Anda.
                    </p>
                </div>

                {/* Grid Content */}
                <div className="grid grid-cols-1 gap-px overflow-hidden rounded-3xl border border-slate-800 bg-slate-800 shadow-2xl md:grid-cols-2 lg:grid-cols-3">
                    {reasons.map((item, index) => (
                        <motion.div
                            key={item.no}
                            initial={{ opacity: 0 }}
                            whileInView={{ opacity: 1 }}
                            transition={{ delay: index * 0.1 }}
                            viewport={{ once: true }}
                            className="group relative bg-slate-900 p-10 transition-all duration-500 hover:bg-slate-800/50"
                        >
                            {/* Card Number */}
                            <div className="absolute top-8 right-8 text-6xl font-black text-slate-800/40 transition-colors duration-500 group-hover:text-emerald-500/10">
                                {item.no}
                            </div>

                            {/* Icon & Title */}
                            <div className="mb-6 text-3xl">{item.icon}</div>
                            <h4 className="mb-4 text-xl font-bold text-white transition-colors group-hover:text-[#55efc4]">
                                {item.title}
                            </h4>

                            {/* Description */}
                            <p className="text-sm leading-relaxed font-medium text-slate-400 transition-colors group-hover:text-slate-300">
                                {item.desc}
                            </p>

                            {/* Interactive Corner Accent */}
                            <div className="absolute right-4 bottom-4 h-2 w-2 rounded-full bg-slate-700 transition-all duration-500 group-hover:scale-[3] group-hover:bg-[#006442]" />
                        </motion.div>
                    ))}
                </div>
            </div>
        </section>
    );
};

export default WhyChooseUs;
