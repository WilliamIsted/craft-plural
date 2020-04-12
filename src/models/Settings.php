<?php
/**
 * Plural plugin for Craft CMS 3.x
 *
 * Simple plural plugin for Craft
 *
 * @link      https://william.isted.me/
 * @copyright Copyright (c) 2020 William Isted
 */

namespace williamisted\plural\models;

use williamisted\plural\Plural;

use Craft;
use craft\base\Model;

/**
 * Plural Settings Model
 *
 * This is a model used to define the plugin's settings.
 *
 * Models are containers for data. Just about every time information is passed
 * between services, controllers, and templates in Craft, it’s passed via a model.
 *
 * https://craftcms.com/docs/plugins/models
 *
 * @author    William Isted
 * @package   Plural
 * @since     2.0.0
 */
class Settings extends Model
{
    // Public Properties
    // =========================================================================

    /**
     * Some field model attribute
     *
     * @var string
     */
    public $spellOut = 1;
    public $spellOutLower = 10;

    // Public Methods
    // =========================================================================

    /**
     * Returns the validation rules for attributes.
     *
     * Validation rules are used by [[validate()]] to check if attribute values are valid.
     * Child classes may override this method to declare different validation rules.
     *
     * More info: http://www.yiiframework.com/doc-2.0/guide-input-validation.html
     *
     * @return array
     */
    public function rules()
    {
        return [
            [ 'spellOut', 'integer' ],
            [ 'spellOut', 'default', 'value' => 1 ],
            [ 'spellOutLower', 'integer' ],
            [ 'spellOutLower', 'default', 'value' => 10 ],
        ];
    }
}
