<?php

abstract class HealthCara
{
    public const MAX_AUTHORITY = 10;
    protected int $maxGrant = 1200;

    abstract public function calculateGrant(): float;

}