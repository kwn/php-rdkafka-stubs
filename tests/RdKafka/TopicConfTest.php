<?php

namespace RdKafka;

use PHPUnit\Framework\TestCase;

class TopicConfTest extends TestCase
{
    /**
     * @var TopicConf
     */
    private $topicConf;

    public function setUp(): void
    {
        $this->topicConf = new TopicConf();
    }

    public function testDump()
    {
        $this->markTestSkipped('Fails on CI');

        $expectedKeys = [
            'request.required.acks',
            'enforce.isr.cnt',
            'request.timeout.ms',
            'message.timeout.ms',
            'produce.offset.report',
            'auto.commit.enable',
            'auto.commit.interval.ms',
            'auto.offset.reset',
            'offset.store.path',
            'offset.store.sync.interval.ms',
            'offset.store.method'
        ];

        $dumpedKeys = array_keys($this->topicConf->dump());

        $this->assertEquals($expectedKeys, $dumpedKeys);
    }
}
