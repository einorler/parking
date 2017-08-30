<?php

namespace Nfq\Tests;

use Nfq\Factory\ParkingFactory;
use Nfq\Factory\CarFactory;
use Nfq\Model\Parking;
use Nfq\Constants;
use PHPUnit\Framework\TestCase;

class ParkingTest extends TestCase
{
    private $width = 120;

    private $length = 200;

    public function testGetEmptySpaces()
    {
        $parking = $this->getParking($this->width, $this->length);
        $carArea = Constants::CAR_AREA;
        $emptySpaces = floor($this->width * $this->length / $carArea);

        $this->assertEquals($emptySpaces, $parking->getEmptySpaces());
    }

    public function testAddCar()
    {
        $parking = $this->getParking($this->width, $this->length);
        $car = CarFactory::create('test');
    }

    private function getParking($width, $length)
    {
        return ParkingFactory::create($width, $length);
    }
}
