<?php 
class Example {
    public $name ='user';
    public function __toString()
    {
        return "__toString() method is used automatically when trying to convert object of class to string";
    }
}
$ExampleObj = new Example();
echo $ExampleObj;