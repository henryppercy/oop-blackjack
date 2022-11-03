<?php

class Player
{
    private array $hand = [];



    /**
     * @return array
     */
    public function getHand(): array
    {
        return $this->hand;
    }

    /**
     * @param array $hand
     */
    public function setHand(array $hand): void
    {
        $this->hand = $hand;
    }
}