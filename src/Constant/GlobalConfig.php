<?php

namespace Kafka\Constant;

/**
 * @see https://github.com/edenhill/librdkafka/blob/master/CONFIGURATION.md
 */
abstract class GlobalConfig
{
    /**
     * Indicates the builtin features for this build of librdkafka. An application can either query this value or attempt to set it with its list of required features to check for library support.
     *
     * Type: CSV flags
     * Default: gzip, snappy, ssl, sasl, regex, lz4, sasl_gssapi, sasl_plain, sasl_scram, plugins
     */
    const BUILTIN_FEATURES = 'builtin.features';

    /**
     * Client identifier.
     *
     * Type: string
     * Default: rdkafka
     */
    const CLIENT_ID = 'client.id';

    /**
     * Initial list of brokers as a CSV list of broker host or host:port. The application may also use `rd_kafka_brokers_add()` to add brokers during runtime.
     *
     * Type: string
     */
    const METADATA_BROKER_LIST = 'metadata.broker.list';

    /**
     * Alias for `metadata.broker.list`
     */
    const BOOTSTRAP_SERVERS = 'bootstrap.servers';

    /**
     * Maximum Kafka protocol request message size.
     *
     * Type: integer
     * Range: 1000 .. 1000000000
     * Default: 1000000
     */
    const MESSAGE_MAX_BYTES = 'message.max.bytes';

    /**
     * Maximum size for message to be copied to buffer. Messages larger than this will be passed by reference (zero-copy) at the expense of larger iovecs.
     *
     * Type: integer
     * Range: 0 .. 1000000000
     * Default: 65535
     */
    const MESSAGE_COPY_MAX_BYTES = 'message.copy.max.bytes';

    /**
     * Maximum Kafka protocol response message size. This serves as a safety precaution to avoid memory exhaustion in case of protocol hickups. This value is automatically adjusted upwards to be at least `fetch.max.bytes` + 512 to allow for protocol overhead.
     *
     * Type: integer
     * Range: 1000 .. 2147483647
     * Default: 100000000
     */
    const RECEIVE_MESSAGE_MAX_BYTES = 'receive.message.max.bytes';

    /**
     * Maximum number of in-flight requests per broker connection. This is a generic property applied to all broker communication, however it is primarily relevant to produce requests. In particular, note that other mechanisms limit the number of outstanding consumer fetch request per broker to one.
     *
     * Type: integer
     * Range: 1 .. 1000000
     * Default: 1000000
     */
    const MAX_IN_FLIGHT_REQUESTS_PER_CONNECTION = 'max.in.flight.requests.per.connection';

    /**
     * Alias for `max.in.flight.requests.per.connection`
     */
    const MAX_IN_FLIGHT = 'max.in.flight';

    /**
     * Non-topic request timeout in milliseconds. This is for metadata requests, etc.
     *
     * Type: integer
     * Range: 10 .. 900000
     * Default: 60000
     */
    const METADATA_REQUEST_TIMEOUT_MS = 'metadata.request.timeout.ms';

    /**
     * Topic metadata refresh interval in milliseconds. The metadata is automatically refreshed on error and connect. Use -1 to disable the intervalled refresh.
     *
     * Type: integer
     * Range: -1 .. 3600000
     * Default: 300000
     */
    const TOPIC_METADATA_REFRESH_INTERVAL_MS = 'topic.metadata.refresh.interval.ms';

    /**
     * Metadata cache max age. Defaults to topic.metadata.refresh.interval.ms * 3
     *
     * Type: integer
     * Range: 1 .. 86400000
     * Default: -1
     */
    const METADATA_MAX_AGE_MS = 'metadata.max.age.ms';

    /**
     * When a topic loses its leader a new metadata request will be enqueued with this initial interval, exponentially increasing until the topic metadata has been refreshed. This is used to recover quickly from transitioning leader brokers.
     *
     * Type: integer
     * Range: 1 .. 60000
     * Default: 250
     */
    const TOPIC_METADATA_REFRESH_FAST_INTERVAL_MS = 'topic.metadata.refresh.fast.interval.ms';

