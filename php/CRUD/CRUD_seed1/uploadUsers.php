<?php
$target_file = "users.txt";

// check if the file already exists
if (file_exists($target_file)){
    unlink($target_file);
}

if (move_uploaded_file($_FILES["fileUsers"]["tmp_name"],$target_file)){
    header("Location: home.php");
}
else {
    echo "General error ";
}
?>