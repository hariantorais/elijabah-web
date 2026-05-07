import { motion } from 'framer-motion';
import { ShieldAlert } from 'lucide-react';
import React from 'react';

const problems = [
    {
        no: '01',
        code: '[01/IDENTITY]',
        title: 'Profil Bisnis Terlihat Tidak Utuh',
        desc: 'Di media sosial, informasi tentang siapa Anda dan apa keunggulan Anda tersebar di ratusan postingan. Publik kesulitan mendapatkan gambaran lengkap dan profesional mengenai profil Anda dalam satu tampilan yang terorganisir.',
    },
    {
        no: '02',
        code: '[02/CATALOG]',
        title: 'Katalog Layanan Sulit Ditelusuri',
        desc: 'Mencari detail produk atau paket layanan di medsos sangat melelahkan karena harus scroll tanpa henti. Tanpa katalog yang rapi, publik seringkali bingung, ragu, dan akhirnya batal memilih layanan Anda karena sulitnya mendapatkan info.',
    },
    {
        no: '03',
        code: '[03/TRUST]',
        title: 'Batas Kepercayaan pada Transaksi',
        desc: 'Untuk kesepakatan bisnis yang serius, audiens membutuhkan bukti validasi di luar platform media sosial. Tanpa identitas web resmi (.com/.id), potensi kepercayaan sulit terbentuk sepenuhnya, yang seringkali menjadi hambatan saat Anda ingin menaikkan nilai layanan atau memperluas skala kerja sama.',
    },
    {
        no: '04',
        code: '[04/EFFORT]',
        title: 'Pemborosan Waktu Menjelaskan Hal Dasar',
        desc: 'Tim Anda habis waktunya hanya untuk mengirim ulang brosur atau mengetik ulang penjelasan yang sama di chat. Website bekerja sebagai pusat informasi mandiri yang bisa menjawab kebutuhan calon klien secara lengkap selama 24 jam.',
    },
    {
        no: '05',
        code: '[05/ACCURACY]',
        title: 'Risiko Informasi Lama yang Menyesatkan',
        desc: 'Postingan lama di medsos sulit dikontrol dan seringkali masih dibaca meski info harga atau paket sudah berubah. Website memastikan seluruh audiens Anda hanya mendapatkan informasi terbaru dan akurat melalui satu pusat kendali data.',
    },
    {
        no: '06',
        code: '[06/OWNER]',
        title: 'Ketergantungan Penuh pada Pihak Ketiga',
        desc: 'Membangun bisnis hanya di medsos ibarat membangun rumah di tanah sewaan. Jika aturan platform berubah atau akun bermasalah, akses ke katalog dan profil Anda hilang seketika. Website adalah aset properti digital yang Anda miliki sepenuhnya.',
    },
];

