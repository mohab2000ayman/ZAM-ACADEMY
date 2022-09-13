<?php

use App\Models\Todo;
use App\Http\Controllers\TodoController;
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

Route::get('/', function () {

    return view('welcome');
});
Route::prefix('todo')->group(function (){
    Route::get("/",[\App\Http\Controllers\TodoController::class,'index'])->name('todo.index');
    Route::get("/create",[\App\Http\Controllers\TodoController::class,'create'])->name('todo.create');
    Route::post("/store",[\App\Http\Controllers\TodoController::class,'store'])->name('todo.store');
    Route::get('/course', function () {
        return view('todo.store');})->name('todo.course');


    Route::post("/storeb/{id}",[\App\Http\Controllers\TodoController::class,'storeb'])->name('todo.storeb');

    Route::get("/show/{id}",[\App\Http\Controllers\TodoController::class,'show'])->name('todo.show');
    Route::get("/edit/{id}",[\App\Http\Controllers\TodoController::class,'edit'])->name('todo.edit');
    Route::post("/update/{id}",[\App\Http\Controllers\TodoController::class,'update'])->name('todo.update');

    Route::get("/delete/{id}",[\App\Http\Controllers\TodoController::class,'destroy'])->name('todo.delete');


    Route::get("/cart",[\App\Http\Controllers\TodoController::class,'cart'])->name('todo.cart');

    Route::get('/Login', function () {
        return view('todo.create');})->name('todo.login');


    Route::get('/Aboutus', function () {
        return view('todo.aboutus');})->name('todo.about');


});
