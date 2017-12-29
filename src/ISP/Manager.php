<?php
namespace App\ISP;

class Manager
{
	/**
	 * Manage function will manage any instance of ManageableInterface
	 * It's not necessary to know it is human or robot
	 */
	public function manage(ManageableInterface $worker)
	{
        $worker->beManaged();
	}
}
