<?php

namespace RdKafka;

use PHPUnit\Framework\TestCase;

class ConsumerTest extends TestCase
{
    /**
     * @var Consumer
     */
    private $consumer;

    protected function setUp(): void
    {
        // $this->consumer = new Consumer();
        // $this->consumer->addBrokers('localhost:9092');
    }

    public function testAddBrokers(): void
    {
        self::markTestSkipped('Temporarily disabled');

        $addedBrokersNumber = $this->consumer->addBrokers('localhost:9092');

        $this->assertEquals(1, $addedBrokersNumber);
    }

    public function testGetMetadata(): void
    {
        self::markTestSkipped('Temporarily disabled');

        if (method_exists($this->consumer, 'getMetadata')) {
            $metadata = $this->consumer->getMetadata(true, null, 60e3);
        } else {
            $metadata = $this->consumer->metadata(true, null, 60e3);
        }

        $this->assertInstanceOf(Metadata::class, $metadata);
    }

    public function testGetOutQLen(): void
    {
        self::markTestSkipped('Temporarily disabled');

        if (method_exists($this->consumer, 'getOutQLen')) {
            $outQLen = $this->consumer->getOutQLen();
        } else {
            $outQLen = $this->consumer->outQLen();
        }

        $this->assertEquals(0, $outQLen);
    }

    public function testNewQueue(): void
    {
        self::markTestSkipped('Temporarily disabled');

        $queue = $this->consumer->newQueue();

        $this->assertInstanceOf(Queue::class, $queue);
    }

    public function testNewTopic(): void
    {
        self::markTestSkipped('Temporarily disabled');

        $topic = $this->consumer->newTopic('test');

        $this->assertInstanceOf(ConsumerTopic::class, $topic);
    }

    public function testPoll(): void
    {
        self::markTestSkipped('Temporarily disabled');

        $this->consumer->poll(0);

        $this->markTestIncomplete('Create real test and trigger a callback using poll()');
    }

    public function testSetLogLevel(): void
    {
        self::markTestSkipped('Temporarily disabled');

        $this->consumer->setLogLevel(LOG_DEBUG);

        $this->markTestIncomplete('Create real test');
    }
}
