<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TravelLogController;


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

Route::get('/', function () {
    return view('home', ['title' => 'catatan_travel']);
})->name('home');

// route index/dasboard
Route::get('/travel', function () {
    return view('travel.index');
})->middleware(['auth', 'verified'])->name('index');


Route::get('/travel', [TravelLogController::class, 'index'])->name('travel.index');
Route::get('/travel/create', [TravelLogController::class, 'create'])->name('travel.create');
Route::post('/travel/create', [TravelLogController::class, 'store'])->name('travel.store');
Route::get('/travel/{id}', [TravelLogController::class, 'show'])->name('travel.show');
Route::get('/travel/{id}/edit', [TravelLogController::class, 'edit'])->name('travel.edit');
Route::put('/travel/{id}/edit', [TravelLogController::class, 'update'])->name('travel.update');
Route::delete('/travel/{id}', [TravelLogController::class, 'delete'])->name('travel.destroy');



// route login/register/change password
// get 
Route::get('register', [UserController::class, 'register'])->name('register');
Route::get('login', [UserController::class, 'login'])->name('login');
Route::get('password', [UserController::class, 'password'])->name('password');
Route::get('logout', [UserController::class, 'logout'])->name('logout');

// post
Route::post('register', [UserController::class, 'register_action'])->name('register.action');
Route::post('login', [UserController::class, 'login_action'])->name('login.action');
Route::post('password', [UserController::class, 'password_action'])->name('password.action');
