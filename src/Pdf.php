<?php

namespace Elibyy\TCPDF;

use TCPDF;
use \Config;
/**
 * Class Pdf
 * @version 1.0
 * @package Elibyy\TCPDF
 */
class Pdf extends TCPDF
{
	protected $app;

	public function __construct($app)
	{
		$this->app = $app;
		parent::__construct(
			Config::get('laravel-tcpdf.page_orientation','P'),
			Config::get('laravel-tcpdf.page_unit','mm'),
			Config::get('laravel-tcpdf.page_format','A4'),
			Config::get('laravel-tcpdf.unicode',true),
			Config::get('laravel-tcpdf.encoding','UTF-8')
		);
	}
}