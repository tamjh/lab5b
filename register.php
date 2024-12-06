<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Document</title>
    <style>
        body {
            padding: 50px 20%;
            background-color: #f8f9fa;
            text-align: center;
        }

        form{
            text-align: start;
        }
    </style>
</head>

<body>
    <h1>Register</h1>
    <form action="insertData.php" method="post">
        <label for="matric">Matric:</label>
        <input type="text" class="form-control" name="matric" id="matric"><br>

        <label for="name">Name:</label>
        <input type="text"  class="form-control" name="name" id="name"><br>

        <label for="pwd">Password:</label>
        <input type="password" class="form-control"  name="pwd" id="pwd"><br>

        <label for="role">Role:</label>
        <select name="role" id="role" class="form-control">
            <option value="lecturer">Lecturer</option>
            <option value="student">Student</option>
        </select><br>

        <input type="submit" class="btn btn-primary" value="Submit">
    </form>
</body>

</html>