<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\Market\CategoryController;
use App\Http\Controllers\Admin\Market\BrandController;

use App\Http\Controllers\Admin\Market\CommentController;

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
            Route::delete('/destroy/{id}', [CategoryController::Class, 'destroy'])->name('admin.market.category.destroy');
        });

        //brand
        Route::prefix('brand')->group(function(){
            Route::get('/', [BrandController::Class, 'index'])->name('admin.market.brand.index');
            Route::get('/create', [BrandController::Class, 'create'])->name('admin.market.brand.create');
            Route::post('/store', [BrandController::Class, 'store'])->name('admin.market.brand.store');
            Route::get('/edit/{id}', [BrandController::Class, 'edit'])->name('admin.market.brand.edit');
            Route::put('/update/{id}', [BrandController::Class, 'update'])->name('admin.market.brand.update');
            Route::delete('/destroy/{id}', [BrandController::Class, 'destroy'])->name('admin.market.brand.destroy');
        });

        // comment
        Route::prefix('comment')->group(function(){
            Route::get('/', [CommentController::Class, 'index'])->name('admin.market.comment.index');
            Route::get('/show', [CommentController::Class, 'show'])->name('admin.market.comment.show');
            Route::post('/store', [CommentController::Class, 'store'])->name('admin.market.comment.store');
            Route::get('/edit/{id}', [CommentController::Class, 'edit'])->name('admin.market.comment.edit');
            Route::put('/update/{id}', [CommentController::Class, 'update'])->name('admin.market.comment.update');
            Route::delete('/delete/{id}', [CommentController::Class, 'destroy'])->name('admin.market.comment.destroy');
        });
    });
});


