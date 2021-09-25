<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\BrandProduct;
use App\Http\Controllers\Backend\CategoryPost;
use App\Http\Controllers\Backend\PostController;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\CategoryProduct;
use App\Http\Controllers\Backend\SliderController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\DashboardController;

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

Route::get('/', function () {
    return view('welcome');
});


// Login admin
Route::get('/admin', [AdminController::class, 'getLogin'])->name('admin.getLogin');

// Regis admin
Route::get('/admin/regis', [AdminController::class, 'getRegis'])->name('admin.getRegis');
// Dashboard
// Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.index');

Route::group(['prefix' => 'admin', 'namespace' => 'Backend'],function(){
    // =============================== dashboard ===============================
    $prefix         = '';
    $controllerName = 'dashboard';
    Route::group(['prefix' => $prefix], function () use($controllerName) {
        Route::get('/admin/dashboard', [DashboardController::class, 'index'])              ->name($controllerName.'.index');
    });
    //=============================== slider ===============================
    $prefix         = 'slider';
    $controllerName = 'slider';
    Route::group(['prefix' => $prefix], function () use($controllerName) {
        Route::get('/', [SliderController::class, 'index'])                ->name($controllerName.'.index');
        Route::get('/{status}/{id}',[SliderController::class, 'status'])   ->name($controllerName.'.status')->whereNumber('id');
        Route::get('/create', [SliderController::class, 'create'])         ->name($controllerName.'.create');
        Route::post('/', [SliderController::class, 'store'])               ->name($controllerName.'.store');
        Route::put('/{id}', [SliderController::class, 'update'])           ->name($controllerName.'.update')->whereNumber('id');
        Route::delete('/{id}', [SliderController::class, 'destroy'])       ->name($controllerName.'.destroy')->whereNumber('id');
        Route::get('/{id}', [SliderController::class, 'show'])             ->name($controllerName.'.show')->whereNumber('id');
        Route::get('/{id}/edit', [SliderController::class, 'edit'])        ->name($controllerName.'.edit')->whereNumber('id');
    });
});

// ===============================Category Product =====================================
Route::get('/admin/category', [CategoryProduct::class, 'index'])->name('admin.index');
Route::get('/admin/create-category', [CategoryProduct::class, 'create'])->name('admin.create');
Route::get('/admin/destroy-category/{id}', [CategoryProduct::class, 'destroy'])->name('admin.destroy');
Route::get('/admin/edit-category/{id}', [CategoryProduct::class, 'edit'])->name('admin.edit');
Route::post('/admin/store-category', [CategoryProduct::class, 'store'])->name('admin.store');
Route::post('/admin/update-category/{id}', [CategoryProduct::class, 'update'])->name('admin.update');
Route::get('/admin/active-category/{id}', [CategoryProduct::class, 'active'])->name('admin.active');
Route::get('/admin/unactive-category/{id}', [CategoryProduct::class, 'unactive'])->name('admin.unactive');
// ===============================Category Product =====================================
// ==================================Brand Product =====================================
Route::get('/admin/brand', [BrandProduct::class, 'index'])->name('admin.index');
Route::get('/admin/create-brand', [BrandProduct::class,'create'])->name('admin.create');
Route::get('/admin/destroy-brand/{id}', [BrandProduct::class, 'destroy'])->name('admin.destroy');
Route::get('/admin/edit-brand/{id}', [BrandProduct::class, 'edit'])->name('admin.edit');
Route::post('/admin/store-brand', [BrandProduct::class, 'store'])->name('admin.store');
Route::post('/admin/update-brand/{id}', [BrandProduct::class, 'update'])->name('admin.update');
// ==================================Brand Product =====================================
// ==================================Product =====================================
Route::get('/admin/product', [ProductController::class, 'index'])->name('admin.index');
Route::get('/admin/create-product', [ProductController::class,'create'])->name('admin.create');
Route::get('/admin/destroy-product/{id}', [ProductController::class, 'destroy'])->name('admin.destroy');
Route::get('/admin/edit-product/{id}', [ProductController::class, 'edit'])->name('admin.edit');
Route::post('/admin/store-product', [ProductController::class, 'store'])->name('admin.store');
Route::post('/admin/update-product/{id}', [ProductController::class, 'update'])->name('admin.update');
// ==================================Product =====================================
// ==================================CATEGORY POST =====================================
Route::get('/admin/category-post', [CategoryPost::class, 'index'])->name('admin.index');
Route::get('/admin/create-category-post', [CategoryPost::class,'create'])->name('admin.create');
Route::get('/admin/destroy-category-post/{id}', [CategoryPost::class, 'destroy'])->name('admin.destroy');
Route::get('/admin/edit-category-post/{id}', [CategoryPost::class, 'edit'])->name('admin.edit');
Route::post('/admin/store-category-post', [CategoryPost::class, 'store'])->name('admin.store');
Route::post('/admin/update-category-post/{id}', [CategoryPost::class, 'update'])->name('admin.update');
// ==================================CATEGORY POST =====================================
// ==================================POST =====================================
Route::get('/admin/post', [PostController::class, 'index'])->name('admin.index');
Route::get('/admin/create-post', [PostController::class,'create'])->name('admin.create');
Route::get('/admin/destroy-post/{id}', [PostController::class, 'destroy'])->name('admin.destroy');
Route::get('/admin/edit-post/{id}', [PostController::class, 'edit'])->name('admin.edit');
Route::post('/admin/store-post', [PostController::class, 'store'])->name('admin.store');
Route::post('/admin/update-post/{id}', [PostController::class, 'update'])->name('admin.update');
// ================================== POST =====================================