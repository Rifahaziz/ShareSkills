<!DOCTYPE html>

<html>
<head>
	<title>LOGIN</title>
	<!--<link rel="stylesheet" type="text/css" href="shareskills.css">-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
<header>
	<h1>Share Skills</h1>	
</header>
<div class="container">
	<div class="row">
		
		<div class=" centerbody">
			<form class="loginform " action="process.php" method="POST">
			
			Username: <br>
			<input type="text" id="user" name="user"/> <br>
			Password: <br>
			<input type="password" id="pass" name="pass"/> <br> <br>
			<input type="submit" id="btn" value="Login"/>
			</form>
			<?php
				if(isset($_GET['login'])) 
					echo "Enter correct Username/Password";
			?>
			<div class="signup">
			<p>Don't have an account?</p> 
			<button class="btn btn-success"  onclick="location='signup.php'">SignUp!</button> </div>
		</div>
	
	</div>
</div>
<?php include ('footer.html') ?>
</body>
</html>