<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UsermanageController;
use App\Http\Controllers\AsignprojectController;
use App\Http\Controllers\cheacktodoController;
use App\Http\Controllers\todoController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\FullCalenderController;
use App\Http\Controllers\UsercheackassigntaskController;

//---------------------------------------------------------------------------

Route::get('dashboard',[DashboardController::class,'index'])->name('dashboard')->middleware('auth');
Route::get('login',[AdminLoginController::class,'adminlogin'])->name('login');
Route::post('adminlogin',[AdminLoginController::class,'logincheck'])->name('adminlogin');
Route::get('logout',[AdminLoginController::class,'logout'])->name('logout');
Route::get('change-password', [AdminLoginController::class, 'changePassword'])->name('change.password.form');
Route::post('change-password', [AdminLoginController::class, 'changPasswordStore'])->name('change.password');
Route::resource('use',UsermanageController::class)->middleware('auth');
Route::resource('admintask',AsignprojectController::class)->middleware('auth');
Route::resource('todo',todoController::class)->middleware('auth');
Route::resource('admintodo',cheacktodoController::class)->middleware('auth'); 
Route::resource('usercheackpro',UsercheackassigntaskController::class)->middleware('auth'); 

Route::get('fullcalender', [FullCalenderController::class, 'index']);
Route::post('fullcalenderAjax', [FullCalenderController::class, 'ajax']);