<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TakmilController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/dashboardHome', function () {
    return view('welcome');
});

// Route::get('/dashboard',[HomeController::class,"index"]);
Route::get('/addForm', [HomeController::class, "create"]);
Route::post('/store', [HomeController::class, "store"])->name("store");
Route::get('/edit/{id}', [HomeController::class, "edit"])->name("edit");
Route::post('/update/{id}', [HomeController::class, "update"])->name("update");
Auth::routes();
// Auth::routes(['register'=>false]);
Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/', [TakmilController::class, "index"]);
