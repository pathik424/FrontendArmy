<?php


// Overriding  Meaning Means Jyare 2 Function Same Name na hoy tyare kayu pehla call  thase e


class Calculator
{
    public function cal($a,$b)
    {
        echo $a+$b;
    }
    
}

class Cal1 extends Calculator
{
    public function cal($a,$b)
    {
        calculator::class::cal();
       echo $a-$b;
    }
    
}

$cal = new Calculator;
$cal->cal(100,10); 




?>
