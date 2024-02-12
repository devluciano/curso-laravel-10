<?php

use App\Http\Controllers\Admin\{SupportController};
use Illuminate\Support\Facades\Route;




Route::get("/supports", [SupportController::class, 'index'])->name('supports.index');

Route::get('/', function () {
    return view('welcome');
});
