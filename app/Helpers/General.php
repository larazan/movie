<?php

namespace App\Helpers;

class General
{
    public static function percentage($total, $part) 
    {
        return round(($part/$total)*100);
    }

    public static function widthPercentage($total, $part) 
    {
        return round(($part/$total)*10);
    }
}