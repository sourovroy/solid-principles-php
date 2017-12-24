<?php
namespace App\SRP;

class OutputJson implements SalesOutputInterface
{
	public function output($sales)
	{
		header("Content-type: application/json");
		return json_encode(['sales' => $sales]);
	}
}
