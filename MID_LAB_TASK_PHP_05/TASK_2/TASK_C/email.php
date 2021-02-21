<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <form action="#" method="POST">
          Email: <input type="email" name="mail" value="<?php if(isset($_POST['mail'])){ echo $_POST['mail']; }?>"/><br>
         <input type="submit" name="submit" value="Submit">
        </form>
    </body>
    
</html>
