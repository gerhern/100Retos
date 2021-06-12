<?php

use App\Http\Controllers\BasicController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });


//Index de retos
Route::view('/', 'index');

//Retos basicos sin logica compleja
Route::get('day1',[BasicController::class, 'day1'])->name('day1');