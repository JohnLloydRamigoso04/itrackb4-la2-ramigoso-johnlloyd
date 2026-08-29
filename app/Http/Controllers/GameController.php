<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GameController extends Controller
{
    public function index()
    {
        $games = [
            ['title' => 'The Legend of Zelda: Breath of the Wild', 'developer' => 'Nintendo', 'genre' => 'Action-adventure'],
            ['title' => 'Elden Ring', 'developer' => 'FromSoftware', 'genre' => 'Action RPG'],
            ['title' => 'Cyberpunk 2077', 'developer' => 'CD Projekt Red', 'genre' => 'Action RPG'],
            ['title' => 'Minecraft', 'developer' => 'Mojang Studios', 'genre' => 'Sandbox'],
            ['title' => 'Hollow Knight', 'developer' => 'Team Cherry', 'genre' => 'Metroidvania'],
        ];

        return view('games.index', ['games' => $games]);
    }
}
