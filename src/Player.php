<?php

namespace App;

class Player
{
    private string $color;

    public function __construct($color)
    {
        $this->color = $color;
    }

    public function getColor()
    {
        return $this->color;
    }
}