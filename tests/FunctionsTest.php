<?php

use PHPUnit\Framework\TestCase;

class FunctionsTest extends TestCase
{
    public function testErr2Str(): void
    {
        $this->assertTrue(function_exists('rd_kafka_err2str'));
    }

    public function testErrno2Err(): void
    {
        $this->assertTrue(function_exists('rd_kafka_errno2err'));
    }

    public function testErrno(): void
    {
        $this->assertTrue(function_exists('rd_kafka_errno'));
    }

    public function testOffsetTail(): void
    {
        $this->assertTrue(function_exists('rd_kafka_offset_tail'));
    }
}
