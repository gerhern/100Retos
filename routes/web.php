<?php

use App\Http\Controllers\{BasicController, MathController, ChallengesController};
use App\Models\Challenge;
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
Route::get('/', [BasicController::class, 'index'])->name('home.index');

//Retos basicos sin logica compleja
//Dia1
Route::get('day1',[BasicController::class, 'day1'])->name('reto1');

//Retos de Matematicas
//Dia2
Route::get('day2',[MathController::class, 'day2'])->name('reto2');

//Agregar retos
Route::get('challenges', [ChallengesController::class, 'index']);
Route::post('challenges/store',[ChallengesController::class, 'store'])->name('challenges.store');