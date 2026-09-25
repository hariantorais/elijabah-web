<?php

use App\Models\Invoice;
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

    Route::post('/admin/upload-markdown', function (Request $request) {
        $request->validate(['image' => 'required|image|max:2048']);
        $path = $request->file('image')->store('posts', 'public');
        return response()->json(['data' => ['filePath' => Storage::url($path)]]);
    })->middleware('auth');

    Route::middleware(['admin'])
        ->prefix('admin')
        ->name('admin.')
        ->group(function () {
            Volt::route('/dashboard', 'admin.dashboard.dashboard-page')->name('dashboard');

            Volt::route('/projects', 'admin.projects.index')->name('projects.index');
            Volt::route('/projects/{project}', 'admin.projects.show')->name('projects.show');

            Volt::route('/clients', 'admin.clients.index')->name('clients.index');

            Volt::route('/packages', 'admin.packages.index')->name('packages.index');

            Volt::route('/posts', 'admin.posts.index')->name('posts.index');
            Volt::route('/posts/create', 'admin.posts.form')->name('posts.create');
            Volt::route('/posts/{post:slug}/edit', 'admin.posts.form')->name('posts.edit');


        });

    Route::get('/admin/invoices/{invoice:invoice_number}/print', function (Invoice $invoice) {
        $invoice->load('payments');

        return view('admin.invoices.print', compact('invoice'));
    })->name('admin.invoices.print');
});

Volt::route('/login', 'auth.login')->name('login')->middleware('guest');

for ($i = 1; $i <= 12; $i++) {
    Route::get('/demo-travel-'.($i), function () use ($i) {
        return view('demo-template.travel.demo-travel-'.($i));
    })->name('demo-travel-'.($i));
}

for ($i = 1; $i <= 9; $i++) {
    Route::get('/demo-umkm-'.($i), function () use ($i) {
        return view('demo-template.umkm.demo-umkm-'.($i));
    })->name('demo-umkm-'.($i));
}

for ($i = 1; $i <= 10; $i++) {
    Route::get('/demo-education-'.($i), function () use ($i) {
        return view('demo-template.education.demo-education-'.($i));
    })->name('demo-education-'.($i));
}

for ($i = 1; $i <= 10; $i++) {
    Route::get('/demo-portfolio-'.($i), function () use ($i) {
        return view('demo-template.portfolio.demo-portfolio-'.($i));
    })->name('demo-portfolio-'.($i));
}

Route::get('/sitemap.xml', function () {
    $baseUrl = config('app.url');
    $now = now()->toAtomString();

    $urls = [
        [
            'loc' => url('/'),
            'lastmod' => $now,
            'changefreq' => 'daily',
            'priority' => '1.0',
        ],
    ];

    // Tambahkan halaman demo templates yang aktif
    $templates = Template::where('is_active', true)->get();
    foreach ($templates as $template) {
        if (\Illuminate\Support\Facades\Route::has($template->route)) {
            $urls[] = [
                'loc' => route($template->route),
                'lastmod' => $template->updated_at ? $template->updated_at->toAtomString() : $now,
                'changefreq' => 'weekly',
                'priority' => '0.8',
            ];
        }
    }

    $xml = '<?xml version="1.0" encoding="UTF-8"?>';
    $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';
    foreach ($urls as $item) {
        $xml .= '<url>';
        $xml .= '<loc>' . htmlspecialchars($item['loc'], ENT_XML1, 'UTF-8') . '</loc>';
        $xml .= '<lastmod>' . $item['lastmod'] . '</lastmod>';
        $xml .= '<changefreq>' . $item['changefreq'] . '</changefreq>';
        $xml .= '<priority>' . $item['priority'] . '</priority>';
        $xml .= '</url>';
    }
    $xml .= '</urlset>';

    return response($xml, 200, [
        'Content-Type' => 'application/xml; charset=utf-8',
    ]);
})->name('sitemap');

Route::redirect('/doc_elijabah26', 'https://drive.google.com/drive/folders/155wccGSuQ4JBdCGegyikgdNFLmEN3xtQ?usp=sharing', 301);

