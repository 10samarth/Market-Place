<!DOCTYPE html>
<html>
   
   <head>
   <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../css/bootstrap-4.4.1.css" rel="stylesheet">
    <link href="../css/site.css" rel="stylesheet">
    <link href="../css/login.css" rel="stylesheet">
   </head>

   <body>
   <section class="container cardSiteComponent card">
            <div class="row mt-5">
            <div class="col-6">
        
            <?php
            unset($_COOKIE['UserName']);
            setcookie('UserName', '', time() - 3600, '/'); 

            unset($_COOKIE['UserEmail']);
            setcookie('UserEmail', '', time() - 3600, '/');

            unset($_COOKIE['user_id']);
            setcookie('user_id', '', time() - 3600, '/');
            
            echo"<h3> Succesfully Logged Out <h3>";
            echo "<a class=\"btn btn-lg loginbtn btn-block mt-3\" href='/market-place/marketplace.php'> Home</a>";
            ?>

            </div>
            <div class="col-6">
            <img class="card-img-top banner-mp" src="/images/mplt.png" alt="Card image cap">
            </div>
            </div>

            <section class="container">        
            <div class="col-12 text-center mt-5">
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
                     <img class="card-img-top cardMkpImg banner-mp" src="/images/stat.png" alt="Card image cap">
                     <div class="card-body">
                        <h5 class="card-title">Spartan travel Agency</h5>
                        <p class="card-text">One stop travel solution</p>
                         <?php
                         echo '<a href="https://koushikp25.com/?logout=true" class="btn primeBtn">Visit</a>';
                           ?>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row mt-5">
               <div class="col">
                  <div class="card ctheme imgShadow" style="width: 25rem;">
                     <img class="card-img-top cardMkpImg banner-mp" src="/images/ecodet.png" alt="Card image cap">
                     <div class="card-body">
                        <h5 class="card-title">Ecode</h5>
                        <p class="card-text">Products and services</p>
                        <?php
                           echo '<a href="https://danielsjsu.com/company/?logout=true" class="btn primeBtn">Visit</a>';
                           ?>
                     </div>
                  </div>
               </div>
               <div class="col">
                  <div class="card ctheme imgShadow" style="width: 25rem;">
                     <img class="card-img-top cardMkpImg banner-mp" src="/images/josit.png" alt="Card image cap">
                     <div class="card-body">
                        <h5 class="card-title">Justopensourceit</h5>
                        <p class="card-text">Get the best open source here.</p>
                        <?php
                        echo '<a href="http://justopensourceit.com/?logout=true" class="btn primeBtn">Visit</a>';
                           ?>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>

            </section>
            
      

      

   </body>
</html>
