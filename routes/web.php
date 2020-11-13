<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;

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

Route::get('/paint-jobs', function () {
    return view('paint_jobs');
});

Route::post('api/post', [CarController::class, 'create']);
Route::get('api/get', [CarController::class, 'getCarDetails']);
Route::get('api/get/all-cars', [CarController::class, 'getAllCars']);
