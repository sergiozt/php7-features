<?php
/**
 * Copyright © Vaimo Group. All rights reserved.
 * See LICENSE.txt for license details.
 */

// Pre PHP 7.1 code
$str = '001234567890';
echo substr($str, -10, 4) . PHP_EOL;

// Echo count of 'is' occurrences starting counting from 3-d char
$text = 'This is a test';
echo substr_count($text, 'is', 3) . PHP_EOL; // 2

$text = 'This is a test';
echo substr_count($text, 'is', -10) . PHP_EOL; // PHP Warning:  substr_count(): Offset should be greater than or equal to 0

// PHP 7.1+ code
var_dump("abcdef"[-2]);
echo substr_count($text, 'is', -10) . PHP_EOL;
echo strpos("aabbcc", "b", -3) . PHP_EOL;