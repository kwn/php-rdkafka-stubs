<?php

namespace RdKafka;

class Message
{
    /**
     * @var int
     */
    public $err;

    /**
     * @var string
     */
    public $topic_name;

    /**
     * @var int
     */
    public $partition;

    /**
     * @var string
     */
    public $payload;

    /**
     * @var string|null
     */
    public $key;

    /**
     * @var int
     */
    public $offset;

    /**
     * @var int
     */
    public $timestamp;

    /**
     * @var array|null
     */
    public $headers;

    /**
     * @return string
     */
    public function errstr()
    {
    }
}
