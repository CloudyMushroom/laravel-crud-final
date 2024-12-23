<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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

Route::get('/', [StudentController::class, 'Index'])->name('student.index');
Route::post('/register', [StudentController::class, 'StoreData'])->name('student.create');
Route::get('/register', [StudentController::class, 'ViewCreatePage'])->name('student.create');



