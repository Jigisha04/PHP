<?php

class A{
    function dis1()
    {
        echo "hello parent class";
    }
}
class B extends A 
{
    function dis2()
    {
        echo "hello child class";
    }
}
$obj= new B();
$obj->dis1();
$obj->dis2();