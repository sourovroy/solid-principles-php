<?php
namespace App\DIP;

class Init
{
	public function __construct()
	{
        (new PasswordRemember(new DBConnection))
        	->save();
	}
}
