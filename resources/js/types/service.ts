export interface Service {
    id: number;
    category: string;
    title: string;
    description: string;
    features: string[];
    accent?: 'emerald' | 'blue' | 'slate';
}

export interface PageProps {
    services: Service[];
    [key: string]: any;
}
