<?php

    extract($_POST);
    
    print_r($_POST);
    echo $productName;
    echo $product_company;
    echo $ratings;
    echo $user_id; 
    echo $remark;

    include '../sqlDB.php';

    echo $Host;
    $link = mysqli_connect( $Host, $User, $Password, $DBName);

    // Check connection
    if ($link === false) {
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    $user_review_rating_data =
        "'" .
        $productName .
        "', '" .
        $product_company .
        "', '" .
        $ratings .
        "', '" .
        $user_id .
        "', '" .
        $remark .
        "'" ;

    $sql =
        'INSERT INTO tbl_users_ratings (product_name, product_company, ratings, user_id,remark) 
    VALUES (' .
        $user_review_rating_data .
        ")";

    if (mysqli_query($link, $sql)) {
        echo "Records inserted successfully.";
        echo "<script>
                    window.location.href='/cosmocast/Services/".$productName.".php';
                </script>";
    } else {
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }

    mysqli_close($link);
    ?>

