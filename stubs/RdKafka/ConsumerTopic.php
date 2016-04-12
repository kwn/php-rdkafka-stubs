<?php
namespace RdKafka;

final class ConsumerTopic extends Topic
{
    /**
     * Start consuming messages for $partition at offset $offset which may either be a proper offset (0..N) or one of the the special offsets:
     * RD_KAFKA_OFFSET_BEGINNING, RD_KAFKA_OFFSET_END, RD_KAFKA_OFFSET_STORED, rd_kafka_offset_tail(..).
     *
     * rdkafka will attempt to keep queued.min.messages (config property) messages in the local queue by
     * repeatedly fetching batches of messages from the broker until the threshold is reached.
     *
     * The application shall use the consume() method to consume messages from the local queue, each kafka message being represented as a RdKafka\Message object.
     *
     * consumeStart() must not be called multiple times for the same topic and partition without stopping consumption first with consumeStop().
     *
     * Throws a RdKafka\Exception on error.
     *
     * @param int $partition
     * @param int $offset
     * @throws \RdKafka\Exception
     */
    public function consumeStart($partition, $offset) {}

    /**
     * Stop consuming messages for $partition, purging all messages currently in the local queue.
     * Throws a RdKafka\Exception on error.
     * @param int $partition
     * @throws \RdKafka\Exception
     */
    public function consumeStop($partition) {}

    /**
     * Same as consumeStart() but re-routes incoming messages to the provided queue $queue.
     * The application must use one of the RdKafka\Queue::consume*() functions to receive fetched messages.
     *
     * consumeQueueStart() must not be called multiple times for the same topic and partition without stopping consumption first with consumeStop().
     *
     * consumeStart() and consumeQueueStart() must not be combined for the same topic and partition.
     *
     * Throws a RdKafka\Exception on error.
     * @param int $partition
     * @param int $offset
     * @param \RdKafka\Queue $queue
     * @throws \RdKafka\Exception
     */
    public function consumeQueueStart($partition, $offset, \RdKafka\Queue $queue) {}

    /**
     * Consume a single message from $partition.
     *
     * @param int $partition partition to consume from
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
    public function consume($partition, $timeout_ms) {}

    /**
     * Store offset offset for topic rkt partition partition.
     * The offset will be commited (written) to the offset store according to auto.commit.interval.ms.
     *
     * NOTE: auto.commit.enable must be set to "false" when using this API.
     *
     * Throws a RdKafka\Exception on error.
     *
     * @param int $partition
     * @param int $offset
     * @throws \RdKafka\Exception
     */
    public function offsetStore($partition, $offset) {}
}