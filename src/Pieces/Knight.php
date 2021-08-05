<?php

namespace App\Pieces;

use App\Piece;
use App\Player;

class Knight extends Piece
{
    public function __construct(Player $player)
    {
        parent::__construct('Cavalier', $player);
    }
}