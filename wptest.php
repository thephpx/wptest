<?php

include_once('vendor/autoload.php');

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