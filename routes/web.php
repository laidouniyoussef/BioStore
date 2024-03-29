<?php

use Illuminate\Support\Facades\Route;

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

    // Route::get('/', function () {
    //     return view('website.frontend.layouts.main');
    // });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route::get('/dashboard', function () {
//    return view('website.backend.layouts.main');
//});

Route::get('/dashboard', [App\Http\Controllers\BackendController::class, 'index'])->name('backend.index');
Route::get('/', [App\Http\Controllers\FrontendController::class, 'index'])->name('website.index');

Route::resource('/dashboard/productcategory','ProductCategoryController');
Route::resource('/dashboard/product','ProductController');
Route::resource('/dashboard/productImage','ProductImageController');
Route::resource('/dashboard/customerDetail','CustomerDetailController');
Route::resource('/dashboard/payment','PaymentController');
Route::resource('/dashboard/contact','ContactController');
Route::resource('/dashboard/contactForm','ContactFormController');
                                            
