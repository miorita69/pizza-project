<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\BlogController;

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

Route::get('/', function () {
    return view('pages/homepage');
});

Route::get('/about', function () {
    return view('pages/about');
});

Route::get('/blog', [BlogController::class, 'index']);
Route::get('/blog/article/{articleId}', [BlogController::class, 'show'])->name('article.show');

//Route::get('/blog', function () {
//    return view('pages/blog-list');
//});

Route::get('/blog/articles', function () {
    return view('pages/blog-article');
});

// Route::get('/contact', function () {
//     return view('pages/contact');
// });

Route::match(['get'], '/contact',[ContactUsController::class, 'contactUs'])->name('contactUs.show');


Route::post('/store-contact-info',[ContactUsController::class, 'storeContactInfo'])->name('contactUs.store');
