<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
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
// Route::group(["middleware"=>"auth"],function() {
//     Route::post('/loginCheck', 'LoginController@loginCheck')->name('loginCheck');
//     });
Route::group(["namespace"=>"App\Http\Controllers","middleware"=>"AuthLogCheck"],function() {
    Route::post('/loginCheck', 'LoginController@loginCheck')->name('loginCheck');

    Route::get('/logout', 'LoginController@logout')->name('LogOut');

    Route::get('/dashboard', function () {    return view('welcome');});
    /*------------------------prodcut setup--------------------------------------------------------------*/
    Route::get('/ProductVariants','ProductSetupController@productAddVariant')->name('ProductVariants');
    Route::get('/AddProduct','ProductSetupController@AddProduct')->name('AddProduct');
    Route::get('/viewProduct','ProductSetupController@viewProduct')->name('viewProduct');
    Route::post('/SaveProduct','ProductSetupController@SaveProduct')->name('SaveProduct');
    Route::post('/add_variant','ProductSetupController@add_variant')->name('add_variant');
    /*------------------------Stock Setup---------------------------------------------------------------*/
    Route::get('/StockList','StockController@index')->name('StockList');
    Route::get('/AddStock','StockController@AddStock')->name('AddStock');
    Route::post('/SaveStock','StockController@SaveStock')->name('SaveStock');
    Route::get('/getProductInfo','StockController@getProductInfo')->name('getProductInfo');

    /*------------------------Production---------------------------------------------------------------*/
    Route::get('/Production','ProductionController@index')->name('Production');
    Route::get('/AddProduction','ProductionController@AddProduction')->name('AddProduction');
    Route::post('/SaveProduction','ProductionController@SaveProduction')->name('SaveProduction');


    /*-----------------------Unit Controller------------------------------------------------------------*/
     Route::get('/Units','UnitController@index')->name('Units');
     Route::get('/AddUnit','UnitController@AddUnit')->name('AddUnit');
    Route::post('/SaveUnit','UnitController@SaveUnit')->name('SaveUnit');
    /*-----------------------Warehouse Controller------------------------------------------------------------*/
     Route::get('/Warehouse','WarehouseController@index')->name('Warehouse');
     Route::get('/AddWarehouse','WarehouseController@AddWarehouse')->name('AddWarehouse');
     Route::get('/ProductTransfer','WarehouseController@ProductTransfer')->name('ProductTransfer');
     Route::get('/Transfer','WarehouseController@Transfer')->name('Transfer');
    Route::post('/SaveWarehouse','WarehouseController@SaveWarehouse')->name('SaveWarehouse');
    Route::post('/SaveTransfer','WarehouseController@SaveTransfer')->name('SaveTransfer');
   /*------------------------ Warehouse wise Stock---------------------------------------------------*/
     Route::get('/WarehouseStock','WarehouseController@WarehouseStock')->name('WarehouseStock');
     /*------------------------Orders-----------------------------------------------------------------*/
     Route::get('/OrdersList','OrderController@index')->name('OrdersList');
     /*------------------------customers-----------------------------------------------------------------*/
     Route::get('/CustomerList','CustomerController@index')->name('CustomerList');

});

 Route::post('/loginCheck', 'App\Http\Controllers\LoginController@loginCheck')->name('loginCheck');

 Route::get('/', function () {
    return view('components.login');
});

