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

    public function getEmptySpaces(): int
    {
        return $this->getAvailableSpaces() - $this->getCarCount();
    }

    public function getAvailableSpaces(): int
    {
        return floor($this->width * $this->length / Constants::CAR_AREA);
    }

    public function addCar(Car $car)
    {
        if ($this->getEmptySpaces()) {
            $this->cars[$car->getPlate()] = $car;
        }
    }

    public function getCarCount(): int
    {
        return count($this->cars);
    }

    public function removeCar(Car $car)
    {
        if (isset($this->cars[$car->getPlate()])) {
            unset($this->cars[$car->getPlate()]);
        }
    }
}
