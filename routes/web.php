<?php

use App\Http\Controllers\Students\StudentsController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index',[StudentsController::class,'index'])->name('students.index');
Route::get('students/create', [StudentsController::class, 'create'])->name('students.create');
Route::post('students', [StudentsController::class, 'store'])->name('students.store');
Route::get('students/{student}', [StudentsController::class, 'show'])->name('students.show');
Route::get('students/{student}/edit', [StudentsController::class, 'edit'])->name('students.edit');
Route::put('students/{student}', [StudentsController::class, 'update'])->name('students.update');
Route::delete('students/{student}', [StudentsController::class, 'destroy'])->name('students.destroy');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
