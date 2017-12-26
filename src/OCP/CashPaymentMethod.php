<?php
namespace App\OCP;

class CashPaymentMethod implements PaymentMethodInterface
{
    public function acceptPayment($receipt)
    {
        // Cash payment functionality will be here
        return true;
    }
}