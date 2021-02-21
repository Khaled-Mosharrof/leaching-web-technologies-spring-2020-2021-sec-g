<?php

	

	if(isset($_POST['submit'])){

		$gender 		=  $_POST['gender'];
	

		if($gender == "" )
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
            <fieldset>
                <legend>Gender</legend>
           <input type="radio" name="gender"> Male
           <input type="radio" name="gender"> Female
           <input type="radio" name="gender"> Other<br>
           <input type="submit" name="submit" value="Submit">
        </fieldset>
        </form>
    </body>
    
</html>