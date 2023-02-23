<?php

use App\Http\Controllers\CafeController;
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

Route::get('/',[CafeController::class, 'home'])->name('cafe.home');
Route::get('/home', [CafeController::class, 'home'])->name('cafe.home');
Route::get('/login', [CafeController::class, 'login'])->name('cafe.login');
Route::post('/home', [CafeController::class, 'store'])->name('cafe.store');
Route::get('/info', [CafeController::class, 'info'])->name('cafe.info');
Route::get('/home', [CafeController::class, 'logout'])->name('cafe.logout');

