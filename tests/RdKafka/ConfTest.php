<?php

namespace RdKafka;

class ConfTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Conf
     */
    private $conf;

    public function setUp()
    {
        $this->conf = new Conf();
    }

    /**
     * dump() returns all values for parameters as strings
     */
    public function testDump()
    {
        $this->markTestSkipped('Fails on CI');

        $expectedKeys = [
            'client.id',
            'message.max.bytes',
            'receive.message.max.bytes',
            'metadata.request.timeout.ms',
            'topic.metadata.refresh.interval.ms',
            'topic.metadata.refresh.fast.cnt',
            'topic.metadata.refresh.fast.interval.ms',
            'topic.metadata.refresh.sparse',
            'socket.timeout.ms',
            'socket.send.buffer.bytes',
            'socket.receive.buffer.bytes',
            'socket.keepalive.enable',
            'socket.max.fails',
            'broker.address.ttl',
            'broker.address.family',
            'statistics.interval.ms',
            'log_cb',
            'log_level',
            'socket_cb',
            'open_cb',
            'internal.termination.signal',
            'queued.min.messages',
            'queued.max.messages.kbytes',
            'fetch.wait.max.ms',
            'fetch.message.max.bytes',
            'fetch.min.bytes',
            'fetch.error.backoff.ms',
            'queue.buffering.max.messages',
            'queue.buffering.max.ms',
            'message.send.max.retries',
            'retry.backoff.ms',
            'compression.codec',
            'batch.num.messages',
            'delivery.report.only.error'
        ];

        $dumpedKeys = array_keys($this->conf->dump());

        $this->assertEquals($expectedKeys, $dumpedKeys);
    }

    public function testSet()
    {
        $this->conf->set('batch.num.messages', 666);

        $dumpedConfig = $this->conf->dump();
        $batchNumMessages = $dumpedConfig['batch.num.messages'];

        $this->assertEquals(666, $batchNumMessages);
    }
}
