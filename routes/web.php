<?php

use Illuminate\Support\Facades\Gate;
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

    Route::get('/schedules', function () {
        return view('schedules');
    })->name('schedules');

    Route::get('/trainer-area', function () {
        if (! Gate::allows('is-coach')) {
            abort(403);
        }

        return view('trainer-area');
    })->name('trainer-area');
});
