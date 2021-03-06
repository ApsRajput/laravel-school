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



Route::group(array('middleware' => 'auth'), function()
{
    Route::get('/', function () {
        return redirect('students');
    });

    // Student
    Route::resource('students', 'StudentController');
    // Teacher
    Route::resource('teachers', 'TeacherController');
});


Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();