    /**
     * *Deprecated: No longer used.*
     *
     * Type: integer
     * Range: 0 .. 1000
     * Default: 10
     */
    const TOPIC_METADATA_REFRESH_FAST_CNT = 'topic.metadata.refresh.fast.cnt';

    /**
     * Sparse metadata requests (consumes less network bandwidth)
     *
     * Type: boolean
     * Range: true, false
     * Default: true
     */
    const TOPIC_METADATA_REFRESH_SPARSE = 'topic.metadata.refresh.sparse';

    /**
     * Topic blacklist, a comma-separated list of regular expressions for matching topic names that should be ignored in broker metadata information as if the topics did not exist.
     *
     * Type: pattern list
     */
    const TOPIC_BLACKLIST = 'topic.blacklist';

    /**
     * A comma-separated list of debug contexts to enable. Detailed Producer debugging: broker,topic,msg. Consumer: consumer,cgrp,topic,fetch
     *
     * Type: CSV flags
     * Range: generic, broker, topic, metadata, feature, queue, msg, protocol, cgrp, security, fetch, interceptor, plugin, consumer, admin, all
     */
    const DEBUG = 'debug';

    /**
     * Default timeout for network requests. Producer: ProduceRequests will use the lesser value of `socket.timeout.ms` and remaining `message.timeout.ms` for the first message in the batch. Consumer: FetchRequests will use `fetch.wait.max.ms` + `socket.timeout.ms`. Admin: Admin requests will use `socket.timeout.ms` or explicitly set `rd_kafka_AdminOptions_set_operation_timeout()` value.
     *
     * Type: integer
     * Range: 10 .. 300000
     * Default: 60000
     */
    const SOCKET_TIMEOUT_MS = 'socket.timeout.ms';

    /**
     * Maximum time a broker socket operation may block. A lower value improves responsiveness at the expense of slightly higher CPU usage. **Deprecated**
     *
     * Type: integer
     * Range: 1 .. 60000
     * Default: 1000
     */
    const SOCKET_BLOCKING_MAX_MS = 'socket.blocking.max.ms';

    /**
     * Broker socket send buffer size. System default is used if 0.
     *
     * Type: integer
     * Range: 0 .. 100000000
     * Default: 0
     */
    const SOCKET_SEND_BUFFER_BYTES = 'socket.send.buffer.bytes';

    /**
     * Broker socket receive buffer size. System default is used if 0.
     *
     * Type: integer
     * Range: 0 .. 100000000
     * Default: 0
     */
    const SOCKET_RECEIVE_BUFFER_BYTES = 'socket.receive.buffer.bytes';

    /**
     * Enable TCP keep-alives (SO_KEEPALIVE) on broker sockets
     *
     * Type: boolean
     * Range: true, false
     * Default: false
     */
    const SOCKET_KEEPALIVE_ENABLE = 'socket.keepalive.enable';

    /**
     * Disable the Nagle algorithm (TCP_NODELAY) on broker sockets.
     *
     * Type: boolean
     * Range: true, false
     * Default: false
     */
    const SOCKET_NAGLE_DISABLE = 'socket.nagle.disable';

    /**
     * Disconnect from broker when this number of send failures (e.g., timed out requests) is reached. Disable with 0. NOTE: The connection is automatically re-established.
     *
     * Type: integer
     * Range: 0 .. 1000000
     * Default: 1
     */
    const SOCKET_MAX_FAILS = 'socket.max.fails';

    /**
     * How long to cache the broker address resolving results (milliseconds).
     *
     * Type: integer
     * Range: 0 .. 86400000
     * Default: 1000
     */
    const BROKER_ADDRESS_TTL = 'broker.address.ttl';

    /**
     * Allowed broker IP address families: any, v4, v6
     *
     * Type: enum value
     * Range: any, v4, v6
     * Default: any
     */
    const BROKER_ADDRESS_FAMILY = 'broker.address.family';

    /**
     * Throttle broker reconnection attempts by this value +-50%.
     *
     * Type: integer
     * Range: 0 .. 3600000
     * Default: 500
     */
    const RECONNECT_BACKOFF_JITTER_MS = 'reconnect.backoff.jitter.ms';

