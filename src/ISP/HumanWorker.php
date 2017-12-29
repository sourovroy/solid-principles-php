<?php
namespace App\ISP;

class HumanWorker implements ManageableInterface, WorkableInterface, SleepableInterface
{

	public function work()
	{
		echo 'Human can work. <br>';
	}

	public function sleep()
	{
		echo 'Human need to sleep. <br>';
	}

	public function beManaged()
	{
        $this->work();
        $this->sleep();
	}
}
