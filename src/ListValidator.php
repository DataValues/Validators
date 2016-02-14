<?php

namespace ValueValidators;

use Exception;

/**
 * ValueValidator that validates a list of values.
 *
 * @since 0.1
 *
 * @licence GNU GPL v2+
 * @author Jeroen De Dauw < jeroendedauw@gmail.com >
 * @author Thiemo Mättig
 */
class ListValidator extends ValueValidatorObject {

	/**
	 * @see ValueValidatorObject::doValidation
	 *
	 * @since 0.1
	 *
	 * @param mixed $value
	 *
	 * @throws Exception
	 */
	public function doValidation( $value ) {
		if ( !is_array( $value ) ) {
			$this->addErrorMessage( 'Not an array' );
			return;
		}

		$validator = new RangeValidator();

		if ( array_key_exists( 'elementcount', $this->options ) ) {
			$range = $this->options['elementcount'];

			if ( !is_array( $range ) || count( $range ) !== 2 ) {
				throw new Exception( 'The elementcount option must be an array with two elements' );
			}

			$validator->setRange( $range[0], $range[1] );
		}

		// min- and maxelements options are allowed to overwrite the elementcount option!
		if ( array_key_exists( 'minelements', $this->options ) ) {
			$validator->setLowerBound( $this->options['minelements'] );
		}
		if ( array_key_exists( 'maxelements', $this->options ) ) {
			$validator->setUpperBound( $this->options['maxelements'] );
		}

		$this->runSubValidator( count( $value ), $validator, 'length' );
	}

	/**
	 * @see ValueValidatorObject::enableWhitelistRestrictions
	 *
	 * @since 0.1
	 *
	 * @return boolean
	 */
	protected function enableWhitelistRestrictions() {
		return false;
	}

}
