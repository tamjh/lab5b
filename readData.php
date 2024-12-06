<?php

function login()
{
    include("db.php");

    $con = db_con();

    $matric = $_POST["matric"] ?? null;
    $password = $_POST["pwd"] ?? null;

    $sql = "SELECT * FROM users WHERE matric = ?";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("s", $matric);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    if ($user) {
        if (password_verify($password, $user['password'])) {
            require('session.php');
            setUserSession($user['matric'], $user['name'], $user['role'], true);
            header("Location: index.php");
            exit;
        } else {
            $_SESSION['err'] = "Invalid username or password, try again.";
        }
    } else {
        $_SESSION['err'] = "Invalid username or password, try again.";
    }
}


function get()
{
    include("db.php");
    $con = db_con();
    $sql = "SELECT * FROM users ORDER BY role";
    $res = $con->query($sql);

    if ($res) {
        $data = [];
        while ($row = $res->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    } else {
        echo "Read failure";
        return null;
    }
}

function certainUser($matric)
{
    include("db.php");
    $con = db_con();

    $sql = "SELECT * FROM users WHERE matric = ?";
    $stmt = $con->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("s", $matric);
        $stmt->execute();

        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            return $result->fetch_assoc();
        } else {
            return null;
        }
    } else {
        echo "Query preparation failed: " . $con->error;
        return null;
    }
}
