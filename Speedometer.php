<?php
class Speedometer
{

    public const MILE =  0.62137119;
    public static function convertKmToMiles($km):float
    {
        return self::MILE*$km;
    }
    public static function convertMilestoKm($km):float
    {
        return self::MILE/$km;
    }
}
echo "convertKmToMiles ".Speedometer :: convertKmToMiles (10);
echo "\nconvertMilestoKm ".Speedometer :: convertMilestoKm(10);