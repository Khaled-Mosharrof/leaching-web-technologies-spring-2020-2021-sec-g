<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <form action="#" method="POST">
            <fieldset>
                <legend>Date of Birth</legend>
           
           <input type="date" name="dob" value="<?php if(isset($_POST['dob'])){echo $_POST['dob'];}?>" /> <br>
           <input type="submit" name="submit" value="Submit">
        </fieldset>
        </form>
    </body>
    
</html>