<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Create User</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../css/bootstrap-4.4.1.css" rel="stylesheet">
    <link href="../css/site.css" rel="stylesheet">
    <link href="../css/login.css" rel="stylesheet">
</head>

<body>
    <?php include "navbar.php"; ?>  
    <div class="wrapper">
        <form action="createUser.php" class="form-user-create" method="post">
            <h2 class="form-signin-heading">User creation form</h2>
            <label>First Name:</label><input type="text" class="form-control" name="FIRSTNAME" required="" autofocus="" />
            <label class="mt-3">Last Name:</label><input type="text" class="form-control" name="LASTNAME" required="" />
            <label class="mt-3">Email:</label><input type="text" class="form-control" name="EMAIL" required="" />
            <label class="mt-3">Home address:</label><input type="text" class="form-control" name="ADDRESS" required="" />
            <label class="mt-3">Home phone:</label><input type="text" class="form-control" name="HOMEPHONE" required="" />
            <label class="mt-3">Cell phone:</label><input type="text" class="form-control" name="CELLPHONE" required="" />
            <button class="btn btn-lg loginbtn btn-block mt-5"  name="createBtn" type="submit">Create</button>
            <button type="button" class="btn btn-lg loginbtn btn-block mt-4" onclick="location.href='/cosmocast/searchUserForm.php'">Search User</button>
        </form>
    </div>

    <script src="" async defer></script>
</body>

</html>
