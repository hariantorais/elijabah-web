import { Link } from '@inertiajs/react';
import type { ReactNode } from 'react';
import React from 'react';

interface Props {
    children: ReactNode;
}

export default function LandingLayout({ children }: Props) {
    return (
        <div className="min-h-screen bg-[#FDFDFD] antialiased text-slate-900 selection:bg-emerald-100">
            <nav className="fixed w-full z-[100] bg-white/80 backdrop-blur-md border-b border-slate-100">
                <div className="max-w-7xl mx-auto px-6 h-20 flex justify-between items-center">
                    <Link href="/" className="flex items-center gap-2 group">
                        <div className="w-10 h-10 bg-slate-900 rounded-xl flex items-center justify-center text-white font-bold group-hover:rotate-6 transition-transform">R</div>
                        <span className="text-xl font-black tracking-tighter uppercase">Rais<span className="text-emerald-600">Dev</span></span>
                    </Link>
                    <div className="hidden md:flex gap-10 text-[11px] font-black uppercase tracking-widest text-slate-400">
                        <a href="#solusi" className="hover:text-emerald-600 transition">Solusi Spesialis</a>
                        <a href="#portfolio" className="hover:text-emerald-600 transition">Portfolio</a>
                        <a href="#alur" className="hover:text-emerald-600 transition">Proses Kerja</a>
                    </div>
                    <a href="https://wa.me/62xxx" className="bg-slate-900 text-white px-6 py-3 rounded-full text-[10px] font-black uppercase tracking-widest hover:bg-emerald-600 transition shadow-lg shadow-slate-200">
                        Konsultasi
                    </a>
                </div>
            </nav>

            <main>{children}</main>

            <footer className="py-20 bg-white border-t border-slate-100 mt-20">
                <div className="max-w-7xl mx-auto px-6 flex flex-col md:flex-row justify-between items-center opacity-50">
                    <p className="text-[10px] font-black uppercase tracking-[0.3em]">
                        © 2026 RaisDev Personal Agency • Batam
                    </p>
                    <p className="text-[10px] font-black uppercase tracking-[0.3em] mt-4 md:mt-0">
                        Built with Laravel 11 & React TS
                    </p>
                </div>
            </footer>
        </div>
    );
}
