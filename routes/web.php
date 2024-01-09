<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
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

// Route::get('/', function () {
//     return view('home');
// });
Route::get('/',[ProductController::class, 'index'])->name('home');
Route::post('/save-student',[ProductController::class, 'save_student'])->name('saveStudent');
Route::get('/delete-student/{id}', [ProductController::class, 'delete_student'])->name('removeStudent');
Route::get('/update-student/{id}', [ProductController::class, 'update_student'])->name('updateStudent');
Route::post('/save-updated-student', [ProductController::class, 'save_updated_student'])->name('saveUpdatedStudent');
