<?php include 'server.php' ?>
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
    <title>ToDos</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="js/script.js"></script>
    
</head>
<body>
    <header>
        <div>
            <a href="general.php">Zurück</a>
        </div>
    </header>
    <main>
        <p>Todo: <input type="text" name="content" value="" id="content" /></p>
        <p>Fälligkeit: <input type="datetime-local" name="deadline" value="" id="deadline" /></p> 
        <!-- <input type="submit" value="Hinzufügen" name='submit'/> -->
        <input type="submit" onclick="ajaxInsertData(content.value, deadline.value)" value="Hinzufügen"/>
        <input type="submit" value="Bearbeiten"/>

        <?php 
        $todos = showTodos();
        $i = 1;  
        foreach($todos as $todo) {
            $currentTime = new DateTime();
            $currentTime = $currentTime->format('Y-m-d H:i:s');
            if($todo['deadline'] > $currentTime){
                echo ("<p>#" . $todo["id"] . " " . $todo["content"] . " | zuerledigen bis: " . $todo["deadline"] . "</p>");
                $i = $i + 1;
            }else{
                echo ("<p style='color:red;font-weight: bold;'>#" . $todo["id"] . " " . $todo["content"] . " | zuerledigen bis: " . $todo["deadline"] . "</p>");
            }
                
        };
        ?>
    </main>
    <footer>
    </footer>
</body>
</html>