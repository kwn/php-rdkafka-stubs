<?php

namespace Kafka\Constant;

/**
 * @see https://github.com/edenhill/librdkafka/blob/master/CONFIGURATION.md
 */
final class GlobalConsumer extends GlobalConfig
{
    /**
     * Automatically and periodically commit offsets in the background.
     * Note: setting this to false does not prevent the consumer from fetching previously committed start offsets.
     * To circumvent this behaviour set specific start offsets per partition in the call to assign().
     *
     * Type: boolean
     * Range: true, false
     * Default: true
     */
    const ENABLE_AUTO_COMMIT = 'enable.auto.commit';

    /**
     * The frequency in milliseconds that the consumer offsets are committed (written) to offset storage. (0 = disable). This setting is used by the high-level consumer.
     *
     * Type: integer
     * Range: 0 .. 86400000
     * Default: 5000
     */
    const AUTO_COMMIT_INTERVAL_MS = 'auto.commit.interval.ms';

    /**
     * Automatically store offset of last message provided to application.
     *
     * Type: boolean
     * Range: true, false
     * Default: true
     */
    const ENABLE_AUTO_OFFSET_STORE = 'enable.auto.offset.store';

    /**
     * Minimum number of messages per topic+partition librdkafka tries to maintain in the local consumer queue.
     *
     * Type: integer
     * Range: 1 .. 10000000
     * Default: 100000
     */
    const QUEUED_MIN_MESSAGES = 'queued.min.messages';

    /**
     * Maximum number of kilobytes per topic+partition in the local consumer queue. This value may be overshot by fetch.message.max.bytes. This property has higher priority than queued.min.messages.
     *
     * Type: integer
     * Range: 1 .. 2097151
     * Default: 1048576
     */
    const QUEUED_MAX_MESSAGES_KBYTES = 'queued.max.messages.kbytes';

    /**
     * Maximum time the broker may wait to fill the response with fetch.min.bytes.
     *
     * Type: integer
     * Range: 0 .. 300000
     * Default: 100
     */
    const FETCH_WAIT_MAX_MS = 'fetch.wait.max.ms';

    /**
     * Initial maximum number of bytes per topic+partition to request when fetching messages from the broker. If the client encounters a message larger than this value it will gradually try to increase it until the entire message can be fetched.
     *
     * Type: integer
     * Range: 1 .. 1000000000
     * Default: 1048576
     */
    const FETCH_MESSAGE_MAX_BYTES = 'fetch.message.max.bytes';

    /**
     * Alias for `fetch.message.max.bytes`
     */
    const MAX_PARTITION_FETCH_BYTES = 'max.partition.fetch.bytes';

    /**
     * Maximum amount of data the broker shall return for a Fetch request. Messages are fetched in batches by the consumer and if the first message batch in the first non-empty partition of the Fetch request is larger than this value, then the message batch will still be returned to ensure the consumer can make progress. The maximum message batch size accepted by the broker is defined via `message.max.bytes` (broker config) or `max.message.bytes` (broker topic config). `fetch.max.bytes` is automatically adjusted upwards to be at least `message.max.bytes` (consumer config).
     *
     * Type: integer
     * Range: 0 .. 2147483135
     * Default: 52428800
     */
    const FETCH_MAX_BYTES = 'fetch.max.bytes';

    /**
     * Minimum number of bytes the broker responds with. If fetch.wait.max.ms expires the accumulated data will be sent to the client regardless of this setting.
     *
     * Type: integer
     * Range: 1 .. 100000000
     * Default: 1
     */
    const FETCH_MIN_BYTES = 'fetch.min.bytes';

    /**
     * How long to postpone the next fetch request for a topic+partition in case of a fetch error.
     *
     * Type: integer
     * Range: 0 .. 300000
     * Default: 500
     */
    const FETCH_ERROR_BACKOFF_MS = 'fetch.error.backoff.ms';

    /**
     * Offset commit store method: 'file' - local file store (offset.store.path, et.al), 'broker' - broker commit store (requires Apache Kafka 0.8.2 or later on the broker).
     *
     * Type: enum value
     * Range: none, file, broker
     * Default: broker
     */
    const OFFSET_STORE_METHOD = 'offset.store.method';

    /**
     * Message consume callback (set with rd_kafka_conf_set_consume_cb())
     *
     * Type: pointer
     */
    const CONSUME_CB = 'consume_cb';

    /**
     * Called after consumer group has been rebalanced (set with rd_kafka_conf_set_rebalance_cb())
     *
     * Type: pointer
     */
    const REBALANCE_CB = 'rebalance_cb';

    /**
     * Offset commit result propagation callback. (set with rd_kafka_conf_set_offset_commit_cb())
     *
     * Type: pointer
     */
    const OFFSET_COMMIT_CB = 'offset_commit_cb';

    /**
     * Emit RD_KAFKA_RESP_ERR__PARTITION_EOF event whenever the consumer reaches the end of a partition.
     *
     * Type: boolean
     * Range: true, false
     * Default: true
     */
    const ENABLE_PARTITION_EOF = 'enable.partition.eof';

    /**
     * Verify CRC32 of consumed messages, ensuring no on-the-wire or on-disk corruption to the messages occurred. This check comes at slightly increased CPU usage.
     *
     * Type: boolean
     * Range: true, false
     * Default: false
     */
    const CHECK_CRCS = 'check.crcs';
}
