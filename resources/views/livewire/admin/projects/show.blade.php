<?php

use function Livewire\Volt\{state, computed, title, mount};
use App\Models\Project;

state(['projectId' => null]);

mount(function(Project $project){
        $this->projectId = $project->id;
});

title('Detail Workspace Projek');

$project = computed(function () {
    return Project::with(['client', 'package'])->findOrFail($this->projectId);
});

?>

<div class="space-y-6" x-data="{ activeTab: 'workspace' }">
    {{-- BARIS HEADER INFORMASI UMUM --}}
    <div class="bg-white dark:bg-gray-800 rounded-2xl border border-gray-100 dark:border-gray-700 shadow-sm overflow-hidden relative">
        <div class="h-1.5 w-full bg-gradient-to-r from-blue-600 via-teal-400 to-blue-500"></div>

        <div class="p-6 flex flex-col md:flex-row gap-6 items-center justify-between">
            <div class="space-y-1 w-full md:flex-1">
                <div class="flex items-center gap-3 mb-2">
                    <a href="{{ route('admin.projects.index') }}" wire:navigate class="h-8 w-8 rounded-full bg-gray-50 dark:bg-gray-700 flex items-center justify-center text-gray-500 hover:bg-gray-200 dark:hover:bg-gray-600 transition-colors">
                        <i class="ri-arrow-left-line"></i>
                    </a>
                    <span class="text-[10px] uppercase tracking-widest font-bold px-2 py-0.5 rounded bg-blue-500/10 text-blue-600">
                        {{ $this->project->package?->name ?? 'Custom Package' }}
                    </span>
                </div>
                <h1 class="text-2xl font-extrabold text-gray-900 dark:text-white">{{ $this->project->title }}</h1>
                <p class="text-sm text-gray-500 font-medium">Klien: <span class="text-gray-800 dark:text-gray-200">{{ $this->project->client?->company_name ?? 'N/A' }}</span></p>
            </div>
        </div>

        {{-- 3 NAVIGASI TAB SEJAJAR --}}
        <div class="flex border-t border-gray-100 dark:border-gray-700 px-6 bg-gray-50/50 dark:bg-gray-800/50 overflow-x-auto scrollbar-none">
            <button @click="activeTab = 'workspace'"
                    :class="activeTab === 'workspace' ? 'border-blue-600 text-blue-600 font-bold' : 'border-transparent text-gray-400 hover:text-gray-600 dark:hover:text-gray-300'"
                    class="py-3.5 px-4 border-b-2 text-sm transition-all flex items-center gap-2 whitespace-nowrap">
                <i class="ri-map-pin-time-line"></i> Tahapan & Tugas
            </button>
            <button @click="activeTab = 'credentials'"
                    :class="activeTab === 'credentials' ? 'border-blue-600 text-blue-600 font-bold' : 'border-transparent text-gray-400 hover:text-gray-600 dark:hover:text-gray-300'"
                    class="py-3.5 px-4 border-b-2 text-sm transition-all flex items-center gap-2 whitespace-nowrap">
                <i class="ri-key-2-line"></i> Aset & Kredensial
            </button>
            <button @click="activeTab = 'finance'"
                    :class="activeTab === 'finance' ? 'border-blue-600 text-blue-600 font-bold' : 'border-transparent text-gray-400 hover:text-gray-600 dark:hover:text-gray-300'"
                    class="py-3.5 px-4 border-b-2 text-sm transition-all flex items-center gap-2 whitespace-nowrap">
                <i class="ri-file-list-3-line"></i> Keuangan & Invoice
            </button>
        </div>
    </div>

    {{-- KONTEN INTERAKTIF TAB (Tetap menggunakan ID Integer demi performa kueri) --}}
    <div>
        <div x-show="activeTab === 'workspace'" x-cloak>
            <livewire:admin.projects.components.milestones :project-id="$projectId" />
        </div>

        <div x-show="activeTab === 'credentials'" x-cloak>
            <livewire:admin.projects.components.credentials :project-id="$projectId" />
        </div>

        <div x-show="activeTab === 'finance'" x-cloak>
            <livewire:admin.projects.components.invoices :project-id="$projectId" />
        </div>
    </div>
</div>
