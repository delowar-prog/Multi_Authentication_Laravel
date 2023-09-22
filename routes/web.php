<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//All Normal Users Routes List
Route::middleware(['auth','user-access:user'])->group(function(){
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});

//All Student Routes List
Route::middleware(['auth','user-access:student'])->group(function(){
    Route::get('/student/home',[HomeController::class, 'index'])->name('student.home');
});

//All Manager Routes List
Route::middleware(['auth','user-access:manager'])->group(function(){
    Route::get('/manager/home',[HomeController::class, 'index'])->name('manager.home');
});

//All Manager Routes List
Route::middleware(['auth','user-access:admin'])->group(function(){
    Route::get('/admin/home',[HomeController::class, 'index'])->name('admin.home');
});
