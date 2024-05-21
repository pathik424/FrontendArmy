<?php
/*

-----------------------------------------
List of String
-----------------------------------------

1.  Single Quatation / Double Quatation
2.  Variable Print
3.  Counting Single Word (strlen)
4.  Counting Word (str_word_count)
5.  Upper Case (strtoupper)
6.  Lower Case (strtolower)
7.  Replace String (str_replace)
8.  Reverse String (strrev)
9.  Remove White Sppace (trim)
10. String Concatenation (.)
11. Slicing String (substr)
12. Slice to end (substr)
13. Slice from the end (substr)
14. Negative Length (substr)

-----------------------------------------

*/


// 1. Strings in PHP are surrounded by either double quotation marks, or single quotation marks.

// single Quotaion
// echo 'Hello';
// // Double Quotation
// echo "Hello";

//--------------------------------------------------------------------------

// 2. Single quoted strings does not perform such actions, it returns the string like it was written, with the variable name:
  

  // $x = "Pathik";
  
  // echo "Hello $x";
  
//--------------------------------------------------------------------------

// 3. Counting Single Word

//Return the length of the string "Hello world!": (Single Word Count)

// echo strlen("Pathik");

//--------------------------------------------------------------------------

// 4. Counting Word 

//The PHP str_word_count() function counts the number of words in a string. (one Sentence Count)

// echo str_word_count ("hello pathik world");

//--------------------------------------------------------------------------

// 5. Upper Case

// The strtoupper() function returns the string in upper case:
  
  // $x = "hello Pathik";
  
  // echo strtoupper($x);

//--------------------------------------------------------------------------

// 6. Lower Case

//The strtolower() function returns the string in lower case:
  
  //  $x = "HELLO PATHIK";
  
  //  echo strtolower($x);

//--------------------------------------------------------------------------

// 7. Replace String 

// The PHP str_replace() function replaces some characters with some other characters in a string.

// $x = "Hello World";

// echo str_replace('World',"Pathik",$x);

//--------------------------------------------------------------------------

// 8. Reverse String

// The PHP strrev() function reverses a string.

// $x = "HELLO PATHIK";

//  echo strrev($x);

//--------------------------------------------------------------------------

// 9. Remove White Sppace

// The trim() removes any whitespace from the beginning or the end:

// $x = "Hello World !!      !!";

// echo trim($x);

//--------------------------------------------------------------------------

// 10. String Concatenation

// To concatenate, or combine, two strings you can use the . operator:

// $x = "Hello";
// $y = "Pathik";

// $z = $x . $y;
// if using space between two word
// $z = $x ." ". $y;

// echo $z;

//--------------------------------------------------------------------------

// An easier and better way is by using the power of double quotes.


// $x = "Hello";
// $y = "Pathik";

// $z = "$x $y";

// echo $z;

//--------------------------------------------------------------------------

// 11. Slicing String 

// Slicing String Use For Cutting World Starting with end

// $x = "Hello World";

// echo substr($x, 2, 7);

//--------------------------------------------------------------------------

// 12. Slice to end

// $x = "Hello World!";

// echo substr($x,6);

//--------------------------------------------------------------------------

// 13. Slice From the End

// $x = "Hello World";

// echo substr($x,-6,4);


//--------------------------------------------------------------------------

// 14. Negative Length

// $x = "Hello World";

// echo substr($x,6,-3);

//--------------------------------------------------------------------------
?>