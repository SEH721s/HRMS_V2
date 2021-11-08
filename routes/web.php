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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('redirects','App\Http\Controllers\HomeController@index');
//hod routes
Route::get('/mystaff', function () {
    return view('hod.mystaff');
});
Route::get('/leaves', function () {
    return view('hod.leaves');
});
Route::get('/events', function () {
    return view('hod.events');
});
Route::get('/performance', function () {
    return view('hod.performance');
});

