<?php
/**
 * Copyright © Vaimo Group. All rights reserved.
 * See LICENSE.txt for license details.
 */

/**
 * Example #1
 * Generator delegation
 */
function testGenerator()
{
    yield 1;
    yield from new ArrayIterator([2, 3, 4]);
    yield 5;
}

$g = testGenerator();
foreach ($g as $yielded) {
    echo $yielded . PHP_EOL;
}
//Get array of interfaces: class_implements(g);

/**
 * Example #2
 * Generator delegation and use return
 */
function g1()
{
    yield 8;
    yield 2;

    return 3;
}

function g2()
{
    yield 4;
    $g1result = yield from g1();
    yield 1;

    return $g1result;
}

$generator = g2();
foreach ($generator as $yielded) {
    echo $yielded . PHP_EOL;
}
echo ($generator->getReturn());