<?php

use App\Http\Controllers\GameController;
use Illuminate\Support\Facades\Route;

Route::get('/whoami', function () {
    return 'JOHN LLOYD R. RAMIGOSO | Block 4C | ITRACKB4 Laravel 12';
});

// 1. List route
Route::get('/games', [GameController::class, 'index'])->name('games.index');

// 2. Featured route (MUST BE ABOVE {id})
Route::get('/games/featured', [GameController::class, 'featured'])->name('games.featured');

// 3. Filter route with optional parameter (MUST BE ABOVE {id})
Route::get('/games/filter/{genre?}', [GameController::class, 'filter'])->name('games.filter');

// 4. Detail wildcard route (MUST BE AT THE BOTTOM)
Route::get('/games/{id}', [GameController::class, 'show'])->name('games.show');