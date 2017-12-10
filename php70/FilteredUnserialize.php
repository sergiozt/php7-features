<?php
/**
 * Copyright © Vaimo Group. All rights reserved.
 * See LICENSE.txt for license details.
 */

class TestClass
{
    public function __wakeup()
    {
        echo 'Wakeup method was called' . PHP_EOL;
    }
}

$serializedString = 'O:9:"TestClass":0:{}';


/**
 * Example #1
 * Allow to call any class __wakeup method
 * Default behaviour
 */
$data = unserialize($serializedString);
//OR
$data = unserialize($serializedString, ["allowed_classes" => true]);

/**
 * Example #2
 * Forbidden to call any class __wakeup method
 */
$data = unserialize($serializedString, ["allowed_classes" => false]);

/**
 * Example #3
 * Forbidden to call any class __wakeup method
 * except white listed
 */
$data = unserialize($serializedString, ["allowed_classes" => false]);
$data = unserialize($serializedString, ["allowed_classes" => ["MyClass", "TestClass"]]);
