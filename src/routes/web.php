<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Contact\CreateController;
use App\Http\Controllers\Contact\IndexController;



Route::get('/', function () {
    return view('welcome');
});
Route::get('/contact', IndexController::class)->name('contact.index');
Route::post('/contact/create', CreateController::class)->name('contact.create');
