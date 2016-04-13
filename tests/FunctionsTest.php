<?php

class FunctionsTest extends \PHPUnit_Framework_TestCase
{
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
