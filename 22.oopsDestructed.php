<?php



class Employee
{
    // protected $name;
    // protected $age;
    // protected $salary;
    public function __destruct()
    {
        echo "<br>Hello Destructed  Function Automatically Call last<br>";
        
    }
    public function xyz($name,$age,$salary)
    {
        echo "<h3>Employee Details <h3>";
        
        echo "<h3>Employee Name: $name <h3>";
        echo "<h3>Employee Age: $age <h3>";
        echo "<h3>Employee Salary: $salary <h3>";
    }
    public function efg()
    {
        echo "<br> Hello stering Destructed <br>";
    }
}

// $car = new Car1();
// $car->xyz();
// $car->efg();





?>
