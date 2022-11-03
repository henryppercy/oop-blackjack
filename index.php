<?php
require_once 'Deck.php';

$testDeck = new Deck();

$deck = $testDeck->getDeck();

echo '<pre>';
print_r($deck);
echo '</pre>';