<?php
class Example
{
    public $name = 'john';
    public function __invoke($arg)
    {
        return " __invoke() is called with argument '$arg'";
    }
}
$ExampleObj = new Example();
echo $ExampleObj('ARG').PHP_EOL;
echo "__invoke() magic method automatically allow call object as function".PHP_EOL;