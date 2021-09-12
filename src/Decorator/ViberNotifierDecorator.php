<?php

namespace App\Decorator;

class ViberNotifierDecorator extends NotifierDecorator
{

    public function send(string $message): string
    {
        return $this->doBefore($message) . $this->decoratedNotifier->send($message);
    }

    public function doBefore(string $message): string
    {
        return "Send $message to Viber";
    }
}