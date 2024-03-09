<?php

class JuniorHealthCare extends HealthCara
{

    private const AUTHORITY = 3;
    private const START_BONUS = 0.15;

    public function calculateGrant(): float
    {
        return $this->getAuthorityFactory() * $this->maxGrant;
    }

    public function getAuthorityFactory(): float
    {
        return (self::AUTHORITY / HealthCara::MAX_AUTHORITY) + self::START_BONUS;
    }
}