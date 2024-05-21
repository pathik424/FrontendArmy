<?php

require_once("22.oopsDestructed.php");




class Manager extends Employee
{
    // public function __construct()
    // {
    //     echo "Hello Construct Function Automatically Call first <br>";
    // }
 
    protected $name;
    protected $age;
    protected $salary;
    public function __construct($a,$b)
    {
        echo $a.''.$b;
    }
    public function hr($name,$age,$salary)
    {
        echo "<h3>Hr Details <h3>";
        echo "<h3>Employee Name: $name <h3>";
        echo "<h3>Employee Age: $age <h3>";
        echo "<h3>Employee Salary: $salary <h3>";
    }
    public function stering()
    {
        echo "<br> Hello stering Constructed <br>";
    }
}

$car = new Manager('<h4>Hello<h4>','<h4> Construct Function Automatically Call first <h4>');
// $emp = new Employee('Hello');
$car->hr("Khushnuma Manager","25","21000");
// $car->stering();
$car->xyz("pathik",28,20000);





?>
