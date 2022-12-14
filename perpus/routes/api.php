<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\PustakawanController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
// route untuk menampilkan data pustakawan
Route::get('/pustakawan', [PustakawanController::class, 'index']);

// Get all resource

Route::get('/books', [BookController::class, 'index']);

// add resource

Route::post('/books', [BookController::class, 'store' ]);

// get detail resource
Route::get('/books/{id}', [BookController::class, 'show']);
//edit resource
Route::put('/books{id}', [BookController::class, 'update']);