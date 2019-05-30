<?php

$host="127.0.0.1";
$user="root";
$pass="";

//$username= $_POST['user'];
//$password= $_POST['pass'];


$con=mysqli_connect($host,$user,$pass);
if($con) echo "Connected";

mysqli_select_db($con,'shareskills');






?>