<?php
namespace RdKafka;

final class ProducerTopic extends Topic
{

    /**
     * Produce and send a single message to broker.
     *
     * produce() is an asynch non-blocking API.
     *
     * Throws a RdKafka\Exception on error.
     *
     * @param int $partition is the target partition, either RD_KAFKA_PARTITION_UA (unassigned) for automatic partitioning
     * using the topic's partitioner function, or a fixed partition (0..N)
     * @param int $msgflags must be 0.
     * @param string $payload is the message payload
     * @param string|null $key is an optional message key, if non-NULL it will be passed to the topic partitioner as well as be sent with the message to the broker and passed on to the consumer.
     *
     * @throws \RdKafka\Exception
     */
    public function produce($partition, $msgflags, $payload, $key = null) {}
}