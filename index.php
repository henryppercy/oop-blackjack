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
<body>
    <header>
        <h1>♠♥ Welcome to Blackjack ♦♣</h1>
    </header>
    <main>
        <section class="players">
            <div class="card player-one">
                <h2>Player One</h2>
                <p>Ten of Clubs</p>
                <p>Jack of Diamonds</p>
                <p>Score: 21</p>
            </div>
            <div class="card player-two">
                <h2>Player Two</h2>
                <p>Ace of Spades</p>
                <p>Three of Hearts</p>
                <p>Score: 14</p>
            </div>
        </section>
        <section class="total">
            <div class="card">
                <h3>Player One Wins!</h3>
            </div>
        </section>
    </main>
</body>

<?php
//$game = new Game;
//echo $game->playGame();
//?>
