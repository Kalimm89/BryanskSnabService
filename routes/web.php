<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServController;
use App\Http\Controllers\Admin\QuestionsController;
use App\Http\Controllers\Admin\UserListController;
use App\Http\Controllers\Services\OfficeRentController;
use App\Http\Controllers\Services\WarehouseRentController;
use App\Http\Controllers\Services\StorageController;
use App\Http\Controllers\Services\СrossDockingController;


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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/сonsultation', [HomeController::class, 'сonsultation'])->name('сonsultation');
Route::post('/mailing', [HomeController::class, 'mailing'])->name('mailing');

Route::prefix('uslugi')->group(function () {
    Route::get('/', [ServController::class, 'index'])->name('serv');
    Route::get('/cross-docking', [СrossDockingController::class, 'index'])->name('cross-docking');
    Route::get('/storage', [StorageController::class, 'index'])->name('storage');
    Route::get('/office-rent', [OfficeRentController::class, 'index'])->name('office-rent');
    Route::get('/warehouse-rent', [WarehouseRentController::class, 'index'])->name('warehouse-rent');
});

Route::middleware('admin')->prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin');
    Route::resource('/questions', QuestionsController::class);
    Route::resource('/userlist', UserListController::class);
});

Route::middleware('guest')->group(function () {
Route::get('/register', [UserController::class, 'create'])->name('register.create');
Route::post('/register', [UserController::class, 'store'])->name('register.store');
Route::get('/login', [UserController::class, 'loginForm'])->name('login.create');
Route::post('/login', [UserController::class, 'login'])->name('login');
});

Route::get('/logout', [UserController::class, 'logout'])->name('logout')->middleware('auth');

