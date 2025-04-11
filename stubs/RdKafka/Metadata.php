<?php

namespace RdKafka;

use RdKafka\Metadata\Broker;
use RdKafka\Metadata\Collection;
use RdKafka\Metadata\Topic;

class Metadata
{
    /**
     * @return Collection|Broker[]
     */
    public function getBrokers(): Collection
    {
    }

    /**
     * @return Collection|Topic[]
     */
    public function getTopics(): Collection
    {
    }

    /**
     * @return int
     */
    public function getOrigBrokerId(): int
    {
    }

    /**
     * @return string
     */
    public function getOrigBrokerName(): string
    {
    }
}
