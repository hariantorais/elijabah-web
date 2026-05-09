export interface Contact {
    phone: string;
    whatsapp_link: string;
    email: string;
    address: string;
}

export interface Service {
    id: number;
    category: string;
    title: string;
    description: string;
    features: string[];
    accent?: 'emerald' | 'blue' | 'slate';
}

export interface Client {
    id: string;
    name: string;
    email: string;
    phone?: string;
    company_name?: string;
    address?: string;
    internal_notes?: string;
    created_at: string;
}

export interface Invoice {
    id: string;
    project_id: string;
    invoice_number: string;
    amount: number;
    type: 'down_payment' | 'final_payment' | 'full_payment' | 'maintenance';
    status: 'unpaid' | 'paid' | 'expired' | 'refunded';
    due_date?: string;
    paid_at?: string;
    payment_receipt_path?: string;
}

export interface Project {
    id: string;
    client_id: string;
    service_id: number | string; // Gunakan string jika UUID, number jika increment
    title: string;
    status: 'pending' | 'on_progress' | 'review' | 'completed' | 'cancelled';
    start_date?: string;
    deadline?: string;
    final_price: number;
    formatted_price: string; // Data hasil 'append' dari Laravel (Contoh: Rp 2.500.000)
    notes?: string;

    // Relasi (Opsional tergantung query 'with' di Controller)
    client?: Client;
    service?: Service;
    invoices?: Invoice[];
    credentials?: Credential[];

    created_at: string;
    updated_at: string;
}