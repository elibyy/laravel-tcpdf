<?php

namespace Elibyy\TCPDF;

class TCPdf extends \TCPDF
{
	protected $app;
	protected static $format;

	public function __construct($app)
	{
		$this->app = $app;
		parent::__construct(
			config('laravel-tcpdf.page_orientation', 'P'),
			config('laravel-tcpdf.page_unit', 'mm'),
			static::$format ? static::$format : config('laravel-tcpdf.page_format', 'A4'),
			config('laravel-tcpdf.unicode', true),
			config('laravel-tcpdf.encoding', 'UTF-8')
		);
	}

	public static function changeFormat($format)
	{
		static::$format = $format;
	}
}