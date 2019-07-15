<?php

namespace RdKafka;

use PHPUnit\Framework\TestCase;

class ProducerTopicTest extends TestCase
{
    /**
     * @var ProducerTopic
     */
    private $producerTopic;

    protected function setUp(): void
    {
        // $producer = new Producer();
        // $producer->addBrokers('localhost:9092');
        //
        // $this->producerTopic = $producer->newTopic('test');
    }

    public function testProducerTopicCantBeInstantiatedDirectly(): void
    {
        self::markTestSkipped('Temporarily disabled');

        $reflector = new \ReflectionClass(ProducerTopic::class);
        $constructor = $reflector->getConstructor();

        $this->assertTrue($constructor->isPrivate());
    }

    public function testGetName(): void
    {
        self::markTestSkipped('Temporarily disabled');

        $topicName = $this->producerTopic->getName();

        $this->assertEquals('test', $topicName);
    }

    public function testProduce(): void
    {
        self::markTestSkipped('Temporarily disabled');

        $this->producerTopic->produce(RD_KAFKA_PARTITION_UA, 0, 'testing kafka messages', 'test_key');

        $this->markTestIncomplete('Add consumer to test if message has been sent');
    }
}
