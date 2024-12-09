<!DOCTYPE html>
<html>
<body>
    
<?php

if ($_GET["IDm"]!="")
{
    $myfile = fopen("items.txt", "r") or die("Unable to open file!");
    $aux =fopen("aux.txt", "w") or die("Unable to open file!");
    while(!feof($myfile)) {
        $record = fgets($myfile);
        $fields = explode ("#", $record);
        if ($fields[0]==$_GET["IDm"]){
            $line = $_GET["IDm"] . "#" . $_GET["name"] . "#". $_GET["region"];
            fwrite($aux, $line);
        }
        else{
            fwrite($aux, $record);
        }
    }        
    fclose($myfile); 
    fclose ($aux);
    unlink("items.txt");
    rename("aux.txt","items.txt");
    chmod("items.txt",0o777);
    header("Location: home.php");
}

if ($_GET["ID"]!="")
{
    $myfile = fopen("items.txt", "r") or die("Unable to open file!");
    while(!feof($myfile)) {
        $record = fgets($myfile);
        $fields = explode ("#", $record);
        if ($fields[0]==$_GET["ID"]){
            $id_founded = $fields[0];
            $name =  $fields[1];
            $reg = $fields[2];
            break;
        }
    }        
    fclose ($myfile);
    if (isset($id_founded)) { //draw the form
        ?>
            <form method="get" action="<?php $_SERVER["PHP_SELF"];?>">  
            <br>
            ID: <input type="text" name="IDm" value="<?php echo $id_founded;?>" readonly="readonly">   <br>
            Name: <input type="text" name="name" value="<?php echo $name;?>"> <br> 
            Region: <input type="text" name="region" value="<?php echo $reg;?>"> <br>             
            <input type="submit" name="submit" value="Modify">  
            </form>
        <?php
    }
}
?>

</body>
</html>