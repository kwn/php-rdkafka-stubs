<?php

namespace RdKafka;

/**
 * Configuration reference: https://github.com/edenhill/librdkafka/blob/master/CONFIGURATION.md
 */
class Conf
{
    /**
     * @return array<string, string>
     */
    public function dump(): array
    {
    }

    /**
     * @param string $name
     * @param string $value
     *
     * @return void
     */
    public function set(string $name, string $value)
    {
    }

    /**
     * @param TopicConf $topic_conf
     *
     * @deprecated Set default topic settings normally like global configuration settings.
     *
     * @return void
     */
    public function setDefaultTopicConf(TopicConf $topic_conf)
    {
    }

    /**
     * @param callable $callback (RdKafka\Kafka $kafka, RdKafka\Message $message)
     *
     * @return void
     */
    public function setDrMsgCb(callable $callback)
    {
    }

    /**
     * @param callable $callback (RdKafka\KafkaConsumer|RdKafka\Producer $kafka, int $err, string $reason)
     *
     * @return void
     */
    public function setErrorCb(callable $callback)
    {
    }

    /**
     * @param callable $callback (RdKafka\KafkaConsumer $kafka, int $err, array $partitions)
     *
     * @return void
     */
    public function setRebalanceCb(callable $callback)
    {
    }

    /**
     * @param callable $callback (object $kafka, string $json, int $json_len);
     *
     * @return void
     */
    public function setStatsCb(callable $callback)
    {
    }

    /**
     * @param callable $callback (RdKafka\Message $msg)
     *
     * @return void
     */
    public function setConsumeCb(callable $callback)
    {
    }

    /**
     * @param callable $callback (object $kafka, int $err, array $partitions);
     *
     * @return void
     */
    public function setOffsetCommitCb(callable $callback)
    {
    }

    /**
     * @param callable $callback (object $kafka, int $level, string $facility, string $message);
     *
     * @return void
     */
    public function setLogCb(callable $callback)
    {
    }

    /**
     * @param callable $callback (RdKafka\Producer $producer)
     *
     * @return void
     */
    public function setOauthbearerTokenRefreshCb(callable $callback)
    {

    }
}
