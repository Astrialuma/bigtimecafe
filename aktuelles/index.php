<?php

include $_SERVER['DOCUMENT_ROOT'] . "/config/index.php";

$conn = new mysqli($db_ip, $db_user, $db_pass, $db_name);

if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}


/*

$u = isset($_GET['u']) ? intval($_GET['u']) : null;
if($u == null){

    $result = mysqli_execute_query($conn, "select * from users where session_id = ? ", [$sessionid]);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            header("Location: ./?u=". $row["id"]);
            exit;
        }
    }
    
}
*/



$result = mysqli_execute_query($conn, "select * from aktuelles ");



?>