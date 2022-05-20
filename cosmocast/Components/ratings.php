<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cosmocast</title>
    <link href="../../css/bootstrap-4.4.1.css" rel="stylesheet">
    <link href="../../css/site.css" rel="stylesheet">
    <link href="../../css/login.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="star.css">
</head>

<style>
.checked {
  color: orange;
}

.rating {
    display: flex;
    flex-direction: row-reverse;
    justify-content: left;
    margin-left: 1rem;
}

.rating > input{ display:none;}

.rating > label {
    position: relative;
    width: 1em;
    font-size: 1.5vw;
    color: orange;
    cursor: pointer;
}
.rating > label::before{
    content: "\2605";
    position: absolute;
    opacity: 0;
}
.rating > label:hover:before,
.rating > label:hover ~ label:before {
    opacity: 1 !important;
}

.rating > input:checked ~ label:before{
    opacity:1;
}

.rating:hover > input:checked ~ label:before{ opacity: 0.4; }


</style>

<body>
    <form action="../Components/post_ratings_reviews.php" method="post">
        <section class="container cardSiteComponent">


               
            <?php
              if((isset($_COOKIE['UserName']) && isset($_COOKIE['UserEmail']))==FALSE || $_COOKIE["UserName"] ==  "<i>Login to comment</i>"){
                echo '<i>Login to comment</i>';

              }else{
                echo ' <h2>Ratings</h2>';
                echo ' <div class="rating mt-3">';
                
                echo '<input class="fa fa-star" type="radio" name="ratings" value="5" id="5"><label for="5">☆</label>';
                echo '<input class="fa fa-star" type="radio" name="ratings" value="4" id="4"><label for="4">☆</label>';
                echo '<input class="fa fa-star" type="radio" name="ratings" value="3" id="3"><label for="3">☆</label>';
                echo '<input class="fa fa-star" type="radio" name="ratings" value="2" id="2"><label for="2">☆</label>';
                echo '<input class="fa fa-star" type="radio" name="ratings" value="1" id="1"><label for="1">☆</label>';
                echo '</div>';
                echo'<label>Comment as '.$_COOKIE["UserName"].':</label>';
                echo '<textarea rows="4" cols="50" class="form-control"  name="remark"  required="" autofocus="" ></textarea>';
                echo '<button class="btn btn-lg loginbtn btn-block mt-3"  name="createBtn" type="submit">Comment</button>';
              }
            ?>

            <h2 class="mt-5" >Other Reviews</h2>
            <?php 
                include('get_ratings_review.php');
            ?>
            </div>
        </section>
        <?php 
        echo "<input type='hidden' name='productName' value='{$productName}'>";
        echo "<input type='hidden' name='product_company' value='Cosmocast'>";
        echo "<input type='hidden' name='user_id' value='{$_COOKIE["user_id"]}'>";
        ?>
    </form>
</body>

</html>