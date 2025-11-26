<?php

namespace RdKafka;

class Queue
{
    private function __construct()
    {
    }

    /**
     * @param int $timeout_ms
     *
     * @return Message|null
     */
    public function consume(int $timeout_ms)
    {
    }
}
