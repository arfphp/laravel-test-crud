<?php

use App\Http\Controllers\karepmu1;
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

Route::get('/karep1', [karepmu1::class, 'index'])->name('hal_utama');
Route::post('/karep1/create', [karepmu1::class, 'create']);
Route::get('/karep1/{id}', [karepmu1::class, 'edit'])->name('hal_update');
Route::put('/karep1/{id}', [karepmu1::class, 'update']);
Route::delete('/karep1/{id}', [karepmu1::class, 'destroy'])->name('destroy');
