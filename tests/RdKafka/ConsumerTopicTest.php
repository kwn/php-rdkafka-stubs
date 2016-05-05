<?php

namespace RdKafka;

class ConsumerTopicTest extends \PHPUnit_Framework_TestCase
{
    const PARTITION = 0;

    /**
     * @var ConsumerTopic
     */
    private $consumerTopic;

    public function setUp()
    {
        $consumer = new Consumer();
        $consumer->addBrokers('localhost:9092');

        $this->consumerTopic = $consumer->newTopic('test');
    }

    public function testConsumerTopicCantBeInstantiatedDirectly()
    {
        $reflector = new \ReflectionClass(ConsumerTopic::class);
        $constructor = $reflector->getConstructor();

        $this->assertTrue($constructor->isPrivate());
    }

    public function testGetName()
    {
        $topicName = $this->consumerTopic->getName();

        $this->assertEquals('test', $topicName);
    }

    public function testConsume()
    {
        $this->markTestSkipped('Fails on CI');

        $producer = new Producer();
        $producer->addBrokers('localhost:9092');

        /** @var ProducerTopic $producerTopic */
        $producerTopic = $producer->newTopic('test');
        $producerTopic->produce(self::PARTITION, 0, 'test message');

        $this->consumerTopic->consumeStart(self::PARTITION, RD_KAFKA_OFFSET_BEGINNING);

        $message = $this->consumerTopic->consume(self::PARTITION, 1000);

        $this->consumerTopic->consumeStop(self::PARTITION);

        $this->assertInstanceOf(Message::class, $message);
    }
}
