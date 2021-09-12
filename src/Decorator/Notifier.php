<?php

namespace App\Decorator;

interface Notifier
{
    public function send(string $message): string;
}