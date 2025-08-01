<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\AwardController;
use App\Http\Controllers\Admin\AwardImageController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ExperienceController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CertificateController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FacilitiesController;
use App\Http\Controllers\IndustrialModelController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ValuesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

// Login untuk admin via /login
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');

// Admin routes
Route::prefix('admin')->middleware('auth:admin')->name('admin.')->group(function () {
    // Dashboard
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Experience
    Route::resource('experience', ExperienceController::class);

    // Certificates
    Route::resource('certificates', CertificateController::class);

    // Awards
    Route::resource('awards', AwardController::class);
    Route::delete('award-images/{id}', [AwardController::class, 'deleteImage'])->name('awards.image.delete');

    // Logout
    Route::post('logout', [AuthController::class, 'logout'])->name('logout');

    // Settings
    Route::get('/admin/settings', [AdminController::class, 'edit'])->name('settings.edit');
    Route::put('/admin/settings', [AdminController::class, 'update'])->name('settings.update');
});

// About Routes
Route::get('/history', [AboutController::class, 'history'])->name('history');
Route::get('/profile', [AboutController::class, 'profile'])->name('profile');
Route::get('/organization', [AboutController::class, 'organization'])->name('organization');
Route::get('/vision', [AboutController::class, 'vision'])->name('vision');
Route::get('/policy', [AboutController::class, 'policy'])->name('policy');

Route::prefix('industrial-model')->name('industrial-model.')->group(function () {
    Route::get('/', [IndustrialModelController::class, 'index'])->name('index');
    Route::get('/engineering', [IndustrialModelController::class, 'engineering'])->name('engineering');
    Route::get('/procurement', [IndustrialModelController::class, 'procurement'])->name('procurement');
    Route::get('/construction', [IndustrialModelController::class, 'construction'])->name('construction');
    Route::get('/installation-hookup', [IndustrialModelController::class, 'installationHookup'])->name('installation-hookup');
    Route::get('/commissioning', [IndustrialModelController::class, 'commissioning'])->name('commissioning');
});

// Service Routes
Route::get('/current-project', [ServiceController::class, 'currentProject'])->name('current-project');
Route::get('/experiences', [ServiceController::class, 'experiences'])->name('experiences');

// Facilities Routes
Route::get('/yard-location', [FacilitiesController::class, 'yardLocation'])->name('yard-location');
Route::get('/facility-detail', [FacilitiesController::class, 'facilityDetail'])->name('facility-detail');
Route::get('/labor', [FacilitiesController::class, 'labor'])->name('labor');
Route::get('/capabilities', [FacilitiesController::class, 'capabilities'])->name('capabilities');
Route::get('/constructions-engineering', [FacilitiesController::class, 'constructionsEngineering'])->name('constructions-engineering');

// Values Routes
Route::get('/safety', [ValuesController::class, 'safety'])->name('safety');
Route::get('/quality', [ValuesController::class, 'quality'])->name('quality');
Route::get('/certificate', [ValuesController::class, 'certificate'])->name('certificate');
Route::get('/awards', [ValuesController::class, 'awards'])->name('awards');

// Contact Routes
Route::get('/contact', function() {
    return view('contact');
});