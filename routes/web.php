<?php
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;


Route::get('/', [MainController::class, 'index']);
Route::get('about', [MainController::class, 'about'])->name('about');
Route::get('porfolio', [MainController::class, 'porfolio']) -> name('porfolio');
