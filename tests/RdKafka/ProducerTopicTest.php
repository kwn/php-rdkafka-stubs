<?php

namespace RdKafka;

class ProducerTopicTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var ProducerTopic
     */
    private $producerTopic;

    public function setUp()
    {
        $producer = new Producer();
        $producer->addBrokers('localhost:9092');

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
