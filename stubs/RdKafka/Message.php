<?php

namespace RdKafka;

class Message
{
    /**
     * @var int|null
     */
    public $err;

    /**
     * @var string|null
     */
    public $topic_name;

    /**
     * @var int|null
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
     * @var int|null
     */
    public $offset;

    /**
     * @var int|null
     */
    public $timestamp;

    /**
     * @var string|null
     */
    public $opaque;

    /**
     * @return string
     */
    public function errstr(): string
    {
    }

    public function headers(): array
    {
    }
}
