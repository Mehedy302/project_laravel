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
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/phq9',[App\Http\Controllers\MentalHealthController::class, 'phq9'])->name('phq9');
Route::post('/phq9',[App\Http\Controllers\MentalHealthController::class, 'phq9controller'])->name('phq9controller');
Route::get('/gad7',[App\Http\Controllers\MentalHealthController::class, 'gad7'])->name('gad7');
Route::post('/gad7',[App\Http\Controllers\MentalHealthController::class, 'gad7controller'])->name('gad7controller');
Route::get('/result',[App\Http\Controllers\MentalHealthController::class, 'result'])->name('result');
Route::get('/ptsd',[App\Http\Controllers\MentalHealthController::class, 'ptsd'])->name('ptsd');
Route::post('/ptsd',[App\Http\Controllers\MentalHealthController::class, 'ptsdcontroller'])->name('ptsdcontroller');
Route::get('/bipolart',[App\Http\Controllers\MentalHealthController::class, 'bipolart'])->name('bipolart');
Route::post('/bipolart',[App\Http\Controllers\MentalHealthController::class, 'bipoartcontroller'])->name('bipolartcontroller');