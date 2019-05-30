<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>SignUp</title>
</head>
<body>
	<header>
	<h1>Share Skills</h1>
	</header>
	<form action="signing.php" method="POST">
		Name : <br>
		 <input type="text" id="name" name="name"> <br>
		Email : <br>
		<input type="text" id="email" name="email"> <br>
		Date Of Birth : <br>
		<input type="date" id="dob" name="dob"> <br>
		Password:<br>
		<input type="text" id="pass" name="pass"> <br>
		Phone: <br>
		<input type="text" id="phone" name="phone"> <br>
		<input type="submit" value="submit" id="submit"><br>
	</form>
	<button type="googlesignin" id="gs"> Sign In with Google</button>


	<?php include'footer.html';?>
</body>
</html>