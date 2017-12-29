<?php
namespace App\ISP;

class Init
{
	public function __construct()
	{
        (new Manager)->manage(new HumanWorker);

        (new Manager)->manage(new RobotWorker);
	}
}
