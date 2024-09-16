<?php

use App\Http\Controllers\CreditorListController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('commercial-list/{$type}', [CreditorListController::class])->name('commercial-list');
Route::get('sokuk-list/{$type}', [CreditorListController::class])->name('sokuk-list');
Route::get('labour-list/{$type}', [CreditorListController::class])->name('labour-list');

