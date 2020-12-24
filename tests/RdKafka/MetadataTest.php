<?php

namespace RdKafka;

use PHPUnit\Framework\TestCase;
use RdKafka\Metadata\Collection;

class MetadataTest extends TestCase
{
    /**
     * @var Metadata
     */
    private $metadata;

    public function setUp(): void
    {
        $conf = new Conf();
        $conf->set('metadata.broker.list', 'localhost:9092');
        $producer = new Producer($conf);

        sleep(1);

        if (method_exists($producer, 'getMetadata')) {
            $this->metadata = $producer->getMetadata(true, null, 1000);
        } else {
            $this->metadata = $producer->metadata(true, null, 1000);
        }
    }

    public function testGetBrokers()
    {
        $this->assertInstanceOf(Collection::class, $this->metadata->getBrokers());
    }

    public function testGetTopics()
    {
        $this->assertInstanceOf(Collection::class, $this->metadata->getTopics());
    }

    public function testGetOrigBrokerId()
    {
        $this->assertEquals(0, $this->metadata->getOrigBrokerId());
    }

    public function testGetOrigBrokerName()
    {
        $this->assertEquals('localhost:9092/0', $this->metadata->getOrigBrokerName());
    }
}
