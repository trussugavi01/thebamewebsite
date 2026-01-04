<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AwardsController;
use App\Http\Controllers\SummitController;
use App\Http\Controllers\JudgesController;
use App\Http\Controllers\NominationsController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\WinnersController;
use App\Http\Controllers\SponsorsController;
use App\Http\Controllers\SpeakersController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\TicketsController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\Admin\BlogPostController;
use App\Http\Controllers\Auth\LoginController;

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');

Route::get('/awards', [AwardsController::class, 'index'])->name('awards');
Route::get('/awards/categories', [CategoriesController::class, 'index'])->name('awards.categories');
Route::get('/awards/winners', [WinnersController::class, 'index'])->name('awards.winners');
Route::get('/judges', [JudgesController::class, 'index'])->name('judges');
Route::get('/nominations', [NominationsController::class, 'index'])->name('nominations');
Route::post('/nominations', [NominationsController::class, 'store'])->name('nominations.store');

Route::get('/summit', [SummitController::class, 'index'])->name('summit');
Route::get('/summit/speakers', [SpeakersController::class, 'index'])->name('summit.speakers');
Route::get('/summit/agenda', [AgendaController::class, 'index'])->name('summit.agenda');
Route::get('/summit/tickets', [TicketsController::class, 'index'])->name('summit.tickets');

Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');

Route::get('/sponsors', [SponsorsController::class, 'index'])->name('sponsors');
Route::get('/faq', [FaqController::class, 'index'])->name('faq');
Route::get('/newsletter', [NewsletterController::class, 'index'])->name('newsletter');
Route::post('/newsletter/subscribe', [NewsletterController::class, 'subscribe'])->name('newsletter.subscribe');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::get('/privacy', function () { return view('pages.privacy'); })->name('privacy');
Route::get('/terms', function () { return view('pages.terms'); })->name('terms');
Route::get('/cookies', function () { return view('pages.cookies'); })->name('cookies');

Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{blogPost}', [BlogController::class, 'show'])->name('blog.show');

Route::get('/sitemap.xml', function () {
    $urls = [
        ['loc' => route('home'), 'priority' => '1.0', 'changefreq' => 'weekly'],
        ['loc' => route('about'), 'priority' => '0.9', 'changefreq' => 'monthly'],
        ['loc' => route('awards'), 'priority' => '1.0', 'changefreq' => 'weekly'],
        ['loc' => route('awards.categories'), 'priority' => '0.9', 'changefreq' => 'monthly'],
        ['loc' => route('awards.winners'), 'priority' => '0.8', 'changefreq' => 'monthly'],
        ['loc' => route('judges'), 'priority' => '0.7', 'changefreq' => 'monthly'],
        ['loc' => route('nominations'), 'priority' => '1.0', 'changefreq' => 'weekly'],
        ['loc' => route('summit'), 'priority' => '1.0', 'changefreq' => 'weekly'],
        ['loc' => route('summit.speakers'), 'priority' => '0.8', 'changefreq' => 'monthly'],
        ['loc' => route('summit.agenda'), 'priority' => '0.8', 'changefreq' => 'monthly'],
        ['loc' => route('summit.tickets'), 'priority' => '0.9', 'changefreq' => 'weekly'],
        ['loc' => route('gallery'), 'priority' => '0.7', 'changefreq' => 'weekly'],
        ['loc' => route('blog.index'), 'priority' => '0.8', 'changefreq' => 'daily'],
        ['loc' => route('sponsors'), 'priority' => '0.6', 'changefreq' => 'monthly'],
        ['loc' => route('faq'), 'priority' => '0.7', 'changefreq' => 'monthly'],
        ['loc' => route('newsletter'), 'priority' => '0.6', 'changefreq' => 'monthly'],
        ['loc' => route('contact'), 'priority' => '0.8', 'changefreq' => 'monthly'],
    ];

    $xml = '<?xml version="1.0" encoding="UTF-8"?>';
    $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';
    
    foreach ($urls as $url) {
        $xml .= '<url>';
        $xml .= '<loc>' . $url['loc'] . '</loc>';
        $xml .= '<changefreq>' . $url['changefreq'] . '</changefreq>';
        $xml .= '<priority>' . $url['priority'] . '</priority>';
        $xml .= '<lastmod>' . date('Y-m-d') . '</lastmod>';
        $xml .= '</url>';
    }
    
    $xml .= '</urlset>';
    
    return response($xml, 200)->header('Content-Type', 'application/xml');
})->name('sitemap');

Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    // Main Dashboard
    Route::get('/', [\App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');
    
    Route::post('blog/upload-image', [BlogPostController::class, 'uploadImage'])->name('blog.upload-image');
    Route::resource('blog', BlogPostController::class);
    
    // Gallery categories must come before gallery resource to avoid route conflicts
    Route::prefix('gallery')->name('gallery.')->group(function () {
        Route::resource('categories', \App\Http\Controllers\Admin\GalleryCategoryController::class);
    });
    
    Route::resource('gallery', \App\Http\Controllers\Admin\GalleryController::class);
    
    // Nominations Dashboard
    Route::prefix('nominations')->name('nominations.')->group(function () {
        Route::get('/', [\App\Http\Controllers\Admin\NominationDashboardController::class, 'index'])->name('index');
        Route::get('/export', [\App\Http\Controllers\Admin\NominationDashboardController::class, 'export'])->name('export');
        Route::get('/{nomination}', [\App\Http\Controllers\Admin\NominationDashboardController::class, 'show'])->name('show');
        Route::patch('/{nomination}/status', [\App\Http\Controllers\Admin\NominationDashboardController::class, 'updateStatus'])->name('update-status');
        Route::delete('/{nomination}', [\App\Http\Controllers\Admin\NominationDashboardController::class, 'destroy'])->name('destroy');
        Route::post('/bulk-action', [\App\Http\Controllers\Admin\NominationDashboardController::class, 'bulkAction'])->name('bulk-action');
    });
});
