<!DOCTYPE html>
<html>
<body>
    
<?php

if ($_GET["ID"]!="")
{
    $myfile = fopen("data/users.txt", "r") or die("Unable to open file!");
    $aux =fopen("data/aux.txt", "w") or die("Unable to open file!");
    while(!feof($myfile)) {
        $record = fgets($myfile);
        $fields = explode ("#", $record);
        if ($fields[0]!=$_GET["ID"])
            fwrite($aux, $record);
    }        
    fclose($myfile); 
    fclose ($aux);
    unlink("data/users.txt");
    rename("data/aux.txt","data/users.txt");
    header("Location: home.php");
}

?>