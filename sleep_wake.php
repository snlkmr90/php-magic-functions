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

    public function __sleep()
    {
        unset($this->phone);
        return ['name'];
    }
    public function __wakeup()
    {
        echo 'i am waking up';
    }
}
$ExampleObj = new Example('john','123456789');
$serialize = serialize($ExampleObj);
$unserialize = unserialize($serialize);
var_dump($serialize);
//echo "__invoke() magic method automatically allow call object as function" . PHP_EOL;