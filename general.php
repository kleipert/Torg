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
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <div>
            <a href="welcome.php">Zurück</a>
        </div>
    </header>
    <main>
        <div class="page-header">
            <h1>Allgemeine Funktionen</h1>
        </div>
        <a href="todos.php">
            <div>
                <img src="" alt="">
                <p>ToDo's</p>
            </div>
        </a>
        <a href="calendar.php">
            <div>
                <img src="" alt="">
                <p>Kalender</p>
            </div>
        </a>
    </main>
    <footer>
    </footer>
</body>
</html>