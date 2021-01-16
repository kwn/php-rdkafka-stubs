<?php

namespace Kafka\Constant;

/**
 * @see https://github.com/edenhill/librdkafka/blob/master/CONFIGURATION.md
 */
final class TopicConsumer extends Topic
{
    /**
     * If true, periodically commit offset of the last message handed to the application. This committed offset will be used when the process restarts to pick up where it left off. If false, the application will have to call `rd_kafka_offset_store()` to store an offset (optional). **NOTE:** This property should only be used with the simple legacy consumer, when using the high-level KafkaConsumer the global `enable.auto.commit` property must be used instead. **NOTE:** There is currently no zookeeper integration, offsets will be written to broker or local file according to offset.store.method.
     *
     * Type: boolean
     * Range: true, false
     * Default: true
     */
    const AUTO_COMMIT_ENABLE = 'auto.commit.enable';

    /**
     * Alias for `auto.commit.enable`
     */
    const ENABLE_AUTO_COMMIT = 'enable.auto.commit';

    /**
     * The frequency in milliseconds that the consumer offsets are committed (written) to offset storage. This setting is used by the low-level legacy consumer.
     *
     * Type: integer
     * Range: 10 .. 86400000
     * Default: 60000
     */
    const AUTO_COMMIT_INTERVAL_MS = 'auto.commit.interval.ms';

    /**
     * Action to take when there is no initial offset in offset store or the desired offset is out of range: 'smallest','earliest' - automatically reset the offset to the smallest offset, 'largest','latest' - automatically reset the offset to the largest offset, 'error' - trigger an error which is retrieved by consuming messages and checking 'message->err'.
     *
     * Type: enum value
     * Range: smallest, earliest, beginning, largest, latest, end, error
     * Default: largest
     */
    const AUTO_OFFSET_RESET = 'auto.offset.reset';

    /**
     * Path to local file for storing offsets. If the path is a directory a filename will be automatically generated in that directory based on the topic and partition.
     *
     * Type: string
     * Default: .
     */
    const OFFSET_STORE_PATH = 'offset.store.path';

    /**
     * Fsync() interval for the offset file, in milliseconds. Use -1 to disable syncing, and 0 for immediate sync after each write.
     *
     * Type: integer
     * Range: -1 .. 86400000
     * Default: -1
     */
    const OFFSET_STORE_SYNC_INTERVAL_MS = 'offset.store.sync.interval.ms';

    /**
     * Offset commit store method: 'file' - local file store (offset.store.path, et.al), 'broker' - broker commit store (requires "group.id" to be configured and Apache Kafka 0.8.2 or later on the broker.).
     *
     * Type: enum value
     * Range: file, broker
     * Default: broker
     */
    const OFFSET_STORE_METHOD = 'offset.store.method';

    /**
     * Maximum number of messages to dispatch in one `rd_kafka_consume_callback*()` call (0 = unlimited)
     *
     * Type: integer
     * Range: 0 .. 1000000
     * Default: 0
     */
    const CONSUME_CALLBACK_MAX_MESSAGES = 'consume.callback.max.messages';
}
