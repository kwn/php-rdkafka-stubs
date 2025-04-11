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
     * @param TopicPartition[]|null $topic_partitions
     *
     * @throws Exception
     * @return void
     */
    public function assign(array $topic_partitions = null)
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
     * @param string|null $message_or_offsets
     *
     * @throws Exception
     * @return void
     */
    public function commitAsync(string $message_or_offsets = null)
    {
    }

    /**
     * @param int $timeout_ms
     *
     * @throws Exception
     * @throws \InvalidArgumentException
     * @return Message
     */
    public function consume(int $timeout_ms): Message
    {
    }

    /**
     * @throws Exception
     * @return TopicPartition[]
     */
    public function getAssignment(): array
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
    public function getMetadata(bool $all_topics, KafkaConsumerTopic $only_topic = null, int $timeout_ms): Metadata
    {
    }

    /**
     * @return string[]
     */
    public function getSubscription(): array
    {
    }

    /**
     * @param string         $topic_name
     * @param TopicConf|null $topic_conf
     *
     * @return ConsumerTopic
     */
    public function newTopic(string $topic_name, TopicConf $topic_conf = null): ConsumerTopic
    {
    }

    /**
     * @param string[] $topics
     * Regex pattern matching automatically performed for topics prefixed with ^ (e.g. ^myPfx[0-9]_.*)
     *
     * @throws Exception
     * @return void
     */
    public function subscribe(array $topics)
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
    public function getCommittedOffsets(array $topicPartitions, int $timeout_ms): array
    {
    }

    /**
     * @param TopicPartition[] $topicPartitions
     * @param int              $timeout_ms
     * @return TopicPartition[]
     */
    public function offsetsForTimes(array $topicPartitions, int $timeout_ms): array
    {
    }

    /**
     * @param string $topic
     * @param int $partition
     * @param int $low
     * @param int $high
     * @param int $timeout_ms
     */
    public function queryWatermarkOffsets(string $topic, int $partition, int &$low, int &$high, int $timeout_ms)
    {
    }

    /**
     * @param TopicPartition[] $topics
     *
     * @throws Exception
     * @return TopicPartition[]
     */
    public function getOffsetPositions(array $topics): array
    {
    }

    /**
     * @return void
     */
    public function close()
    {
    }

    /**
     * @param TopicPartition[] $topic_partitions
     * @return TopicPartition[]
     */
    public function pausePartitions(array $topic_partitions): array
    {
    }

    /**
     * @param TopicPartition[] $topic_partitions
     * @return TopicPartition[]
     */
    public function resumePartitions(array $topic_partitions): array
    {
    }

    /**
     * @param array $topic_partitions
     */
    public function incrementalAssign(array $topic_partitions)
    {
    }

    /**
     * @param array $topic_partitions
     */
    public function incrementalUnassign(array $topic_partitions)
    {
    }
}
