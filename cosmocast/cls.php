<!DOCTYPE html>
<html>
   
   <head>
   <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../css/bootstrap-4.4.1.css" rel="stylesheet">
    <link href="../css/site.css" rel="stylesheet">
    <link href="../css/login.css" rel="stylesheet">
   </head>

   <body>
      <div class="wrapper">
        <div class="form-signin">
            <?php
            session_start();
            session_destroy();

            echo"Succesfully Logged Out";
            echo "<a class=\"btn btn-lg loginbtn btn-block mt-3\" href='/cosmocast/index.php'> Home</a>";
            ?>
         </div>
      </div>
   </body>
</html>
