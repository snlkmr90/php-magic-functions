<?php
class Example
{
    public $name = 'john';
    public function __set($propertyName, $value)
    {
        if ($propertyName == 'phone') {
            $this->name = 'jane';
        }else{
            $this->name = 'undefined';
        }
        
    }
}
$ExampleObj = new Example();
$ExampleObj->phone = '123456';
echo $ExampleObj->name.PHP_EOL;
echo "__set() magic method is used to automatically assign/set new value to existing properties of a class when non existing property assigned with some value";