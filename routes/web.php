<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\UsersController;
use App\Models\User;
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
Auth::routes(['verify' => true]);

//Route::middleware('guest')->group(function () {
//    Route::get('register', [RegisterController::class, 'create'])->name('register');
//    Route::post('register', [RegisterController::class, 'store']);
//    Route::get('login', [SessionController::class, 'create'])->name('login');
//    Route::post('login', [SessionController::class, 'store']);
//});
Route::middleware(['auth', 'verified'])->group(function () {
    Route::post('logout', [SessionController::class, 'destroy']);
    Route::get('/', [DashboardController::class, 'index'])->name('home');
    Route::get('users', [UsersController::class, 'index']);
    Route::get('users/{user}', [UsersController::class, 'show']);
    Route::get('edit/{user}', [UsersController::class, 'edit']);
    Route::post('edit', [UsersController::class, 'update'])->name('editUser');
    Route::delete('delete/{user}', [UsersController::class, 'destroy'])->name('deleteUser');
});
