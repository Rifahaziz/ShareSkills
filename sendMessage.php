 <?php require 'connect.inc.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Send Message</title>
    <link rel="stylesheet" type="text/css" href="shareskills.css">
</head>
<body>
    <?php require 'header.html'?>
<?php
    $n="select * from users";
  
    $result2=mysqli_query($con, $n); ?>
    <h2>Send Message</h2>
    <section >

                <?php
                while($row=mysqli_fetch_assoc($result2)){
                    $id = $row["user_id"];
                    $name = $row["Name"];
                    echo $name;
                    ?> 
                    <form action="sendMessage2.php" method="POST">
                        <?php        
                        echo '<input value="'.$id.'" type="hidden" name="userID" />';
                        echo '<input value="'.$name.'" type="hidden" name="userName" />';
                        ?>
                    <input value="message" type="submit" name="msgbtn" class="btn btn-success"/>
                    </form>

                    <br>
            <?php } ?>

    
    </section>
<br><br>
<br>
<br>
<?php include 'footer.html';?>
</body>
</html>


