<?php

use App\Http\Controllers\CreditorListController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('list/{type}', CreditorListController::class)->name('creditor-list');

Route::get('/import', function () {
    return view('import');
});
Route::post('/import', [\App\Http\Controllers\CreditorListImportController::class, 'import'])->name('creditor.list.import');



