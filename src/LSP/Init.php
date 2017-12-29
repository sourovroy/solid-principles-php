<?php
namespace App\LSP;

class Init
{
	public function __construct()
	{
        $data = (new StoreCollection)->data();
        
        echo $data[0]['text']; // If we chnange the class it will work prefectly
	}
}
