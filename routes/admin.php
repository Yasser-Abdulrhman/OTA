<?php


use App\Http\Controllers\Admin\CarController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\HotelController;
use App\Http\Controllers\Admin\TourController;
use App\Http\Controllers\Admin\TourGuideController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
define('PAGINATION_COUNT',10);
//Route::group(['middleware'=>'auth:admin'],function() {
    Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard');

    ############################## Start Languages Routes ###################################
    Route::group(['prefix' => 'hotels'], function () {
        Route::get('/', [HotelController::class, 'index'])->name('admin.hotels');
        Route::get('create', [HotelController::class, 'create'])->name('admin.hotels.create');
        Route::post('store',[HotelController::class,'store'])->name('admin.hotels.store');
        Route::get('edit/{hotel_id}',[HotelController::class,'edit'])->name('admin.hotels.edit');
        Route::post('update/{hotel_id}',[HotelController::class,'update'])->name('admin.hotels.update');
        Route::get('delete/{hotel_id}',[HotelController::class,'delete'])->name('admin.hotels.delete');
    });
    ############################## End Hotels Routes ####################################
    ############################## Start Tours Routes ###################################
    Route::group(['prefix' => 'tours'], function () {
        Route::get('/', [TourController::class, 'index'])->name('admin.tours');
        Route::get('create', [TourController::class, 'create'])->name('admin.tours.create');
        Route::post('store',[TourController::class,'store'])->name('admin.tours.store');
        Route::get('edit/{tour_id}',[TourController::class,'edit'])->name('admin.tours.edit');
        Route::post('update/{tour_id}',[TourController::class,'update'])->name('admin.tours.update');
        Route::get('delete/{tour_id}',[TourController::class,'delete'])->name('admin.tours.delete');
    });
    ############################## End Tours Routes #####################################
    ############################## Start Tours Routes ###################################
    Route::group(['prefix' => 'cars'], function () {
        Route::get('/', [CarController::class, 'index'])->name('admin.cars');
        Route::get('create', [CarController::class, 'create'])->name('admin.cars.create');
        Route::post('store',[CarController::class,'store'])->name('admin.cars.store');
        Route::get('edit/{car_id}',[CarController::class,'edit'])->name('admin.cars.edit');
        Route::post('update/{car_id}',[CarController::class,'update'])->name('admin.cars.update');
        Route::get('delete/{car_id}',[CarController::class,'delete'])->name('admin.cars.delete');
    });
    ############################## End Tours Routes ###################################
    ############################## Start Tour Guide Routes ###################################
    Route::group(['prefix' => 'tour_guide'], function () {
        Route::get('/', [TourGuideController::class, 'index'])->name('admin.tourGuide');
        Route::get('create', [TourGuideController::class, 'create'])->name('admin.tourGuide.create');
        Route::post('store',[TourGuideController::class,'store'])->name('admin.tourGuide.store');
        Route::get('edit/{tour_guide_id}',[TourGuideController::class,'edit'])->name('admin.tourGuide.edit');
        Route::post('update/{tour_guide_id}',[TourGuideController::class,'update'])->name('admin.tourGuide.update');
        Route::get('delete/{tour_guide_id}',[TourGuideController::class,'delete'])->name('admin.tourGuide.delete');
    });
    ############################## End Tour Guide Routes ###################################
//});

//Route::group(['namespace' => 'Admin', 'middleware' => 'guest:admin'], function () {
//    Route::get('login', [LoginController::class,'getLogin'])->name('get.admin.login');
//    Route::post('login', [LoginController::class,'login'])->name('admin.login');
//});

