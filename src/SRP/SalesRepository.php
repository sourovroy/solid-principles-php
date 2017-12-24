<?php
namespace App\SRP;

class SalesRepository
{
	/**
	 * Here it will run database query and get data
	 * For learning perpose i hard-coded a value
	 */
	public function between($start, $end)
	{
		return ($end - $start) * 10;
	}
}