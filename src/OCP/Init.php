<?php
namespace App\OCP;

class Init
{
	public function __construct()
	{
        /**
         * Area Calculator
         */
        /*$area = (new AreaCalculator)->calculate([
            new Square(30, 20),
            new Circle(12)
        ]);
        echo 'Area is: ' . $area;*/

        /**
         * Checkout
         */
        $checkout = (new Checkout)->begin(
            new Recept(50),
            new CashPaymentMethod
        );
        var_export($checkout);
	}
}
