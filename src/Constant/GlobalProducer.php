<?php

namespace Kafka\Constant;

/**
 * @see https://github.com/edenhill/librdkafka/blob/master/CONFIGURATION.md
 */
final class GlobalProducer extends GlobalConfig
{
    /**
     * Maximum number of messages allowed on the producer queue.
     *
     * Type: integer
     * Range: 1 .. 10000000
     * Default: 100000
     */
    const QUEUE_BUFFERING_MAX_MESSAGES = 'queue.buffering.max.messages';

    /**
     * Maximum total message size sum allowed on the producer queue. This property has higher priority than queue.buffering.max.messages.
     *
     * Type: integer
     * Range: 1 .. 2097151
     * Default: 1048576
     */
    const QUEUE_BUFFERING_MAX_KBYTES = 'queue.buffering.max.kbytes';

    /**
     * Delay in milliseconds to wait for messages in the producer queue to accumulate before constructing message batches (MessageSets) to transmit to brokers. A higher value allows larger and more effective (less overhead, improved compression) batches of messages to accumulate at the expense of increased message delivery latency.
     *
     * Type: integer
     * Range: 0 .. 900000
     * Default: 0
     */
    const QUEUE_BUFFERING_MAX_MS = 'queue.buffering.max.ms';

    /**
     * Alias for `queue.buffering.max.ms`
     */
    const LINGER_MS = 'linger.ms';

    /**
     * How many times to retry sending a failing MessageSet. **Note:** retrying may cause reordering.
     *
     * Type: integer
     * Range: 0 .. 10000000
     * Default: 2
     */
    const MESSAGE_SEND_MAX_RETRIES = 'message.send.max.retries';

    /**
     * Alias for `message.send.max.retries`
     */
    const RETRIES = 'retries';

    /**
     * The backoff time in milliseconds before retrying a protocol request.
     *
     * Type: integer
     * Range: 1 .. 300000
     * Default: 100
     */
    const RETRY_BACKOFF_MS = 'retry.backoff.ms';

    /**
     * The threshold of outstanding not yet transmitted requests needed to backpressure the producer's message accumulator. A lower number yields larger and more effective batches.
     *
     * Type: integer
     * Range: 0 .. 1000000
     * Default: 10
     */
    const QUEUE_BUFFERING_BACKPRESSURE_THRESHOLD = 'queue.buffering.backpressure.threshold';

    /**
     * Compression codec to use for compressing message sets. This is the default value for all topics, may be overriden by the topic configuration property `compression.codec`.
     *
     * Type: enum value
     * Range: none, gzip, snappy, lz4
     * Default: none
     */
    const COMPRESSION_CODEC = 'compression.codec';

    /**
     * Alias for `compression.codec`
     */
    const COMPRESSION_TYPE = 'compression.type';

    /**
     * Maximum number of messages batched in one MessageSet. The total MessageSet size is also limited by message.max.bytes.
     *
     * Type: integer
     * Range: 1 .. 1000000
     * Default: 10000
     */
    const BATCH_NUM_MESSAGES = 'batch.num.messages';

    /**
     * Only provide delivery reports for failed messages.
     *
     * Type: boolean
     * Range: true, false
     * Default: false
     */
    const DELIVERY_REPORT_ONLY_ERROR = 'delivery.report.only.error';

    /**
     * Delivery report callback (set with rd_kafka_conf_set_dr_cb())
     *
     * Type: pointer
     */
    const DR_CB = 'dr_cb';

    /**
     * Delivery report callback (set with rd_kafka_conf_set_dr_msg_cb())
     *
     * Type: pointer
     */
    const DR_MSG_CB = 'dr_msg_cb';
}
