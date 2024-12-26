<?php

use App\Livewire\Counter;
use Illuminate\Support\Facades\Route;

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('contact', 'livewire.contact')
    ->middleware(['auth'])
    ->name('contact');

Route::view('template', 'livewire.template')
    ->middleware(['auth'])
    ->name('template');

Route::view('campaign', 'livewire.campaign')
    ->middleware(['auth'])
    ->name('campaign');

Route::view('mail-log', 'livewire.mail-log')
    ->middleware(['auth'])
    ->name('mail-log');

Route::view('relatorio', 'livewire.relatorio')
    ->middleware(['auth'])
    ->name('relatorio');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

    Route::get('/counter', Counter::class);
require __DIR__.'/auth.php';