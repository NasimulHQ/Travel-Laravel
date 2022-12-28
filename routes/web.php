<?php

use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\PackageController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\testController;

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
Route::get('/hotel', [PageController::class, 'hotel'])->name('hotel');
Route::get('/holidays', [PageController::class, 'holidays'])->name('holiday');
Route::get('/blogs', [PageController::class, 'blogs'])->name('blog');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Gallery Route
Route::get('gallerys', [GalleryController::class, 'index']);
Route::get('gallerys/{id}', [GalleryController::class, 'show']);
Route::get('add-gallery', [GalleryController::class, 'create']);
Route::post('add-gallery', [GalleryController::class, 'store']);
Route::get('edit-gallery/{id}', [GalleryController::class, 'edit']);
Route::put('update-gallery/{id}', [GalleryController::class, 'update']);
Route::get('delete-gallery/{id}', [GalleryController::class, 'destroy']);

// test ajax
Route::get('test', [testController::class, 'index']);

// Hotel Route
Route::get('hotels', [HotelController::class, 'index']);
Route::get('add-hotel', [HotelController::class, 'create']);
Route::post('add-hotel', [HotelController::class, 'store']);
Route::get('edit-hotel/{id}', [HotelController::class, 'edit']);
Route::put('update-hotel/{id}', [HotelController::class, 'update']);
Route::get('delete-hotel/{id}', [HotelController::class, 'destroy']);
Route::get('search', [HotelController::class, 'search']);

//Package
Route::get('packages', [PackageController::class, 'index']);
Route::get('add-package', [PackageController::class, 'create']);
Route::post('add-package', [PackageController::class, 'store']);



//ajax...
Route::get('extra', [HotelController::class, 'extra']);

//Hotel details
Route::get('book-now/{id}', [HotelController::class, 'bookNow'])->name('book-now');
