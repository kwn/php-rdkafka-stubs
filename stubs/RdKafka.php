<?php
class RdKafka
{
    public function __construct(\RdKafka\Conf $conf = null) {}

    /**
     * Adds a one or more brokers to the instance's list of initial brokers. Additional brokers will be discovered
     * automatically as soon as rdkafka connects to a broker by querying the broker metadata.
     *
     * If a broker name resolves to multiple addresses (and possibly address families) all will be used
     * for connection attempts in round-robin fashion.
     *
     * $brokerList is a ,-separated list of brokers in the format: <host1>[:<port1>],<host2>[:<port2>]...
     *
     * @param string $brokerList
     */
    public function addBrokers($brokerList) {}

    /**
     * Specifies the maximum logging level produced by internal kafka logging and debugging.
     * If the debug configuration property is set the level is automatically adjusted to LOG_DEBUG.
     * @param int $level
     */
    public function setLogLevel($level) {}

    /**
     * Request Metadata from broker.
     *
     * @param bool $all_topics if true: request info about all topics in cluster, if false: only request info about locally known topics.
     * @param \RdKafka\Topic|null $only_topic only request info about this topic
     * @param int $timeout_ms maximum response time before failing
     * @return \RdKafka\Metadata
     */
    public function metadata($all_topics, \RdKafka\Topic $only_topic = null, $timeout_ms) {}
}