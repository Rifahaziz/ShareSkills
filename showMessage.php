<?php 
require 'connect.inc.php';
//GET current user id from COOKIE
$userID = $_COOKIE['user'];

$div = "<div>";

// Fetch messages and names from messages table only where to_id is the current user ID
$sql_query = "SELECT * FROM messages WHERE `to_id` = '$userID'";

$result = mysqli_query($con,$sql_query);


	while($row = mysqli_fetch_array($result , MYSQLI_ASSOC)){
		
		$from_id = $row['user_id'];

		//Get name from user table
		$query = "SELECT * FROM users WHERE `user_id` = '$from_id'";
		$res = mysqli_query($con,$query);
		$nrow = mysqli_fetch_assoc($res);
		$name = $nrow['Name'];
		
		//Get the message
		$msg = $row['Message'];

		//Format and add inside div
		$div .= '<h5>'.$name.'</h5> <br>';
		$div .= '<p>'.$msg.'</p> <br><br>';
		$div .= '</div>';	
	}

	//$div .= '</div>';	

?>


<html>
<head>
	<title>Your Messages</title>
	 <link rel="stylesheet" type="text/css" href="shareskills.css">
</head>
<body>
<?php	require 'header.html'; ?>

<?php 
	
	echo $div;

?>


  <button id="updatepro" onclick="location='updateprofile.php'">Update Profile</button>
    <button id="sendmsg" onclick="location='sendMessage.php'">Send Messages</button>
    <button id="addskill" onclick="location='addskill.php'">Add Skill</button>
      <button id="homepage" onclick="location='homepage.php'">Home</button>

<footer>
	<?php require 'footer.html'; ?>
</footer>
</body>
</html>