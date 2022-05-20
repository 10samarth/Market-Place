<?php 
require_once "../cosmocast/cookie.php";
 if((isset($_COOKIE['UserName']) && isset($_COOKIE['UserEmail']))==FALSE || $_COOKIE["UserName"] ==  "<i>Login to comment</i>"){
  $_COOKIE["UserName"] = "<i>Login to comment</i>";
  $_COOKIE["UserEmail"] = "<i>Login to comment</i>";
  $_COOKIE["user_id"] = 0;
}
?>
<nav class="navbar navbar-expand-lg fixed-top navbar-dark">
  <div class="container-fluid">
    <a  class="fav" href="/market-place/marketplace.php"><img class="fav-navbar" src="../../images/mplt.png"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="/market-place/marketplace.php">Home <span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item active">
                  <a class="nav-link" href="/cosmocast/index.php">Cosmocast <span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item active">
                  <a class="nav-link" href="https://koushikp25.com/">Spartan travel Agency <span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item active">
                  <a class="nav-link" href="https://danielsjsu.com/company/">Ecode <span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item active">
                  <a class="nav-link" href="http://justopensourceit.com/">Justopensourceit <span class="sr-only">(current)</span></a>
                </li>
                
            </ul>
            <?php
              if((isset($_COOKIE['UserName']) && isset($_COOKIE['UserEmail']))==FALSE || $_COOKIE["UserName"] ==  "<i>Login to comment</i>"){
                echo '<button type="button" class="btn primeBtn navbar-btn login-btn"  onclick="location.href=\'/redirect.php\'">Sign in</button>';
              }else{
                echo '<a>Hi, '.$_COOKIE["UserName"].' </a>';
                echo "<a class =\"p-2\" href='/cosmocast/cls.php'> Logout</a>";
              }
            ?>
        </div>
        
    </div>
</nav> 