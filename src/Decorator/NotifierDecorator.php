<?php

namespace App\Decorator;

abstract class NotifierDecorator implements Notifier
{
    protected Notifier $decoratedNotifier;

    public function __construct(Notifier $notifier)
    {
        $this->decoratedNotifier = $notifier;
    }

    public function send(string $message): string
    {
        return $this->decoratedNotifier->send($message);
    }

    abstract public function doBefore(string $message);
}
