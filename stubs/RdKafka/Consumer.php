<?php

namespace RdKafka;

class Consumer extends \RdKafka
{
    /**
     * @param Conf|null $conf
     */
    public function __construct(Conf $conf = null)
    {
    }

    /**
     * @param string         $topic_name
     * @param TopicConf|null $topic_conf
     *
     * @return ConsumerTopic
     */
    public function newTopic($topic_name, TopicConf $topic_conf = null)
    {
    }

    /**
     * @return Queue
     */
    public function newQueue()
    {
    }
}
