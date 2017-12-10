<?php
/**
 * Copyright © Vaimo Group. All rights reserved.
 * See LICENSE.txt for license details.
 */

/**
 * Example #1
 * Int comparison
 */
echo 1 <=> 1; // ?
echo 1 <=> 2; // ?
echo 2 <=> 1; // ?

/**
 * Example #2
 * Float comparison
 */
echo 1.5 <=> 1.5; // ?
echo 1.5 <=> 2.5; // ?
echo 2.5 <=> 1.5; // ?

/**
 * Example #3
 * String comparison
 */
echo "a" <=> "a"; // ?
echo "a" <=> "b"; // ?
echo "b" <=> "a"; // ?

echo "a" <=> "aa"; // ?
echo "zz" <=> "aa"; // ?

//Objects are not comparable, and so using them as operands
// with this operator will result in undefined behaviour.

