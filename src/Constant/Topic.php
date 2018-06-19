<?php

namespace Kafka\Constant;

/**
 * @see https://github.com/edenhill/librdkafka/blob/master/CONFIGURATION.md
 */
abstract class Topic
{
    /**
     * Application opaque (set with rd_kafka_topic_conf_set_opaque())
     *
     * Type: pointer
     */
    const OPAQUE = 'opaque';

    final protected function __construct()
    {
    }
}
