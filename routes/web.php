<?php

use App\Http\Controllers\GameController;
use Illuminate\Support\Facades\Route;

Route::get('/whoami', function () {
    return 'JOHN LLOYD R. RAMIGOSO | Block 4C | ITRACKB4 Laravel 12';
});


Route::get('/games', [GameController::class, 'index'])->name('games.index');

Route::get('/games/featured', [GameController::class, 'featured'])->name('games.featured');

Route::get('/games/filter/{genre?}', [GameController::class, 'filter'])->name('games.filter');

Route::get('/games/{id}', [GameController::class, 'show'])->name('games.show');