    /**
     * Librdkafka statistics emit interval. The application also needs to register a stats callback using `rd_kafka_conf_set_stats_cb()`. The granularity is 1000ms. A value of 0 disables statistics.
     *
     * Type: integer
     * Range: 0 .. 86400000
     * Default: 0
     */
    const STATISTICS_INTERVAL_MS = 'statistics.interval.ms';

    /**
     * See `rd_kafka_conf_set_events()`
     *
     * Type: integer
     * Range: 0 .. 2147483647
     * Default: 0
     */
    const ENABLED_EVENTS = 'enabled_events';

    /**
     * Error callback (set with rd_kafka_conf_set_error_cb())
     *
     * Type: pointer
     */
    const ERROR_CB = 'error_cb';

    /**
     * Throttle callback (set with rd_kafka_conf_set_throttle_cb())
     *
     * Type: pointer
     */
    const THROTTLE_CB = 'throttle_cb';

    /**
     * Statistics callback (set with rd_kafka_conf_set_stats_cb())
     *
     * Type: pointer
     */
    const STATS_CB = 'stats_cb';

    /**
     * Log callback (set with rd_kafka_conf_set_log_cb())
     *
     * Type: pointer
     */
    const LOG_CB = 'log_cb';

    /**
     * Logging level (syslog(3) levels)
     *
     * Type: integer
     * Range: 0 .. 7
     * Default: 6
     */
    const LOG_LEVEL = 'log_level';

    /**
     * Disable spontaneous log_cb from internal librdkafka threads, instead enqueue log messages on queue set with `rd_kafka_set_log_queue()` and serve log callbacks or events through the standard poll APIs. **NOTE**: Log messages will linger in a temporary queue until the log queue has been set.
     *
     * Type: boolean
     * Range: true, false
     * Default: false
     */
    const LOG_QUEUE = 'log.queue';

    /**
     * Print internal thread name in log messages (useful for debugging librdkafka internals)
     *
     * Type: boolean
     * Range: true, false
     * Default: true
     */
    const LOG_THREAD_NAME = 'log.thread.name';

    /**
     * Log broker disconnects. It might be useful to turn this off when interacting with 0.9 brokers with an aggressive `connection.max.idle.ms` value.
     *
     * Type: boolean
     * Range: true, false
     * Default: true
     */
    const LOG_CONNECTION_CLOSE = 'log.connection.close';

    /**
     * Background queue event callback (set with rd_kafka_conf_set_background_event_cb())
     *
     * Type: pointer
     */
    const BACKGROUND_EVENT_CB = 'background_event_cb';

    /**
     * Socket creation callback to provide race-free CLOEXEC
     *
     * Type: pointer
     */
    const SOCKET_CB = 'socket_cb';

    /**
     * Socket connect callback
     *
     * Type: pointer
     */
    const CONNECT_CB = 'connect_cb';

    /**
     * Socket close callback
     *
     * Type: pointer
     */
    const CLOSESOCKET_CB = 'closesocket_cb';

    /**
     * File open callback to provide race-free CLOEXEC
     *
     * Type: pointer
     */
    const OPEN_CB = 'open_cb';

    /**
     * Application opaque (set with rd_kafka_conf_set_opaque())
     *
     * Type: pointer
     */
    const OPAQUE = 'opaque';

    /**
     * Default topic configuration for automatically subscribed topics
     *
     * Type: pointer
     */
    const DEFAULT_TOPIC_CONF = 'default_topic_conf';

    /**
     * Signal that librdkafka will use to quickly terminate on rd_kafka_destroy(). If this signal is not set then there will be a delay before rd_kafka_wait_destroyed() returns true as internal threads are timing out their system calls. If this signal is set however the delay will be minimal. The application should mask this signal as an internal signal handler is installed.
     *
     * Type: integer
     * Range: 0 .. 128
     * Default: 0
     */
    const INTERNAL_TERMINATION_SIGNAL = 'internal.termination.signal';

    /**
     * Request broker's supported API versions to adjust functionality to available protocol features. If set to false, or the ApiVersionRequest fails, the fallback version `broker.version.fallback` will be used. **NOTE**: Depends on broker version >=0.10.0. If the request is not supported by (an older) broker the `broker.version.fallback` fallback is used.
     *
     * Type: boolean
     * Range: true, false
     * Default: true
     */
    const API_VERSION_REQUEST = 'api.version.request';

