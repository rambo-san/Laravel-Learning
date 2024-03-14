<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegistrationController;
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

Route::post('/home',[HomeController::class,'home']);

Route::get('/', function () {
    return view('login');
});
Route::get('/registration',[RegistrationController::class,'registration']);
Route::post('/register',[RegistrationController::class,'register']);
