<?php
use App\Game;

require_once __DIR__ . '/vendor/autoload.php';

$game = new Game();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP PHP POO - Jeu d'échecs</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <table>
        <?php foreach ($game->getBoard()->getSquares() as $rowSquare) { ?>
            <tr>
                <?php foreach ($rowSquare as $square) { ?>
                    <td style="background-color: <?= $square->getColor() ?>; color: <?= $square->getPiece() ? $square->getPiece()->getPlayer()->getColor() : 'black' ?>">
                        <?php if ($square->getPiece()) { echo $square->getPiece()->getName(); } ?>
                    </td>
                <?php } ?>
            </tr>
        <?php } ?>
    </table>
</body>
</html>