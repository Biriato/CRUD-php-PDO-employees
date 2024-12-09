<!DOCTYPE html>
<html>
<body>
    
<?php

$myfile = fopen("data/users.txt", "r") or die("Unable to open file!");

while(!feof($myfile)) {
  $line = fgets($myfile);
  $data= explode("#", $line);
    echo $data[0] . "&nbsp" .  $data[1] . "<br>";
}
fclose($myfile);

?>

</body>
</html>