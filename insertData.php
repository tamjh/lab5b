<?php
    include('db.php');
    $con = db_con();
    $matric = $password = $name = $role = null;

    if (isset($_POST["matric"])) {
        $matric = $_POST["matric"];
    }
    if (isset($_POST['pwd'])) {
        $password = password_hash($_POST["pwd"], PASSWORD_DEFAULT);
    }
    if (isset($_POST['name'])) {
        $name = $_POST["name"];
    }
    if (isset($_POST['name'])) {
        $role = ucfirst($_POST['role']);
    }

    $sql = "INSERT INTO users VALUES (?, ?, ?, ?)";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("ssss", $matric, $name, $password, $role);
    $res = $stmt->execute();
    if ($res) {
        echo "Insert Success";
        return header("Location: index.php");
    } else {
        echo "Insert error";
    }
