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

        // Реєстрація хелпера dashboard_rtl, якщо він не визначений
        if (! function_exists('dashboard_rtl')) {
            function dashboard_rtl($rtl, $ltr) {
                // За замовчуванням використовуємо LTR, якщо не арабська мова або іврит
                return in_array(app()->getLocale(), ['ar', 'he', 'fa']) ? $rtl : $ltr;
            }
        }
    }

    public function boot()
    {
        // Використовуємо Tailwind для пагінації
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
        Blade::component('dashboard-cleopatra::components.card', 'cleopatra-card');
        Blade::component('dashboard-cleopatra::components.button', 'cleopatra-button');
        Blade::component('dashboard-cleopatra::components.badge', 'cleopatra-badge');
        Blade::component('dashboard-cleopatra::components.alert', 'cleopatra-alert');
        Blade::component('dashboard-cleopatra::components.dropdown', 'cleopatra-dropdown');
        Blade::component('dashboard-cleopatra::components.modal', 'cleopatra-modal');
        Blade::component('dashboard-cleopatra::components.stats-card', 'cleopatra-stats-card');
        Blade::component('dashboard-cleopatra::components.label', 'cleopatra-label');

        Blade::component('dashboard-cleopatra::components.table', 'cleopatra-table');
        Blade::component('dashboard-cleopatra::components.thead', 'cleopatra-thead');
        Blade::component('dashboard-cleopatra::components.tr', 'cleopatra-tr');
        Blade::component('dashboard-cleopatra::components.th', 'cleopatra-th');
        Blade::component('dashboard-cleopatra::components.td', 'cleopatra-td');

        Blade::component('dashboard-cleopatra::components.form.input', 'cleopatra-input');
        Blade::component('dashboard-cleopatra::components.form.select', 'cleopatra-select');
        Blade::component('dashboard-cleopatra::components.form.checkbox', 'cleopatra-checkbox');
        Blade::component('dashboard-cleopatra::components.form.textarea', 'cleopatra-textarea');
    }

    protected function registerRoutes()
    {
        if (config('dashboard-cleopatra.demo', false)) {
            Route::middleware('web')->group(__DIR__ . '/../../routes/web.php');
        }
    }

    protected function registerIslandFallback()
    {
        // Якщо Livewire 4 не встановлено (і директива @island відсутня),
        // реєструємо її як пусту обгортку для сумісності з Livewire 3
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
