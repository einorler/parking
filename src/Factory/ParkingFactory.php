<?php

namespace Nfq\Factory;

use Nfq\Model\Parking;

class ParkingFactory
{
    /**
     * @param int $width
     * @param int $length
     *
     * @return Parking
     */
    public static function create(int $width, int $length): Parking
    {
        return new Parking($width, $length);
    }
}
