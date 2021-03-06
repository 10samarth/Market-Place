<?php 
require_once "../cookie.php";
set_pages_cookie('product1.php');
update_pages_cookie('product1.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cosmocast</title>
    <link href="../../css/bootstrap-4.4.1.css" rel="stylesheet">
    <link href="../../css/site.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>
   
    <?php include "navbar-branch.php"; ?>
    <section class="container sectionSeperator  cardSite">
        <div class="col-12 text-center">
            <h1>High Quality SAR Data</h1>
        </div>

        <div class="row mt-5">
            <div class="col-md-5 col-sm-12 col-xs-12">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100 carImg" src="/images/sar.jpeg" >
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100 carImg" src="/images/ppe.png">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100 carImg"  src="/images/uf.jpeg">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>

            <div class="col-md-6 col-md-offset-1 col-sm-12 col-xs-12">
              
                In our new Spotlight or "Spot" imaging mode, we have the highest quality commercial SAR images
                currently on the market, with a resolution of 50 cm x 50 cm. Our Spot product is a customized mode
                that allows for extended exposures over a specific area of interest (AOI) and produces stunning SAR
                pictures. Our satellites are stationed above an AOI for a lengthy period of time to acquire this new
                50 cm x 50 cm imagery. Consider it similar to using a lengthy exposure on your digital camera to
                collect more light into your sensor. Except we're conducting a long exposure while going through
                space at 7.5 km per second, and we're looking at a single place on Earth. Our satellites were
                created with this in mind capability to dwell on a single location for as long as 60 seconds.
               
            </div>
        </div>
    </section>

    <?php 
    $productName = 'product1';
    include('../Components/ratings.php');
    ?>
</body>

</html>