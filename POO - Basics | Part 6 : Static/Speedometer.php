<?php


class Speedometer
{

const MILES_OPERATOR = 0.609344;

const KM_OPERATOR = 1.609344;

    public static function KmToMiles(int $km) : ?int
    {
        $result = $km . ' Km correspond à ' . round($km / self::KM_OPERATOR,2,PHP_ROUND_HALF_EVEN) . ' Miles';
        echo $result;
    }

    public static function MilesToKm(int $miles) : ?int
    {
        $result = $miles . ' Miles correspond à ' . round($miles * self::MILES_OPERATOR,2,PHP_ROUND_HALF_EVEN) . ' Km';
        echo $result;
    }


}

Speedometer::KmToMiles(10);
