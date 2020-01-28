<?php
    
    function showTodos() {

        // GET CONTENT FROM DB
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "torg";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 


        $sql = "SELECT id, content, done, deadline FROM torg.todos";
        $result = $conn->query($sql);

        // if ($result->num_rows > 0) {
        //     // output data of each row
        //     while($row = $result->fetch_assoc()) {
        //         echo " Nr: " . $row["id"]. " " . $row["content"]. " Erledigt? " . $row["done"].  " Fällig am: " .$row["deadline"]. "<br>";
        //     }
        // } else {
        //     echo "0 results";
        // }

        $conn->close();
        return $result;

    }
?>