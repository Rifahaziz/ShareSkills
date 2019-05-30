<!DOCTYPE <html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title> ShareSkills </title>
	<link rel="stylesheet" type="text/css" href="shareskills.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


</head>
<body>
	<?php include ('header.html');
	include 'connect.inc.php'; ?>

	<div class="container ">
		<div class="row">
			<div class="col-2">
			<h4>Categories</h4>
			<ul type="circle"><?php $r1=mysqli_query($con, "select * from categories where cat_id=1");
			 			$res1=mysqli_fetch_assoc($r1);
			 			echo  $res1["category_name"].=" :";
			?>
			<li> <?php echo $res1["Topic1"]?></li>
			<li> <?php echo $res1["Topic2"]?></li>
			<li> <?php echo $res1["Topic3"]?></li>
			<li> <?php echo $res1["Topic4"]?></li>
			<li> <?php echo $res1["Topic5"]?></li>
				
			</ul>
			<ul type="circle"><?php $r2=mysqli_query($con, "select * from categories where cat_id=2");
			 			$res2=mysqli_fetch_assoc($r2);
			 			echo $res2["category_name"].=" :";
			?>
			<li> <?php echo $res2["Topic1"]?></li>
			<li> <?php echo $res2["Topic2"]?></li>
			<li> <?php echo $res2["Topic3"]?></li>
			<li> <?php echo $res2["Topic4"]?></li>
			<li> <?php echo $res2["Topic5"]?></li>
				
			</ul>
			<ul type="circle"> <?php $r3=mysqli_query($con, "select * from categories where cat_id=3");
			 			$res3=mysqli_fetch_assoc($r3);
			 			echo $res3["category_name"].=" :";
			?>
			<li> <?php echo $res3["Topic1"]?></li>
			<li> <?php echo $res3["Topic2"]?></li>
			<li> <?php echo $res3["Topic3"]?></li>
			<li> <?php echo $res3["Topic4"]?></li>
			<li> <?php echo $res3["Topic5"]?></li>
				
			</ul>
			<ul type="circle"><?php $r4=mysqli_query($con, "select * from categories where cat_id=4");
			 			$res4=mysqli_fetch_assoc($r4);
			 			echo $res4["category_name"].=" :";
			?>
			<li> <?php echo $res4["Topic1"]?></li>
			<li> <?php echo $res4["Topic2"]?></li>
		  <li><?php echo $res4["Topic3"]?></li>
			<li> <?php echo $res4["Topic4"]?></li>
			<li> <?php echo $res4["Topic5"]?></li>
				
			</ul>
			<ul type="circle"><?php $r5=mysqli_query($con, "select * from categories where cat_id=5");
			 			$res5=mysqli_fetch_assoc($r5);
			 			echo $res5["category_name"].=" :";
			?>
			<li> <?php echo $res5["Topic1"]?></li>
			<li> <?php echo $res5["Topic2"]?></li>
			<li> <?php echo $res5["Topic3"]?></li>
			<li> <?php echo $res5["Topic4"]?></li>
			<li> <?php echo $res5["Topic5"]?></li>
				

			</ul>
		</div>	
	<div class="col-10">
		<div class="welcome">
			<?php 
			if(isset($_GET['name'])) echo "Welcome ".$_GET['name'];

		?>
	</div>
		

		 <h3>What Skill Do You Want To Acquire? </h3>
	 	<p> This is a platform designed to share and gain various kinds of skills.Either you want to learn a new skill or you want to brush up your old skills, you have the oppurtunity to do both. You also have the chance to share your ability and meet others just like you! This is a platform for creating inspiration. </p> 

		<section class="hompgbtn">	
		<button id="learn" class="btn btn-lg  b" onclick="location='learn.php'"> Learn </button>
		<button id="addskill" class="btn btn-lg b" onclick="location='addskill.php'">Add Skill </button>
		<button id="updatepro"  class="btn btn-lg b" onclick="location='updateprofile.php'">Update Profile</button>
		<button id="showmsg"  class="btn btn-lg b" onclick="location='showMessage.php'">Your Messages</button>
		<button id="sendmsg"  class="btn btn-lg b" onclick="location='sendMessage.php'">Send Message</button>

	</section>

		<table class="container">
			<tr>
		       <td><img src="img/guitar.jpg" alt="guitar" width="300px" height="200px"></td>
		       <td >  <img src="img/painting.jpg" alt="painting" width="300px" height="200px"></td>
				<td > <img src="img/craft.jpg" alt="craft" width="300px" height="200px"></td>
			</tr>
			<tr>
		       <td ><img src="img/yoga.jpg" alt="yoga" width="300px" height="200px"></td>
		       <td >  <img src="img/piano.jpg" alt="piano" width="300px" height="200px"></td>
				<td > <img src="img/code.jpg" alt="code" width="300px" height="200px"></td>
			</tr>
		</table>
	
	</div>
</div>
</div>
<br>
<br>
<br>



<footer>
<?php require 'footer.html'?>
</footer>
</body>
</html>




	