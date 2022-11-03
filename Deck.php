<?php
require_once 'Card.php';

class Deck
{
    private array $suits = ['Diamonds', 'Clubs', 'Hearts', 'Spades'];
    private array $faces = [2 ,3, 4, 5, 6, 7, 8, 9, 10, 'Jack', 'Queen', 'King', 'Ace'];

    private array $deck = [];

    /**
     * @return array
     */
    public function getDeck(): array
    {
        return $this->deck;
    }

    /**
     *
     */
    public function __construct()
    {
        foreach ($this->suits as $suit) {
            foreach ($this->faces as $face) {
                if ($face == 'Ace') {
                    $value = 11;
                } elseif ($face == 'King' || $face == 'Queen' || $face == 'Jack' || $face == 10){
                    $value = 10;
                } else {
                    $value = $face;
                }
                $card = new Card($suit, $face, $value);
                $this->deck[] = $card;
            }
        }
    }
}