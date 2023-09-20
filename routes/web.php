<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TodosController;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index']);

Route::get("/tareas", [TodosController::class, 'index'])->name("todos");

Route::post("/tareas", [TodosController::class, 'store'])->name("todos");


Route::get("/tareas/{id}", [TodosController::class, 'show'])->name("todos-show");

Route::patch("/tareas/{id}", [TodosController::class, 'update'])->name("todos-update");

Route::delete("/tareas/{id}", [TodosController::class, 'destroy'])->name("todos-destroy");

//CATEGORIES ROUTES
Route::get("/categories", [CategoryController::class, "index"])->name('categories.index');

Route::post("/categories", [CategoryController::class, "store"])->name('categories.store');

Route::get("/categories/{id}", [CategoryController::class, "show"])->name('categories.show');

Route::patch("/categories/{id}", [CategoryController::class, "update"])->name('categories');

Route::delete("/categories/{id}", [CategoryController::class, "destroy"])->name('categories');
