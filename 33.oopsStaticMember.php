<?php


// Static Lakhi e etle koi object nai bane direct call thase object ni jagya e  // echo base::$name; // base::cons();

class base{

public static $name = "Pathik";    
public static function cons()
{
   echo self::$name;

}

}

echo base::$name;
// $test = new base();
// $test->cons();

base::cons();

?>
