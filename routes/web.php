<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  return view('products.index');
});

Route::middleware(['guest'])->group(function () {
  Route::get('/login', \App\Http\Controllers\AuthController::class . "@loginView")->name("login.view");
  Route::post('/login', \App\Http\Controllers\AuthController::class . "@login")->name("login");
});




Route::middleware(['auth'])->group(function () {
  Route::get("/products", \App\Http\Controllers\ProductController::class . "@index")->name("products.index");
  Route::get("/add-product", \App\Http\Controllers\ProductController::class . "@create")->name("products.create");
  Route::get("/edit-product/{id}", \App\Http\Controllers\ProductController::class . "@edit")->name("products.edit");
});
