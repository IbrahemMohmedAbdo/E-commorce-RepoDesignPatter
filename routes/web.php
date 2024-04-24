<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Dashboard\ProductController as AdminProductController;
use App\Http\Controllers\Dashboard\CategoriesController as AdminCategoriesController;
use App\Http\Controllers\Front\CategoryCarController as CategoryCarController;
use App\Http\Controllers\Front\CategoryBicyleController as CategoryBicyleController;
use App\Http\Controllers\Front\ShopController as ShopController;
use App\Http\Controllers\Front\CartController as CartController;
use App\Http\Controllers\Front\FatoorahController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;

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
Route::get('pay',[FatoorahController::class,'pay']);

// Route For Login To Admin Dashboard...
Route::get('admin/login', [AdminController::class, 'adminLogin'])->name('admin.login');
Route::post('admin/logout', [AdminController::class, 'logout'])->name('admin.logout');
Route::post('admin/login', [AdminController::class, 'checkadminLogin'])->name('save.admin.login');


Route::prefix('admin')->group(function () {

    Route::resource('/products', AdminProductController::class);

    Route::resource('/categories', AdminCategoriesController::class);
});




Route::get('/', [ShopController::class, 'index'])->name('index-home');
Route::get('/shop', [ShopController::class, 'Shop'])->name('shop');
Route::get('category-car', [CategoryCarController::class, 'getCategoryCar'])->name('category.cars');
Route::get('category-bicyle', [CategoryBicyleController::class, 'getCategoryBicyle'])->name('category.bicyles');
Route::get('/cars/{id}', [CategoryCarController::class, 'getCarDetails'])->name('car.details');
Route::get('/bicyles/{id}', [CategoryBicyleController::class, 'getBicyleDetails'])->name('bicyle.details');
Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::middleware(['auth'])->group(function () {
    Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
    Route::post('/cart/add/{productId}/{quantity?}', [CartController::class, 'add'])->name('cart.add');
    Route::delete('/cart/remove/{cartItemId}', [CartController::class, 'remove'])->name('cart.remove');
});
