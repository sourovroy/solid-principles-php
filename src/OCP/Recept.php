<?php
namespace App\OCP;

class Recept
{
    public $amount;

    public function __construct($amount)
    {
        $this->amount = $amount;
    }
}