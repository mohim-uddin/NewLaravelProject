<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirstController;

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
    return view('home');
});

Route::get('/all-pages', function () {
    echo "this is all post pages";
});
 //jdi 30 teke kom hy tahole all page show korbe otherwise single page page show korbe.(note: jodi route hisebe localhost:8000/single-page de o all-page show kore. http://localhost:8000/single-page?age=31 single page show kore jeheto condition false)
Route::get('/single-page', function () {
    return view('single-page');
})->middleware('age');

// Route::get('/home',[FirstController::class,'home']);
Route::get('/dashboard',[FirstController::class,'mohim']);
Route::get('/About',[FirstController::class,'about']);
Route::get('/contact',[FirstController::class,'contact']);
Route::get('/blog',[FirstController::class,'blog'])->name('blog.page');
