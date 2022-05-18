<?php session_start(); ?>
<nav class="navbar navbar-expand-lg fixed-top navbar-dark">
  <div class="container-fluid">
    <a  class="fav" href="/cosmocast/#Home"><img src="../images/fav-b-transp.png"></a>
    <a class="navbar-brand" href="/cosmocast/#Home">Cosmocast</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                <a class="nav-link" href="/cosmocast/#Home">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="/cosmocast/#About">About</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="/cosmocast/service_homepage.php">Services</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="/cosmocast/#News">News</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="/cosmocast/#Contacts">Contacts</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="/cosmocast/userForm.php">User</a>
                </li>
            </ul>
            <?php
              if((isset($_SESSION['UserName']) && isset($_SESSION['UserEmail']))==FALSE){
                echo '<button type="button" class="btn primeBtn navbar-btn login-btn"  onclick="location.href=\'/cosmocast/redirect.php\'">Sign in</button>';
              }else{
                echo '<a>Hi, '.$_SESSION["UserName"].' </a>';
                echo "<a class =\"p-2\" href='/cosmocast/cls.php'> Logout</a>";
              }
            ?>
        </div>
        
    </div>
</nav> 