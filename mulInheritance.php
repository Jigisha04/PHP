<?php
class A 
{
    public function display1()
    {
        echo "Parent A <br>";
    }
}

trait B 
{
    public function display2()
    {
        echo "Parent B <br>";
    }
}

class C extends A
{
    use B;
    
    public function display3()
    {
        echo "Child C <br>";
    }
}

// Create an instance of class C
$c = new C();

// Call the methods
$c->display1(); // From class A
$c->display2(); // From trait B
$c->display3(); // From class C
?>
