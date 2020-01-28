<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Adminbereich</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="page-header">
        <h1>Admintools</h1>
    </div>
    <div class="functionsList">
        <a href="admin_schoolclasses_crud.php">
            <div>
                <img src="" alt="">
                <p>Klassen verwalten</p>
            </div>
        </a>
        <a href="admin_students_crud.php">
            <div>
                <img src="" alt="">
                <p>Schüler verwalten</p>
            </div>
        </a>
        <a href="admin_staff_crud.php">
            <div>
                <img src="" alt="">
                <p>Belegschaft verwalten</p>
            </div>
        </a>
    </div>
</body>
</html>