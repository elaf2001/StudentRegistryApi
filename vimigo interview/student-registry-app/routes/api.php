<?php
use App\Http\Controllers\StudentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// // Returns a list of all the students 
// Route::get('/students', [StudentController::class, 'index'] );


// // Stores a student in the list 
// Route::post('/students', [StudentController::class, 'store']); 


Route::resource('students', StudentController::class); 

// search student by name 
Route::get('/students/searchByName/{name}', [StudentController::class, 'searchByName']);

// search student by email
Route::get('/students/searchByEmail/{email}', [StudentController::class, 'searchByEmail']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
