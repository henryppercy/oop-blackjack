<?php
require_once 'Card.php';

class Deck
{
    private array $suits = ['Diamonds', 'Clubs', 'Hearts', 'Spades'];
    private array $faces = [2 ,3, 4, 5, 6, 7, 8, 9, 10, 'Jack', 'Queen', 'King', 'Ace'];

    private array $deck = [];

    /**
     *
     */
    public function __construct()
    {
        foreach ($this->faces as $face) {
            foreach ($this->suits as $suit) {
                if ($face == 'Ace') {
                    $value = 11;
                } elseif ($face == 'King' || 'Queen' || 'Jack' || 10){
                    $value = 10;
                } else {
                    if (is_numeric($face)) {
                        $value = $face;
                    }
                }
                $card = new Card($suit, $face, $value);

                $this->deck[] = $card;
            }
        }
    }


}