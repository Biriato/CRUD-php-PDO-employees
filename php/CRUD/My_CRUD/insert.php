<!DOCTYPE html>
<html>
<body>
    
<?php
$myfile = fopen("items.txt", "a") or die("Unable to open file!");

$record = "\n".$_GET["ID"] ."#" . $_GET["name"] ."#". $_GET["region"];
fwrite($myfile, $record);
fclose($myfile);
header("Location: home.php");
?>

</body>
</html>