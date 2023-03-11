<?php

namespace RdKafka;

class Message
{
    /**
     * @var int
     */
    public $err;

    /**
     * @var string|null
     */
    public $topic_name;

    /**
     * @var int
     */
    public $partition;

    /**
     * @var string|null
     */
    public $payload;

    /**
     * @var int|null
     */
    public $len;

    /**
     * @var string|null
     */
    public $key;

    /**
     * @var int
     */
    public $offset;

    /**
     * @var int|null
     */
    public $timestamp;

    /**
     * @var array|null
     */
    public $headers;

    /**
     * @var string|null
     */
    public $opaque;

    /**
     * @return string
     */
    public function errstr()
    {
    }
}
