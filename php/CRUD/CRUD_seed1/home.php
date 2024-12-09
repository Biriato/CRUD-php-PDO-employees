<!DOCTYPE html>
<html>
<body>
    
<?php

$myfile = fopen("users.txt", "r") or die("Unable to open file!");
echo '<a href="uploadUsers.html"> Upload users file</a> <br>';
echo '<a href="formInsert.html"> Add a record</a> <br>';

while(!feof($myfile)) {
  $line = fgets($myfile);
  $data= explode("#", $line);
    if ($data[0]!=""){
        echo $data[0] . "&nbsp" .  $data[1] . "   ";
        echo '<a href="update.php?ID=' . $data[0] . '"> Edit</a>' . "  ";
        echo '<a href="delete.php?ID=' . $data[0] . '"> Delete</a>' . '<br>';
    }
}
fclose($myfile);

?>

</body>
</html>