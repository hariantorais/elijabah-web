<?php

namespace App\Enums;

enum ProjectStatus: string
{
   case PLANNING = 'planning';
   case DEVELOPMENT = 'development';
   case REVIEW = 'review';
   case COMPLETED = 'completed';
   case MAINTENANCE = 'maintenance';

   public function label(): string
   {
      return match ($this) {
         self::PLANNING => 'Perencanaan',
         self::DEVELOPMENT => 'Dalam Pengembangan',
         self::REVIEW => 'Tahap Ulasan',
         self::COMPLETED => 'Selesai',
         self::MAINTENANCE => 'Pemeliharaan',
      };
   }
}
