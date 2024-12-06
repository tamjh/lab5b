<?php

include('db.php');
$con = db_con();

$matric = $name = $role = null;

if (isset($_POST['matric'])) {
    $matric = $_POST['matric'];
}

if (isset($_POST['name'])) {
    $name = $_POST['name'];
}

if (isset($_POST['role'])) {
    $role = $_POST['role']; 
}

$originalMatric = $_POST['originalMatric']; 

$sql = "UPDATE users SET matric = ?, name = ?, role = ? WHERE matric = ?";
$stmt = $con->prepare($sql);
$stmt->bind_param("ssss", $matric, $name, $role, $originalMatric);

$res = $stmt->execute();

session_start();
if ($res) {
    $_SESSION['msg'] = "Updated Success!";
    header("Location: index.php");
    exit;
} else {
    echo "Update Failed: " . $stmt->error;
}
