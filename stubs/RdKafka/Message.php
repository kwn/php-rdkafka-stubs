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
     * @var string
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
     * @var array
     */
    public $headers;

    /**
     * @return string
     */
    public function errstr()
    {
    }
}
