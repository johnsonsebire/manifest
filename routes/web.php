<?php

use App\Http\Controllers\frontendController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Order; 
use RealRashid\SweetAlert\Facades\Alert;

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

//Language Switcher
Route::get('language/{locale}', function ($locale) {
    app()->setLocale($locale);
    session()->put('locale', $locale);
    return redirect()->back();
});

//Live

Route::view('/', 'frontend.new')->name('home'); 
Route::get('/service/{service}',[ frontendController::class, 'service']); 
Route::get('/{page}',[ frontendController::class, 'pages']); 

Route::get('/webinar', function(){
    return redirect()->away('https://zc.vg/9x8MK');
}); 

Route::get('/meet', function(){
    return redirect()->away('https://meet.google.com/ejx-bgta-bjz');
}); 




Route::resource('/order', Order::class);

Route::get('/whatsapp', function(){
    
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    toast('Success Toast','success')->autoClose(3000);

    return view('dashboard');
})->name('dashboard');

// Route::get('/settings', [settingsController::class, 'index'])->name('settings');