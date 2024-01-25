<?php

use App\Http\Controllers\CoverController;
use App\Http\Controllers\SambutanController;
use App\Http\Controllers\SambutanKetosController;
use App\Http\Controllers\SambutanKetuaBtsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TakunController;
use App\Models\Sambutan;
use App\Http\Controllers\SambutanWalasController;
use App\Http\Controllers\GuruController;

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
    return view('login.index');
});


Route::get('cover', [CoverController::class,'index']);
Route::get('guru', [GuruController::class,'index']);
Route::get('sambutan_kepsek', [SambutanController::class, 'index']);
Route::get('sambutan_walas', [SambutanWalasController::class,'index']);
Route::get('sambutan_ketos', [SambutanKetosController::class,'index']);
Route::get('sambutan_ketua_bts', [SambutanKetuaBtsController::class,'index']);

