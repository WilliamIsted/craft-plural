<?php

namespace Craft;

use Twig_Extension;
use Twig_Filter_Method;

class PluralTwigExtension extends Twig_Extension {

	public function getName() {
		return 'Plural';
	}

	public function getFilters() {
		return [
			'plural' => new Twig_Filter_Method( $this, 'plural' ),
		];
	}

	public function plural( $int, $single = '', $plural = false ) {
		return $int . ' ' . ( intval( $int ) <> 1 ? ( $plural ? $plural : $single . 's' ) : $single );
	}

}