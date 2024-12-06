<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Update User</title>
    <?php
    include('session.php');
    isLogin();
    ?>

    <style>
        body{
            padding: 50px 20%;
            background-color: #f8f9fa;
        }
    </style>
</head>

<body>
    <?php

    include('readData.php');
    $user = certainUser($_GET['matric']);


    ?>

    <h1>Update User</h1>
    <form action="updateUser.php" method="post">
        <label for="matric">Matric</label>
        <input type="text" class="form-control" name="matric" id="matric" value="<?php echo $user['matric']; ?>"><br>

        <input type="hidden" name="originalMatric" value="<?php echo $user['matric']; ?>">

        <label for="name">Name</label>
        <input type="text" class="form-control"  name="name" id="name" value="<?php echo $user['name']; ?>"><br>

        <label for="role">Access Level</label>
        <input type="text" class="form-control"  name="role" id="role" value="<?php echo $user['role']; ?>"><br>

        <input class="btn btn-primary" type="submit" value="Submit">
        <a class="btn btn-danger" href="index.php">Cancel</a>
    </form>

</body>

</html>