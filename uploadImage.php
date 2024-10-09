<?php

if (isset($_POST['upload'])) {
    // Directory where images will be saved
    $target_dir = "uploads/";
    
    // Get the file name and the target path
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    
    // Get file type
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    
    // Check if the file is a valid image type
    $valid_types = array("jpg", "jpeg", "png", "gif");
    if (!in_array($imageFileType, $valid_types)) {
        echo "Only JPG, JPEG, PNG & GIF files are allowed.";
        exit;
    }
    
    // Check file size (limit to 3MB)
    if ($_FILES["image"]["size"] > 3000000) {
        echo "File is too large. Maximum allowed size is 3MB.";
        exit;
    }
    
    // Check if the file already exists
    if (file_exists($target_file)) {
        echo "File already exists.";
        exit;
    }
    
    // Attempt to move the uploaded file to the server
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
        echo "The file ". basename($_FILES["image"]["name"]) ." has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
    
    // Redirect back to the gallery
    header("Location: imageGallery.php");
    exit;
}

?>
