<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookAuthorController;
use App\Http\Controllers\BookController;
use Illuminate\Http\Request;
//use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

//Rutas para Book
Route::controller(BookController::class)->group(function() {
    Route::get('/books', 'index');
    Route::post('/books', 'store');
    Route::get('/books/{id}', 'show');
    Route::put('/books/{id}', 'update');
    Route::delete('/books/{id}', 'destroy');
});

//Rutas para Author
Route::resource('authors', AuthorController::class)
    ->only(['index', 'store', 'show', 'update', 'destroy']);

//Rutas para Book_Author
Route::resource('book_authors', BookAuthorController::class)
    ->only(['index', 'store', 'show', 'update', 'destroy']);