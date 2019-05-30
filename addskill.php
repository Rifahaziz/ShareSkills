<!DOCTYPE html>
<html>
<head>
	<title>Add Skill</title>
</head>
<body>
<?php include'header.html';
	require 'connect.inc.php';
	?>

	
	<section class="stickybuttons">

	<button id="updatepro"  onclick="location='updateprofile.php'">Update Profile</button>
	<button id="msg" onclick="location='showMessage.php'">Your Messages</button>
	<button id="homepage" onclick="location='homepage.php'">Home</button>

</section>

<!--handling the form of addskill-->
<?php
	if(isset($_POST['area']) && isset($_POST['topic'])){
	$area=$_POST['area'];
	$topic=$_POST['topic'];
	$workname=$_FILES['works']['name'];
	$size=$_FILES['works']['size'];
	$type=$_FILES['works']['type'];
	$extension=strtolower(substr($workname, strpos($workname, '.')+1));
	$tmp_name=$_FILES['works']['tmp_name'];
	$max_size=600000;
		if(isset($workname)){
			if(!empty($workname)){
			echo 'OK.';
			if(($extension=='jpg'||$extension=='jpeg') && $type=='image/jpeg' && $size<$max_size){
				$location='img/';

				if(move_uploaded_file($tmp_name,$workname)){
					echo 'Uploaded!';
					$sql="INSERT INTO areas(`Category`, `Topic`,`Files`) VALUES ('$area','$topic', '$workname')";
					if(!mysqli_query($con, $sql)){
		 				echo 'Not inserted';
		 				echo mysqli_error($con);
		 			}
		 			else{
		 			echo 'inserted.';
		 			}
				}
		
				else{
				echo 'ERROR';
				}
			}
		else{
			echo 'File must be in jpg/jpeg format and size must be less than 2MB';
		}
		}
	else{
		echo 'Fill in the fields';
		}

	}
}


?>
<section class="addskill">
	<h4>Add Your Skill Here</h4>

	<form action="addskill.php" method="POST" enctype="multipart/form-data">
		Area: <br>
		<select name="area"> 
  			<option value="art">Art</option>
  			<option value="music">Music</option>
  			<option value="yoga">Yoga</option>
  			<option value="coding">Coding</option>
  			<option value="writing">Writing</option>
			</select>
			<br>
			
		Topic : <br>
		<select name="topic" >
		<?php $area=$_POST['area'];?>
			
			<option value="Craft">Craft</option>
			<option value="Painting">Painting</option>
			<option value="Sketch">Sketch</option>
		
			<option value="Drums">Drums</option>
			<option value="Piano">Piano</option>
			<option value="Guitar">Guitar</option>
	
			<option value="Speech">Speech</option>
			<option value="Essay">Essay</option>
			<option value="Beginner">Beginner</option>
			<option value="Intermediate">Intermediate</option> <br>
		</select>
		Upload Your Works in jpg file<br>
		<input id="works" name="works" type="file"><br>
		Upload word documents <br>
		<input id="doc" name="doc" type="file"><br>
		<input id="Done" type="submit" value="Done"> <br>
	</form>
</section>


<?php
if(isset($_POST['submit'])){
	$r_area=$_POST['newskill'];
	$r_topic=$_POST['newtopic'];
	$comments=$_POST['comment'];
	//$q="INSERT INTO requestskill(`r_area`, `r_topic`,`comments`) VALUES ('$r_area','$r_topic', '$comments')";
	//mysqli_query($con,$q);
	$existing="select `category_name` from categories where `category_name`='$r_area'";
	
	if(mysqli_query($con,$existing)){
		$addvalid="insert into categories (`category_name`,`Validity`, `Topic1`, `Topic2`,`Topic3`, `Topic4`, `Topic5`) VALUES('$r_area',0, '$r_topic','0','0','0','0')";
		mysqli_query($con,$addvalid);
	}

	/*else{
		$addinvalid="insert into categories (`category_name`,`Validity`, `Topic1`, `Topic2`,`Topic3`, `Topic4`, `Topic5`) VALUES('$r_area',0, '$r_topic','0','0','0','0')";
		die($addinvalid);
		mysqli_query($con,$addinvalid);
	}*/
}
?>



<section class="reqform">
	<h4>Request For New Skill </h4>
<form action="addskill.php" method="POST">
	New Area : <br>
	<input name="newskill" type="text"> <br>
	New Topic : <br>
	<input name="newtopic" type="text"> <br>
	Comments : <br>
	<textarea name="comment">
		
	</textarea>
	<br>
	<input id="submit" name="submit" type="submit" value="submit">
</form>
</section>



<footer>
	<?php require 'footer.html'; ?>

</body>
</html>