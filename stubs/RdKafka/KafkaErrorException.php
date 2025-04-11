<?php

namespace RdKafka;

class KafkaErrorException extends \Exception
{
    /**
     * @param string $message
     * @param int $code
     * @param string $errorString
     * @param boolean $isFatal
     * @param boolean $isRetriable
     * @param boolean $transactionRequiresAbort
     */
    public function __construct(
        string $message,
        int $code,
        string $errorString,
        bool $isFatal,
        bool $isRetriable,
        bool $transactionRequiresAbort
    ) {
        parent::__construct($message, $code);
    }

    /**
     * @returns string
     */
    public function getErrorString(): string
    {
    }

    /**
     * @returns boolean
     */
    public function isFatal(): bool
    {
    }

    /**
     * @returns boolean
     */
    public function isRetriable(): bool
    {
    }

    /**
     * @returns boolean
     */
    public function transactionRequiresAbort(): bool
    {
    }
}
