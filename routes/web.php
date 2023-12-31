<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TasksController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::post('/homepage', [TasksController::class, 'index']);
Route::post('/homepage/create-task', [TasksController::class, 'create']);
Route::get('homepage/deletar/{idTarefa}', [TasksController::class, 'delete']);
Route::get('/homepage', [TasksController::class, 'index']);
