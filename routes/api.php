<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\coinPriceApi;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('coinprice_btc', [coinPriceApi::class, 'btc']); 

Route::prefix('v1')->group(function(){

    Route::get('coinprice_btc', [coinPriceApi::class, 'btc']);

    Route::get('currency/{pair}', [coinPriceApi::class, 'getfiatRate']);
    // Route::get('currency/{$pair}', function($request) { return $request->pair;});
    // Route::get('currency', function(){return 'works';});

});
