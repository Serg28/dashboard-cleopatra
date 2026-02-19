<?php

use Illuminate\Support\Facades\Route;
use LDK\DashboardCleopatra\Http\Controllers\DashboardController;

Route::prefix('cleopatra-demo')->group(function () {
    Route::get('/analytics', [DashboardController::class, 'analytics'])->name('cleopatra.demo.analytics');
    Route::get('/ecommerce', [DashboardController::class, 'ecommerce'])->name('cleopatra.demo.ecommerce');
    Route::get('/crypto', [DashboardController::class, 'crypto'])->name('cleopatra.demo.crypto');
    Route::get('/ui-elements', [DashboardController::class, 'uiElements'])->name('cleopatra.demo.ui-elements');
    Route::get('/tables', [DashboardController::class, 'tables'])->name('cleopatra.demo.tables');
    Route::get('/forms', [DashboardController::class, 'forms'])->name('cleopatra.demo.forms');
    Route::get('/profile', [DashboardController::class, 'profile'])->name('cleopatra.demo.profile');
    Route::get('/login', [DashboardController::class, 'login'])->name('cleopatra.demo.login');
});
