<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PeriodController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TeacherClassController;
use App\Http\Controllers\TeacherController;
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

/******************LOGIN PAGE ROUTES START****************/
Route::view('/','auth.login');
Route::post('login',[AuthController::class,'login'])->name('login');
/******************LOGIN PAGE ROUTES END****************/
/******************MIDDLEWARE PAGES ROUTES START****************/
Route::group(['middleware' => 'auth:user'], function () { 
    /*******************DASHBOARD ROUTE START*************/       
    Route::view('dashboard','dashboard.index')->name('dashboard.index');
    /*******************DASHBOARD ROUTE END*************/       
    /*******************LOGOUT ROUTE START*************/       
    Route::get('logout',[AuthController::class,'logout'])->name('logout');
    /*******************LOGOUT ROUTE END*************/       
    /*******************PERIOD ROUTE START*************/     
    Route::resource('period', PeriodController::class);  
    /*******************PERIOD ROUTE END*************/      
    /*******************CLASS ROUTE START*************/     
    Route::resource('teacher_class', TeacherClassController::class);  
    /*******************CLASS ROUTE END*************/         
    /*******************SUBJECT ROUTE START*************/     
    Route::resource('subject', SubjectController::class);  
    /*******************CLASS ROUTE END*************/         
    /*******************TEACHER ROUTE START*************/     
    Route::resource('teacher', TeacherController::class);    
        /*******************TEACHER SCHEDULE ROUTE START*************/     
        Route::resource('teacher_schedule', ScheduleController::class);    
        /*******************TEACHER SCHEDULE ROUTE END*************/     
    /*******************TEACHER ROUTE END*************/       
});
/******************MIDDLEWARE PAGES ROUTES END****************/