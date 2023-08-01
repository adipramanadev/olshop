<?php

use App\Http\Controllers\SiswaController;
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

Route::get('/', function () {
    return view('welcome');
});

//route // rute // jalan
Route::get('/hello', function () {
    return "<h1>Hello World</h1>";
});

//rute untuk mapel
Route::get('mapel',[SiswaController::class,'mapel']);
