<?php
/**
 * Copyright © Vaimo Group. All rights reserved.
 * See LICENSE.txt for license details.
 */

// boolean, integer, float, string

//declare(strict_types=1);
declare(strict_types=0);


// Coercive mode
function sumOfIntegers(int ...$ints)
{
    return array_sum($ints);
}

var_dump(sumOfIntegers(2, '3', 4.1)); // int(9)
