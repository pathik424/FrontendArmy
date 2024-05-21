<?php


// Abstract Class Means Abstract Class Banavisu to eno koi Object Class Nai bane


abstract class Calculator
{
    abstract protected function cal($a,$b);
    
  
}

class childclass extends Calculator
{
    public function cal($a,$b)
    {
       echo $a-$b;
    }
    
}

$cal = new childclass;
$cal->cal(100,10); 




?>
