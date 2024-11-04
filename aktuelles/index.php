<?php

include $_SERVER['DOCUMENT_ROOT'] . "/config/index.php";

// Create a connection to the database
$conn = new mysqli($host, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}

$sessionid = $_COOKIE["session"];


$u = isset($_GET['u']) ? intval($_GET['u']) : null;
if($u == null){

    $result = mysqli_execute_query($conn, "select * from users where session_id = ? ", [$sessionid]);
    if ($result->num_rows > 0) {
       while ($row = $result->fetch_assoc()) {
            header("Location: ./?u=". $row["id"]);
            exit;
       }
    }else{
        header("Location: ../");
        exit;
    }


    



}

?>