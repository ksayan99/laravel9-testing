<?php

use App\Http\Controllers\EmployeeCRUD;
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

Route::get('/create',[EmployeeCRUD::class,'index'])->name('create');
Route::post('/create',[EmployeeCRUD::class,'create'])->name('createAction');
Route::get('/edit/{id}',[EmployeeCRUD::class,'edit'])->name('edit');
Route::put('/edit/{id}',[EmployeeCRUD::class,'update']);
Route::get('/delete/{id}',[EmployeeCRUD::class,'destroy'])->name('delete');