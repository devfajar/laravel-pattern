<?php

namespace App\Factories;

use App\Contracts\PaymentGatewayFactory;
use App\Gateways\StripePaymentGateway;

class StripePaymentGatewayFactory implements PaymentGatewayFactory
{
    public function createPaymentGateway(): PaymentGateway
    {
        return new StripePaymentGateway();
    }
}
