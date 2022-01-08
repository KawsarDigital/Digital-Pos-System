<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    return view('auth.admin_login');
});

Auth::routes();

Route::group(['middleware' => 'auth'], function () {

    //Login Route Here......

    Route::get('dashboard', [HomeController::class, 'index'])->name('dashboard');

    //Type Route Here......

    Route::resource('group', 'Admin\GroupController');

    //Category Route Here......

    Route::resource('category', 'Admin\CategoryController');

    //Brands Route Here......

    Route::resource('brand', 'Admin\BrandController');

      //Products Route Here......

      Route::resource('product', 'Admin\ProductController');

});
