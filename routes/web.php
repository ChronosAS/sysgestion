<?php

use Illuminate\Support\Facades\Route;
use Spatie\Permission\Middleware\PermissionMiddleware;

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    Route::get('/', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::middleware(PermissionMiddleware::using('user:access'))
        ->prefix('/usuarios')->group(function(){
            Route::get('/',function(){
                return view('user-administration');
            })->name('users.administration');

            Route::get('/crear',App\Livewire\Users\Create::class)->name('users.create');

            Route::get('/editar/{user}',App\Livewire\Users\Edit::class)->name('users.edit');

            Route::get('/{user}',App\Livewire\Users\Show::class)->name('users.show');
        });

});
