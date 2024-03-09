<?php

class Junior implements  JobLevel
{

    private const AUTHORITY = 3;
    private const START_BONUS = 0.15;



    public function getAuthorityFactory(): float
    {
        return (self::AUTHORITY / self::MAX_AUTHORITY) + self::START_BONUS;
    }
}