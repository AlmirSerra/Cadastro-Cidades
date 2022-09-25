<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CitiesController;
use App\Http\Controllers\DistrictsController;

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

Route::get('/', [CitiesController::class, 'index']);
Route::get('/cities/create', [CitiesController::class, 'create'])->middleware('auth');
Route::get('/cities/list', [CitiesController::class, 'list']);
Route::get('/cities/{id}', [CitiesController::class, 'show']);
Route::post('/cities', [CitiesController::class, 'store']);
Route::get('/cities', function () {
    return view('/cities');
});
Route::get('/districts/create', [DistrictsController::class, 'create'])->middleware('auth');
Route::get('/districts/list', [DistrictsController::class, 'show']);
Route::get('/districts/list', [DistrictsController::class, 'list']);
Route::post('/districts', [DistrictsController::class, 'store']);
Route::get('/districts', function () {
    return view('/districts');
});

// Route::get('/cities', function () {
//     $search = request('search');
//     return view('cities', ['search' => $search]);
// });

// Route::get('/cities/{cities}', function ($cities = null) {
//     return view('cities', ['cities' => $cities]);
// });
Route::get('/dashboard', [CitiesController::class, 'index']);
