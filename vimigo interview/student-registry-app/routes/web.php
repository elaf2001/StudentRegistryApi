<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\WebController;

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
    return view('bulk.create');
});

Route::get('/bulk.create',[WebController::class, 'uploadStudentsView'])->name('create');
Route::get('/search.name',[WebController::class, 'searchNameView'])->name('searchByName');
Route::get('/search.email',[WebController::class, 'searchEmailView'])->name('searchByEmail');
