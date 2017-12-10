<?php
/**
 * Copyright © Vaimo Group. All rights reserved.
 * See LICENSE.txt for license details.
 */

// Pre PHP 7 code
use some\dummy\namespacedumm\ClassA;
use some\dummy\namespacedumm\ClassB;
use some\dummy\namespacedumm\ClassC as C;

use function some\dummy\namespacedumm\getName;
use function some\dummy\namespacedumm\getPhone;

use const some\dummy\namespacedumm\SOME_INT_CONST;
use const some\dummy\namespacedumm\SOME_STRING_CONST;


// PHP 7+ code
use some\dummy\namespacedumm\{ClassA, ClassB, ClassC as C};
use function some\dummy\namespacedumm\{getName, getPhone};
use const some\dummy\namespacedumm\{SOME_INT_CONST, SOME_STRING_CONST};
