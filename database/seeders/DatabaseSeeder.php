<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'name' => 'Harianto Rais',
            'email' => 'ibnurais.abdillah@gmail.com',
            'password' => bcrypt('101293'),
            'role' => 'admin',
        ]);

        $this->call([
            PackageSeeder::class,
            ClientSeeder::class,
            ProjectSeeder::class,
            TemplateSeeder::class,
        ]);
    }
}
