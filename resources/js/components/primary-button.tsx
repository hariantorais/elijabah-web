import React, { ButtonHTMLAttributes } from 'react';

interface Props extends ButtonHTMLAttributes<HTMLButtonElement> {
    className?: string;
}

export default function PrimaryButton({ className = '', children, ...props }: Props) {
    return (
        <button
            {...props}
            className={`inline-flex items-center px-8 py-4 bg-emerald-600 border border-transparent rounded-2xl font-bold text-sm text-white uppercase tracking-widest hover:bg-emerald-700 hover:shadow-xl hover:shadow-emerald-200 transition-all duration-300 disabled:opacity-25 ${className}`}
        >
            {children}
        </button>
    );
}
