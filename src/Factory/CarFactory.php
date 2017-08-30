<?php

namespace Nfq\Factory;

use Nfq\Model\Car;

class CarFactory
{
    public static function create(string $plate): Car
    {
        return new Car($plate);
    }
}
