<?php
namespace RdKafka;

/**
 * Class Message
 * A Kafka message as returned by the consuming methods.
 *
 * This object has two purposes:
 *
 * provide the application with a consumed message. (->err == 0)
 * report per-topic+partition consumer errors (->err != 0)
 * The application must check err to decide what action to take.
 */
final class Message
{
    /**
     * Non-zero for error signaling. Use errstr() for a string representation.
     * @var int
     */
    public $err;

    /**
     * Topic name
     * @var string
     */
    public $topic_name;

    /**
     * Partition
     * @var int
     */
    public $partition;

    /**
     * When err == 0: the message payload
     * @var string
     */
    public $payload;

    /**
     * When err == 0: Optional message key
     * @var string
     */
    public $key;

    /**
     * When err == 0: Message offset
     * @var int
     */
    public $offset;

    /**
     * When err != 0, returns the string representation of the error.
     * @return string
     */
    public function errstr() {}
}