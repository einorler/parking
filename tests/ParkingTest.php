<?php

namespace Nfq\Tests;

use Nfq\Factory\ParkingFactory;
use Nfq\Factory\CarFactory;
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

        $this->assertEquals(0, $parking->getCarCount());

        $parking->addCar($car);

        $this->assertEquals(1, $parking->getCarCount());
    }

    public function testRemoveCar()
    {
        $parking = $this->getParking($this->width, $this->length);
        $car = CarFactory::create('test');
        $parking->addCar($car);
        $parking->removeCar($car);

        $this->assertEquals(0, $parking->getCarCount());
    }

    public function testOverflowParking()
    {
        $parking = $this->getParking(2, 5);
        $availableSpaces = $parking->getAvailableSpaces();
        $parking->addCar(CarFactory::create('foo'));
        $parking->addCar(CarFactory::create('bar'));
        $parking->addCar(CarFactory::create('zip'));

        $this->assertEquals($availableSpaces, $parking->getCarCount());
    }

    private function getParking($width, $length)
    {
        return ParkingFactory::create($width, $length);
    }
}
