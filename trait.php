<?php
trait message1
{
    public function msg1()
    {
        echo " Welcome to object oriented in PHP";
    }
}
class Welcome
{
    use message1;
}
$obj - new Welcome();
$obj->msg1();