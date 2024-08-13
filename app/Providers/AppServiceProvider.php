<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Spatie\Activitylog\Models\Activity;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Translate Activity desctiption
        Activity::saving(function (Activity $activity) {
            $desc = $activity->description;
            if( $desc == 'updated' || $desc == 'created' || $desc == 'deleted'){
                $activity->description = trans('logs.'.$desc);
            }
        });
    }
}
