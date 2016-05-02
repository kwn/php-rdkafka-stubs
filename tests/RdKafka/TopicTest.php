<?php

namespace RdKafka;

class TopicTest extends \PHPUnit_Framework_TestCase
{
    public function testClassIsAbstract()
    {
        $reflector = new \ReflectionClass(Topic::class);

        $this->assertTrue($reflector->isAbstract());
    }
}
