<?php

namespace Database\Seeders;

use App\Models\Client;
use App\Models\User;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    public function run(): void
    {
        // Pastikan ada user untuk dikaitkan ke klien (opsional jika klien punya akun login)
        $user = User::first();

        $clients = [
            [
                'company_name' => 'PT. Global Travel Batam',
                'pic_name' => 'Bapak Ahmad Subarjo',
                'email' => 'contact@globaltravel.com',
                'phone' => '081234567890',
            ],
            [
                'company_name' => 'Pondok Pesantren Madani',
                'pic_name' => 'Ust. Lukman Hakim',
                'email' => 'info@madani.sch.id',
                'phone' => '085712345678',
            ],
            [
                'company_name' => 'Kopi Kenangan Senja',
                'pic_name' => 'Ibu Maya',
                'email' => 'hello@kopisenja.id',
                'phone' => '081987654321',
            ],
            [
                'company_name' => 'Startup Digital Solution',
                'pic_name' => 'Kevin Sanjaya',
                'email' => 'admin@digitalsolution.co',
                'phone' => '082155443322',
            ],
        ];

        foreach ($clients as $client) {
            Client::updateOrCreate(
                ['email' => $client['email']],
                array_merge($client, ['user_id' => $user?->id])
            );
        }
    }
}
