<?php

// common ek function ne ek thi vadhare class ni andar run karava mate trait use thay

trait sample
{

    public function syahello()
   
    {
      echo "Hello Everyone<br>";
    }
    public function syahi()
   
    {
      echo "Hello Everyone hi<br>";
    }

}
trait pathik
{

    public function saybye()
   
    {
      echo "Hello Everyone Bye <br>";
    }

}
 
class temple{
    use sample,pathik;
}
class discount{
    use sample;
}



$sent = new temple;
$sent1 = new discount;

// $sent->hello();
$sent->syahello();
$sent->syahi();
$sent->saybye();
// $sent1->syahello();






?>
