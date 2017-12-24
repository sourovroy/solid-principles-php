<?php
namespace App\SRP;

class SalesReporter
{
	private $salseRepo;

	public function __construct(SalesRepository $salseRepo)
	{
		$this->salseRepo = $salseRepo;
	}

	public function between($start, $end, SalesOutputInterface $formatter)
	{
		$queryData = $this->salseRepo->between($start, $end);
		return $formatter->output($queryData);
	}
}