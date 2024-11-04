<?php

include $_SERVER['DOCUMENT_ROOT'] . "/config/index.php";

$conn = new mysqli($db_ip, $db_user, $db_pass, $db_name);

if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}

$key = "JHEUXGI";

if ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
    // Parse the incoming request data
    parse_str(file_get_contents("php://input"), $_DELETE);
    
    $id = $_DELETE['id'] ?? null;

    if($_DELETE["key"] != $key){
        echo "Hhhhhhhh";
        exit;
    }
    echo "id " . $id;
    

    if ($id) {

        mysqli_execute_query($conn, "delete from aktuelles where id = ?", [$id]);

        echo json_encode([
            "status" => "success",
            "message" => "Item with ID $id deleted."
        ]);
    } else {
        http_response_code(400); // Bad request
        echo json_encode([
            "status" => "error",
            "message" => "Invalid or missing ID."
        ]);
    }
}

$admin = isset($_GET["admin"]) && $_GET["admin"] == $key;



if ($_SERVER['REQUEST_METHOD'] === 'POST' && $admin) {

    $title = isset($_POST['title']) ? $_POST['title'] : '';
    $description = isset($_POST['description']) ? $_POST['description'] : '';
    $uploadDirectory = 'uploads/';

    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $imageTmpPath = $_FILES['image']['tmp_name'];
        $imageName = basename($_FILES['image']['name']);
        $imageExtension = pathinfo($imageName, PATHINFO_EXTENSION);
        $newImageName = uniqid('img_', true) . '.' . $imageExtension;
        $imageUploadPath = $uploadDirectory . $newImageName;
        move_uploaded_file($imageTmpPath, $imageUploadPath);
    }
    if(!isset($imageUploadPath)){
        $imageUploadPath = NULL;
    }
    echo "Image Path: " . htmlspecialchars($imageUploadPath) . "<br>";
    mysqli_execute_query($conn, "insert into aktuelles (heading, body, image) values (?, ?, ?)", [$title, $description, $imageUploadPath]);
}





$newPost = "";
if($admin){
   
    $newPost = '
<form action="index.php?admin='.$key.'" method="POST" enctype="multipart/form-data">
    <div class="card">
    
        <div class="text">

            <div>
                <label for="title">Title:</label>
                <input type="text" id="title" name="title" placeholder="Enter title" required> 
            </div>

            <div>
                <label for="description">Description:</label>
                <textarea type="text" id="description" name="description" placeholder="Enter description" required></textarea>
            </div>

            <div class="buttons">
                <button type="submit">Submit</button>
            </div>
        </div>
        
        <div class="img">
            <label for="image">Upload Image:</label>
            <input type="file" id="image" name="image" accept="image/*">
        </div>
       


    </div>
</form>            ';
}


$aktuelles = mysqli_execute_query($conn, "select * from aktuelles order by timestamp desc");



?>


<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Big Time Café</title>

    <?php include("../public/patterns/imports.php") ?>

    <link rel="stylesheet" href="/public/css/index.css" />
    <link rel="stylesheet" href="/public/css/aktuelles.css" />
    <script src="/public/js/aktuelles.js"></script>

</head>
<body>
    <?php include("../public/patterns/header.php") ?>

    <main>
        <div class="content">
            <h1>Aktuelles</h1>
            <div class="aktuelles">
                <?php echo $newPost ?>
                <?php

                    foreach($aktuelles as $beitrag){
                        
                        $imageTag = ($beitrag["image"] != NULL) ? '<img src="' . htmlspecialchars($beitrag["image"]) . '" alt="">' : '';
                        $deleteSvg = "";
                        if($admin){
                            $deleteSvg = <<<HTML
                                    <svg id="{$beitrag['id']}" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-trash3 deleteSvg" viewBox="0 0 16 16">
                                        <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47M8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5"/>
                                    </svg>
                            HTML;
                        }
                        
                        $date = new DateTime($beitrag["timestamp"]);
                        $formattedDate = $date->format('d.m.Y'); // Format as DD.MM.YYYY
                        
                        echo <<<HTML
                            <div class="card">
                                $deleteSvg
                                <div class="text">
                                    <div class="timestamp">$formattedDate</div>
                                    <h1>{$beitrag["heading"]}</h1>
                                    <p>{$beitrag["body"]}</p>
                                </div>
                                $imageTag
                            </div>
                        HTML;
                        
                        
                    }


                ?>

            </div>
        </div>
    </main>



    <?php include("../public/patterns/footer.php") ?>
</body>
</html>
