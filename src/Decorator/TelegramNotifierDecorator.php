<?php

namespace App\Decorator;

class TelegramNotifierDecorator extends NotifierDecorator
{
    public function doBefore(string $message): string
    {
        return "Send $message to Telegram";
    }
}