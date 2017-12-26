<?php
namespace App\OCP;

class Checkout
{
    public function begin(Recept $receipt, PaymentMethodInterface $payment)
    {
        return $payment->acceptPayment($receipt);
    }
}