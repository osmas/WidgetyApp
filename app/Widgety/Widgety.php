<?php

namespace App\Widgety;

use Illuminate\Support\Facades\Facade;

/**
* 
*/
class Widgety extends Facade
{
	
	public static function getFacadeAccessor()
	{
		return 'widgety';
	}
}
