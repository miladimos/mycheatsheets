<?php

class Car
{
    protected $car;
    protected $speed;

    public function break()
    {
        //
    }
}


$reflectionClass = new ReflectionClass('Car');
print_r($reflectionClass);

get_class_methods();
get_class_vars();
get_class_vars();



