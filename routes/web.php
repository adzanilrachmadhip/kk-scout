<?php

use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\CategoryArticleController;
use App\Http\Controllers\Admin\MitraController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\PartnershipController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\StaffController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LandigPageController;
use App\Http\Controllers\Admin\ResearchFieldController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// route for global user
Route::get('/', [LandigPageController::class, 'index'])->name('index');
Route::get('/tentang', [LandigPageController::class, 'tentang'])->name('tentang');
Route::get('/fasilitas', [LandigPageController::class, 'fasilitas'])->name('fasilitas');
Route::get('/penelitian', [LandigPageController::class, 'penelitian'])->name('penelitian');
Route::get('/pengabdian', [LandigPageController::class, 'pengabdian'])->name('pengabdian');
Route::get('/mitra', [LandigPageController::class, 'mitra'])->name('mitra');
Route::get('/tim-kami', [LandigPageController::class, 'staff'])->name('tim');

// route for CMS

Auth::routes();

Route::prefix('admin')->group(function () {
    // Redirect /admin to dashboard if authenticated, otherwise to login
    Route::get('/', function () {
        return redirect()->route('dashboard');
    })->middleware('auth');

    Route::middleware('auth')->group(function () {
        Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');

        Route::resource('articles', ArticleController::class);
        // Route::resource('categories', CategoryArticleController::class);
        Route::resource('partnerships', PartnershipController::class);
        Route::resource('staff', StaffController::class);
        Route::resource('mitra', MitraController::class);
        Route::resource('research-fields', ResearchFieldController::class);
        Route::resource('products', ProductController::class);
        Route::resource('page', PageController::class);
    });
});

