<?php
class Example
{
    public $name = 'john';
    public function getName(){
        return $this->name;
    }
    public function __call($propertyName, $arguments)
    {
        //var_dump($propertyName, $arguments);
        if($propertyName=='getUserName'){
            return $this->getName();
        }
        //return "method $propertyName does not exist";
    }
}
$ExampleObj = new Example();
echo $ExampleObj->getUserName('jane').PHP_EOL;
echo "__call() magic method is used to automatically call/return new data when non existing method of a class is called".PHP_EOL;