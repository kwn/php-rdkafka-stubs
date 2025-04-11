<?php

namespace RdKafka;

class ProducerTopic extends Topic
{
    private function __construct()
    {
    }

    /**
     * @param int    $partition
     * @param int    $msgflags
     * @param string|null $payload
     * @param string|null $key
     * @param string|null $opaque
     *
     * @throws Exception
     * @return void
     */
    public function produce(int $partition, int $msgflags, string $payload = null, string $key = null, string $opaque = null)
    {
    }

    /**
     * @param int         $partition
     * @param int         $msgflags
     * @param string      $payload
     * @param string|null $key
     * @param array|null  $headers
     * @param int         $timestamp_ms
     * @param string|null $opaque
     *
     * @throws Exception
     */
    public function producev(int $partition, int $msgflags, string $payload, string $key = null, array $headers = null, int $timestamp_ms = null, string $opaque = null)
    {
    }
}
