<?php

namespace App\Contracts;

interface PaymentGatewayFactory
{
    public function createPaymentGateway(): PaymentGateway;
}
