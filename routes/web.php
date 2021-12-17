<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Order; 
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


Route::view('/landing', 'frontend.landing')->name('landing');
Route::view('/', 'frontend.home')->name('home'); 
Route::view('/culture', 'frontend.culture')->name('culture'); 
Route::view('/culture', 'frontend.culture')->name('solutions'); 

Route::resource('/order', Order::class);

Route::get('/whatsapp', function(){

    $input=$request->all();

    print_r($input);

    
});




Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Route::get('/settings', [settingsController::class, 'index'])->name('settings');