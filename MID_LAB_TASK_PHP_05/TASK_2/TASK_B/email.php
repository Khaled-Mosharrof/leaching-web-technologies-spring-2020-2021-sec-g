<?php

	

	if(isset($_POST['submit'])){

		$email 		=  $_POST['mail'];
	

		if($email == "" )
		{
			echo "Null submission...";
		}else{
			echo "Success";
		}

	}else{
		echo 'invalid request...';
	}


?>

<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <form action="#" method="POST">
          Email: <input type="email" name="mail" value=""/><br>
         <input type="submit" name="submit" value="Submit">
        </form>
    </body>
    
</html>