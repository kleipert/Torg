<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
var_dump($_SESSION["name"]);
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="page-header">
        <h1>Guten Tag, <b><?php echo htmlspecialchars($_SESSION["email"]); ?></b>. Willkommen bei Torg.</h1>
    </div>
    <!-- <p>
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
    </p> -->
    <div class="functionsList">
        <a href="schoolclasses.php">
            <div>
                <img src="" alt="">
                <p>Klassen</p>
            </div>
        </a>
        <a href="general.php">
            <div>
                <img src="" alt="">
                <p>Allgemein</p>
            </div>
        </a>
        <a href="admin.php">
            <div>
                <img src="" alt="">
                <p>Admintools</p>
            </div>
        </a>
    </div>
</body>
</html>