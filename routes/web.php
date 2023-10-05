<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OtomotifController;
use App\Models\Otomotif;

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

Route::get('/landing', function () {
    return view('/landing');
});

Route::get('/about', function () {
    return view('/about');
});

Route::get('/blog', function () {
    return view('/blog');
});

Route::get('/service', function () {
    return view('/service');
});

Route::get('/contact', function () {
    return view('/contact');
});

Route::get('/login', function () {
    return view('/login');
});

Route::get('/index', function () {
    return view('/index');
});



Route::get('/landing',[OtomotifController::class,'landing'])->name('landing');
Route::post('/landing',[OtomotifController::class,'landing'])->name('landing');

Route::get('/about',[OtomotifController::class,'about'])->name('about');
Route::post('/about',[OtomotifController::class,'about'])->name('about');

Route::get('/blog',[OtomotifController::class,'blog'])->name('blog');
Route::post('/blog',[OtomotifController::class,'blog'])->name('blog');

Route::get('/service',[OtomotifController::class,'service'])->name('service');
Route::post('/service',[OtomotifController::class,'service'])->name('service');

Route::get('/contact',[OtomotifController::class,'contact'])->name('contact');
Route::post('/contact',[OtomotifController::class,'contact'])->name('contact');

Route::get('/login',[OtomotifController::class,'login'])->name('login');
Route::post('/login',[OtomotifController::class,'login'])->name('login');

Route::get('index',[OtomotifController::class,'index'])->name('index');;
Route::post('index',[OtomotifController::class,'index'])->name('index');;

