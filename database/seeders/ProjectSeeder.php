<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Client;
use App\Models\Package;
use App\Models\User;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        // Ambil data pendukung
        $clients = Client::all();
        $packages = Package::all();
        $pm = User::where('role', 'pm')->first() ?? User::first();

        if ($clients->isEmpty() || $packages->isEmpty()) {
            return;
        }

        $projectData = [
            [
                'title' => 'Redesign Website Travel & Booking',
                'client_index' => 0, // PT. Global Travel
                'package_slug' => 'paket-bisnis',
                'status' => 'on_progress',
                'deadline_days' => 14,
            ],
            [
                'title' => 'Sistem Informasi Akademik Santri',
                'client_index' => 1, // Ponpes Madani
                'package_slug' => 'paket-custom',
                'status' => 'discussion',
                'deadline_days' => 45,
            ],
            [
                'title' => 'Landing Page Promo Menu Baru',
                'client_index' => 2, // Kopi Kenangan Senja
                'package_slug' => 'paket-branding',
                'status' => 'completed',
                'deadline_days' => 3,
            ],
            [
                'title' => 'E-Commerce Platform B2B',
                'client_index' => 3, // Startup Digital
                'package_slug' => 'paket-custom',
                'status' => 'testing',
                'deadline_days' => 30,
            ],
        ];

        foreach ($projectData as $data) {
            $client = $clients[$data['client_index']];
            $package = $packages->where('slug', $data['package_slug'])->first();

            Project::updateOrCreate(
                ['title' => $data['title'], 'client_id' => $client->id],
                [
                    'description' => 'Proyek pengembangan ' . $data['title'] . ' menggunakan teknologi terbaru.',
                    'package_id' => $package?->id,
                    'pm_id' => $pm?->id,
                    'status' => $data['status'],
                    'total_budget' => $package?->price ?? 0,
                    'start_date' => Carbon::now(),
                    'deadline' => Carbon::now()->addDays($data['deadline_days']),
                ]
            );
        }
    }
}
