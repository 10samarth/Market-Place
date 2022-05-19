<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cosmocast</title>
    <link href="../../css/bootstrap-4.4.1.css" rel="stylesheet">
    <link href="../../css/site.css" rel="stylesheet">
    <link href="../../css/login.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<style>
.checked {
  color: orange;
}
</style>

<body>
    <form action="../Components/post_ratings_reviews.php" method="post">
        <section class="container cardSiteComponent">
            <div class="col-12">
                <h2> Ratings</h2>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
            </div>

            <div class="col-12 mt-3">
               
            
            <?php echo'<label>Comment as '.$_SESSION["UserName"].':</label>' ?>
            <textarea
                    rows="4" cols="50"
                    class="form-control" 
                    name="remark" 
                    required="" 
                    autofocus="" ></textarea>

            <button class="btn btn-lg loginbtn btn-block mt-2"  
                    name="createBtn" 
                    type="submit">Comment</button>

            <h2 class="mt-5" > Reviews</h2>
            <?php 
                include('get_ratings_review.php');
            ?>
            </div>
        </section>
        <?php 
        echo "<input type='hidden' name='productName' value='{$productName}'>";
        echo "<input type='hidden' name='product_company' value='Cosmocast'>";
        echo "<input type='hidden' name='ratings' value='3'>";
        echo "<input type='hidden' name='user_id' value='{$_SESSION["user_id"]}'>";
        ?>
    </form>
</body>

</html>