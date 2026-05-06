import { motion, AnimatePresence } from 'framer-motion';
import { Menu, X, ArrowRight, MessageCircle } from 'lucide-react';
import React, { useState, useEffect } from 'react';

export default function Navbar() {
    const [isScrolled, setIsScrolled] = useState(false);
    const [isMobileMenuOpen, setIsMobileMenuOpen] = useState(false);

    // Monitoring scroll untuk efek transisi navbar
    useEffect(() => {
        const handleScroll = () => {
            setIsScrolled(window.scrollY > 10);
        };
        window.addEventListener('scroll', handleScroll);

        return () => window.removeEventListener('scroll', handleScroll);
    }, []);

    const navLinks = [
        { name: 'Layanan', href: '#layanan' },
        { name: 'Harga', href: '#harga' },
        { name: 'Portfolio', href: '#demo' },
        { name: 'Proses', href: '#proses' },
    ];

    return (
        <nav
            className={`fixed top-0 right-0 left-0 z-[150] border-b transition-all duration-300 ${
                isScrolled
                    ? 'border-slate-100 bg-white/90 py-3 shadow-sm backdrop-blur-xl'
                    : 'border-transparent bg-white py-5'
            }`}
        >
            <div className="mx-auto flex max-w-7xl items-center justify-between px-6">
                {/* LOGO */}
                <div className="flex items-center gap-2">
                    <div className="flex h-8 w-8 items-center justify-center rounded-lg bg-[#006442] font-black text-white italic shadow-md">
                        EI
                    </div>
                    <span className="text-xl tracking-tighter">
                        Web
                        <span className="font-black text-[#006442]">
                            Elijabah
                        </span>
                    </span>
                </div>

                {/* DESKTOP MENU - Rapi & Spacing Lega */}
                <div className="hidden items-center gap-10 lg:flex">
                    {navLinks.map((link) => (
                        <a
                            key={link.name}
                            href={link.href}
                            className="group relative text-[11px] font-black tracking-[0.2em] text-slate-500 uppercase transition-colors hover:text-[#006442]"
                        >
                            {link.name}
                            <span className="absolute -bottom-1 left-0 h-0.5 w-0 bg-[#006442] transition-all group-hover:w-full"></span>
                        </a>
                    ))}
                </div>

                {/* CTA BUTTON - Bold & Professional */}
                <div className="hidden lg:block">
                    <motion.button
                        whileHover={{ scale: 1.03 }}
                        whileTap={{ scale: 0.97 }}
                        className="flex items-center gap-2 rounded-xl bg-slate-900 px-8 py-3 text-[11px] font-black tracking-widest text-white uppercase shadow-lg shadow-slate-900/10 transition-all hover:bg-[#006442]"
                    >
                        Hubungi Kami <ArrowRight className="h-4 w-4" />
                    </motion.button>
                </div>

                {/* MOBILE MENU BUTTON */}
                <button
                    className="p-2 text-slate-900 lg:hidden"
                    onClick={() => setIsMobileMenuOpen(!isMobileMenuOpen)}
                >
                    {isMobileMenuOpen ? (
                        <X className="h-6 w-6" />
                    ) : (
                        <Menu className="h-6 w-6" />
                    )}
                </button>
            </div>

            {/* MOBILE NAVIGATION OVERLAY */}
            <AnimatePresence>
                {isMobileMenuOpen && (
                    <motion.div
                        initial={{ opacity: 0, height: 0 }}
                        animate={{ opacity: 1, height: 'auto' }}
                        exit={{ opacity: 0, height: 0 }}
                        className="overflow-hidden border-t border-slate-50 bg-white lg:hidden"
                    >
                        <div className="flex flex-col gap-6 px-6 py-10">
                            {navLinks.map((link) => (
                                <a
                                    key={link.name}
                                    href={link.href}
                                    onClick={() => setIsMobileMenuOpen(false)}
                                    className="group flex items-center justify-between text-2xl font-black text-slate-900"
                                >
                                    {link.name}
                                    <ArrowRight className="h-5 w-5 text-slate-300 transition-colors group-hover:text-[#006442]" />
                                </a>
                            ))}
                            <button className="mt-4 flex items-center justify-center gap-3 rounded-2xl bg-[#006442] py-5 text-center font-black tracking-widest text-white uppercase">
                                <MessageCircle className="h-5 w-5" /> Mulai
                                Konsultasi
                            </button>
                        </div>
                    </motion.div>
                )}
            </AnimatePresence>
        </nav>
    );
}
