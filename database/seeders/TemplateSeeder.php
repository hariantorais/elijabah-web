<?php

namespace Database\Seeders;

use App\Models\Template;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TemplateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $templates = [
            // ==========================================
            // Biro Travel (ID: 1 - 12)
            // ==========================================
            [
                'id' => 1,
                'uid' => 'TRV-01',
                'category_slug' => 'travel',
                'category_label' => 'Biro Travel',
                'route' => 'demo-travel-1',
                'name' => 'Classic Emerald',
                'desc' => 'Nuansa islami tradisional dengan hijau zamrud dan aksen emas mewah.',
                'image' => 'travel-classic-emerald.png',
                'palette' => ['#064e3b', '#d4af37', '#ffffff']
            ],
            [
                'id' => 2,
                'uid' => 'TRV-02',
                'category_slug' => 'travel',
                'category_label' => 'Biro Travel',
                'route' => 'demo-travel-2',
                'name' => 'Light Elegant',
                'desc' => 'Desain bersih, minimalis, dan lega untuk paket umroh premium.',
                'image' => 'travel-light-elegant.png',
                'palette' => ['#f8fafc', '#0ea5e9', '#64748b']
            ],
            [
                'id' => 3,
                'uid' => 'TRV-03',
                'category_slug' => 'travel',
                'category_label' => 'Biro Travel',
                'route' => 'demo-travel-3',
                'name' => 'Corporate Trust',
                'desc' => 'Tampilan profesional dan kokoh untuk membangun kepercayaan jamaah.',
                'image' => 'travel-corporate-trust.png',
                'palette' => ['#0f172a', '#3b82f6', '#f1f5f9']
            ],
            [
                'id' => 4,
                'uid' => 'TRV-04',
                'category_slug' => 'travel',
                'category_label' => 'Biro Travel',
                'route' => 'demo-travel-4',
                'name' => 'Desert Earth',
                'desc' => 'Warna bumi (sand & clay) yang memberikan nuansa ketenangan ibadah.',
                'image' => 'travel-desert-earth.png',
                'palette' => ['#d4a373', '#faedcd', '#ccd5ae']
            ],
            [
                'id' => 5,
                'uid' => 'TRV-05',
                'category_slug' => 'travel',
                'category_label' => 'Biro Travel',
                'route' => 'demo-travel-5',
                'name' => 'Modern Bold',
                'desc' => 'Tipografi besar dan kontras tinggi untuk target audiens milenial.',
                'image' => 'travel-modern-bold.png',
                'palette' => ['#000000', '#f59e0b', '#ffffff']
            ],
            [
                'id' => 6,
                'uid' => 'TRV-06',
                'category_slug' => 'travel',
                'category_label' => 'Biro Travel',
                'route' => 'demo-travel-6',
                'name' => 'Soft Family',
                'desc' => 'Warna pastel yang ramah dan hangat untuk paket umroh keluarga.',
                'image' => 'travel-soft-family.png',
                'palette' => ['#ecfeff', '#06b6d4', '#ffedd5']
            ],
            [
                'id' => 7,
                'uid' => 'TRV-07',
                'category_slug' => 'travel',
                'category_label' => 'Biro Travel',
                'route' => 'demo-travel-7',
                'name' => 'Dynamic Tech',
                'desc' => 'Gaya aplikasi modern (Startup style) dengan navigasi yang sangat cepat.',
                'image' => 'travel-dynamic-tech.png',
                'palette' => ['#2563eb', '#f8fafc', '#1e40af']
            ],
            [
                'id' => 8,
                'uid' => 'TRV-08',
                'category_slug' => 'travel',
                'category_label' => 'Biro Travel',
                'route' => 'demo-travel-8',
                'name' => 'Royal Majesty',
                'desc' => 'Kombinasi ungu royal dan gold untuk layanan Haji Plus VVIP.',
                'image' => 'travel-royal-majesty.png',
                'palette' => ['#4c1d95', '#fbbf24', '#f5f3ff']
            ],
            [
                'id' => 9,
                'uid' => 'TRV-09',
                'category_slug' => 'travel',
                'category_label' => 'Biro Travel',
                'route' => 'demo-travel-9',
                'name' => 'Warm Sunset',
                'desc' => 'Inspirasi warna langit Makkah saat senja yang penuh emosional.',
                'image' => 'travel-warm-sunset.png',
                'palette' => ['#7c2d12', '#fb923c', '#fff7ed']
            ],
            [
                'id' => 10,
                'uid' => 'TRV-10',
                'category_slug' => 'travel',
                'category_label' => 'Biro Travel',
                'route' => 'demo-travel-10',
                'name' => 'Glassmorphism UI',
                'desc' => 'Efek kaca transparan yang futuristik untuk biro travel modern.',
                'image' => 'travel-glassmorphism.png',
                'palette' => ['#ffffff', '#0ea5e9', '#e0f2fe']
            ],
            [
                'id' => 11,
                'uid' => 'TRV-11',
                'category_slug' => 'travel',
                'category_label' => 'Biro Travel',
                'route' => 'demo-travel-11',
                'name' => 'Midnight Gold',
                'desc' => 'Mode gelap (Dark mode) yang sangat elegan dan eksklusif.',
                'image' => 'travel-midnight-gold.png',
                'palette' => ['#111827', '#d97706', '#374151']
            ],
            [
                'id' => 12,
                'uid' => 'TRV-12',
                'category_slug' => 'travel',
                'category_label' => 'Biro Travel',
                'route' => 'demo-travel-12',
                'name' => 'Serene Minimalist',
                'desc' => 'Sangat sedikit elemen visual, fokus pada ketenangan konten.',
                'image' => 'travel-serene.png',
                'palette' => ['#ffffff', '#1e293b', '#94a3b8']
            ],

            // ==========================================
            // UMKM & BISNIS (ID: 13 - 21)
            // ==========================================
            [
                'id' => 13,
                'uid' => 'UMK-01',
                'category_slug' => 'umkm',
                'category_label' => 'UMKM & Bisnis',
                'route' => 'demo-umkm-1',
                'name' => 'Artisan Craft',
                'desc' => 'Desain earthy dan estetik untuk produk kerajinan tangan atau handmade.',
                'image' => 'umkm-artisan.png',
                'palette' => ['#78350f', '#fef3c7', '#d97706']
            ],
            [
                'id' => 14,
                'uid' => 'UMK-02',
                'category_slug' => 'umkm',
                'category_label' => 'UMKM & Bisnis',
                'route' => 'demo-umkm-2',
                'name' => 'Fashion Chic',
                'desc' => 'Minimalist & Elegant untuk brand fashion, hijab, atau butik pakaian.',
                'image' => 'umkm-fashion.png',
                'palette' => ['#db2777', '#fdf2f8', '#292524']
            ],
            [
                'id' => 15,
                'uid' => 'UMK-03',
                'category_slug' => 'umkm',
                'category_label' => 'UMKM & Bisnis',
                'route' => 'demo-umkm-3',
                'name' => 'Professional Service',
                'desc' => 'Terpercaya & Cepat untuk jasa service AC, renovasi, atau bengkel.',
                'image' => 'umkm-service.png',
                'palette' => ['#2563eb', '#facc15', '#1e293b']
            ],
            [
                'id' => 16,
                'uid' => 'UMK-04',
                'category_slug' => 'umkm',
                'category_label' => 'UMKM & Bisnis',
                'route' => 'demo-umkm-4',
                'name' => 'Earthy Organic',
                'desc' => 'Desain natural untuk produk organik, skincare herbal, atau tanaman hias.',
                'image' => 'umkm-organic.png',
                'palette' => ['#4F6F52', '#fbfaf8', '#5c4d3c']
            ],
            [
                'id' => 17,
                'uid' => 'UMK-05',
                'category_slug' => 'umkm',
                'category_label' => 'UMKM & Bisnis',
                'route' => 'demo-umkm-5',
                'name' => 'Urban Edgy',
                'desc' => 'Neo-Brutalism untuk streetwear, barbershop, atau cuci sepatu premium.',
                'image' => 'umkm-urban.png',
                'palette' => ['#ef4444', '#09090b', '#fafafa']
            ],
            [
                'id' => 18,
                'uid' => 'UMK-06',
                'category_slug' => 'umkm',
                'category_label' => 'UMKM & Bisnis',
                'route' => 'demo-umkm-6',
                'name' => 'Calming Beauty',
                'desc' => 'Soft & Luxurious untuk klinik kecantikan, spa, atau salon muslimah.',
                'image' => 'umkm-beauty.png',
                'palette' => ['#81629d', '#f8f6fa', '#513d63']
            ],
            [
                'id' => 19,
                'uid' => 'UMK-07',
                'category_slug' => 'umkm',
                'category_label' => 'UMKM & Bisnis',
                'route' => 'demo-umkm-7',
                'name' => 'Tech Solution',
                'desc' => 'Modern & Digital untuk startup, agensi IT, atau jasa pembuatan web.',
                'image' => 'umkm-tech.png',
                'palette' => ['#0284c7', '#06b6d4', '#f8fafc']
            ],
            [
                'id' => 20,
                'uid' => 'UMK-08',
                'category_slug' => 'umkm',
                'category_label' => 'UMKM & Bisnis',
                'route' => 'demo-umkm-8',
                'name' => 'Heritage Story',
                'desc' => 'Classic & Authentic untuk batik, jamu herbal, atau produk budaya.',
                'image' => 'umkm-heritage.png',
                'palette' => ['#8c1c1c', '#f6f3eb', '#b8992e']
            ],
            [
                'id' => 21,
                'uid' => 'UMK-09',
                'category_slug' => 'umkm',
                'category_label' => 'UMKM & Bisnis',
                'route' => 'demo-umkm-9',
                'name' => 'Arabian Taste',
                'desc' => 'Warm & Middle Eastern untuk resto khas Arab atau oleh-oleh haji.',
                'image' => 'umkm-arabian.png',
                'palette' => ['#ce5a43', '#f5efe6', '#3d2b1f']
            ],

            // ==========================================
            // Pendidikan & Institusi (ID: 22)
            // ==========================================
            [
                'id' => 22,
                'uid' => 'EDU-01',
                'category_slug' => 'education',
                'category_label' => 'Pendidikan & Institusi',
                'route' => 'demo-education-1',
                'name' => 'Akademi Nusantara',
                'desc' => 'Institusi formal dengan fitur PPDB, berita, dan alur pendaftaran lengkap.',
                'image' => 'edu-akademi.png',
                'palette' => ['#1e3a8a', '#f59e0b', '#f8fafc']
            ],
            [
                'id' => 23,
                'uid' => 'EDU-02',
                'category_slug' => 'education',
                'category_label' => 'Pendidikan & Institusi',
                'route' => 'demo-education-2',
                'name' => 'EduHub Digital Academy',
                'desc' => 'Platform Edutech & LMS modern dengan fokus pada kursus pemrograman dan teknologi.',
                'image' => 'edu-edutech.png',
                'palette' => ['#4f46e5', '#0f172a', '#f8fafc']
            ],
            [
                'id' => 24,
                'uid' => 'EDU-03',
                'category_slug' => 'education',
                'category_label' => 'Pendidikan & Institusi',
                'route' => 'demo-education-3',
                'name' => 'Global Heritage International',
                'desc' => 'Desain prestisius untuk sekolah internasional dengan kurikulum Cambridge atau IB.',
                'image' => 'edu-international.png',
                'palette' => ['#0f172a', '#d4af37', '#f1f5f9']
            ],
            [
                'id' => 25,
                'uid' => 'EDU-04',
                'category_slug' => 'education',
                'category_label' => 'Pendidikan & Institusi',
                'route' => 'demo-education-4',
                'name' => 'Politeknik Harapan Bangsa',
                'desc' => 'Template kampus formal dengan struktur birokrasi, fakultas, dan riset yang mendalam.',
                'image' => 'edu-university.png',
                'palette' => ['#7f1d1d', '#ffffff', '#1e293b']
            ],
            [
                'id' => 26,
                'uid' => 'EDU-05',
                'category_slug' => 'education',
                'category_label' => 'Pendidikan & Institusi',
                'route' => 'demo-education-5',
                'name' => 'Little Bloom Preschool',
                'desc' => 'Desain ceria dan aman untuk TK/PAUD dengan fokus pada aktivitas bermain dan galeri anak.',
                'image' => 'edu-kindergarten.png',
                'palette' => ['#f43f5e', '#0ea5e9', '#fbbf24']
            ],
            [
                'id' => 27,
                'uid' => 'EDU-06',
                'category_slug' => 'education',
                'category_label' => 'Pendidikan & Institusi',
                'route' => 'demo-education-6',
                'name' => 'TechLink Vocational School',
                'desc' => 'Profil SMK/Vokasi dengan penonjolan fasilitas bengkel, lab, dan partner industri.',
                'image' => 'edu-vocational.png',
                'palette' => ['#059669', '#ea580c', '#f9fafb']
            ],
            [
                'id' => 28,
                'uid' => 'EDU-07',
                'category_slug' => 'education',
                'category_label' => 'Pendidikan & Institusi',
                'route' => 'demo-education-7',
                'name' => 'Vanguard Creative Bootcamp',
                'desc' => 'Gaya Neo-Brutalism yang unik untuk akademi desain, coding, dan seni digital.',
                'image' => 'edu-bootcamp.png',
                'palette' => ['#ccff00', '#000000', '#b088f9']
            ],
            [
                'id' => 29,
                'uid' => 'EDU-08',
                'category_slug' => 'education',
                'category_label' => 'Pendidikan & Institusi',
                'route' => 'demo-education-8',
                'name' => 'Darul Ilmi Modern Boarding',
                'desc' => 'Template Pesantren Modern dengan estetika bersih, fokus pada Tahfidz dan IT.',
                'image' => 'edu-pesantren.png',
                'palette' => ['#064e3b', '#FDFBF7', '#b45309']
            ],
            [
                'id' => 30,
                'uid' => 'EDU-09',
                'category_slug' => 'education',
                'category_label' => 'Pendidikan & Institusi',
                'route' => 'demo-education-9',
                'name' => 'Bumi Pertiwi Nature School',
                'desc' => 'Desain organik dan earthy untuk sekolah alam, Montessori, atau Eco-school.',
                'image' => 'edu-nature.png',
                'palette' => ['#2c3d30', '#c07f67', '#8b9d83']
            ],
            [
                'id' => 31,
                'uid' => 'EDU-10',
                'category_slug' => 'education',
                'category_label' => 'Pendidikan & Institusi',
                'route' => 'demo-education-10',
                'name' => 'Veritas Executive B-School',
                'desc' => 'Estetika korporat/eksekutif untuk lembaga kursus manajemen, MBA, dan sertifikasi.',
                'image' => 'edu-business.png',
                'palette' => ['#050505', '#d91636', '#e5e5e5']
            ],
            [
                'id' => 32,
                'uid' => 'PORT-01',
                'category_slug' => 'portfolio',
                'category_label' => 'Portfolio & Personal Branding',
                'route' => 'demo-portfolio-1',
                'name' => 'The Medical Executive',
                'desc' => 'Desain otoritatif dan premium khusus untuk Dokter Spesialis, Konsultan Medis, atau Tokoh Publik.',
                'image' => 'port-medical.png',
                'palette' => ['#0f172a', '#0284c7', '#0d9488']
            ],
            [
                'id' => 33,
                'uid' => 'PORT-02',
                'category_slug' => 'portfolio',
                'category_label' => 'Portfolio & Personal Branding',
                'route' => 'demo-portfolio-2',
                'name' => 'The Visual Storyteller',
                'desc' => 'Desain ultra-minimalis dengan grid Masonry, direkomendasikan untuk Fotografer, Videografer, atau Seniman Visual.',
                'image' => 'port-visual.png',
                'palette' => ['#ffffff', '#18181b', '#a1a1aa']
            ],
            [
                'id' => 34,
                'uid' => 'PORT-03',
                'category_slug' => 'portfolio',
                'category_label' => 'Portfolio & Personal Branding',
                'route' => 'demo-portfolio-3',
                'name' => 'The Architectural Monolith',
                'desc' => 'Desain struktural, berwibawa, dan teknis. Ideal untuk Arsitek, Kontraktor, Konsultan Teknik, atau Desainer Interior.',
                'image' => 'port-architecture.png',
                'palette' => ['#1a1a1a', '#A67C52', '#e5e5e5']
            ],
            [
                'id' => 35,
                'uid' => 'PORT-04',
                'category_slug' => 'portfolio',
                'category_label' => 'Portfolio & Personal Branding',
                'route' => 'demo-portfolio-4',
                'name' => 'The Tech Architect',
                'desc' => 'Gaya Cyber-Minimalist ala Terminal/IDE. Didesain khusus untuk Senior Developer, Data Scientist, atau IT Consultant.',
                'image' => 'port-tech.png',
                'palette' => ['#030712', '#22d3ee', '#34d399']
            ],
            [
                'id' => 36,
                'uid' => 'PORT-05',
                'category_slug' => 'portfolio',
                'category_label' => 'Portfolio & Personal Branding',
                'route' => 'demo-portfolio-5',
                'name' => 'The Interactive Bento',
                'desc' => 'Gaya Bento Grid modern dengan animasi Aurora, Glassmorphism, & Hover FX. Cocok untuk Desainer UI/UX & Creative Coder.',
                'image' => 'port-bento.png',
                'palette' => ['#09090b', '#7c3aed', '#ec4899']
            ],
            [
                'id' => 37,
                'uid' => 'PORT-06',
                'category_slug' => 'portfolio',
                'category_label' => 'Portfolio & Personal Branding',
                'route' => 'demo-portfolio-6',
                'name' => 'The Executive Strategic',
                'desc' => 'Portofolio editorial yang padat konten, otoritatif, dan data-driven. Ideal untuk Konsultan Bisnis, Direktur, atau Advisor.',
                'image' => 'port-executive.png',
                'palette' => ['#0f172a', '#c5a059', '#fdfdfd']
            ],
            [
                'id' => 38,
                'uid' => 'PORT-07',
                'category_slug' => 'portfolio',
                'category_label' => 'Portfolio & Personal Branding',
                'route' => 'demo-portfolio-7',
                'name' => 'The Social Catalyst',
                'desc' => 'Desain vibran ala Media Kit. Cocok untuk Content Creator, YouTuber, Selebgram, Influencer, atau Digital Artist.',
                'image' => 'port-creator.png',
                'palette' => ['#050505', '#d946ef', '#8b5cf6']
            ],
            [
                'id' => 39,
                'uid' => 'PORT-08',
                'category_slug' => 'portfolio',
                'category_label' => 'Portfolio & Personal Branding',
                'route' => 'demo-portfolio-8',
                'name' => 'The Legal Counsel',
                'desc' => 'Desain simetris, formal, dan klasik dengan palet "Old Money". Sangat direkomendasikan untuk Pengacara, Firma Hukum, atau Notaris.',
                'image' => 'port-legal.png',
                'palette' => ['#112A22', '#B8995E', '#F7F5F0']
            ],
            [
                'id' => 40,
                'uid' => 'PORT-09',
                'category_slug' => 'portfolio',
                'category_label' => 'Portfolio & Personal Branding',
                'route' => 'demo-portfolio-9',
                'name' => 'The Gastronomic Canvas',
                'desc' => 'Estetika Fine-Dining yang elegan dan gelap. Sangat direkomendasikan untuk Executive Chef, Konsultan Kuliner, atau Seniman.',
                'image' => 'port-gastronomy.png',
                'palette' => ['#0c0a09', '#c2410c', '#d6d3d1']
            ],
            [
                'id' => 41,
                'uid' => 'PORT-10',
                'category_slug' => 'portfolio',
                'category_label' => 'Portfolio & Personal Branding',
                'route' => 'demo-portfolio-10',
                'name' => 'The Spiritual Guide',
                'desc' => 'Desain Islami yang megah, terang, dan menenangkan (Haramain Palette). Dirancang khusus untuk Mutawwif atau Agensi Travel Religi.',
                'image' => 'port-spiritual.png',
                'palette' => ['#064E3B', '#D4AF37', '#FAFAFA']
            ]
        ];

        foreach ($templates as $data) {
            Template::updateOrCreate(['uid' => $data['uid']], $data);
        }
    }
}
