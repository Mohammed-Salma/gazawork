<?php

use App\Http\Controllers\Company\CompanyController;
use App\Http\Controllers\Company\ProjectController;
use Illuminate\Support\Facades\Route;

Route::prefix('company')->name('company.')->group(function() {
    // Route::get('/', [CompanyController::class, 'dashboard']);
    Route::redirect('/', '/company/dashboard');
    Route::get('/dashboard', [CompanyController::class, 'dashboard'])->name('dashboard');

    Route::get('projects/status/{project?}', [ProjectController::class, 'edit_status'])->name('projects.edit_status');
    Route::resource('projects', ProjectController::class);
});

//
