<?php

namespace RdKafka;

/**
 * Configuration reference: https://github.com/edenhill/librdkafka/blob/master/CONFIGURATION.md
 */
class TopicConf
{
    /**
     * @return array
     */
    public function dump(): array
    {
    }

    /**
     * @param string $name
     * @param string $value
     *
     * @return void
     */
    public function set(string $name, string $value)
    {
    }

    /**
     * @param int $partitioner
     *
     * @return void
     */
    public function setPartitioner(int $partitioner)
    {
    }
}
