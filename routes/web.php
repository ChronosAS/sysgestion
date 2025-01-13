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

            Route::get('/{user}',App\Livewire\Users\Show::class)->name('user.show');
        });

    Route::middleware(PermissionMiddleware::using('official:access'))
        ->prefix('/funcionarios')->group(function(){

            Route::get('/',App\Livewire\Officials\Index::class)->name('officials.index');

            Route::get('/crear',App\Livewire\Officials\Create::class)->name('officials.create');

            Route::get('/{official}',App\Livewire\Officials\Show::class)->name('officials.show');

            Route::get('/editar/{official}',App\Livewire\Officials\Edit::class)->name('officials.edit');
        });

    Route::middleware(PermissionMiddleware::using('request:access'))
        ->prefix('/solicitudes')->group(function(){

            Route::get('/',App\Livewire\Requests\Index::class)->name('requests.index');

            Route::get('/crear',App\Livewire\Requests\Create::class)->name('requests.create');

            Route::get('/{official}',App\Livewire\Requests\Show::class)->name('requests.show');

            Route::get('/editar/{official}',App\Livewire\Requests\Edit::class)->name('requests.edit');
        });

    Route::middleware(PermissionMiddleware::using('medicine:access'))
        ->prefix('/medicamentos')->group(function(){
            Route::get('/',App\Livewire\Medicines\Index::class)->name('medicines.index');
        });

});
