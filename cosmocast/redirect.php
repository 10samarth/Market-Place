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
    <div class="wrapper">
        <div class="form-signin">
            <?php
            session_start();
            require_once '../google-api-php-client--PHP7.4/vendor/autoload.php';            
            include 'sqlDB.php';
            
            if((isset($_SESSION['UserName']) && isset($_SESSION['UserEmail']))==FALSE){
                // create Client Request to access Google API
                $client = new Google_Client();
                $client->setClientId($clientID);
                $client->setClientSecret($clientSecret);
                $client->setRedirectUri($redirectUri);
                $client->addScope("email");
                $client->addScope("profile");
                
                // authenticate code from Google OAuth Flow
                if (isset($_GET['code'])) {
                $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
                $client->setAccessToken($token['access_token']);
                
                // get profile info
                $google_oauth = new Google_Service_Oauth2($client);
                $google_account_info = $google_oauth->userinfo->get();
                $email =  $google_account_info->email;
                $name =  $google_account_info->name;
                $gid =  $google_account_info->id;

                $_SESSION["UserName"] = $name;
                $_SESSION["UserEmail"] = $email;
                $_SESSION["gid"] = $gid;

                $mysqli = new mysqli( $Host, $User, $Password, $DBName);

                $sql = "SELECT * FROM tbl_users_auth WHERE email='".$email."'";
               
                $result = $mysqli->query($sql);
              
                if(!empty($result->fetch_assoc())){
                    $sql2 = "UPDATE tbl_users_auth SET google_id='".$gid."' WHERE email='".$email."'";
                }else{
                    $sql2 = "INSERT INTO tbl_users_auth (name, email, google_id) VALUES ('".$name."', '".$email."', '".$gid."')";
                }

                $exec = $mysqli->query($sql2);
                
                $sql = "SELECT id FROM tbl_users_auth WHERE email='".$email."'";
                $result = $mysqli->query($sql);
                while($row =$result->fetch_assoc()) {
                    $user_id = $row['id'];
                }
                $_SESSION["user_id"] = $user_id;
                echo "<h2>Welcome</h2> <br>";
                echo "Name : $name <br>";
                echo "Email : $email <br>";
                echo "GId : $gid";

                // now you can use this profile info to create account in your website and make user logged in.
                } else {
                echo '<h2 class="form-signin-heading">Login using</h2>';
                echo "<a class=\"btn btn-lg loginbtn btn-block mt-3\" href='".$client->createAuthUrl()."'>Google</a>";
                

                }
            } else {
                echo "<h2>Welcome Back</h2> <br>";
                echo 'Name : '.$_SESSION["UserName"].' <br>';
                echo 'Email : '.$_SESSION["UserEmail"];
            }

            
            ?>
            <hr style="border: 1px solid; border-radius: 1px;">
            <a class="btn btn-lg btn-block loginbtn mt-3" href='/cosmocast/index.php'> Go to Home</a>
        </div>
        
    </div>
    <script src="" async defer></script>
</body>

</html>
