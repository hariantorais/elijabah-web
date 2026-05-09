<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::with(['client', 'service'])
            ->orderBy('created_at', 'desc')
            ->get();

        return Inertia::render('admin/projects/index', [
            'projects' => $projects
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'client_id' => 'required|exists:clients,id',
            'service_id' => 'required|exists:services,id',
            'title' => 'required|string|max:255',
            'status' => 'required|in:pending,on_progress,review,completed,cancelled',
            'start_date' => 'nullable|date',
            'deadline' => 'nullable|date|after_or_equal:start_date',
            'final_price' => 'required|numeric|min:0',
            'notes' => 'nullable|string',
        ]);

        Project::create($validated);

        return redirect()->back()->with('success', 'Project created successfully.');
    }
}
