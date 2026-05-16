<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Project extends Model
{

    protected $guarded = [];

    public function getRouteKeyName(): string
    {
        return 'uuid';
    }

    protected $casts = [
        'start_date' => 'date',
        'deadline' => 'date',
    ];

    /**
     * Relasi ke Klien (Setiap proyek punya 1 klien)
     */
    public function client(): BelongsTo
    {
        return $this->belongsTo(Client::class);
    }

    /**
     * Relasi ke PM (User dengan role PM)
     */
    public function projectManager(): BelongsTo
    {
        return $this->belongsTo(User::class, 'pm_id');
    }

    public function package(): BelongsTo
    {
        return $this->belongsTo(Package::class);
    }

    public function invoices()
    {
        return $this->hasMany(Invoice::class);
    }

    /**
     * Mengkapsulasi logika deadline ke dalam satu atribut meta.
     */
    protected function deadlineMeta(): Attribute
    {
        return Attribute::make(
            get: function () {
                if (! $this->deadline) {
                    return null;
                }

                $days = now()->startOfDay()->diffInDays($this->deadline->startOfDay(), false);

                return match (true) {
                    $days > 0 => [
                        'label' => "$days hari lagi",
                        'class' => 'text-blue-500',
                        'urgency' => 'normal',
                    ],
                    $days === 0 => [
                        'label' => 'Hari ini!',
                        'class' => 'text-amber-500 font-bold animate-pulse',
                        'urgency' => 'high',
                    ],
                    default => [
                        'label' => 'Terlewat '.abs($days).' hari',
                        'class' => 'text-red-500',
                        'urgency' => 'overdue',
                    ],
                };
            }
        );
    }

    public function milestones()
    {
        return $this->hasMany(Milestone::class)->orderBy('due_date', 'asc');
    }

    public function tasks()
    {
        return $this->hasManyThrough(Task::class, Milestone::class);
    }

    public function credentials()
    {
        return $this->hasMany(ProjectCredential::class)->latest();
    }
}
