<?php

namespace RdKafka;

class ProducerTopic extends Topic
{
    /**
     * @param int    $partition
     * @param int    $msgflags
     * @param string $payload
     * @param string $key
     *
     * @return void
     */
    public function produce($partition, $msgflags, $payload, $key = null)
    {
    }
}
