<?php

use App\Http\Controllers\{BasicController, ChallengeController, MathController, ChallengesController};
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

//Creacion de retos
Route::get('createNewChallenge', [ChallengeController::class, 'create']);
Route::get('saveChallenge', [ChallengeController::class, 'store'])->name('store');

//Index de retos
Route::get('/', [ChallengeController::class, 'index'])->name('home');

//Retos basicos sin logica compleja
//Dia(s) 1, 4, 5, 7
Route::get('day1',[BasicController::class, 'day1'])->name('reto1');
Route::get('day4',[BasicController::class, 'day4'])->name('reto4');
Route::get('day5',[BasicController::class, 'day5'])->name('reto5');
Route::get('day7',[BasicController::class, 'day7'])->name('reto7');
Route::get('day9',[BasicController::class, 'day9'])->name('reto9');
Route::get('day10',[BasicController::class, 'day10'])->name('reto10');
Route::get('day11',[BasicController::class, 'day11'])->name('reto11');

//Retos de Matematicas
//Dia(s) 2, 3, 6, 8
Route::get('day2',[MathController::class, 'day2'])->name('reto2');
Route::get('day3',[MathController::class, 'day3'])->name('reto3');
Route::get('day6',[MathController::class, 'day6'])->name('reto6');
Route::get('day8',[MathController::class, 'day8'])->name('reto8');
Route::get('day12',[MathController::class, 'day12'])->name('reto12');
Route::get('day13',[MathController::class, 'day13'])->name('reto13');

