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
    <?php include "navbar.php"; ?>  
    <div class="wrapper">
        <form action="password.php" class="form-signin" method="post">
            <h2 class="form-signin-heading">Please login</h2>
            <input type="text" class="form-control" name="USERNAME" placeholder="Username" required=""
                autofocus="" />
            <input type="password" class="form-control" name="PASSWORD" placeholder="Password" required="" />
            <button class="btn btn-lg loginbtn btn-block mt-3"  name="logMeIn" type="submit">Login</button>
            <div class="pt-5">
                <span style="font-style: oblique;">Demo username: admin, password: 12345</span>
            </div>
        </form>
    </div>

    <script src="" async defer></script>
</body>

</html>