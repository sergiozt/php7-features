<?php
/**
 * Copyright © Vaimo Group. All rights reserved.
 * See LICENSE.txt for license details.
 */

/**
 * Example #1
 * Wrong return type
 */
//declare(strict_types=1);
declare(strict_types=0);

function getInt(): int
{
    return 42;
}

echo getInt() . PHP_EOL;;

function getIntStr(): int
{
    return '42';
}

echo getIntStr() . PHP_EOL;

/**
 * Example #2
 * Missing return type on override
 */
class User
{
}

interface UserGateway
{
    function find($id): User;
}

class UserGatewayMySql implements UserGateway
{
    // must return User or subtype of User
    function find($id)
    {
        return new User();
    }
}

$userG = new UserGatewayMySql();
$userG->find(12);