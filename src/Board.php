<?php

namespace App;

use App\Pieces\Bishop;
use App\Pieces\King;
use App\Pieces\Knight;
use App\Pieces\Pawn;
use App\Pieces\Queen;
use App\Pieces\Rook;
use App\Game;
use App\Square;

class Board
{
    private Game $game;
    private array $squares;

    public function __construct(Game $game)
    {
        $this->game = $game;

        $squares = [];

        $letters = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H'];

        for ($i = 8; $i > 0; $i--) {
            foreach($letters as $letterIndex => $letter) {
                $color = Square::LIGHTCOLOR;

                if ($i % 2 === 1) { // Si le chiffre de la case est impair
                    if ($letterIndex % 2 === 0) { // Si l'index de la lettre est pair
                        $color = Square::DARKCOLOR;
                    }
                } else { // Si le chiffre de la case est pair
                    if ($letterIndex % 2 === 1) { // Si l'index de la lettre est impair
                        $color = Square::DARKCOLOR;
                    }
                }

                $square = new Square($i . $letter, $color);
                $squares[$i][$letter] = $square;

                $this->setPieceToSquare($square);
            }
        }

        $this->squares = $squares;
    }

    private function setPieceToSquare(Square $square)
    {
        switch ($square->getName()) {
            case '8A':
                $square->setPiece(new Rook($this->getGame()->getBlackPlayer()));
                break;
            case '8B':
                $square->setPiece(new Knight($this->getGame()->getBlackPlayer()));
                break;
            case '8C':
                $square->setPiece(new Bishop($this->getGame()->getBlackPlayer()));
                break;
            case '8D':
                $square->setPiece(new Queen($this->getGame()->getBlackPlayer()));
                break;
            case '8E':
                $square->setPiece(new King($this->getGame()->getBlackPlayer()));
                break;
            case '8F':
                $square->setPiece(new Bishop($this->getGame()->getBlackPlayer()));
                break;
            case '8G':
                $square->setPiece(new Knight($this->getGame()->getBlackPlayer()));
                break;
            case '8H':
                $square->setPiece(new Rook($this->getGame()->getBlackPlayer()));
                break;
            case '1A':
                $square->setPiece(new Rook($this->getGame()->getWhitePlayer()));
                break;
            case '1B':
                $square->setPiece(new Knight($this->getGame()->getWhitePlayer()));
                break;
            case '1C':
                $square->setPiece(new Bishop($this->getGame()->getWhitePlayer()));
                break;
            case '1D':
                $square->setPiece(new Queen($this->getGame()->getWhitePlayer()));
                break;
            case '1E':
                $square->setPiece(new King($this->getGame()->getWhitePlayer()));
                break;
            case '1F':
                $square->setPiece(new Bishop($this->getGame()->getWhitePlayer()));
                break;
            case '1G':
                $square->setPiece(new Knight($this->getGame()->getWhitePlayer()));
                break;
            case '1H':
                $square->setPiece(new Rook($this->getGame()->getWhitePlayer()));
        }

        switch (substr($square->getName(), 0, 1)) {
            case '7':
                $square->setPiece(new Pawn($this->getGame()->getBlackPlayer()));
                break;
            case '2':
                $square->setPiece(new Pawn($this->getGame()->getWhitePlayer()));
        }
    }

    public function getGame()
    {
        return $this->game;
    }

    public function getSquares()
    {
        return $this->squares;
    }
}