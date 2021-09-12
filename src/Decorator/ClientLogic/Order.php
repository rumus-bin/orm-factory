<?php

namespace App\Decorator\ClientLogic;

use App\Decorator\SystemLoggerNotifier;
use App\Decorator\TelegramNotifierDecorator;
use App\Decorator\ViberNotifierDecorator;

class Order
{
    private SystemLoggerNotifier $loggerNotifier;
    private TelegramNotifierDecorator $telegramNotifierDecorator;
    private ViberNotifierDecorator $viberNotifierDecorator;
    private array $orderData;
    private string $message;

    /**
     * @param SystemLoggerNotifier $loggerNotifier
     * @param TelegramNotifierDecorator $telegramNotifierDecorator
     * @param ViberNotifierDecorator $viberNotifierDecorator
     */
    public function __construct(
        SystemLoggerNotifier $loggerNotifier,
        TelegramNotifierDecorator $telegramNotifierDecorator,
        ViberNotifierDecorator $viberNotifierDecorator
    ) {
        $this->loggerNotifier = $loggerNotifier;
        $this->telegramNotifierDecorator = $telegramNotifierDecorator;
        $this->viberNotifierDecorator = $viberNotifierDecorator;
    }

    public function initOrder(array $orderData): void
    {
        $this->orderData = $orderData;
        $this->message = 'Create order with ' . count($this->orderData) . ' goods!';
    }

    public function logginOrderData(): string
    {
        return $this->loggerNotifier->send($this->message);
    }

    public function sendTotalNotifications(): string
    {
        return $this->loggerNotifier->send(
                $this->viberNotifierDecorator->doBefore(
                    $this->telegramNotifierDecorator->doBefore($this->message)
                )
            )
           ;
    }

}