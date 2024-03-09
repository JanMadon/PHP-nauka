<?php

class Senior implements  JobLevel
{
    private const AUTHORITY = 7;

    public function getAuthorityFactory(): float
    {
        return self::AUTHORITY / self::MAX_AUTHORITY;
    }
}