<?php

use App\Http\Controllers\Api\EmployeeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/', [EmployeeController::class, 'index'])->name('all');
Route::get('/{id}', [EmployeeController::class, 'show'])->name('employee')->where('id', '[0-9]+');
Route::post('/create', [EmployeeController::class, 'store'])->name('create');

