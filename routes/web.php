<?php

use App\Http\Controllers\GalleryController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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
//     return view('welcome');
// });

Route::get('/', [PageController::class, 'homepage'])->name('front.home');
Route::get('/flights', [PageController::class, 'flights'])->name('flight');
Route::get('/hotels', [PageController::class, 'hotels'])->name('hotel');
Route::get('/holidays', [PageController::class, 'holidays'])->name('holiday');
Route::get('/blogs', [PageController::class, 'blogs'])->name('blog');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Gallery Route
Route::get('gallerys', [GalleryController::class, 'index']);
Route::get('add-gallery', [GalleryController::class, 'create']);
Route::post('add-gallery', [GalleryController::class, 'store']);
