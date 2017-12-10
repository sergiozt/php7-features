<?php
/**
 * Copyright © Vaimo Group. All rights reserved.
 * See LICENSE.txt for license details.
 */

// Pre PHP 7.1 code
$var = [];
//check if variable can be iterated
if (is_array($var) || $var instanceof Traversable) {
    //some logic
};

// PHP 7.1+ code
if (is_iterable($var)) {
    //some logic
}


/**
 * Example if using iterable
 * as declaration or return types
 */
interface Example
{
    public function method(array $array): iterable;
}

class ExampleImplementation implements Example
{
    public function method(iterable $iterable): array
    {
        // some logic
    }
}

var_dump(is_iterable([1, 2, 3]));
var_dump(is_iterable(new ArrayIterator([1, 2, 3])));
var_dump(is_iterable((function () {
    yield 1;
})()));
var_dump(is_iterable(1));
var_dump(is_iterable(new stdClass()));