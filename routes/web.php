<?php

use App\Http\Controllers\ComplaintsController;
use App\Http\Controllers\InboxController;
use App\Http\Controllers\SendsController;
use App\Http\Controllers\DispositionsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ResponseController;
use App\Http\Controllers\LoginController;
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

Route::resource('/inbox', InboxController::class)->middleware('auth');
Route::resource('/send', SendsController::class)->middleware('auth');
Route::resource('/disposition', DispositionsController::class)->middleware('auth');
Route::resource('/user', UserController::class)->middleware('auth');
Route::resource('/complaint', ComplaintsController::class)->middleware('auth');
Route::resource('/response', ResponseController::class)->middleware('auth');

Route::get('/dashboard',[DashboardController::class, 'index'])->middleware('auth');
Route::get('/inboxreport',[DashboardController::class, 'inbox'])->middleware('auth');
Route::get('/sendreport',[DashboardController::class, 'send'])->middleware('auth');
Route::get('/dispositionreport',[DashboardController::class, 'disposition'])->middleware('auth');
Route::get('/userreport',[DashboardController::class, 'user'])->middleware('auth');

Route::get('/', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout'])->middleware('auth');