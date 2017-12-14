<?php
/**
 * Copyright © Vaimo Group. All rights reserved.
 * See LICENSE.txt for license details.
 */

/**
 * Example #1
 * Int comparison
 */
echo 1 <=> 1, PHP_EOL; // ?
echo 1 <=> 2, PHP_EOL;; // ?
echo 2 <=> 1, PHP_EOL;; // ?

/**
 * Example #2
 * Float comparison
 */
echo 1.5 <=> 1.5, PHP_EOL;; // ?
echo 1.5 <=> 2.5, PHP_EOL;; // ?
echo 2.5 <=> 1.5, PHP_EOL;; // ?

/**
 * Example #3
 * String comparison
 */
echo "a" <=> "a", PHP_EOL;; // ?
echo "a" <=> "b", PHP_EOL;; // ?
echo "b" <=> "a", PHP_EOL;; // ?
echo "a" <=> "aa", PHP_EOL;; // ?
echo "zz" <=> "aa", PHP_EOL;; // ?
echo "zz" <=> new stdClass(), PHP_EOL;; // ?

//Objects are not comparable, and so using them as operands
// with this operator will result in undefined behaviour.

