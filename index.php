<?php
require_once 'classes/Game.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>OOP Blackjack</title>
    <link rel="stylesheet" href="styles/normalize.css">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="shortcut icon" type="image/png" href="images/favicon.png">
</head>

<?php
$game = new Game;
echo $game->playGame();
?>
