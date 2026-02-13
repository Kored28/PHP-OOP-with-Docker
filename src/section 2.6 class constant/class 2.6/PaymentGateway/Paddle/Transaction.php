<?php

declare(strict_types = 1);

namespace Class\PaymentGateway\Paddle;

use Class\Enums\Status;

class Transaction {

    private string $status;
    
    public function __construct()
    {
        $this->setStatus(Status::PENDING);
    }
    
    public function setStatus(string $status): self {
        if( !isset(Status::ALL_STATUSES[$status])){
            throw new \InvalidArgumentException('Invalid Status');
        }
        
        $this->status = $status;
        
        return $this;
    }
}