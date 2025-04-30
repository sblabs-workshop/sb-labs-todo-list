<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get("/", \App\Http\Controllers\TodoListController::class . "@index")->name("todolist.index");
