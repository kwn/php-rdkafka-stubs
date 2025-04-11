<?php

namespace RdKafka;

class Producer extends \RdKafka
{
    /**
     * @param Conf $conf
     */
    public function __construct(Conf $conf = null)
    {
    }

    /**
     * @param string         $topic_name
     * @param TopicConf|null $topic_conf
     *
     * @return ProducerTopic
     */
    public function newTopic(string $topic_name, TopicConf $topic_conf = null): Topic
    {
    }

    /**
     * @param int $timeoutMs
     *
     * @throws KafkaErrorException
     * @return void
     */
    public function initTransactions(int $timeoutMs)
    {
    }

    /**
     * @throws KafkaErrorException
     * @return void
     */
    public function beginTransaction()
    {
    }

    /**
     * @param int $timeoutMs
     *
     * @throws KafkaErrorException
     * @return void
     */
    public function commitTransaction(int $timeoutMs)
    {
    }

    /**
     * @param int $timeoutMs
     *
     * @throws KafkaErrorException
     * @return void
     */
    public function abortTransaction(int $timeoutMs)
    {
    }
}
