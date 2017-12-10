<?php
/**
 * Copyright © Vaimo Group. All rights reserved.
 * See LICENSE.txt for license details.
 */

abstract class A
{
    abstract function test(string $s);
}
abstract class B extends A
{
    // overridden
    abstract function test($s) : int;
}