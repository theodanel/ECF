<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MatelasController;
use App\Models\Matela;
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

Route::get('/', [HomeController::class, 'index']);

Route::get('create', [MatelasController::class, 'create']);
Route::post('create', [MatelasController::class, 'store']);
