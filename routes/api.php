<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\TopicController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

//Users
Route::resource('users', UserController::class);

//Topics
Route::resource('topics', TopicController::class);

//Authors
Route::resource('authors', AuthorController::class);

//Language
Route::resource('languages', LanguageController::class);

//Books
Route::resource('books', BookController::class);

