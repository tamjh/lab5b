<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Document</title>
    <?php
    include("readData.php");
    $users = get();
    
    include('session.php');
    isLogin();
    ?>
    <style>
        body {
            padding: 20px;
            background-color: #f8f9fa;
        }

        table {
            background-color: white;
            border-collapse: collapse;
            margin: 20px 0;
            font-size: 1rem;
            width: 100%;
        }

        th, td {
            text-align: center;
            vertical-align: middle;
        }

        th {
            background-color: #007bff;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #e9ecef;
        }

        .action-links a {
            margin: 0 5px;
            text-decoration: none;
        }

    </style>
</head>

<body>
    <div class="container">
        <?php
        if (isset($_SESSION['msg'])) {
            echo "<div class='alert alert-success'>" . $_SESSION['msg'] . "</div>";
            unset($_SESSION['msg']);
        }
        ?>

        <h2 class="text-center">User Management</h2>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Matric</th>
                    <th>Name</th>
                    <th>Level</th>
                    <th colspan="2">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($users as $user) {
                    echo "<tr>";
                    echo "<td>" . htmlspecialchars($user['matric']) . "</td>";
                    echo "<td>" . htmlspecialchars($user['name']) . "</td>";
                    echo "<td>" . htmlspecialchars($user['role']) . "</td>";
                    echo "<td class='action-links'><a class='btn btn-primary btn-sm' href='update.php?matric=" . htmlspecialchars($user['matric']) . "'>Update</a></td>";
                    echo "<td class='action-links'><a class='btn btn-danger btn-sm' href='deleteUser.php?matric=" . htmlspecialchars($user['matric']) . "'>Delete</a></td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>
