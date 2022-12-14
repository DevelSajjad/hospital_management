<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/',[HomeController::class,'index']);

Route::get('/home',[HomeController::class,'redirect'])->middleware('auth','verified');
Route::get('add_doctor_view',[AdminController::class,'doctorview']);
Route::post('/add_doctor',[AdminController::class,'upload']);
Route::post('/appoitment',[HomeController::class,'appoitment']);
Route::get('/my_appointment',[HomeController::class,'myappointment']);
Route::get('/cancel_appointment/{id}',[HomeController::class,'cancel']);
Route::get('/appointments',[AdminController::class,'showappointments']);
Route::get('/approved/{id}',[AdminController::class,'approved']);
Route::get('/cancel/{id}',[AdminController::class,'cancel']);
Route::get('/admin_doctors',[AdminController::class,'doctors']);
Route::get('/delete_doctor/{id}',[AdminController::class,'delete_doctor']);
Route::get('/update_view/{id}',[AdminController::class,'update_view']);
Route::post('/updated_doctors/{id}',[AdminController::class,'update']);
Route::get('/send_mail/{id}',[AdminController::class,'sendmail']);
Route::post('/sentmail/{id}',[AdminController::class,'sentmail']);