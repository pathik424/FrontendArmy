<h1>Date & Time:</h1>
<?php


//--------Date & Time--------//


echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("d-m-Y") . "<br>";
echo "Today is " . date("l"); 

//--------Date & Time--------//

//--------Copy Right Year--------//

?>
<br><br>
<H1>Copy Right Year</H1>
© 2010-<?php echo date("Y");?>
<?php
//--------Copy Right Year--------//
?>
<br>
<br>

<H1>Get a Time</H1>
<?php
//--------Get a Time--------//


echo "The time is ". date("h:i:sa");

//--------Get a Time--------//
?>
<br><br>
<?php
//--------Get a Time--------//

date_default_timezone_set('Asia/Kolkata');
echo date('d-m-Y H:i:s')

//--------Get a Time--------//
?>
<H1>Date Creation:</H1>
<?php


$d=mktime(11, 14, 54, 8, 12, 2014);
echo "Created date is " . date("Y-m-d h:i:sa", $d);

?>


<H1>Date Forcasting:</H1>

<?php
$d=strtotime("tomorrow");
echo date("Y-m-d h:i:sa", $d) . "<br>";

$d=strtotime("next Saturday");
echo date("Y-m-d h:i:sa", $d) . "<br>";

$d=strtotime("+3 Months");
echo date("Y-m-d h:i:sa", $d) . "<br>";
?>

<H1>Date Forcasting:</H1>

<?php
$startdate=strtotime("Saturday");
$enddate=strtotime("+6 weeks", $startdate);

while ($startdate < $enddate) {
   echo date("M d", $startdate) . "<br>";
   $startdate = strtotime("+1 week", $startdate);
}
?>
<br><br>
<H1>Text File Reading:</H1>

<?php


echo readfile('Points.txt');

?>