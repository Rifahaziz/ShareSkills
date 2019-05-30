<?php

$host="127.0.0.1";
$user="root";
$pass="";

//$username= $_POST['user'];
//$password= $_POST['pass'];
$con=mysqli_connect($host,$user,$pass);

if(!$con) echo "Not Connected";

if( isset($_POST['user']) && isset( $_POST['pass']) ){

	mysqli_select_db($con,'shareskills');


	$username = $_POST['user'];
	$pass = $_POST['pass'];



	$result= mysqli_query($con , "select * from users where Name='$username'") or die("failed");

	$row=mysqli_fetch_array($result);

	if(isset($_GET['logout'])){
		unset($_COOKIE['user']);
		header('Location: login.php');
	}

	if($row['Name'] == $username && $row['Password'] == $pass && $username != '' && $pass != '' ){
		echo "Welcome".$row['Name'].$row['user_id'];
		$name = $row['Name'];
		header('Location: homepage.php?name='.$name);

		setcookie('user', $row['user_id']);
		setcookie('username',$row['Name']);
	}

	else{
		header('Location: login.php?login="failed"');
		echo "failed to log in";
	}
}


else{
	header('Location: login.php?logout=true');	
}

?>