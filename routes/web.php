<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController; 
use App\Http\Controllers\HomeCareFromController; 


/*'
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
    return view('home');
});


Route::view('/about-us', 'about-us');
Route::view('/services', 'services');
Route::view('/our-leadership', 'our-leadership');
Route::view('/nutritional-counselling', 'nutritional-counselling');


Route::view('/nursing-service', 'nursing-service');

Route::view('/login', 'login')->middleware('guest');
Route::view('/live-in-care', 'live-in-care');
Route::view('/home-care-services', 'home-care-services');


Route::get('/logout', [App\Http\Controllers\AuthController::class, 'logout'])->name('logout')->middleware('auth');

Route::view('/cdpap', 'cdpap');
Route::view('/cardiological-care', 'cardiological-care');
Route::view('/careers', 'careers');
Route::view('/companion-care', 'companion-care');
Route::view('/respite-care', 'respite-care');
Route::view('/specialized-care', 'specialized-care');
Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard')->middleware('auth');

// Route::view('/single', 'single');
Route::get('/blogs', [App\Http\Controllers\BlogController::class, 'index'])->name('blog');
Route::get('/blogs/{blog}', [App\Http\Controllers\BlogController::class, 'show'])->name('single_blog');

Route::get('/contact', [App\Http\Controllers\ContactController::class, 'contact'])->name('contact');

// Route::post('/contact', [App\Http\Controllers\ContactController::class, 'storeContactForm'])->name('contact-form.store');
Route::post('/store-blog', [App\Http\Controllers\DashboardController::class, 'store_blog'])->name('store_blog');
Route::post('/login', [App\Http\Controllers\AuthController::class, 'login'])->name('login');
Route::delete('/delete-blog/{blog}', [App\Http\Controllers\DashboardController::class, 'delete_blog'])->name('delete_blog');
Route::put('/update-blog/{blog}', [App\Http\Controllers\DashboardController::class, 'update_blog'])->name('update_blog');

Route::post('/contact-form', [App\Http\Controllers\ContactController::class, 'storeContactForm'])->name('contact-form.store');
Route::post('/home-contact-form', [App\Http\Controllers\HomeController::class, 'storeHomeContactForm'])->name('home-contact-form.store');


Route::post('/cdpap-form', [App\Http\Controllers\CdpapFromController::class, 'storeCdpapForm'])->name('cdpap-form.store');


Route::post('/home-homecares-form', [App\Http\Controllers\HomeCareFromController::class, 'storeHomeCareForm'])->name('home-care-form.store');
// Route::view('/contact','contactForm')->name('contactForm');
// Route::post('/send',[ContactController::class,'send'])->name('send.email');




// Route::get('send-email', function(){
//     $mailData = [
//         "name" => "Hussain",
//         "dob" => "12/12/1990"
//     ];

//     Mail::to("delwar.mmc@gmail.com")->send(new TestEmail($mailData));

//     dd("Mail Sent Successfully!");
// });