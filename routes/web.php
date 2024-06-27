<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StripePaymentController;
use Illuminate\Support\Facades\Auth;
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
Route::middleware(['checkRole'])->group(function () {
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home'); 
});
Route::get('/', function () {
    return view('index');
})->name('indexpage');
Route::get('aboutus', function () {
    return view('about');
})->name('aboutpage');
Route::get('contactus', function () {
    return view('contact');
})->name('contactpage');
Route::get('bloglist', function () {
    return view('blog_list');
})->name('blogpage');
Route::get('products', function () {
    return view('product');
})->name('productpage');
Route::get('testimonials', function () {
    return view('testimonial');
})->name('testimonialpage');

Route::get('/admin', function () {
    return view ('Dashboard.Dashboardindex');
})->name('indexx');

Route::get('/cart', function () {
    return view ('Cartshow');
})->name('cartdetail');
// Route::get('/checkout', function () {
//     return view ('Checkout');
// })->name('check');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
///Product Controller/////
Route::get('/createproduct',[ProductController::class,'create'])->name('createproductt');
Route::post('/storeproduct',[ProductController::class,'store'])->name('storeproductt');
Route::get('/showproduct',[ProductController::class,'index'])->name('showproductt');
Route::get('edit/{id}',[ProductController::class,'edit'])->name('editproductform');
Route::put('update/{id}',[ProductController::class,'update'])->name('updateproductform');
Route::delete('delete/{id}',[ProductController::class,'destroy'])->name('deletee');
Route::get('/product/{id}', [ProductController::class, 'productdetail'])->name('product.detail');
////Cart Controller///
Route::post('/cart/{id}', [CartController::class, 'addtoCART'])->name('cart');
Route::delete('cart/{id}',[CartController::class,'removecart'])->name('cart.remove');
Route::get('/cartshow', [CartController::class, 'showcart'])->name('cartshow');
Route::put('/cart/update/{id}', [CartController::class, 'update'])->name('cart.update');
Route::get('/checkout', [CartController::class, 'showCheckout'])->name('checkout.show');
Auth::routes();
Route::controller(StripePaymentController::class)->group(function(){
Route::get('stripe', 'stripe');
Route::post('stripe', 'stripePost')->name('stripe.post');
});
