<?php

namespace Nfq\Model;

class Car
{
    private $plate;

    public function __construct(string $plate)
    {
        $this->plate = $plate;
    }

    public function getPlate(): string
    {
        return $this->plate;
    }
}
