<?php

use function Livewire\Volt\{state, computed, mount};
use App\Models\Milestone;
use App\Models\Task;

state([
    'projectId' => null,
    'msName' => '',
    'taskTitles' => [],
    'totalTasks' => 0,
    'completedTasks' => 0,
]);

// Mesin kalkulasi statistik lokal terisolasi
$refreshStats = function () {
    $tasks = Task::whereHas('milestone', fn($q) => $q->where('project_id', $this->projectId))->get();
    $this->totalTasks = $tasks->count();
    $this->completedTasks = $tasks->where('is_completed', true)->count();

    // Kirim sinyal data angka bersih ke browser
    $this->dispatch('milestone-stats-synced', completed: $this->completedTasks, total: $this->totalTasks);
};

mount(function ($projectId) {
    $this->projectId = $projectId;
    $this->refreshStats();
});

$milestones = computed(function () {
    return Milestone::with('tasks')->where('project_id', $this->projectId)->get();
});

$toggleTask = function ($taskId) {
    $task = Task::findOrFail($taskId);
    $task->update([
        'is_completed' => !$task->is_completed,
        'completed_at' => !$task->is_completed ? now() : null
    ]);
    $this->refreshStats();
};

$addTask = function ($msId) {
    $title = $this->taskTitles[$msId] ?? '';
    if (empty(trim($title))) return;

    Task::create(['milestone_id' => $msId, 'title' => $title, 'is_completed' => false]);
    $this->taskTitles[$msId] = '';
    $this->refreshStats();
    $this->dispatch('toast', message: "Tugas baru ditambahkan", type: "success");
};

$updateTask = function ($id, $newTitle) {
    if (empty(trim($newTitle))) return;
    Task::findOrFail($id)->update(['title' => $newTitle]);
    $this->dispatch('toast', message: "Tugas diperbarui", type: "success");
};

$deleteTask = function ($id) {
    Task::findOrFail($id)->delete();
    $this->refreshStats();
    $this->dispatch('toast', message: "Tugas dihapus", type: "success");
};

$addMilestone = function () {
    if (empty(trim($this->msName))) return;
    Milestone::create(['project_id' => $this->projectId, 'name' => $this->msName, 'status' => 'pending']);
    $this->msName = '';
    $this->refreshStats();
    $this->dispatch('toast', message: "Tahapan baru dibuat", type: "success");
};

$updateMilestone = function ($id, $newName) {
    if (empty(trim($newName))) return;
    Milestone::findOrFail($id)->update(['name' => $newName]);
    $this->dispatch('toast', message: "Tahapan diperbarui", type: "success");
};

$deleteMilestone = function ($id) {
    Milestone::findOrFail($id)->delete();
    $this->refreshStats();
    $this->dispatch('toast', message: "Milestone dihapus", type: "success");
};

?>

<div x-data="{
        c: {{ $completedTasks }},
        t: {{ $totalTasks }},
        get pct() { return this.t > 0 ? Math.round((this.c / this.t) * 100) : 0; }
     }"
     @milestone-stats-synced.window="c = $event.detail.completed; t = $event.detail.total"
     @optimistic-toggle.window="c = $event.detail.checked ? c + 1 : c - 1"
     class="space-y-6"
