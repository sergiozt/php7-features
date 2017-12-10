<?php
/**
 * Copyright © Vaimo Group. All rights reserved.
 * See LICENSE.txt for license details.
 */

function test(?string $name)
{
    var_dump($name);
}

test('tpunt'); // ?
test(null); // ?
test(); // ?

/**
 * Example if using nullable
 * as declaration or return types
 */
interface ParentClass
{
    function test(string $param) : ?string;
}

interface ChildClass2 extends ParentClass
{
    function test(?string $param) : string;
}