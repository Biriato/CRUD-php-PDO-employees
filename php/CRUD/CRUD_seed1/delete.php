<!DOCTYPE html>
<html>
<body>
    
<?php

if ($_GET["ID"]!="")
{
    $myfile = fopen("users.txt", "r") or die("Unable to open file!");
    $aux =fopen("aux.txt", "w") or die("Unable to open file!");
    while(!feof($myfile)) {
        $record = fgets($myfile);
        $fields = explode ("#", $record);
        if ($fields[0]!=$_GET["ID"])
            fwrite($aux, $record);
    }        
    fclose($myfile); 
    fclose ($aux);
    unlink("users.txt");
    rename("aux.txt","users.txt");
    header("Location: home.php");
}

?>

</body>
</html>