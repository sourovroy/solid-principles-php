<?php
namespace App\DIP;

class DBConnection implements ConectionInterface
{
	public function connect()
	{
        return 'Database connection established <br>';
	}
}