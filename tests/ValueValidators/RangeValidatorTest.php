<?php

namespace ValueValidators\Tests;

use ValueValidators\RangeValidator;

/**
 * @covers ValueValidators\RangeValidator
 *
 * @group ValueValidators
 * @group DataValueExtensions
 *
 * @licence GNU GPL v2+
 * @author Jeroen De Dauw < jeroendedauw@gmail.com >
 */
class RangeValidatorTest extends \PHPUnit_Framework_TestCase {

	/**
	 * @dataProvider withinBoundsProvider
	 */
	public function testNumberWithinRange_WhenSetWithSetRange( $number, $lowerBound, $upperBound ) {
		$rangeValidator = new RangeValidator();
		$rangeValidator->setRange( $lowerBound, $upperBound );

		$this->assertTrue( $rangeValidator->validate( $number )->isValid() );
	}

	public function withinBoundsProvider() {
		return array(
			array( 0, 0, 0 ),
			array( 5, 0, 9 ),
			array( -5, -9, 0 ),
			array( 0, -5, 5 ),
		);
	}

}
