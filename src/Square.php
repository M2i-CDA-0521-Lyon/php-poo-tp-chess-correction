<?php

namespace App;

use App\Piece;

class Square
{
    const LIGHTCOLOR = '#FFCE9E';
    const DARKCOLOR = '#D18B47';

    private string $name;
    private string $color;
    private Piece|null $piece;

    public function __construct(string $name, string $color)
    {
        $this->name = $name;
        $this->color = $color;
        $this->piece = null;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function getPiece()
    {
        return $this->piece;
    }

    public function setPiece(Piece $piece)
    {
        $this->piece = $piece;
    }
}