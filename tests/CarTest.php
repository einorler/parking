<?php

namespace Nfq\Tests;

use Nfq\Factory\CarFactory;
use PHPUnit\Framework\TestCase;

class CarTest extends TestCase
{
    public function testGetPlate()
    {
        $plate = 'test';
        $car = CarFactory::create($plate);

        $this->assertEquals($plate, $car->getPlate());
    }
}
