<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\MediaPlatform;
use App\MediaPlatformUrl;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
         MediaPlatform::created(function($platform) {
            MediaPlatformUrl::create(array(
                    'path' => '/',
                    'media_platform_id' => $platform->id
            ));
            
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app->environment() == 'local') {
            $this->app->register('Laracasts\Generators\GeneratorsServiceProvider');
        }


    }
}
