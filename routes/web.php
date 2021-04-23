<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TourController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\BookTourController;
use App\Http\Controllers\UserController;



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
// Route::group(['middleware'=>'auth'], function(){
//     Route::get('/', function () {
//         return view('content.home');
//     });
//     Route::get('/hotel', function () {
//         return view('content.hotelDetails');
//     });
//     Route::get('/hotels', function () {
//         return view('content.hotels');
//     });
//     // Route::get('/tours', function () {
//     //     return view('content.tours');
//     // });
//     Route::get('/tour', function () {
//         return view('content.tourDetails');
//     });
//     Route::get('/cars', function () {
//         return view('content.cars');
//     });
//     Route::get('/car', function () {
//         return view('content.carDetails');
//     });
// });

// Route::get('/tours', "App\Http\Controllers\TourController@index");

// Route::get('/tours', [TourController::class, 'index']);
  

########################### Tour #########################################
// Route::get('/tours', [TourController::class, 'index'])->name('tour.index');
// Route::get('/tour/{id}', [TourController::class, 'show'])->name('tour.show');

// Route::post('/admin/tour/create', [TourController::class, 'create'])->name('tour.create');
// Route::get('/admin/tour/{id}/edit', [TourController::class, 'edit'])->name('tour.edit');
// Route::post('/admin/tour/{id}/update', [TourController::class, 'update'])->name('tour.update');
// Route::get('/admin/tour/{id}/delete', [TourController::class, 'destroy'])->name('tour.destroy');


Route::resource('tours', TourController::class);
Route::resource('hotels', HotelController::class);
Route::resource('cars', CarController::class);
Route::resource('booktour', BookTourController::class);
Route::get('home', [HomeController::class, 'index']);

// Route::get('tours/asc', [TourController::class, 'tourAsc'])->name('tours.asc');




Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
