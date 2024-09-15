<?php 
class Example {
    public $name ='user';
    public function __get($propertyName)
    {
        if($propertyName == 'hello'){
        return "__get() magic method is being called when " ."->$propertyName property is accessed which is not existing/defined in class".PHP_EOL;
        }
        return "property $propertyName does not exist".PHP_EOL;
    }
}
$ExampleObj = new Example();
echo $ExampleObj->hello;