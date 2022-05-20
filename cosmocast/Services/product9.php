<?php 
require_once "../cookie.php";
set_pages_cookie('product9.php');
update_pages_cookie('product9.php');
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
            <h1>Typhionic</h1>
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
              
            Our monopropellant hydrazine propulsion systems are used for LEO and MEO missions on small to medium spacecraft. Standard off-the-shelf propulsion systems, as well as tailored modules for satellites weighing between 220 and 2500 kilograms, are available.
For the top stages of heavy and small launchers, we also provide Roll and Attitude Control Systems (RACS). After the launcher's solid rocket boosters are jettisoned, the RACS allows it to roll and pitch. After that, it's employed for fine control maneuvers and precise upper stage position before one or more payloads are separated.
               
            </div>
        </div>
    </section>
    <?php 
    $productName = 'product9';
    include('../Components/ratings.php');
    ?>
</body>

</html>