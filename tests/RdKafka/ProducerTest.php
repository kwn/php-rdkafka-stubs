<?php

namespace RdKafka;

class ProducerTest extends \PHPUnit_Framework_TestCase
{
    const MESSAGE_PAYLOAD = 'test payload';

    /**
     * @var Producer
     */
    private $producer;

    /**
     * @var string
     */
    private $filename;

    public function setUp()
    {
        $this->filename = __DIR__ . '/../../build/message.txt';

        if (is_file($this->filename)) {
            unlink($this->filename);
        }

        $configuration = new Conf();
        $configuration->setDrMsgCb(function (\RdKafka $kafka, Message $message) {
            file_put_contents($this->filename, $message->payload);
        });

        $this->producer = new Producer($configuration);
        $this->producer->addBrokers('localhost:9092');
    }

    public function testAddBrokers()
    {
        $addedBrokersNumber = $this->producer->addBrokers('localhost:9092');

        self::assertEquals(1, $addedBrokersNumber);
    }

    public function testGetMetadata()
    {
        $metadata = $this->producer->getMetadata(true, null, 5000);

        self::assertInstanceOf(Metadata::class, $metadata);
    }

    public function testGetOutQLen()
    {
        $outQLen = $this->producer->getOutQLen();

        self::assertEquals(0, $outQLen);
    }

    public function testNewQueue()
    {
        $queue = $this->producer->newQueue();

        self::assertInstanceOf(Queue::class, $queue);
    }

    public function testNewTopic()
    {
        $topic = $this->producer->newTopic('test');

        self::assertInstanceOf(ProducerTopic::class, $topic);
    }

    public function testPoll()
    {
        $topic = $this->producer->newTopic('test');
        $topic->produce(RD_KAFKA_PARTITION_UA, 0, self::MESSAGE_PAYLOAD);

        $this->producer->poll(100);

        self::assertStringEqualsFile($this->filename, self::MESSAGE_PAYLOAD);
    }

    public function testSetLogLevel()
    {
        $this->producer->setLogLevel(LOG_DEBUG);

        self::markTestIncomplete('Create real test');
    }
}
