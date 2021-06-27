<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::middleware('admin', 'auth')->group(function () {
    Route::group(['prefix' => 'admin'], function () {
        Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
        Route::get('/', function () {
            return redirect()->route('dashboard');
        });
        Route::resource('roles', App\Http\Controllers\RoleController::class);
        Route::resource('users', App\Http\Controllers\UserController::class);
        Route::resource('stations', App\Http\Controllers\StationController::class);

        Route::resource('buses', App\Http\Controllers\BusController::class);

        Route::resource('trips', App\Http\Controllers\TripController::class);

        Route::resource('lines', App\Http\Controllers\LineController::class)->except([
             'edit', 'update']);

        Route::resource('schedules', App\Http\Controllers\scheduleController::class);

        Route::resource('seats', App\Http\Controllers\SeatController::class)->except([
            'create', 'store', 'edit', 'update']);

        Route::resource('tickets', App\Http\Controllers\TicketController::class)->except([
            'create', 'store', 'edit', 'update']);

        Route::resource('reservations', App\Http\Controllers\ReservationController::class)->except([
            'create', 'store', 'edit', 'update']);
    });
});

