<?php 
require_once "../cookie.php";
set_pages_cookie('product10.php');
update_pages_cookie('product10.php');
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
            <h1>UltraFlex</h1>
        </div>

        <div class="row mt-5">
            <div class="col-md-5 col-sm-12 col-xs-12">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100 carImg" src="/images/sat1.jpeg" >
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100 carImg" src="/images/space-bg.jpg">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100 carImg"  src="/images/he.jpeg">
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
              
            UltraFlex is a flexible-blanket solar array with an accordion fanfold that is made up of interconnected, triangular-shaped ultra-lightweight substrates (gores). Each connecting gore unfolds and becomes tensioned during deployment, forming a shallow umbrella-shaped membrane structure. All solar cell technologies are compatible with UltraFlex, including the ultra-lightweight IMM cells that are expected to be ready for flight in the near future.

Our RDA structure met or exceeded the strict standards for placement repeatability (less than 0.001 inches, 3-sigma, and more than 10 deployments) as well as thermal stability (less than 0.01 inches and 18 arcsec each axis over each orbit). The final reflector position is governed entirely by the precision of the folding struts, which is powered and controlled by a sturdy spring/damper drive mechanism that, once deployed, does not apply loading to the structure.
               
            </div>
        </div>
    </section>
</body>

</html>