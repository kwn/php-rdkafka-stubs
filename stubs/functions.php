<?php

/**
 * Returns a human readable representation of a kafka error.
 *
 * @param int $err Error code
 *
 * @return string Returns the error as a string.
 */
function rd_kafka_err2str($err)
{
}

/**
 * Converts the system errno errnox to a kafka error code.
 *
 * @param int $errnox A system errno
 *
 * @return int Returns a kafka error code as an integer.
 */
function rd_kafka_errno2err($errnox)
{
}

/**
 * Returns the system errno
 *
 * @return int Returns the system errno as an integer.
 */
function rd_kafka_errno()
{
}

/**
 * Returns a special offset value that can be used to start consuming cnt messages before the tail of the topic.
 *
 * @param int $cnt
 *
 * @return int Returns the special offset as an integer.
 */
function rd_kafka_offset_tail($cnt)
{
}
