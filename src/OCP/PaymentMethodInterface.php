<?php
namespace App\OCP;

interface PaymentMethodInterface
{
    public function acceptPayment($receipt);
}