<?php
$myfile = fopen("data/newfile.txt", "a") or die("Unable to open file!");
$txt = "John Doe\n";
fwrite($myfile, $txt);
$txt = "Jane De0\n";
fwrite($myfile, $txt);
fclose($myfile);
?>