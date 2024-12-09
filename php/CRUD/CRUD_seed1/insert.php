<!DOCTYPE html>
<html>
<body>
    
<?php
$myfile = fopen("users.txt", "a") or die("Unable to open file!");

$record = "\n".$_GET["ID"] ."#" . $_GET["name"];
fwrite($myfile, $record);
fclose($myfile);
header("Location: home.php");
?>

</body>
</html>