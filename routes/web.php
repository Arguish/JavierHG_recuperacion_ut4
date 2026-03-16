<?php

use App\Http\Controllers\tickets;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    //
    Route::get(
        '/tick',
        [tickets::class, 'form']
    )
        ->name('ticket.form');

    Route::post(
        '/tick',
        [tickets::class, 'store']
    )
        ->name('ticket.store');
});
