<?php

namespace RdKafka;

/**
 * Configuration reference: https://github.com/edenhill/librdkafka/blob/master/CONFIGURATION.md
 */
class Conf
{
    /**
     * @return array
     */
    public function dump()
    {
    }

    /**
     * @param string $name
     * @param string $value
     *
     * @return void
     */
    public function set($name, $value)
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
     * @param callable $callback
     *
     * @return void
     */
    public function setDrMsgCb(callable $callback)
    {
    }

    /**
     * @param callable $callback
     *
     * @return void
     */
    public function setErrorCb(callable $callback)
    {
    }

    /**
     * @param callable $callback
     *
     * @return void
     */
    public function setRebalanceCb(callable $callback)
    {
    }

    /**
     * @param callable $callback
     *
     * @return void
     */
    public function setStatsCb(callable $callback)
    {
    }

    /**
     * @param callable $callback
     *
     * @return void
     */
    public function setConsumeCb(callable $callback)
    {
    }

    /**
     * @param callable $callback
     *
     * @return void
     */
    public function setOffsetCommitCb(callable $callback)
    {
    }

    /**
     * @param callable $callback
     *
     * @return void
     */
    public function setLogCb(callable $callback)
    {
    }
}
