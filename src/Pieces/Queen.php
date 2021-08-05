<?php

namespace App\Pieces;

use App\Piece;
use App\Player;

class Queen extends Piece
{
    public function __construct(Player $player)
    {
        parent::__construct('Reine', $player);
    }
}