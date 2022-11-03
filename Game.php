<?php
require_once 'Deck.php';
require_once 'Player.php';

class Game
{
    public function playGame()
    {
        $newDeck = new Deck();
        $deck = $newDeck->getDeck();

        $playerOne = new Player();
        $playerTwo = new Player();

        shuffle($deck);

        $playerOneHand = $playerOne->getHand();
        $playerTwoHand = $playerTwo->getHand();

        $playerOneHand[] = $deck[0];
        $playerTwoHand[] = $deck[1];
        $playerOneHand[] = $deck[2];
        $playerTwoHand[] = $deck[3];

        echo '<pre>';
        print_r($playerOneHand);
        echo '</pre>';
        echo '<pre>';
        print_r($playerTwoHand);
        echo '</pre>';



        $playerOneTotal = $playerOneHand[0]->getValue() + $playerOneHand[1]->getValue();
        $playerTwoTotal = $playerTwoHand[0]->getValue() + $playerTwoHand[1]->getValue();

        echo $playerOneTotal;
        echo '<br>';
        echo $playerTwoTotal;


//        if (($playerOneTotal > 21) && ($playerTwoTotal > 21)) {
//            return 'Player one scored ' . $playerOneTotal. ' and player two scored ' . $playerTwoTotal . ' You both lose!';
//        } elseif ($playerOneTotal > 21) {
//            return 'Player one scored ' . $playerOneTotal. ' and player two scored ' . $playerTwoTotal . '. Player two wins!';
//        } elseif ($playerTwoTotal > 21) {
//            return 'Player one scored ' . $playerOneTotal. ' and player two scored ' . $playerTwoTotal . '. Player two wins!';
//        } elseif ($playerOneTotal == $playerTwoTotal) {
//            return 'Player one scored ' . $playerOneTotal. ' and player two scored ' . $playerTwoTotal . '. You have drawn!';
//        } elseif ($playerOneTotal > $playerTwoTotal) {
//            return 'Player one scored ' . $playerOneTotal. ' and player two scored ' . $playerTwoTotal . '. Player one wins!';
//        } else {
//            return 'Player one scored ' . $playerOneTotal. ' and player two scored ' . $playerTwoTotal . '. Player two wins!';
//        }

        // Deal cards
        // Compare scores
        // Output result
    }
}