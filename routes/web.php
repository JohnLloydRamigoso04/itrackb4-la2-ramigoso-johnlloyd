<?php

use App\Http\Controllers\GameController;
use Illuminate\Support\Facades\Route;

Route::get('/whoami', function () {
    return 'JOHN LLOYD R. RAMIGOSO | Block 4C | ITRACKB4 Laravel 12';
});

Route::get('/games', [GameController::class, 'index'])->name('games.index');

// The {id} is the route parameter
Route::get('/games/{id}', [GameController::class, 'show'])->name('games.show');