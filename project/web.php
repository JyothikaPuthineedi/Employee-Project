<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\normalUserController;
use App\Http\Controllers\AdminController;
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


Route::get('login',[LoginController::class,'login']);
Route::get('registration',[LoginController::class,'registration']);
Route::get('forgotpassword',[LoginController::class,'forgotPassword']);
Route::post('register_user',[LoginController::class,'registerUser']);
Route::post('login_user',[LoginController::class,'loginUser']);
route::post('valid',[LoginController::class,'validation']);
Route::get('screen',[LoginController::class,'screen']);
//Route::post('',[normalUserController::class,'addIssue']);
Route::post('/create', [normalUserController::class,'addIssue']);

Route::get('normal/{emp_id}',[normalUserController::class,'getNormalUser']);
// Route::view('normal','normalUser');

Route::get('normal/editMobile/{emp_id}',[normalUserController::class,'UpdateMobile']);

Route::post('editMobile',[normalUserController::class,'Update']);

//for projects
/*route::view('reg','Admin');

route::get('reg',[AdminController::class,'fun']);
route::get('delete/{emp_id}',[AdminController::class,'delete']);
route::post('p',[AdminController::class,'addProjects']);
route::view('p','project');
route::view('empreg','employeregister');*/

Route::get('admin',[AdminController::class,'admin']);
Route::get('reg',[AdminController::class,'registerEmployee']);
Route::get('info/{id}',[AdminController::class,'regEmployeeInfo']);
Route::get('delete/{id}',[AdminController::class,'deleteEmpData']);
route::view('emp','updateEmp');
Route::post('edit/{id}',[AdminController::class,'showData']);

route::post('p',[AdminController::class,'addProject']);
route::view('p','project');
Route::get('getproject',[AdminController::class,'getProject']);
Route::get('getprojectdetails/{id}',[AdminController::class,'getProjectDetails']);

Route::get('updateemployee/{emp_id}',[AdminController::class,'showData']);
Route::post('updateemployee/',[AdminController::class,'updateEmployee']);