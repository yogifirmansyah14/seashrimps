<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/redirect', [HomeController::class, 'redirect']);

Route::get('/', [HomeController::class, 'index']);

Route::get('/product', [AdminController::class, 'product']);

Route::post('/uploadproduct', [AdminController::class, 'uploadproduct']);

Route::get('/showproduct', [AdminController::class, 'showproduct']);

Route::get('/deleteproduct/{id}', [AdminController::class, 'deleteproduct']);

Route::get('/updateview/{id}', [AdminController::class, 'updateview']);

Route::post('/updateproduct/{id}', [AdminController::class, 'updateproduct']);

Route::get('/searchproducts/search', [HomeController::class, 'search']);

Route::post('/addcart/{id}', [HomeController::class, 'addcart']);

Route::post('/addshowcart/{id}', [HomeController::class, 'addshowcart']);

Route::get('/showcart', [HomeController::class, 'showcart']);

Route::get('/viewproducts', [HomeController::class, 'viewproducts']);

Route::get('/detailproduct/{id}', [HomeController::class, 'detailproduct']);

Route::get('/categories/{category:id}', [HomeController::class, 'category']);

Route::get('/article', [AdminController::class, 'article']);

Route::post('/uploadarticle', [AdminController::class, 'uploadarticle']);

Route::get('/viewarticle/{article:slug}', [HomeController::class, 'viewarticle']);

Route::get('/articles', [HomeController::class, 'articles']);

Route::get('/about', [HomeController::class, 'about']);

Route::get('/contact', [HomeController::class, 'contact']);

Route::get('/delete/{id}', [HomeController::class, 'deletecart']);

Route::post('/orders', [HomeController::class, 'checkout']);