<?php

namespace RdKafka;

class ExceptionTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @expectedException \RdKafka\Exception
     */
    public function testRdKafkaExceptionIsThrowable()
    {
        throw new Exception();
    }
}
