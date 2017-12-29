<?php
namespace App\DIP;

class PasswordRemember
{
	private $connection;

	public function __construct(ConectionInterface $connection)
	{
        $this->connection = $connection;
	}

	public function save()
	{
		// Save data using databse connection
		$db = $this->connection->connect();
		print $db.'Saved to database.';
	}
}
