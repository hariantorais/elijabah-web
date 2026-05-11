<?php


function settings($key = null, $default = null)
{
   $settings = [
      'app_name' => 'WebElijabah',
      'app_description' => 'Jasa pembuatan website untuk Travel Umroh,
                            Pesantren, dan UMKM termurah dengan standar
                            profesional dan teknologi terbaru. Bikin website
                            tanpa ribet.',
      'app_logo' => asset('favicon.png'),
      'contact_email' => 'cs@elijabah.com',
      'contact_phone' => '+6287756070782',
      'contact_chatbot' => '6282266560192',
      'contact_address' => 'Batam Center, Batam, Kepulauan Riau, Indonesia',
      'social_facebook' => '#',
      'social_twitter' => '#',
      'social_instagram' => '#',
      'social_linkedin' => '#',
   ];
   if ($key === null) {
      return $settings;
   }
   return $settings[$key] ?? $default;
}

function home_services()
{
   return [
      [
         'title' => 'Sistem Umroh',
         'highlight' => '& Travel',
         'tagline' => 'Solusi Land Arrangement',
         'icon' => 'fa-kaaba',
         'color' => 'emerald',
         'description' => 'Jangan lagi pusing dengan manifes jamaah di Excel. Kelola hotel, bus, dan visa dalam satu aplikasi yang rapi.',
         'real_case' => 'Cocok untuk: Agen Travel & Penyedia Land Arrangement.',
         'benefits' => ['Cetak manifes sekali klik', 'Pantau jadwal bus & hotel', 'Laporan keuangan per grup'],
      ],
      [
         'title' => 'Monitor Ekspor',
         'highlight' => '& Logistik',
         'tagline' => 'Pantau Barang Real-Time',
         'icon' => 'fa-ship',
         'color' => 'blue',
         'description' => 'Kendalikan stok gudang dan pengiriman barang antar negara tanpa perlu tanya-tanya lewat telepon terus menerus.',
         'real_case' => 'Cocok untuk: Eksportir, Importir, & Jasa Logistik.',
         'benefits' => ['Tracking posisi barang', 'Manajemen dokumen pabean', 'Notifikasi otomatis ke pembeli'],
      ],
      [
         'title' => 'E-Learning',
         'highlight' => '& Kurikulum',
         'tagline' => 'Digitalisasi Pendidikan',
         'icon' => 'fa-book-open-reader',
         'color' => 'orange',
         'description' => 'Bangun platform belajar mandiri atau homeschooling dengan materi yang terstruktur dan ujian otomatis.',
         'real_case' => 'Cocok untuk: Sekolah, Komunitas Homeschooling, & Kursus.',
         'benefits' => ['Manajemen kurikulum kustom', 'Bank soal & koreksi otomatis', 'Pantau progres belajar anak'],
      ],
      [
         'title' => 'Custom',
         'highlight' => 'ERP Solutions',
         'tagline' => 'Pusat Kendali Bisnis',
         'icon' => 'fa-microchip',
         'color' => 'indigo',
         'description' => 'Punya alur kerja yang unik dan rumit? Kami bangunkan "otak" digital yang menyatukan semua divisi bisnis Anda di satu dashboard.',
         'real_case' => 'Cocok untuk: Perusahaan dengan banyak cabang/divisi.',
         'benefits' => ['Data terpusat & aman', 'Otomasi laporan manajer', 'Akses aman dari mana saja'],
      ],
   ];
}

function home_industries()
{
   // Data tambahan untuk Industry Tags
   return [
      'Logistik & Ekspor',
      'Travel Umroh',
      'Manufaktur',
      'E-Learning',
      'Fintech',
      'Health Care',
      'Real Estate'
   ];
}
