<?php

use RdKafka\Exception;
use RdKafka\Metadata;
use RdKafka\Topic;
use RdKafka\TopicConf;
use RdKafka\TopicPartition;

abstract class RdKafka
{
    /**
     * @param string $broker_list
     *
     * @return int
     */
    public function addBrokers(string $broker_list): int
    {
    }

    /**
     * @param bool       $all_topics
     * @param Topic|null $only_topic
     * @param int        $timeout_ms
     *
     * @throws Exception
     * @return Metadata
     */
    public function getMetadata(bool $all_topics, Topic $only_topic = null, int $timeout_ms): Metadata
    {
    }

    /**
     * @return int
     */
    public function getOutQLen(): int
    {
    }

    /**
     * @param string    $topic_name
     * @param TopicConf $topic_conf
     *
     * @return Topic
     */
    public function newTopic(string $topic_name, TopicConf $topic_conf = null): Topic
    {
    }

    /**
     * @param int $timeout_ms
     *
     * @return void
     */
    public function poll(int $timeout_ms)
    {
    }

    /**
     * @param int $level
     *
     * @deprecated
     *
     * @return void
     */
    public function setLogLevel(int $level)
    {
    }

    /**
     * @deprecated
     */
    public function setLogger(int $logger_id)
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
     * @param TopicPartition[] $topicPartitions
     * @param int   $timeout_ms
     * @return TopicPartition[]
     */
    public function offsetsForTimes (array $topicPartitions, int $timeout_ms): array
    {
    }

    /**
     * @param int $purge_flags
     * @return int
     */
    public function purge(int $purge_flags): int
    {
    }

    /**
     * @param int $timeout_ms
     * @return int
     */
    public function flush(int $timeout_ms): int
    {
    }

    /**
     * @param string $token_value
     * @param int|float|string $lifetime_ms
     * @param string $principal_name
     * @param array $extensions
     *
     * @return void
     */
    public function oauthbearerSetToken(string $token_value, $lifetime_ms, string $principal_name, array $extensions = [])
    {
    }

    /**
     * @param string $error
     *
     * @return void
     */
    public function oauthbearerSetTokenFailure(string $error)
    {
    }

    /**
     * @param int $timeout_ms
     *
     * @return int
     */
    public function getControllerId(int $timeout_ms): int
    {

    }
}
