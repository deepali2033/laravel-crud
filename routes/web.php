<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
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
    return view('welcome');
});
//  Route::get("/form",[FormController::class,'show']);
//  Route::post("/form/Store",[FormController::class,'store'])->name('users.store');
//  Route::get("/form/msg",function(){     return view('users.msg'); })->name('users.msg');
//  Route::get("/form/main",[FormController::class,'update'])->name('users.update');

 Route::get("/form", [FormController::class, 'show'])->name('users.form');
Route::post("/form/store", [FormController::class, 'store'])->name('users.store');
Route::get("/form/main", [FormController::class, 'display'])->name('users.display');

// 
Route::get("/form/{id}/edit",[FormController::class,'edit'])->name('users.edit');
 Route::put("/form/{id}/update",[FormController::class,'update'])->name('users.update');
 Route::get("/form/{id}/delete",[FormController::class,'destroy'])->name('users.destroy');
 
