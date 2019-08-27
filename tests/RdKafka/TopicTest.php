<?php

namespace RdKafka;

use PHPUnit\Framework\TestCase;

class TopicTest extends TestCase
{
    public function testClassIsAbstract()
    {
        $reflector = new \ReflectionClass(Topic::class);

        $this->assertTrue($reflector->isAbstract());
    }
}
