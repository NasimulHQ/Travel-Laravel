<?php

use App\Http\Controllers\PageController;
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
//     return view('welcome');
// });

Route::get('/', [PageController::class, 'homepage'])->name('home');
Route::get('/flights', [PageController::class, 'flights'])->name('flight');
Route::get('/hotels', [PageController::class, 'hotels'])->name('hotel');
Route::get('/holidays', [PageController::class, 'holidays'])->name('holiday');
Route::get('/blogs', [PageController::class, 'blogs'])->name('blog');