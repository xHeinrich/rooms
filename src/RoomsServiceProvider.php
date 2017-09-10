<?php

namespace xHeinrich\Rooms;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

class RoomsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerRoutes();
        $this->registerResources();
        $this->defineAssetPublishing();
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->configure();
    }

    public function configure()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/rooms.php', 'rooms'
        );
    }

    public function registerRoutes()
    {
        Route::group([
            'prefix' => 'rooms',
            'namespace' => 'xHeinrich\Rooms\Http\Controllers',
            'middleware' => 'web',
        ], function () {
            $this->loadRoutesFrom(__DIR__.'/../routes/routes.php');
        });
    }

    public function registerResources()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'rooms');
    }

    public function defineAssetPublishing()
    {
        $this->migrationsPublishing();
        $this->viewsPublishing();
    }

    public function migrationsPublishing()
    {
        $this->loadMigrationsFrom(__DIR__ . '../resources/migrations');
    }

    public function viewsPublishing()
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'rooms');
        $this->publishes([
            __DIR__ . '/../resources/views' => base_path('resources/views/vendor/rooms'),
        ]);
    }
}
