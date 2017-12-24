<?php
namespace App\SRP;

class OutputHtml implements SalesOutputInterface
{
	public function output($sales)
	{
		return '<h1>Sales: '.$sales.'</h1>';
	}
}
