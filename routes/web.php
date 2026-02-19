<?php

use Illuminate\Support\Facades\Route;
use LDK\DashboardCleopatra\Http\Controllers\DashboardController;

Route::prefix('cleopatra-demo')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');
    Route::get('/analytics', [DashboardController::class, 'analytics'])->name('dashboard.analytics');
    Route::get('/ecommerce', [DashboardController::class, 'ecommerce'])->name('dashboard.ecommerce');
    Route::get('/crypto', [DashboardController::class, 'crypto'])->name('dashboard.crypto');
    Route::get('/ui-elements', [DashboardController::class, 'uiElements'])->name('dashboard.ui-elements');
    Route::get('/tables', [DashboardController::class, 'tables'])->name('dashboard.tables');
    Route::get('/forms', [DashboardController::class, 'forms'])->name('dashboard.forms');
    Route::get('/profile', [DashboardController::class, 'profile'])->name('dashboard.profile');
    Route::get('/login', [DashboardController::class, 'login'])->name('dashboard.login');
});
