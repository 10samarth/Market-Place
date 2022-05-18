<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Users</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../css/bootstrap-4.4.1.css" rel="stylesheet">
    <link href="../css/site.css" rel="stylesheet">
    <link href="../css/login.css" rel="stylesheet">
</head>
<?php include "navbar.php"; ?>  

<div class="container sectionSeperator mt-5">
    <button type="button" class="btn primeBtn navbar-btn"  onclick="location.href='/cosmocast/searchUserForm.php'">Back</button>
    </div>
<div class="container">
 <?php
 extract($_POST);

 if (!$SearchText || !$_POST["SearchField"]) {
     fieldsblank();
     die();
 }

 include 'sqlDB.php';
 $link = mysqli_connect( $Host, $User, $Password, $DBName);

 // Check connection
 if ($link === false) {
     die("ERROR: Could not connect. " . mysqli_connect_error());
 }

 $searchData = $_POST["SearchField"] . " = '" . $SearchText . "';";

 $sql = "SELECT * FROM tbl_Users WHERE " . $searchData;

 $result = mysqli_query($link, $sql);
 if (!$result) {
     echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
 }

 echo "<h1>Search Result</h1>";

 $length = mysqli_num_rows($result);

 if ($length == 0) {
     echo "No results found";
 } else {
     echo "<table class=\"contactsTbl\">";

     echo "<th>First name</th>";
     echo "<th>Last name</th>";
     echo "<th>Email</th>";
     echo "<th>Home Address</th>";
     echo "<th>Home Phone</th>";
     echo "<th>Cell phone</th>";

     while ($row = mysqli_fetch_array($result)) {
         echo "<tr>";
         echo "<td>";
         echo $row["LastName"] . " ";
         echo "</td>";

         echo "<td>";
         echo $row["FirstName"] . " ";
         echo "</td>";

         echo "<td>";
         echo $row["Email"] . " ";
         echo "</td>";

         echo "<td>";
         echo $row["Home_Address"] . " ";
         echo "</td>";

         echo "<td>";
         echo $row["Home_phone"] . " ";
         echo "</td>";

         echo "<td>";
         echo $row["cell_phone"] . " ";
         echo "</td>";
         echo "</tr>";
     }

     echo "</table>";
 }

 mysqli_close($link);

 function fieldsBlank()
 {
     print "
            <body style = \"font-family\": arial;
            font-size: lem; color: red\">
            <strong>Please fill in all form fields.
            <br /></strong>";
 }
 ?>
    </div>

    <div class="container sectionSeperator mt-3">
    <button type="button" class="btn primeBtn navbar-btn"  onclick="location.href='/cosmocast/searchUserForm.php'">Back</button>
</div>
</html>
