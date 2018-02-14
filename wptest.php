<?php

if (!class_exists('App\Sampleplugin')) {
    // Get a reference to our PSR-4 Autoloader function that we can use to add our
    // Acme namespace
    $autoloader = require_once('autoload.php');

    // Use the autoload function to setup our class mapping
    $autoloader('App\\', __DIR__ . '/lib/');
}

use App\Sampleplugin;

class Wptest{

	private $sample;

	function init()
	{
		return 'WpTest';
	}

	function setSample(&$sample){
		$this->sample = $sample;
	}

	function getSample(){
		return $this->sample;
	}

}