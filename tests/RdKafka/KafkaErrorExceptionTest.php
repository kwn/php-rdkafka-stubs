<?php

namespace RdKafka;

use PHPUnit\Framework\TestCase;

class KafkaErrorExceptionTest extends TestCase
{
    public function testRdKafkaExceptionIsThrowable()
    {
        self::expectException(KafkaErrorException::class);
        self::expectExceptionMessage('some message');
        self::expectExceptionCode(900);

        $e = new KafkaErrorException('some message', 900, 'detailed error', true, false, true);

        self::assertEquals('detailed error', $e->getErrorString());
        self::assertTrue($e->isFatal());
        self::assertFalse($e->isRetriable());
        self::assertTrue($e->transactionRequiresAbort());

        throw $e;
    }
}
