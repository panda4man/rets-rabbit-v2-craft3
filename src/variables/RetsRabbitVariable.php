<?php
/**
 * Rets Rabbit plugin for Craft CMS 3.x
 *
 * Display real estate listings in your craft site in a simple and intuitive way.
 *
 * @link      http://anecka.com
 * @copyright Copyright (c) 2017 Anecka, LLC
 */

namespace apc\retsrabbit\variables;


/**
 * Rets Rabbit Variable
 *
 * This variable acts as the base for all other Rets Rabbit variables
 *
 * craft.retsRabbit.{variable}.{method}
 *
 * https://craftcms.com/docs/plugins/variables
 *
 * @author APC, LLC
 * @package   RetsRabbit
 * @since     1.0.0
 */
class RetsRabbitVariable
{
    /**
     * Call the resource variables
     * 
     * @param  string $name
     * @param  array $arguments
     * @return object
     */
    public function __call($name, $arguments)
    {
        $className = "apc\\retsrabbit\\variables\\" . ucfirst($name) . 'Variable';

        return class_exists($className) ? new $className() : null;
    }
}
