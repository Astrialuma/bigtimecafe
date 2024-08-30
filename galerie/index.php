<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galerie Big Time Café</title>

    <?php include("../public/patterns/imports.php") ?>

    <link rel="stylesheet" href="/public/css/galerie.css" />
    <script src="/public/js/galerie.js"></script>

    

</head>
<body>
    <?php include("../public/patterns/header.php") ?>

    <main >

        <div class="content">

            <div class="images">
                <?php
                    $directory = './images';
                    $images = glob($directory . "/*.{jpg,jpeg,png,gif}", GLOB_BRACE);
                    
                    // Shuffle the array to display images in random order
                    shuffle($images);
                    
                    foreach($images as $image) {
                        echo '<a href="/galerie/'.$image.'" class="image-link"><img src="/galerie/'.$image.'" alt="Gallery Image"></a>';
                    }
                ?>

            
            
            </div>

            
        </div>

    </main>

    <?php include("../public/patterns/footer.php") ?>
</body>
</html>