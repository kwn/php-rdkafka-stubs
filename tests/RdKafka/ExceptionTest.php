<?php

namespace RdKafka;

use PHPUnit\Framework\TestCase;

class ExceptionTest extends TestCase
{
    public function testRdKafkaExceptionIsThrowable(): void
    {
        $this->expectException(Exception::class);

        throw new Exception();
    }
}
