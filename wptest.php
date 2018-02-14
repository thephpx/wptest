<?php

require dirname(__FILE__) . '/vendor/autoload.php';

use App\Demoplugin;

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