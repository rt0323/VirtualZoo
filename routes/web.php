<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::post('/edit', function () {
    return view('edit');
});
Route::post('/info', function () {
    return view('info');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/info', [App\Http\Controllers\ZooController::class, 'info'])->name('info');
Route::get('/edit', [App\Http\Controllers\ZooController::class, 'edit'])->name('edit');
Route::get('/create', [App\Http\Controllers\ZooController::class, 'Create'])->name('create');
Route::post('/create', [App\Http\Controllers\ZooController::class, 'AddZoo'])->name('create');
Route::get('edit/{id}', [App\Http\Controllers\ZooController::class, 'update']);
Route::get('delete/{id}', [App\Http\Controllers\ZooController::class, 'delete']);
Route::put('updatezoo/{id}', [App\Http\Controllers\ZooController::class, 'zoo']);
Route::get('/', [App\Http\Controllers\ZooController::class, 'animal'])->name('animal');
