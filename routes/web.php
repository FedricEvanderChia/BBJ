<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisController;
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

Route::get('/', [HomeController::class, 'index']);
Route::get('/Detail/{bookID}', [HomeController::class, 'GoToDetail'])->middleware('auth');
Route::get('/search', [HomeController::class,'search']);

Route::get('/register', [RegisController::class, 'index']);
Route::post('/register', [RegisController::class, 'store']);


Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/auth', [AuthController::class, 'auth']);
Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth');

Route::get('/manage', [ManageController::class, 'GoToManage']);
Route::get('/manage/search', [ManageController::class,'search']);
Route::get('/manage/filter', [ManageController::class,'filter']);

Route::get('/insert', [HomeController::class,'GoToInsert']);
Route::post('/insert', [GameController::class,'store']);
Route::get('/manage/update/{gameID}', [GameController::class,'GoToUpdate']);
Route::put('/manage/update/{gameID}', [GameController::class,'update']);
Route::delete('/manage/{gameID}', [GameController::class,'destroy']);