<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\Market\CategoryController;
use App\Http\Controllers\Admin\Market\BrandController;

use App\Http\Controllers\Admin\Market\CommentController;

use App\Http\Controllers\Admin\Market\DeliveryController;

use App\Http\Controllers\Admin\Market\DiscountController;

use App\Http\Controllers\Admin\Market\OrderController;

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

        //market
        Route::prefix('delivery')->group(function(){
            Route::get('/', [DeliveryController::Class, 'index'])->name('admin.market.delivery.index');
            Route::get('/create', [DeliveryController::Class, 'create'])->name('admin.market.delivery.create');
            Route::post('/store', [DeliveryController::Class, 'store'])->name('admin.market.delivery.store');
            Route::get('/edit/{id}', [DeliveryController::Class, 'edit'])->name('admin.market.delivery.edit');
            Route::put('/update/{id}', [DeliveryController::Class, 'update'])->name('admin.market.delivery.update');
            Route::delete('/destroy/{id}', [DeliveryController::Class, 'destroy'])->name('admin.market.delivery.destroy');
        });

        //discount
        Route::prefix('discount')->group(function(){
            Route::get('/copan', [DiscountController::Class, 'copan'])->name('admin.market.discount.copan');
            Route::get('/copan/create', [DiscountController::Class, 'copanCreate'])->name('admin.market.discount.copan.create');
            Route::get('/common-discount', [DiscountController::Class, 'commonDiscount'])->name('admin.market.discount.commonDiscount');
            Route::get('/common-discount/create', [DiscountController::Class, 'commonDiscountCreate'])->name('admin.market.discount.commonDiscount.create');
            Route::get('/amazing-sale', [DiscountController::Class, 'amazingSale'])->name('admin.market.discount.amazingSale');
            Route::get('/amazing-sale/create', [DiscountController::Class, 'amazingSaleCreate'])->name('admin.market.discount.amazingSale.create');
        });

         //order
         Route::prefix('order')->group(function(){
            Route::get('/', [OrderController::Class, 'all'])->name('admin.market.order.all');

            Route::get('/new-order', [OrderController::Class, 'newOrders'])->name('admin.market.order.newOrders');

            Route::get('/sending', [OrderController::Class, 'sending'])->name('admin.market.order.sending');
            
            Route::get('/unpaid', [OrderController::Class, 'unpaid'])->name('admin.market.order.unpaid');

            Route::get('/canceled', [OrderController::Class, 'canceled'])->name('admin.market.order.canceled');

            Route::get('/returned', [OrderController::Class, 'returned'])->name('admin.market.order.returned');

            Route::get('/show', [OrderController::Class, 'show'])->name('admin.market.order.show');

            Route::get('/change-send-status', [OrderController::Class, 'changeSendStatus'])->name('admin.market.order.changeSendStatus');

            Route::get('/change-order-status', [OrderController::Class, 'changeOrderStatus'])->name('admin.market.order.changeOrderStatus');

            Route::get('/cancel-order', [OrderController::Class, 'cancelOrder'])->name('admin.market.order.cancelOrder');
        });

    });
});


