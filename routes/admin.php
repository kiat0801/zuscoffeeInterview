<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\ProductController;


Route::group(['prefix' => 'admin'], function () {

    Route::get('login', [LoginController::class, 'showLoginForm'])->name('admin.login');
    Route::post('login', [LoginController::class, 'login'])->name('admin.login.post');
    Route::get('logout', [LoginController::class, 'logout'])->name('admin.logout');


    Route::group(['middleware' => 'auth:admin'], function () {
        Route::get('/', function () {
            return view('admin.dashboard.index');
        })->name('admin.dashboard');


        Route::prefix('products')->group(function () {
            Route::get('/', [ProductController::class, 'index'])->name('admin.products.index');
            Route::get('/create', [ProductController::class, 'create'])->name('admin.products.create');
            Route::post('/store', [ProductController::class, 'store'])->name('admin.products.store');
            Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('admin.products.edit');
            Route::post('/update', [ProductController::class, 'update'])->name('admin.products.update');
            Route::get('/{id}/delete', [ProductController::class, 'delete'])->name('admin.products.delete');
        });

    });

});


