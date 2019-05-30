<!DOCTYPE html>
<html>
<head>
	<title>Messages</title>
	
</head>
<style>
#main{border:1px solid black; width:450px; height:500px; margin:24px auto;}
#messagearea{width:98%;}

</style>
<body>
	<?php 
	if(isset($_POST['submit'])){
		$msg=$_POST['msg'];
		
	}



	?>

<h2>Messages </h2>
<div id="messagearea">
	Your messages
	<div id="mymessages" >
		
	</div>
	<form id="writemessage" method="POST">
		<input type="text" style="width:400px; height:50px;" name="msg" placeholder="write your message">
		<input type="submit" name="submit" style="height:50px;" value="Send">

	</form>


<?php require('footer.html');?>
</body>
</html> 
