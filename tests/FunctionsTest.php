<?php

class FunctionsTest extends \PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        if (!extension_loaded('rdkafka')) {
            throw new \PHPUnit_Runner_Exception('Please install or enable rdkafka extension');
        }
    }

    public function testErr2Str()
    {
        $this->assertTrue(function_exists('rd_kafka_err2str'));
    }

    public function testErrno2Err()
    {
        $this->assertTrue(function_exists('rd_kafka_err2str'));
    }

    public function testErrno()
    {
        $this->assertTrue(function_exists('rd_kafka_errno'));
    }

    public function testOffsetTail()
    {
        $this->assertTrue(function_exists('rd_kafka_offset_tail'));
    }
}
