<?php

class SeniorHealthCare extends HealthCara
{

    private const AUTHORITY = 7;

    public function calculateGrant(): float
    {
        return $this->getAuthorityFactory() * $this->maxGrant;
    }

    public function getAuthorityFactory(): float
    {
        return self::AUTHORITY / HealthCara::MAX_AUTHORITY;
    }
}