import React, { useState } from 'react';
import { motion, AnimatePresence } from 'framer-motion';
import { Plus, Minus, AlertCircle } from 'lucide-react';

const FAQSection = () => {
    const [activeIdx, setActiveIdx] = useState(null);

    const faqs = [
        {
            question: 'Berapa lama proses pengerjaannya?',
            answer: 'Landing page selesai dalam 3-7 hari. Untuk sistem custom kompleks (seperti pendaftaran atau database santri), biasanya memakan waktu 2-4 minggu.',
        },
        {
            question: 'Apakah saya bisa memantau progresnya?',
            answer: 'Tentu. Kami akan memberikan link preview khusus. Anda bisa memantau perkembangan tampilan dan fitur secara langsung lewat browser Anda.',
        },
        {
            question: 'Sudah termasuk hosting dan domain?',
            answer: 'Ya, semua paket sudah terima beres termasuk domain (.com/.id) dan hosting selama 1 tahun pertama. Anda tidak perlu pusing urusan teknis.',
        },
        {
            question: 'Apa bedanya Landing Page & Website Custom?',
            answer: 'Landing Page adalah satu halaman statis untuk promosi (tidak bisa tambah fitur/sistem di kemudian hari). Website Custom adalah sistem yang dibangun khusus agar bisa terus dikembangkan fiturnya sesuai kebutuhan bisnis Anda.',
        },
        {
            question: 'Bisa tambah fitur di kemudian hari?',
            answer: 'Penambahan fitur hanya tersedia untuk Paket Website Custom. Untuk Paket Landing Page, fitur bersifat tetap (statis) dan tidak dapat di-upgrade ke sistem yang lebih kompleks kecuali melakukan migrasi ke paket custom.',
        },
        {
            question: 'Apakah website bisa saya kelola sendiri?',
            answer: 'Bisa. Kami sediakan dashboard admin yang sangat mudah digunakan untuk ganti tulisan, gambar, atau update produk tanpa perlu koding.',
        },
        {
            question: 'Bagaimana jika ada kendala di kemudian hari?',
            answer: 'Kami memberikan garansi maintenance jika terjadi error teknis dan bantuan konsultasi gratis untuk memastikan website Anda berjalan lancar.',
        },
        {
            question: 'Apa data yang harus saya siapkan?',
            answer: 'Cukup siapkan profil bisnis, foto produk/layanan, dan nomor kontak. Sisanya kami yang bantu susun agar terlihat profesional.',
        },
    ];

    return (
        <section className="bg-white px-6 py-16 lg:px-20">
            <div className="mx-auto max-w-6xl">
                <div className="mb-10 flex flex-col justify-between gap-4 md:flex-row md:items-end">
                    <div className="max-w-xl">
                        <h2 className="mb-2 text-xs font-black tracking-[0.3em] text-emerald-600 uppercase">
                            Common Questions
                        </h2>
                        <h3 className="text-3xl leading-none font-black tracking-tighter text-slate-900 uppercase italic md:text-4xl">
                            Tanya Jawab{' '}
                            <span className="text-emerald-600">Singkat.</span>
                        </h3>
                    </div>
                </div>

                {/* FAQ Grid - Compact 2 Columns */}
                <div className="grid grid-cols-1 gap-x-6 gap-y-3 lg:grid-cols-2">
                    {faqs.map((faq, idx) => (
                        <div key={idx} className="h-fit">
                            <div
                                className={`overflow-hidden rounded-2xl border transition-all duration-300 ${
                                    activeIdx === idx
                                        ? 'border-emerald-200 bg-emerald-50/30'
                                        : 'border-slate-100 bg-white hover:border-slate-200'
                                }`}
                            >
                                <button
                                    onClick={() =>
                                        setActiveIdx(
                                            activeIdx === idx ? null : idx,
                                        )
                                    }
                                    className="flex w-full items-center justify-between p-5 text-left transition-colors"
                                >
                                    <span
                                        className={`text-[15px] font-bold tracking-tight ${activeIdx === idx ? 'text-emerald-900' : 'text-slate-700'}`}
                                    >
                                        {faq.question}
                                    </span>
                                    <div className="ml-4 flex-shrink-0">
                                        {activeIdx === idx ? (
                                            <Minus className="h-4 w-4 text-emerald-600" />
                                        ) : (
                                            <Plus className="h-4 w-4 text-slate-300" />
                                        )}
                                    </div>
                                </button>

                                <AnimatePresence>
                                    {activeIdx === idx && (
                                        <motion.div
                                            initial={{ height: 0, opacity: 0 }}
                                            animate={{
                                                height: 'auto',
                                                opacity: 1,
                                            }}
                                            exit={{ height: 0, opacity: 0 }}
                                            transition={{ duration: 0.2 }}
                                        >
                                            <div className="px-5 pb-5">
                                                <p className="border-t border-emerald-100 pt-4 text-sm leading-relaxed font-medium text-slate-600">
                                                    {faq.answer}
                                                </p>
                                            </div>
                                        </motion.div>
                                    )}
                                </AnimatePresence>
                            </div>
                        </div>
                    ))}
                </div>

                <div className="mt-10 flex flex-col items-center justify-between gap-6 rounded-3xl bg-slate-900 p-6 md:flex-row">
                    <div className="text-center md:text-left">
                        <h4 className="mb-1 text-lg leading-none font-bold text-white">
                            Masih ragu pilih paket mana?
                        </h4>
                        <p className="text-xs text-balance text-slate-400">
                            Konsultasikan gratis agar Anda tidak salah pilih
                            paket yang sesuai kebutuhan bisnis.
                        </p>
                    </div>
                    <button className="shrink-0 rounded-xl bg-emerald-500 px-8 py-3 text-xs font-black tracking-widest text-white uppercase transition-colors hover:bg-emerald-400">
                        Tanya via WhatsApp
                    </button>
                </div>
            </div>
        </section>
    );
};

export default FAQSection;
