<?php


use App\Http\Controllers\GoogleController;
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

//Route::group(['middleware'=>'auth'], function(){
    Route::get('/', function () {
        return view('content.home');
    });
    Route::get('/hotel', function () {
        return view('content.hotelDetails');
    });
    Route::get('/hotels', function () {
        return view('content.hotels');
    });
    Route::get('/tours', function () {
        return view('content.tours');
    });
    Route::get('/tour', function () {
        return view('content.tourDetails');
    });
    Route::get('/cars', function () {
        return view('content.cars');
    });
    Route::get('/car', function () {
        return view('content.carDetails');
    });
//});

Route::get('auth/{service}', [GoogleController::class, 'redirectToGoogle']);
Route::get('auth/{service}/callback', [GoogleController::class, 'handleGoogleCallback']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


