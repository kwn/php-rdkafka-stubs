<?php
namespace RdKafka;

final class Consumer extends \RdKafka
{
    /**
     * @return \RdKafka\Queue
     */
    public function newQueue() {}

    /**
     * Creates a new RdKafka\ConsumerTopic for topic named $topic.
     * @param string $topic
     * @param \RdKafka\TopicConf|null $conf is an optional configuration for the topic that will be used instead
     * of the default topic configuration. The $conf object is copied by this function, and changing $conf after
     * that has no effect on the topic. See RdKafka\TopicConf for more information.
     * @return \RdKafka\ConsumerTopic
     */
    public function newTopic($topic, TopicConf $conf = null) {}
}