<?php

namespace App;

use App\Player;

abstract class Piece
{
    protected string $name;
    protected Player $player;

    protected function __construct(string $name, Player $player)
    {
        $this->name = $name;
        $this->player = $player;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getPlayer()
    {
        return $this->player;
    }
}