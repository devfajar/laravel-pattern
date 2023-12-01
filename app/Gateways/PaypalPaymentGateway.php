<?php

namespace App\Gateways;

use App\Contracts\PaymentGateway;

class PaypalPaymentGateway implements PaymentGateway
{
    public function charge($amount)
    {
        // Implement Paypal-specific charging logic
    }
}
