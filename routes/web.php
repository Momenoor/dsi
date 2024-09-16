<?php

use App\Http\Controllers\CreditorListController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('list/{commercial}', CreditorListController::class)->name('commercial-list');
Route::get('list/{sokuk}', CreditorListController::class)->name('sokuk-list');
Route::get('list/{labour}', CreditorListController::class)->name('labour-list');

