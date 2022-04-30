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

Route::get('/',[EmployeeCRUD::class,'index'])->name('home');
Route::post('/',[EmployeeCRUD::class,'create']);
Route::post('/update',[EmployeeCRUD::class,'update'])->name('update');
Route::get('/edit/{id}',[EmployeeCRUD::class,'edit'])->name('edit');
Route::get('/delete/{id}',[EmployeeCRUD::class,'destroy'])->name('delete');