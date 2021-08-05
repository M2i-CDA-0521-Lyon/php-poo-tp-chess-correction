<?php

namespace App\Pieces;

use App\Piece;
use App\Player;

class Pawn extends Piece
{
    public function __construct(Player $player)
    {
        parent::__construct('Pion', $player);
    }
}