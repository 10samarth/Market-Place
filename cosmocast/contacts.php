<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Contacts</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../css/bootstrap-4.4.1.css" rel="stylesheet">
    <link href="../css/login.css" rel="stylesheet">
    <link href="../css/site.css" rel="stylesheet">
</head>
<?php include "navbar.php"; ?>  

<div class="container sectionSeperator mt-5">
    <a class="btn primeBtn btnShadow  mt-4" href='contacts.php?getAllCompanyContacts=true'>Show Other Companies Contact</a>
    <button type="button" class="btn primeBtn navbar-btn mt-4"  onclick="location.href='/cosmocast/contacts.php'" style="margin-left: 20px;">Back</button>
</div>
<div class="container sectionSeperator">
<br>
<h2>Contacts</h2>
<?php
    echo "<table class=\"contactsTbl\">";
 
    $fn = fopen("../content-text/contacts.txt", "r");
    echo "<th>Name</th>";
    echo "<th>Contact no.</th>";
    echo "<th>Address</th>";

    while (!feof($fn)) {
        echo"<tr>";
        $result = fgets($fn);
        $field = explode("|", $result, 3 );
        foreach($field as $value) {
            echo "<td>$value</td>";
        }
        echo"</tr>";
    }
 
    echo "</table>";
?>
<?php include "curl.php"; ?>  
</div>
