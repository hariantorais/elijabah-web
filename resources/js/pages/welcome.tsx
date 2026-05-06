import { Head } from '@inertiajs/react';
import { motion } from 'framer-motion';
import { MessageSquare } from 'lucide-react';

import FAQSection from '@/components/landing/faq';
import Footer from '@/components/landing/footer';
import Hero from '@/components/landing/hero';
import Navbar from '@/components/landing/navbar';

import Pricing from '@/components/landing/pricing';
import ProblemSection from '@/components/landing/problem-section';
import ProcessSection from '@/components/landing/process-section';
import TrustBar from '@/components/landing/trustbar';
import WhyChooseUs from '@/components/landing/why-us';
export default function Welcome() {
    return (
        <div className="overflow-x-hidden bg-[#FCFCFC] font-sans text-slate-900 antialiased selection:bg-emerald-100">
            <Head title="Elijabah Web | Jasa Pembuatan Website Travel Umroh | Sekolah | UMKM Termurah" />
            <Navbar />
            <Hero />
            <TrustBar />
            <ProblemSection />
            <WhyChooseUs />
            <Pricing />
            <ProcessSection />
            <FAQSection />
            <Footer />
            <motion.a
                href="https://wa.me/your-number"
                whileHover={{ scale: 1.1 }}
                className="fixed right-10 bottom-10 z-110 rounded-full bg-emerald-500 p-4 text-white shadow-2xl transition-colors hover:bg-emerald-600"
            >
                <MessageSquare className="h-7 w-7" />
            </motion.a>
        </div>
    );
}
