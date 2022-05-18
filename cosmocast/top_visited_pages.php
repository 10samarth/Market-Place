<?php 
require_once "cookie.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Cosmocast</title>
  <link href="../css/bootstrap-4.4.1.css" rel="stylesheet">
  <link href="../css/site.css" rel="stylesheet">
</head>

<body>
  <?php include "navbar.php"; ?>

    <section class="container sectionSeperator mt-5">
    <?php 
        get_top_pages_cookie();
    ?>

    </section>
</body>
</html>