<?php

namespace RdKafka;

use PHPUnit\Framework\Error\Deprecated;
use PHPUnit\Framework\TestCase;

class ProducerTest extends TestCase
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

    public function setUp(): void
    {
        $this->filename = __DIR__ . '/../../build/message.txt';

        if (is_file($this->filename)) {
            unlink($this->filename);
        }

        $configuration = new Conf();
        $configuration->set('metadata.broker.list', 'localhost:9092');
        $configuration->setDrMsgCb(function (\RdKafka $kafka, Message $message) {
            file_put_contents($this->filename, $message->payload);
        });

        $this->producer = new Producer($configuration);
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

    public function testNewTopic()
    {
        $topic = $this->producer->newTopic('test');

        self::assertInstanceOf(ProducerTopic::class, $topic);
    }

    public function testPoll()
    {
        $topic = $this->producer->newTopic('test');
        $topic->produce(RD_KAFKA_PARTITION_UA, 0, self::MESSAGE_PAYLOAD);

        $this->producer->poll(0);
        $this->producer->flush(10000);

        self::assertStringEqualsFile($this->filename, self::MESSAGE_PAYLOAD);
    }

    public function testSetLogLevel()
    {
        $this->expectException(Deprecated::class);

        $this->producer->setLogLevel(LOG_DEBUG);

        self::markTestIncomplete('Create real test');
    }

    public function testInitTransactions()
    {
        $configuration = new Conf();
        $configuration->set('metadata.broker.list', 'localhost:9092');
        $configuration->set('transactional.id', 'some-id');

        $this->producer = new Producer($configuration);

        self::assertNull($this->producer->initTransactions(10000));
    }

    public function testBeginTransaction()
    {
        $configuration = new Conf();
        $configuration->set('metadata.broker.list', 'localhost:9092');
        $configuration->set('transactional.id', 'some-id');

        $this->producer = new Producer($configuration);

        $this->producer->initTransactions(10000);
        self::assertNull($this->producer->beginTransaction());
    }

    public function testCommitTransaction()
    {
        $configuration = new Conf();
        $configuration->set('metadata.broker.list', 'localhost:9092');
        $configuration->set('transactional.id', 'some-id');

        $this->producer = new Producer($configuration);

        $this->producer->initTransactions(10000);
        $this->producer->beginTransaction();
        self::assertNull($this->producer->commitTransaction(10000));
    }

    public function testAbortTransaction()
    {
        $configuration = new Conf();
        $configuration->set('metadata.broker.list', 'localhost:9092');
        $configuration->set('transactional.id', 'some-id');

        $this->producer = new Producer($configuration);

        $this->producer->initTransactions(10000);
        $this->producer->beginTransaction();
        self::assertNull($this->producer->abortTransaction(10000));
    }
}
