<?php

abstract class RdKafka
{
    /**
     * @param string $brokerList
     *
     * @return int
     */
    public function addBrokers($brokerList)
    {
    }

    /**
     * @param bool          $allTopics
     * @param RdKafka\Topic $onlyTopic
     * @param int           $timeoutMs
     *
     * @return \RdKafka\Metadata
     */
    public function getMetadata($allTopics, $onlyTopic = null, $timeoutMs)
    {
    }

    /**
     * @return int
     */
    public function getOutQLen()
    {
    }

    /**
     * @return \RdKafka\Queue
     */
    public function newQueue()
    {
    }

    /**
     * @param string            $topicName
     * @param \RdKafka\TopicConf $topicConf
     *
     * @return \RdKafka\Topic
     */
    public function newTopic($topicName, \RdKafka\TopicConf $topicConf = null)
    {
    }

    /**
     * @param int $timeoutMs
     *
     * @return void
     */
    public function poll($timeoutMs)
    {
    }

    /**
     * @param int $level
     *
     * @return void
     */
    public function setLogLevel($level)
    {
    }
}
