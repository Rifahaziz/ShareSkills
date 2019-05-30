<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>Learn</title>
</head>
<body>
	<?php include('header.html');
	include 'connect.inc.php'?>

	<h2> Discover What You Want To Learn </h2>
		<button id="updatepro" onclick="location='updateprofile.php'">Update Profile</button>
	<button id="msg" onclick="location='messages.php'">Your Messages</button>
	<button id="homepage" onclick="location='homepage.php'">Home</button>

	
	<div>
		<?php
			$q="Select * from areas ";
			$result=mysqli_query($con, $q);
			

			echo "<table>";
				echo "<tr>";
				echo "<th>";
				echo "Works";
				echo "</th>";
				echo "</tr>";
				while($row=mysqli_fetch_assoc($result)){
					echo "<tr>";
					
					echo "<td>" ;
					?> <img src="<?php echo $row["Files"]; ?>" height="300" width=300" > 
					
					<?php echo "</td>";


					echo "</tr>";

			echo "</table>";
			}
			?>

			</div>

			

	
	


<br>
<br>
<br>
<br>
<br>
<br>

<?php include('footer.html');?>
</body>
</html>