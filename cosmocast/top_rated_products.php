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
      <?php include "../cosmocast/navbar.php"; ?>
      <form method="POST" action="">
      <div class="container sectionSeperator mt-5">
         <h1>Top products in Cosmocast</h1>
         <div class="mt-5">
         Select number of products 
            <select name="limit" onchange="this.form.submit()">
                <option value="" disabled selected>Select</option>
                <option value="5">5</option>
                <option value="10">10</option>
                <option value="15">15</option>
                <option value="20">20</option>
            </select>
        </div>

        <?php
            $limit= 5;
            if(isset($_POST["limit"])){
                $limit=$_POST["limit"];
            }
        ?>

         <?php
            include '../cosmocast/sqlDB.php';
            $link = mysqli_connect( $Host, $User, $Password, $DBName);
            
            // Check connection
            if ($link === false) {
                die("ERROR: Could not connect. " . mysqli_connect_error());
            }
            
            
            $sql = "SELECT distinct product_name,product_company,ratings  FROM tbl_users_ratings order by ratings desc limit {$limit}";
            
            $result = mysqli_query($link, $sql);
            if (!$result) {
                echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
            }
            
            $length = mysqli_num_rows($result);
            
            if ($length == 0) {
                echo "No results found";
            } else {
                echo "<table class=\"contactsTbl mt-5\">";
            
                echo '<th style="width:50%">Product name</th>';
                echo "<th>Company</th>";
                echo "<th>Ratings</th>";
                echo "<th>Link</th>";
            
                while ($row = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td>";
                    echo $row["product_name"] . " ";
                    echo "</td>";
            
                    echo "<td>";
                    echo $row["product_company"];
                    echo "</td>";

                    echo "<td>";
                    echo $row["ratings"] . " stars";
                    echo "</td>";

                    echo "<td>";
                    echo '<a style="color:white" href="/cosmocast/Services/' . $row["product_name"] . '.php" >Click Me</a>';
                    echo "</td>";

                    echo "</tr>";
                }
                echo "</table>";
            }
            mysqli_close($link);
            ?>
      </div>
      </section>
      </form>

   </body>
</html>