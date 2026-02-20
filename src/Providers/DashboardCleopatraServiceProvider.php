<?php

namespace LDK\DashboardCleopatra\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class DashboardCleopatraServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        Paginator::useTailwind();

        $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'dashboard-cleopatra');

        $this->registerIslandFallback();

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../../public/assets' => public_path('vendor/dashboard-cleopatra'),
            ], 'dashboard-cleopatra-assets');
        }
    }

    protected function registerIslandFallback()
    {
        if (! array_key_exists('island', Blade::getCustomDirectives())) {
            Blade::directive('island', function ($expression) {
                return "<?php ?>";
            });
            Blade::directive('endisland', function () {
                return "<?php ?>";
            });
        }
    }
}
