<!DOCTYPE html>
<html>
<body>
    
<?php
$myfile = fopen("data/users.txt", "a") or die("Unable to open file!");

$record = $_GET["ID"] ."#" . $_GET["name"] ."\n";
fwrite($myfile, $record);
fclose($myfile);

?>

</body>
</html>