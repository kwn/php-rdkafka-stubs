<?php
namespace RdKafka;

/**
 * New Queue instances can be created by calling RdKafka\Consumer::newQueue().
 * Message queues allows the application to re-route consumed messages from multiple topic+partitions into one single queue point.
 * This queue point, containing messages from a number of topic+partitions, may then be served by a single consume() call, rather than one per topic+partition combination.
 *
 * See RdKafka\ConsumerTopic::consumeQueueStart(), RdKafka\Queue::consume().
 * Class Queue
 * @package RdKafka
 */
class Queue
{
    /**
     * Consume a single message from $partition.
     *
     * @param int $timeout_ms is maximum amount of time to wait for a message to be received. Consumer must have been previously started with consumeStart().
     *
     * Returns NULL on timeout.
     * Throws a RdKafka\Exception on error.
     *
     * NOTE: The returned message's ..->err must be checked for errors.
     *
     * NOTE: ..->err == RD_KAFKA_RESP_ERR__PARTITION_EOF signals that the end of the partition has been reached,
     * which should typically not be considered an error. The application should handle this case (e.g., ignore).
     *
     * @throws \RdKafka\Exception
     * @return \Rdkafka\Message|NULL
     */
    public function consume($timeout_ms) {}
}