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

    public function greet()
    {
        #$this->logger->info("Greeted");
        return "Greeted";
    }
}