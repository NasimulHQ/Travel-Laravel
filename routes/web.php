<?php

// use Mail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\testController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\FlightController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\LatestBlogController;
use App\Http\Controllers\FeaturePostController;

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

//Hotel Search
Route::get('search', [HotelController::class, 'search']);

//Hotel details
Route::get('book-now/{id}', [HotelController::class, 'bookNow'])->name('book-now');

//Flight Route
Route::get('flightdash', [FlightController::class, 'index']);
Route::get('add-flight', [FlightController::class, 'create']);
Route::post('add-flight', [FlightController::class, 'store']);
Route::get('edit-flight/{id}', [FlightController::class, 'edit']);
Route::put('update-flight/{id}', [FlightController::class, 'update']);
Route::get('delete-flight/{id}', [FlightController::class, 'destroy']);

//Flight Search
Route::get('check', [FlightController::class, 'check']);

//Flight Details
Route::get('book-details/{id}', [FlightController::class, 'bookdetail'])->name('book-details');

//Traveler details
Route::get('traveler-detail/{booking_id}', [FlightController::class, 'travelerdetail'])->name('traveler-detail');
Route::post('travel-submit', [FlightController::class, 'tarvelsubmit'])->name('travel-submit');

//Book Flight Dashboard index
Route::get('book-flight', [FlightController::class, 'bookflight'])->name('book-flight');
Route::get('delete-bookflight/{id}', [FlightController::class, 'destroybookflight']);



//Package
Route::get('packages', [PackageController::class, 'index']);
Route::get('add-package', [PackageController::class, 'create']);
Route::post('add-package', [PackageController::class, 'store']);
Route::get('edit-package/{id}', [PackageController::class, 'edit']);
Route::put('update-package/{id}', [PackageController::class, 'update']);
Route::get('delete-package/{id}', [PackageController::class, 'destroy']);

//Feature Post
Route::get('featureposts', [FeaturePostController::class, 'index']);
Route::get('add-featurepost', [FeaturePostController::class, 'create']);
Route::post('add-featurepost', [FeaturePostController::class, 'store']);
Route::get('edit-featurepost/{id}', [FeaturePostController::class, 'edit']);
Route::put('update-featurepost/{id}', [FeaturePostController::class, 'update']);
Route::get('delete-featurepost/{id}', [FeaturePostController::class, 'destroy']);

// Latest Post
Route::get('latestblogs', [LatestBlogController::class, 'index']);
Route::get('add-latestblog', [LatestBlogController::class, 'create']);
Route::post('add-latestblog', [LatestBlogController::class, 'store']);
Route::get('edit-latestblog/{id}', [LatestBlogController::class, 'edit']);
Route::put('update-latestblog/{id}', [LatestBlogController::class, 'update']);
Route::get('delete-latestblog/{id}', [LatestBlogController::class, 'destroy']);

//ajax...
Route::get('extra', [HotelController::class, 'extra']);

