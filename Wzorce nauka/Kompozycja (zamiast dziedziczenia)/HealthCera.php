<?php

class HealthCare
{
    private int $maxGrant = 1200;

    private JobLevel $jobLevel;

    public function __construct(JobLevel $jobLevel)
    {
        $this->jobLevel = $jobLevel;
    }

    public function setJobLevel(JobLevel $jobLevel): void
    {
        $this->jobLevel = $jobLevel;
    }

    public function calculateGrant(): float
    {
        return $this->jobLevel->getAuthorityFactory() * $this->maxGrant;
    }

}