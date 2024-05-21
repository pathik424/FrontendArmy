<?php




class Cal
{

    public static $name = "Pathik";
    // public static function hello()
    // {
    //   echo "Hello:". parent::$name;
    // }

}

class child extends Cal
{
    public static function hello()
    {
      echo "Hello:". parent::$name;
    }
    
}

$sent = new child;

// $sent->hello();
$sent->hello();


///Late Static Member 

class base
{

    protected static $name = "Pathik";
    public  function hello()
    {
          echo "<br>Hello:". static::$name;
        }
        
    }
    
    class children extends base
    {
        protected static $name = "Nirav";

}

$sent = new children;

// $sent->hello();
$sent->hello();



?>
