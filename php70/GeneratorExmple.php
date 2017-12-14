<?php
/**
 * Copyright © Vaimo Group. All rights reserved.
 * See LICENSE.txt for license details.
 */

/**
 * Example #1 Read file
 */
function readTheFile($path)
{
    $lines = [];
    $path = realpath(dirname(__FILE__)) . '/' . $path;
    $handle = fopen($path, "r");

    while (!feof($handle)) {
        $lines[] = trim(fgets($handle));
    }

    fclose($handle);

    return $lines;
}

$lines = readTheFile("dummy/text.txt");
echo "Memory pick usage: " . formatBytes(memory_get_peak_usage()) . PHP_EOL;


/**
 * Example #2 Read file with generators
 */
function readTheFileGenerator($path)
{
    $path = realpath(dirname(__FILE__)) . '/' . $path;
    $handle = fopen($path, "r");
    while (!feof($handle)) {
        yield trim(fgets($handle));
    }

    fclose($handle);
}

$lines = readTheFileGenerator("dummy/text.txt");
echo "Memory pick usage: " . formatBytes(memory_get_peak_usage()) . PHP_EOL;


function formatBytes($bytes, $precision = 2)
{
    $units = array("b", "kb", "mb", "gb", "tb");

    $bytes = max($bytes, 0);
    $pow = floor(($bytes ? log($bytes) : 0) / log(1024));
    $pow = min($pow, count($units) - 1);

    $bytes /= (1 << (10 * $pow));

    return round($bytes, $precision) . " " . $units[$pow];
}