    /**
     * Timeout for broker API version requests.
     *
     * Type: integer
     * Range: 1 .. 300000
     * Default: 10000
     */
    const API_VERSION_REQUEST_TIMEOUT_MS = 'api.version.request.timeout.ms';

    /**
     * Dictates how long the `broker.version.fallback` fallback is used in the case the ApiVersionRequest fails. **NOTE**: The ApiVersionRequest is only issued when a new connection to the broker is made (such as after an upgrade).
     *
     * Type: integer
     * Range: 0 .. 604800000
     * Default: 1200000
     */
    const API_VERSION_FALLBACK_MS = 'api.version.fallback.ms';

    /**
     * Older broker versions (<0.10.0) provides no way for a client to query for supported protocol features (ApiVersionRequest, see `api.version.request`) making it impossible for the client to know what features it may use. As a workaround a user may set this property to the expected broker version and the client will automatically adjust its feature set accordingly if the ApiVersionRequest fails (or is disabled). The fallback broker version will be used for `api.version.fallback.ms`. Valid values are: 0.9.0, 0.8.2, 0.8.1, 0.8.0. Any other value, such as 0.10.2.1, enables ApiVersionRequests.
     *
     * Type: string
     * Default: 0.9.0
     */
    const BROKER_VERSION_FALLBACK = 'broker.version.fallback';

    /**
     * Protocol used to communicate with brokers.
     *
     * Type: enum value
     * Range: plaintext, ssl, sasl_plaintext, sasl_ssl
     * Default: plaintext
     */
    const SECURITY_PROTOCOL = 'security.protocol';

    /**
     * A cipher suite is a named combination of authentication, encryption, MAC and key exchange algorithm used to negotiate the security settings for a network connection using TLS or SSL network protocol. See manual page for `ciphers(1)` and `SSL_CTX_set_cipher_list(3).
     *
     * Type: string
     */
    const SSL_CIPHER_SUITES = 'ssl.cipher.suites';

    /**
     * The supported-curves extension in the TLS ClientHello message specifies the curves (standard/named, or 'explicit' GF(2^k) or GF(p)) the client is willing to have the server use. See manual page for `SSL_CTX_set1_curves_list(3)`. OpenSSL >= 1.0.2 required.
     *
     * Type: string
     */
    const SSL_CURVES_LIST = 'ssl.curves.list';

    /**
     * The client uses the TLS ClientHello signature_algorithms extension to indicate to the server which signature/hash algorithm pairs may be used in digital signatures. See manual page for `SSL_CTX_set1_sigalgs_list(3)`. OpenSSL >= 1.0.2 required.
     *
     * Type: string
     */
    const SSL_SIGALGS_LIST = 'ssl.sigalgs.list';

    /**
     * Path to client's private key (PEM) used for authentication.
     *
     * Type: string
     */
    const SSL_KEY_LOCATION = 'ssl.key.location';

    /**
     * Private key passphrase
     *
     * Type: string
     */
    const SSL_KEY_PASSWORD = 'ssl.key.password';

    /**
     * Path to client's public key (PEM) used for authentication.
     *
     * Type: string
     */
    const SSL_CERTIFICATE_LOCATION = 'ssl.certificate.location';

    /**
     * File or directory path to CA certificate(s) for verifying the broker's key.
     *
     * Type: string
     */
    const SSL_CA_LOCATION = 'ssl.ca.location';

    /**
     * Path to CRL for verifying broker's certificate validity.
     *
     * Type: string
     */
    const SSL_CRL_LOCATION = 'ssl.crl.location';

    /**
     * Path to client's keystore (PKCS#12) used for authentication.
     *
     * Type: string
     */
    const SSL_KEYSTORE_LOCATION = 'ssl.keystore.location';

    /**
     * Client's keystore (PKCS#12) password.
     *
     * Type: string
     */
    const SSL_KEYSTORE_PASSWORD = 'ssl.keystore.password';

