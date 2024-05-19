<?php

interface JobLevel
{
    public const MAX_AUTHORITY = 10;

    public function getAuthorityFactory(): float;
}