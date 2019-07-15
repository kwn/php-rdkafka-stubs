<?php

namespace RdKafka;

use PHPUnit\Framework\TestCase;

class MessageTest extends TestCase
{
    const PARTITION = 0;
    const OFFSET    = -1;

    /**
     * @var Message
     */
    private $message;

    protected function setUp(): void
    {
        $producer = new Producer();
        $producer->addBrokers('localhost:9092');

        /** @var ProducerTopic $producerTopic */
        $producerTopic = $producer->newTopic('test');
        $producerTopic->produce(RD_KAFKA_PARTITION_UA, self::PARTITION, 'test message 2', 'key_2');

        $consumer = new Consumer();
        $consumer->addBrokers('localhost:9092');

        /** @var ConsumerTopic $consumerTopic */
        $consumerTopic = $consumer->newTopic('test');
        $consumerTopic->consumeStart(self::PARTITION, RD_KAFKA_OFFSET_BEGINNING);

        $this->message = $consumerTopic->consume(self::PARTITION, 1000);

        //$consumerTopic->consumeStop(self::PARTITION);
    }

    public function testMessageProperties()
    {
        $this->markTestSkipped('Fails on CI');

        $this->assertEquals(0, $this->message->err);
        $this->assertEquals('test', $this->message->topic_name);
        $this->assertEquals(self::PARTITION, $this->message->partition);
        $this->assertEquals('test message 2', $this->message->payload);
        $this->assertEquals('key_2', $this->message->key);
        $this->assertGreaterThanOrEqual(0, $this->message->offset);
    }

    public function testErrstr()
    {
        $this->markTestSkipped('Fails on CI');

        $this->assertEquals('test message 2', $this->message->errstr());
    }
}
