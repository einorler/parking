<?php

namespace Nfq\Tests;

use Nfq\Factory\ParkingFactory;
use Nfq\Factory\CarFactory;
use Nfq\Model\Parking;
use Nfq\Constants;
use PHPUnit\Framework\TestCase;

class ParkingTest extends TestCase
{
    public function testGetEmptySpaces()
    {
        $width = 120;
        $length = 200;
        $parking = $this->getParking($width, $length);
        $carArea = Constants::CAR_AREA;
        $emptySpaces = floor($width * $length / $carArea);

        $this->assertEquals($emptySpaces, $parking->getEmptySpaces());
    }

    public function testAddCar()
    {
        $width = 120;
        $length = 200;
        $parking = $this->getParking($width, $length);
        $car = CarFactory::create('test');
    }

    private function getParking($width, $length)
    {
        return ParkingFactory::create($width, $length);
    }
}
