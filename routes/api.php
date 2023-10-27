<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});*/
Route::group(["namespace"=>"App\Http\Controllers\api"],function() {
    // Route::get('/login','ApiController@login');
    Route::post('/login','ApiController@login');
    Route::get('/GetAllConfiguration','ApiController@GetAllConfiguration');
    Route::post('/CreateNewCustomer','ApiController@CreateNewCustomer');
    Route::post('/ShopList','ApiController@ShopList');
    Route::post('/CreateOrder','ApiController@CreateOrder');
    Route::post('/OrderHistory','ApiController@OrderHistory');
    Route::post('/OrderHistoryDetails','ApiController@OrderHistoryDetails');
});