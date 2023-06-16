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

Route::get('/', function () { return view('home');})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/about', function () { return view('about');})->name('about');

Route::get('/services', function () { return view('services.all_services');})->name('services');
Route::get('/content_writting', function () { return view('services.content_writting');})->name('content_writting');
Route::get('/digital_marketing', function () { return view('services.digital_marketing');})->name('digital_marketing');
Route::get('/graphic_designing', function () { return view('services.graphic_designing');})->name('graphic_designing');
Route::get('/mobile_applications', function () { return view('services.mobile_applications');})->name('mobile_applications');
Route::get('/software_testing', function () { return view('services.software_testing');})->name('software_testing');
Route::get('/web_designing', function () { return view('services.web_designing');})->name('web_designing');
Route::get('/web_development', function () { return view('services.web_development');})->name('web_development');

Route::get('/training', function () { return view('training.training');})->name('training');
Route::get('/cse_it', function () { return view('training.cse_it');})->name('cse_it');
Route::get('/ce', function () { return view('training.ce');})->name('ce');
Route::get('/me', function () { return view('training.me');})->name('me');
Route::get('/ece', function () { return view('training.ece');})->name('ece');
Route::get('/bba', function () { return view('training.bba');})->name('bba');

Route::get('/contact', function () { return view('contact');})->name('contact');

Route::get('/register', function () { return view('register');})->name('register');

Route::get('/blogs', function () { return view('blogs.blog_grid');})->name('blogs');
Route::get('/blog1', function () { return view('blogs.blog1');})->name('blog1');
Route::get('/blog2', function () { return view('blogs.blog2');})->name('blog2');
Route::get('/blog3', function () { return view('blogs.blog3');})->name('blog3');
Route::get('/blog4', function () { return view('blogs.blog4');})->name('blog4');
Route::get('/blog5', function () { return view('blogs.blog5');})->name('blog5');
Route::get('/blog6', function () { return view('blogs.blog6');})->name('blog6');
Route::get('/blog7', function () { return view('blogs.blog7');})->name('blog7');
Route::get('/blog8', function () { return view('blogs.blog8');})->name('blog8');
Route::get('/blog9', function () { return view('blogs.blog9');})->name('blog9');
Route::get('/blog10', function () { return view('blogs.blog10');})->name('blog10');
Route::get('/blog11', function () { return view('blogs.blog11');})->name('blog11');
Route::get('/blog12', function () { return view('blogs.blog12');})->name('blog12');
Route::get('/blog13', function () { return view('blogs.blog13');})->name('blog13');
