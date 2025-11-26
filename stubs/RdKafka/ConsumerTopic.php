<?php

namespace RdKafka;

class ConsumerTopic extends Topic
{
    private function __construct()
    {
    }

    /**
     * @param int $partition
     * @param int $timeout_ms
     *
     * @return Message|null
     */
    public function consume(int $partition, int $timeout_ms)
    {
    }

    /**
     * @param int   $partition
     * @param int   $offset
     * @param Queue $queue
     *
     * @return void
     */
    public function consumeQueueStart(int $partition, int $offset, Queue $queue)
    {
    }

    /**
     * @param int $partition
     * @param int $offset
     *
     * @return void
     */
    public function consumeStart(int $partition, int $offset)
    {
    }

    /**
     * @param int $partition
     *
     * @return void
     */
    public function consumeStop(int $partition)
    {
    }

    /**
     * @param int $partition
     * @param int $offset
     *
     * @return void
     */
    public function offsetStore(int $partition, int $offset)
    {
    }

    /**
     * @param int $partition
     * @param int $timeout_ms
     * @param int $batch_size
     *
     * @throws Exception
     * @throws \InvalidArgumentException
     * @return Message[]|null
     */
    public function consumeBatch(int $partition, int $timeout_ms, int $batch_size)
    {
    }

    /**
     * @param int $partition
     * @param int $timeout_ms
     * @param callable $callback
     *
     * @return void
     */
    public function consumeCallback(int $partition, int $timeout_ms, callable $callback)
    {
    }
}
