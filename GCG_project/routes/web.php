<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('product.index');
// });

Route::controller(LoginController::class)->group(function(){
    Route::get('/login', 'login')->name('login');
    Route::post('/login', 'loginAction')->name('login.action');
});

Route::controller(RegisterController::class)->group(function(){
    Route::get('/register', 'register')->name('register');
    Route::post('/register', 'registerSave')->name('register.save');
});

Route::get('/app', function(){
    return view('layouts.app');
});

Route::middleware('auth')->group(function(){
    Route::group(['namespace'=>'product'], function(){
        Route::get('/products', 'IndexController')->name('products.index');
        Route::get('/products/create', 'CreateController')->name('products.create');
        Route::post('/products', 'StoreController')->name('products.store');
        // Route::get('/products/{product}', 'ShowController')->name('products.show');
        // Route::get('/products/{product}/edit', 'EditController')->name('products.edit');
        // Route::put('/products/{product}', 'UpdateController')->name('products.update');
        // Route::delete('/products/{product}', 'DestroyController')->name('products.destroy');
    });

    Route::get('/profile', function(){
        return view('profile');
    })->name('profile');
});