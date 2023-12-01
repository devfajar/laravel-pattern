<?php

namespace App\Providers;

use App\Contracts\PaymentGatewayFactory;
use App\Factories\PaypalPaymentGatewayFactory;
use App\Factories\StripePaymentGatewayFactory;
use Illuminate\Support\ServiceProvider;

class PaymentServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(PaymentGatewayFactory::class, function () {
            // Determine the payment gateway type based on configuration
            if (config('payment.gateway') === 'paypal') {
                return new PaypalPaymentGatewayFactory();
            } else {
                return new StripePaymentGatewayFactory();
            }
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
