<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Task extends Model
{
    protected $guarded = [];

    public function milestone(): BelongsTo
    {
        return $this->belongsTo(Milestone::class);
    }

    protected static function booted(): void
    {
        static::saved(function ($task) {
            $milestone = $task->milestone;
            $project = $milestone->project;

            $totalTasks = $project->tasks()->count();
            $completedTasks = $project->tasks()->where('is_completed', true)->count();

            if ($totalTasks > 0) {
                $progressPercent = ($completedTasks / $totalTasks) * 100;
                $project->update(['progress_percent' => round($progressPercent)]);
            }
        });
    }
}
