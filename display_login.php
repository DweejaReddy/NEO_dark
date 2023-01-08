<?php
   session_start();
   $error = " ";
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      if($_POST['username'] == "neo22" && $_POST['password'] == "123") {
        $_SESSION['login_user'] = $_POST['username'];
        header("location: display_table.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>
<html>
   
   <head>
      <title>Login Page</title>
   </head>
   
   <body>
               
               <form action = "" method = "post">
                  <label>UserName  :</label><input type = "text" name = "username" /><br /><br />
                  <label>Password  :</label><input type = "password" name = "password" /><br/><br />
                  <input type = "submit" value = " Submit "/><br />
               </form>
               <?php echo $error; ?>
   </body>
</html>