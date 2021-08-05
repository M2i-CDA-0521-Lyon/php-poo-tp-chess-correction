<?php

namespace App;

use App\Board;
use App\Player;

class Game
{
    private Player $whitePlayer;
    private Player $blackPlayer;
    private Board $board;

    public function __construct()
    {
        $this->whitePlayer = new Player('white');
        $this->blackPlayer = new Player('black');

        $this->board = new Board($this);
    }

    public function getWhitePlayer()
    {
        return $this->whitePlayer;
    }

    public function getBlackPlayer()
    {
        return $this->blackPlayer;
    }

    public function getBoard()
    {
        return $this->board;
    }
}