<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Users</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../../css/bootstrap-4.4.1.css" rel="stylesheet">
    <link href="../../css/site.css" rel="stylesheet">
    <link href="../../css/login.css" rel="stylesheet">
</head>


<div class="container">
 <?php

 include '../sqlDB.php';
 $link = mysqli_connect( $Host, $User, $Password, $DBName);

 // Check connection
 if ($link === false) {
     die("ERROR: Could not connect. " . mysqli_connect_error());
 }

 $searchData = 'product_name' . " = '" . $productName . "';";

 $sql = "SELECT ratings,remark,usr.name  FROM tbl_users_ratings as ur inner join tbl_users_auth as usr on ur.user_id = usr.id WHERE " . $searchData;

 $result = mysqli_query($link, $sql);
 if (!$result) {
     echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
 }

 $length = mysqli_num_rows($result);

 if ($length == 0) {
     echo "No results found";
 } else {
     echo "<table class=\"contactsTbl\">";

     echo '<th style="width:60%">Review</th>';
     echo "<th>Ratings</th>";
     echo "<th>User</th>";

     while ($row = mysqli_fetch_array($result)) {
         echo "<tr>";
         echo "<td>";
         echo $row["remark"] . " ";
         echo "</td>";

         echo "<td>";
         echo $row["ratings"] . " stars";
         echo "</td>";

         echo "<td>";
         echo $row["name"] . " ";
         echo "</td>";
         echo "</tr>";
     }
     echo "</table>";
 }
 mysqli_close($link);
 ?>
    </div>
</html>