<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;


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
   //return redirect("contact");
});


Route::get('login',[LoginController::class,'login']);
Route::get('registration',[LoginController::class,'registration']);
Route::get('forgotpassword',[LoginController::class,'forgotPassword']);
Route::post('register_user',[LoginController::class,'registerUser']);
Route::post('login_user',[LoginController::class,'loginUser']);
route::post('valid',[LoginController::class,'validation']);
Route::get('screen',[LoginController::class,'screen']);






























