<?php

namespace Kafka\Constant;

/**
 * @see https://github.com/edenhill/librdkafka/blob/master/CONFIGURATION.md
 */
final class TopicProducer extends Topic
{
    /**
     * This field indicates how many acknowledgements the leader broker must receive from ISR brokers before responding to the request: *0*=Broker does not send any response/ack to client, *1*=Only the leader broker will need to ack the message, *-1* or *all*=broker will block until message is committed by all in sync replicas (ISRs) or broker's `min.insync.replicas` setting before sending response.
     *
     * Type: integer
     * Range: -1 .. 1000
     * Default: 1
     */
    const REQUEST_REQUIRED_ACKS = 'request.required.acks';

    /**
     * Alias for `request.required.acks`
     */
    const ACKS = 'acks';

    /**
     * The ack timeout of the producer request in milliseconds. This value is only enforced by the broker and relies on `request.required.acks` being != 0.
     *
     * Type: integer
     * Range: 1 .. 900000
     * Default: 5000
     */
    const REQUEST_TIMEOUT_MS = 'request.timeout.ms';

    /**
     * Local message timeout. This value is only enforced locally and limits the time a produced message waits for successful delivery. A time of 0 is infinite. This is the maximum time librdkafka may use to deliver a message (including retries). Delivery error occurs when either the retry count or the message timeout are exceeded.
     *
     * Type: integer
     * Range: 0 .. 900000
     * Default: 300000
     */
    const MESSAGE_TIMEOUT_MS = 'message.timeout.ms';

    /**
     * Producer queuing strategy. FIFO preserves produce ordering, while LIFO prioritizes new messages. WARNING: `lifo` is experimental and subject to change or removal.
     *
     * Type: enum value
     * Range: fifo, lifo
     * Default: fifo
     */
    const QUEUING_STRATEGY = 'queuing.strategy';

    /**
     * Report offset of produced message back to application. The application must be use the `dr_msg_cb` to retrieve the offset from `rd_kafka_message_t.offset`.
     *
     * Type: boolean
     * Range: true, false
     * Default: false
     */
    const PRODUCE_OFFSET_REPORT = 'produce.offset.report';

    /**
     * Partitioner: `random` - random distribution, `consistent` - CRC32 hash of key (Empty and NULL keys are mapped to single partition), `consistent_random` - CRC32 hash of key (Empty and NULL keys are randomly partitioned), `murmur2` - Java Producer compatible Murmur2 hash of key (NULL keys are mapped to single partition), `murmur2_random` - Java Producer compatible Murmur2 hash of key (NULL keys are randomly partitioned. This is functionally equivalent to the default partitioner in the Java Producer.).
     *
     * Type: string
     * Default: consistent_random
     */
    const PARTITIONER = 'partitioner';

    /**
     * Custom partitioner callback (set with rd_kafka_topic_conf_set_partitioner_cb())
     *
     * Type: pointer
     */
    const PARTITIONER_CB = 'partitioner_cb';

    /**
     * Message queue ordering comparator (set with rd_kafka_topic_conf_set_msg_order_cmp()). Also see `queuing.strategy`.
     *
     * Type: pointer
     */
    const MSG_ORDER_CMP = 'msg_order_cmp';

    /**
     * Compression codec to use for compressing message sets. inherit = inherit global compression.codec configuration.
     *
     * Type: enum value
     * Range: none, gzip, snappy, lz4, inherit
     * Default: inherit
     */
    const COMPRESSION_CODEC = 'compression.codec';

    /**
     * Alias for `compression.codec`
     */
    const COMPRESSION_TYPE = 'compression.type';
}
