<?php

use App\Http\Controllers\Admin;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Public site
|--------------------------------------------------------------------------
*/
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/donations', [PageController::class, 'donations'])->name('donations');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/contact', [ContactController::class, 'show'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])
    ->middleware('throttle:5,1')
    ->name('contact.store');

/*
|--------------------------------------------------------------------------
| Admin panel
|--------------------------------------------------------------------------
*/
// The framework's "auth" middleware redirects guests to a route named "login".
// Route::redirect('/login', '/admin/login')->name('login');
Route::get('/login',fn()=>redirect()->route('admin.login'));

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('login', [Admin\AuthController::class, 'showLogin'])->name('login');
    Route::post('login', [Admin\AuthController::class, 'login'])->middleware('throttle:10,1')->name('login.attempt');

    Route::middleware('auth')->group(function () {
        Route::post('logout', [Admin\AuthController::class, 'logout'])->name('logout');
        Route::get('/', [Admin\DashboardController::class, 'index'])->name('dashboard');

        Route::get('messages', [Admin\MessageController::class, 'index'])->name('messages.index');
        Route::get('messages/{message}', [Admin\MessageController::class, 'show'])->name('messages.show');
        Route::patch('messages/{message}/toggle-read', [Admin\MessageController::class, 'toggleRead'])->name('messages.toggle');
        Route::delete('messages/{message}', [Admin\MessageController::class, 'destroy'])->name('messages.destroy');

        Route::resource('campaigns', Admin\CampaignController::class)->except('show');

        Route::get('pages', [Admin\PageContentController::class, 'index'])->name('pages.index');
        Route::get('pages/{page}', [Admin\PageContentController::class, 'edit'])->name('pages.edit');
        Route::put('pages/{page}', [Admin\PageContentController::class, 'update'])->name('pages.update');
        Route::delete('pages/{page}', [Admin\PageContentController::class, 'reset'])->name('pages.reset');

        Route::get('settings', [Admin\SettingController::class, 'edit'])->name('settings.edit');
        Route::put('settings', [Admin\SettingController::class, 'update'])->name('settings.update');
    });
});
