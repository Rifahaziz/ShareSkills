
<?php 
	// Get users from DB and add their id and Name to select tag
    require 'connect.inc.php';

    if(isset($_POST['msgbtn'])){

	$id = $_POST['userID'];
    $name = $_POST['userName'];
    }
    
    //When Message is posted
    if(isset($_POST['submit'])){

    	// Get current user
    	$from_id = $_COOKIE['user'];

    	//Get select option
    	$to_id = $_POST['userID'];
    	
    	//Get message posted
    	$msg = $_POST['msg'];


    	$date = date("Y/m/d");

    	// Add these to message table

    	$sql_query = "INSERT into `messages` (`Message`, `to_id`, `user_id`, `Date`) VALUES ('$msg', '$to_id', '$from_id', '$date')";
    	//execute statement if message not empty
    	if($msg != '' || $msg != NULL){
    		mysqli_query($con,$sql_query);
    		mysqli_error($con);
    	}


    }
   	



?>
	<form action="sendMessage2.php" method="POST" class="sendmsg">
		
		To: <?php  echo $name ;  
        echo '<input type="hidden" name="userID" value="'.$id.'">';
        ?>
		<br>
		Message : <input type="text" name="msg" style="width:400px; height:50px">
		<br>
		<input type="submit" name="submit" value="Send">

	</form>
    


    <br>
    <br>

    <button id="updatepro" onclick="location='updateprofile.php'">Update Profile</button>
    <button id="showmsg" onclick="location='showMessage.php'">Your Messages</button>
    <button id="addskill" onclick="location='addskill.php'">Add Skill</button>
      <button id="homepage" onclick="location='homepage.php'">Home</button>

<?php require 'footer.html'?>
</body>
</html>