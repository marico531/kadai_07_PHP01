<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$name   = $_POST["name"];
$email  = $_POST["email"];
$team   = $_POST["team"];
$sensyu = $_POST["sensyu"];
$kitai1 = $_POST["kitai1"];
$kitai2 = $_POST["kitai2"];
$memo   = $_POST["memo"];
$c    = ",";
$str  = $name.$c.$email.$c.$team.$c.$sensyu.$c.$kitai1.$c.$kitai2.$c.$memo;//aaa,bbb 

echo $str;

$file = fopen("data1.csv","a");
fwrite($file,$str."\n");
fclose($file);

header("Location: index.php");
exit;


?>

