<?php

namespace Nfq\Tests;

use Nfq\Factory\ParkingFactory;
use Nfq\Model\Parking;
use Nfq\Constants;
use PHPUnit\Framework\TestCase;

class ParkingTest extends TestCase
{
    public function testParkingCreation()
    {
        $parking = ParkingFactory::create(120, 200);

        $this->assertInstanceOf(Parking::class, $parking);
    }

    public function testGetEmptySpaces()
    {
        $parking = ParkingFactory::create(120, 200);
        $carArea = Constants::CAR_AREA;
    }
}
