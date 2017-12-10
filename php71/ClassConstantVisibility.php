<?php
/**
 * Copyright © Vaimo Group. All rights reserved.
 * See LICENSE.txt for license details.
 */

class Token
{
    // Constants default to public
    const PUBLIC_CONST = 0;

    // Constants then also can have a defined visibility
    private const   PRIVATE_CONST    = 0;
    protected const PROTECTED_CONST  = 0;
    public const    PUBLIC_CONST_TWO = 0;

    //Constants can only have one visibility declaration list
    private const FOO = 1, BAR = 2;
}


//Interfaces only support public consts,
// and a compile time error will be thrown for anything else.
// Mirroring the behavior of methods.
interface ICache
{
    public const PUBLIC = 0;
}
const IMPLICIT_PUBLIC = 1;