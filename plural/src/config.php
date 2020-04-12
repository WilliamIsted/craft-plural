<?php
/**
 * Plural plugin for Craft CMS 3.x
 *
 * Simple plural plugin for Craft
 *
 * @link      https://william.isted.me/
 * @copyright Copyright (c) 2020 William Isted
 */

/**
 * Plural config.php
 *
 * This file exists only as a template for the Plural settings.
 * It does nothing on its own.
 *
 * Don't edit this file, instead copy it to 'craft/config' as 'plural.php'
 * and make your changes there to override default settings.
 *
 * Once copied to 'craft/config', this file will be multi-environment aware as
 * well, so you can have different settings groups for each environment, just as
 * you do for 'general.php'
 */

return [

    // Controls whether to spell out numbers
    'spellOut' => 1,
    // Which numbers lower than X should be spelled out
    'spellOutUnder' => 10,

];
