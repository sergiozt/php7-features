<?php
/**
 * Copyright © Vaimo Group. All rights reserved.
 * See LICENSE.txt for license details.
 */

$randomStr = random_bytes($length = 16);

$randomInt = random_int($min = 0, $max = PHP_INT_MAX);

echo $randomStr . PHP_EOL;
echo $randomInt . PHP_EOL;

//Mac OS and Linux: head -30 /dev/urandom