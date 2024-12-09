<!DOCTYPE html>
<html>
<body>
    
<?php

if ($_GET["ID"]!="")
{
    $myfile = fopen("items.txt", "r") or die("Unable to open file!");
    $aux =fopen("aux.txt", "w") or die("Unable to open file!");
    $first = true;
    while(!feof($myfile)) {
        $record = fgets($myfile);
        $fields = explode ("#", $record);
        if ($fields[0]!=$_GET["ID"]){
            fwrite($aux, ($first ?"" :"\n") . trim($record));
            $first = false;
        }
    }        
    fclose($myfile); 
    fclose ($aux);
    unlink("items.txt");
    rename("aux.txt","items.txt");
    chmod("items.txt",0o777);
    header("Location: home.php");
}

?>

</body>
</html>