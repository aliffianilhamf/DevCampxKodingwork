<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BiodataController;
use App\Http\Controllers\KomikController;

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

Route::get('/coba', function () {
    echo "hello world";
});

Route::get('/coba/{nama}', function ($nama) {
    echo "hallo " . $nama;
});

// Route::get('/biodata', function () {
//     return view('biodata');
// });
Route::get('/biodata/{id}', [BiodataController::class, 'index']);
Route::get('/profil', [KomikController::class, 'index']);