    /**
     * SASL mechanism to use for authentication. Supported: GSSAPI, PLAIN, SCRAM-SHA-256, SCRAM-SHA-512. **NOTE**: Despite the name only one mechanism must be configured.
     *
     * Type: string
     * Default: GSSAPI
     */
    const SASL_MECHANISMS = 'sasl.mechanisms';

    /**
     * Alias for `sasl.mechanisms`
     */
    const SASL_MECHANISM = 'sasl.mechanism';

    /**
     * Default: kafka
     */
    const SASL_KERBEROS_SERVICE_NAME = 'sasl.kerberos.service.name';

    /**
     * This client's Kerberos principal name. (Not supported on Windows, will use the logon user's principal).
     *
     * Type: string
     * Default: kafkaclient
     */
    const SASL_KERBEROS_PRINCIPAL = 'sasl.kerberos.principal';

    /**
     * Full kerberos kinit command string, %{config.prop.name} is replaced by corresponding config object value, %{broker.name} returns the broker's hostname.
     *
     * Type: string
     * Default: kinit -S "%{sasl.kerberos.service.name}/%{broker.name}" -k -t "%{sasl.kerberos.keytab}" %{sasl.kerberos.principal}
     */
    const SASL_KERBEROS_KINIT_CMD = 'sasl.kerberos.kinit.cmd';

    /**
     * Path to Kerberos keytab file. Uses system default if not set.**NOTE**: This is not automatically used but must be added to the template in sasl.kerberos.kinit.cmd as ` ... -t %{sasl.kerberos.keytab}`.
     *
     * Type: string
     */
    const SASL_KERBEROS_KEYTAB = 'sasl.kerberos.keytab';

    /**
     * Minimum time in milliseconds between key refresh attempts.
     *
     * Type: integer
     * Range: 1 .. 86400000
     * Default: 60000
     */
    const SASL_KERBEROS_MIN_TIME_BEFORE_RELOGIN = 'sasl.kerberos.min.time.before.relogin';

    /**
     * SASL username for use with the PLAIN and SASL-SCRAM-.. mechanisms
     *
     * Type: string
     */
    const SASL_USERNAME = 'sasl.username';

    /**
     * SASL password for use with the PLAIN and SASL-SCRAM-.. mechanism
     *
     * Type: string
     */
    const SASL_PASSWORD = 'sasl.password';

    /**
     * List of plugin libaries to load (; separated). The library search path is platform dependent (see dlopen(3) for Unix and LoadLibrary() for Windows). If no filename extension is specified the platform-specific extension (such as .dll or .so) will be appended automatically.
     *
     * Type: string
     */
    const PLUGIN_LIBRARY_PATHS = 'plugin.library.paths';

    /**
     * Interceptors added through rd_kafka_conf_interceptor_add_..() and any configuration handled by interceptors.
     *
     * Type:
     */
    const INTERCEPTORS = 'interceptors';

    /**
     * Client group id string. All clients sharing the same group.id belong to the same group.
     *
     * Type: string
     */
    const GROUP_ID = 'group.id';

    /**
     * Name of partition assignment strategy to use when elected group leader assigns partitions to group members.
     *
     * Type: string
     * Default: range,roundrobin
     */
    const PARTITION_ASSIGNMENT_STRATEGY = 'partition.assignment.strategy';

    /**
     * Client group session and failure detection timeout.
     *
     * Type: integer
     * Range: 1 .. 3600000
     * Default: 30000
     */
    const SESSION_TIMEOUT_MS = 'session.timeout.ms';

    /**
     * Group session keepalive heartbeat interval.
     *
     * Type: integer
     * Range: 1 .. 3600000
     * Default: 1000
     */
    const HEARTBEAT_INTERVAL_MS = 'heartbeat.interval.ms';

    /**
     * Group protocol type
     *
     * Type: string
     * Default: consumer
     */
    const GROUP_PROTOCOL_TYPE = 'group.protocol.type';

    /**
     * How often to query for the current client group coordinator. If the currently assigned coordinator is down the configured query interval will be divided by ten to more quickly recover in case of coordinator reassignment.
     *
     * Type: integer
     * Range: 1 .. 3600000
     * Default: 600000
     */
    const COORDINATOR_QUERY_INTERVAL_MS = 'coordinator.query.interval.ms';

    final protected function __construct()
    {
    }
}
