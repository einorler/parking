<?php

namespace Nfq\Tests;

use Nfq\Factory\ParkingFactory;
use Nfq\Model\Parking;
use PHPUnit\Framework\TestCase;

class ParkingTest extends TestCase
{
    public function testParkingCreation()
    {
        $parking = ParkingFactory::create(120, 200);

        $this->assertInstanceOf(Parking::class, $parking);
    }
}
