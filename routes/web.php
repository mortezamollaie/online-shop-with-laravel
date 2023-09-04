<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\Market\CategoryController;

// admin url

Route::prefix('admin')->namespace('Admin')->group(function(){
    Route::get('/', [AdminDashboardController::Class, 'index'])->name('admin.home');

    Route::prefix('market')->namespace('Market')->group(function(){
        //category
        Route::prefix('category')->group(function(){
            Route::get('/', [CategoryController::Class, 'index'])->name('admin.market.category.index');
            Route::get('/create', [CategoryController::Class, 'create'])->name('admin.market.category.create');
            Route::post('/store', [CategoryController::Class, 'store'])->name('admin.market.category.store');
            Route::get('/edit/{id}', [CategoryController::Class, 'edit'])->name('admin.market.category.edit');
            Route::put('/update/{id}', [CategoryController::Class, 'update'])->name('admin.market.category.update');
            Route::delete('/delete/{id}', [CategoryController::Class, 'destroy'])->name('admin.market.category.destroy');
        });
    });
});


