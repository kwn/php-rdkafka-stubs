<?php

namespace RdKafka;

class TopicPartition
{
    /**
     * @param string $topic
     * @param int    $partition
     * @param int    $offset
     */
    public function __construct($topic, $partition, $offset = null)
    {
    }

    /**
     * @return int
     */
    public function getOffset(): int
    {
    }

    /**
     * @return int
     */
    public function getPartition(): int
    {
    }

    /**
     * @return string
     */
    public function getTopic(): string
    {
    }

    /**
     * @param int $offset
     *
     * @return void
     */
    public function setOffset(int $offset)
    {
    }

    /**
     * @param int $partition
     *
     * @return void
     */
    public function setPartition(int $partition)
    {
    }

    /**
     * @param string $topic_name
     *
     * @return void
     */
    public function setTopic(string $topic_name)
    {
    }
}
