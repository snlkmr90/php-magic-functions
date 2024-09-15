<?php
class Example
{
    public $name = 'john';
    public static function __callStatic($propertyName, $arguments)
    {
        //var_dump($propertyName, $arguments);
        if($propertyName=='getUserName'){
            return "$propertyName method is called";
        }
        //return "method $propertyName does not exist";
    }
}
$ExampleObj = new Example();
echo $ExampleObj::getUserName('jane').PHP_EOL;
echo "__callstatic() magic method is used to automatically call/return new data when non existing static method of a class is called".PHP_EOL;