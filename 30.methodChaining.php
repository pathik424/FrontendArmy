<?php

class abc{

   public function first()
   {
    echo "This is First Function<br>";
    return $this;
}
public function Second()
{
    echo "This is Second Function<br>";
    return $this;
   }
   public function Third()
   {
    echo "This is Third Function";
   }

   
}
$val = new abc();
$val->first()->Second()->Third(); ///Method Chaining 

?>
