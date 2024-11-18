<?php

use App\Http\Controllers\EuroController;
use Illuminate\Support\Facades\Route;

Route::get('/', [EuroController::class, 'index'])->name('home');
Route::get('/hungary', [EuroController::class, 'hungary'])->name('euro2024.hungary');
Route::get('/nations', [EuroController::class, 'nations'])->name('euro2024.nations');
Route::get('/groups/{group}', [EuroController::class, 'groups'])->where('group', '[A-F]{1}')->name('euro2024.groups');
Route::get('/statistics', [EuroController::class, 'statistics'])->name('euro2024.statistics');