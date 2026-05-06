import { ShieldCheck, Users2, Zap, Globe2 } from 'lucide-react';
import React from 'react';

export default function TrustBar() {
    const stats = [
        { label: 'Pengalaman', val: '7+ Tahun', i: ShieldCheck },
        { label: 'Proyek Selesai', val: '100+', i: Users2 },
        { label: 'Waktu Pengerjaan', val: 'Cepat & Tepat', i: Zap },
        { label: 'Teknologi', val: 'Stack Modern', i: Globe2 },
    ];

    return (
        <section className="bg-slate-900 px-6 py-16">
            <div className="mx-auto grid max-w-7xl grid-cols-2 gap-12 text-white lg:grid-cols-4">
                {stats.map((item, idx) => (
                    <div
                        key={idx}
                        className="flex flex-col items-center gap-2 text-center"
                    >
                        <item.i className="mb-2 h-8 w-8 text-emerald-400" />
                        <h4 className="text-2xl font-black tracking-tight">
                            {item.val}
                        </h4>
                        <p className="text-[10px] font-bold tracking-[0.2em] text-slate-400 uppercase">
                            {item.label}
                        </p>
                    </div>
                ))}
            </div>
        </section>
    );
}
