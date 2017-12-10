<?php
/**
 * Copyright © Vaimo Group. All rights reserved.
 * See LICENSE.txt for license details.
 */
function swap(&$left, &$right): void
{
    if ($left === $right) {
        return;
    }

    list($right, $left) = array($left, $right);
}

$left = 1;
$right = 2;
var_dump(swap($left, $right), $left, $right); // null, int(2), int(1)
