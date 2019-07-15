<?php

namespace RdKafka;

use PHPUnit\Framework\TestCase;

class QueueTest extends TestCase
{
    private const PARTITION = 0;

    /**
     * @var ConsumerTopic
     */
    private $consumerTopic;

    /**
     * @var Queue
     */
    private $queue;

    protected function setUp(): void
    {
        // $consumer = new Consumer();
        // $consumer->addBrokers('localhost:9092');
        //
        // $this->consumerTopic = $consumer->newTopic('test');
        // $this->queue = $consumer->newQueue();
    }

    public function testConsumeViaQueue(): void
    {
        self::markTestSkipped('Temporarily disabled');

        $this->markTestSkipped('Consuming via queue does not work');

        $this->consumerTopic->consumeQueueStart(self::PARTITION, RD_KAFKA_OFFSET_BEGINNING, $this->queue);
        $this->consumerTopic->consume(self::PARTITION, 100);
        $this->consumerTopic->consumeStop(self::PARTITION);

        $message = $this->queue->consume(200);

        $this->assertInstanceOf(Message::class, $message);
    }
}
