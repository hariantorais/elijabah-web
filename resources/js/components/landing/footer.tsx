import { usePage } from '@inertiajs/react';
import { MapPin, Phone, Clock, Mail } from 'lucide-react';
import React from 'react';
import type { Contact } from '@/types';

export default function Footer() {
    const { contacts } = usePage<{ contacts: Contact }>().props;

    return (
        <footer className="bg-slate-950 px-6 pt-24 pb-12 text-white">
            <div className="mx-auto max-w-7xl">
                <div className="grid gap-12 border-b border-white/5 pb-20 lg:grid-cols-4">
                    <div className="lg:col-span-1">
                        <div className="mb-8 flex items-center gap-2">
                            <div className="flex h-9 w-9 items-center justify-center rounded-lg bg-[#006442] font-black italic">
                                EI
                            </div>
                            <span className="text-2xl font-black tracking-tighter">
                                Web
                                <span className="font-black text-[#006442]">
                                    Elijabah
                                </span>
                            </span>
                        </div>
                        <p className="mb-8 text-sm leading-relaxed text-slate-400">
                            Jasa pembuatan website untuk Travel Umroh,
                            Pesantren, dan UMKM termurah dengan standar
                            profesional dan teknologi terbaru. Bikin website
                            tanpa ribet.
                        </p>
                        <div className="flex gap-4">
                            {['FB', 'IG', 'LI', 'WA'].map((s) => (
                                <a
                                    key={s}
                                    href="#"
                                    className="flex h-10 w-10 items-center justify-center rounded-full border border-white/10 text-[10px] font-bold transition hover:bg-[#006442]"
                                >
                                    {s}
                                </a>
                            ))}
                        </div>
                    </div>
                    <div>
                        <h4 className="mb-8 border-l-4 border-[#006442] pl-4 font-mono text-[10px] font-bold tracking-widest text-white uppercase">
                            Produk
                        </h4>
                        <ul className="space-y-4 text-sm font-medium text-slate-500">
                            <li>
                                <a href="#" className="hover:text-emerald-400">
                                    Website Travel Haji & Umroh
                                </a>
                            </li>

                            <li>
                                <a href="#" className="hover:text-emerald-400">
                                    Sistem Informasi Pesantren
                                </a>
                            </li>
                            <li>
                                <a href="#" className="hover:text-emerald-400">
                                    Website Toko Online
                                </a>
                            </li>
                            <li>
                                <a href="#" className="hover:text-emerald-400">
                                    E-Catalog UMKM
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h4 className="mb-8 border-l-4 border-[#006442] pl-4 font-mono text-[10px] font-bold tracking-widest text-white uppercase">
                            Hubungi Kami
                        </h4>
                        <div className="space-y-2 text-sm font-medium text-slate-500">
                            <div className="flex items-start gap-4">
                                <MapPin className="h-5 w-5 shrink-0 text-[#006442]" />
                                <p>
                                    Kec. Batam Kota, Kota Batam,
                                    <br />
                                    Kepulauan Riau
                                </p>
                            </div>
                            <div className="flex items-center gap-4 border-t border-white/5 pt-4">
                                <Phone className="h-5 w-5 text-[#006442]" />
                                <p>+62{contacts.phone}</p>
                            </div>
                            <div className="flex items-center gap-4 border-t border-white/5 pt-4">
                                <Mail className="h-5 w-5 text-[#006442]" />
                                <p>{contacts.email}</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <h4 className="mb-8 border-l-4 border-[#006442] pl-4 font-mono text-[10px] font-bold tracking-widest text-white uppercase">
                            Operational
                        </h4>
                        <div className="flex items-start gap-4 text-sm text-slate-500">
                            <Clock className="h-5 w-5 shrink-0 text-emerald-500" />
                            <div>
                                <p className="mb-1 font-bold text-white">
                                    Senin - Jumat
                                </p>
                                <p>09:00 - 17:00 WIB</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div className="mt-12 flex flex-col items-center gap-8 text-center md:flex-row">
                    <p className="text-[12px] font-bold text-slate-600">
                        © 2026 Web Elijabah. All rights reserved.
                    </p>
                </div>
            </div>
        </footer>
    );
}
