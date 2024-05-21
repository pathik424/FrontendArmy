<?php

// interface nu use same j che inheritance jevu j che but 1 thi vadhare class no access leva mate ineheritance kam ma nai ave ena mate inerface use karvu padse




interface name
{
   public function pathik();

}

class Nirav implements name
{
    public function pathik()
    {
        echo "Briliant in ShareMarket<br>";
    }

}
class yash implements name
{
    public function pathik()
    {
        echo "Played Like a Good Cricketer<br>";
    }

}
class Neel implements name
{
    public function pathik()
    {
        echo "Like a Boss<br>";
    }

}
class Jay implements name
{
    public function pathik()
    {
        echo "Like a Life Enjoying Person<br>";
    }

}

$ni = new Nirav();
// $ni->pathik();
$ya = new yash();
// $ya->pathik();
$ne = new Neel();
// $ne->pathik();
$ja = new Jay();
// $ja->pathik();


// For each
$name = array($ni,$ya,$ne,$ja);

foreach($name as $animal) {
    $animal->pathik();
  }

?>
