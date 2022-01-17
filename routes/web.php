<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\PosController;
use App\Http\Controllers\Admin\CustomerController;

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


    //============================ Users Route Here ====================================


    //User Group Route Here......

    Route::resource('userGroup', 'Admin\UsergroupController');

    //User List Route Here......

    Route::resource('userList', 'Admin\UserlistController');

    //Customer List Route Here......

    Route::resource('customer', 'Admin\CustomerController');

    //AjaxCustomer Route Here.......
    
    Route::post('customers', [CustomerController::class, 'ajaxCustomer']);

    //Supplier List Route Here......

    Route::resource('supplier', 'Admin\SupplierController');

    //Supplier List Route Here......

    Route::resource('pos', 'Admin\PosController');

    Route::get('pos/customerData', [PosController::class, 'allposData']);
});
