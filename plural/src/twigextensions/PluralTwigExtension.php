<?php
/**
 * Plural plugin for Craft CMS 3.x
 *
 * Simple plural plugin for Craft
 *
 * @link      https://william.isted.me/
 * @copyright Copyright (c) 2020 William Isted
 */

namespace williamisted\plural\twigextensions;

use williamisted\plural\Plural;

use Craft;

/**
 * Twig can be extended in many ways; you can add extra tags, filters, tests, operators,
 * global variables, and functions. You can even extend the parser itself with
 * node visitors.
 *
 * http://twig.sensiolabs.org/doc/advanced.html
 *
 * @author    William Isted
 * @package   Plural
 * @since     2.0.0
 */
class PluralTwigExtension extends \Twig_Extension
{
	// Public Methods
	// =========================================================================

	/**
	 * Returns the name of the extension.
	 *
	 * @return string The extension name
	 */
	public function getName()
	{
		return 'Plural';
	}

	/**
	 * Returns an array of Twig filters, used in Twig templates via:
	 *
	 *      Usage:   plural( powerPlant.lastAccident, 'day' )
	 *      Example: {{ powerPlant.lastAccident | plural( 'day' ) }} since last accident.
	 *
	 * @return array
	 */
	public function getFilters()
	{
		return [
			new \Twig_SimpleFilter( 'plural', [ $this, 'plural' ]),
		];
	}

	/**
	 * Returns an array of Twig functions, used in Twig templates via:
	 *
	 *      Usage:   {% set dayPlural = plural( powerPlant.lastAccident, 'day' ) %}
	 *      Example: {{ dayPlural }} since last accident.
	 *
	* @return array
	 */
	public function getFunctions()
	{
		return [
			new \Twig_SimpleFunction( 'plural', [ $this, 'plural' ]),
		];
	}

	/**
	 * Our super simple plural function
	 *
	 * @param float 		$number	The number to be checked if it is more than one
	 * @param string 		$single String to return if the number is single
	 * @param null|string 	$plural String to return if the number is multiple. Defaults to $single + 's'
	 *
	 * @return string
	 */
	public function plural( float $number, $single = '', $plural = false, $numeric = false ) {
		$Settings = \williamisted\plural\Plugin::getInstance()->settings;
		return ( !preg_match( '/^\d+\.\d+$/', $number ) && $number < $Settings->spellOutLower && !$numeric && $Settings->spellOut ? Craft::$app->formatter->asSpellout( $number ) : $number ) . ' ' . ( floatval( $number ) <> 1 ? ( $plural ? $plural : $single . 's' ) : $single );
	}
}