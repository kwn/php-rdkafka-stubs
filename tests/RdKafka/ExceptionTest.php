<?php

namespace RdKafka;

use PHPUnit\Framework\TestCase;

class ExceptionTest extends TestCase
{
    public function testRdKafkaExceptionIsThrowable()
    {
        self::expectException(Exception::class);
        throw new Exception();
    }
}
