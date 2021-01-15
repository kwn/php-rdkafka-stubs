<?php

namespace RdKafka;

class KafkaConsumer
{
    /**
     * @param Conf $conf
     */
    public function __construct(Conf $conf)
    {
    }

    /**
     * @param TopicPartition[] $topic_partitions
     *
     * @throws Exception
     * @return void
     */
    public function assign($topic_partitions = null)
    {
    }

    /**
     * @param null|Message|TopicPartition[] $message_or_offsets
     *
     * @throws Exception
     * @return void
     */
    public function commit($message_or_offsets = null)
    {
    }

    /**
     * @param string $message_or_offsets
     *
     * @throws Exception
     * @return void
     */
    public function commitAsync($message_or_offsets = null)
    {
    }

    /**
     * @param string $timeout_ms
     *
     * @throws Exception
     * @throws \InvalidArgumentException
     * @return Message
     */
    public function consume($timeout_ms)
    {
    }

    /**
     * @throws Exception
     * @return TopicPartition[]
     */
    public function getAssignment()
    {
    }

    /**
     * @param bool                    $all_topics
     * @param KafkaConsumerTopic|null $only_topic
     * @param int                     $timeout_ms
     *
     * @throws Exception
     * @return Metadata
     */
    public function getMetadata($all_topics, $only_topic, $timeout_ms)
    {
    }

    /**
     * @return array
     */
    public function getSubscription()
    {
    }

    /**
     * @param array $topics
     *
     * @throws Exception
     * @return void
     */
    public function subscribe($topics)
    {
    }

    /**
     * @throws Exception
     * @return void
     */
    public function unsubscribe()
    {
    }

    /**
     * @param TopicPartition[] $topicPartitions
     * @param int              $timeout_ms Timeout in milliseconds
     *
     * @throws Exception
     * @return TopicPartition[]
     */
    public function getCommittedOffsets($topicPartitions, $timeout_ms)
    {
    }

    /**
     * @param array $topicPartitions
     * @param int   $timeout_ms
     * @return array
     */
    public function offsetsForTimes($topicPartitions, $timeout_ms)
    {
    }

    /**
     * @param string $topic
     * @param int $partition
     * @param int $low
     * @param int $high
     * @param int $timeout_ms
     */
    public function queryWatermarkOffsets($topic, $partition, &$low, &$high, $timeout_ms)
    {
    }

    /**
     * @param array $topics
     * @return array
     */
    public function getOffsetPositions($topics)
    {
    }

    /**
     * @return void
     */
    public function close()
    {
    }
}
