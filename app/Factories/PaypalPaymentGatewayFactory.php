<?php

namespace App\Factories;

use App\Contracts\PaymentGatewayFactory;
use App\Gateways\PaypalPaymentGateway;

class PaypalPaymentGatewayFactory implements PaymentGatewayFactory
{
    public function createPaymentGateway(): PaymentGateway
    {
        return new PaypalPaymentGateway();
    }
}
