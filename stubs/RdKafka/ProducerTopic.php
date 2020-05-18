<?php

namespace RdKafka;

class ProducerTopic extends Topic
{
    private function __construct()
    {
    }

    /**
     * @param int         $partition
     * @param int         $msgflags
     * @param string      $payload
     * @param string|null $key
     *
     * @return void
     */
    public function produce($partition, $msgflags, $payload, $key = null)
    {
    }

    /**
     * @param int         $partition
     * @param int         $msgflags
     * @param string      $payload
     * @param string|null $key
     * @param array|null  $headers
     * @param int         $timestamp_ms
     */
    public function producev($partition, $msgflags, $payload, $key = null, $headers = null, $timestamp_ms = null)
    {
    }
}
