<?php

use App\Livewire\Counter;
use App\Livewire\MailLog;
use App\Livewire\Campaign;
use App\Livewire\Relatorio;
use App\Livewire\Contact\Render;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
use App\Livewire\Template\TemplateController;
use App\Http\Controllers\GoogleAuthController;

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::get('/Contact', Render::class)
->middleware(['auth'])
->name('Contact');

Route::get('Templates',TemplateController::class)
->middleware(['auth'])
->name('Templates');

Route::get('template',);

Route::get('campaign', Campaign::class)
    ->middleware(['auth'])
    ->name('campaign');

Route::get('mail-log', MailLog::class)
    ->middleware(['auth'])
    ->name('mail-log');

Route::get('relatorio', Relatorio::class)
    ->middleware(['auth'])
    ->name('relatorio');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

    Route::get('/counter', Counter::class);

    Route::get('/auth/google/redirect', function () {
        return Socialite::driver('google')->redirect();
    })->name('auth.google.redirect');

    Route::get('/auth/google/callback', function () {
        $user = Socialite::driver('google')->user();

        // Aqui você pode registrar ou autenticar o usuário no sistema
        dd($user);
    })->name('auth.google.callback');

    Route::get('/auth/google/redirect', [GoogleAuthController::class, 'redirect'])->name('auth.google.redirect');
Route::get('/auth/google/callback', [GoogleAuthController::class, 'callback'])->name('auth.google.callback');

require __DIR__.'/auth.php';