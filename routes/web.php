<?php

use App\Http\Controllers\RController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
 
Route::get('test/create', [RController::class, 'create'])->name('r.create');
Route::post('test/store', [RController::class, 'store'])->name('r.store');


