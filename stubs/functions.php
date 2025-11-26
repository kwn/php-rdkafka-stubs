<?php

/**
 * @param int $err Error code
 *
 * @return string Returns the error as a string.
 */
function rd_kafka_err2str(int $err): string
{
}

/**
 * @param int $errnox A system errno
 *
 * @deprecated
 *
 * @return int Returns a kafka error code as an integer.
 */
function rd_kafka_errno2err(int $errnox)
{
}

/**
 * @return int Returns the system errno as an integer.
 *
 * @deprecated
 */
function rd_kafka_errno(): int
{
}

/**
 * @param int $cnt
 *
 * @return int Returns the special offset as an integer.
 */
function rd_kafka_offset_tail(int $cnt): int
{
}
