<?php

namespace App\Decorator;

class ViberNotifierDecorator extends NotifierDecorator
{
    public function doBefore(string $message): string
    {
        return "Send $message to Viber";
    }
}