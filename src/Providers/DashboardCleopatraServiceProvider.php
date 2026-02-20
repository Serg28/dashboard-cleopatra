<?php

namespace LDK\DashboardCleopatra\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class DashboardCleopatraServiceProvider extends ServiceProvider
{
    public function register()
    {
        if (! function_exists('dashboard_rtl')) {
            function dashboard_rtl($rtl, $ltr) {
                return in_array(app()->getLocale(), ['ar', 'he', 'fa']) ? $rtl : $ltr;
            }
        }
    }

    public function boot()
    {
        Paginator::useTailwind();

        $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'dashboard-cleopatra');

        $this->registerComponents();
        $this->registerIslandFallback();

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../../public/assets' => public_path('vendor/dashboard-cleopatra'),
            ], 'dashboard-cleopatra-assets');
        }
    }

    protected function registerComponents()
    {
        $prefix = 'dashboard-';

        $components = [
            'dropdown' => 'components.dropdown',
            'card' => 'components.card',
            'dropdown-header' => 'components.dropdown.header',
            'dropdown-item' => 'components.dropdown.item',
            'button' => 'components.button',
            'table' => 'components.table',
            'table-body' => 'components.table.body',
            'table-header' => 'components.table.header',
            'table-body-col' => 'components.table.body.col',
            'table-body-row' => 'components.table.body.row',
            'table-header-col' => 'components.table.header.col',
            'table-header-row' => 'components.table.header.row',
            'table-option' => 'components.table.option',
            'table-options' => 'components.table.options',
            'table-pagination' => 'components.table.pagination',
            'table-resource-options' => 'components.table.resource-options',
            'pagination' => 'components.pagination',
            'pagination-item' => 'components.pagination.item',
            'pagination-next' => 'components.pagination.next',
            'pagination-pervious' => 'components.pagination.pervious',
            'form' => 'components.form',
            'form-input' => 'components.form.input',
            'form-select' => 'components.form.select',
            'form-textarea' => 'components.form.textarea',
            'form-label' => 'components.form.label',
            'form-submit' => 'components.form.submit',
            'form-dismiss' => 'components.form.dismiss',
            'form-image' => 'components.form.image',
            'form-range' => 'components.form.range',
            'flex' => 'components.flex',
            'grid' => 'components.grid',
            'row' => 'components.row',
            'col' => 'components.col',
            'tab' => 'components.tab',
            'tabs' => 'components.tabs',
            'loading' => 'components.loading',
            'listitem' => 'components.listitem',
            'progress-bar' => 'components.progress-bar',
            'login' => 'components.login',
            'app-blank' => 'layouts.blank',
            'app-full' => 'layouts.full',
            'container' => 'components.container',
        ];

        foreach ($components as $alias => $view) {
            Blade::component("dashboard-cleopatra::$view", $prefix . $alias);
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
