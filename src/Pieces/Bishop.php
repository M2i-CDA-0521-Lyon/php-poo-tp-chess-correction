<?php

namespace App\Pieces;

use App\Piece;
use App\Player;

class Bishop extends Piece
{
    public function __construct(Player $player)
    {
        parent::__construct('Fou', $player);
    }
}