<?php

namespace App\Pieces;

use App\Piece;
use App\Player;

class Rook extends Piece
{
    public function __construct(Player $player)
    {
        parent::__construct('Tour', $player);
    }
}