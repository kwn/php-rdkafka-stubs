<?php

namespace RdKafka;

class KafkaConsumerTopic extends Topic
{
    /**
     * @param int $partition
     * @param int $offset
     *
     * @return void
     */
    public function offsetStore($partition, $offset)
    {
    }

    /**
     * @param int $partition
     * @param int $timeout_ms
     * @param callable $callback
     *
     * @return void
     */
    public function consumeCallback($partition, $timeout_ms, callable $callback)
    {
    }
}
