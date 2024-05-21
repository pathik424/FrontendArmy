<?php





// class mobile
// {
//     function vivo()
//     {
//         echo "Vivo Phone Cheap to Buy";
//     }
//     public function Motorola()
//     {
//         echo "motorola is a Medium Size Range";
//     }
//     private function samsung()
//     {
//         echo "Its a high budget Phone";
//     }
//     protected function Iphone()
//     {
//         echo "Its a high Quality Phone";
//     }
// }

// $object = new mobile;
// // $object->vivo();
// // $object->motorola();
// // $object->samsung();
// // $object->Iphone();


class Calculator
{
    // public $a,$b;
    function sum($a,$b)
    {
      echo $a+$b ."<br>";
    }
    function deduct($a,$b)
    {
      echo $a-$b. "<br>";
    }
    function Multiplication($a,$b)
    {
      echo $a*$b. "<br>";
    }
    function div($a,$b)
    {
      echo $a/$b. "<br>";
    }
    function Modulus($a,$b)
    {
      echo $a%$b. "<br>";
    }
    function Exponentiation($a,$b)
    {
      echo $a**$b. "<br>";
    }
}

$cal = new Calculator;
$cal->sum(10,20);
$cal->deduct(100,30);
$cal->Multiplication(10,30);
$cal->div(30,10);
$cal->Modulus(10,60);
$cal->Exponentiation(3,3);











?>