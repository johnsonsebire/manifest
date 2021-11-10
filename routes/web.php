<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontendController; 
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


// Route::view('/', 'frontend.landing');
Route::view('/', 'frontend.home')->name('home'); 
Route::view('/culture', 'frontend.culture')->name('culture'); 
Route::view('/culture', 'frontend.culture')->name('solutions'); 

// Route::get('/', function () {
//     return view('landing');
// });


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
