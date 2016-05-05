<?php

namespace RdKafka;

class ConsumerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Consumer
     */
    private $consumer;

    public function setUp()
    {
        $this->consumer = new Consumer();
        $this->consumer->addBrokers('localhost:9092');
    }

    public function testAddBrokers()
    {
        $addedBrokersNumber = $this->consumer->addBrokers('localhost:9092');

        $this->assertEquals(1, $addedBrokersNumber);
    }

    public function testGetMetadata()
    {
        if (method_exists($this->consumer, 'getMetadata')) {
            $metadata = $this->consumer->getMetadata(true, null, 60e3);
        } else {
            $metadata = $this->consumer->metadata(true, null, 60e3);
        }

        $this->assertInstanceOf(Metadata::class, $metadata);
    }

    public function testGetOutQLen()
    {
        if (method_exists($this->consumer, 'getOutQLen')) {
            $outQLen = $this->consumer->getOutQLen();
        } else {
            $outQLen = $this->consumer->outQLen();
        }

        $this->assertEquals(0, $outQLen);
    }

    public function testNewQueue()
    {
        $queue = $this->consumer->newQueue();

        $this->assertInstanceOf(Queue::class, $queue);
    }

    public function testNewTopic()
    {
        $topic = $this->consumer->newTopic('test');

        $this->assertInstanceOf(ConsumerTopic::class, $topic);
    }

    public function testPoll()
    {
        $this->consumer->poll(0);

        $this->markTestIncomplete('Create real test and trigger a callback using poll()');
    }

    public function testSetLogLevel()
    {
        $this->consumer->setLogLevel(LOG_DEBUG);

        $this->markTestIncomplete('Create real test');
    }
}
