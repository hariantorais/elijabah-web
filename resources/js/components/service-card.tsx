import React from 'react';
import type { Service } from '@/types';

export default function ServiceCard({ category, title, description, features, accent = 'emerald' }: Service) {
    const accents = {
        emerald: 'text-emerald-600 bg-emerald-50',
        blue: 'text-blue-600 bg-blue-50',
        slate: 'text-slate-600 bg-slate-50'
    };

    return (
        <div className="group p-10 rounded-[2.5rem] bg-white border border-slate-100 hover:shadow-2xl hover:-translate-y-2 transition-all duration-500">
            <span className={`text-[10px] font-black uppercase tracking-[0.2em] px-3 py-1 rounded-full ${accents[accent]} mb-6 inline-block`}>
                {category}
            </span>
            <h3 className="text-2xl font-black text-slate-900 mb-4 leading-tight">{title}</h3>
            <p className="text-slate-500 text-sm leading-relaxed mb-8">{description}</p>
            <ul className="space-y-3 mb-10">
                {features.map((f, i) => (
                    <li key={i} className="flex items-center gap-3 text-sm font-semibold text-slate-700">
                        <svg className="w-5 h-5 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={3} d="M5 13l4 4L19 7" />
                        </svg>
                        {f}
                    </li>
                ))}
            </ul>
        </div>
    );
}
