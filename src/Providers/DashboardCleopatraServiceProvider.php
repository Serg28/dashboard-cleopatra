<?php

namespace LDK\DashboardCleopatra\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class DashboardCleopatraServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../../config/dashboard-cleopatra.php', 'dashboard-cleopatra');
    }

    public function boot()
    {
        Paginator::useTailwind();

        $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'dashboard-cleopatra');

        $this->registerComponents();
        $this->registerRoutes();
        $this->registerIslandFallback();

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../../config/dashboard-cleopatra.php' => config_path('dashboard-cleopatra.php'),
            ], 'dashboard-cleopatra-config');

            $this->publishes([
                __DIR__ . '/../../public/assets' => public_path('vendor/dashboard-cleopatra'),
            ], 'dashboard-cleopatra-assets');
        }
    }

    protected function registerComponents()
    {
        $prefix = 'dashboard-cleopatra-';

        $components = [
            'card' => 'components.card',
            'button' => 'components.button',
            'badge' => 'components.badge',
            'alert' => 'components.alert',
            'dropdown' => 'components.dropdown',
            'modal' => 'components.modal',
            'stats-card' => 'components.stats-card',
            'label' => 'components.label',
            'sidebar' => 'components.sidebar',
            'sidebar-item' => 'components.sidebar-item',
            'sidebar-label' => 'components.sidebar-label',
            'header' => 'components.header',
            'header-item' => 'components.header-item',
            'table' => 'components.table',
            'thead' => 'components.thead',
            'tr' => 'components.tr',
            'th' => 'components.th',
            'td' => 'components.td',
            'input' => 'components.form.input',
            'select' => 'components.form.select',
            'checkbox' => 'components.form.checkbox',
            'textarea' => 'components.form.textarea',
            'login' => 'components.login',
        ];

        foreach ($components as $alias => $view) {
            Blade::component("dashboard-cleopatra::$view", $prefix . $alias);
        }
    }

    protected function registerRoutes()
    {
        if (config('dashboard-cleopatra.demo', false)) {
            Route::middleware('web')->group(__DIR__ . '/../../routes/web.php');
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
