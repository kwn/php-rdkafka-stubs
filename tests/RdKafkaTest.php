<?php

class RdKafkaTest extends \PHPUnit_Framework_TestCase
{
    public function testRdKafkaClassIsAbstract()
    {
        $reflector = new ReflectionClass(\RdKafka::class);

        $this->assertTrue($reflector->isAbstract());
    }
}
