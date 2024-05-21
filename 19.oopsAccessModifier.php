<?php





// public  it is like water/Cycle     everyone has access
// protected it is like juice/Bike    only the self class and inherited class
// private it is like black water/Rolls Royce   only the self class



class Employees 
{
    // public function __construct()
    // {
    //     echo "Hello Construct Function Automatically Call first <br>";
    // }
 
    protected $name;
    public $age;
    public $salary;
    public function __construct($a,$b)
    {
        echo $a.''.$b;
    }
    public function Hr($name,$age,$salary)
    {
        echo "<h3>Hr Details <h3>";
        echo "<br>Employee Name: $name <br>";
        echo "<br>Employee Age: $age <br>";
        echo "<br>Employee Salary: $salary <br><br><br>";
    }
    protected function Accounting($name,$age,$salary)
    {
        echo "<h3>Accounting Details <h3>";
        echo "<br>Employee Name: $name <br>";
        echo "<br>Employee Age: $age <br>";
        echo "<br>Employee Salary: $salary <br><br><br>";
    }
    private function Developer($name,$age,$salary)
    {
        echo "<h3>Developer Details <br>";
        echo "<br>Employee Name: $name <br>";
        echo "<br>Employee Age: $age <br>";
        echo "<br>Employee Salary: $salary <br><br><br>";
    }
 
}

$com = new Employees('<h4>Hello<h4>','<h4> Construct Function Automatically Call first <h4>');
$com->Hr('Pathik',"28",28000);
$com->Accounting('Pathik',"28",28000); // ama error j avse bcs function ma protected use karyu che 
$com->Developer('Pathik',"28",28000); // ama error j avse bcs function ma private use karyu che




//--------------------------------------------------------------------------------------------------------------------------

// class abc{

// public $a = 10;
// protected $b = 50;
// private $c = 30;

// public function ad(){

//     echo $this->c;

// }

// }
// class def extends abc{
    
//     public function ac(){
    
//         echo $this->c;
    
//     }
    
    
// }
//     $pathik = new def;
//     $pathik->ac();




?>




