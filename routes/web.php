<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\SliderController;


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

Route::group(['prefix' => 'admin', 'namespace' => 'Backend'],function(){
    // =============================== dashboard ===============================
    $prefix         = 'dashboard';
    $controllerName = 'dashboard';
    Route::group(['prefix' => $prefix], function () use($controllerName) {
        Route::get('/', [DashboardController::class, 'index'])                ->name($controllerName.'.index');
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