<?php

	

	if(isset($_POST['submit'])){

		$dob 		=  $_POST['dob'];
	

		if($dob == "" )
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
                <legend>Date of Birth</legend>
           
           <input type="date" name="dob" value="" /> <br>
           <input type="submit" name="submit" value="Submit">
        </fieldset>
        </form>
    </body>
    
</html>