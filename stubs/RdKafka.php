<?php

use RdKafka\Exception;
use RdKafka\Metadata;
use RdKafka\Topic;
use RdKafka\TopicConf;
use RdKafka\Queue;

abstract class RdKafka
{
    /**
     * @param string $broker_list
     *
     * @return int
     */
    public function addBrokers($broker_list)
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
    public function getMetadata($all_topics, $only_topic = null, $timeout_ms)
    {
    }

    /**
     * @return int
     */
    public function getOutQLen()
    {
    }

    /**
     * @param string    $topic_name
     * @param TopicConf $topic_conf
     *
     * @return Topic
     */
    public function newTopic($topic_name, TopicConf $topic_conf = null)
    {
    }

    /**
     * @param int $timeout_ms
     *
     * @return void
     */
    public function poll($timeout_ms)
    {
    }

    /**
     * @param int $level
     *
     * @deprecated
     *
     * @return void
     */
    public function setLogLevel($level)
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
     * @param array $topicPartitions
     * @param int   $timeout_ms
     * @return array
     */
    public function offsetsForTimes ($topicPartitions , $timeout_ms)
    {
    }

    /**
     * @param int $purge_flags
     * @return int
     */
    public function purge($purge_flags)
    {
    }

    /**
     * @param int $timeout_ms
     * @return int
     */
    public function flush($timeout_ms)
    {
    }
}
