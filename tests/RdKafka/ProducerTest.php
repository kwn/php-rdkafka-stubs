<?php

namespace RdKafka;

class ProducerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Producer
     */
    private $producer;

    public function setUp()
    {
        $this->producer = new Producer();
        $this->producer->addBrokers('localhost:9092');
    }

    public function testAddBrokers()
    {
        $addedBrokersNumber = $this->producer->addBrokers('localhost:9092');

        $this->assertEquals(1, $addedBrokersNumber);
    }

    public function testGetMetadata()
    {
        $metadata = $this->producer->getMetadata(true, null, 60e3);

        $this->assertInstanceOf(Metadata::class, $metadata);
    }

    public function testGetOutQLen()
    {
        $outQLen = $this->producer->getOutQLen();

        $this->assertEquals(0, $outQLen);
    }

    public function testNewQueue()
    {
        $queue = $this->producer->newQueue();

        $this->assertInstanceOf(Queue::class, $queue);
    }

    public function testNewTopic()
    {
        $topic = $this->producer->newTopic('test');

        $this->assertInstanceOf(ProducerTopic::class, $topic);
    }

    public function testPoll()
    {
        $this->producer->poll(0);

        $this->markTestIncomplete('Create real test and trigger a callback using poll()');
    }

    public function testSetLogLevel()
    {
        $this->producer->setLogLevel(LOG_DEBUG);

        $this->markTestIncomplete('Create real test');
    }
}
