<?php

namespace Database\Seeders;

use App\Models\Package;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $packages = [
            [
                'name' => 'Paket Branding',
                'description' => 'Cocok untuk pedagang, jasa, atau promo produk tunggal. Pengerjaan 2-3 hari.',
                'price' => 1500000,
                'original_price' => null,
                'discount_label' => null,
                'features' => [
                    'Landing Page / Company Profile',
                    'Desain Responsif & Ringan Di HP',
                    'Integrasi WhatsApp Chat',
                    'Include Domain (.com) 1 Tahun',
                    'Keamanan SSL (HTTPS)',
                    'Gratis Revisi 2x',
                ],
                'is_popular' => false,
                'cta_text' => 'Pesan Sekarang',
                'order' => 1,
                // WORKFLOW AUTOMATION: UI Template Populating Framework
                'workflow_template' => [
                    [
                        'milestone' => 'Fase 1: Administrasi & Pemilihan Template',
                        'tasks' => [
                            'Verifikasi pembayaran DP 50% atau Pelunasan',
                            'Klien memilih ID Template dari katalog UI Landing Page',
                            'Klien mengisi formulir materi (Logo, Teks Layanan, No WA)',
                            'Pembelian domain dan instalasi SSL di server staging',
                        ],
                    ],
                    [
                        'milestone' => 'Fase 2: Kloning & Injeksi Konten',
                        'tasks' => [
                            'Kloning source code dari ID Template pilihan ke staging',
                            'Penyesuaian variabel warna CSS global & font sesuai brand klien',
                            'Injeksi materi teks (copywriting) & gambar ke dalam komponen',
                            'Integrasi tombol interaksi WhatsApp Chat melayang',
                        ],
                    ],
                    [
                        'milestone' => 'Fase 3: QA & Serah Terima (Handover)',
                        'tasks' => [
                            'Pengecekan responsivitas tampilan di layar smartphone & tablet',
                            'Pengiriman tautan pratinjau (Live Preview) untuk approval klien',
                            'Pengalihan (pointing) domain staging ke server produksi',
                            'Penyerahan kredensial akses dan penutupan status proyek',
                        ],
                    ],
                ],
            ],
            [
                'name' => 'Paket Bisnis',
                'description' => 'Cocok untuk biro travel, pondok pesantren dan bisnis menengah. Pengerjaan 1-2 minggu.',
                'price' => 3500000,
                'original_price' => 5000000,
                'discount_label' => 'HEMAT 30%',
                'features' => [
                    'Semua Fitur Paket Branding',
                    'Dashboard Admin (Kelola Data)',
                    'Sistem Manajemen Konten (CMS)',
                    'Panduan Penggunaan Lengkap',
                    'Include Hosting & Domain (.com)',
                    'Dukungan Teknis (6 Bulan)',
                    'Email Bisnis (misal: admin@bisnis.com)',
                ],
                'is_popular' => true,
                'cta_text' => 'Ambil Promo Ini',
                'order' => 2,
                // WORKFLOW AUTOMATION: Master Core White-Labeling Framework
                'workflow_template' => [
                    [
                        'milestone' => 'Fase 1: Kickoff & Penentuan Kebutuhan Master',
                        'tasks' => [
                            'Verifikasi pembayaran DP 50%',
                            'Penentuan jenis Proyek Master (Sekolah / Toko Online / Company Dinamis)',
                            'Pengumpulan data master awal dari klien (Data produk / Data struktur lembaga)',
                            'Provisioning server (Setup VPS / Hosting & pembuatan database baru)',
                        ],
                    ],
                    [
                        'milestone' => 'Fase 2: Deployment & White-Labeling Sistem',
                        'tasks' => [
                            'Kloning repositori Project Master ke server produksi klien',
                            'Setup environment (.env), migrasi database, & seed data bawaan',
                            'White-Labeling aplikasi (Ganti Logo, Favicon, Brand Nama, & Footer)',
                            'Konfigurasi Mail SMTP Server untuk sistem notifikasi email otomatis',
                        ],
                    ],
                    [
                        'milestone' => 'Fase 3: Validasi Modul & Edukasi Klien',
                        'tasks' => [
                            'Smoke Testing fungsionalitas utama (fitur checkout / input data admin)',
                            'Pembuatan akun akses Administrator utama untuk klien',
                            'Penyerahan video dokumentasi SOP panduan penggunaan Dashboard Admin',
                            'Penagihan pelunasan sisa pembayaran proyek 50%',
                        ],
                    ],
                    [
                        'milestone' => 'Fase 4: Go-Live & Launching',
                        'tasks' => [
                            'Konfigurasi domain utama klien dan instalasi SSL aktif',
                            'Pembersihan data-data uji coba (cleaning dummy data) di DB produksi',
                            'Penyerahan kredensial penuh dan serah terima proyek resmi selesai',
                        ],
                    ],
                ],
            ],
            [
                'name' => 'Paket Custom',
                'description' => 'Arsitektur sistem yang dibangun 100% mengikuti alur kerja bisnis atau lembaga Anda.',
                'price' => 6500000,
                'original_price' => null,
                'discount_label' => null,
                'features' => [
                    'Semua Fitur Paket Bisnis',
                    'Alur Bisnis Sesuai Permintaan',
                    'Integrasi Pembayaran Online (Midtrans/Xendit)',
                    'Sistem Database Skala Besar',
                    'Pemeliharaan & Update Prioritas',
                    'Optimasi SEO Advance',
                    'Keamanan Server Lapis Ganda',
                ],
                'is_popular' => false,
                'cta_text' => 'Konsultasi Gratis',
                'order' => 3,
                // WORKFLOW AUTOMATION: Universal SDLC Framework (Fleksibel)
                'workflow_template' => [
                    [
                        'milestone' => 'Fase 1: Inisiasi & Analisis Kebutuhan (Discovery Phase)',
                        'tasks' => [
                            'Sesi Kick-off Meeting bersama tim klien untuk penyelarasan visi',
                            'Penyusunan Dokumen Spesifikasi Kebutuhan Sistem (BRD / SRS)',
                            'Persetujuan tertulis (Sign-off) dokumen kebutuhan oleh pihak klien',
                        ],
                    ],
                    [
                        'milestone' => 'Fase 2: Perancangan Arsitektur & UI/UX (Design Phase)',
                        'tasks' => [
                            'Perancangan Arsitektur Basis Data (ERD) & Alur Logika Sistem (Flowchart)',
                            'Pembuatan Prototipe Desain Antarmuka Komponen Utama (Figma Wireframe/UI)',
                            'Sesi Review Desain dan Persetujuan Visual Akhir (UI Sign-off) dari klien',
                        ],
                    ],
                    [
                        'milestone' => 'Fase 3: Pengembangan Inti (Core Development & Sprints)',
                        'tasks' => [
                            'Setup Git Repositori, Environment Staging, & Server Sandbox',
                            'Pengembangan Logika Bisnis Utama dan Arsitektur API (Backend)',
                            'Implementasi Komponen Antarmuka yang Responsif & Dinamis (Frontend)',
                            'Integrasi Sistem Pihak Ketiga / Layanan API Eksternal',
                        ],
                    ],
                    [
                        'milestone' => 'Fase 4: Pengujian & Penjaminan Mutu (QA & Testing)',
                        'tasks' => [
                            'Pengujian mandiri internal (Alpha Testing / Functional Bug Hunting)',
                            'Sesi UAT (User Acceptance Testing) bersama klien di server staging',
                            'Eksekusi Perbaikan Bug (Bug Fixing) berdasarkan catatan UAT',
                        ],
                    ],
                    [
                        'milestone' => 'Fase 5: Peluncuran & Penyerahan (Deployment & Handover)',
                        'tasks' => [
                            'Migrasi sistem dan database ke server produksi resmi (Go-Live)',
                            'Penyusunan dokumen panduan penggunaan sistem / Video SOP Dokumentasi',
                            'Penyerahan hak akses kredensial penuh, source code, & berita acara selesai',
                        ],
                    ],
                ],
            ],
        ];

        foreach ($packages as $package) {
            Package::updateOrCreate(
                ['slug' => Str::slug($package['name'])], // Unik berdasarkan slug
                [
                    'name' => $package['name'],
                    'description' => $package['description'],
                    'price' => $package['price'],
                    'original_price' => $package['original_price'],
                    'discount_label' => $package['discount_label'],
                    'features' => $package['features'],
                    'is_popular' => $package['is_popular'],
                    'cta_text' => $package['cta_text'],
                    'order' => $package['order'],
                    'workflow_template' => $package['workflow_template'], // Kolom JSON terisi otomatis
                ]
            );
        }
    }
}
