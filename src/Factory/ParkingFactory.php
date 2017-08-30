<?php

namespace Nfq\Factory;

use Nfq\Model\Parking;

class ParkingFactory
{
    public static function create($width, $length)
    {
        return new Parking($width, $length);
    }
}
