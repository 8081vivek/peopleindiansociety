<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;  
use App\Http\Controllers\UserController;  
use App\Http\Controllers\VolunteerController;  
use App\Http\Controllers\ReviewController;  
use App\Http\Controllers\TreePlant;  
use App\Models\admin_panel;    
use App\Models\user_panel;                
use App\Models\review_panel;                


Route::view('Admin','admin_login');
Route::get('logoutAdmin',[AdminController::class,'logout']);
Route::get('ad',[AdminController::class,'dashboard']);
Route::view('/','welcome');
Route::view('h','header');
Route::view('login','user_login');
Route::view('user_register','/user_register');
Route::view('v','/volentier_registration');
Route::view('g','Gallery');
Route::view('a','aboutus');
Route::get('r',[ReviewController::class,'reviewsPage']);
Route::view('activity','activityProgram');
Route::view('otp','otp_verification');
Route::view('trees','treeTypes');
Route::view('misson','mission');
Route::view('wrongPage','wrong_pasword');
Route::view('NotFound','userNotFound');


Route::view('treeSteps','treePlantingTimeLine');
Route::post('login_form',[AdminController::class,'login']);
Route::get('aprove/{id}',[AdminController::class,'reviewAproved']);
Route::get('reviewDelete/{id}',[AdminController::class,'reviewDelete']);
Route::post('/user_register', [UserController::class, 'register']);
Route::post('user_login',[UserController::class,'login']);
Route::post('resend',[UserController::class,'resendOtp']);
Route::post('verify_otp',[UserController::class,'verifyOtp']);

Route::get('user',[UserController::class,'dashboardView']);
Route::get('logout',[UserController::class,'logout']);


Route::get('progress/{id}',[TreePlant::class,'TreeProgress']);


Route::get('tree',[TreePlant::class,'treeForm']);
Route::get('mytrees',[TreePlant::class,'myPlant']);
Route::post('register',[TreePlant::class,'treePlantform']);
Route::post('update',[TreePlant::class,'treeUpdate']);
Route::get('growth',[TreePlant::class,'growthView']);
Route::get('achivement',[UserController::class,'achivementView']);
Route::get('userManagement',[UserController::class,'user_management']);

Route::get('volenteer',[VolunteerController::class,'volunteerDashboard']);



Route::get('/userDelete/{id}',[UserController::class,'userDelete']);
Route::get('/volunteer-approve/{id}',[UserController::class,'approveVolunteer']);

// donate form
Route::view('donateform','donate');


Route::get('/export/all-users-trees', [UserController::class, 'exportAllUsersTreesExcel']);
Route::get('/pdf/users-trees', [UserController::class, 'usersTreesPdfFilter']);


#reviews 

Route::post('/review',[ReviewController::class,'reviewForm']);




