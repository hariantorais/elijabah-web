<?php

namespace App\Observers;

use App\Models\Invoice;
use App\Models\Project;
use App\Models\Task;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProjectObserver
{
    /**
     * HOOK 1: Berjalan SEBELUM data proyek disimpan ke database.
     * Tugas: Membuatkan UUID unik untuk pengenal luar.
     */
    public function creating(Project $project): void
    {
        $project->uuid = (string) Str::uuid();
    }

    /**
     * Handle the Project "created" event.
     */
    public function created(Project $project): void
    {
        DB::transaction(function () use ($project) {

            if ($project->package && ! empty($project->package->workflow_template)) {
                $templates = $project->package->workflow_template;

                foreach ($templates as $msData) {
                    $milestone = $project->milestones()->create([
                        'name' => $msData['milestone'],
                        'status' => 'pending',
                    ]);

                    if (isset($msData['tasks']) && is_array($msData['tasks'])) {
                        $tasksToInsert = [];
                        foreach ($msData['tasks'] as $taskTitle) {
                            $tasksToInsert[] = [
                                'milestone_id' => $milestone->id,
                                'title' => $taskTitle,
                                'is_completed' => false,
                                'created_at' => now(),
                                'updated_at' => now(),
                            ];
                        }
                        Task::insert($tasksToInsert);
                    }
                }
            }

            $halfBudget = $project->total_budget / 2;
            $datePrefix = now()->format('Ymd');

            Invoice::create([
                'project_id' => $project->id, // Tetap menggunakan ID Integer untuk performa relasi
                'invoice_number' => "INV-{$datePrefix}-{$project->id}01",
                'title' => 'Termin 1: Down Payment (DP) 50%',
                'amount' => $halfBudget,
                'amount_paid' => 0,
                'due_date' => now()->addDays(3),
                'status' => 'unpaid',
            ]);

            Invoice::create([
                'project_id' => $project->id,
                'invoice_number' => "INV-{$datePrefix}-{$project->id}02",
                'title' => 'Termin 2: Pelunasan Sisa Kontrak 50%',
                'amount' => $halfBudget,
                'amount_paid' => 0,
                'due_date' => $project->deadline ?? now()->addDays(30),
                'status' => 'unpaid',
            ]);

        });
    }

    /**
     * Handle the Project "updated" event.
     */
    public function updated(Project $project): void
    {
        //
    }

    /**
     * Handle the Project "deleted" event.
     */
    public function deleted(Project $project): void
    {
        //
    }

    /**
     * Handle the Project "restored" event.
     */
    public function restored(Project $project): void
    {
        //
    }

    /**
     * Handle the Project "force deleted" event.
     */
    public function forceDeleted(Project $project): void
    {
        //
    }
}
