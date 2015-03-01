<?php

namespace Elibyy\TCPDF;


/**
 * Class ServiceProvider
 * @version 1.0
 * @package Elibyy\TCPDF
 */
class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
	protected $constantsMap = [
		'K_PATH_FONTS' => 'font_directory',
		'K_PATH_IMAGES' => 'image_directory',
		'K_TCPDF_THROW_EXCEPTION_ERROR' => 'tcpdf_throw_exception'
	];

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$configPath = __DIR__ . '/../config/laravel-tcpdf.php';
		$this->mergeConfigFrom($configPath, 'laravel-tcpdf');
		$this->app['pdf'] = $this->app->share(function ($app) {
			return new Pdf($app);
		});
	}

	public function boot()
	{
		if (!defined('K_TCPDF_EXTERNAL_CONFIG')) {
			define('K_TCPDF_EXTERNAL_CONFIG', true);
		}

		foreach ($this->constantsMap as $key => $value) {
			$value = Config::get('laravel-tcpdf.' . $value, null);
			if (!is_null($value) && !defined($key)) {
				define($key, $value);
			}
		}

		$configPath = __DIR__ . '/../config/laravel-tcpdf.php';
		$this->publishes(array($configPath => config_path('laravel-tcpdf.php')), 'config');
	}

	public function provides()
	{
		return ['pdf'];
	}
}