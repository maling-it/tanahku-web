<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DeviceController;
use Illuminate\Support\Facades\Http;
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

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/device', [DeviceController::class, 'index']);
Route::get('/device/{id}', [DeviceController::class, 'show']);
Route::get('/docs', function () {
    return view('docs');
});

Route::get('/docs/json', function () {
    return Http::get(env('API_URL') . '/api-docs');
});
