<?php
/**
 * Copyright © Vaimo Group. All rights reserved.
 * See LICENSE.txt for license details.
 */

// Pre PHP 7 code
class Util
{
    protected $logger;

    public function setLogger($loger)
    {
        $this->logger = $loger;
    }

}

class Logger
{
    public function log($msg)
    {
        echo $msg;
    }
}

$util = new Util();
$util->setLogger(new Logger());


// PHP 7+ code
/**
 * Example #1
 * Anonymous class
 */
$util = new Util();
$util->setLogger(new class
{
    public function log($msg)
    {
        echo $msg;
    }
});

/**
 * Example #2
 * Anonymous class with class, interface anf  trait
 */
class testClass
{
}

interface testInterface
{
    public function getNum();
}

trait testTrait
{
}

$anonymousClass = new class(10) extends testClass implements testInterface
{
    private $num;

    public function __construct($num)
    {
        $this->num = $num;
    }

    public function getNum()
    {
        return $this->num;
    }

    use testTrait;
};

echo get_class($anonymousClass), PHP_EOL;
var_dump($anonymousClass);