export default function ProblemSection() {
    return (
        <section className="bg-white px-6 py-15 lg:py-40">
            <div className="mx-auto max-w-7xl">
                <div className="mb-15 grid items-end gap-10 lg:mb-24 lg:grid-cols-2">
                    {/* Sisi Kiri: Judul dan Identitas Masalah */}
                    <motion.div
                        initial={{ opacity: 0, x: -30 }}
                        whileInView={{ opacity: 1, x: 0 }}
                        viewport={{ once: true }}
                    >
                        <h2 className="mb-6 text-[10px] font-black tracking-[0.4em] text-[#006442] uppercase underline decoration-4 underline-offset-8">
                            Analisis Masalah
                        </h2>
                        <h3 className="text-4xl leading-tight font-black tracking-tighter italic md:text-4xl">
                            Kenapa Profil Medsos Saja {''}
                            <span className="text-[#006442]">
                                Tidak Cukup Untuk Pertumbuhan Bisnis
                            </span>{' '}
                            Anda?
                        </h3>
                    </motion.div>

                    {/* Sisi Kanan: Penjelasan Strategis */}
                    <motion.div
                        initial={{ opacity: 0, x: 30 }}
                        whileInView={{ opacity: 1, x: 0 }}
                        viewport={{ once: true }}
                        className="lg:mb-1" // Menjaga keseimbangan baseline dengan teks kiri
                    >
                        <p className="border-emerald-100 text-lg leading-relaxed font-medium text-slate-400 lg:border-l-4 lg:pl-8">
                            Popularitas di media sosial tidak selalu berbanding
                            lurus dengan validitas bisnis atau lembaga. Hambatan
                            strategis ini sering menjadi penyebab utama
                            hilangnya kepercayaan publik dan klien potensial
                            terhadap profesionalisme yang Anda bangun.
                        </p>
                    </motion.div>
                </div>

                {/* Problems Grid */}
                <div className="grid gap-8 lg:grid-cols-3">
                    {problems.map((item, idx) => (
                        <motion.div
                            key={idx}
                            initial={{ opacity: 0, y: 20 }}
                            whileInView={{ opacity: 1, y: 0 }}
                            viewport={{ once: true }}
                            transition={{ delay: idx * 0.1 }}
                            className="group relative overflow-hidden rounded-2xl border border-emerald-100/50 bg-emerald-50/40 p-5 backdrop-blur-2xl transition-all duration-500 hover:-translate-y-2 hover:bg-emerald-50/60 hover:shadow-[0_25px_50px_-12px_rgba(0,100,66,0.08)] lg:p-10"
                        >
                            {/* Spotlight Hijau yang Berpendar dari Belakang */}
                            <div className="absolute -top-10 -right-10 h-40 w-40 rounded-full bg-emerald-400 opacity-10 blur-3xl transition-opacity duration-500 group-hover:opacity-20" />

                            <div className="relative z-10">
                                <div className="mb-8 flex items-start justify-between">
                                    {/* Nomor Urut dengan warna Emerald yang sangat soft */}
                                    <div className="relative">
                                        <span className="text-6xl font-black text-[#006442]/5 transition-colors duration-500 group-hover:text-[#006442]/10">
                                            {item.no}
                                        </span>
                                    </div>

                                    {/* Badge Kode dengan gaya Frosted Glass */}
                                    <span className="rounded-full border border-emerald-100/50 bg-white/60 px-3 py-1 font-mono text-[9px] font-black tracking-widest text-[#006442]/60 uppercase backdrop-blur-md">
                                        {item.code}
                                    </span>
                                </div>

                                <h4 className="mb-4 text-2xl font-black tracking-tight text-slate-800 italic transition-colors duration-300 group-hover:text-[#006442]">
                                    {item.title}
                                </h4>

                                <p className="text-base leading-relaxed font-medium text-slate-600 transition-colors duration-300 group-hover:text-slate-700">
                                    {item.desc}
                                </p>
                            </div>

                            {/* Accent Line Signature */}
                            <div className="absolute bottom-0 left-0 h-1.5 w-0 bg-linear-to-r from-[#006442] to-emerald-400 transition-all duration-500 group-hover:w-full" />
                        </motion.div>
                    ))}
                </div>

                {/* Footer Insight */}
                <div className="mt-24 flex flex-col items-center gap-10 rounded-2xl border border-slate-100 bg-slate-50 p-5 md:flex-row lg:p-10">
                    <div className="flex h-20 w-20 shrink-0 items-center justify-center rounded-3xl bg-white shadow-sm">
                        <ShieldAlert className="h-10 w-10 text-[#006442]" />
                    </div>
                    <div>
                        <p className="mb-2 text-xl font-black text-slate-900 italic">
                            Jangan biarkan kepercayaan mereka hilang.
                        </p>
                        <p className="text-sm font-medium text-slate-500">
                            Medsos adalah tempat Anda "beriklan", Website adalah
                            tempat Anda "membangun kepercayaan". <br />
                            Pastikan lembaga Anda memiliki alamat digital resmi
                            yang bisa dibaca oleh manusia dan AI.
                        </p>
                    </div>
                </div>
            </div>
        </section>
    );
}
