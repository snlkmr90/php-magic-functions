<?php
class Example
{

    public $name;
    public $phone;
    public function __construct($name, $phone)
    {
        $this->name = $name;
        $this->phone = $phone;
    }

    public function __clone()
    {
        var_dump($this);
    }
}
$ExampleObj = new Example('john','123456789');
var_dump($ExampleObj);
$clone = clone $ExampleObj;

echo "__clone() magic method creates a clone of an object" . PHP_EOL;
