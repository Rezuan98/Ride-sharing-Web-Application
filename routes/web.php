<?php
use App\Http\Controllers\LandingController;

use App\Http\Controllers\RideController;
use App\Http\Controllers\bookingController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\adminController;
use illuminate\Support\Facades\Auth;

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\welcomeEmailController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/',[LandingController::class,'landing'])->name('landing');

Route::get('/login',[LandingController::class,'OnLogin'])->name('logging.in');
Route::get('/passnger_register',[LandingController::class,'OnRegister'])->name('passenger_register');
Route::get('/rider_register',[LandingController::class,'riderRegister'])->name('rider_register');
Route::get('/all_register',[LandingController::class,'allRegister'])->name('all_register');

Route::get('/admin/login',[LandingController::class,'adminLogin'])->name('admin.login');



Route::post('/insertuser',[LandingController::class,'insertUser']);
Route::post('/insertrider',[LandingController::class,'insertRider']);
Route::post('login', [AuthenticatedSessionController::class, 'store'])->name('login');
Route::get('/about/us',[LandingController::class,'aboutUs'])->name('about.us');


Route::get('/welcome-email/{email}',[welcomeEmailController::class,'sendwelcomEmail'])->name('welcome.email');
Route::get('/confirm-email',[welcomeEmailController::class,'confirmEmail'])->name('confirm.email');
Route::get('/confirm-code',[welcomeEmailController::class,'confirmCode'])->name('confirm.code');



Route::middleware('auth')->group(function () {
    Route::get('/rides',[RideController::class,'Rides'])->name('rides');
    Route::post('/post/ride',[RideController::class,'postRide'])->name('post.ride');

   
    
    

    Route::get('/store/ride', [RideController::class,'storeRide'])->name('store.ride');

    Route::post('/booking/store',[bookingController::class,'bookingStore'])->name('booking.store');
    Route::get('/bookings',[bookingController::class,'bookings'])->name('bookings');
    Route::get('/delete/ride/{id}',[bookingController::class,'Deletebookings'])->name('delete.ride');




    Route::get('/travel/ride/{ride_id}/{user_id}', [RideController::class, 'TravelDetails'])->name('travel.ride');
// rider dashboard routes
Route::get('/rider/dashboard',[LandingController::class,'riderDashboard'])->name('rider.dashboard');

// admin dashboard routes

Route::get('/admin/dashboard',[LandingController::class,'adminDashboard'])->name('admin.dashboard');
Route::get('/pending/rides',[adminController::class,'pendingRides'])->name('pending.rides');
Route::get('/all/users',[adminController::class,'allUsers'])->name('all.users');
Route::get('/all/riders',[adminController::class,'allRiders'])->name('all.riders');
Route::get('/posted/rides',[adminController::class,'postedRides'])->name('posted.rides');


    Route::get('logout', [AuthenticatedSessionController::class, 'destroy'])
                ->name('logout');


});

// admin dashboard all route here


Route::get('/search/rides', [RideController::class,'searchRide'])->name('search.ride');
Route::get('/ride/details/{id}', [RideController::class,'rideDetails'])->name('ride.details');

require __DIR__.'/auth.php';

