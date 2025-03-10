<?php

use App\Http\Controllers\ElderProgramIdCard;
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

    Route::get('/carnet/{id}', ElderProgramIdCard::class)->name('elder-program-card');

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

    Route::middleware(PermissionMiddleware::using('application:access'))
        ->prefix('/solicitudes')->group(function(){

            Route::get('/',App\Livewire\Applications\Index::class)->name('applications.index');

            Route::get('/crear',App\Livewire\Applications\Create::class)->name('applications.create');

            Route::get('/{application:code}',App\Livewire\Applications\Show::class)->name('applications.show');

            Route::get('/editar/{application:code}',App\Livewire\Applications\Edit::class)->name('applications.edit');
        });

    Route::middleware(PermissionMiddleware::using('application:access'))
        ->prefix('/programa-abuelos-lecheria')->group(function(){

            Route::middleware(PermissionMiddleware::using('application:access'))
            ->prefix('/pension')->group(function(){

                Route::get('/',App\Livewire\ElderProgram\Pension\Index::class)->name('elder-program.pension.index');

                Route::get('/reporte/pdf/{pensionReport}',App\Http\Controllers\ElderProgramPensionReport::class)->name('elder-program.pension.report');

                Route::get('/reporte/{pensionReport:code}',App\Livewire\ElderProgram\Pension\Show::class)->name('elder-program.pension.show');
            });

            Route::get('/reporte-ingreso',function(){
                return view('livewire.elder-program.application-report');
            });

            Route::get('/',App\Livewire\ElderProgram\Index::class)->name('elder-program.index');

            Route::get('/crear',App\Livewire\ElderProgram\Create::class)->name('elder-program.create');

            Route::get('/{elderProgramMember}',App\Livewire\ElderProgram\Show::class)->name('elder-program.show');

            Route::get('/editar/{elderProgramMember}',App\Livewire\ElderProgram\Edit::class)->name('elder-program.edit');

        });

    // Route::middleware(PermissionMiddleware::using('application:access'))
    // ->prefix('/carnetizacion')->group(function(){
    //     Route::get('/',App\Livewire\ElderId\Index::class)->name('elder-identification.index');
    // });

    Route::middleware(PermissionMiddleware::using('medicine:access'))
        ->prefix('/medicamentos')->group(function(){
            Route::get('/',App\Livewire\Medicines\Index::class)->name('medicines.index');
        });

});
