<?php
namespace RdKafka\Metadata;

final class Partition
{
    /**
     * @return int
     */
    public function getId() {}

    /**
     * Returns the partition error reported by broker.
     * @return int
     */
    public function getErr() {}

    /**
     * @return int
     */
    public function getLeader() {}

    /**
     * Returns a RdKafka\Metadata\Collection of replica broker ids for this partition.
     * @return string[]
     */
    public function getReplicas() {}

    /**
     * Returns a RdKafka\Metadata\Collection of In-Sync-Replica broker ids for this partition.
     * @return string[]
     */
    public function getIsrs() {}
}