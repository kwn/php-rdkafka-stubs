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

    protected function setUp(): void
    {
        $producer = new Producer();
        $producer->addBrokers('localhost:9092');

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
        $this->assertEquals(-1, $this->metadata->getOrigBrokerId());
    }

    public function testGetOrigBrokerName()
    {
        $this->assertEquals('localhost:9092/bootstrap', $this->metadata->getOrigBrokerName());
    }
}
