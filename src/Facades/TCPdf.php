<?php

namespace Elibyy\TCPDF\Facades;

use Illuminate\Support\Facades\Facade;

class TCPdf extends Facade
{
	protected static function getFacadeAccessor()
	{
		return 'tcpdf';
	}
}