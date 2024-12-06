<?php

include('db.php');
$con = db_con();

if (!isset($_GET['matric']) || empty($_GET['matric'])) {
    echo "Invalid or missing matric value.";
    exit;
}
$matric = $_GET['matric'];

$sql = "DELETE FROM users WHERE matric = ?";
$stmt = $con->prepare($sql);
$stmt->bind_param('s', $_GET['matric']);
$res = $stmt->execute();

if($res){
    header("Location: index.php");
} else {
    echo "Delete Failed: " . $stmt->error;
}