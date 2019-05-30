<?php 
require 'connect.inc.php';

$name=$_POST['name'];
$pass=$_POST['pass'];
$dob=$_POST['dob'];
$email=$_POST['email'];
$phone=$_POST['phone'];

echo $name;
echo $pass;
$result= mysqli_query($con , "INSERT INTO users(`Name`,`Password`,`D.O.B`,`Email`,`Phone`)  VALUES('$name','$pass','$dob','$email','$phone')") ;



?>