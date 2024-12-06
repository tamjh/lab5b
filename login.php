<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Login</title>
    <?php
    session_start();
    include("readData.php");
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        login();
    }
    ?>
    <style>
        body {
            padding: 50px 20%;
            background-color: #f8f9fa;
        }

        .alert {
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <h1 class="text-center">Login</h1>

    <?php if (isset($_SESSION['err'])): ?>
        <div class="alert alert-danger">
            <?php echo $_SESSION['err']; unset($_SESSION['err']); ?>
        </div>
    <?php endif; ?>

    <form action="#" method="post" class="form-horizontal">
        <div class="form-group">
            <label for="matric" class="control-label col-sm-2">Matric</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="matric" id="matric" placeholder="Enter matric">
            </div>
        </div>

        <div class="form-group">
            <label for="pwd" class="control-label col-sm-2">Password</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" name="pwd" id="pwd" placeholder="Enter password">
            </div>
        </div>

        <div class="form-group text-center">
            <input type="submit" class="btn btn-primary" value="Login">
        </div>
    </form>

    <div class="text-center">
        <p><a class="btn btn-warning" href="register.php">Register</a> if you have not yet signed up.</p>
    </div>
</body>

</html>
