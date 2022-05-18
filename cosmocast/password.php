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
<?php include "navbar.php"; ?>  
<div class="container sectionSeperator">
    <?php
    extract($_POST);

    if (!$USERNAME || !$PASSWORD) {
        fieldsblank();
        die();
    }

    if (isset($logMeIn)) {
        if (!($file = fopen("password_store.php", "r"))) {
            print "<title>Error</title></head>
            <body>Could not open password file
            </body></html>";
            die();
        }

        $userverified = 0;
        while (!feof($file) && !$userverified) {
            $line = fgets($file, 255);
            $line = chop($line);
            $field = explode(",", $line, 2);
            if ($USERNAME == $field[0]) {
                $userverified = 1;
                if (checkpassword($PASSWORD, $field) == true) {
                    accessGranted($USERNAME);
                } else {
                    wrongpassword();
                }
            }
        }
        fclose($file);

        if (!$userverified) {
            accessDenied();
        }
    }

    function checkPassword($userpassword, $filedata)
    {
        if ($userpassword == $filedata[1]) {
            return true;
        } else {
            return false;
        }
    }

    function accessGranted($name)
    {
        echo "<script>
                    alert('Permission has been granted, $name.');
                    window.location.href='/cosmocast/contacts.php';
                </script>";
    }

    function wrongpassword()
    {
        print "<title>Access Denied</title></head>
            <body style = \"font-family\": arial;
            font-size: lem; color: red\">
            <strong>You entered an invalid
            password. <br />Access has
            been denied.</strong>";
    }

    function accessDenied()
    {
        print "<div class="."wrapper mt-5"."><title>Access Denied</title></head>
            <body style = \"font-family\": arial:
            font-size: lem: color: red \">
            <strong> You were denied access to this server.
            <br /></strong></div>";
    }

    function fieldsBlank()
    {
        print "<title>Access Denied</title></head>
            <body style = \"font-family\": arial;
            font-size: lem; color: red\">
            <strong>Please fill in all form fields.
            <br /></strong>";
    }
    ?>

<button type="button" class="btn primeBtn navbar-btn login-btn"  onclick="location.href='/cosmocast/login.php'">Back</button>
</div>
</html>
