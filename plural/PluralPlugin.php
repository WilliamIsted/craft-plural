<?php

// Just a simple plugin

namespace Craft;

class PluralPlugin extends BasePlugin {

	public function getName() {
		return Craft::t('Plural');
	}

	public function getVersion() {
		return '1.0.0';
	}

	public function getDeveloper() {
		return 'William Isted';
	}

	public function getDeveloperUrl() {
		return 'https://william.isted.me';
	}

	public function getPluginUrl() {
		return 'https://github.com/WilliamIsted/CraftPlural';
	}

	public function getDescription() {
		return 'Usage: {{ entries | length | plural(\'result\') }}';
	}

	public function getDocumentationUrl() {
		return $this->getPluginUrl().'/blob/master/README.md';
	}

	public function getReleaseFeedUrl() {
		return 'https://raw.githubusercontent.com/WilliamIsted/CraftPlural/master/releases.json';
	}

	public function addTwigExtension() {
		Craft::import('plugins.plural.twigextensions.PluralTwigExtension');
		return new PluralTwigExtension();
	}

}