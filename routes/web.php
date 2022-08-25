<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ChargeController;

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

Route::get('/', [EmployeeController::class, 'getEmployees'])->name('employee-get');
Route::post('/', [EmployeeController::class, 'postEmployee'])->name('employee-post');
Route::post('charges/{id}', [EmployeeController::class, 'addCharges'])->name('charges-add');
