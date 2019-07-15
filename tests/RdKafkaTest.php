<?php

use PHPUnit\Framework\TestCase;

class RdKafkaTest extends TestCase
{
    public function testRdKafkaClassIsAbstract(): void
    {
        $reflector = new ReflectionClass(\RdKafka::class);

        $this->assertTrue($reflector->isAbstract());
    }
}
