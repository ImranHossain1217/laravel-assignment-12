<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TripController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\SeatAllocationController;

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


Route::view('/', 'layout.app');
Route::prefix('dashboard')->group(function () {
    Route::get('create/user', [UserController::class, 'createUser'])->name('user.create');
    Route::post('create/user', [UserController::class, 'storeUser']);
    Route::get('create/location', [LocationController::class, 'createLocation'])->name('location.create');
    Route::post('create/location', [LocationController::class, 'storeLocation']);
    Route::get('create/trip', [TripController::class, 'createTrip'])->name('trip.create');
    Route::post('create/trip', [TripController::class, 'storeTrip']);
    Route::get('our/trips', [TripController::class, 'ourTrips'])->name('trip.ourTrips');
    Route::get('book/ticket/{trip_id}', [SeatAllocationController::class, 'bookTicket'])->name('bookTicket');
    Route::post('book/ticket', [SeatAllocationController::class, 'storeTicket'])->name('bookTicket.store');
});