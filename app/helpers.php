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
