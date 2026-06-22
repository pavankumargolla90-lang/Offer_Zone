<?php

use App\Http\Controllers\admin\SliderController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/layout', function () {
    return view('layout');
});
Route::get('/', function () {
    return view('index');
});
Route::get('/shop', function () {
    return view('shop');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/productdetails', function () {
    return view('productdetails');
});
Route::get('/cart', function () {
    return view('cart');
});
Route::get('/wishlist', function () {
    return view('wishlist');
});
Route::get('/account', function () {
    return view('account');
});
Route::get('/returnrefund', function () {
    return view('returnrefund');
});
Route::get('/checkout', function () {
    return view('checkout');
});
Route::get('/404notfound', function () {
    return view('404notfound');
});
Route::get('/privacypolicy', function () {
    return view('privacypolicy');
});
Route::get('/termsandconditions', function () {
    return view('termsandconditions');
});
Route::get('/faq', function () {
    return view('faq');
});
Route::get('/compare', function () {
    return view('compare');
});
Route::get('/accountorders', function () {
    return view('account-orders');
});
Route::get('/accountaddress', function () {
    return view('account-addresses');
});
Route::get('/accountsettings', function () {
    return view('account-setting');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/forgotpassword', function () {
    return view('forgot-password');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/track', function () {
    return view('track');
});
Route::get('/preorder', function () {
    return view('preorder');
});

Route::get('/admindash', function () {
    return view('admin.layout');
});



///////////////////////////////////////////Admin//////////////////////////////////////////////
Route::controller(SliderController::class)->group(function () {
    Route::get('/slider', 'slider')->name('slider');
    Route::post('/sliderstore', 'sliderstore')->name('sliderstore');
    Route::get('/editslider/{id}', 'editslider')->name('editslider');
    Route::post('/updateslider/{id}', 'updateslider')->name('updateslider');
    Route::get('/deleteslider/{id}', 'deleteslider')->name('deleteslider');
});

