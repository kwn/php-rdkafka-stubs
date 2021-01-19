<?php

namespace RdKafka;

use PHPUnit\Framework\TestCase;

class ProducerTopicTest extends TestCase
{
    /**
     * @var ProducerTopic
     */
    private $producerTopic;

    public function setUp(): void
    {
        $conf = new Conf();
        $conf->set('metadata.broker.list', 'localhost:9092');
        $producer = new Producer($conf);

        $this->producerTopic = $producer->newTopic('test');
    }

    public function testProducerTopicCantBeInstantiatedDirectly()
    {
        $reflector = new \ReflectionClass(ProducerTopic::class);
        $constructor = $reflector->getConstructor();

        $this->assertTrue($constructor->isPrivate());
    }

    public function testGetName()
    {
        $topicName = $this->producerTopic->getName();

        $this->assertEquals('test', $topicName);
    }

    public function testProduce()
    {
        $this->producerTopic->produce(RD_KAFKA_PARTITION_UA, 0, 'testing kafka messages', 'test_key');

        $this->markTestIncomplete('Add consumer to test if message has been sent');
    }
}
