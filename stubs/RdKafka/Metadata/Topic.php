<?php
namespace RdKafka\Metadata;

final class Topic
{
    /**
     * Returns the topic name
     * @return string
     */
    public function getTopic() {}

    /**
     * Returns the topic error reported by broker.
     * @return int
     */
    public function getErr() {}

    /**
     * @return \RdKafka\Metadata\Partition[]
     */
    public function getPartitions() {}
}