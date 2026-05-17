<?php

use App\Models\Package;
use App\Models\Template;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::get('/', function () {
    $templates = Template::where('is_active', true)->get();

    $categories = collect($templates)->pluck('category_label', 'category_slug')->unique();

    $packages = Package::orderBy('order')->get();

    return view('welcome', compact('templates', 'categories', 'packages'));
})->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::middleware(['admin'])
        ->prefix('admin')
        ->name('admin.')
        ->group(function () {
            Volt::route('/dashboard', 'admin.dashboard.dashboard-page')->name('dashboard');

            Volt::route('/projects', 'admin.projects.index')->name('projects.index');
            Volt::route('/projects/{project}', 'admin.projects.show')->name('projects.show');

            Volt::route('/clients', 'admin.clients.index')->name('clients.index');

            Volt::route('/packages', 'admin.packages.index')->name('packages.index');
        });

    Route::get('/admin/invoices/{invoice:invoice_number}/print', function (\App\Models\Invoice $invoice) {
        $invoice->load('payments');
        return view('admin.invoices.print', compact('invoice'));
    })->name('admin.invoices.print');
});

Volt::route('/login', 'auth.login')->name('login')->middleware('guest');

for ($i = 1; $i <= 12; $i++) {
    Route::get('/demo-travel-' . ($i), function () use ($i) {
        return view('demo-template.travel.demo-travel-' . ($i));
    })->name('demo-travel-' . ($i));
}

for ($i = 1; $i <= 9; $i++) {
    Route::get('/demo-umkm-' . ($i), function () use ($i) {
        return view('demo-template.umkm.demo-umkm-' . ($i));
    })->name('demo-umkm-' . ($i));
}

for ($i = 1; $i <= 10; $i++) {
    Route::get('/demo-education-' . ($i), function () use ($i) {
        return view('demo-template.education.demo-education-' . ($i));
    })->name('demo-education-' . ($i));
}

for ($i = 1; $i <= 10; $i++) {
    Route::get('/demo-portfolio-' . ($i), function () use ($i) {
        return view('demo-template.portfolio.demo-portfolio-' . ($i));
    })->name('demo-portfolio-' . ($i));
}
