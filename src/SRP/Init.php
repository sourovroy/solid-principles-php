<?php
namespace App\SRP;

class Init
{
	public function __construct()
	{
		$report = new SalesReporter(new SalesRepository);
		// echo $report->between(1, 10, new OutputJson); // Get JSON output
		echo $report->between(1, 10, new OutputHtml); // Get HTML output
	}
}
