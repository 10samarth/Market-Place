<!DOCTYPE html>
<html lang="en">
   <body>
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
                echo "<table id=\"table_id_cp\" class=\"contactsTbl mt-5\">";
                echo "<thead>";
                echo "<tr>";
                echo '<th style="width:50%">Product name</th>';
                echo "<th>Company</th>";
                echo "<th>Ratings</th>";
                echo "<th>Link</th>";
                echo "</tr>";
                echo "<tbody>";
            
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
        
            }
            mysqli_close($link);
            ?>

   </body>
</html>