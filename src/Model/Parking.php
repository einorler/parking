<?php

namespace Nfq\Model;

use Nfq\Constants;

class Parking
{
    private $width;

    private $length;

    private $cars = [];

    public function __construct(int $width, int $length)
    {
        $this->width = $width;
        $this->length = $length;
    }

    public function getEmptySpaces()
    {
        return floor($this->width * $this->length / Constants::CAR_AREA);
    }

    public function addCar(Car $car)
    {
        $this->cars[] = $car;
    }
}
