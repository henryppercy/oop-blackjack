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

    /**
     * @return string
     */
    public function getSuit(): string
    {
        return $this->suit;
    }

    /**
     * @return string
     */
    public function getFace(): string
    {
        return $this->face;
    }

    /**
     * @return int
     */
    public function getValue(): int
    {
        return $this->value;
    }
}