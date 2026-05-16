<?php

namespace App\Services;

use App\Models\Project;
use Illuminate\Support\Facades\DB;

class ProjectService
{
   /**
    * Logika untuk membuat proyek baru.
    * Menggunakan Database Transaction untuk memastikan integritas data.
    */
   public function createProject(array $data): Project
   {
      return DB::transaction(function () use ($data) {
         $project = Project::create([
            'title' => $data['title'],
            'description' => $data['description'],
            'client_id' => $data['client_id'],
            'status' => 'discussion', // Default status dari PRD
            'budget' => $data['budget'],
         ]);

         // Di sini Anda bisa menambahkan logika tambahan seperti:
         // - Mengirim email notifikasi
         // - Membuat folder di Google Drive via API
         // - Membuat entri default di Kanban Board

         return $project;
      });
   }
}
