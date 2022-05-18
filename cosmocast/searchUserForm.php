<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Search User</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../css/bootstrap-4.4.1.css" rel="stylesheet">
    <link href="../css/site.css" rel="stylesheet">
    <link href="../css/login.css" rel="stylesheet">
</head>

<body>
    <?php include "navbar.php"; ?>  
    <div class="wrapper">
        <form action="searchUser.php" class="form-user-create" method="post">
            <h2 class="form-signin-heading">Search User</h2>
            <label>Search Text:</label><input type="text" class="form-control" name="SearchText" required="" autofocus="" />

            <label class="mt-3">Search Field:</label><br>

            <input type="radio" value="FirstName" name="SearchField" checked>
            <label>First name</label><br>

            <input type="radio" value="LastName" name="SearchField">
            <label>Last name</label><br>

            <input type="radio" value="Email" name="SearchField">
            <label>Email</label><br>

            <input type="radio" value="Home_Address" name="SearchField">
            <label>Home address</label><br>

            <input type="radio" value="cell_phone" name="SearchField">
            <label>Cell phone</label><br>

            <button class="btn btn-lg loginbtn btn-block mt-5"  name="searchBtn" type="submit">Search</button>
            <button type="button" class="btn btn-lg loginbtn btn-block mt-4"  onclick="location.href='/cosmocast/userForm.php'">Create User</button>
        </form>
    </div>

    

    <script src="" async defer></script>
</body>

</html>
