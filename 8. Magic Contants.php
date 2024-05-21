<?php

//-------------------------------------------------

// PHP Constants

/*
A constant is an identifier (name) for a simple value. The value cannot be changed during the script.

A valid constant name starts with a letter or underscore (no $ sign before the constant name).

Note: Unlike variables, constants are automatically global across the entire script.
*/

// $x = 25;
// $x = 225;
// const _x = 2125;

// echo _x;

//------------------------------------------------------
// 1.  __CLASS__

//If used inside a class, the class name is returned.	

// class Fruits {
    //     public function myValue(){
        //       return __CLASS__;
        //     }
//   }
//   $kiwi = new Fruits();
//   echo $kiwi->myValue();

//------------------------------------------------------

// 2. _DIR_

// The directory of the file.

// echo __DIR__;
// // echo '<br>';
// // echo '<br>';
// // echo '<br>';

//------------------------------------------------------

// 3. __FILE__	

// The file name including the full path.	

// echo __FILE__;
//------------------------------------------------------

// 4. __FUNCTION__

//If inside a function, the function name is returned.

// name called to Function


//  function pathik(){
       
//     echo "my function name is : " . __FUNCTION__;
        
//        }
//        pathik();


    //   Response : my function name is : pathik
       
    
//------------------------------------------------------

// 5. __LINE__

// find out Value for Line Number  to Print 0r Echo //The current line number.	

// echo __LINE__;
//------------------------------------------------------

// 6. 

?>