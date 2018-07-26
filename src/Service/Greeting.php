<?php

namespace App\Service;

use Psr\Log\LoggerInterface;

class Greeting
{
    /**
     * @var LoggerInterface
     */
    private $logger;
    /**
     * @var string
     */
    private $message;

    public function __construct()
    {
        #$this->logger = $logger;
        #$this->message = $message;
    }

    public function greet(): string
    {
        $this->logger->info("Greeted");
        return "{$this->message}";
    }
}