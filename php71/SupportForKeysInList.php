<?php
/**
 * Copyright © Vaimo Group. All rights reserved.
 * See LICENSE.txt for license details.
 */

// Pre PHP 7.1 code
class Customer
{
    private $name;
    private $lastname;
    private $age;
    private $phone;

    public function __construct(array $attributes)
    {
        $this->name = $attributes['name'];
        $this->lastname = $attributes['lastname'];
        $this->age = $attributes['age'];
        $this->phone = $attributes['phone'];
    }
}

$importCustomerData = [
    'name'     => 'Ben',
    'lastname' => 'Markovich',
    'age'      => 'age',
    'phone'    => '445566',
];
new Customer($importCustomerData);

//List won't work as $attributes is associative array
list($first, $second, $third) = $importCustomerData;
$first = $importCustomerData[0];
$second = $importCustomerData[1];
$third = $importCustomerData[2];

//PHP 7.1+ code
class CustomerListTest
{
    private $name;
    private $lastname;
    private $age;
    private $phone;

    public function __construct(array $attributes)
    {
        list(
            "name" => $this->name,
            "lastname" => $this->lastname,
            "age" => $this->age,
            "phone" => $this->phone
            ) = $attributes;
    }
}
new Customer($importCustomerData);