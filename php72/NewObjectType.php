<?php
/**
 * Copyright © Vaimo Group. All rights reserved.
 * See LICENSE.txt for license details.
 */

//Parameter type
function acceptsObject(object $obj)
{
    echo 'Object was passed to unction' . PHP_EOL;
}

acceptsObject(json_decode('{}'));
acceptsObject(new stdClass());
acceptsObject("Some test string");

//Return type
function correctFunction(): object
{
    $obj = json_decode('{}');

    return $obj;
}

function errorFunction(): object
{
    return [];
}