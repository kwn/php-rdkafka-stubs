<?php
namespace RdKafka;

final class Producer extends \RdKafka
{
    /**
     * Creates a new RdKafka\ProducerTopic for topic named $topic.
     *
     * @param string $topic
     * @param \RdKafka\TopicConf|null $conf is an optional configuration for the topic that will be used instead
     * of the default topic configuration. The $conf object is copied by this function, and changing $conf after
     * that has no effect on the topic. See RdKafka\TopicConf for more information.
     *
     * @return \RdKafka\ProducerTopic
     */
    public function newTopic($topic, \RdKafka\TopicConf $conf = null) {}
}