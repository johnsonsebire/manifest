<?php

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

//Live
Route::view('/landing', 'frontend.landing')->name('landing');
Route::view('/', 'frontend.home')->name('home'); 
Route::view('/culture', 'frontend.culture')->name('culture'); 
Route::view('/solutions', 'frontend.culture')->name('solutions'); 
Route::view('/webinar', 'frontend.webinar')->name('webinar'); 

//Pages Under Construction

#Industries Start
/*
* Industries 
* Use Services Single Template for Listed Industries
*/
// Route::view('/retail', 'frontend.culture')->name('retail'); 
// Route::view('/healthcare', 'frontend.culture')->name('healthcare'); 
// Route::view('/blockchain', 'frontend.culture')->name('blockchain'); 
// Route::view('/education', 'frontend.culture')->name('education'); 
// Route::view('/charity', 'frontend.culture')->name('charity'); 
// Route::view('/government', 'frontend.culture')->name('government'); 
// Route::view('/technology', 'frontend.culture')->name('technology'); 
// Route::view('/hr', 'frontend.culture')->name('hr'); 
# Industries End 

#
// Route::view('/domains', 'frontend.culture')->name('domains'); 
// Route::view('/shared-hosting', 'frontend.culture')->name('shared-hosting'); 
// Route::view('/wordpress-hosting', 'frontend.culture')->name('wordpress-hosting'); 
// Route::view('/vps', 'frontend.culture')->name('vps'); 
// Route::view('/dedicated-servers', 'frontend.culture')->name('dedicated-servers'); 
// Route::view('/managed-hosting', 'frontend.culture')->name('managed-hosting'); 
// Route::view('/ssl-sertificates', 'frontend.culture')->name('ssl-certificates'); 
// Route::view('/site-security', 'frontend.culture')->name('site-security'); 
// Route::view('/smart-accounting', 'frontend.culture')->name('smart-accounting'); 
// Route::view('/smart-pos', 'frontend.culture')->name('smart-pos'); 
// Route::view('/smart-lms', 'frontend.culture')->name('smart-lms'); 
// Route::view('/zoho-business', 'frontend.culture')->name('zoho-business'); 
// Route::view('/office-365', 'frontend.culture')->name('office-365'); 
// Route::view('/avast-security', 'frontend.culture')->name('avast-security'); 

#Onboarding
// Route::view('/build-website', 'frontend.build.website')->name('build-website'); 
// Route::view('/build-app', 'frontend.build.app')->name('build-app'); 


Route::resource('/order', Order::class);

Route::get('/whatsapp', function(){

    $input=$request->all();

    print_r($input);

    
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    toast('Success Toast','error')->autoClose(3000);

    return view('dashboard');
})->name('dashboard');

// Route::get('/settings', [settingsController::class, 'index'])->name('settings');