<?php

namespace Elibyy\TCPDF\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class Pdf
 * @version 1.0
 * @package Elibyy\TCPDF\Facades
 */
class Pdf extends Facade
{
	protected static function getFacadeAccessor()
	{
		return 'pdf';
	}
}