<?php




$bijukai = ["pathik","saurav","shreyansh","ankit","jaimin","darshan","brijes","aakash"];
$array = ["pathik","saurav","shreyansh","ankit","jaimin","darshan","brijes","aakash"];

// echo $array;    //array to string converstion error



/*

foreach(name of variable  as uska naam karan)

*/


//foreach(your_variable_name   as   $key => $value)
foreach($bijukai as $kuchbhi => $kaipan)
{
    echo $kuchbhi;
    echo $kaipan;
   echo "<br>";
}
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";


foreach($array as $key => $value)
{
    echo "$key ";
    echo " $value";
    echo "<br>";
    
}
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";



$pathik = ['salman','Sanjay','Amitabh','Sahrukh'];
// $ = ['salman','Sanjay','Amitabh','Sahrukh'];

foreach ($pathik as $key => $value) {
    echo "$key";
    echo "$value";
    echo "<br>";
}

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

$pathik = ['actor'=>'salman','name'=>'Sanjay','value'=>'Amitabh','Namu'=>'Sahrukh'];

foreach ($pathik as  $key =>$value) {
    echo "$key:";
    echo "$value";
    echo "<br>";
}


?>