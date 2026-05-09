<?php

namespace Database\Seeders;

use App\Models\Client;
use App\Models\Project;
use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BusinessSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1. Buat Master Jasa
        $services = [
            [
                'name' => 'Landing Page Eksklusif',
                'slug' => 'landing-page-eksklusif',
                'base_price' => 2500000,
                'features' => ['Custom Design', 'Responsive', 'SEO Setup', '1 Month Support']
            ],
            [
                'name' => 'E-Commerce System',
                'slug' => 'e-commerce-system',
                'base_price' => 7500000,
                'features' => ['Payment Gateway', 'Inventory Management', 'CMS Admin', 'WhatsApp Integration']
            ]
        ];

        foreach ($services as $s) {
            Service::create($s);
        }

        // 2. Buat Klien Contoh
        $client = Client::create([
            'name' => 'Budi Sudarsono',
            'email' => 'budi@company.com',
            'phone' => '08123456789',
            'company_name' => 'PT Maju Terus',
            'address' => 'Batam Center, Batam'
        ]);

        // 3. Buat Proyek Contoh
        Project::create([
            'client_id' => $client->id,
            'service_id' => Service::first()->id,
            'title' => 'Website Company Profile PT Maju Terus',
            'status' => 'on_progress',
            'final_price' => 2500000,
            'deadline' => now()->addDays(14),
        ]);
    }
}
