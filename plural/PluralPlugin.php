<?php

// Just a simple plugin

namespace Craft;

class PluralPlugin extends BasePlugin {

	public function getName() {
		return Craft::t('Plural');
	}

	public function getVersion() {
		return '0.1.0';
	}

	public function getDeveloper() {
		return 'William Isted';
	}

	public function getDeveloperUrl() {
		return 'https://william.isted.me';
	}

	public function addTwigExtension() {
		Craft::import('plugins.plural.twigextensions.PluralTwigExtension');
		return new PluralTwigExtension();
	}

}