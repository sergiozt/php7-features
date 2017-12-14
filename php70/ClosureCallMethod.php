<?php
/**
 * Copyright © Vaimo Group. All rights reserved.
 * See LICENSE.txt for license details.
 */

class A
{
    private $x = 1;
}

// Pre PHP 7 code
$getXCB = function ($int) {
    return $this->x + $int;
};
$getX = $getXCB->bindTo(new A, 'A'); // intermediate closure
echo $getX(4), PHP_EOL; // ?

// PHP 7+ code
$getX = function ($int) {
    return $this->x + $int;
};
echo $getX->call(new A, 4); //5