<?php
namespace RdKafka;

class Conf
{
    /**
     * Creates a new configuration.
     * The list of available configuration properties is documented at
     * https://github.com/edenhill/librdkafka/blob/master/CONFIGURATION.md
     */
    public function __construct() {}

    /**
     * Dump the configuration properties and values to an array.
     * @return array
     */
    public function dump() {}

    /**
     * Sets a configuration property.
     * @param string $name
     * @param string $value
     * @throws \RdKafka\Exception
     */
    public function set($name, $value) {}
}