<?php
namespace App\LSP;

class StoreCollection extends Collection
{
    /**
     * Overwrite parent class data 
     * But return same data type
     */
	public function data()
    {
        return [
            ['text' => 'Store array type data'],
            ['text' => 'Store array type data again']
        ];
    }
}