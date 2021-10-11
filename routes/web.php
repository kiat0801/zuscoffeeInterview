<?php

require 'admin.php';

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\Site\ProductController;
use App\Http\Controllers\Site\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [ProductController::class, 'index'])->name('site.pages.homepage');
Route::get('/products/{id}', [ProductController::class, 'show'])->name('site.pages.product');

Route::group(['middleware' => 'auth'], function () {

    Route::prefix('user')->group(function () {
        Route::get('/edit/{id}', [UserController::class, 'edit'])->name('site.user.edit');
        Route::post('/update', [UserController::class, 'update'])->name('site.user.update');
    });
});


Auth::routes();
require 'admin.php';
