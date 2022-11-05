<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransportRegistrationController;
use App\Http\Controllers\AddVehicleController;

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

Route::get('/home', function () {
    return view('welcome');
});
Route::get('/Regi',[TransportRegistrationController::class,'Registation'])->name('Regi');
Route::post('/Regi',[TransportRegistrationController::class,'Registationsubmit'])->name('Regi');
Route::get('/login',[TransportRegistrationController::class,'login'])->name('login');
Route::post('/login',[TransportRegistrationController::class,'loginSubmit'])->name('login');

Route::get('/logout',[TransportRegistrationController::class,'logout'])->name('logout');
Route::get('/Transportdashboard',[TransportRegistrationController::class,'RegiDashBoard'])->middleware('ValidTransportRegistration')->name('Registation');

//

Route::get('/AddVehicle',[AddVehicleController::class,'AddVehicle'])->name('AddVehicle');
Route::post('/AddVehicle',[AddVehicleController::class,'AddVehicleSubmit'])->name('AddVehicle');


Route::get('/ShowVehicle',[AddVehicleController::class,'ShowVehicle'])->name('ShowVehicle');
Route::any('/BuyTicketInfo',[AddVehicleController::class,'BuyTicket'])->name('BuyTicketInfo');
//
Route::get('/EditVehicle/{id}',[AddVehicleController::class,'VehicleEdit'])->name('EditVehicle');
Route::post('/EditVehicle',[AddVehicleController::class,'VehicleEditSubmitted'])->name('EditVehicle');
Route::get('/VehicleDelete/{id}',[AddVehicleController::class, 'VehicleDelete'])->name('VehicleDelete');

Route::any('/MyVehicle',[AddVehicleController::class,'MyVehicle'])->name('MyVehicle');
