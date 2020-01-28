<?php

$content = $_POST['content'];
$deadline = $_POST['deadline'];
insertData($content, $deadline);


// INSERT DATA IN DB
function insertData($content, $deadline) {   
    
    var_dump("jumped in method...");
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "torg";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    var_dump("created conn variable...");
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

    
    // dd("HALLO");
    $sql = "INSERT INTO torg.todos (content, deadline) VALUES ('" . $_POST['content'] . "', '" . $_POST['deadline'] . "')";
    var_dump($sql);

    $conn->query($sql);

    $conn->close();

    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    var_dump("created conn variable...");
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

    $sql = "SELECT id, content, done, deadline FROM torg.todos";


    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo " Nr: " . $row["id"]. " " . $row["content"]. " Erledigt? " . $row["done"].  " Fällig am: " .$row["deadline"]. "<br>";
        }
    } else {
        echo "0 results";
    }

    $conn->close();
    
}

?>