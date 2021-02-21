
<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <form action="#" method="POST">
            <fieldset>
                <legend>Gender</legend>
           <input type="radio" name="gender"value="<?php if(isset($_POST['gender'])){echo $_POST['gender'];}?>" /> Male
           <input type="radio" name="gender"value="<?php if(isset($_POST['gender'])){echo $_POST['gender'];}?>" /> Female
           <input type="radio" name="gender" value="<?php if(isset($_POST['gender'])){echo $_POST['gender'];}?>" /> Other   <br>
           <input type="submit" name="submit"  value="Submit">
        </fieldset>
        </form>
    </body>
    
</html>