<?php

use PHPUnit\Framework\TestCase;

class FunctionsTest extends TestCase
{
    public function testErr2Str()
    {
        $this->assertTrue(function_exists('rd_kafka_err2str'));
    }

    public function testErrno2Err()
    {
        $this->assertTrue(function_exists('rd_kafka_errno2err'));
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
