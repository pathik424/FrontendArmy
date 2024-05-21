<?php




class petrolcar
{

    private $a = 50;

    protected $b = 100;

    public function Tyre()
    {
        echo "Petrol Car tyre";
    }
    public function body()
    {
        echo "Petrol Car body";
    }
    public function engine()
    {
        echo "Petrol Car engine";
    }
    public function stering()
    {
        echo "Petrol Car stering";
    }
    public function glass()
    {
        echo "Petrol Car glass";
        echo $this->a;
    }
    // private function pathik()
    // {
    //   $this->glass();
    // }
}

class evcar extends petrolcar
{

    public function Tyre()
    {   
        petrolcar::class::Tyre();
        echo "EVcar Car tyre";
    }
    public function body()
    {
        echo "EVcar Car body ";
    }
    public function engine()
    {
        echo "EVcar Car engine";
    }
    public function stering()
    {
       //both calling when use same function but also need petrol car function call when calling evcar function
        petrolcar::class::stering();
        echo "EVcar Car stering";
    }
    public function glass()
    {
        echo "EVcar Car glass";
    }
    public function batery()
    {
        // petrolcar::class::batery();
        echo "EVcar Car batery";
    }

}

$car = new petrolcar;
// $car->tyre();
// $car->stering();
// $car->batery();
$car->glass();
// $car->pathik();
