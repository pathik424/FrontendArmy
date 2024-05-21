<?php


//------------------------------------------------------------------------------------------------------------------------------------
// Index Array 

$cars = array('Volvo','BMW','audi',"Mercedes","Boogati");
echo '<pre>';
print_r($cars);
echo '</pre>';

//------------------------------------------------------------------------------------------------------------------------------------
// Associated Array 

$forms = array('Name'=>"Pathik",'Email'=>"p4pathik424@gmail.com",'Carname'=>'audi','Age'=>'28','Username'=>'Pathik424');
echo '<pre>';
print_r($forms);
echo '</pre>';
//------------------------------------------------------------------------------------------------------------------------------------

// 2d Array


$school = 

array(
"DPS"=>
array("10th Standard"=>array(
"Ankit"=>array("Sports"=>89,"Music"=>87,"Drama"=>45),
"Pathik"=>array("Sports"=>99,"Music"=>97,"Drama"=>54)
),
"11th Standard"=>array(
  "Saurav"=>array("Sports"=>89,"Music"=>87,"Drama"=>45),
"Shreyansh"=>array("Sports"=>89,"Music"=>87,"Drama"=>45)
),
"12th Standard"=>array(
  "Jaimin"=>array("Sports"=>89,"Music"=>87,"Drama"=>45)
  )
  )
);

echo '<pre>';
print_r($school);
echo '</pre>';


echo "<br>";
echo "<br>";
echo "<br>";

//------------------------------------------------------------------------------------------------------------------------------------
$company =

array(
  "PHP"=>
array("HR Department"=>array(
"Shrusti"=>array("Salary"=>10000,"Incentive"=>1000),
"Neel"=>array("Salary"=>15000,"Incentive"=>1000)
),
"Accounting Department"=>array(
"Bhavya"=>array("Salary"=>20000,"Incentive"=>1000),
"Niharika"=>array("Salary"=>25000,"Incentive"=>1000),
),
"Development Department"=>array(
  "Pathik"=>array("Salary"=>100000,"Incentive"=>1000),
  "Nirav"=>array("Salary"=>10000000,"Incentive"=>1000),
),


)
);

echo '<pre>';
print_r($company);
echo '</pre>';

//------------------------------------------------------------------------------------------------------------------------------------



?>