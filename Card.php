<?php

class Card
{
    private string $suit = '';
    private string $face = '';
    private int $value = 0;

    /**
     * @param string $suit
     * @param string $face
     * @param int $value
     */
    public function __construct(string $suit, string $face, int $value)
    {
        $this->suit = $suit;
        $this->face = $face;
        $this->value = $value;
    }


}