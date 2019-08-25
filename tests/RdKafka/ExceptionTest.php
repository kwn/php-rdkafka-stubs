<?php

namespace RdKafka;

use PHPUnit\Framework\TestCase;

class ExceptionTest extends TestCase
{
    /**
     * @expectedException \RdKafka\Exception
     */
    public function testRdKafkaExceptionIsThrowable()
    {
        throw new Exception();
    }
}
