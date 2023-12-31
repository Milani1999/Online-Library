<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\UserBorrowedController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/register',[RegisterController::class,'store']);
Route::post('/login',[LoginController::class,'check']);
Route::get('/books',[BooksController::class,'index']);
Route::post('/books/{id}/borrow/{userId}', [BooksController::class, 'borrowBook']);
Route::post('/books/{id}/return', [BooksController::class, 'returnBook']);
Route::get('/users/{user}/borrowed_books', [UserBorrowedController::class, 'index']);

