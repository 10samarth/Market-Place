<?php 
require_once "../cookie.php";
set_pages_cookie('product3.php');
update_pages_cookie('product3.php');
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
            <h1>Space exploration SAMPLR 320</h1>
        </div>

        <div class="row mt-5">
            <div class="col-md-5 col-sm-12 col-xs-12">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100 carImg" src="/images/he.jpeg" >
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100 carImg" src="/images/space-bg.jpg">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100 carImg"  src="/images/sar.jpeg">
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
              
            We design the infrastructure and technologies that enable humanity's reach beyond Earth, from satellites and spacecraft systems to agile robotics. As we look to missions that are further away from home and manned by humans, the term "sustainability" takes on new significance. For transport, communication, and survival beyond low Earth orbit, new technologies are required. Our knowledge of electric propulsion is essential for transporting huge equipment over great distances.
               
            </div>
        </div>
    </section>
</body>

</html>