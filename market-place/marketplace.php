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
            <section class="container cardSiteComponent card">
            <div class="row mt-5">
            <div class="col-6">
            <h1>Market Place</h1>
                <p>Welcome to the best market place in Bay area! <br> 
                Feel free to visit any of the following companies as per your needs.</p>
                <p>Confused? Click below to visit top products in the market place</p>
                <button type="button" class="btn primeBtn mt-3" onclick="location.href='topproducts.php'">View</button>

            </div>
            <div class="col-6">
            <img class="card-img-top banner-mp" src="/images/mplt.png" alt="Card image cap">
            </div>
</div>
            </section>

            <div class="col-12 text-center mt-5">
            <h1>Member Companies</h1>
            <div class="row mt-5">
               <div class="col">
                  <div class="card ctheme imgShadow" style="width: 25rem;">
                     <img class="card-img-top cardMkpImg " src="/images/hero-logo-transp.png" alt="Card image cap">
                     <div class="card-body">
                        <h5 class="card-title">Cosmocast</h5>
                        <p class="card-text">All Space products and services</p>
                        <a href="/cosmocast/index.php" class="btn primeBtn">Visit</a>
                     </div>
                  </div>
               </div>
               <div class="col">
                  <div class="card ctheme imgShadow" style="width: 25rem;">
                     <img class="card-img-top cardMkpImg " src="/images/sky.jpeg" alt="Card image cap">
                     <div class="card-body">
                        <h5 class="card-title">Spartan travel Agency</h5>
                        <p class="card-text">One stop travel solution</p>
                        <a href="https://koushikp25.com/" class="btn primeBtn">Visit</a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row mt-5">
               <div class="col">
                  <div class="card ctheme imgShadow" style="width: 25rem;">
                     <img class="card-img-top cardMkpImg " src="/images/sar.jpeg" alt="Card image cap">
                     <div class="card-body">
                        <h5 class="card-title">Ecode</h5>
                        <p class="card-text">Products and services</p>
                        <a href="https://danielsjsu.com/company/" class="btn primeBtn">Visit</a>
                     </div>
                  </div>
               </div>
               <div class="col">
                  <div class="card ctheme imgShadow" style="width: 25rem;">
                     <img class="card-img-top cardMkpImg " src="/images/sky.jpeg" alt="Card image cap">
                     <div class="card-body">
                        <h5 class="card-title">Justopensourceit</h5>
                        <p class="card-text">Get the best open source media, software and almost everything else here.</p>
                        <a href="http://justopensourceit.com/" class="btn primeBtn">Visit</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
   </body>
</html>