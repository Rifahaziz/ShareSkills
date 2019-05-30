<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>Update Profile</title>
</head>
<body>
	<?php include('header.html');
	include('connect.inc.php');
	$id = $_COOKIE['user'];

	$row = mysqli_query($con,"select * from users where user_id =".$id );
	echo mysqli_error($con);
	$result = mysqli_fetch_assoc($row);


	//if(isset("submit")){

	//}

	?>
	<h2> Update Your Profile </h2>
	<form action="updateprofile.php" method="POST">
		Name:<br>

		<?php 
		echo '<input id="skill" type="text" value ="'.$result['Name'].'" ><br>';
		?>
		Email:<br>
		<?php
		echo '<input id="skill" type="text" value ="'. $result['Email'].'"><br>';

		?>
		Age:<br>
		<?php
		echo '<input id="skill" type="date" value="'.$result['D.O.B'].'"><br>';
		
		?>
		Password:<br>
		<?php
		echo '<input id="skill" type="text" value="'.$result['Password'].'"><br>';
		?>
		Phone:<br>
		<?php
		echo '<input id="skill" type="text" value="'.$result['Phone'].'"><br>';
		?>
		
		<input type="submit" value="Submit"  class="btn btn-success"/> <br>
	</form>

	<button id="homepage" onclick="location='homepage.php'">Home</button>
	 <button id="updatepro" onclick="location='updateprofile.php'">Update Profile</button>
    <button id="sendmsg" onclick="location='sendMessage.php'">Send Messages</button>
    <button id="addskill" onclick="location='addskill.php'">Add Skill</button>
      <br>
      <br>
      <br>
      <br>
      <br>


<?php include('footer.html');?>
</body>
</html>