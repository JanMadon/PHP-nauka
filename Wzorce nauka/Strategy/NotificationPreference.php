<?php

declare(strict_types=1);

namespace DesignPatterns\Behavioral\Strategy;

final class NotificationPreference
{
    public function __construct(
        private readonly bool $email,
        private readonly bool $system
    )
    {

    }

    public function shouldNotifyByEmail(): bool
    {
        return $this->email;
    }

    public function shouldNotifyBySystem(): bool
    {
        return $this->system;
    }
}