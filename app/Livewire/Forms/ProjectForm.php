<?php

namespace App\Livewire\Forms;

use Carbon\Carbon;
use Livewire\Form;
use App\Models\Project;
use Livewire\Attributes\Validate;

class ProjectForm extends Form
{
// 1. Tambahkan properti untuk mengunci instance Project yang diedit
    public ?Project $project = null;

// 2. Definisikan field form Anda
    public $title = '';
    public $client_id = '';
    public $package_id = '';
    public $pm_id = '';
    public $total_budget = '';
    public $status = 'discussion';
    public $description = '';
    public $start_date = '';
    public $deadline = '';

    /**
     * Mengisi form dengan data lama dari database untuk mode EDIT
     */
    public function setProject(Project $project)
    {
        $this->project = $project;

        $this->title = $project->title;
        $this->client_id = $project->client_id;
        $this->package_id = $project->package_id;
        $this->pm_id = $project->pm_id;
        $this->total_budget = $project->total_budget;
        $this->status = $project->status;
        $this->description = $project->description;
        $this->start_date = $project->start_date
            ? Carbon::parse($project->start_date)->format('Y-m-d')
            : '';

        $this->deadline = $project->deadline
            ? Carbon::parse($project->deadline)->format('Y-m-d')
            : '';
    }

    /**
     * Aturan Validasi (Sesuaikan dengan kebutuhan)
     */
    public function rules()
    {
        return [
            'title' => 'required|min:3',
            'client_id' => 'required',
            'package_id' => 'required',
            'total_budget' => 'required|numeric',
            'start_date' => 'required',
            'status' => 'required',
        ];
    }

    public function save()
    {
        $this->validate();

        $data = $this->except(['project']);

        if ($this->project) {
            $this->project->update($data);
            return 'updated';
        }

        Project::create($data);
        return 'created';
    }
}
