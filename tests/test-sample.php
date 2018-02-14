<?php
/**
 * Class SampleTest
 *
 * @package Sample_Plugin
 */

use App\Sampleplugin;

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

		$sample = new Sampleplugin();
		$outcome = $sample->init();
		$this->assertEquals('SamplePlugin',$outcome);
	}
}
