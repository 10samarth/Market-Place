<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>User</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../css/bootstrap-4.4.1.css" rel="stylesheet">
    <link href="../css/site.css" rel="stylesheet">
    <link href="../css/login.css" rel="stylesheet">
</head>
<?php include "navbar.php"; ?>  

<div class="container sectionSeperator mt-5">
    <?php

   

    extract($_POST);

    if (!$FIRSTNAME || !$LASTNAME || !$EMAIL) {
        fieldsblank();
        die();
    }

    include 'sqlDB.php';
    $link = mysqli_connect( $Host, $User, $Password, $DBName);

    // Check connection
    if ($link === false) {
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    $userData =
        "'" .
        $LASTNAME .
        "', '" .
        $FIRSTNAME .
        "', '" .
        $EMAIL .
        "', '" .
        $ADDRESS .
        "', '" .
        $HOMEPHONE .
        "', '" .
        $CELLPHONE .
        "'";

    $sql =
        'INSERT INTO tbl_Users (LastName, FirstName, Email, Home_Address, Home_phone, cell_phone) 
    VALUES (' .
        $userData .
        ")";

    if (mysqli_query($link, $sql)) {
        echo "Records inserted successfully.";
    } else {
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
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

<div>
<button type="button" class="btn loginbtn mt-4"  onclick="location.href='/cosmocast/userForm.php'">Create Another User</button>
<div>
<div>
<button type="button" class="btn loginbtn mt-4"  onclick="location.href='/cosmocast/searchUserForm.php'">Search User</button>
</div>
</div>
</html>
