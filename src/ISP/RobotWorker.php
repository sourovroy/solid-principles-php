<?php
namespace App\ISP;

class RobotWorker implements ManageableInterface, WorkableInterface
{

	public function work()
	{
		echo 'Robot only work. <br>';
	}

	public function beManaged()
	{
        $this->work();
	}
}
