<?php
/**
 * Class SampleTest
 *
 * @package Sample_Plugin
 */

use App\Demoplugin;

/**
 * Sample test case.
 */
class SampleTest extends WP_UnitTestCase {

	/**
	 * A single example test.
	 */
	function test_sample() {
		// Replace this with some actual testing code.
		// $this->assertTrue( true );

		$wptest = new Wptest();
		$sample = new Demoplugin();
		$sample->setSample($sample);

		$return = $sample->getSample();

		if($return instanceof Demoplugin){
			$outcome = true;
		}else{
			$outcome = false;
		}

		$this->assertTrue($outcome);
	}
}
