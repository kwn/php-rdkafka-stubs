<?php

var_dump(rd_kafka_err2str(1));
var_dump(rd_kafka_errno2err(255));
var_dump(rd_kafka_errno());
var_dump(rd_kafka_offset_tail(40));
