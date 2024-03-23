<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UploadController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dropzone/create', [UploadController::class, 'index'])->name('dropzone');
Route::post('/upload', [UploadController::class, 'store'])->name('upload');


