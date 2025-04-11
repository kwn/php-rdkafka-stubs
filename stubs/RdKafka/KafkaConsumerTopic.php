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
    public function offsetStore(int $partition, int $offset)
    {
    }
}
