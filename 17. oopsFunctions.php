<?php

function hello()
{
  echo "hello <br>";
}
hello();
hello();
hello();
hello();
hello();

echo "<br>";
echo "<br>";
echo "<br>";


function pathik($variable)
{
  echo $variable.'<br>';
}

pathik("Hello Pathik");
pathik("Hello Pathik");
pathik("Hello Nirav");
pathik("Hello Nirav");
pathik("Hello Nirav");

echo "<br>";
echo "<br>";
echo "<br>";

function add($a,$b)
{
  echo $a+$b."<br>";
}
// Re-Declare Variable Name of X & Y
$x = 45;
$y = 50;
add(100,100);
add($x,$y);
add(100.767,866.788);

?>