<?php

/**
 * Entry point of the DataValues Validators library.
 *
 * @since 0.1
 * @codeCoverageIgnore
 *
 * @licence GNU GPL v2+
 * @author Jeroen De Dauw < jeroendedauw@gmail.com >
 */

if ( defined( 'DATAVALUES_VALIDATORS_VERSION' ) ) {
	// Do not initialize more then once.
	return 1;
}

define( 'DATAVALUES_VALIDATORS_VERSION', '0.1 beta' );

if ( defined( 'MEDIAWIKI' ) ) {
	$GLOBALS['wgExtensionCredits']['datavalues'][] = array(
		'path' => __DIR__,
		'name' => 'DataValues Number',
		'version' => DATAVALUES_NUMBER_VERSION,
		'author' => array(
			'[https://www.mediawiki.org/wiki/User:Jeroen_De_Dauw Jeroen De Dauw]',
			'The Wikidata team',
		),
		'url' => 'https://github.com/DataValues/Validators',
		'description' => 'Numerical value objects, parsers and formatters',
	);
}