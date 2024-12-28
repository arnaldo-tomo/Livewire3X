<?php

use App\Livewire\Campaign;
use App\Livewire\Contact\Render;
use App\Livewire\Counter;
use App\Livewire\MailLog;
use App\Livewire\Relatorio;
use App\Livewire\Template\TemplateController;
use Illuminate\Support\Facades\Route;

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
require __DIR__.'/auth.php';