<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Image Gallery</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }
        .gallery {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }
        .gallery img {
            width: 200px;
            height: 200px;
            margin: 10px;
        }
        .upload-form {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

<h1>Simple Image Gallery</h1>

<form class="upload-form" action="uploadImage.php" method="POST" enctype="multipart/form-data">
    <input type="file" name="image" accept="image/jpeg, image/png, image/gif" required>
    <button type="submit" name="upload">Upload Image</button>
</form>

<div class="gallery">
    <?php
    // Directory where images are stored
    $dir = 'uploads/';

    // Fetch all image files from the directory
    if (is_dir($dir)) {
        $images = array_diff(scandir($dir), array('..', '.'));
        foreach ($images as $image) {
            echo '<img src="'.$dir.$image.'" alt="Image">';
        }
    }
    ?>
</div>

</body>
</html>
