<?php

namespace App\Decorator;

class SystemLoggerNotifier implements Notifier
{
    public const FIRST_PART = 'Send message:' . PHP_EOL;
    public const LAST_PART = 'to system log file';

    public function send(string $message): string
    {
        return self::FIRST_PART . $message . self::LAST_PART;
    }
}