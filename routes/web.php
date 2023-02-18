<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/landing', 'LandingController@index');
Route::get('/', function () {
    return view('landing');
});

Route::get('/carmodel', 'CarmodelController@index');
Route::get('/carmodel', function () {
    return view('carmodel');
});

Route::get('/aboutus', 'AboutusController@index');
Route::get('/aboutus', function () {
    return view('aboutus');
});




// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
