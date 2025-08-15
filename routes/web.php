<?php

use App\Http\Controllers\ElderProgramController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use Spatie\Permission\Middleware\PermissionMiddleware;

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    Route::get('/', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/plan-mantenimiento', function () {
        return response()->file(public_path('assets/plan_mantenimiento.pdf'));
    })->name('mintainance-plan');

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

    Route::middleware(PermissionMiddleware::using('elder:access'))->prefix('/programa-abuelos-lecheria')->group(function(){

        Route::middleware(PermissionMiddleware::using('elder-pension:access'))->prefix('/pension')->group(function(){

            Route::get('/',App\Livewire\ElderProgram\Pension\Index::class)->name('elder-program.pension.index');

            Route::get('/reporte/pdf/{pensionReport}',[ElderProgramController::class,'generatePensionReport'])->name('elder-program.pension.report');

            Route::get('/reporte/{pensionReport:code}',App\Livewire\ElderProgram\Pension\Show::class)->name('elder-program.pension.show');
        });

        Route::get('/reporte-ingreso/{elderProgramMember}',[ElderProgramController::class,'generateApplicationReport'])->name('elder-program.application.report');

        Route::get('/carnet/{id}', [ElderProgramController::class,'generateIdCard'])->name('elder-program.card');

        Route::get('/',App\Livewire\ElderProgram\Index::class)->name('elder-program.index');

        Route::get('/crear',App\Livewire\ElderProgram\Create::class)->name('elder-program.create');

        Route::get('/{elderProgramMember}',App\Livewire\ElderProgram\Show::class)->name('elder-program.show');

        Route::get('/editar/{elderProgramMember}',App\Livewire\ElderProgram\Edit::class)->name('elder-program.edit');

    });

    Route::middleware(PermissionMiddleware::using('application:access'))
    ->prefix('/ayuda-social')->group(function(){

        Route::get('/',App\Livewire\SocialHelp\Index::class)->name('social-help.index');

        Route::get('/crear',App\Livewire\SocialHelp\Create::class)->name('social-help.create');

        Route::get('/{application:code}',App\Livewire\SocialHelp\Show::class)->name('social-help.show');

        Route::get('/editar/{application:code}',App\Livewire\SocialHelp\Edit::class)->name('social-help.edit');

    });

    Route::middleware(PermissionMiddleware::using('application:access'))
        ->prefix('/permisos')->group(function(){
            Route::get('/', App\Livewire\Permits\Index::class)->name('permits.index');
            Route::get('/crear', App\Livewire\Permits\Create::class)->name('permits.create');
            Route::get('/{permit}', App\Livewire\Permits\Show::class)->name('permits.show');
            Route::get('/editar/{permit}', App\Livewire\Permits\Edit::class)->name('permits.edit');
            Route::get('/eliminar/{permit}', App\Livewire\Permits\Delete::class)->name('permits.create');
        });

    Route::middleware(PermissionMiddleware::using('medicine:access'))
        ->prefix('/medicamentos')->group(function(){

            Route::middleware(PermissionMiddleware::using('medicine:access'))
            ->prefix('/donaciones')->group(function(){

                Route::get('/',App\Livewire\Medicines\Donations\Index::class)->name('medicines.donations.index');
                Route::get('/reporte',App\Livewire\Medicines\Donations\Report::class)->name('medicines.donations.report');
                Route::get('/crear',App\Livewire\Medicines\Donations\Create::class)->name('medicines.donations.create');
                Route::get('/{donation}',App\Livewire\Medicines\Donations\Show::class)->name('medicines.donations.show');
                // Route::get('/editar/{donation}',App\Livewire\Medicines\Donations\Edit::class)->name('medicines.donations.edit');
            });

        Route::middleware(PermissionMiddleware::using('application:access'))
        ->prefix('/solicitudes')->group(function(){
            Route::get('/', App\Livewire\Medicines\MedicineApplications\Index::class)->name('medicines.medicine-applications.index');
            Route::get('/crear', App\Livewire\Medicines\MedicineApplications\Create::class)->name('medicines.medicine-applications.create');
            // Route::get('/{application}', App\Livewire\Medicines\MedicineApplications\Show::class)->name('medicines.medicine-applications.show');
            // Route::get('/editar/{application}', App\Livewire\Medicines\MedicineApplications\Edit::class)->name('medicines.medicine-applications.edit');
        });

        Route::get('/',App\Livewire\Medicines\Index::class)->name('medicines.index');
    });



});