>


    <div class="bg-white dark:bg-gray-800 rounded-2xl border border-gray-100 dark:border-gray-700 shadow-sm p-0 flex flex-col sm:flex-row items-center justify-between gap-4">

        <div class="w-full sm:w-80 rounded-xl p-4 border flex-shrink-0">
            <div class="flex justify-between items-end mb-1.5">
                <span class="text-[10px] font-bold text-gray-400 tracking-wider">PROGRESS WORKSPACE</span>
                <span class="text-xl font-black text-gray-800 dark:text-white leading-none" x-text="pct + '%'"></span>
            </div>
            <div class="flex w-full h-4 bg-gray-200 rounded-full overflow-hidden dark:bg-gray-700">
                <div class="flex flex-col justify-center overflow-hidden bg-success" role="progressbar" :style="`width: ${pct}%`" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <p class="text-[11px] text-gray-400 font-medium mt-1.5 text-right">
                <span x-text="c"></span> dari <span x-text="t"></span> tugas selesai
            </p>
        </div>
    </div>

    @if($this->milestones->isEmpty())
        <div class="text-center py-12 border-2 border-dashed border-gray-200 dark:border-gray-700 rounded-2xl">
            <i class="ri-node-tree text-4xl text-gray-300 dark:text-gray-600 mb-3 block"></i>
            <p class="text-gray-500 font-medium">Belum ada tahapan kerja dibuat.</p>
        </div>
    @else
        {{-- LAYOUT GRID 2 KOLOM DALAM SATU BARIS UNTUK DESKTOP --}}
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            @foreach($this->milestones as $milestone)
                <div wire:key="ms-{{ $milestone->id }}" x-data="{ editingMs: false, newMsName: @js($milestone->name) }" class="bg-white dark:bg-gray-800 rounded-2xl border border-gray-100 dark:border-gray-700 shadow-sm overflow-hidden flex flex-col justify-between h-full">

                    <div>
                        {{-- HEADER MILESTONE --}}
                        <div class="p-4 bg-gray-50/50 dark:bg-gray-800/50 border-b border-gray-100 dark:border-gray-700 flex items-center justify-between min-h-[60px]">
                            <div x-show="!editingMs" class="flex items-center justify-between w-full">
                                <h3 class="font-bold text-gray-800 dark:text-gray-200 text-sm truncate pr-2">{{ $milestone->name }}</h3>
                                <div class="flex items-center gap-3 text-gray-400 dark:text-gray-500 flex-shrink-0">
                                    <button @click="editingMs = true" class="hover:text-blue-500 transition-colors" title="Edit Nama Tahapan">
                                        <i class="ri-edit-line text-lg"></i>
                                    </button>
                                    <button @click="$dispatch('milestone-delete-confirm', {id: '{{$milestone->id}}'})" class="hover:text-red-500 transition-colors" title="Hapus Tahapan">
                                        <i class="ri-delete-bin-line text-lg"></i>
                                    </button>
                                </div>
                            </div>

                            <div x-show="editingMs" x-cloak class="flex items-center gap-2 w-full">
                                <input type="text" x-model="newMsName" @keydown.enter="$wire.updateMilestone({{ $milestone->id }}, newMsName); editingMs = false" class="form-input flex-1 h-9 bg-white dark:bg-gray-900 border-gray-300 dark:border-gray-600 rounded-lg text-sm focus:border-primary focus:ring-1 focus:ring-primary">
                                <button @click="editingMs = false; newMsName = @js($milestone->name)" class="px-3 h-9 text-xs font-bold text-gray-500 hover:bg-gray-100 dark:hover:bg-gray-700 rounded-lg transition-colors">Batal</button>
                                <button @click="$wire.updateMilestone({{ $milestone->id }}, newMsName); editingMs = false" class="px-3 h-9 bg-primary text-white text-xs font-bold rounded-lg hover:bg-primary-dark transition-colors">Simpan</button>
                            </div>
                        </div>

                        {{-- LIST TUGAS UTAMA --}}
                        <div class="divide-y divide-gray-50 dark:divide-gray-700/50">
                            @foreach($milestone->tasks as $task)
                                <div wire:key="task-{{ $task->id }}" x-data="{ editingTask: false, newTaskTitle: @js($task->title) }" class="p-3.5 flex items-center justify-between hover:bg-gray-50 dark:hover:bg-gray-700/30 transition-colors min-h-[56px]">

                                    <div x-show="!editingTask" class="flex items-center justify-between w-full">
                                        <label class="flex items-center gap-3 cursor-pointer flex-1 min-w-0 select-none">
                                            <div class="relative flex items-center justify-center w-5 h-5 flex-shrink-0">
                                                <input type="checkbox"
                                                       wire:click="toggleTask({{ $task->id }})"
                                                       @change="$dispatch('optimistic-toggle', { checked: $el.checked })"
                                                       {{ $task->is_completed ? 'checked' : '' }}
                                                       class="peer appearance-none w-5 h-5 border-2 border-gray-300 dark:border-gray-600 rounded cursor-pointer checked:bg-primary checked:border-primary transition-all">
                                                <i class="ri-check-line absolute text-white text-xs opacity-0 peer-checked:opacity-100 pointer-events-none transition-opacity"></i>
                                            </div>
                                            <span class="text-sm font-medium transition-all duration-300 truncate {{ $task->is_completed ? 'text-gray-400 dark:text-gray-500 line-through' : 'text-gray-700 dark:text-gray-200' }}">
                                                {{ $task->title }}
                                            </span>
                                        </label>

                                        <div class="flex items-center gap-3 text-gray-400 dark:text-gray-500 flex-shrink-0 pl-2">
                                            <button @click="editingTask = true" class="hover:text-blue-500 transition-colors" title="Edit Deskripsi Tugas">
                                                <i class="ri-edit-line text-base"></i>
                                            </button>
                                            <button @click="$dispatch('task-delete-confirm', {id: '{{$task->id}}', title: '{{ addslashes($task->title)}}' })" class="hover:text-red-500 transition-colors" title="Hapus Tugas">
                                                <i class="ri-close-line text-xl"></i>
                                            </button>
                                        </div>
                                    </div>

                                    <div x-show="editingTask" x-cloak class="flex items-center gap-2 w-full">
                                        <input type="text" x-model="newTaskTitle" @keydown.enter="$wire.updateTask({{ $task->id }}, newTaskTitle); editingTask = false" class="form-input flex-1 h-8 bg-white dark:bg-gray-900 border-gray-300 dark:border-gray-600 rounded-lg text-sm focus:border-primary focus:ring-1 focus:ring-primary">
                                        <button @click="editingTask = false; newTaskTitle = @js($task->title)" class="px-2.5 h-8 text-xs font-bold text-gray-500 hover:bg-gray-200 dark:hover:bg-gray-600 rounded transition-colors">Batal</button>
                                        <button @click="$wire.updateTask({{ $task->id }}, newTaskTitle); editingTask = false" class="px-2.5 h-8 bg-primary text-white text-xs font-bold rounded transition-colors">Simpan</button>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    {{-- FORM INLINE TAMBAH TUGAS BARU --}}
                    <div x-data="{ adding: false }" class="p-3 bg-gray-50/50 dark:bg-gray-900/20 border-t border-gray-100 dark:border-gray-700/50">
                        <button x-show="!adding" @click="adding = true; $nextTick(() => $refs.taskInput.focus())" class="text-xs font-semibold text-gray-400 hover:text-primary flex items-center gap-1 transition-colors">
                            <i class="ri-add-line"></i> Tambah Tugas Baru
                        </button>

                        <form x-show="adding" x-cloak x-collapse wire:submit="addTask({{ $milestone->id }})" @submit="adding = false">
                            <div class="flex items-center gap-2">
                                <input type="text" wire:model="taskTitles.{{ $milestone->id }}" x-ref="taskInput"
                                       placeholder="Ketik tugas lalu tekan Enter..."
                                       class="form-input flex-1 h-9 bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-700 rounded-lg text-sm focus:border-primary focus:ring-1 focus:ring-primary">
                                <button type="button" @click="adding = false" class="h-9 px-3 text-xs font-bold text-gray-500 hover:bg-gray-100 dark:hover:bg-gray-700 rounded-lg transition-colors">Batal</button>
                            </div>
                        </form>
                    </div>

                </div>
            @endforeach
        </div>
    @endif

    {{-- FORM INLINE BUAT MILESTONE BARU (Full Width di bawah grid) --}}
    <div x-data="{ adding: false }" class="pt-2">
        <button x-show="!adding" @click="adding = true; $nextTick(() => $refs.msInput.focus())" class="w-full py-3 border-2 border-dashed border-primary/30 text-primary hover:bg-primary/5 rounded-2xl font-bold text-sm transition-colors flex items-center justify-center gap-2">
            <i class="ri-add-circle-fill text-lg"></i> Buat Tahapan Baru
        </button>
        <form x-show="adding" x-cloak x-collapse wire:submit="addMilestone" @submit="adding = false" class="bg-gray-50 dark:bg-gray-800/50 p-4 rounded-2xl border border-gray-200 dark:border-gray-700">
            <input type="text" wire:model="msName" x-ref="msInput"
                   placeholder="Nama Tahapan (contoh: Riset & Desain)"
                   class="form-input w-full h-10 rounded-xl border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-900 focus:border-primary focus:ring-primary mb-3" required>
            <div class="flex justify-end gap-2">
                <button type="button" @click="adding = false" class="px-4 py-2 text-sm font-bold text-gray-500 hover:bg-gray-200 dark:hover:bg-gray-700 rounded-xl">Batal</button>
                <button type="submit" class="px-4 py-2 text-sm font-bold bg-primary text-white hover:bg-primary-dark rounded-xl">Simpan</button>
            </div>
        </form>
    </div>

    <x-ui.confirm-delete method="deleteTask" event="task-delete-confirm" title="Hapus Task"/>
    <x-ui.confirm-delete method="deleteMilestone" event="milestone-delete-confirm" title="Hapus Task"/>
</div>
