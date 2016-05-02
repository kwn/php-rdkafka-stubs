<?php

namespace RdKafka;

class TopicConfTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var TopicConf
     */
    private $topicConf;

    public function setUp()
    {
        $this->topicConf = new TopicConf();
    }

    public function testDump()
    {
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
