<!DOCTYPE html>
<html>
<body>
primera linea solo<br>
<?php
//Solo muestra la primera linea 
$myfile = fopen("data/webdictionary.txt", "r") or die("Unable to open file!");
echo fgets($myfile);
fclose($myfile);
?>
<br>txt entero<br>
<?php
$myfile = fopen("data/webdictionary.txt", "r") or die("Unable to open file!");
// Output one line until end-of-file
while(!feof($myfile)) {
  echo fgets($myfile) . "<br>";
}
fclose($myfile);
?>
</body>
</html>