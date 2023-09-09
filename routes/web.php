<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\Market\CategoryController;
use App\Http\Controllers\Admin\Market\BrandController;
use App\Http\Controllers\Admin\Market\CommentController;
use App\Http\Controllers\Admin\Market\DeliveryController;
use App\Http\Controllers\Admin\Market\DiscountController;
use App\Http\Controllers\Admin\Market\OrderController;
use App\Http\Controllers\Admin\Market\PaymentController;
use App\Http\Controllers\Admin\Market\ProductController;
use App\Http\Controllers\Admin\Market\GalleryController;
use App\Http\Controllers\Admin\Market\PropertyController;
use App\Http\Controllers\Admin\Market\StoreController;
use App\Http\Controllers\Admin\Content\CategoryController as ContentCategoryController;
use App\Http\Controllers\Admin\Content\CommentController as ContentCommentController;
use App\Http\Controllers\Admin\Content\FAQController;
use App\Http\Controllers\Admin\Content\MenuController;
use App\Http\Controllers\Admin\Content\PostController;
use App\Http\Controllers\Admin\Content\PageController;
use App\Http\Controllers\Admin\User\AdminUserController;


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

         //payment
         Route::prefix('payment')->group(function(){
            Route::get('/', [PaymentController::Class, 'index'])->name('admin.market.payment.index');

            Route::get('/online', [PaymentController::Class, 'online'])->name('admin.market.payment.online');

            Route::get('/offline', [PaymentController::Class, 'offline'])->name('admin.market.payment.offline');
            
            Route::get('/attendance', [PaymentController::Class, 'attendance'])->name('admin.market.payment.attendance');

            Route::get('/confirm', [PaymentController::Class, 'confirm'])->name('admin.market.payment.confirm');
        });

         //product
         Route::prefix('product')->group(function(){
            Route::get('/', [ProductController::Class, 'index'])->name('admin.market.product.index');
            Route::get('/create', [ProductController::Class, 'create'])->name('admin.market.product.create');
            Route::post('/store', [ProductController::Class, 'store'])->name('admin.market.product.store');
            Route::get('/edit/{id}', [ProductController::Class, 'edit'])->name('admin.market.product.edit');
            Route::put('/update/{id}', [ProductController::Class, 'update'])->name('admin.market.product.update');
            Route::delete('/destroy/{id}', [ProductController::Class, 'destroy'])->name('admin.market.product.destroy');
            //gallery
            Route::get('/gallery', [GalleryController::Class, 'index'])->name('admin.market.gallery.index');
            Route::post('/gallery/store', [GalleryController::Class, 'store'])->name('admin.market.gallery.store');
            Route::delete('/gallery/destroy/{id}', [GalleryController::Class, 'destroy'])->name('admin.market.gallery.destroy');
        });

        //property
        Route::prefix('property')->group(function(){
            Route::get('/', [PropertyController::Class, 'index'])->name('admin.market.property.index');
            Route::get('/create', [PropertyController::Class, 'create'])->name('admin.market.property.create');
            Route::post('/store', [PropertyController::Class, 'store'])->name('admin.market.property.store');
            Route::get('/edit/{id}', [PropertyController::Class, 'edit'])->name('admin.market.property.edit');
            Route::put('/update/{id}', [PropertyController::Class, 'update'])->name('admin.market.property.update');
            Route::delete('/destroy/{id}', [PropertyController::Class, 'destroy'])->name('admin.market.property.destroy');
        });

        //store
        Route::prefix('store')->group(function(){
            Route::get('/', [StoreController::Class, 'index'])->name('admin.market.store.index');
            Route::get('/add-to-store', [StoreController::Class, 'addToStore'])->name('admin.market.store.add-to-store');
            Route::post('/store', [StoreController::Class, 'store'])->name('admin.market.store.store');
            Route::get('/edit/{id}', [StoreController::Class, 'edit'])->name('admin.market.store.edit');
            Route::put('/update/{id}', [StoreController::Class, 'update'])->name('admin.market.store.update');
            Route::delete('/destroy/{id}', [StoreController::Class, 'destroy'])->name('admin.market.store.destroy');
        });
    });

    Route::prefix('content')->namespace('Content')->group(function(){
        //category
        Route::prefix('category')->group(function(){
            Route::get('/', [ContentCategoryController::Class, 'index'])->name('admin.content.category.index');
            Route::get('/create', [ContentCategoryController::Class, 'create'])->name('admin.content.category.create');
            Route::post('/store', [ContentCategoryController::Class, 'store'])->name('admin.content.category.store');
            Route::get('/edit/{id}', [ContentCategoryController::Class, 'edit'])->name('admin.content.category.edit');
            Route::put('/update/{id}', [ContentCategoryController::Class, 'update'])->name('admin.content.category.update');
            Route::delete('/destroy/{id}', [ContentCategoryController::Class, 'destroy'])->name('admin.content.category.destroy');
        });

        // comment
        Route::prefix('comment')->group(function(){
            Route::get('/', [ContentCommentController::Class, 'index'])->name('admin.content.comment.index');
            Route::get('/show', [ContentCommentController::Class, 'show'])->name('admin.content.comment.show');
            Route::post('/store', [ContentCommentController::Class, 'store'])->name('admin.content.comment.store');
            Route::get('/edit/{id}', [ContentCommentController::Class, 'edit'])->name('admin.content.comment.edit');
            Route::put('/update/{id}', [ContentCommentController::Class, 'update'])->name('admin.content.comment.update');
            Route::delete('/delete/{id}', [ContentCommentController::Class, 'destroy'])->name('admin.content.comment.destroy');
        });

        // faq
        Route::prefix('faq')->group(function(){
            Route::get('/', [FAQController::Class, 'index'])->name('admin.content.faq.index');
            Route::get('/create', [FAQController::Class, 'create'])->name('admin.content.faq.create');
            Route::post('/store', [FAQController::Class, 'store'])->name('admin.content.faq.store');
            Route::get('/edit/{id}', [FAQController::Class, 'edit'])->name('admin.content.faq.edit');
            Route::put('/update/{id}', [FAQController::Class, 'update'])->name('admin.content.faq.update');
            Route::delete('/delete/{id}', [FAQController::Class, 'destroy'])->name('admin.content.faq.destroy');
        });

        // menu
        Route::prefix('menu')->group(function(){
            Route::get('/', [MenuController::Class, 'index'])->name('admin.content.menu.index');
            Route::get('/create', [MenuController::Class, 'create'])->name('admin.content.menu.create');
            Route::post('/store', [MenuController::Class, 'store'])->name('admin.content.menu.store');
            Route::get('/edit/{id}', [MenuController::Class, 'edit'])->name('admin.content.menu.edit');
            Route::put('/update/{id}', [MenuController::Class, 'update'])->name('admin.content.menu.update');
            Route::delete('/delete/{id}', [MenuController::Class, 'destroy'])->name('admin.content.menu.destroy');
        });

        // page
        Route::prefix('page')->group(function(){
            Route::get('/', [PageController::Class, 'index'])->name('admin.content.page.index');
            Route::get('/create', [PageController::Class, 'create'])->name('admin.content.page.create');
            Route::post('/store', [PageController::Class, 'store'])->name('admin.content.page.store');
            Route::get('/edit/{id}', [PageController::Class, 'edit'])->name('admin.content.page.edit');
            Route::put('/update/{id}', [PageController::Class, 'update'])->name('admin.content.page.update');
            Route::delete('/delete/{id}', [PageController::Class, 'destroy'])->name('admin.content.page.destroy');
        });

        // post
        Route::prefix('post')->group(function(){
            Route::get('/', [PostController::Class, 'index'])->name('admin.content.post.index');
            Route::get('/create', [PostController::Class, 'create'])->name('admin.content.post.create');
            Route::post('/store', [PostController::Class, 'store'])->name('admin.content.post.store');
            Route::get('/edit/{id}', [PostController::Class, 'edit'])->name('admin.content.post.edit');
            Route::put('/update/{id}', [PostController::Class, 'update'])->name('admin.content.post.update');
            Route::delete('/delete/{id}', [PostController::Class, 'destroy'])->name('admin.content.post.destroy');
        });
    });

    Route::prefix('user')->namespace('User')->group(function(){
        //admin user
        Route::prefix('admin-user')->group(function(){
            Route::get('/', [AdminUserController::Class, 'index'])->name('admin.user.admin-user.index');
            Route::get('/create', [AdminUserController::Class, 'create'])->name('admin.user.admin-user.create');
            Route::post('/store', [AdminUserController::Class, 'store'])->name('admin.user.admin-user.store');
            Route::get('/edit/{id}', [AdminUserController::Class, 'edit'])->name('admin.user.admin-user.edit');
            Route::put('/update/{id}', [AdminUserController::Class, 'update'])->name('admin.user.admin-user.update');
            Route::delete('/delete/{id}', [AdminUserController::Class, 'destroy'])->name('admin.user.admin-user.destroy');
        });
    });
});


