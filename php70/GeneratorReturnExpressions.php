<?php
/**
 * Copyright © Vaimo Group. All rights reserved.
 * See LICENSE.txt for license details.
 */

/**
 * Example #1
 * loop range without generator
 */
function getRange($max)
{
    $array = [];
    for ($i = 1; $i < $max; $i++) {
        $array[] = $i;
    }

    return $array;
}

$ranges = getRange(100);
foreach ($ranges as $range) {
    echo "Dataset {$range}" . PHP_EOL;
}

/**
 * Example #2
 * loop range without generator with MAX INT
 */
function getRangeMaxInt($max)
{
    $array = [];
    for ($i = 1; $i < $max; $i++) {
        $array[] = $i;
    }

    return $array;
}

$ranges = getRangeMaxInt(PHP_INT_MAX);
foreach ($ranges as $range) {
    echo "Dataset {$range}" . PHP_EOL;
}

/**
 * Example #3
 * Loop range with generator
 */
function getRangeGenerator($max)
{
    for ($i = 1; $i < $max; $i++) {
        yield $i;
    }
}

/** @var  Generator $ranges */
$ranges = getRangeGenerator(PHP_INT_MAX);
foreach ($ranges as $range) {
    echo "Dataset {$range}" . PHP_EOL;;
}

//M2 usage: vendor/magento/framework/Module/ModuleList/Loader.php:120

/**
 * Example #4
 * Generator with return statement
 */
$gen = (function () {
    yield 1;
    yield 2;

    return 3;
})();

foreach ($gen as $val) {
    echo $val . PHP_EOL;
}
/** @var  Generator $gen */
echo $gen->getReturn() . PHP_EOL;
